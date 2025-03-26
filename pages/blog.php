<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../config/database.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$blog = new Blog($db);

// Get current page number
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 9;

// Get posts for current page
$posts = $blog->getAllPosts($page, $per_page);
$total_posts = $blog->getTotalPosts();
$total_pages = ceil($total_posts / $per_page);

// Get current category if set
$current_category = isset($_GET['category']) ? $_GET['category'] : null;
if ($current_category) {
    $posts = $blog->getPostsByCategory($current_category, $page, $per_page);
}

// SEO metadata for blog listing
$seo_data = [
    'title' => 'Blog - Latest Insights on Digital Marketing & Web Development | StartupAI',
    'description' => 'Explore our latest articles on digital marketing, web development, AI, and business growth strategies. Expert insights to help your business succeed online.',
    'keywords' => 'digital marketing blog, web development articles, business growth tips, AI insights, StartupAI blog'
];

require_once '../components/header.php';
?>

<!-- Page Header -->
<section class="page-header section-spacing">
    <div class="content-container">
        <div class="header-grid">
            <div class="page-header-content text-center">
                <h1 class="page-title">Our Blog</h1>
                <p class="page-description">Insights, tips, and strategies to help your business grow online</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories -->
<section class="blog-categories section-spacing-sm">
    <div class="content-container">
        <div class="categories-container text-center">
            <a href="/blog" class="category-btn <?php echo !$current_category ? 'active' : ''; ?>">All</a>
            <?php
            $categories_query = "SELECT * FROM blog_categories ORDER BY name";
            $stmt = $db->prepare($categories_query);
            $stmt->execute();
            while ($category = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $active = $current_category === $category['slug'] ? 'active' : '';
                echo '<a href="/blog?category=' . $category['slug'] . '" class="category-btn ' . $active . '">' . $category['name'] . '</a>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="blog-grid section-spacing">
    <div class="content-container">
        <div class="posts-grid">
            <?php foreach ($posts as $post): ?>
                <div class="post-item" data-aos="fade-up">
                    <div class="post-card">
                        <?php if ($post['featured_image']): ?>
                            <div class="post-image">
                                <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                                     alt="<?php echo htmlspecialchars($post['title']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category"><?php echo htmlspecialchars($post['category']); ?></span>
                                <span class="post-date">
                                    <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                                </span>
                            </div>
                            <h3 class="post-title">
                                <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>">
                                    <?php echo htmlspecialchars($post['title']); ?>
                                </a>
                            </h3>
                            <p class="post-excerpt">
                                <?php echo htmlspecialchars($post['excerpt']); ?>
                            </p>
                            <div class="post-footer">
                                <div class="post-author">
                                    By <?php echo htmlspecialchars($post['author']); ?>
                                </div>
                                <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" 
                                   class="read-more-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="pagination-container">
                <div class="pagination">
                    <?php if ($page > 1): ?>
                        <a href="?page=<?php echo $page - 1; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>" class="pagination-item prev">
                            Previous
                        </a>
                    <?php endif; ?>
                    
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <a href="?page=<?php echo $i; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>" class="pagination-item <?php echo $i === $page ? 'active' : ''; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>
                    
                    <?php if ($page < $total_pages): ?>
                        <a href="?page=<?php echo $page + 1; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>" class="pagination-item next">
                            Next
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once '../components/footer.php'; ?> 