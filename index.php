    <!DOCTYPE html>
    <html lang="<?php get_language_attributes(); ?>">

    <head>
      <?php get_header(); ?>
    </head>

    <body>

      <!-- Navigation -->
      <?php get_template_part('includes/header'); ?>

      <!-- Page Header -->
      <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="site-heading">
                <h1>Clean Blog</h1>
                <span class="subheading">A Blog Theme by Start Bootstrap</span>
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