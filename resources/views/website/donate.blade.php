<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        .donation-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .donation-box {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
            background-color: #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .donation-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .donation-box h2,
        .sidebar h4 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1a73e8;
        }

        .btn {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-success {
            background-color: #4caf50;
            border: none;
            color: white;
        }

        .btn-success:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .btn-outline-success {
            border: 2px solid #4caf50;
            color: #4caf50;
            background: transparent;
        }

        .btn-outline-success:hover {
            background-color: #4caf50;
            color: white;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 14px;
        }

        .sidebar {
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul {
            padding: 0;
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .sidebar ul li b {
            color: #4caf50;
        }

        .page-title {
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .page-title h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .breadcrumbs {
            font-size: 14px;
        }

        .breadcrumbs a {
            color: #ffffff;
            text-decoration: none;
        }

        .breadcrumbs a:hover {
            text-decoration: underline;
        }

        .scroll-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4caf50;
            color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .scroll-top:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="index-page">

    @include('website.partials.navbar')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background"
            style="background-image: url(assets/img/page-title-bg.webp);">
            <div class="container position-relative">
                <h1>Donate A Tree</h1>
                <p>Make a difference by planting trees and contributing to a greener planet.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Donate</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

         <!-- Donation Section -->
         <section class="donation-section">
            <div class="container">
                <div class="row g-4">
                    <!-- Donation Form -->
                    <div class="col-lg-8">
                        <div class="donation-box">
                            <h2>I would like to Give...</h2>
                            <div class="d-flex mb-4">
                                <button class="btn btn-success me-2">One Time</button>
                                <button class="btn btn-outline-success">Monthly</button>
                            </div>

                            <h4 class="mb-3">Donation Amount</h4>
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                <button class="btn btn-outline-success">₹100</button>
                                <button class="btn btn-outline-success">₹250</button>
                                <button class="btn btn-outline-success">₹500</button>
                                <button class="btn btn-outline-success">₹1000</button>
                                <button class="btn btn-outline-success">₹5000</button>
                                <button class="btn btn-outline-success">Custom Amount</button>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="dedicateDonation">
                                <label class="form-check-label" for="dedicateDonation">
                                    Dedicate my donation in honor or in memory of someone
                                </label>
                            </div>

                            <h4 class="mb-3">Address</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="First Name *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Last Name *" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Address 1 *" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Address 2 (Optional)">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="City *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="State *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Zip/Postal Code *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Country *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Phone *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="PAN First Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="PAN Last Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="PAN Number *" required>
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <button type="submit" class="btn btn-success px-4">Pay Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <h4>THE WORLD NEEDS MORE TREES.</h4>
                            <ul>
                                <li>🌿 <b>Clean Air</b></li>
                                <li>🌳 <b>Stronger Communities</b></li>
                                <li>🐾 <b>Habitat for Wildlife</b></li>
                                <li>🌎 <b>Climate Protection</b></li>
                            </ul>
                            <p>Every rupee brings us closer to our goal. Each one of us is doing our part. It can be done. It must be done.</p>
                        </div>
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
