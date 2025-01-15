<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    @include('website.partials.head')

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="bg-white">
            <div class="content">

                @include('website.partials.navbar')
                <div class="container" data-bs-target="#navbar-top" data-bs-spy="scroll" tabindex="0">
                    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-9" id="home">
                        <div>
                            <div class="row g-4 g-lg-6 g-xl-7 mb-6 mb-lg-7 mb-xl-10 align-items-center">
                                <div class="col-12 col-lg-6">
                                    <img class="img-fluid w-50 w-lg-100" src="assets/img/Hero/man_watering.png"
                                        alt="" />
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-black fw-light mb-4">Become a <span
                                            class="fw-bold">Green Advocate</span> <br
                                            class="d-sm-none d-md-block d-xxl-none" />with <span
                                            class="text-gradient fw-bold">People Society of India</span></h1>
                                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                                        Join us in our mission to promote environmental sustainability. Explore our
                                        diverse collection of plants and
                                        contribute to reforestation and climate advocacy.
                                    </p>
                                    <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Explore
                                            Catalog</span><span class="uil uil-arrow-right"></span></button>
                                </div>
                            </div>
                            <div class="row g-4 g-lg-6 g-xl-7 align-items-center">
                                <div class="col-12 col-lg-6 order-1 order-lg-0">
                                    <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold mb-x1 text-capitalize">
                                        Together, we make a difference</p>
                                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-4">No
                                        plant is too <br class="d-none d-md-block d-lg-none" /><span
                                            class="fw-bold">rare or common</span></h1>
                                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                                        From common greenery to rare treasures, our ever-growing catalog serves all
                                        plant enthusiasts. Join us in
                                        transforming our planet one plant at a time.
                                    </p>
                                    <button class="btn btn-gradient fs-8 d-inline-flex"><span>Explore
                                            Catalog</span><span class="uil uil-arrow-right"></span></button>
                                </div>
                                <div class="col-12 col-lg-6 order-0 order-lg-1">
                                    <img class="img-fluid w-50 w-lg-100" src="assets/img/Hero/planting.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mb-9 mb-lg-10 mb-xxl-11">
                        <div class="row g-4">
                            <div class="col-12 col-lg-4 text-center">
                                <img class="mb-3" src="assets/img/icons/Counter_1.png" alt="" />
                                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2 counter-delivered"
                                    data-countup='{"endValue":9124201,"autoIncreasing":true}'
                                    style="font-variant-numeric: lining-nums proportional-nums;">0</h1>
                                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">Plants Delivered</p>
                            </div>
                            <div class="col-12 col-lg-4 text-center">
                                <img class="mb-3" src="assets/img/icons/Counter_2.png" alt="" />
                                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2" data-countup='{"endValue":36487}'
                                    style="font-variant-numeric: lining-nums proportional-nums;">0</h1>
                                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">Happy Advocates</p>
                            </div>
                            <div class="col-12 col-lg-4 text-center">
                                <img class="mb-3" src="assets/img/icons/Counter_3.png" alt="" />
                                <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2"
                                    data-countup='{"endValue":400,"suffix":"+"}'
                                    style="font-variant-numeric: lining-nums proportional-nums;">0</h1>
                                <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">Growing Catalog</p>
                            </div>
                        </div>
                    </section>

                    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="about">
                        <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">About Us</h4>
                        <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">Our Mission &
                            <span class="fw-bold">Philosophy</span></h1>
                        <div class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
                            <div class="col-12 col-lg">
                                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5">At People Society of India, we are
                                    committed to fostering environmental sustainability and building a community
                                    dedicated to reforestation and climate advocacy. Together, we can create a greener
                                    and healthier planet.</p>
                            </div>
                            <div class="col-12 col-lg">
                                <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5">Our passionate team
                                    works tirelessly to bring you a diverse collection of plants, inspiring creativity
                                    and promoting mental well-being. Let's plant hope, nurture growth, and build a
                                    sustainable future together.</p>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-center align-items-center mb-8 mb-lg-10">
                            <img class="img-fluid badhon" src="assets/img/team/badhon.png" alt="" />
                            <div class="about-card">
                                <h1 class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold">Meet Badhon</h1>
                                <p class="fs-10 fs-md-9 fs-xxl-8 text-primary mb-0 line-clamp-5">
                                    Dhruba Badhon leads our efforts with unwavering passion and commitment to a
                                    sustainable future. She inspires our community to make impactful changes through
                                    every small action of planting and nurturing greenery.
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-md-start" id="products">
                        <h3 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6">Our Products </h3>
                        <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-1">
                            <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-13 mb-lg-7">
                                <span class="fw-bold">New </span>Arrivals</h1>
                            <div class="mb-4 mb-lg-0">
                                <div class="swiper-theme-container position-relative">
                                    <div class="swiper-container theme-slider"
                                        data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                                        <div class="swiper-wrapper">
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/1.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Philodendron</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        The Philodendron White Princess has been around for some time in
                                                        private collections. But they have hit the market now in full
                                                        big potted plants.</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/2.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Monstera Obliqua Peruvian</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                                        reason for its scarcity is that it grows slowly and has short
                                                        selling seasons</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/3.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Norfolk Island Pine</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        Although a lively addition to your home all year round—the
                                                        Norfolk Island Pine shines as a live holiday tree during the
                                                        winter season</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/5.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Bromeliad Aechmea Pink</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        Featuring colorful, long-lasting blooms, the Bromeliad Aechmea
                                                        Pink is a unique flowering plant to add a touch of tropics With
                                                        lasting blooms</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/8.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Spider Plant</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        The fast-growing shoots produce little &quot;babies&quot; that
                                                        you can re-pot for added greenery elsewhere. Just stick to
                                                        well-lit spots, water weekly. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <button class="btn prev-button" data-slider="slider-1"><span
                                                class="uil uil-angle-left-b"></span></button>
                                        <button class="btn next-button" data-slider="slider-1"><span
                                                class="uil uil-angle-right-b"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-2">
                            <h1
                                class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize text-md-end fw-light mb-13 mb-lg-7">
                                <span class="fw-bold">Popular</span><br class="d-sm-none" />little plants</h1>
                            <div class="mb-4 mb-lg-0">
                                <div class="swiper-theme-container position-relative">
                                    <div class="swiper-container theme-sliderdiv"
                                        data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                                        <div class="swiper-wrapper">
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/4.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Snake/Sansevieria</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        Sansevierias are succulent plants. they have strong, stiff,
                                                        succulent leaves that store water. these plants release oxygen
                                                        in the night</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/5.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Bromeliad Aechmea Pink</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        Featuring colorful, long-lasting blooms, the Bromeliad Aechmea
                                                        Pink is a unique flowering plant to add a touch of tropics With
                                                        lasting blooms</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/6.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Parlor Palm</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        The parlor palm (Chamaedorea elegans) has long been used as an
                                                        indoor plant. NASA gave this plant a high purifying score.</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/2.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Monstera Obliqua Peruvian</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                                        reason for its scarcity is that it grows slowly and has short
                                                        selling seasons</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/1.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Monstera Obliqua Peruvian</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                                        reason for its scarcity is that it grows slowly and has short
                                                        selling seasons</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <button class="btn prev-button" data-slider="slider-2"><span
                                                class="uil uil-angle-left-b"></span></button>
                                        <button class="btn next-button" data-slider="slider-2"><span
                                                class="uil uil-angle-right-b"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-3">
                            <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-13 mb-lg-7">
                                <span class="fw-bold">Easy </span>to <br class="d-sm-none" />care plants</h1>
                            <div class="mb-4 mb-lg-0">
                                <div class="swiper-theme-container position-relative">
                                    <div class="swiper-container theme-slider"
                                        data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                                        <div class="swiper-wrapper">
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/7.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Peace Lily</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        If you're prone to overwatering, try Spathiphyllum. With enough
                                                        light, they'll also produce their spade-shaped flowers
                                                        throughout the year.</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/8.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Spider Plant</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        The fast-growing shoots produce little &quot;babies&quot; that
                                                        you can re-pot for added greenery elsewhere. Just stick to
                                                        well-lit spots, water weekly. </p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/9.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Kalanchoe</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        This water-retaining succulent grows colorful, bell-shaped
                                                        flowers and withstands dry climates and terrible temperature
                                                        swings.,</p>
                                                </div>
                                            </div>
                                            <div class="product-card swiper-slide">
                                                <div class="product-card-top"
                                                    style="background-image: url('assets/img/products/products/1.png')">
                                                    <div class="add-section"><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center"
                                                            href="#!"><span
                                                                class="uil uil-file-heart me-1 align-middle"></span>add
                                                            to wishlist </a><a
                                                            class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold"
                                                            href="#!"><span
                                                                class="uil uil-shopping-cart me-1 align-middle"></span>add
                                                            to cart</a></div>
                                                </div>
                                                <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                                                    <h3
                                                        class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">
                                                        Monstera Obliqua Peruvian</h3>
                                                    <p
                                                        class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">
                                                        aS it is a small species, Monstera Obliqua is uncommon. Another
                                                        reason for its scarcity is that it grows slowly and has short
                                                        selling seasons</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <button class="btn prev-button" data-slider="slider-3"><span
                                                class="uil uil-angle-left-b"></span></button>
                                        <button class="btn next-button" data-slider="slider-3"><span
                                                class="uil uil-angle-right-b"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-gradient fs-8 d-inline-flex"><span>see full catalog</span><span
                                    class="uil uil-arrow-right"></span></button>
                        </div>
                    </section>
                    <section class="mb-9 mb-lg-10 mb-xxl-11" id="review">
                        <h3
                            class="mb-3 pt-6 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold text-center text-lg-start text-capitalize">
                            review </h3>
                        <h1
                            class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-6 mb-lg-8 text-center text-lg-start">
                            Some words from <br />our <span class="fw-bold">Lovely customers</span></h1>
                        <div class="row g-4 g-lg-6 g-xl-7 align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="review-card">
                                    <div><img src="assets/img/review/1.png" alt="" /></div>
                                    <div> <img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" />
                                        <p class="text-black fs-10 fs-md-9 fs-xxl-8 mb-3 line-clamp-2">I’m not really a
                                            customer of this site, but their free gardening guide helped me a lot. Thank
                                            you ...</p>
                                        <h2 class="text-success fs-9 fs-md-8 fw-bold mb-0">Ahsoka Tano</h2>
                                        <p class="text-black fs-10 fs-md-9 mb-0 mb-0">Firefighter</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div><img src="assets/img/review/2.png" alt="" /></div>
                                    <div> <img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" />
                                        <p class="text-black fs-10 fs-md-9 fs-xxl-8 mb-3 line-clamp-2">People Society of India is the
                                            perfect place for making yourself surrounded by lots and lots of plant with
                                            a guide of extensive details of how to take care of them😘</p>
                                        <h2 class="text-success fs-9 fs-md-8 fw-bold mb-0">Sabine Wren</h2>
                                        <p class="text-black fs-10 fs-md-9 mb-0 mb-0">Influencer &amp; Plant lover</p>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div><img src="assets/img/review/3.png" alt="" /></div>
                                    <div> <img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" /><img class="me-1 mb-1" src="assets/img/icons/star.png"
                                            alt="" />
                                        <p class="text-black fs-10 fs-md-9 fs-xxl-8 mb-3 line-clamp-2">I’ve brought
                                            dozens of plants over the year from this site and not a penny wasted. All
                                            arround good service and professionalism from People Society of India. keep it up guys. </p>
                                        <h2 class="text-success fs-9 fs-md-8 fw-bold mb-0">Ezra Bridger</h2>
                                        <p class="text-black fs-10 fs-md-9 mb-0 mb-0">Small-time thief</p>
                                    </div>
                                </div>
                                <div class="mt-3 mt-md-5 mt-lg-6 mb-1 text-center">
                                    <button class="btn btn-gradient fs-8 d-inline-flex"> <span>load more</span><span
                                            class="uil uil-arrow-right"></span></button>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block text-center"><img class="img-fluid"
                                    src="assets/img/illustrations/loveletter.png" alt="" /></div>
                        </div>
                    </section>
                    <section class="mb-9 mb-lg-10 mb-xxl-11" id="blogs">
                        <div class="row mb-6 mb-lg-7 mb-xl-10 pt-6">
                            <h3
                                class="mb-3 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold text-center text-lg-start text-capitalize">
                                aryanak blog </h3>
                            <h1
                                class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize mb-7 mb-lg-7 text-center text-lg-start">
                                To Bring more <span class="fw-bold">Green</span><br />into <span class="fw-bold">your
                                    home</span></h1>
                            <div class="col-12 col-lg-4 mb-5 mb-lg-0 px-lg-2 px-xxl-3">
                                <div class="blog-card">
                                    <div class="blog-card-top"
                                        style="background-image: url('assets/img/blogs/blog_1.png')">
                                        <div class="inner-div">
                                            <p class="fw-semi-bold mb-0">indoor gardening</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="px-3 px-xl-x1 pt-2"><span class="mb-0"
                                                style="color: #5C5C5C;">5 mins read</span>
                                            <h2
                                                class="text-success fw-semi-bold text-capitalize mb-lg-4 fs-8 fs-md-11 fs-xxl-7">
                                                4 Ways to Level Up Your Indoor Gardening Game</h2>
                                        </div>
                                        <div class="px-3 px-xl-x1 pb-2 pt-1">
                                            <p
                                                class="text-cardText fs-10 fs-md-9 fs-xl-8 fw-light lh-xl mb-2 line-clamp-2">
                                                Indoor gardening is not just about maintaining plants but also about
                                                composition and arrangement in a ...</p><a
                                                class="fw-bold fs-9 fs-md-8 mb-0 read-more" href="#!">read
                                                more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-5 mb-lg-0 px-lg-2 px-xxl-3">
                                <div class="blog-card">
                                    <div class="blog-card-top"
                                        style="background-image: url('assets/img/blogs/blog_3.png')">
                                        <div class="inner-div">
                                            <p class="fw-semi-bold mb-0">Fruit plant</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="px-3 px-xl-x1 pt-2"><span class="mb-0"
                                                style="color: #5C5C5C;">2 mins read</span>
                                            <h2
                                                class="text-success fw-semi-bold text-capitalize mb-lg-4 fs-8 fs-md-11 fs-xxl-7">
                                                6 reasons to reconsider where to plant your next fruit tree</h2>
                                        </div>
                                        <div class="px-3 px-xl-x1 pb-2 pt-1">
                                            <p
                                                class="text-cardText fs-10 fs-md-9 fs-xl-8 fw-light lh-xl mb-2 line-clamp-2">
                                                Growing fruit trees indoors means you get to control everything from the
                                                light to humidity, right down to ....</p><a
                                                class="fw-bold fs-9 fs-md-8 mb-0 read-more" href="#!">read
                                                more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-5 mb-lg-0 px-lg-2 px-xxl-3">
                                <div class="blog-card">
                                    <div class="blog-card-top"
                                        style="background-image: url('assets/img/blogs/blog_2.png')">
                                        <div class="inner-div">
                                            <p class="fw-semi-bold mb-0">Cactus gardening</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="px-3 px-xl-x1 pt-2"><span class="mb-0"
                                                style="color: #5C5C5C;">2 mins read</span>
                                            <h2
                                                class="text-success fw-semi-bold text-capitalize mb-lg-4 fs-8 fs-md-11 fs-xxl-7">
                                                Cactus: Some Common Myths and Misconceptions</h2>
                                        </div>
                                        <div class="px-3 px-xl-x1 pb-2 pt-1">
                                            <p
                                                class="text-cardText fs-10 fs-md-9 fs-xl-8 fw-light lh-xl mb-2 line-clamp-2">
                                                Cactus Plants symbolize endurance, persistence, &amp; toughness. Gifting
                                                someone a cactus plant means ...</p><a
                                                class="fw-bold fs-9 fs-md-8 mb-0 read-more" href="#!">read
                                                more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-gradient fs-8 d-inline-flex"><span>see all posts</span><span
                                    class="uil uil-arrow-right"></span></button>
                        </div>
                    </section>
                    <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-1" id="support">
                        <div class="row g-4 g-lg-6 g-xl-7 pt-6">
                            <div class="d-none d-lg-block col-lg-6 text-center"><img class="img-fluid"
                                    src="assets/img/illustrations/women_watering.png" alt="" /></div>
                            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center mt-0">
                                <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold my-0 text-capitalize">join us </p>
                                <h1 class="fs-5 fs-lg-4 fs-xl-3 text-secondary text-capitalize fw-light mt-3 mb-4">
                                    Subscribe to <br />our <span class="fw-bold">Newsletter</span></h1>
                                <p class="text-success fs-8 fs-lg-7 text-capitalize beginner-guide my-4">Get Our <span
                                        class="fw-bold">Beginners Guide To Plant Parenthood </span><br
                                        class="d-none d-xxl-block" />for free </p>
                                <form method="POST" onsubmit="return false;">
                                    <div class="input-group position-relative">
                                        <input class="form-control email-input" type="email" name="email"
                                            placeholder="your email address" />
                                        <button class="btn shadow-none submit-button position-absolute end-0"
                                            type="submit"><span class="uil uil-arrow-right"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>

                @include('website.partials.footer')
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    @include('website.partials.js')

</body>

</html>
