<!--added button scroll-top-->
<div class="scroll-top fixed">
    <a href="#scroll-top" role="button" class="btn btn-primary btn-xs btn-scroll">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                        <polygon fill="#FFFFFF" points="8,2.8 16,10.7 13.6,13.1 8.1,7.6 2.5,13.2 0,10.7 " />
                    </svg>
    </a>
</div>
<!-- footer-form ========== START ========== -->
    <footer class="footer footer-form">
        <div class="form-block" style="background-image: url(https://s3-eu-west-1.amazonaws.com/usermediafiles/static/static/images/content/footer-form-bg.jpg)">
            <div class="container">
                <div class="footer-form-col">
                    <div class="row">
                        <div class="col-lg-offset-0 col-lg-7 col-md-offset-3 col-md-9">
                            <div class="form-block-headings">
                                <h3 class="form-block-title">Weekly Online Casino Offers,<br class="hidden-xs-down">
                                    Straight To Your Inbox</h3>
                                <div class="form-block-note">Don’t be the last to know about the latest bonuses, new
                                    casino launches or exclusive promotions. Join us today!
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 form-block-arrow">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/static/static/images/content/footer-form-arrow.png" alt="" width="28">
                        </div>
                        <div class="col-lg-offset-0 col-lg-7 col-md-offset-3 col-md-9">
                            <!-- Begin MailChimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action=""
                                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                      class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                               placeholder="Your email address here" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_73f77551b370898b03ef240d4_7d53c61ac2"
                                                   tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="Subscribe" name="subscribe"
                                                   id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                            <div class="row">
                                <div class="col-lg-10 col-md-15">
                                    <div class="form-text">
                                        By subscribing you agree to our <a href="/terms">terms</a> and <a
                                                href="/privacy">privacy policy.</a>
                                        <br>We hate spam too - unsubscribe any time!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top ========== START ========== -->
        <div class="footer-top">
            <div class="container">
                <div class="footer-form-col">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo $setting['logo'];?>" alt="<?php echo $setting['logo_alt'];?>">

                    </a>
                </div>
            </div>
        </div>
        <!-- footer-top ========== END ========== -->
        <!-- footer-bottom ========== START ========== -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-form-col">
                    <div class="text-center">
                        <span class="footer-copy m-b">©Popular Casino Site. All Rights Reserved 2018</span>
                        <div class="lists">
                            <ul class="footer-list">
                            
                                <li class="footer-list-item">
                                    <a href="index.php" class="footer-list-link">All casinos</a>
                                </li>
<?php $sql_pages_all = 'select name,slug from `pages` WHERE `menufoot` = 1 ORDER BY `position` ASC ';
$res_pages_all = mysqli_query($con, $sql_pages_all  ) ;
while ($page_menu = mysqli_fetch_array($res_pages_all)){
?>
                                <li class="footer-list-item">
                                    <a href="index.php?slug=<?php echo $page_menu['slug'];?>" class="footer-list-link"><?php echo $page_menu['name'];?></a>
                                </li>
                                <?php } ?> 
                            </ul>
                        </div>
                    </div>
                    <div class="footer-note">
                        <p>TopRatedCasinos.co.uk has no intention that any of the information it provides is used for
                            illegal
                            purposes. It is your own personal responsibility to make sure that all age and other
                            relevant
                            requirements are adhered to before registering with a casino operator. By continuing to use
                            this
                            website you agree to our terms and conditions and privacy policy.</p>
                        <p>Due to the varying legal status of online gambling in different jurisdictions, visitors
                            should ensure
                            they have sought legal counsel before proceeding to a casino operator. Please also be aware
                            that
                            TopRatedCasinos.co.uk operates independently and as such is not controlled by any casino or
                            gambling
                            operator. </p>
                        <p>
                            TopRatedCasinos.co.uk is part of Seven Star Digital, a company based at 1 Mark Square  London EC2A 4EG with company registration number 09968501.
                        </p>
                    </div>
                    <ul class="footer-list-logo">
                        <li class="footer-list-logo-item">
                            <a href="http://www.gambleaware.co.uk/" class="footer-list-logo-link">
                                <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/static/static/images/content/footer-form-logo-1.png" alt="" width="157">
                            </a>
                        </li>
                        <li class="footer-list-logo-item">
                            <a href="http://www.gambleaware.co.uk/" class="footer-list-logo-link">
                                <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/static/static/images/content/footer-form-logo-2.png" alt="" width="40">
                            </a>
                        </li>
                        <li class="footer-list-logo-item">
                            <a href="http://www.gambleaware.co.uk/" class="footer-list-logo-link">
                                <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/static/static/images/content/footer-form-logo-3.png" alt="" width="40">
                            </a>
                        </li>
                        <li class="footer-list-logo-item">
                            <a href="http://www.gambleaware.co.uk/" class="footer-list-logo-link">
                                <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/static/static/images/content/footer-form-logo-4.png" alt="" width="250">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- footer-bottom ========== END ========== -->
    <div class="scroll-top">
        <a href="#scroll-top" role="button" class="btn btn-primary btn-xs btn-scroll">Back to top <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/static/static/images/general/double-arrow-up.png" width="8" alt=""></a>
    </div>
    </footer>
<script>
    WebFontConfig = {
        google: {families: ['Gloria Hallelujah', 'Montserrat']},
        events: false,
        classes: false
    };
    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>


<!-- footer-form ========== END ========== -->

<script src="https://www.topratedcasinos.co.uk/static/js/separate-js/jquery-2.2.1.min.js"></script>
<script src="https://www.topratedcasinos.co.uk/static/js/main.min.js?v=8"></script>
<script async src="https://www.topratedcasinos.co.uk/static/js/aimtell-worker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script type="text/javascript">
    function gaga(cookiename, cookievalue, hours) {
        var date = new Date();
        date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
        document.cookie = cookiename + "=" + cookievalue + "; path=/;expires = " + date.toGMTString();

    }
</script>


</body>
</html>
