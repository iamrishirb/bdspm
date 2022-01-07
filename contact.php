<?php
    include 'header.php';
    include 'navigation.php';
?>

    <!-- breadcrumb area -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->

    <!-- contact1 -->
    <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Find Us</span>
                                <h3 class="hny-title text-left">Additional information </h3>
                            </div>
                            <p class="mb-sm-5 mb-4">
                                You can reach out to us at the Contact information provided below. 
                            </p>

                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Phone number</h6>
                                <p><a href="tel:+91 9919994404">+91 9919 99 44 04</a></p>
                                <p><a href="tel:+91 6306353375">+91 6306 35 33 75</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Send Email</h6>
                                <p><a href="mailto:info@bdspm.org" class="mail">info@bdspm.org</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Institute Address</h6>
                                <p class="pr-lg-5">Bhagwandeen Singh Patel Mahavidhyalya Campus, Ragauli, Karwi - Chitrakoot, 210205</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <span class="sub-title">Contact Us</span>
                                    <h3 class="hny-title text-left">Fill out the form.</h3>
                                </div>
                                <!-- <p class="mb-sm-5 mb-4">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                    consectetur adipisicing.</p> -->
                            </div>
                            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="w3lName" id="w3lName"
                                        placeholder="Name" required="">
                                    <input type="email" class="form-control" name="w3lSender" id="w3lSender"
                                        placeholder="Email" required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                        placeholder="Subject" required="">
                                </div>
                                <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.9334923062943!2d80.99718861500435!3d25.27282263483003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3984b1e88d01203f%3A0x8b15e002d4d2dfc6!2sBhagwaandeen%20Singh%20Patel%20Mahavidhyalaya%20Ragauli%20Chitrakoot!5e0!3m2!1sen!2sin!4v1641532707288!5m2!1sen!2sin" 
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
    </section>
    <!-- contact1 -->

<?php  
    include 'footer.php';
?>