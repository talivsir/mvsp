<?php
/**
 * Enquiry / Contact form handler — validates the submission, then sends it
 * by SMTP (Gmail, via PHPMailer) to ENQUIRY_TO_EMAIL. Used by both the
 * "Book Now" enquiry modal (every page) and the Contact page form.
 *
 * Expects a POST request (JSON or regular form-encoded) and always replies
 * with JSON: {"success": true|false, "message": "..."}
 */

header('Content-Type: application/json');

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/phpmailer/Exception.php';
require_once __DIR__ . '/phpmailer/PHPMailer.php';
require_once __DIR__ . '/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

function respond($success, $message) {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Invalid request method.');
}

// Accept either a JSON body (fetch with Content-Type: application/json) or
// a normal application/x-www-form-urlencoded / multipart POST.
$raw = file_get_contents('php://input');
$json = json_decode($raw, true);
$data = is_array($json) ? $json : $_POST;

function field($data, $key) {
    return isset($data[$key]) ? trim((string) $data[$key]) : '';
}

$name    = field($data, 'name');
$phone   = field($data, 'phone');
$email   = field($data, 'email');
$service = field($data, 'service');
$message = field($data, 'message');
$source  = field($data, 'source') ?: 'Website';

// Honeypot spam trap — a hidden field real users never fill in.
if (field($data, 'website') !== '') {
    respond(true, 'Thank you! We will be in touch shortly.');
}

// --- Server-side validation (name, phone, email are compulsory) ---
$errors = [];
if ($name === '' || mb_strlen($name) < 2) {
    $errors[] = 'Please enter your full name.';
}
if ($phone === '' || !preg_match('/^[0-9+()\-.\s]{7,20}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
if (!empty($errors)) {
    respond(false, implode(' ', $errors));
}

if (SMTP_PASSWORD === '') {
    error_log('send-enquiry.php: SMTP_PASSWORD is not configured in config/config.php');
    respond(false, 'Sorry, the enquiry form is not fully set up yet. Please call or email us directly.');
}

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;

    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
    $mail->addAddress(ENQUIRY_TO_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $name);
    }

    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry — ' . SITE_NAME . ($service !== '' ? ' (' . $service . ')' : '');

    $rows = [
        'Source'  => $source,
        'Name'    => $name,
        'Phone'   => $phone,
        'Email'   => $email,
        'Service' => $service !== '' ? $service : '—',
    ];

    $bodyHtml = '<div style="font-family:Arial,sans-serif;font-size:15px;color:#16212D;">';
    $bodyHtml .= '<h2 style="margin:0 0 16px;">New Website Enquiry</h2>';
    $bodyHtml .= '<table cellpadding="6" cellspacing="0" style="border-collapse:collapse;">';
    foreach ($rows as $label => $value) {
        $bodyHtml .= '<tr><td style="font-weight:bold;vertical-align:top;">' . htmlspecialchars($label) . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
    }
    $bodyHtml .= '</table>';
    if ($message !== '') {
        $bodyHtml .= '<p style="font-weight:bold;margin:20px 0 4px;">Message</p><p style="white-space:pre-wrap;margin:0;">' . nl2br(htmlspecialchars($message)) . '</p>';
    }
    $bodyHtml .= '</div>';
    $mail->Body = $bodyHtml;

    $altBody = '';
    foreach ($rows as $label => $value) {
        $altBody .= "$label: $value\n";
    }
    if ($message !== '') {
        $altBody .= "\nMessage:\n$message\n";
    }
    $mail->AltBody = $altBody;

    $mail->send();
    respond(true, 'Thank you! Your enquiry has been sent — we will contact you shortly.');
} catch (PHPMailerException $e) {
    error_log('send-enquiry.php mail error: ' . $mail->ErrorInfo);
    respond(false, 'Sorry, something went wrong sending your enquiry. Please call or email us directly.');
}
