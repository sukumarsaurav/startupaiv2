<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../config/database.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$blog = new Blog($db);

// Get the slug from the URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Get post data
$post = $blog->getPostBySlug($slug);

// If post not found, redirect to blog listing
if (!$post) {
    header('Location: /blog');
    exit();
}

// Set SEO data for the post
$seo_data = [
    'title' => $post['title'] . ' | StartupAI Blog',
    'description' => $post['meta_description'],
    'keywords' => $post['meta_keywords']
];

require_once '../components/header.php';
?>

<!-- Blog Post Header -->
<section class="blog-post-header section-spacing">
    <div class="content-container">
        <div class="post-header-container">
            <nav class="breadcrumb-nav">
                <ol class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                    <li class="breadcrumb-item">
                        <a href="/blog?category=<?php echo urlencode($post['category']); ?>">
                            <?php echo htmlspecialchars($post['category']); ?>
                        </a>
                    </li>
                    <li class="breadcrumb-item current">
                        <?php echo htmlspecialchars($post['title']); ?>
                    </li>
                </ol>
            </nav>
            
            <h1 class="post-title"><?php echo htmlspecialchars($post['title']); ?></h1>
            
            <div class="post-meta">
                <span class="post-category"><?php echo htmlspecialchars($post['category']); ?></span>
                <span class="post-date">
                    <i class="far fa-calendar-alt"></i>
                    <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                </span>
                <span class="post-author">
                    <i class="far fa-user"></i>
                    By <?php echo htmlspecialchars($post['author']); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<?php if ($post['featured_image']): ?>
<section class="blog-featured-image section-spacing-sm">
    <div class="content-container">
        <div class="featured-image-container">
            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>"
                 class="featured-post-image"
                 alt="<?php echo htmlspecialchars($post['title']); ?>">
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Blog Content -->
<section class="blog-content section-spacing">
    <div class="content-container">
        <div class="post-content-container">
            <article class="post-content">
                <?php echo $post['content']; ?>
            </article>
            
            <!-- Social Share -->
            <div class="social-share-container">
                <h5 class="share-title">Share this article</h5>
                <div class="share-buttons">
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($post['title']); ?>"
                       class="share-button twitter"
                       target="_blank">
                        <i class="fab fa-twitter"></i> Tweet
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&title=<?php echo urlencode($post['title']); ?>"
                       class="share-button linkedin"
                       target="_blank">
                        <i class="fab fa-linkedin"></i> Share
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                       class="share-button facebook"
                       target="_blank">
                        <i class="fab fa-facebook"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
<section class="related-posts section-spacing section-light">
    <div class="content-container">
        <div class="section-header">
            <h2 class="section-heading">Related Articles</h2>
        </div>
        <div class="related-posts-grid">
            <?php
            $related_query = "SELECT id, title, slug, excerpt, featured_image, published_date 
                            FROM blog_posts 
                            WHERE category = :category 
                            AND id != :current_id 
                            AND status = 'published' 
                            ORDER BY published_date DESC 
                            LIMIT 3";
            $stmt = $db->prepare($related_query);
            $stmt->bindParam(':category', $post['category']);
            $stmt->bindParam(':current_id', $post['id']);
            $stmt->execute();
            while ($related_post = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
                <div class="related-post-item">
                    <div class="post-card">
                        <?php if ($related_post['featured_image']): ?>
                            <div class="post-image">
                                <img src="<?php echo htmlspecialchars($related_post['featured_image']); ?>"
                                     alt="<?php echo htmlspecialchars($related_post['title']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="/blog/<?php echo htmlspecialchars($related_post['slug']); ?>">
                                    <?php echo htmlspecialchars($related_post['title']); ?>
                                </a>
                            </h3>
                            <p class="post-excerpt">
                                <?php echo htmlspecialchars($related_post['excerpt']); ?>
                            </p>
                            <a href="/blog/<?php echo htmlspecialchars($related_post['slug']); ?>"
                               class="read-more-btn">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php require_once '../components/footer.php'; ?> 