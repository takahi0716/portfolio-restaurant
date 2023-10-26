<?php get_header(); ?>

<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">
      <!-- ↓幅768px以下で表示↓ -->
      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-sp.jpg"
        media="(max-width: 767px)" />
      <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about-pc.jpg" alt="ダイバーの写真">
    </picture>
    <h1 class="sub-mv__title">about us</h1>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb-layout">
    <?php get_template_part('parts/breadcrumb'); ?>
  </div>
  <!-- 下層ページ -->
  <section class="page-about-layout about ornament">
    <div class="about__inner inner">
      <div class="about__contaner about__contaner--sub">
        <picture class="about__image-right">
          <!-- ↓幅768px以下で表示↓ -->
          <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/op1-CYnQUywzBtI-unsplash.jpg"
            media="(max-width: 767px)" />
          <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/op1-CYnQUywzBtI-unsplash.jpg"
            alt="料理人の写真">
        </picture>
        <div class="about__image-left about__image-left--sub">
          <img
            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/redcharlie-redcharlie1-t-7KEq9M0b0-unsplash.jpg"
            alt="料理人の写真">
        </div>
        <div class="about__body">
          <h2 class="about__sub-title about__sub-title--sub">
            Indulge in <br>
            Culinary Artistry
          </h2>
          <div class="about__content">
            <p class="about__text">
              至極の美食と上質なサービスが紡ぐ、贅沢なひととき。厳選された極上の食材とシェフの繊細な技巧が、あなたの味蕾を魅了します。<br>
              私たちのレストランは、食通たちが夢見る場所。伝統と革新が交差する、唯一無二の味わいをご体験ください。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-about-gallery gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title section-title">
        <p class="section-title__main">gallery</p>
        <h2 class="section-title__sub">フォト</h2>
      </div>

      <div class="gallery__modal js-modal-window">
      </div>

      <div class="gallery__container tile">
        <?php $imgGroup = SCF::get_option_meta('gallery','AboutUs');
        foreach ($imgGroup as $fields) :
          $imgurl = wp_get_attachment_image_src($fields['aboutus_image'], 'large');
        ?>
        <div class="tile__item js-tile-item">
          <img src="<?php echo $imgurl[0]; ?>" alt="gallery">
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>