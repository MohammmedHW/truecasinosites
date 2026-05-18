<?php
include(realpath(dirname(__FILE__)) . '/admin/function/config.php');

$pageslug = $_GET['slug'] ?? '';

$where = " WHERE `ishome` = 1 AND `status` = '1'";
$ishome = 1;
$category = 1;

if (!empty($pageslug)) {
    $pageslug = mysqli_real_escape_string($con, $pageslug);
    $where = " WHERE `slug` = '$pageslug' AND `status` = '1'";
    $ishome = 0;
    $category = 0;
}

$sql_pages = "SELECT * FROM `pages` $where";
$res_pages = mysqli_query($con, $sql_pages) or die('MySQL Error: ' . mysqli_error($con));
$page = mysqli_fetch_array($res_pages);

if (!empty($page['iscategory'])) {
    $category = $page['id'];
}

include(realpath(dirname(__FILE__)) . '/inc/header.php');
include(realpath(dirname(__FILE__)) . '/inc/menu.php');
?>

<?php if (!empty($page['content'])): ?>
    <!-- ===== STATIC PAGE CONTENT ===== -->
    <div class="mod-page-content">
        <h1><?php echo htmlspecialchars($page['name'] ?? ''); ?></h1>
        <?php echo parse_bbcode($page['content'] ?? ''); ?>
    </div>

<?php elseif ($category): ?>

    <!-- ===== HERO SECTION ===== -->
    <section class="mod-hero">
        <h1><?php echo !empty($page['heading']) ? htmlspecialchars($page['heading']) : '🏆 Best Online Casinos ' . date('Y'); ?>
        </h1>
        <p>Expert-reviewed casinos ranked by bonuses, security &amp; player experience. Updated <?php echo date('F Y'); ?>.
        </p>
        <div class="mod-trust-badges">
            <span class="mod-badge"><i class="fa-solid fa-shield-halved"></i> 100% Trusted</span>
            <span class="mod-badge"><i class="fa-solid fa-magnifying-glass"></i> Expert Reviewed</span>
            <span class="mod-badge"><i class="fa-solid fa-mobile-screen"></i> Mobile Friendly</span>
            <span class="mod-badge"><i class="fa-solid fa-lock"></i> SSL Secured</span>
            <span class="mod-badge"><i class="fa-solid fa-rotate"></i> Updated <?php echo date('M Y'); ?></span>
        </div>
    </section>

    <!-- ===== TOP DESCRIPTION ===== -->
    <?php if (!empty($page['top_desc'])): ?>
        <div class="mod-page-content">
            <div class="mod-collapsible-wrapper">
                <div class="mod-collapsible-content" id="topDescContent">
                    <?php echo parse_bbcode($page['top_desc'] ?? ''); ?>
                </div>
                <button class="mod-read-more-btn" id="topDescToggle">Read more</button>
            </div>
        </div>

        <style>
            .mod-collapsible-wrapper {
                max-width: 900px;
                margin: 0 auto;
            }

            .mod-collapsible-content {
                max-height: 200px;
                /* Default "small" height */
                overflow: hidden;
                transition: max-height 0.4s ease-out;
            }

            .mod-collapsible-content.expanded {
                max-height: none;
                /* Show full content when expanded */
            }

            .mod-read-more-btn {
                background: none;
                border: none;
                color: var(--gold);
                cursor: pointer;
                font-size: 14px;
                font-weight: 600;
                margin-top: 16px;
                padding: 8px 0;
                display: inline-flex;
                align-items: center;
                gap: 6px;
                transition: color 0.2s;
                font-family: inherit;
            }

            .mod-read-more-btn:hover {
                color: #ffd966;
                text-decoration: underline;
            }

            .mod-read-more-btn:before {
                content: '▼';
                font-size: 10px;
                transition: transform 0.2s;
                display: inline-block;
            }

            .mod-read-more-btn.expanded:before {
                transform: rotate(180deg);
            }
        </style>

        <script>
            (function () {
                const content = document.getElementById('topDescContent');
                const btn = document.getElementById('topDescToggle');

                // Only enable if content actually overflows (scrollHeight > maxHeight)
                const maxHeightDefault = 200;
                function checkOverflow() {
                    if (content.scrollHeight > maxHeightDefault) {
                        btn.style.display = 'inline-flex';
                    } else {
                        btn.style.display = 'none';
                        // If content is short, ensure it's fully visible
                        content.style.maxHeight = 'none';
                    }
                }

                btn.addEventListener('click', function () {
                    const isExpanded = content.classList.contains('expanded');
                    if (isExpanded) {
                        content.classList.remove('expanded');
                        btn.classList.remove('expanded');
                        btn.textContent = 'Read more';
                    } else {
                        content.classList.add('expanded');
                        btn.classList.add('expanded');
                        btn.textContent = 'Read less';
                    }
                });

                // Initial check after page load
                window.addEventListener('DOMContentLoaded', checkOverflow);
                window.addEventListener('load', checkOverflow); // in case images load later
            })();
        </script>
    <?php endif; ?>

    <!-- ===== CASINO LIST ===== -->
    <div class="mod-section">

        <div class="mod-section-title">
            <h2><i class="fa-solid fa-trophy" style="color:var(--gold);"></i> Top Rated Casinos</h2>
            <div class="title-bar"></div>
        </div>

        <!-- Table Head (desktop only) -->
        <div class="mod-table-head">
            <span>#</span>
            <span>Casino</span>
            <span>Rating</span>
            <span>Bonus</span>
            
            <span>Badge</span>
            <span>Features</span>
            <span>Action</span>
        </div>

        <!-- Casino Cards -->
        <div class="mod-casino-list">
            <?php
            $where_offers = " WHERE `status` = 1";
            if (!$ishome) {
                $cat_id = mysqli_real_escape_string($con, $category);
                $where_offers = " WHERE `status` = 1 AND `category` = '$cat_id'";
            }
            $sql_offers = "SELECT * FROM `offers` $where_offers ORDER BY `ranking` DESC";
            $res_offers = mysqli_query($con, $sql_offers) or die('MySQL Error: ' . mysqli_error($con));

            $i = 0;
            while ($offer = mysqli_fetch_array($res_offers)):
                $network_id = (int) $offer['network'];
                $sql_network = "SELECT * FROM `network` WHERE `id` = '$network_id'";
                $res_network = mysqli_query($con, $sql_network) or die('MySQL Error: ' . mysqli_error($con));
                $network = mysqli_fetch_array($res_network);
                $i++;

                // Stars (out of 5)
                $rating = (float) ($offer['rating'] ?? 0);
                $fullStars = floor($rating);
                $halfStar = ($rating - $fullStars) >= 0.5;
                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

                // Rank classes
                $rankClass = $i <= 3 ? 'rank-' . $i : '';
                ?>
                <div class="mod-casino-card">

                    <?php if ($i === 1): ?>
                        <div class="mod-popular-tag">⭐ #1 Pick</div>
                    <?php endif; ?>

                    <!-- Rank -->
                    <div class="mod-card-rank">
                        <div class="mod-rank-num <?php echo $rankClass; ?>"><?php echo $i; ?></div>
                    </div>

                    <!-- Logo + Name -->
                    <div class="mod-card-logo">
                        <div class="mod-logo-wrap"
                            style="background:<?php echo htmlspecialchars($offer['bg_color'] ?? '#1a1b2a'); ?>">
                            <a href="game.php?id=<?php echo (int) $offer['id']; ?>" target="_blank" rel="noopener">
                                <img src="<?php echo htmlspecialchars($offer['logo'] ?? ''); ?>"
                                    alt="<?php echo htmlspecialchars($offer['title'] ?? ''); ?>" loading="lazy">
                            </a>
                        </div>
                        <div>
                            <div class="mod-casino-name"><?php echo htmlspecialchars($offer['title'] ?? ''); ?></div>
                            <a class="mod-review-link" href="game.php?id=<?php echo (int) $offer['id']; ?>" target="_blank"
                                rel="noopener">
                                <i class="fa-solid fa-star-half-stroke"></i> Expert Review
                            </a>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="mod-card-rating">
                        <div class="mod-stars">
                            <?php for ($s = 0; $s < $fullStars; $s++): ?><i class="fa-solid fa-star"></i><?php endfor; ?>
                            <?php if ($halfStar): ?><i class="fa-solid fa-star-half-stroke"></i><?php endif; ?>
                            <?php for ($s = 0; $s < $emptyStars; $s++): ?><i class="fa-regular fa-star"></i><?php endfor; ?>
                        </div>
                        <div class="mod-rating-score"><?php echo number_format($rating, 1); ?></div>
                        <div class="mod-rating-count"><?php echo (int) ($offer['rating_n'] ?? 0); ?> reviews</div>
                    </div>

                    <!-- Bonus -->
                    <div class="mod-card-bonus">
                        <?php if (!empty($offer['bonus_percent'])): ?>
                            <div class="mod-bonus-percent"><?php echo htmlspecialchars($offer['bonus_percent']); ?>% Up To</div>
                        <?php endif; ?>
                        <div class="mod-bonus-amount"><?php echo htmlspecialchars($offer['bonus_amount'] ?? ''); ?></div>
                        <?php if (!empty($offer['bonus_code'])): ?>
                            <div class="mod-bonus-code">Code: <?php echo htmlspecialchars($offer['bonus_code']); ?></div>
                        <?php endif; ?>
                        <?php if (!empty($offer['terms'])): ?>
                            <span class="mod-terms-link" onclick="alert('<?php echo addslashes(strip_tags($offer['terms'])); ?>')">
                                T&amp;Cs apply
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Badge -->
                    <div class="mod-card-badge">
                        <?php if (!empty($offer['badge_image'])): ?>
                            <img class="mod-badge-img" src="<?php echo htmlspecialchars($offer['badge_image']); ?>"
                                alt="<?php echo htmlspecialchars($offer['badge'] ?? ''); ?>" loading="lazy">
                            <div class="mod-badge-label"><?php echo htmlspecialchars($offer['badge'] ?? ''); ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Features -->
                    <div class="mod-card-features">
                        <?php
                        $features = explode("\n", $network['features'] ?? '');
                        $count = 0;
                        foreach ($features as $feat):
                            if (trim($feat) === '' || $count >= 4)
                                continue;
                            $count++;
                            ?>
                            <div class="mod-feature">
                                <i class="fa-solid fa-circle-check"></i>
                                <span><?php echo htmlspecialchars(trim($feat)); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- CTA -->
                    <div class="mod-card-cta">
                        <a href="<?php echo htmlspecialchars($offer['aff_url'] ?? '#'); ?>" target="_blank"
                            rel="noopener sponsored" class="mod-btn-primary">
                            <i class="fa-solid fa-gift"></i> Claim Bonus
                        </a>
                        <a href="game.php?id=<?php echo (int) $offer['id']; ?>" target="_blank" rel="noopener"
                            class="mod-btn-secondary">
                            <i class="fa-solid fa-eye"></i> Full Review
                        </a>
                    </div>

                </div>
            <?php endwhile; ?>
        </div><!-- /.mod-casino-list -->

        <!-- Footer description -->
        <?php if (!empty($page['foot_desc'])): ?>
            <div class="mod-page-content" style="margin-top:40px;">
                <?php echo parse_bbcode($page['foot_desc'] ?? ''); ?>
            </div>
        <?php endif; ?>

    </div><!-- /.mod-section -->

<?php endif; ?>

<?php include('inc/foot.php'); ?>