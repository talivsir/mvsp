/**
 * Maui Vehicle Storage - Vanilla JS Interactions
 */

document.addEventListener('DOMContentLoaded', () => {

    /* --- 1. Header Scroll Effect & Progress Bar --- */
    const header = document.getElementById('siteHeader');
    const scrollBar = document.getElementById('scrollBar');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        // Header transition
        if (scrollY > 50) {
            header.classList.add('scrolled');
            header.classList.remove('transparent-top');
        } else {
            header.classList.remove('scrolled');
            header.classList.add('transparent-top');
        }

        // Scroll Progress Bar calculation
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollY / docHeight) * 100;
        if(scrollBar) scrollBar.style.width = scrollPercent + '%';
    });

    /* --- 2. Mobile Menu Toggle (Slide & Hamburger) --- */
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileSlideMenu = document.getElementById('mobileSlideMenu');
    const mobileLinks = document.querySelectorAll('.mobile-nav-links a');

    if (mobileMenuBtn && mobileSlideMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = mobileSlideMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
            // Lock/unlock body scroll when menu opens
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close menu when clicking a link
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuBtn.classList.remove('active');
                mobileSlideMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Close menu on backdrop click (clicking outside)
        document.addEventListener('click', (e) => {
            if (mobileSlideMenu.classList.contains('active') &&
                !mobileSlideMenu.contains(e.target) &&
                !mobileMenuBtn.contains(e.target)) {
                mobileMenuBtn.classList.remove('active');
                mobileSlideMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    /* --- 3. Scroll Reveal Animation via IntersectionObserver --- */
    const revealElements = document.querySelectorAll('[data-scroll-reveal]');
    
    const revealCallback = function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    };

    const revealOptions = {
        root: null,
        rootMargin: '0px 0px -100px 0px',
        threshold: 0.1
    };

    const revealObserver = new IntersectionObserver(revealCallback, revealOptions);
    
    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    /* --- 4. Parallax Effect for Images --- */
    const parallaxImages = document.querySelectorAll('.parallax-img');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        parallaxImages.forEach(img => {
            const speed = 0.15;
            img.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    /* --- 5. Mouse Move Effect on Bento Cards --- */
    const bentoCards = document.querySelectorAll('.bento-card');
    
    bentoCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    /* --- 6. Mouse Parallax Effect --- */
    const parallaxElements = document.querySelectorAll('.mouse-parallax');
    if (parallaxElements.length > 0) {
        window.addEventListener('mousemove', (e) => {
            const x = (e.clientX - window.innerWidth / 2) / 100;
            const y = (e.clientY - window.innerHeight / 2) / 100;
            
            parallaxElements.forEach(el => {
                const speed = el.getAttribute('data-speed') || 1;
                el.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
            });
        });
    }

    /* --- 6b. 3D Car — Scroll Tilt + Mouse Parallax --- */
    const carSvg = document.querySelector('.car-svg');
    const carScene = document.querySelector('.hero-car-scene');

    if (carSvg && carScene) {
        // Scroll-driven Y-axis tilt
        window.addEventListener('scroll', () => {
            const heroSection = document.getElementById('hero');
            if (!heroSection) return;
            const heroH = heroSection.offsetHeight;
            const scrollY = window.scrollY;
            // Only animate while the hero is in view
            if (scrollY < heroH) {
                const progress = scrollY / heroH; // 0 → 1
                const rotateY = progress * 20;    // tilt up to 20deg
                const rotateX = 2 + progress * 4; // slight lift
                const scale = 1 + progress * 0.04;
                carSvg.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg) scale(${scale})`;
            }
        }, { passive: true });

        // Mouse move: subtle tilt within the hero card
        carScene.addEventListener('mousemove', (e) => {
            const rect = carScene.getBoundingClientRect();
            const cx = rect.left + rect.width / 2;
            const cy = rect.top + rect.height / 2;
            const dx = (e.clientX - cx) / (rect.width / 2);  // -1 to 1
            const dy = (e.clientY - cy) / (rect.height / 2); // -1 to 1
            carSvg.style.transform = `rotateY(${dx * 10}deg) rotateX(${-dy * 6}deg) scale(1.02)`;
        });

        carScene.addEventListener('mouseleave', () => {
            carSvg.style.transform = 'rotateY(0deg) rotateX(2deg) scale(1)';
        });
    }

    /* --- 7. Hero Particles Canvas --- */
    const canvas = document.getElementById('hero-particles');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        const particleCount = 40;

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = Math.random() * 1 - 0.5;
                this.speedY = Math.random() * 1 - 0.5;
                this.opacity = Math.random() * 0.5 + 0.1;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
            }
            draw() {
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            particles = [];
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            requestAnimationFrame(animateParticles);
        }

        window.addEventListener('resize', () => {
            resizeCanvas();
            initParticles();
        });

        resizeCanvas();
        initParticles();
        animateParticles();
    }

    /* --- 8. Animated Counters --- */
    const counters = document.querySelectorAll('.stat-number');
    let hasAnimated = false;

    function animateCounters() {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const duration = 2000; // ms
            const step = target / (duration / 16); // 60fps

            let current = 0;
            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.innerText = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    }

    const statsSection = document.getElementById('wcu-stats');
    if (statsSection) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    animateCounters();
                    hasAnimated = true;
                }
            });
        }, { threshold: 0.5 });
        statsObserver.observe(statsSection);
    }

    /* --- 9. FAQ Accordion & Search --- */
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqItem = question.parentElement;
            
            // Close all other items before opening this one
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                }
            });

            faqItem.classList.toggle('active');
        });
    });

    const faqSearchInput = document.getElementById('faqSearchInput');
    const faqClearSearch = document.getElementById('faqClearSearch');
    const faqItems = document.querySelectorAll('.faq-item');
    const faqNoResults = document.getElementById('faqNoResults');

    if (faqSearchInput) {
        const filterFaqs = () => {
            const term = faqSearchInput.value.toLowerCase();
            let hasVisible = false;

            faqItems.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(term)) {
                    item.style.display = '';
                    hasVisible = true;
                } else {
                    item.style.display = 'none';
                    item.classList.remove('active');
                }
            });

            if (faqClearSearch) {
                faqClearSearch.style.display = term.length > 0 ? 'flex' : 'none';
            }

            if (faqNoResults) {
                faqNoResults.style.display = hasVisible ? 'none' : 'block';
            }
        };

        faqSearchInput.addEventListener('input', filterFaqs);

        if (faqClearSearch) {
            faqClearSearch.addEventListener('click', () => {
                faqSearchInput.value = '';
                filterFaqs();
                faqSearchInput.focus();
            });
        }
    }

    /* --- 10. Premium Timeline Scroll Animation --- */
    const timelineSection = document.querySelector('.premium-timeline-section');
    const timelineProgress = document.getElementById('timelineProgress');
    const timelineRows = document.querySelectorAll('.timeline-row');

    if (timelineSection && timelineProgress) {
        window.addEventListener('scroll', () => {
            const sectionTop = timelineSection.offsetTop;
            const sectionHeight = timelineSection.offsetHeight;
            const windowHeight = window.innerHeight;
            const scrollY = window.scrollY;

            // Calculate how far we've scrolled into the section
            // Start filling when section top is at center of viewport
            const startScroll = sectionTop - (windowHeight / 2);
            const endScroll = sectionTop + sectionHeight - (windowHeight / 2);

            if (scrollY >= startScroll && scrollY <= endScroll) {
                const percentage = ((scrollY - startScroll) / (endScroll - startScroll)) * 100;
                timelineProgress.style.height = `${percentage}%`;
            } else if (scrollY > endScroll) {
                timelineProgress.style.height = '100%';
            } else if (scrollY < startScroll) {
                timelineProgress.style.height = '0%';
            }

            // Reveal active state on markers
            timelineRows.forEach(row => {
                const rowTop = row.getBoundingClientRect().top;
                if (rowTop < windowHeight * 0.7) {
                    row.classList.add('is-visible');
                } else {
                }
            });
        });
    }

    /* --- 11. Contact Form Validation & Animation --- */
    const contactForm = document.getElementById('mainContactForm');
    if (contactForm) {
        // Initial setup for live validation
        const inputs = contactForm.querySelectorAll('.floating-input, .floating-select');
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                if (input.checkValidity()) {
                    input.closest('.floating-group').classList.remove('error');
                }
            });
            input.addEventListener('change', () => {
                if (input.checkValidity()) {
                    input.closest('.floating-group').classList.remove('error');
                }
            });
        });

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            
            inputs.forEach(input => {
                const group = input.closest('.floating-group');
                if (!input.checkValidity()) {
                    group.classList.add('error');
                    isValid = false;
                } else {
                    group.classList.remove('error');
                }
            });

            if (isValid) {
                const submitBtn = document.getElementById('submitBtn');
                const successMsg = document.getElementById('successMsg');
                
                // Add loading state
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;

                // Simulate network request (1.5s delay)
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.style.display = 'none';
                    successMsg.style.display = 'flex';
                    contactForm.reset();
                }, 1500);
            }
        });
    }

    /* --- 12. Back to Top & Newsletter --- */
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = newsletterForm.querySelector('button');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>';
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                newsletterForm.reset();
            }, 2000);
        });
    }

    /* --- 13. Preloader --- */
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.classList.add('loaded');
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 800);
        }
    });

    /* --- 14. Custom Cursor --- */
    const cursorDot = document.getElementById('cursorDot');
    const cursorRing = document.getElementById('cursorRing');
    
    if (cursorDot && cursorRing) {
        let mouseX = window.innerWidth / 2;
        let mouseY = window.innerHeight / 2;
        let ringX = mouseX;
        let ringY = mouseY;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            // Dot follows instantly
            cursorDot.style.transform = `translate(calc(${mouseX}px - 50%), calc(${mouseY}px - 50%))`;
        });

        // Ring follows with a slight delay using requestAnimationFrame
        const renderCursor = () => {
            ringX += (mouseX - ringX) * 0.2;
            ringY += (mouseY - ringY) * 0.2;
            
            cursorRing.style.transform = `translate(calc(${ringX}px - 50%), calc(${ringY}px - 50%))`;
            requestAnimationFrame(renderCursor);
        };
        requestAnimationFrame(renderCursor);

        // Hover states
        const interactables = document.querySelectorAll('a, button, input, select, textarea, .faq-question, .toggle');
        interactables.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorDot.classList.add('hovered');
                cursorRing.classList.add('hovered');
            });
            el.addEventListener('mouseleave', () => {
                cursorDot.classList.remove('hovered');
                cursorRing.classList.remove('hovered');
            });
        });
    }

    /* --- 15. Typing Effect --- */
    const typeText = document.querySelector('.type-text');
    if (typeText) {
        const textToType = typeText.getAttribute('data-type');
        let index = 0;
        let isDeleting = false;
        
        function type() {
            if (!isDeleting && index <= textToType.length) {
                typeText.textContent = textToType.substring(0, index);
                index++;
                
                if (index > textToType.length) {
                    isDeleting = true;
                    setTimeout(type, 2000); // Pause at end
                } else {
                    setTimeout(type, 100);
                }
            } else if (isDeleting && index >= 0) {
                typeText.textContent = textToType.substring(0, index);
                index--;
                
                if (index < 0) {
                    isDeleting = false;
                    setTimeout(type, 500); // Pause at start
                } else {
                    setTimeout(type, 50);
                }
            }
        }
        // Start typing after a short delay
        setTimeout(type, 1000);
    }

    /* --- 16. Image Reveal & Lazy Load --- */
    const imgRevealElements = document.querySelectorAll('.img-reveal');
    if (imgRevealElements.length > 0) {
        const imgObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -50px 0px', threshold: 0.1 });
        
        imgRevealElements.forEach(img => imgObserver.observe(img));
    }

    // Generic lazy load logic for fading in images once loaded
    const lazyImages = document.querySelectorAll('img');
    lazyImages.forEach(img => {
        img.classList.add('lazy-img');
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', () => img.classList.add('loaded'));
        }
    });

    /* --- 17. Sports Car Hero Color Picker Interactivity --- */
    const swatches = document.querySelectorAll('.sc-hero__swatch');
    const heroCar = document.getElementById('heroCar');
    const heroCarReflect = document.getElementById('heroCarReflect');

    if (swatches.length > 0 && heroCar) {
        swatches.forEach(swatch => {
            swatch.addEventListener('click', () => {
                // Remove active class from all swatches
                swatches.forEach(s => {
                    s.classList.remove('sc-hero__swatch--active');
                    s.setAttribute('aria-checked', 'false');
                });

                // Add active class to clicked swatch
                swatch.classList.add('sc-hero__swatch--active');
                swatch.setAttribute('aria-checked', 'true');

                // Determine CSS filter based on clicked swatch details
                const hue = swatch.getAttribute('data-hue') || '0';
                const sat = swatch.getAttribute('data-sat');
                const dark = swatch.getAttribute('data-dark');
                const color = swatch.getAttribute('data-color');

                let filterStyle = 'none';

                if (color === '#E01A22') {
                    // Red (Default)
                    filterStyle = 'none';
                } else if (color === '#E7B4B4') {
                    // Rose/pink - rotate hue slightly, desaturate, increase brightness
                    filterStyle = 'hue-rotate(-20deg) saturate(0.5) brightness(1.35)';
                } else if (color === '#D9D9D9') {
                    // Light Gray - desaturate completely, high brightness
                    filterStyle = 'saturate(0) brightness(1.5)';
                } else if (color === '#6b6b6b') {
                    // Medium Gray - desaturate completely, medium brightness
                    filterStyle = 'saturate(0) brightness(0.85)';
                } else if (color === '#1a1a1a') {
                    // Black - desaturate completely, very low brightness, high contrast
                    filterStyle = 'saturate(0) brightness(0.2) contrast(1.2)';
                }

                // Apply filter to car and reflection
                heroCar.style.filter = filterStyle;
                if (heroCarReflect) {
                    heroCarReflect.style.filter = `${filterStyle} scaleY(-1)`;
                }
            });
        });
    }

});
