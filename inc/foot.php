<!-- ===== NEWSLETTER ===== -->
<section class="mod-newsletter">
    <div class="mod-container">
        <h3>🎰 Weekly Casino Offers — Straight To Your Inbox</h3>
        <p>Don't be the last to know about the latest bonuses, new casino launches or exclusive promotions.</p>
        <form class="mod-newsletter-form" action="" method="post" onsubmit="return false;">
            <input type="email" placeholder="Your email address here" required>
            <button type="submit"><i class="fa-solid fa-paper-plane"></i> Subscribe</button>
        </form>
        <p class="mod-newsletter-note">
            By subscribing you agree to our <a href="index.php?slug=terms">terms</a> &amp;
            <a href="index.php?slug=privacy">privacy policy</a>. We hate spam — unsubscribe any time!
        </p>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="mod-footer">
    <div class="mod-footer-grid">

        <!-- Brand -->
        <div class="mod-footer-brand">
            <?php if (!empty($setting['logo'])): ?>
                <img src="<?php echo $setting['logo']; ?>"
                    alt="<?php echo htmlspecialchars($setting['logo_alt'] ?? 'Popular Casino Sites'); ?>">
            <?php else: ?>
                <div
                    style="font-family:'Outfit',sans-serif;font-size:22px;font-weight:800;color:#f0c040;margin-bottom:14px;">
                    🎰 PopularCasino</div>
            <?php endif; ?>
            <p>Popularcasino.com is your trusted guide to the best online casinos. We review, rate and compare casinos
                so you don't have to.</p>
            <div class="mod-footer-social">
                <a href="https://www.twitter.com/" target="_blank" rel="noopener" aria-label="Twitter"><i
                        class="fa-brands fa-x-twitter"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mod-footer-col">
            <h4>Casino Lists</h4>
            <ul>
                <li><a href="index.php">All Casinos</a></li>
                <?php
                $sql_foot1 = 'SELECT name, slug FROM `pages` WHERE `menufoot` = 1 ORDER BY `position` ASC LIMIT 6';
                $res_foot1 = mysqli_query($con, $sql_foot1);
                while ($fm = mysqli_fetch_array($res_foot1)): ?>
                    <li><a
                            href="index.php?slug=<?php echo htmlspecialchars($fm['slug']); ?>"><?php echo htmlspecialchars($fm['name']); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>

        <!-- Info -->
        <div class="mod-footer-col">
            <h4>Information</h4>
            <ul>
                <li><a href="index.php?slug=about">About Us</a></li>
                <li><a href="index.php?slug=contact">Contact</a></li>
                <li><a href="index.php?slug=terms">Terms &amp; Conditions</a></li>
                <li><a href="index.php?slug=privacy">Privacy Policy</a></li>
                <li><a href="index.php?slug=responsible-gambling">Responsible Gambling</a></li>
            </ul>
        </div>

        <!-- Responsible Gaming -->
        <div class="mod-footer-col">
            <h4>Responsible Gaming</h4>
            <ul>
                <li><a href="http://www.gambleaware.co.uk/" target="_blank" rel="noopener">GambleAware</a></li>
                <li><a href="https://www.gamcare.org.uk/" target="_blank" rel="noopener">GamCare</a></li>
                <li><a href="https://www.begambleaware.org/" target="_blank" rel="noopener">BeGambleAware</a></li>
                <li><a href="#" rel="noopener">18+ Only</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- ===== FOOTER BOTTOM ===== -->
<div class="mod-footer-bottom">
    <div class="mod-footer-bottom-inner">
        <span class="mod-footer-copy">© <?php echo date('Y'); ?> Popular Casino Sites. All Rights Reserved.</span>
        <div class="mod-footer-logos">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQqsy4etv9FIdqbZrXFGy21X9NE0Oh9JQvPQ&s"
                alt="GambleAware" loading="lazy">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxEL9zMg7hFvINPnzvOOYbsD48xrDAvV3ccw&s"
                alt="18+" loading="lazy">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQee4iwB9GbNm3MfUS9w6MJPnV62NGog1MZPg&s"
                alt="GamCare" loading="lazy">
        </div>
    </div>
    <div class="mod-footer-disclaimer">
        Popularcasino.com has no intention that any of the information it provides is used for illegal purposes.
        It is your own personal responsibility to make sure that all age and other relevant requirements are adhered to
        before
        registering with a casino operator. By continuing to use this website you agree to our terms and conditions and
        privacy policy.
        Popularcasino.com is part of Seven Endevoursoft, a company based at Kolar road with company registration. 18+
    </div>
</div>

<!-- ===== SCROLL TO TOP ===== -->
<div class="mod-scroll-top" id="mod-scroll-top" title="Back to top">
    <i class="fa-solid fa-chevron-up"></i>
</div>

<!-- ===== SCRIPTS ===== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // Scroll to top button
    const scrollTopBtn = document.getElementById('mod-scroll-top');
    window.addEventListener('scroll', () => {
        scrollTopBtn.classList.toggle('visible', window.scrollY > 300);
    });
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Cookie helper
    function gaga(cookiename, cookievalue, hours) {
        var date = new Date();
        date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
        document.cookie = cookiename + "=" + cookievalue + "; path=/;expires=" + date.toGMTString();
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5b3e00034af8e57442dc5c32/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>