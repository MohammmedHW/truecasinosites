<?php
include(realpath(dirname(__FILE__)) . '/admin/function/config.php');

$offerid = (int) ($_GET['id'] ?? 0);

// Fetch offer details
$sql_offers = "SELECT * FROM offers WHERE id = '$offerid' LIMIT 1";
$res_offers = mysqli_query($con, $sql_offers);
$offer = mysqli_fetch_assoc($res_offers);

// Handle non-existent offer
if (!$offer) {
    include(realpath(dirname(__FILE__)) . '/inc/header.php');
    include(realpath(dirname(__FILE__)) . '/inc/menu.php');
    echo '<main class="nx-review-page"><div class="container" style="text-align:center; padding: 80px 20px;"><h1>Offer Not Found</h1><p>The casino review you are looking for does not exist.</p><a href="/" class="nx-btn-primary" style="display:inline-block; margin-top:20px;">Back to Home</a></div></main>';
    include(realpath(dirname(__FILE__)) . '/inc/foot.php');
    exit;
}

// Fetch network details
$sql_network = "SELECT * FROM network WHERE id = '" . (int) $offer['network'] . "' LIMIT 1";
$res_network = mysqli_query($con, $sql_network);
$network = mysqli_fetch_assoc($res_network);

// If network not found, provide fallback empty array to avoid errors
if (!$network) {
    $network = [
        'description' => 'Information coming soon.',
        'pros' => '',
        'cons' => '',
        'software' => 'Not specified',
        'games' => 'Not specified',
        'deposit_options' => '',
        'withdraw_options' => '',
        'device' => 'Desktop & Mobile',
        'founded' => '—',
        'licensed' => '—',
        'network' => '—',
        'payout_percent' => '—',
        'features' => ''
    ];
}

// Helper function to safely explode and display lists
function displayList($text, $type = 'pro')
{
    if (empty(trim($text))) {
        echo '<li>' . ($type === 'pro' ? '✓ No information yet' : '✕ No information yet') . '</li>';
        return;
    }
    $items = explode("\n", trim($text));
    foreach ($items as $item) {
        $item = trim($item);
        if (!empty($item)) {
            echo '<li>' . ($type === 'pro' ? '✓ ' : '✕ ') . htmlspecialchars($item) . '</li>';
        }
    }
}
$similar = [];
if (!empty($offer['category'])) {
    $cat_id = (int) $offer['category'];
    $sql_similar = "SELECT * FROM offers WHERE status = 1 AND category = '$cat_id' AND id != '$offerid' ORDER BY ranking DESC LIMIT 4";
    $res_similar = mysqli_query($con, $sql_similar);
    while ($row = mysqli_fetch_assoc($res_similar)) {
        $similar[] = $row;
    }
}

include(realpath(dirname(__FILE__)) . '/inc/header.php');
include(realpath(dirname(__FILE__)) . '/inc/menu.php');
?>

<main class="nx-review-page">
    <div class="container">
        <!-- Breadcrumb -->
        <div class="nx-breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="#">Online Casinos</a>
            <span>/</span>
            <span><?php echo htmlspecialchars($offer['title']); ?> Review</span>
        </div>

        <!-- Hero Section -->
        <section class="nx-hero-section">
            <div class="nx-hero-card">
                <div class="nx-hero-left">
                    <div class="nx-logo-box"
                        style="background: <?php echo htmlspecialchars($offer['bg_color'] ?? '#1e293b'); ?>">
                        <img src="<?php echo htmlspecialchars($offer['logo'] ?? 'assets/default-logo.png'); ?>"
                            alt="<?php echo htmlspecialchars($offer['title']); ?> logo">
                    </div>
                    <div class="nx-title-area">
                        <?php if (!empty($offer['badge'])): ?>
                            <span class="nx-badge"><?php echo htmlspecialchars($offer['badge']); ?></span>
                        <?php endif; ?>
                        <h1><?php echo htmlspecialchars($offer['title']); ?> Review</h1>
                        <p>Read our in-depth <?php echo htmlspecialchars($offer['title']); ?> review, including
                            exclusive bonuses, game variety, payment options, and expert verdict.</p>
                        <div class="nx-rating-row">
                            <span class="nx-stars">★★★★★</span> 4.8/5 Expert Rating
                        </div>
                    </div>
                </div>

                <div class="nx-hero-right">
                    <div class="nx-bonus-card">
                        <div class="nx-bonus-top">
                            <?php echo !empty($offer['bonus_percent']) ? (int) $offer['bonus_percent'] . '% UP TO' : 'WELCOME BONUS UP TO'; ?>
                        </div>
                        <div class="nx-bonus-amount">
                            <?php echo !empty($offer['bonus_amount']) ? htmlspecialchars($offer['bonus_amount']) : 'EXCLUSIVE OFFER'; ?>
                        </div>
                        <?php if (!empty($offer['bonus_code'])): ?>
                            <div class="nx-bonus-code">
                                Code: <strong><?php echo htmlspecialchars($offer['bonus_code']); ?></strong>
                            </div>
                        <?php endif; ?>
                        <a href="<?php echo htmlspecialchars($offer['aff_url'] ?? '#'); ?>" target="_blank"
                            rel="noopener noreferrer" class="nx-btn-primary">Claim Bonus</a>
                        <small class="nx-tac">T&Cs apply, 18+ only</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Grid -->
        <section class="nx-main-content">
            <div class="nx-grid-layout">
                <!-- Left Content Area -->
                <div class="nx-content-area">
                    <!-- Overview -->
                    <div class="nx-section-card">
                        <h2>Overview</h2>
                        <div class="nx-content-text">
                            <?php echo nl2br(htmlspecialchars($network['description'])); ?>
                        </div>
                    </div>

                    <!-- Pros & Cons -->
                    <div class="nx-section-card">
                        <div class="nx-two-grid">
                            <div>
                                <h3>Pros</h3>
                                <ul class="nx-list nx-list-pros">
                                    <?php displayList($network['pros'] ?? '', 'pro'); ?>
                                </ul>
                            </div>
                            <div>
                                <h3>Cons</h3>
                                <ul class="nx-list nx-list-cons">
                                    <?php displayList($network['cons'] ?? '', 'con'); ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Software -->
                    <div class="nx-section-card">
                        <h2>Software & Game Providers</h2>
                        <div class="nx-content-text">
                            <?php echo nl2br(htmlspecialchars($network['software'] ?? 'Information coming soon.')); ?>
                        </div>
                    </div>

                    <!-- Games Selection -->
                    <div class="nx-section-card">
                        <h2>Games Selection</h2>
                        <div class="nx-content-text">
                            <?php echo nl2br(htmlspecialchars($network['games'] ?? 'Not specified')); ?>
                        </div>
                    </div>

                    <!-- Cashier & Payments -->
                    <div class="nx-section-card">
                        <h2>Cashier & Payments</h2>
                        <div class="nx-two-grid">
                            <div>
                                <h4>Deposit Methods</h4>
                                <ul class="nx-list">
                                    <?php
                                    $deposits = explode("\n", $network['deposit_options'] ?? '');
                                    if (empty(array_filter($deposits)))
                                        echo '<li>✓ Not specified</li>';
                                    else
                                        foreach ($deposits as $deposit)
                                            if (trim($deposit))
                                                echo '<li>✓ ' . htmlspecialchars(trim($deposit)) . '</li>';
                                    ?>
                                </ul>
                            </div>
                            <div>
                                <h4>Withdrawal Methods</h4>
                                <ul class="nx-list">
                                    <?php
                                    $withdrawals = explode("\n", $network['withdraw_options'] ?? '');
                                    if (empty(array_filter($withdrawals)))
                                        echo '<li>✓ Not specified</li>';
                                    else
                                        foreach ($withdrawals as $withdraw)
                                            if (trim($withdraw))
                                                echo '<li>✓ ' . htmlspecialchars(trim($withdraw)) . '</li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Device Compatibility -->
                    <div class="nx-section-card">
                        <h2>Device Compatibility</h2>
                        <div class="nx-content-text">
                            <?php echo nl2br(htmlspecialchars($network['device'] ?? 'Desktop, Tablet & Mobile')); ?>
                        </div>
                    </div>

                    <!-- Final Verdict -->
                    <div class="nx-section-card">
                        <h2>Final Verdict</h2>
                        <div class="nx-content-text">
                            <?php echo nl2br(htmlspecialchars($offer['review'] ?? 'No review available yet.')); ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="nx-sidebar">
                    <div class="nx-sidebar-card">
                        <h3>Quick Info</h3>
                        <div class="nx-info-item">
                            <span>Founded</span><strong><?php echo htmlspecialchars($network['founded'] ?? '—'); ?></strong>
                        </div>
                        <div class="nx-info-item">
                            <span>Licensed</span><strong><?php echo htmlspecialchars($network['licensed'] ?? '—'); ?></strong>
                        </div>
                        <div class="nx-info-item"><span>Owned
                                By</span><strong><?php echo htmlspecialchars($network['network'] ?? '—'); ?></strong>
                        </div>
                        <div class="nx-info-item"><span>Payout
                                Speed</span><strong><?php echo htmlspecialchars($network['payout_percent'] ?? '—'); ?></strong>
                        </div>
                    </div>

                    <div class="nx-sidebar-card">
                        <h3>Key Features</h3>
                        <?php
                        $features = explode("\n", $network['features'] ?? '');
                        if (empty(array_filter($features)))
                            echo '<div class="nx-feature-item">✓ No features listed</div>';
                        else
                            foreach ($features as $feature)
                                if (trim($feature))
                                    echo '<div class="nx-feature-item">✓ ' . htmlspecialchars(trim($feature)) . '</div>';
                        ?>
                    </div>

                    <div class="nx-sidebar-card">
                        <h3>Responsible Gaming</h3>
                        <p style="color:#94a3b8; font-size:14px;">Always play responsibly. This casino promotes safe
                            gambling tools like deposit limits and self-exclusion.</p>
                    </div>
                </aside>
            </div>
        </section>

        <?php if (!empty($similar)): ?>
            <section class="nx-similar-section">
                <div class="nx-similar-header">
                    <h2>🎰 Similar Casinos You May Like</h2>
                    <div class="title-bar"></div>
                </div>
                <div class="nx-similar-grid">
                    <?php foreach ($similar as $sim):
                        $sim_network_id = (int) $sim['network'];
                        $sql_sim_net = "SELECT * FROM network WHERE id = '$sim_network_id' LIMIT 1";
                        $res_sim_net = mysqli_query($con, $sql_sim_net);
                        $sim_net = mysqli_fetch_assoc($res_sim_net);
                        $sim_rating = (float) ($sim['rating'] ?? 0);
                        ?>
                        <div class="nx-similar-card">
                            <div class="nx-similar-logo"
                                style="background:<?php echo htmlspecialchars($sim['bg_color'] ?? '#1e293b'); ?>">
                                <img src="<?php echo htmlspecialchars($sim['logo'] ?? 'assets/default-logo.png'); ?>"
                                    alt="<?php echo htmlspecialchars($sim['title']); ?>">
                            </div>
                            <h3><?php echo htmlspecialchars($sim['title']); ?></h3>
                            <div class="nx-similar-stars">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <?php if ($i <= floor($sim_rating)): ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php elseif ($i == ceil($sim_rating) && $sim_rating - floor($sim_rating) >= 0.5): ?>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    <?php else: ?>
                                        <i class="fa-regular fa-star"></i>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <span><?php echo number_format($sim_rating, 1); ?></span>
                            </div>
                            <div class="nx-similar-bonus">
                                <span
                                    class="nx-similar-bonus-amount"><?php echo htmlspecialchars($sim['bonus_amount'] ?? 'Bonus'); ?></span>
                            </div>
                            <a href="game.php?id=<?php echo (int) $sim['id']; ?>" class="nx-btn-secondary"
                                style="width:100%; text-align:center;">Read Review</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

    </div>

</main>

<style>
    :root {
        --nx-bg: #0f172a;
        --nx-card: #111827;
        --nx-card2: #1e293b;
        --nx-border: rgba(255, 255, 255, 0.08);
        --nx-text: #f8fafc;
        --nx-muted: #94a3b8;
        --nx-gold: #f59e0b;
        --nx-gold-hover: #d97706;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: var(--nx-bg);
        font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }

    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .nx-review-page {
        background: var(--nx-bg);
        color: var(--nx-text);
        padding: 20px 0 80px;
    }

    .nx-breadcrumb {
        margin-bottom: 30px;
        color: var(--nx-muted);
        font-size: 14px;
    }

    .nx-breadcrumb a {
        color: var(--nx-muted);
        text-decoration: none;
        transition: color 0.2s;
    }

    .nx-breadcrumb a:hover {
        color: var(--nx-gold);
    }

    .nx-breadcrumb span {
        margin: 0 8px;
    }

    .nx-hero-card {
        background: linear-gradient(135deg, #111827, #1e293b);
        border-radius: 28px;
        padding: 40px;
        display: flex;
        justify-content: space-between;
        gap: 40px;
        border: 1px solid var(--nx-border);
        box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.4);
        transition: transform 0.2s;
    }

    .nx-hero-left {
        display: flex;
        gap: 30px;
        align-items: center;
        flex-wrap: wrap;
    }

    .nx-logo-box {
        width: 140px;
        height: 140px;
        border-radius: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: #1e293b;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .nx-logo-box img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .nx-title-area h1 {
        font-size: 42px;
        margin: 15px 0 12px;
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    .nx-title-area p {
        color: var(--nx-muted);
        max-width: 550px;
        line-height: 1.5;
    }

    .nx-badge {
        background: rgba(245, 158, 11, 0.12);
        color: var(--nx-gold);
        padding: 6px 14px;
        border-radius: 40px;
        font-size: 13px;
        font-weight: 600;
        backdrop-filter: blur(4px);
    }

    .nx-rating-row {
        margin-top: 18px;
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .nx-stars {
        color: var(--nx-gold);
        letter-spacing: 2px;
    }

    .nx-bonus-card {
        background: #0b1220e6;
        backdrop-filter: blur(8px);
        border: 1px solid rgba(245, 158, 11, 0.3);
        border-radius: 24px;
        padding: 28px;
        min-width: 280px;
        text-align: center;
        transition: all 0.2s;
    }

    .nx-bonus-card:hover {
        border-color: var(--nx-gold);
        transform: translateY(-3px);
    }

    .nx-bonus-top {
        color: var(--nx-gold);
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .nx-bonus-amount {
        font-size: 42px;
        font-weight: 800;
        margin: 12px 0;
        background: linear-gradient(135deg, #fff, var(--nx-gold));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .nx-bonus-code {
        background: #1e293b;
        display: inline-block;
        padding: 6px 14px;
        border-radius: 40px;
        margin: 12px 0;
        font-size: 14px;
        color: var(--nx-gold);
    }

    .nx-btn-primary {
        display: block;
        background: var(--nx-gold);
        color: #0f172a;
        padding: 14px;
        border-radius: 40px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.2s;
        margin-top: 12px;
    }

    .nx-btn-primary:hover {
        background: var(--nx-gold-hover);
        transform: scale(1.02);
    }

    .nx-tac {
        display: block;
        font-size: 11px;
        color: #5b6e8c;
        margin-top: 12px;
    }

    .nx-main-content {
        margin-top: 40px;
    }

    .nx-grid-layout {
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 32px;
        align-items: start;
    }

    .nx-section-card,
    .nx-sidebar-card {
        background: var(--nx-card);
        border: 1px solid var(--nx-border);
        border-radius: 24px;
        padding: 32px;
        margin-bottom: 28px;
        transition: all 0.2s;
    }

    .nx-section-card h2 {
        font-size: 28px;
        margin-bottom: 20px;
        border-left: 4px solid var(--nx-gold);
        padding-left: 16px;
    }

    .nx-section-card h3 {
        font-size: 22px;
        margin-bottom: 18px;
    }

    .nx-content-text {
        color: #cbd5e1;
        line-height: 1.7;
    }

    .nx-two-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .nx-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nx-list li {
        padding: 12px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 15px;
    }

    .nx-list-pros li:before {
        content: "✓";
        color: #10b981;
        font-weight: bold;
        margin-right: 8px;
    }

    .nx-list-cons li:before {
        content: "✕";
        color: #f87171;
        margin-right: 8px;
    }

    .nx-list li:before {
        display: inline-block;
        width: 20px;
    }

    .nx-sidebar {
        position: sticky;
        top: 24px;
        align-self: start;
    }

    .nx-info-item {
        display: flex;
        justify-content: space-between;
        padding: 14px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        font-size: 15px;
    }

    .nx-info-item span {
        color: var(--nx-muted);
    }

    .nx-feature-item {
        padding: 12px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        font-size: 15px;
    }

    /* Similar Casinos Section */
    .nx-similar-section {
        margin-top: 48px;
        padding: 20px 0;
        border-top: 1px solid var(--nx-border);
    }

    .nx-similar-header h2 {
        font-size: 28px;
        margin-bottom: 16px;
        color: var(--nx-text);
    }

    .title-bar {
        width: 80px;
        height: 3px;
        background: var(--nx-gold);
        margin-bottom: 28px;
    }

    .nx-similar-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 24px;
    }

    .nx-similar-card {
        background: var(--nx-card);
        border: 1px solid var(--nx-border);
        border-radius: 20px;
        padding: 20px;
        text-align: center;
        transition: transform 0.2s, border-color 0.2s;
    }

    .nx-similar-card:hover {
        transform: translateY(-5px);
        border-color: var(--nx-gold);
    }

    .nx-similar-logo {
        width: 80px;
        height: 80px;
        margin: 0 auto 16px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px;
        background: #1e293b;
    }

    .nx-similar-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .nx-similar-card h3 {
        font-size: 18px;
        margin-bottom: 8px;
    }

    .nx-similar-stars {
        margin-bottom: 12px;
        color: var(--nx-gold);
        font-size: 13px;
    }

    .nx-similar-stars span {
        margin-left: 6px;
        color: var(--nx-muted);
    }

    .nx-similar-bonus {
        background: rgba(245, 158, 11, 0.1);
        border-radius: 40px;
        padding: 6px;
        margin: 12px 0;
    }

    .nx-similar-bonus-amount {
        font-weight: 700;
        font-size: 14px;
        color: var(--nx-gold);
    }


    @media (max-width: 991px) {
        .nx-grid-layout {
            grid-template-columns: 1fr;
        }

        .nx-hero-card {
            flex-direction: column;
            text-align: center;
        }

        .nx-hero-left {
            flex-direction: column;
            align-items: center;
        }

        .nx-title-area h1 {
            font-size: 34px;
        }

        .nx-two-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .nx-bonus-card {
            width: 100%;
            max-width: 320px;
            margin: 0 auto;
        }

        .container {
            padding: 0 20px;
        }

        .nx-sidebar {
            position: static;
            margin-top: 20px;
        }
    }

    @media (max-width: 560px) {
        .nx-hero-card {
            padding: 24px;
        }

        .nx-section-card {
            padding: 24px;
        }

        .nx-logo-box {
            width: 100px;
            height: 100px;
        }

        .nx-similar-grid {
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        }
    }
</style>

<?php include(realpath(dirname(__FILE__)) . '/inc/foot.php'); ?>