<?php get_header(); ?>
<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">

      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-sp.jpg" media="(max-width: 767px)" />

      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-pc.jpg" alt="小魚とサンゴの写真">
    </picture>
    <h1 class="sub-mv__title">Privacy Policy</h1>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb-layout">
    <?php get_template_part('parts/breadcrumb'); ?>
  </div>

  <!-- 下層ページ -->
  <section class="page-privacypolicy-layout page-privacypolicy ornament">
    <div class="page-privacypolicy__inner inner">
      <div class="page-privacypolicy__content page-content">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>