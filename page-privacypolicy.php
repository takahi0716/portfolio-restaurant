<?php get_header(); ?>
<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">
      <!-- ↓幅768px以下で表示↓ -->
      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sitemap-sp.jpg"
        media="(max-width: 767px)" />
      <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sitemap-pc.jpg" alt="小魚とサンゴの写真">
    </picture>
    <h1 class="sub-mv__title">Privacy Policy</h1>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <!-- 下層ページ -->
  <section class="page-privacypolicy-layout page-privacypolicy ornament">
    <div class="page-privacypolicy__inner inner">
      <div class="page-privacypolicy__content page-content">
        <?php if ( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <?php endwhile;?>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>