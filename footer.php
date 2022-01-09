<?php

?>

<!-- footer -->
<section class="w3l-footer-29-main">
        <div class="footer-29 py-3">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-6 col-md-9 col-sm-12 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-3">
                            <img src="assets/images/bdspmlogo.png" style="height: 100px;" alt="logo" title="BDSPM Logo"/>
                        </div>
                        <p><strong style="color:#888;"><i class="fa fa-map-signs"></i></strong>
                         Bhagwandeen Singh Patel Mahavidhyalya Campus, <br> Ragauli, Karwi - Chitrakoot, 210205</p>
                        <p class="my-2">
                            <strong style="color:#888;"><i class="fa fa-phone"></i></strong> 
                            <a href="tel:+91 9919994404">+91 9919994404</a><br>
                            <!-- <a href="tel:+91 9919994406">+91 9919994406</a> -->
                        </p>
                        <p class="my-2">
                            <strong style="color:#888;"><i class="fa fa-phone"></i></strong> 
                            <a href="tel:+91 6306353375">+91 6306353375</a>
                        </p>
                        <p><strong style="color:#888;"><i class="fa fa-envelope"></i></strong> <a href="mailto:info@bdspm.org">info@bdspm.org</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-list-29 footer-4 mt-lg-3 mt-5 footer-divider">
                        <ul class="footer-alignment">
                            <h6 class="footer-title-29" class="footer-alignment">Institute Links</h6>
                            <li><a href="infrastructure.php">Campus Infrastructure</a></li>
                            <li><a href="facilities.php">Institute Facilities</a></li>
                            <li><a href="gallery.php">Photo Gallery</a></li>
                            <li><a href="faculties.php">Faculties</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li><a href="library.php">Library</a></li>
                            <!-- <li><a href="faculties.php">Faculties</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-list-29 footer-4 mt-lg-3 mt-5">
                        <h6 class="footer-title-29" class="footer-alignment">Student Corner</h6>
                        <ul class="footer-alignment">
                            <li><a href="admission.php">Admission Process</a></li>
                            <li><a href="scholarship.php">Scholarship Process</a></li>
                            <li><a href="activities.php">Student Activities</a></li>
                            <li><a href="instructions.php">Student Instructions</a></li>
                            <li><a href="fees.php">Fee Structure</a></li>
                            <li><a href="examination.php">Examination</a></li>
                            <!-- <li><a href="#history">History</a></li>
                            <li><a href="#leader">Leadership</a></li>
                            <li><a href="#help">Help</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">Copyright © 2022 BDSPM All rights reserved | Developed by <a
                    href="https://webflair.in/" target="_blank">
                    Webflair</a>
                </p>

                <div class="col-lg-4 footer-list-29">
                    <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
                        <li><a href="about.php">About Us</a></li>
                        <li class="mx-lg-5 mx-md-4 mx-3"><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->

    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

    <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items:2,
                        nav: false,
                        loop:true
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->

</body>

</html>