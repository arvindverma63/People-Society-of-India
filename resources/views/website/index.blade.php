<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
</head>

<body class="index-page">

    @include('website.partials.navbar')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="assets/img/hero_1.jpg" alt="Tree Planting Campaign">
                    <div class="carousel-container">
                        <h2>Plant Trees, Breathe Life</h2>
                        <p>Trees are the lungs of the Earth. Join us in making the planet greener for future generations
                            through active tree planting initiatives.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero_2.jpg" alt="Community Gathering">
                    <div class="carousel-container">
                        <h2>Building a Sustainable Future</h2>
                        <p>Every small step counts. Be part of a community dedicated to combating climate change and
                            fostering environmental awareness.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero_3.jpg" alt="Reforestation Efforts">
                    <div class="carousel-container">
                        <h2>Together for Reforestation</h2>
                        <p>Unite with us in restoring our forests. Your participation makes a difference in creating a
                            greener, healthier world.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero_4.jpg" alt="Eco-Friendly Initiatives">
                    <div class="carousel-container">
                        <h2>Act Today for a Better Tomorrow</h2>
                        <p>Join our eco-friendly initiatives to promote sustainability and inspire positive
                            environmental change across communities.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/hero_5.jpg" alt="Green Earth Vision">
                    <div class="carousel-container">
                        <h2>Green Earth, Bright Future</h2>
                        <p>Our vision is a world where nature thrives and humanity prospers. Help us bring this dream to
                            life by planting and protecting trees.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>SERVICES</h2>
                <p>Building a Greener Tomorrow with Collective Efforts</p>
            </div><!-- End Section Title -->

            <div class="content">
                <div class="container">
                    <div class="row g-0">

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">01</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Tree Planting</h3>
                                    <p>Join us in planting trees to combat deforestation and restore balance to our
                                        environment.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">02</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Environmental Education</h3>
                                    <p>Empowering communities with knowledge to make sustainable and eco-friendly
                                        choices.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">03</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Community Cleanups</h3>
                                    <p>Organizing local clean-up drives to maintain cleanliness and protect
                                        biodiversity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">04</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Sustainable Living Workshops</h3>
                                    <p>Hosting workshops on sustainable practices to promote eco-friendly lifestyles.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">05</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Reforestation Drives</h3>
                                    <p>Conducting large-scale reforestation initiatives to rejuvenate forests and
                                        wildlife habitats.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">06</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Water Conservation</h3>
                                    <p>Promoting rainwater harvesting and efficient water usage for sustainable
                                        development.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">07</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Eco-Friendly Products</h3>
                                    <p>Encouraging the use of biodegradable and reusable products for a healthier
                                        planet.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">08</span>
                                <div class="service-item-icon">
                                    <!-- Replace with suitable SVG icon -->
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading">Green Advocacy</h3>
                                    <p>Advocating for policies and practices that prioritize environmental conservation.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="assets/img/img_long_5.jpg" alt="Image" class="img-fluid img-overlap"
                                data-aos="zoom-out">
                        </div>
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
                            <h2 class="content-title mb-4">
                                Dedicated to <strong>Environmental Sustainability</strong> and Reforestation
                            </h2>
                            <p class="opacity-50">
                                Our mission is to inspire and empower communities to create a greener and more
                                sustainable future through tree planting, education, and climate advocacy.
                            </p>

                            <div class="row my-5">
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="bi bi-cloud-rain me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">Nature's Lifeline</h4>
                                        <p class="text-white opacity-50">We focus on reforestation and water
                                            conservation for a thriving planet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="bi bi-heart me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">Community Engagement</h4>
                                        <p class="text-white opacity-50">Fostering a culture of environmental
                                            responsibility through collective action.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-start">
                                    <i class="bi bi-tree me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">Greener Future</h4>
                                        <p class="text-white opacity-50">Planting trees and nurturing ecosystems for
                                            generations to come.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <img src="assets/img/img_sq_1.jpg" alt="Image" class="img-fluid">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
                            <span class="play"><i class="bi bi-play-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="content-title mb-4">Plants Make Life Better</h2>
                        <p class="mb-4">
                            By planting trees, we breathe life into our planet, reduce carbon footprints, and restore
                            biodiversity. Together, we can make a difference and ensure a sustainable future for all.
                        </p>
                        <ul class="list-unstyled list-check">
                            <li>Promoting environmental awareness and education</li>
                            <li>Organizing community-driven reforestation campaigns</li>
                            <li>Supporting eco-friendly initiatives</li>
                        </ul>

                        <p><a href="#" class="btn-cta">Join Our Mission</a></p>
                    </div>
                </div>
            </div>
        </section><!-- /About 3 Section -->


        <!-- Services 2 Section -->
        <section id="services-2" class="services-2 section dark-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Initiatives</h2>
                <p>Empowering Communities for a Sustainable Future</p>
            </div><!-- End Section Title -->

            <div class="services-carousel-wrap">
                <div class="container">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".js-custom-next",
                "prevEl": ".js-custom-prev"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 40
                }
              }
            }
          </script>
                        <button class="navigation-prev js-custom-prev">
                            <i class="bi bi-arrow-left-short"></i>
                        </button>
                        <button class="navigation-next js-custom-next">
                            <i class="bi bi-arrow-right-short"></i>
                        </button>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Care</span>
                                            <h2 class="service-item-title">Tree Planting Drives</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_1.jpg" alt="Tree Planting" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Nurture</span>
                                            <h2 class="service-item-title">Soil Restoration</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_3.jpg" alt="Soil Restoration" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Sustain</span>
                                            <h2 class="service-item-title">Water Conservation</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_8.jpg" alt="Water Conservation" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Cultivate</span>
                                            <h2 class="service-item-title">Organic Farming</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_4.jpg" alt="Organic Farming" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Empower</span>
                                            <h2 class="service-item-title">Community Awareness</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_5.jpg" alt="Community Awareness" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Innovate</span>
                                            <h2 class="service-item-title">Eco-friendly Solutions</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_6.jpg" alt="Eco-friendly Solutions"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">We Grow</span>
                                            <h2 class="service-item-title">Urban Gardening</h2>
                                        </a>
                                    </div>
                                    <img src="assets/img/img_sq_8.jpg" alt="Urban Gardening" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section><!-- /Services 2 Section -->


        <!-- Testimonials Section -->
        <section class="testimonials-12 testimonials section" id="testimonials">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>What People Say</h2>
                <p>Voices from Our Community</p>
            </div><!-- End Section Title -->

            <div class="testimonial-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="testimonial">
                                <img src="assets/img/testimonials/testimonials-1.jpg"
                                    alt="James Miller, Community Member">
                                <blockquote>
                                    <p>
                                        “Participating in the tree plantation drive was an incredible experience.
                                        Knowing that I am contributing to a greener future fills me with pride.”
                                    </p>
                                </blockquote>
                                <p class="client-name">James Miller</p>
                                <p class="client-role">Community Member</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="testimonial">
                                <img src="assets/img/testimonials/testimonials-2.jpg" alt="Samantha Green, Volunteer">
                                <blockquote>
                                    <p>
                                        “The workshops on sustainable living organized by the People Society of India
                                        are life-changing. I've learned practical ways to reduce my carbon footprint.”
                                    </p>
                                </blockquote>
                                <p class="client-name">Samantha Green</p>
                                <p class="client-role">Volunteer</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="testimonial">
                                <img src="assets/img/testimonials/testimonials-3.jpg" alt="Arjun Mehta, Local Farmer">
                                <blockquote>
                                    <p>
                                        “Their soil restoration initiative has helped my farm immensely.
                                        My yield has improved, and I'm using fewer chemical fertilizers.”
                                    </p>
                                </blockquote>
                                <p class="client-name">Arjun Mehta</p>
                                <p class="client-role">Local Farmer</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="testimonial">
                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                    alt="Emily Carter, Environmentalist">
                                <blockquote>
                                    <p>
                                        “The People Society of India is truly making a difference.
                                        Their urban gardening program inspired me to create my own garden at home.”
                                    </p>
                                </blockquote>
                                <p class="client-name">Emily Carter</p>
                                <p class="client-role">Environmentalist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Testimonials Section -->


        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Recent Updates</h2>
                <p>Inspiring Stories & Initiatives</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="Tree Planting Drive">
                                <span class="post-date">December 12</span>
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Successful Tree Planting Drive in Kanpur</h3>
                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Community</span>
                                    </div>
                                </div>
                                <hr>
                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                    alt="Sustainable Farming Workshop">
                                <span class="post-date">July 17</span>
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Sustainable Farming Workshop Highlights</h3>
                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Education</span>
                                    </div>
                                </div>
                                <hr>
                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-3.jpg" class="img-fluid"
                                    alt="Urban Gardening Success Story">
                                <span class="post-date">September 05</span>
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Urban Gardening: A Success Story</h3>
                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Environment</span>
                                    </div>
                                </div>
                                <hr>
                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End post item -->
                </div>
            </div>
        </section><!-- /Recent Posts Section -->
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section light-background">
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3>Join Our Mission</h3>
                            <p class="opacity-50">
                                Stay updated on our latest events and initiatives. Together, we can make a difference in
                                promoting sustainability and protecting our environment.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                                <div class="form-group d-flex align-items-stretch">
                                    <input type="email" name="email" class="form-control h-100"
                                        placeholder="Enter your email">
                                    <input type="submit" class="btn btn-secondary px-4" value="Subscribe">
                                </div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Thank you for subscribing! Let's grow together.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Call To Action Section -->


    </main>
    @include('website.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('website.partials.js')

</body>

</html>
