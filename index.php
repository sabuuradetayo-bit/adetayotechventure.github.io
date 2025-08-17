<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    </head>
<body>
<header class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <h1 class="site-title">DR. A.O. JEGEDE</h1>
        </div>

        <nav class="main-navigation" role="navigation">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="index-about-p.php" class="nav-link">ABOUT</a></li>
                <li class="nav-item"><a href="index-events.php" class="nav-link">EVENTS</a></li>
                <li class="nav-item"><a href="index-gallary.php" class="nav-link">GALLERY</a></li>
                <li class="nav-item"><a href="index-contact-p.php" class="nav-link">CONTACTS</a></li>
            </ul>
        </nav>

        <button class="menu-toggle" aria-label="Toggle menu">
            <span class="menu-text">Menu</span>
            <i class="toggle-icon fas fa-bars"></i>
        </button>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay">
    <div class="mobile-menu-container">
        <button class="mobile-menu-close" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>
        <ul class="mobile-menu-list">
            <li class="mobile-menu-item">
                <a href="index.php" class="mobile-menu-link">HOME</a>
            </li>
            <li class="mobile-menu-item">
                <a href="index-about.php" class="mobile-menu-link">ABOUT</a>
            </li>
            <li class="mobile-menu-item">
                <a href="index-events.php" class="mobile-menu-link">EVENTS</a>
            </li>
            <li class="mobile-menu-item">
                <a href="index-gallary.php" class="mobile-menu-link">GALLERY</a>
            </li>
            <li class="mobile-menu-item">
                <a href="index-contact-p.php" class="mobile-menu-link">CONTACTS</a>
            </li>
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
        const mobileMenuClose = document.querySelector('.mobile-menu-close');
        const body = document.body;

        // Open mobile menu
        menuToggle.addEventListener('click', function() {
            mobileMenuOverlay.classList.add('active');
            body.style.overflow = 'hidden';
            menuToggle.classList.add('active');
        });

        // Close mobile menu
        mobileMenuClose.addEventListener('click', function() {
            mobileMenuOverlay.classList.remove('active');
            body.style.overflow = '';
            menuToggle.classList.remove('active');
        });

        // Close menu when clicking outside the menu container
        mobileMenuOverlay.addEventListener('click', function(event) {
            if (event.target === mobileMenuOverlay) {
                mobileMenuOverlay.classList.remove('active');
                body.style.overflow = '';
                menuToggle.classList.remove('active');
            }
        });

        // Close menu when clicking on a link
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenuOverlay.classList.remove('active');
                body.style.overflow = '';
                menuToggle.classList.remove('active');
            });
        });

        // Close menu when pressing Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && mobileMenuOverlay.classList.contains('active')) {
                mobileMenuOverlay.classList.remove('active');
                body.style.overflow = '';
                menuToggle.classList.remove('active');
            }
        });
    });
</script>

<div class="hero-section">
    <img src="1752575283545.jpg"alt="Dr. A.O. Jegede" class="hero-image">
    <div class="overlay">
        <div class="hero-content">
            <h1 class="animated-text">Dr. A.O. Jegede: Pioneering</h1>
            <p class="hero-subtitle">Transforming lives Through Education: Nurturing Excellence From Primary To Tertiary Levels</p>
        </div>
    </div>
    <div class="decorative-element"></div>
</div>

<div class="initiatives-section">
    <div class="container">
        <div class="section-title">
            <h2>Dr. A.O. Jegede's Transformative Initiatives</h2>
        </div>

        <div class="initiatives-grid">
            <!-- Card 1: Hilltop Schools -->
            <div class="initiative-card">
                <img src="IMG-20241018-WA0101.jpg"class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Hilltop High School</h3>
                    <p class="card-description">
                        At Hilltop High School, we believe that a well-nourished student is a successful student. Our commitment to academic excellence extends to providing a comprehensive and thoughtful nutrition program that supports the health, well-being, and learning potential of every individual.
                    </p>
                    <a href="index_hill-top.php" class="read-more">
                        READ MORE
                        <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: St. Winifred Schools -->
            <div class="initiative-card">
                <img src="slider_4.jpg"alt="St. Winifred Schools" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Winifred School of Management and Technology</h3>
                    <p class="card-description">
                      The Winifred School of Management & Technology, located in Ibadan, Oyo State, Nigeria, has emerged as a significant player in providing quality vocational, technical, and management education. Formerly known as St. Winifred Innovative Institute, it gained monotechnic status in 2024, recognized by the National Board for Technical Education (NBTE) and the Federal Ministry of Education.
                    </p>
                    <a href="https://stwinifred.com/" class="read-more">
                        READ MORE
                        <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 3: College of Banking and Finance -->
            <div class="initiative-card">
                <img src="slider_5.jpg"alt="College of Banking and Finance" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">College of Banking & Finance</h3>
                    <p class="card-description">
                     College of Banking and Finance is a specialized educational institution designed to equip students with the essential knowledge, skills, and ethical understanding needed to thrive in the dynamic and ever-evolving financial services industry. These colleges play a crucial role in developing the next generation of financial professionals who contribute to economic stability and growth. College of Banking and Finance, Ibadan, which is also with associated with the Winifred School of Management & Technology.
                    </p>
                    <a href="https://cbfibadan.com/" class="read-more">
                        READ MORE
                        <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 4: Mopelola Memorial Nursery And Primary School -->
            <div class="initiative-card">
                <img src="IMG_20230605_122707_008.jpg" alt="Mopelola Memorial Nursery And Primary School" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Mopelola Memorial Nursery And Primary School</h3>
                    <p class="card-description">
                       Mopelola Memorial Nursery And Primary School, located in Ward 4 Ifelodun/Muslim, Fatusi Ayegun, Ibadan, stands as a distinguished institution committed to providing a holistic and solid educational foundation for young learners. Since its establishment, the school has consistently aimed to produce "young women and men of character and learning," a watchword that underpins its entire approach to education.
                    <a href="https://mopelolaibadan.com.ng/" class="read-more">
                        READ MORE
                        <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 5: WINTECH IT. SOLUTION -->
            <div class="initiative-card">
                <img src="wintech.jpg" alt="WINTECH IT. SOLUTION" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">WINTECH IT. SOLUTION</h3>
                    <p class="card-description">
                         WINTECH IT. SOLUTION, in its various manifestations, typically aims to be a comprehensive technology partner for businesses, helping them navigate the complexities of modern IT to improve efficiency, security, and innovation. These companies often combine technical expertise with strategic consulting to deliver tailored solutions.
                    </p>
                    <a href="https://nigeria24.me/buwa-trading-co-ltd?utm_source=wintech-it-solution" class="read-more">
                        READ MORE
                        <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 6: Winifred Cisco Academy -->
            <div class="initiative-card">
                <img src="download.jpeg" alt="Winifred Cisco Academy" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Winifred Cisco Academy</h3>
                    <p class="card-description">
                       The Cisco Certified Network Associate (CCNA) certification is a globally recognized, industry-standard credential that validates an individual's foundational knowledge and skills in networking. The Cisco Networking Academy program structures the CCNA curriculum into a series of courses, commonly referred to as CCNA 1, CCNA 2, and CCNA 3 (or sometimes CCNAv7: Introduction to Networks, CCNAv7: Switching, Routing, and Wireless Essentials, and CCNAv7: Enterprise Networking, Security, and Automation for the current version).
                    </p>
                    <a href="https://stwinifredciscoacademy.com.ng/" class="read-more">
                        READ MORE
                        <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="news-section">
    <div class="container">
        <h1 class="section-title" style="text-align:center; font-size:50px; margin-bottom:30px;">LATEST NEWS & INSIGHTS FROM OUR NETWORK</h1>
        <div class="news-cards-grid">
            <div class="news-card">
                <img src="IMG-20250715-WA0076.jpg" alt="Hilltop High School students celebrating academic success" class="news-thumbnail">
                <div class="news-content">
                    <h3 class="news-headline">Hilltop High School Records 98% Distinction in WASSCE 2025</h3>
                    <p class="news-date">July 16, 2025</p>
                    <p class="news-excerpt">Celebrating academic excellence! Hilltop High School proudly announces exceptional results in the recently released West African Senior School Certificate Examination, showcasing our commitment to quality education.</p>
                    <a href="index_hill-top.php" class="read-more-link" target="_blank">Read More &rarr;</a>
                </div>
            </div>
            <div class="news-card">
                <img src="5.png" alt="Attendees at St. Winifred's School of Management's annual summit" class="news-thumbnail">
                <div class="news-content">
                    <h3 class="news-headline">Winifred School Of Management And Technology Is To Host Africa's Financial Innovation Summit 2025</h3>
                    <p class="news-date">July 10, 2025</p>
                    <p class="news-excerpt">Join us for a groundbreaking event! Winifred's School of Management is set to host a premier summit bringing together leaders to discuss the future of financial innovation across Africa.</p>
                    <a href="https://stwinifred.com/" class="read-more-link" target="_blank">Read More &rarr;</a>
                </div>
            </div>
            <div class="news-card">
                <img src="wintech.jpg" alt="WINTECH IT. Solution students in a cybersecurity lab" class="news-thumbnail">
                <div class="news-content">
                    <h3 class="news-headline">WINTECH IT. Solution Launches New Advanced Cybersecurity Course</h3>
                    <p class="news-date">July 05, 2025</p>
                    <p class="news-excerpt">Addressing the growing demand for cybersecurity experts, WINTECH IT. Solution introduces a comprehensive new course designed to equip professionals with cutting-edge skills and certifications.</p>
                    <a href="https://nigeria24.me/buwa-trading-co-ltd?utm_source=wintech-it-solution" class="read-more-link" target="_blank">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="all-news-button-container">
            <a href="index-button.php" class="btn">View All News & Blog</a>
        </div>
    </div>
</section>

 <div class="header-section">
        <div class="header-content">
            <h2>WHAT WE ARE UP TO</h2>
            <a href="VIEW UPCOMING EVENTS.php" class="view-events-btn">
                <i class="fas fa-calendar-alt"></i>
                <span>VIEW UPCOMING EVENTS</span>
            </a>
        </div>
    </div>

    <div class="cards-section">
        <div class="card-container">
            <div class="card">
                <h3>TRANSFORMING LIVES THROUGH EDUCATION</h3>
                <p>Dr. Jegede's educational initiatives are not merely about providing schooling; they are about strategically building the foundational human capital essential for Africa's socio-economic transformation. Just as other continental leaders invest in key sectors, Dr. Jegede invests in the minds of Africa's future, understanding that a well-educated populace is the ultimate engine for innovation, wealth creation, and sustainable development.</p>
                <a href="index-404 p.php" class="read-more">MORE +</a>
            </div>

            <div class="card">
                <h3>OUR BENEFICIARIES</h3>
                <p>Dr. Jegede directly contributes to resolving Africa's social and economic challenges. By cultivating a skilled, knowledgeable, and ethically grounded workforce, he empowers individuals to drive economic growth, foster innovation, create employment opportunities, and ultimately build more prosperous and equitable communities across the entire continent. His work is a testament to the belief that education is the most powerful tool for transformative impact in Africa.</p>
                <a href="index-404 p.php" class="read-more">MORE +</a>
            </div>

            <div class="card">
                <h3>GLOBAL PARTNERS</h3>
                <p>Dr. Jegede's transformative educational initiatives are significantly amplified through strategic collaborations with global partners. These partnerships provide invaluable resources, expertise, and international perspectives, ensuring that the educational programs remain at the forefront of global standards and best practices. By fostering these alliances, Dr. Jegede extends the reach and impact of his mission, creating a truly interconnected ecosystem for learning and development across Africa.</p>
                <a href="index-404 p.php" class="read-more">MORE +</a>
            </div>
        </div>
    </div>

<div class="testimonials-section">
    <div class="testimonials-container">
        <div class="section-header">
            <h2>What Our Community Says</h2>
            <p>Hear from our amazing community members about their experiences and success stories</p>
        </div>
        <div class="testimonials">
            <div class="testimonial-carousel">
                <!-- Testimonial 1 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Dr. Jegede's vision for education is truly transformative. His dedication to nurturing talent from the earliest stages has created a profound impact on our students' lives, equipping them not just with knowledge, but with character."</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="— Mrs. Adeola Williams.jpg"alt="Sarah Johnson" class="author-avatar">
                        <h3 class="author-name">— Mrs. Adeola Williams</h3>
                        <p class="author-role">Parent, Mopelola Memorial Nursery And Primary School</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Under Dr. Jegede's leadership, Hilltop High School has become a beacon of academic excellence. The emphasis on holistic development truly prepares students for future challenges, whether in higher education or their careers."</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="— Mr. Biodun Oladele.jpg"alt="Michael Chen" class="author-avatar">
                        <h3 class="author-name">— Mr. Biodun Oladele</h3>
                        <p class="author-role">Alumnus, Hilltop High School</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The Winifred School of Management & Technology thrives because of Dr. Jegede's commitment to practical, industry-relevant education. Our graduates are highly sought after, a testament to the quality of training provided."</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="— Dr. Ngozi Okoro.jpg"alt="Elena Rodriguez" class="author-avatar">
                        <h3 class="author-name">— Dr. Ngozi Okoro</h3>
                        <p class="author-role">Industry Partner</p>
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The College of Banking & Finance, under Dr. Jegede's guidance, has been instrumental in shaping my career. The rigorous curriculum and ethical foundation are exactly what the financial sector needs."</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="— Mr. Emeka Nnamdi.jpg"alt="James Wilson" class="author-avatar">
                        <h3 class="author-name">— Mr. Emeka Nnamdi</h3>
                        <p class="author-role">Graduate, College of Banking & Finance</p>
                    </div>
                </div>
                <!-- Testimonial 5 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Being part of the Winifred Cisco Academy has opened up incredible opportunities in IT. Dr. Jegede's foresight in investing in specialized tech education is truly preparing Africa's next generation of digital professionals."</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="— Ms. Fatima Bello.jpg"alt="Aisha Patel" class="author-avatar">
                        <h3 class="author-name">— Ms. Fatima Bello</h3>
                        <p class="author-role">Student, Winifred Cisco Academy</p>
                    </div>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="carousel-btn prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <div class="carousel-indicators">
                <div class="indicator active"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
        </div>
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">5,000+</div>
                <div class="stat-label">Active Members</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Satisfaction Rate</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">120+</div>
                <div class="stat-label">Countries</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4.9/5</div>
                <div class="stat-label">Average Rating</div>
            </div>
        </div>
        <footer class="testimonials-footer">
            <p>Join our growing community today and share your story!</p>
        </footer>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.testimonial-carousel');
    const testimonials = document.querySelectorAll('.testimonial');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const indicators = document.querySelectorAll('.indicator');

    let currentIndex = 0;
    const totalTestimonials = testimonials.length;
    let autoSlideInterval;

    // Initialize carousel
    updateCarousel();
    startAutoSlide();

    // Event listeners for manual navigation
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
        updateCarousel();
        resetAutoSlide();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalTestimonials;
        updateCarousel();
        resetAutoSlide();
    });

    // Event listeners for indicator dots
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel();
            resetAutoSlide();
        });
    });

    // Functions
    function updateCarousel() {
        // Update carousel position
        const offset = -currentIndex * 100;
        carousel.style.transform = `translateX(${offset}%)`;

        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentIndex);
        });

        // Update button states
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === totalTestimonials - 1;
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % totalTestimonials;
            updateCarousel();
        }, 5000); // Change slide every 5 seconds
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    // Pause auto-scroll when user hovers over carousel
    carousel.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });

    // Resume auto-scroll when user moves mouse away
    carousel.addEventListener('mouseleave', () => {
        startAutoSlide();
    });
});
</script>
<!-- Footer Section -->
    <footer class="edu-footer">
        <div class="edu-container">
            <div class="edu-top">
                <div class="edu-logo">
                    <div class="edu-logo-title">DR.A.O.JEGEDE</div>
                    <div class="edu-mission">
                        "Transforming lives Through Education: Nurturing Excellence From Primary To Tertiary Levels"
                    </div>
                    <div class="edu-newsletter">
                        <h3>Subscribe to Our Newsletter</h3>
                        <div class="edu-form">
                            <input type="email" placeholder="Your email address">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>

                <div class="edu-links-grid">
                    <div class="edu-links-group">
                        <h3>Academic Programs</h3>
                        <ul class="edu-links-list">
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Primary Education
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Secondary Education
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Undergraduate
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Graduate Studies
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Professional Development
                            </a></li>
                        </ul>
                    </div>

                    <div class="edu-links-group">
                        <h3>Student Resources</h3>
                        <ul class="edu-links-list">
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Admissions
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Scholarships
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Library
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Career Services
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Student Portal
                            </a></li>
                        </ul>
                    </div>

                    <div class="edu-links-group">
                        <h3>About Us</h3>
                        <ul class="edu-links-list">
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Our History
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Faculty
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Campus Life
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Research
                            </a></li>
                            <li><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M9 5l7 7-7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Contact Us
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="edu-divider"></div>

            <div class="edu-bottom">
                <div class="edu-copyright">
                    &copy; 2025 DR.A.O.JEGEDE. All Rights Reserved.
                </div>

                <div class="edu-policies">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Accessibility</a>
                    <a href="#">Sitemap</a>
                    <a href="#">Non-Discrimination Policy</a>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="edu-back-top" id="backToTop">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12 19V5M5 12l7-7 7 7" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
    </footer>

    <script>
        // Back to Top Button Functionality
        const backToTopButton = document.getElementById('backToTop');

        // Show button when user scrolls down 300px from the top
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });

        // Smooth scroll to top when button is clicked
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
    </body>
</html>
