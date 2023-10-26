<?php get_header(); ?>

<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">
      <!-- ↓幅768px以下で表示↓ -->
      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-sp.jpg" media="(max-width: 767px)" />
      <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-pc.jpg" alt="小魚とサンゴの写真">
    </picture>
    <h1 class="sub-mv__title">Site MAP</h1>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb-layout">
    <?php get_template_part('parts/breadcrumb'); ?>
  </div>

  <!-- 下層ページ -->
  <section class="page-sitemap page-sitemap-layout">
    <div class="page-sitemap__inner inner">
      <div class="page-sitemap__lists">
        <!-- ページリスト -->
        <?php get_template_part('parts/lists'); ?>
      </div>

    </div>
  </section>

  <?php get_footer(); ?>