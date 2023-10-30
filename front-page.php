<?php get_header() ?>
<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about-us/'));
$menu = esc_url(home_url('/menu/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$contact = esc_url(home_url('/contact/'));
$sitemap = esc_url(home_url('/sitemap/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));

?>

<main>
  <!-- ローディング -->
  <div class="loading">
    <div class="loading__backgroud">
    </div>
    <div class="loading__image-wrap">
      <div class="loading__image-left">
      </div>
      <div class="loading__image-right">
      </div>
      <div class="loading__title">
        <p class="loading__main">RESTAURANT</p>
        <p class="loading__sub">Epicurean Haven</p>
      </div>
    </div>
  </div>
  <!-- メインビュー -->
  <div class="top-mv mv">
    <div class="mv_slide slide">
      <?php
      $mv_image_group = SCF::get('mv_image_group');
      foreach ($mv_image_group as $fields) :
        if ($fields['sp_mv_image'] !== "" and $fields['pc_mv_image'] !== "") :
      ?>

      <picture class="slide__image">

        <source srcset="<?php echo wp_get_attachment_url($fields['sp_mv_image']); ?>" media="(max-width: 767px)" />

        <img src="<?php echo wp_get_attachment_url($fields['pc_mv_image']); ?>"
          alt="<?php echo $fields['alt-text']; ?>">
      </picture>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <div class="mv__title">
      <p class="mv__main">RESTAURANT</p>
      <p class="mv__sub">Epicurean Haven</p>
    </div>
  </div>

  <!-- メニュー -->
  <section class="top-menu menu">
    <div class="menu__inner inner">
      <div class="menu__title section-title">
        <p class="section-title__main">menu</p>
        <h2 class="section-title__sub">メニュー</h2>
      </div>

      <!-- Swiper -->
      <div class="menu__swiper-buttons">
        <div class="menu__swiper-button swiper-button">
          <a href="#" class="swiper-button__prev swiper-button-prev">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/prev-btn.png" alt="スライドを前に戻すボタン">
          </a>
          <a href="#" class="swiper-button__next swiper-button-next">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/next-btn.png" alt="スライドを次に進めるボタン">
          </a>
        </div>
      </div>

      <div class="menu__swiper swiper js-menu-swiper">
        <div class="menu__swiper-wrapper swiper-wrapper">

          <?php
          $args = array(
            'post_type' => 'menu',
            'post_status' => 'publish', // 公開済の投稿を指定
            'posts_per_page' => -1,
            'orderby' => 'menu_order', // 順序順で表示
            'order' => 'DESC',
          );
          $the_view_query = new WP_Query($args);
          if ($the_view_query->have_posts()) :
            while ($the_view_query->have_posts()) : $the_view_query->the_post();
          ?>
          <div class="menu__cards swiper-slide">
            <!-- menu-card -->
            <div class="menu__card">
              <div class="menu-card">
                <figure class="menu-card__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>の画像">
                  <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/no-image.jpg" alt="noimage">
                  <?php endif; ?>
                </figure>
                <div class="menu-card__inner">
                  <div class="menu-card__body">
                    <?php
                        $terms = get_the_terms($post->ID, 'menu_category');
                        if ($terms) { ?>
                    <div class="menu-card__category">

                      <?php echo $terms[0]->name; ?>

                    </div>
                    <?php } ?>
                    <h3 class="menu-card__title "><?php the_title(); ?></h3>
                  </div>
                  <div class="menu-card__price">
                    <p class="menu-card__person">
                      期間限定
                    </p>
                    <p class="menu-card__price-text">
                      <?php
                          $price_group = get_field('menu_price-group');
                          if ($price_group) :
                            $previous_price = $price_group['previous_price'];
                            $current_price = $price_group['current_price'];
                          ?>
                      <span class="menu-card__price-previous"><?php echo $previous_price; ?></span>
                      <span class="menu-card__price-current"><?php echo $current_price; ?></span>
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="menu__wrapper">
        <div class="information__button">
          <!-- button -->
          <a href="<?php echo $menu; ?>" class="button"><span class="button__text">View
              more</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- About us -->
  <section class="top-about about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__main">about us</p>
        <h2 class="section-title__sub">私たちについて</h2>
      </div>

      <div class="about__contaner">
        <picture class="about__image-right">

          <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/op1-CYnQUywzBtI-unsplash.jpg"
            media="(max-width: 767px)" />

          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/op1-CYnQUywzBtI-unsplash.jpg"
            alt="料理人の写真">
        </picture>
        <div class="about__image-left">
          <img
            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/redcharlie-redcharlie1-t-7KEq9M0b0-unsplash.jpg"
            alt="料理人の写真">
        </div>
        <div class="about__body">
          <h3 class="about__sub-title">
            Indulge in <br>
            Culinary Artistry
          </h3>
          <div class="about__content">
            <p class="about__text">
              至極の美食と上質なサービスが紡ぐ、贅沢なひととき。厳選された極上の食材とシェフの繊細な技巧が、あなたの味蕾を魅了します。<br>
              私たちのレストランは、食通たちが夢見る場所。伝統と革新が交差する、唯一無二の味わいをご体験ください。
            </p>
            <div class="about__wrapper">
              <!-- button -->
              <a href="<?php echo $about; ?>" class="button"><span class="button__text">View
                  more</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->
  <section class="top-information information">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__main">information</p>
        <h2 class="section-title__sub">サービス情報</h2>
      </div>
      <div class="infomation__contaner">
        <div class="information__image colorbox js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/dinner.jpg" alt="ディナーの画像">
        </div>
        <div class="information__body">
          <h3 class="information__article-title">ディナー</h3>
          <p class="information__text">
            夕暮れの優美な雰囲気の中、私たちのディナーは、シェフの芸術的な技巧が光る繊細な一皿へと昇華します。<br>
            新鮮なシーフード、希少な和牛、季節の最高の食材を使用した料理は、五感を刺激し、舌を魅了します。シャンパンやワインと共に、至福の夜をお楽しみください。
          </p>

          <div class="information__wrapper">
            <!-- button -->
            <a href="<?php echo $information; ?>" class="button"><span class="button__text">View
                more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section class="top-blog blog">

    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__main section-title__main--white">
          blog
        </p>
        <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
      </div>
      <!-- article-cards -->
      <div class="blog__cards article-cards">

        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish', // 公開済の投稿を指定
          'posts_per_page' => 3,
          'orderby' => 'post_date',
          'order' => 'DESC',
        );
        $the_view_query = new WP_Query($args);
        if ($the_view_query->have_posts()) :
          while ($the_view_query->have_posts()) : $the_view_query->the_post();
        ?>
        <div class="article-cards__item">
          <?php get_template_part('parts/article-card'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="blog__wrapper">
        <!-- button -->
        <a href="<?php echo $blog; ?>" class="button"><span class="button__text">View more</span></a>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section class="top-voice voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__main">voice</p>
        <h2 class="section-title__sub">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">

        <?php
        $args = array(
          'post_type' => 'voice',
          'post_status' => 'publish', // 公開済の投稿を指定
          'posts_per_page' => 2,
          'orderby' => 'post_date',
          'order' => 'DESC',
        );
        $the_view_query = new WP_Query($args);
        if ($the_view_query->have_posts()) :
          while ($the_view_query->have_posts()) : $the_view_query->the_post();
        ?>
        <div class="voice-cards__item">
          <div class="voice-card">
            <div class="voice-card__header">
              <div class="voice-card__wrapper">
                <div class="voice-card__container">
                  <?php
                      $guset_group = get_field('guest_group');
                      if ($guset_group) :
                        $age = $guset_group['age'];
                        $gender = $guset_group['gender'];
                      ?>
                  <p class="sidebar-voice__guest"><?php echo $age, '(', $gender, ')'; ?></p>
                  <?php endif; ?>
                </div>
                <h3 class="voice-card__title"><?php the_title(); ?></h3>
              </div>
              <div class="voice-card__image colorbox js-colorbox">
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>の画像">
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/no-image.jpg" alt="noimage">
                <?php endif; ?>
              </div>
            </div>

            <p class="voice-card__text">
              <?php echo wp_trim_words(get_the_content(), 196, '[…]'); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="voice__wrapper">
        <!-- button -->
        <a href="<?php echo $voice; ?>" class="button"><span class="button__text">View more</span></a>
      </div>
    </div>
  </section>

  <!-- price -->
  <section class="top-price price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__main">price</p>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__flex">
        <picture class="price__image colorbox js-colorbox">

          <source
            srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/volkan-vardar-1H30uRC1plc-unsplash.jpg"
            media="(max-width: 767px)" />

          <img
            src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/volkan-vardar-1H30uRC1plc-unsplash.jpg"
            alt="店内の写真">
        </picture>
        <div class="price__contaner">
          <?php $dinner_group = SCF::get_option_meta('price_option', 'dinner');
          if ($dinner_group[0]['dinner_course_name']) : ?>
          <div class="price__list data-list">
            <h3 class="data-list__title"><span>ディナー</span></h3>
            <dl class="data-list__data">
              <?php foreach ($dinner_group as $fields) :
                  if ($fields['dinner_course_name'] !== "" and $fields['dinner_course_price'] !== "") :
                ?>
              <dt><?php echo $fields['dinner_course_name']; ?></dt>
              <dd><?php echo $fields['dinner_course_price']; ?></dd>
              <?php endif;
                endforeach; ?>
            </dl>
          </div>
          <?php endif; ?>

          <?php $launch_group = SCF::get_option_meta('price_option', 'launch');
          if ($launch_group[0]['launch_course_name']) : ?>
          <div class="price__list data-list">
            <h3 class="data-list__title"><span>ランチ</span></h3>
            <dl class="data-list__data">
              <?php foreach ($launch_group as $fields) :
                  if ($fields['launch_course_name'] !== "" and $fields['launch_course_price'] !== "") :
                ?>
              <dt><?php echo $fields['launch_course_name']; ?></dt>
              <dd><?php echo $fields['launch_course_price']; ?></dd>
              <?php endif;
                endforeach; ?>
            </dl>
          </div>
          <?php endif; ?>

          <?php $breakfast_group = SCF::get_option_meta('price_option', 'breakfast');
          if ($breakfast_group[0]['breakfast_course_name']) : ?>
          <div class="price__list data-list">
            <h3 class="data-list__title"><span>ブレックファースト</span></h3>
            <dl class="data-list__data">
              <?php foreach ($breakfast_group as $fields) :
                  if ($fields['breakfast_course_name'] !== "" and $fields['breakfast_course_price'] !== "") :
                ?>
              <dt><?php echo $fields['breakfast_course_name']; ?></dt>
              <dd><?php echo $fields['breakfast_course_price']; ?></dd>
              <?php endif;
                endforeach; ?>
            </dl>
          </div>
          <?php endif; ?>

          <?php $special_group = SCF::get_option_meta('price_option', 'special');
          if ($special_group[0]['special_course_name']) : ?>
          <div class="price__list data-list">
            <h3 class="data-list__title"><span>スペシャルコース</span></h3>
            <dl class="data-list__data">
              <?php foreach ($special_group as $fields) :
                  if ($fields['special_course_name'] !== "" and $fields['special_course_price'] !== "") :
                ?>
              <dt><?php echo $fields['special_course_name']; ?></dt>
              <dd><?php echo $fields['special_course_price']; ?></dd>
              <?php endif;
                endforeach; ?>
            </dl>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="price__wrapper">
        <!-- button -->
        <a href="<?php echo $price; ?>" class="button"><span class="button__text">View more</span></a>
      </div>
    </div>
  </section>

  <?php get_footer() ?>