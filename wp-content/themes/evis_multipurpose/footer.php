    <!-- Contact -->
    <section class="contact content-section" id="contact">
        <div class="container">
            <header class="w3-heading py-lg-5 pt-5 text-center">
                <h3>Contact Us</h3>
            </header>
            <div class="row form-container py-3">
                <div class="col-md-8 contact-form">
                    <h4 class="mb-4">Drop Us A Line</h4>
                    <div class="col-md-12" id="result"></div>
                    <?php
                    if ($_POST['submit']) {

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $mobile = $_POST['mobile'];
                        $content = $_POST['message'];

                        $to = cs_get_option('contactForm');
                        $subject = "Amazon Export Import - Contact Us";
                        $message = "
                            <html>
                                <head>
                                    <title>Amazon Export Import</title>
                                </head>

                                <body>
                                    <h3>$name Wrotes To You..</h3><br/>
                                    <p>$content</p><br/><hr/>
                                    <p>Mobile Number is: $mobile</p>
                                </body>
                            </html>
                        ";
                        $headers .= "From: <$email>" . "\r\n";
                        $headers .='Reply-To: '. $to . "\r\n" ;
                        $headers .='X-Mailer: PHP/' . phpversion();
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

                        mail($to,$subject,$message,$headers);
                        echo 'Success';
                    } else {
                        ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name..." required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email..." required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile..." required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="message" placeholder="Your Message..." required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Send" class="btn btn-default" />
                            </div>
                        </form>
                    <?php } ?>
                </div>
                <div class="col-md-4 agile-w3ls-contact-address mt-sm-4 mt-0">
                    <h4 class="mb-4">Our Address</h4>
                    <address>
                        <p class="my-3 d-flex">
                            <i class="fa fa-map-marker fa-fw mr-2"></i>
                            <label><?php echo cs_get_option('physicalAddress') ?></label>
                        </p>
                        <ul>
                            <li class="my-3">
                                <i class="fa fa-envelope fa-fw mr-2"></i>
                                <a href="mailto:<?php echo cs_get_option('emailAddress') ?>"><?php echo cs_get_option('emailAddress') ?></a>
                            </li>
                            <li class="my-3">
                                <i class="fa fa-phone fa-fw mr-2"></i><?php echo cs_get_option('mobileNumber') ?>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="container-fluid w3-agile-google-map pt-5">
            <div class="row">
                <div class="col-md-6">
                    <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=House%20No%3A%2026%2C%20Senyei%20Olah%20Istvan%20Street%2C%20Debrecen%204029&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div class="col-md-6">
                    <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=Road%20No%3A%201%2C%20House%20No%3A%2010%2C%20Block%20C%2C%20Mirpur%2012%2C%20Dhaka%201216&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact -->
    <!-- Footer -->
    <footer id="footer">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-md-12 w3-social segment">
                    <h4>Stay Connected</h4>
                    <ul class="social-icons d-flex justify-content-center">
                        <li>
                            <a href="<?php echo cs_get_option('facebookLink') ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cs_get_option('twitterLink') ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w3l-copynote py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p> &copy; <?php echo date('Y') ?>. <?php echo cs_get_option('copyrightName') ?>. All Rights Reserved | Developed By
                            <a href="https://evistechnology.com/">Evis Technology</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 1;"> </span>
        </a>
    </footer>
    <!-- End of Footer -->
    <?php wp_footer(); ?>
    </body>
</html>