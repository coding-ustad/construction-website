<!doctype html>
<html lang="en">


<!-- Mirrored from themedox.com/demo/steelcity/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 10:33:47 GMT -->

<head>
    <?php include('container/links.php'); ?>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- header part start -->
    <?php include('container/header.php'); ?>
    <!-- header part end -->


    <!-- main area part start -->

    <main>

        <!-- bread crumb part start -->
        <section class="breadcrumb-area" data-background="assets/img/messages/Contact-Banner.jpg">
            <div class="container">
                <div class="breadcrumb-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="breadcrumb-title">
                                <h2 class="title text-white">Contact</h2>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="list-unstyled bread-crumb text-md-end">
                                <li><a href="index.php">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bread crumb part end -->

        <!-- contact form start -->
        <section class="contact-form-area" style="padding-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title-one">
                            <span class="sub-title uppercase">Book Now</span>
                            <h2 class="title">Schedule Your Consultation Call</h2>
                        </div>
                        <div class="short-description">
                            <p>Fill the form and wait for our response. We'll get back to you ASAP.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <textarea placeholder="Messege"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="submit-btn uppercase">Send a messege</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-information">
                            <div class="contact-info-item">
                                <ul class="list-unstyled">
                                    <li class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </li>
                                    <li class="info">
                                        <h4 class="title">Phone number</h4>
                                        <p><?php echo "$web_num"; ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-info-item">
                                <ul class="list-unstyled">
                                    <li class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </li>
                                    <li class="info">
                                        <h4 class="title">Email Address</h4>
                                        <p><?php echo "$web_email"; ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-info-item">
                                <ul class="list-unstyled">
                                    <li class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </li>
                                    <li class="info">
                                        <h4 class="title">Address</h4>
                                        <p><?php echo "$web_add"; ?> </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form end -->



        <!-- call to action part start -->
        <?php include('container/call.php'); ?>

        <!-- call to action part end -->


    </main>
    <!-- main area part end -->

    <!-- scroll top part start -->
    <button class="scroll-to-top">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- scroll top part end -->

    <!-- footer part start -->
    <?php include('container/footer.php'); ?>
    <!-- footer part end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from themedox.com/demo/steelcity/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 10:33:47 GMT -->

</html>