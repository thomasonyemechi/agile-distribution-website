<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home
    </title>

    <?php include('link.php') ?>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-210132144-1');
    </script>

</head>

<body>



    <?php include('nav.php') ?>





    <div class="page-title-style01 page-title-negative-top pt-bkg08" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact us</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        <!-- .breadcrumb end -->
                    </div>
                    <!-- .breadcrumb-container end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .page-title-style01.page-title-negative-top end -->



    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>your inquiry</h3>
                    </div>
                    <!-- .custom-heading.left end -->

                    <p>
                        Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump.
                        Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just.
                    </p>

                    <br />

                    <div class="custom-heading">
                        <h4>company information</h4>
                    </div>
                    <!-- .custom-heading end -->

                    <address>
                        address 821 ST George Avenue Woodbridge, New Jersey United State
                    </address>

                    <span class="text-big colored">
                        +00 41 258 489 6587
                    </span>
                    <br />

                    <a href="mailto:">hr@agile-distribution.com</a>
                </div>
                <!-- .col-md-6 end -->

                <div class="col-md-6 clearfix">
                    <!-- .contact form start -->
                    <form class="wpcf7 row">
                        <div class="col-lg-6 col-md-6">
                            <label>
                                <span class="required">*</span> Your request:
                            </label>

                            <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                <option value="I need an offer for contract logistics">I need an offer for contract
                                    logistics</option>
                                <option value="I need an offer for air freight">I need an offer for air freight</option>
                                <option value="I want to become your partner">I want to become your partner</option>
                                <option value="I have some other request">I have some other request</option>
                            </select>
                        </div>


                        <div class="col-lg-6 col-md-6">
                            <label><span class="required">*</span> First Name:</label>
                            <input type="text" class="wpcf7-text" id="contact-name">
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <label><span class="required">*</span> Last Name:</label>
                            <input type="text" class="wpcf7-text" id="contact-last-name">
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <label><span class="required">*</span> Email:</label>
                            <input type="url" class="wpcf7-text" id="contact-email">
                        </div>

                        <div class="col-lg-12">
                            <label><span class="required">*</span> Message:</label>
                            <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                            <input type="submit" class="wpcf7-submit" value="send" />
                        </div>
                    </form>
                    <!-- .wpcf7 end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .page-content end -->




    <?php include('footer.php') ?>

    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <!-- jQuery library -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- .bootstrap script -->
    <script src="assets/js/jquery.srcipts.min.js"></script>
    <!-- modernizr, retina, stellar for parallax -->
    <script src="assets/owl-carousel/owl.carousel.min.js"></script>
    <!-- Carousels script -->
    <script src="assets/masterslider/masterslider.min.js"></script>
    <!-- Master slider main js -->
    <script src="assets/js/jquery.matchHeight-min.js"></script>
    <!-- for columns with background image -->
    <script src="assets/js/jquery.dlmenu.min.js"></script>
    <!-- for responsive menu -->
    <script src="assets/js/include.js"></script>
    <!-- custom js functions -->



    <script>
        jQuery(document).ready(function($) {
            'use strict';

            function equalHeight() {
                $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function() {
                    var maxHeight = $(this).outerHeight();
                    $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                });
            };

            $(document).ready(equalHeight);
            $(window).resize(equalHeight);

            // MASTER SLIDER START
            var slider = new MasterSlider();
            slider.setup('masterslider', {
                width: 1140, // slider standard width
                height: 854, // slider standard height
                space: 0,
                speed: 50,
                layout: "fullwidth",
                centerControls: false,
                loop: true,
                autoplay: true
                    // more slider options goes here...
                    // check slider options section in documentation for more options.
            });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');

            // CLIENTS CAROUSEL START
            $('#client-carousel').owlCarousel({
                items: 6,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                responsive: {
                    0: {
                        items: 2,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    600: {
                        items: 3,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true
                    }
                }
            });

            $('#testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                autoheight: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    600: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true,
                        autoHeight: true
                    }
                }
            });
        });
    </script>

    <!-- #footer-wrapper end -->


    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <!-- jQuery library -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- .bootstrap script -->
    <script src="assets/js/jquery.srcipts.min.js"></script>
    <!-- modernizr, retina, stellar for parallax -->
    <script src="assets/owl-carousel/owl.carousel.min.js"></script>
    <!-- Carousels script -->
    <script src="assets/masterslider/masterslider.min.js"></script>
    <!-- Master slider main js -->
    <script src="assets/js/jquery.matchHeight-min.js"></script>
    <!-- for columns with background image -->
    <script src="assets/js/jquery.dlmenu.min.js"></script>
    <!-- for responsive menu -->
    <script src="assets/js/include.js"></script>
    <!-- custom js functions -->
    <script src="assets/js/jquery.dlmenu.min.js"></script>
    <!-- for responsive menu -->


</body>

</html>
