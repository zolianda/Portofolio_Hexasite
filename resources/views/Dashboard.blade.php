<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HexaSite - Digital Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7ff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }

        .logo span {
            font-size: 12px;
            color: #777;
            margin-left: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #6928f7;
        }

        .contact-btn {
            background-color: #6928f7;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .contact-btn:hover {
            background-color: #5a1fe0;
            color: white;
        }

        /* Hero Section */
        .hero {
            padding: 80px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(rgba(232, 234, 246, 0.5), rgba(232, 234, 246, 0.5)),
                url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB4PSIwIiB5PSIwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgZmlsbD0icmdiYSgxMDUsMTA1LDI1NSwwLjA1KSI+PC9yZWN0PjwvcGF0dGVybj48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSI+PC9yZWN0Pjwvc3ZnPg==');
        }

        .hero-content {
            max-width: 500px;
        }

        .hero h2 {
            font-size: 42px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .hero h2 span {
            color: #6928f7;
            display: block;
        }

        .hero p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
        }

        .primary-btn {
            background-color: #6928f7;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .primary-btn:hover {
            background-color: #5a1fe0;
        }

        .secondary-btn {
            background-color: white;
            color: #333;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }

        .secondary-btn:hover {
            background-color: #f5f5f5;
            border-color: #ccc;
        }

        .hero-image {
            width: 45%;
            max-width: 500px;
        }

        .browser-mockup {
            border-radius: 6px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .browser-header {
            background-color: #f5f5f5;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .browser-dots {
            display: flex;
            gap: 6px;
            margin-bottom: 5px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .dot-red {
            background-color: #ff6058;
        }

        .dot-yellow {
            background-color: #ffbd2e;
        }

        .dot-green {
            background-color: #28ca41;
        }

        .browser-content {
            padding: 20px;
        }

        .placeholder-line {
            height: 12px;
            background-color: #e8eaf6;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .placeholder-line.large {
            width: 80%;
        }

        .placeholder-line.medium {
            width: 60%;
        }

        .placeholder-button {
            height: 30px;
            width: 120px;
            background-color: #6928f7;
            border-radius: 4px;
            margin: 20px 0;
        }

        .placeholder-blocks {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .placeholder-block {
            height: 60px;
            background-color: #f5f5f5;
            border-radius: 4px;
            flex: 1;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            color: #333;
            margin-bottom: 50px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(105, 40, 247, 0.1);
        }

        .service-icon {
            margin-bottom: 20px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-icon svg {
            color: #6928f7;
            width: 30px;
            height: 30px;
        }

        .service-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .service-description {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }

        /* Projects Section */
        .projects {
            padding: 80px 0;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .project-card {
            background-color: #f9faff;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(105, 40, 247, 0.1);
        }

        .project-image {
            height: 160px;
            background-color: #e8eaf6;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6928f7;
            font-size: 24px;
            font-weight: bold;
        }

        .project-content {
            padding: 25px;
        }

        .project-title {
            font-size: 20px;
            font-weight: 600;
            color: #6928f7;
            margin-bottom: 10px;
        }

        .project-description {
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .project-tag {
            background-color: #e8eaf6;
            color: #6928f7;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        /* CTA Section */
        .cta {
            background-color: #6928f7;
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 10px;
            margin: 0 20px 80px;
        }

        .cta h3 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .cta p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .cta-button {
            background-color: white;
            color: #6928f7;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            transition: all 0.3s;
        }

        .cta-button:hover {
            background-color: #f5f5f5;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Zoom Controls */
        .zoom-controls {
            position: fixed;
            right: 20px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .zoom-btn {
            width: 40px;
            height: 40px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .zoom-btn:hover {
            background-color: #f5f5f5;
        }

        /* Responsive Design */
        @media (max-width: 992px) {

            .services-grid,
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                gap: 40px;
                text-align: center;
            }

            .hero-content {
                max-width: 100%;
            }

            .cta-buttons {
                justify-content: center;
            }

            .hero-image {
                width: 80%;
            }

            .services-grid,
            .projects-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <h1>HexaSite</h1>
                    <span>Digital Solutions</span>
                </div>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Services</a>
                    <a href="#">Projects</a>
                    <a href="#">About</a>
                    <a href="#" class="contact-btn">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Transforming Ideas Into Digital <span>Experiences</span></h2>
                <p>HexaSite creates cutting-edge websites and digital solutions that help businesses thrive in the digital world.</p>
                <div class="cta-buttons">
                    <a href="#" class="primary-btn">Our Work</a>
                    <a href="#" class="secondary-btn">Get in Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="browser-mockup">
                    <div class="browser-header">
                        <div class="browser-dots">
                            <div class="dot dot-red"></div>
                            <div class="dot dot-yellow"></div>
                            <div class="dot dot-green"></div>
                        </div>
                    </div>
                    <div class="browser-content">
                        <div class="placeholder-line large"></div>
                        <div class="placeholder-line medium"></div>
                        <div class="placeholder-line large"></div>
                        <div class="placeholder-button"></div>
                        <div class="placeholder-blocks">
                            <div class="placeholder-block"></div>
                            <div class="placeholder-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">Custom websites and web applications built with modern technologies that are responsive, fast, and user-friendly.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">User-centered design that enhances usability and creates beautiful interfaces that engage and convert visitors.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                            <path d="M2 2l7.586 7.586"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                        </svg>
                    </div>
                    <h3 class="service-title">Digital Marketing</h3>
                    <p class="service-description">Strategic marketing solutions to increase your online visibility, attract more customers, and grow your business.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">BrightMart</div>
                    <div class="project-content">
                        <h3 class="project-title">BrightMart</h3>
                        <p class="project-description">E-commerce platform with inventory management, payment processing, and customer dashboard.</p>
                        <div class="project-tags">
                            <span class="project-tag">E-commerce</span>
                            <span class="project-tag">React</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">EduSmart</div>
                    <div class="project-content">
                        <h3 class="project-title">EduSmart</h3>
                        <p class="project-description">Educational platform connecting administrators, teachers, students, and parents with real-time updates.</p>
                        <div class="project-tags">
                            <span class="project-tag">Education</span>
                            <span class="project-tag">Laravel</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">HealthConnect</div>
                    <div class="project-content">
                        <h3 class="project-title">HealthConnect</h3>
                        <p class="project-description">Telemedicine app with appointment scheduling and secure video consultations for healthcare providers.</p>
                        <div class="project-tags">
                            <span class="project-tag">Healthcare</span>
                            <span class="project-tag">Flutter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="cta">
            <h3>Ready to start your project?</h3>
            <p>Let's discuss how HexaSite can help your business thrive online.</p>
            <a href="#" class="cta-button">Schedule a Consultation</a>
        </section>
    </div>

    <div class="zoom-controls">
        <div class="zoom-btn" id="zoom-in">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                <line x1="11" y1="8" x2="11" y2="14"></line>
                <line x1="8" y1="11" x2="14" y2="11"></line>
            </svg>
        </div>
        <div class="zoom-btn" id="zoom-out">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                <line x1="8" y1="11" x2="14" y2="11"></line>
            </svg>
        </div>
        <div class="zoom-btn" id="reset-zoom">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 2v6h-6"></path>
                <path d="M3 22v-6h6"></path>
                <path d="M21 2l-9 9"></path>
                <path d="M3 22l9-9"></path>
            </svg>
        </div>
    </div>

    <script>
        // Zoom functionality
        const zoomIn = document.getElementById('zoom-in');
        const zoomOut = document.getElementById('zoom-out');
        const resetZoom = document.getElementById('reset-zoom');
        let currentZoom = 1;

        zoomIn.addEventListener('click', () => {
            if (currentZoom < 1.5) {
                currentZoom += 0.1;
                document.body.style.zoom = currentZoom;
            }
        });

        zoomOut.addEventListener('click', () => {
            if (currentZoom > 0.5) {
                currentZoom -= 0.1;
                document.body.style.zoom = currentZoom;
            }
        });

        resetZoom.addEventListener('click', () => {
            currentZoom = 1;
            document.body.style.zoom = currentZoom;
        });

        // Add scroll animation for service and project cards
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        document.querySelectorAll('.service-card, .project-card').forEach(card => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });

        // Add hover effects for buttons
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('mouseenter', () => {
                link.style.transition = 'all 0.3s ease';
            });
        });

        // Mobile menu toggler (simplified for this example)
        const mobileMenuBtn = document.createElement('div');
        mobileMenuBtn.className = 'mobile-menu-btn';
        mobileMenuBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        `;
        mobileMenuBtn.style.display = 'none';
        mobileMenuBtn.style.cursor = 'pointer';

        const navLinks = document.querySelector('.nav-links');
        document.querySelector('nav').appendChild(mobileMenuBtn);

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });

        // Responsive navigation
        window.addEventListener('resize', () => {
            if (window.innerWidth <= 768) {
                mobileMenuBtn.style.display = 'block';
                navLinks.style.display = 'none';
                navLinks.style.position = 'absolute';
                navLinks.style.flexDirection = 'column';
                navLinks.style.backgroundColor = 'white';
                navLinks.style.top = '60px';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.padding = '20px';
                navLinks.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
                navLinks.style.zIndex = '100';
            } else {
                mobileMenuBtn.style.display = 'none';
                navLinks.style.display = 'flex';
                navLinks.style.position = 'static';
                navLinks.style.flexDirection = 'row';
                navLinks.style.padding = '0';
                navLinks.style.boxShadow = 'none';
            }
        });

        // Trigger resize event to set initial state
        window.dispatchEvent(new Event('resize'));
    </script>
</body>

</html>