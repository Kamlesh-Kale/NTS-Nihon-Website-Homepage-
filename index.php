<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NTS Website Redesign</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="logo-img" />
            <span class="logo-text">NTS Website Redesign</span>
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#careers">Careers</a>
            <a href="#contact">Contact</a>
            <a href="#blog">Blog</a>
        </nav>
        <div class="language-dropdown">
            <button id="lang-btn"><i class='bx bx-globe'></i> Multilingual</button>
            <div class="lang-options" id="lang-options">
                <button data-lang="English">English</button>
                <button data-lang="Spanish">Spanish</button>
                <button data-lang="French">French</button>
            </div>
        </div>
    </header>

    <section id="home" class="hero">
        <h1><strong>Innovate.</strong> <strong>Create.</strong> <strong>Elevate.</strong></h1>
        <p>Transforming your digital landscape with cutting-edge solutions<br>and visionary design.</p>
        <div class="hero-buttons">
            <a href="#services" class="btn-primary">Explore Services <i class='bx bx-right-arrow-alt'></i></a>
            <a href="#contact" class="btn-secondary">Contact Us <i class='bx bx-phone'></i></a>
        </div>
    </section>    


        <!-- What We Do Section -->
        <section class="what-we-do">
            <h2>What We Do</h2>
            <p>Our expertise spans across diverse industries, delivering tailored solutions that drive growth and innovation.</p>

            <div class="services-grid">
                <div class="service-card">
                    <img src="project.png" alt="Kaamigo Icon" class="icon">
                    <h3>Kaamigo</h3>
                    <p>Connecting skilled workers with opportunities.</p>
                    <a href="kaamigo.html" class="learn-more">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="service-card">
                    <img src="icons/tradezy.svg" alt="Tradezy Icon" class="icon">
                    <h3>Tradezy</h3>
                    <p>Streamlining global trade logistics and finance.</p>
                    <a href="tradezy.html" class="learn-more">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="service-card">
                    <img src="icons/sawari.svg" alt="Sawari Icon" class="icon">
                    <h3>Sawari</h3>
                    <p>Optimizing ride-sharing and urban mobility solutions.</p>
                    <a href="sawari.html" class="learn-more">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="service-card">
                    <img src="icons/agrowings.svg" alt="Agrowings Icon" class="icon">
                    <h3>Agrowings</h3>
                    <p>Advanced agricultural technology for sustainable farming.</p>
                    <a href="agrowings.html" class="learn-more">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="service-card">
                    <img src="icons/urban-utility.svg" alt="Urban Utility Icon" class="icon">
                    <h3>Urban Utility</h3>
                    <p>Smart city solutions for efficient resource management.</p>
                    <a href="urban-utility.html" class="learn-more">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <div class="service-card">
                    <img src="icons/digital-enablement.svg" alt="Digital Enablement Icon" class="icon">
                    <h3>Digital Enablement</h3>
                    <p>Empowering businesses with cutting-edge digital tools.</p>
                    <a href="digital-enablement.html" class="learn-more">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </section>

        <!-- About NTS Website Section -->
        <section class="about-nts">
            <div class="about-container">
                <div class="about-image">
                    <img src="assets/image.png" alt="Innovation and Excellence" />
                    <h3>Innovation & Excellence</h3>
                </div>
                <div class="about-text">
                    <h2>About NTS Website Redesign</h2>
                    <p>
                        At NTS, we are dedicated to crafting exceptional digital experiences. Our expertise lies in merging innovative design with robust functionality to deliver solutions that not only look stunning but also perform flawlessly.
                    </p>
                    <h4>Why Choose Us?</h4>
                    <ul class="about-points">
                        <li><span><i class='bx bx-clipboard'></i></span> Strategic Planning & Execution</li>
                        <li><span><i class='bx bxs-award' ></i></span> Uncompromising Quality Assurance</li>
                        <li><span><i class='bx bxs-bulb' ></i></span> Creative & Innovative Design Solutions</li>
                        <li><span><i class='bx bx-globe-alt' ></i></span> Global Perspective, Local Expertise</li>
                    </ul>
                    <a href="#about-us" class="view-more">View More <i class='bx bx-list-ul' ></i></a>
                </div>
            </div>
        </section>


        <!-- Recent Creations Section -->
        <section class="recent-creations">
            <h2>Our Recent Creations</h2>
            <p>Discover a selection of our most impactful projects that showcase our versatility and commitment to excellence.</p>

            <div class="creations-grid">
                <div class="creation-card">
                    <img src="project.png" alt="Harmony House">
                    <div class="creation-info">
                        <h3>Harmony House</h3>
                        <span class="category">Residential</span>
                        <p>Modern residential home focused on space and light.</p>
                    </div>
                </div>

                <div class="creation-card">
                    <img src="projects/coffee-corner.jpg" alt="The Coffee Corner">
                    <div class="creation-info">
                        <h3>The Coffee Corner</h3>
                        <span class="category">Commercial</span>
                        <p>A cozy and modern cafe space designed for creatives.</p>
                    </div>
                </div>

                <div class="creation-card">
                    <img src="projects/paradis-hotel.jpg" alt="Paradis Hotel">
                    <div class="creation-info">
                        <h3>Paradis Hotel</h3>
                        <span class="category">Hospitality</span>
                        <p>Luxury retreat with seamless architecture and aesthetics.</p>
                    </div>
                </div>

                <div class="creation-card">
                    <img src="projects/neuwave-offices.jpg" alt="NeuWave Offices">
                    <div class="creation-info">
                        <h3>NeuWave Offices</h3>
                        <span class="category">Corporate</span>
                        <p>Smart office spaces with ergonomic designs and tech integration.</p>
                    </div>
                </div>

                <div class="creation-card">
                    <img src="projects/tranquil-spa.jpg" alt="Tranquil Tides Spa">
                    <div class="creation-info">
                        <h3>Tranquil Tides Spa</h3>
                        <span class="category">Wellness</span>
                        <p>Holistic spa environment to promote health and relaxation.</p>
                    </div>
                </div>

                <div class="creation-card">
                    <img src="projects/charming-cottage.jpg" alt="Charming Cottage">
                    <div class="creation-info">
                        <h3>Charming Cottage</h3>
                        <span class="category">Residential</span>
                        <p>Rustic charm blended with modern living convenience.</p>
                    </div>
                </div>
            </div>

            <div class="projects-button">
                <a href="https://externalwebsite.com/projects" class="view-all-projects" target="_blank">View All Projects <i class='bx bx-list-ul' ></i></a>
            </div>
        </section>



        <!-- Client Reviews and Testimonials Section -->
        <section class="testimonials-section">
            <h2>What Our Clients Say</h2>
            <p>Hear directly from those who have experienced the NTS difference.</p>

            <div class="testimonial-wrapper">
                <button class="arrow left-arrow" id="scrollLeft"><i class='bx bxs-left-arrow'></i></button>

                <div class="testimonial-container" id="testimonialContainer">
                    <div class="testimonial-card">
                        <p class="review">"NTS transformed our vision into reality"</p>
                        <div class="client-info">
                            <img src="clients/william.jpg" alt="William King" />
                            <div>
                                <h4>William King</h4>
                                <span>CEO, Tech Solutions</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="review">"The professionalism and dedication from NTS were unmatched."</p>
                        <div class="client-info">
                            <img src="clients/angel.jpg" alt="Angel Gomez" />
                            <div>
                                <h4>Angel Gomez</h4>
                                <span>Director, Global Innovations</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="review">"Outstanding results and unparalleled creativity!"</p>
                        <div class="client-info">
                            <img src="clients/anthony.jpg" alt="Anthony Adams" />
                            <div>
                                <h4>Anthony Adams</h4>
                                <span>Founder, Urban Living</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="review">"Working with NTS was smooth, professional, and inspiring."</p>
                        <div class="client-info">
                            <img src="clients/sarah.jpg" alt="Sarah Chen" />
                            <div>
                                <h4>Sarah Chen</h4>
                                <span>Marketing Lead, FutureFlow</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="arrow right-arrow" id="scrollRight"><i class='bx bxs-right-arrow' ></i></button>
            </div>
        </section>



        <!-- Subscribe and Footer Section -->
        <footer class="site-footer">
            <h3>NTS Website Redesign</h3>
            <p>Stay updated with our latest news</p>

            <div class="subscribe-form">
                <input type="email" id="emailInput" placeholder="✉ Enter your email" />
                <button id="subscribeBtn">Subscribe</button>
            </div>

            <div class="footer-bottom">
                <button class="language-display" id="selectedLanguage">English</button>
                <span class="copyright"><i class='bx bx-copyright'></i> 2020 NTS Website Redesign.</span>
                <div class="social-links">
                    <a href="https://twitter.com/" target="_blank" aria-label="Twitter"><i class='bx bxl-twitter'></i></a>
                    <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn"><i class='bx bxl-linkedin-square' ></i></a>
                    <a href="https://facebook.com/" target="_blank" aria-label="Facebook"><i class='bx bxl-facebook-circle' ></i></a>
                </div>
            </div>
        </footer>


    <section id="about" class="section">About Us Section</section>
    <section id="services" class="section">Services Section</section>
    <section id="careers" class="section">Careers Section</section>
    <section id="contact" class="section">Contact Section</section>
    <section id="blog" class="section">Blog Section</section>

    <script src="script.js"></script>
</body>

</html>