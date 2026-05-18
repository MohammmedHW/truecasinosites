<body>
<div id="scroll-top"></div>

<!-- ===== TOP BAR ===== -->
<div class="mod-topbar">
    <div class="container">
        <span><i class="fa-solid fa-shield-halved"></i> Trusted &amp; Verified Casinos</span>
        <span><i class="fa-solid fa-star"></i> Expert Reviewed</span>
        <span><i class="fa-solid fa-mobile-screen"></i> Mobile Friendly</span>
    </div>
</div>

<!-- ===== STICKY HEADER ===== -->
<header class="mod-header" id="mod-header">
    <nav class="mod-nav">

        <!-- Logo -->
        <a class="mod-logo" href="/">
            <?php if (!empty($setting['logo'])): ?>
                <img src="<?php echo $setting['logo']; ?>" alt="<?php echo htmlspecialchars($setting['logo_alt'] ?? 'Popular Casino Sites'); ?>">
            <?php else: ?>
                <span class="mod-logo-text">🎰 PopularCasino</span>
            <?php endif; ?>
        </a>

        <!-- Desktop Nav Links & Actions -->
        <div class="mod-nav-right">
            <ul class="mod-nav-links" id="mod-nav-links">
                <li><a href="index.php" <?php echo (empty($_GET['slug'])) ? 'class="active"' : ''; ?>>
                    <i class="fa-solid fa-house"></i> Home
                </a></li>
                <?php
                $sql_pages_nav = 'SELECT name, slug, icon FROM `pages` WHERE `menutop` = 1 ORDER BY `position` ASC';
                $res_pages_nav = mysqli_query($con, $sql_pages_nav);
                while ($page_menu = mysqli_fetch_array($res_pages_nav)):
                    $is_active = (isset($_GET['slug']) && $_GET['slug'] === $page_menu['slug']) ? 'class="active"' : '';
                ?>
                <li><a href="index.php?slug=<?php echo htmlspecialchars($page_menu['slug']); ?>" <?php echo $is_active; ?>>
                    <?php if (!empty($page_menu['icon'])): ?>
                        <img src="<?php echo $page_menu['icon']; ?>" alt="" loading="lazy">
                    <?php endif; ?>
                    <?php echo htmlspecialchars($page_menu['name']); ?>
                </a></li>
                <?php endwhile; ?>
            </ul>

            <!-- Theme Toggle Button -->
            <button id="theme-toggle" class="mod-theme-toggle" aria-label="Toggle Theme">
                <i class="fa-solid fa-moon icon-dark"></i>
                <i class="fa-solid fa-sun icon-light"></i>
            </button>

            <!-- Hamburger -->
            <button class="mod-hamburger" id="mod-hamburger" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Nav -->
    <div class="mod-mobile-nav" id="mod-mobile-nav">
        <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
        <?php
        $sql_pages_mob = 'SELECT name, slug FROM `pages` WHERE `menutop` = 1 ORDER BY `position` ASC';
        $res_pages_mob = mysqli_query($con, $sql_pages_mob);
        while ($page_mob = mysqli_fetch_array($res_pages_mob)):
        ?>
        <a href="index.php?slug=<?php echo htmlspecialchars($page_mob['slug']); ?>">
            <i class="fa-solid fa-chevron-right"></i>
            <?php echo htmlspecialchars($page_mob['name']); ?>
        </a>
        <?php endwhile; ?>
    </div>
</header>

<script>
// Sticky header shadow on scroll
const modHeader = document.getElementById('mod-header');
window.addEventListener('scroll', () => {
    modHeader.classList.toggle('scrolled', window.scrollY > 20);
});

// Hamburger toggle
const hamburger = document.getElementById('mod-hamburger');
const mobileNav = document.getElementById('mod-mobile-nav');
hamburger.addEventListener('click', () => {
    mobileNav.classList.toggle('open');
    hamburger.classList.toggle('open');
});

// Theme Toggle Click Handler
const themeToggle = document.getElementById('theme-toggle');
if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
        let newTheme = 'dark';
        if (currentTheme === 'dark') {
            newTheme = 'light';
            document.documentElement.setAttribute('data-theme', 'light');
        } else {
            document.documentElement.removeAttribute('data-theme');
        }
        localStorage.setItem('theme', newTheme);
    });
}
</script>