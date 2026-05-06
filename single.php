<?php get_header(); ?>

<!-- Progress Bar -->
<div class="reading-progress-bar" id="readingProgress"></div>

<section id="page-header" class="blog-header single-page-header">
    <div class="header-overlay"></div>
    <div class="header-content">
        <div class="post-category-badge">
            <?php $categories = get_the_category(); if ($categories) echo esc_html($categories[0]->name); ?>
        </div>
        <h1><?php the_title(); ?></h1>
        <div class="header-meta">
            <span class="meta-author">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <?php the_author(); ?>
            </span>
            <span class="meta-divider">·</span>
            <span class="meta-date">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <?php echo get_the_date('F j, Y'); ?>
            </span>
            <span class="meta-divider">·</span>
            <span class="meta-read-time">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <?php
                $content = get_the_content();
                $word_count = str_word_count(strip_tags($content));
                $read_time = ceil($word_count / 200);
                echo $read_time . ' min read';
                ?>
            </span>
        </div>
    </div>
</section>

<section id="single-blog" class="section-p1">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="single-blog-wrapper">

        <!-- Main Content Column -->
        <article class="single-blog-container">

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="single-blog-img">
                    <?php the_post_thumbnail('large'); ?>
                    <div class="img-shimmer"></div>
                </div>
            <?php endif; ?>

            <!-- Content -->
            <div class="single-blog-content">
                <?php the_content(); ?>
            </div>

            <!-- Tags -->
            <?php $tags = get_the_tags(); if ($tags) : ?>
            <div class="post-tags">
                <span class="tags-label">Tags:</span>
                <?php foreach($tags as $tag) : ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-pill"><?php echo $tag->name; ?></a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Author Box -->
            <div class="author-box">
                <div class="author-avatar">
                    <?php echo get_avatar(get_the_author_meta('ID'), 70); ?>
                </div>
                <div class="author-info">
                    <span class="author-label">Written by</span>
                    <h4><?php the_author(); ?></h4>
                    <p><?php the_author_meta('description'); ?></p>
                </div>
            </div>

            <!-- Post Navigation -->
            <nav class="post-navigation">
                <div class="nav-prev">
                    <?php $prev = get_previous_post(); if ($prev) : ?>
                        <a href="<?php echo get_permalink($prev); ?>">
                            <span class="nav-label">← Previous</span>
                            <span class="nav-title"><?php echo get_the_title($prev); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="nav-next">
                    <?php $next = get_next_post(); if ($next) : ?>
                        <a href="<?php echo get_permalink($next); ?>">
                            <span class="nav-label">Next →</span>
                            <span class="nav-title"><?php echo get_the_title($next); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>

            <!-- Back Button -->
            <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="back-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                Back to Blog
            </a>

        </article>

        <!-- Sidebar -->
        <aside class="single-blog-sidebar">

            <!-- Table of Contents -->
            <div class="sidebar-widget toc-widget">
                <h5 class="widget-title">In This Article</h5>
                <div id="table-of-contents" class="toc-list"></div>
            </div>

            <!-- Recent Posts -->
            <div class="sidebar-widget recent-widget">
                <h5 class="widget-title">Recent Posts</h5>
                <?php
                $recent = new WP_Query(array('posts_per_page' => 4, 'post__not_in' => array(get_the_ID())));
                while ($recent->have_posts()) : $recent->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="recent-post-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="recent-thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <?php endif; ?>
                    <div class="recent-info">
                        <span class="recent-title"><?php the_title(); ?></span>
                        <span class="recent-date"><?php echo get_the_date('M j, Y'); ?></span>
                    </div>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

        </aside>

    </div>

    <?php endwhile; endif; ?>
</section>

<!-- Newsletter -->
<section id="newsLetter" class="section-p1 section-m1">
    <div class="newsletter-inner">
        <div class="newstext">
            <span class="news-eyebrow">Stay in the loop</span>
            <h4>Sign Up For Newsletter</h4>
            <p>Get email updates about our latest articles and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="email" placeholder="Your email address">
            <button class="normal">Subscribe</button>
        </div>
    </div>
</section>

<script>
// Reading Progress Bar
window.addEventListener('scroll', () => {
    const article = document.querySelector('.single-blog-content');
    if (!article) return;
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = (scrollTop / docHeight) * 100;
    document.getElementById('readingProgress').style.width = Math.min(progress, 100) + '%';
});

// Auto Table of Contents
document.addEventListener('DOMContentLoaded', () => {
    const content = document.querySelector('.single-blog-content');
    const tocContainer = document.getElementById('table-of-contents');
    if (!content || !tocContainer) return;
    const headings = content.querySelectorAll('h2, h3');
    if (headings.length < 2) { document.querySelector('.toc-widget').style.display = 'none'; return; }
    headings.forEach((h, i) => {
        const id = 'heading-' + i;
        h.setAttribute('id', id);
        const link = document.createElement('a');
        link.href = '#' + id;
        link.textContent = h.textContent;
        link.className = 'toc-item toc-' + h.tagName.toLowerCase();
        link.addEventListener('click', (e) => {
            e.preventDefault();
            h.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
        tocContainer.appendChild(link);
    });
});
</script>

<?php get_footer(); ?>