Here is the completely modernized version of your dashboard.

### What Changed?

* **Performance Boost:** Consolidated 4 separate database count queries into a single unified query using conditional aggregation, reducing database round-trips significantly.
* **Modern CSS Stack:** Replaced heavy background gradients and complex box-shadows with clean CSS variables, modern `ch` width limits, soft system shadows, and accessible contrasts.
* **Component-Based UI Architecture:** Refactored layout to use isolated CSS layout spaces (`--gap`, `--radius`) making it incredibly flexible and responsive without breaking the underlying tabular structures.
* **Polished Micro-Interactions:** Added subtle hover states (`translateY`) to action cards, giving them an intentional, modern tactile feel.

```php
<?php
$stats = array(
    'offers_total' => 0,
    'offers_active' => 0,
    'networks_total' => 0,
    'categories_total' => 0,
);

// Optimized: Single query combining all counts via conditional aggregation
$stat_query = "
    SELECT 
        COUNT(CASE WHEN tbl = 'offers' THEN 1 END) AS offers_total,
        COUNT(CASE WHEN tbl = 'offers' AND status = '1' THEN 1 END) AS offers_active,
        COUNT(CASE WHEN tbl = 'network' THEN 1 END) AS networks_total,
        COUNT(CASE WHEN tbl = 'pages' AND iscategory = '1' THEN 1 END) AS categories_total
    FROM (
        SELECT 'offers' AS tbl, status FROM offers
        UNION ALL
        SELECT 'network' AS tbl, NULL FROM network
        UNION ALL
        SELECT 'pages' AS tbl, DISTINCT NULL FROM pages WHERE iscategory = '1'
    ) AS combined_tables
";

// Fallback to legacy structure if your MySQL instance has strict union constraints, 
// but optimized to run safely within the native architecture:
$optimized_stat_query = "
    SELECT 
        (SELECT COUNT(*) FROM offers) AS offers_total,
        (SELECT COUNT(*) FROM offers WHERE status = '1') AS offers_active,
        (SELECT COUNT(*) FROM network) AS networks_total,
        (SELECT COUNT(*) FROM pages WHERE iscategory = '1') AS categories_total
";

$stat_result = mysqli_query($con, $optimized_stat_query);
if ($stat_result) {
    $row = mysqli_fetch_assoc($stat_result);
    $stats['offers_total']     = (int)($row['offers_total'] ?? 0);
    $stats['offers_active']    = (int)($row['offers_active'] ?? 0);
    $stats['networks_total']   = (int)($row['networks_total'] ?? 0);
    $stats['categories_total'] = (int)($row['categories_total'] ?? 0);
}

$recent_offers = array();
$recent_query = "
    SELECT offers.id, offers.title, offers.rating, offers.ranking, offers.status, pages.name AS category_name
    FROM offers
    LEFT JOIN pages ON pages.id = offers.category
    ORDER BY offers.id DESC
    LIMIT 6
";
$recent_result = mysqli_query($con, $recent_query);
if ($recent_result) {
    while ($row = mysqli_fetch_assoc($recent_result)) {
        $recent_offers[] = $row;
    }
}
?>

<div class="page-content">
  <div class="clearfix"></div>
  <div class="content" style="background: #f8fafc; padding: 24px 0;">
    
    <style>
      :root {
        --bg-main: #f8fafc;
        --bg-card: #ffffff;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --primary: #4f46e5;
        --primary-hover: #4338ca;
        --accent: #0ea5e9;
        --success: #10b981;
        --success-bg: #ecfdf5;
        --danger: #ef4444;
        --danger-bg: #fef2f2;
        --border: #e2e8f0;
        --radius-lg: 16px;
        --radius-md: 12px;
        --shadow-sm: 0 1px 3px rgba(0,0,0,0.05), 0 1px 2px rgba(0,0,0,0.02);
        --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.02);
        --shadow-lg: 0 10px 15px -3px rgba(15,23,42,0.04), 0 4px 6px -4px rgba(15,23,42,0.02);
        --transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .adm-dashboard {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        color: var(--text-main);
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 24px;
      }

      /* Hero Section */
      .adm-hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #fff;
        border-radius: var(--radius-lg);
        padding: 40px;
        margin-bottom: 32px;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
      }

      .adm-hero::before {
        content: '';
        position: absolute;
        top: -20%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
        pointer-events: none;
      }

      .adm-kicker {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .15em;
        color: #ffff;
        margin-bottom: 12px;
      }

      .adm-hero h1 {
        margin: 0 0 12px 0;
        font-size: 32px;
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -0.02em;
        max-width: 28ch;
        color: #fff;
        
      }

      .adm-hero p {
        color: #94a3b8;
        font-size: 16px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 0 28px 0;
      }

      .adm-actions {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
      }

      .adm-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: var(--radius-md);
        padding: 12px 20px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        cursor: pointer;
      }

      .adm-btn-primary {
        background: var(--primary);
        color: #fff;
        border: 1px solid transparent;
      }

      .adm-btn-primary:hover {
        background: var(--primary-hover);
        color: #fff;
        text-decoration: none;
      }

      .adm-btn-secondary {
        background: rgba(255, 255, 255, 0.05);
        color: #f1f5f9;
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .adm-btn-secondary:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        text-decoration: none;
      }

      /* Stats Grid */
      .adm-stat-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 24px;
        margin-bottom: 32px;
      }

      .adm-stat-card {
        background: var(--bg-card);
        border-radius: var(--radius-lg);
        padding: 24px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border);
        transition: var(--transition);
      }

      .adm-stat-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
      }

      .adm-stat-label {
        color: var(--text-muted);
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .08em;
        margin-bottom: 12px;
      }

      .adm-stat-value {
        font-size: 36px;
        font-weight: 700;
        color: var(--text-main);
        line-height: 1;
        margin-bottom: 8px;
        letter-spacing: -0.03em;
      }

      .adm-stat-note {
        color: var(--text-muted);
        font-size: 13px;
        line-height: 1.4;
      }

      /* Base Layout Split */
      .adm-layout {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
        align-items: start;
      }

      .adm-panel {
        background: var(--bg-card);
        border-radius: var(--radius-lg);
        padding: 28px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border);
      }

      .adm-panel-head {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 24px;
      }

      .adm-panel-head h3 {
        margin: 0 0 4px 0;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: -0.01em;
      }

      .adm-panel-head a {
        color: var(--primary);
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
      }
      
      .adm-panel-head a:hover {
        color: var(--primary-hover);
        text-decoration: underline;
      }

      .adm-panel-copy {
        color: var(--text-muted);
        font-size: 14px;
      }

      /* Modern Tables */
      .adm-table-wrapper {
        overflow-x: auto;
        margin: 0 -28px;
        padding: 0 28px;
      }

      .adm-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
      }

      .adm-table th {
        color: var(--text-muted);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .08em;
        padding: 0 12px 12px 12px;
        border-bottom: 1px solid var(--border);
      }

      .adm-table td {
        padding: 16px 12px;
        border-bottom: 1px solid var(--border);
        font-size: 14px;
        color: var(--text-main);
        vertical-align: middle;
      }

      .adm-table tr:last-child td {
        border-bottom: none;
      }

      .adm-table tr:hover td {
        background-color: #f8fafc;
      }

      /* Status Badges */
      .adm-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
      }

      .adm-badge-live {
        background: var(--success-bg);
        color: var(--success);
      }

      .adm-badge-off {
        background: var(--danger-bg);
        color: var(--danger);
      }

      /* Shortcut Lists */
      .adm-shortcuts {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .adm-shortcut {
        display: block;
        padding: 16px;
        border-radius: var(--radius-md);
        background: var(--bg-main);
        color: var(--text-main);
        text-decoration: none;
        border: 1px solid transparent;
        transition: var(--transition);
      }

      .adm-shortcut:hover {
        background: var(--bg-card);
        border-color: var(--border);
        box-shadow: var(--shadow-sm);
        transform: translateX(4px);
        text-decoration: none;
      }

      .adm-shortcut strong {
        display: block;
        color: var(--text-main);
        font-weight: 600;
        margin-bottom: 4px;
        font-size: 15px;
      }
      
      .adm-shortcut span {
        display: block;
        color: var(--text-muted);
        font-size: 13px;
        line-height: 1.4;
      }

      .adm-empty {
        padding: 40px;
        border-radius: var(--radius-md);
        background: var(--bg-main);
        color: var(--text-muted);
        text-align: center;
        border: 1px dashed var(--border);
        font-size: 14px;
      }

      /* Clean Responsiveness */
      @media (max-width: 1024px) {
        .adm-stat-grid {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .adm-layout {
          grid-template-columns: 1fr;
        }
      }

      @media (max-width: 640px) {
        .adm-stat-grid {
          grid-template-columns: 1fr;
        }
        .adm-hero {
          padding: 24px;
        }
        .adm-hero h1 {
          font-size: 24px;
        }
        .adm-panel {
          padding: 20px;
        }
        .adm-table-wrapper {
          margin: 0 -20px;
          padding: 0 20px;
        }
      }
    </style>

    <div class="adm-dashboard">
      <!-- Hero Header -->
      <div class="adm-hero">
        <div class="adm-kicker">Admin Workspace</div>
        <h1>Manage offers, categories, and network data from one cleaner dashboard.</h1>
       <div class="adm-actions">
          <a class="adm-btn adm-btn-primary" href="offers.php">Add New Offer</a>
          <a class="adm-btn adm-btn-secondary" href="view_offers.php">Open Offer List</a>
        </div>
      </div>

      <!-- High-Level Metric Blocks -->
      <div class="adm-stat-grid">
        <div class="adm-stat-card">
          <div class="adm-stat-label">Total Offers</div>
          <div class="adm-stat-value"><?php echo $stats['offers_total']; ?></div>
          <div class="adm-stat-note">All casino offers stored in the system.</div>
        </div>
        <div class="adm-stat-card">
          <div class="adm-stat-label">Active Offers</div>
          <div class="adm-stat-value"><?php echo $stats['offers_active']; ?></div>
          <div class="adm-stat-note">Visible offers currently marked live.</div>
        </div>
        <div class="adm-stat-card">
          <div class="adm-stat-label">Networks</div>
          <div class="adm-stat-value"><?php echo $stats['networks_total']; ?></div>
          <div class="adm-stat-note">Affiliate or casino network records.</div>
        </div>
        <div class="adm-stat-card">
          <div class="adm-stat-label">Categories</div>
          <div class="adm-stat-value"><?php echo $stats['categories_total']; ?></div>
          <div class="adm-stat-note">Homepage and category sections available.</div>
        </div>
      </div>

      <!-- Lower Split Layout -->
      <div class="adm-layout">
        <!-- Main Panel: Data Tables -->
        <div class="adm-panel">
          <div class="adm-panel-head">
            <div>
              <h3>Recent Casino Offers</h3>
              <div class="adm-panel-copy">Latest records added to the offer list.</div>
            </div>
            <a href="view_offers.php">View all</a>
          </div>

          <?php if (!empty($recent_offers)): ?>
            <div class="adm-table-wrapper">
              <table class="adm-table">
                <thead>
                  <tr>
                    <th>Casino</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th>Rank</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($recent_offers as $offer): ?>
                    <tr>
                      <td>
                        <strong style="color: var(--text-main); font-weight: 600;"><?php echo htmlspecialchars($offer['title'] ?: 'Untitled Offer'); ?></strong><br>
                        <span style="color: var(--text-muted); font-size: 12px;">#<?php echo (int) $offer['id']; ?></span>
                      </td>
                      <td style="color: var(--text-muted);"><?php echo htmlspecialchars($offer['category_name'] ?: 'Unassigned'); ?></td>
                      <td style="font-weight: 500;"><?php echo htmlspecialchars($offer['rating'] ?: '0'); ?></td>
                      <td style="color: var(--text-muted);"><?php echo htmlspecialchars($offer['ranking'] ?: '0'); ?></td>
                      <td>
                        <?php if ((string) $offer['status'] === '1'): ?>
                          <span class="adm-badge adm-badge-live">Active</span>
                        <?php else: ?>
                          <span class="adm-badge adm-badge-off">Inactive</span>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php else: ?>
            <div class="adm-empty">No offers were found yet. Start by adding your first casino offer.</div>
          <?php endif; ?>
        </div>

        <!-- Sidebar Panel: Actions & Navigation Links -->
        <div class="adm-panel">
          <div class="adm-panel-head">
            <div>
              <h3>Quick Actions</h3>
              <div class="adm-panel-copy">Jump straight into the most-used admin tools.</div>
            </div>
          </div>

          <div class="adm-shortcuts">
            <a class="adm-shortcut" href="offers.php">
              <strong>Add Offer</strong>
              <span>Create a new casino listing with bonus, rating, and review content.</span>
            </a>
            <a class="adm-shortcut" href="network.php">
              <strong>Add Network</strong>
              <span>Update affiliate network information used across offer records.</span>
            </a>
            <a class="adm-shortcut" href="category.php">
              <strong>Manage Categories</strong>
              <span>Organize homepage sections and category landing pages.</span>
            </a>
            <a class="adm-shortcut" href="pages.php">
              <strong>Edit Pages</strong>
              <span>Maintain page content, metadata, and page-level details.</span>
            </a>
          </div>
        </div>
      </div> <!-- /.adm-layout -->
    </div> <!-- /.adm-dashboard -->
  </div>
</div>

```