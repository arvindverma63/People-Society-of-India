<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')

</head>

<body class="index-page">

    @include('website.partials.navbar')

    <main class="main">

        <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>
          Home
          /
          Contact
        </p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="contact" class="contact py-5">
        <div class="container">
            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
            </div>

            <div class="row gy-4 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3 class="mb-4">Get in Touch</h3>
                        <p class="mb-4">Feel free to reach out to us for any inquiries or assistance. We're here to help!</p>

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt"></i>
                            <div>
                                <h5>Location:</h5>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope"></i>
                            <div>
                                <h5>Email:</h5>
                                <p>info@example.com</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-phone"></i>
                            <div>
                                <h5>Call:</h5>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mt-3">
                            <textarea name="message" rows="6" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3>Subscribe To Our Newsletter</h3>
                    <p>Stay updated with the latest news and exclusive offers!</p>
                </div>
                <div class="col-lg-6">
                    <form action="forms/newsletter.php" class="form-subscribe d-flex">
                        <input type="email" name="email" class="form-control me-2" placeholder="Enter your e-mail" required>
                        <button type="submit" class="btn btn-secondary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    </main>

    @include('website.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('website.partials.js')

</body>

</html>
