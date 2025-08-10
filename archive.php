    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
      <?php get_header(); ?>
    </head>

    <body <?php body_class(); ?>>
      <!-- Navigation -->
      <?php get_template_part('includes/header'); ?>

      <!-- Page Header -->
      <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="site-heading">
                <?php if (is_category()): ?>
                  <h1>Category</h1>
                <?php elseif (is_author()): ?>
                  <h1>Author</h1>
                <?php elseif (is_date()): ?>
                  <h1>Date</h1>
                <?php else: ?>
                  <h1>Tag</h1>
                <?php endif; ?>
                <span class="subheading"><?php wp_title(''); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                <div class="post-preview">
                  <a href="<?php the_permalink(); ?>">
                    <h2 class="post-title">
                      <?php echo the_title(); ?>
                    </h2>
                    <h3 class="post-subtitle">
                      <!-- <?php the_excerpt(); ?> -->
                    </h3>
                  </a>
                  <p class="post-meta">Posted by
                    <a href="#"><?php the_author(); ?></a>
                    <?php the_time('Y/m/d'); ?>
                  </p>
                </div>
                <hr>
              <?php endwhile; ?>

              <!-- Pager -->
              <div class="clearfix">
                <a class="btn btn-primary float-left" href="#"> &arrl; Newer Posts</a>
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
              </div>

            <?php else : ?>
              <p>投稿が見つかりません。</p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <hr>

      <!-- Footer -->
      <?php get_template_part('includes/footer'); ?>

      <?php get_footer(); ?>
    </body>

    </html>