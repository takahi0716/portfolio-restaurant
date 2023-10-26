<?php get_header(); ?>
<?php
$contact = esc_url(home_url('/contact/'));
?>
<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">
      <!-- ↓幅768px以下で表示↓ -->
      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/menu-sp.jpg" media="(max-width: 767px)" />
      <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/menu-pc.jpg" alt="ダイバーの写真">
    </picture>
    <h1 class="sub-mv__title">menu</h1>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb-layout">
    <?php get_template_part('parts/breadcrumb'); ?>
  </div>

  <!-- 下層ページ -->

  <div class="archive-menu archive-menu-layout ornament">
    <div class="archive-menu__inner inner">
      <div class="archive-menu__tab tab">
        <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="tab__text">ALL</a>
        <?php $term_id = get_queried_object_id(); // タームIDの取得
        ?>
        <?php $terms = get_terms('menu_category', 'hide_empty=0'); //空のタームも出力 
        ?>
        <?php foreach ($terms as $term) :
          if ($term->term_id == $term_id) : ?>
            <span class="tab__text is-active"><?php echo $term->name; ?></span>
          <?php else : ?>
            <a href="<?php echo get_term_link($term->term_id); ?>" class="tab__text"><?php echo $term->name; ?></a>
        <?php endif;
        endforeach; ?>
      </div>
      <div class="archive-menu__cards archive-menu-cards">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post(); ?>

            <?php
            $previous = get_field('previous');
            $current = get_field('price-current');
            $card__text = get_field('menu-card__text');
            $period = get_field('period');
            ?>
            <div class="archive-menu-cards__item">
              <div class="menu-card">
                <figure class="menu-card__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>の画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/no-image.jpg" alt="noimage">
                  <?php endif; ?>
                </figure>
                <div class="menu-card__inner menu-card__inner--sub">
                  <div class="menu-card__body">
                    <p class="card__category">
                    <div class="menu-card__category">
                      <?php
                      $terms = get_the_terms($post->ID, 'menu_category');
                      if ($terms) {
                        echo $terms[0]->name;
                      }
                      ?>
                    </div>
                    <h2 class="menu-card__title menu-card__title--sub">
                      <?php the_title(); ?></h2>
                  </div>
                  <div class="menu-card__price">
                    <p class="menu-card__person">
                      期間限定
                    </p>
                    <p class="menu-card__price-text">
                      <?php
                      $price_group = get_field('menu_price-group');
                      ?>
                      <?php if ($price_group) : ?>
                        <?php
                        $previous_price = $price_group['previous_price'];
                        $current_price = $price_group['current_price'];
                        ?>
                        <span class="menu-card__price-previous"><?php echo $previous_price; ?></span>
                        <span class="menu-card__price-current"><?php echo $current_price; ?></span>
                      <?php endif; ?>
                    </p>
                  </div>
                  <div class="menu-card__text">
                    <?php if ($card__text) : ?>
                      <p>
                        <?php echo $card__text; ?>
                      </p>
                    <?php endif; ?>
                  </div>
                  <div class="menu-card__footer">
                    <?php if ($period) : ?>
                      <p class="menu-card__period"><?php echo $period; ?></p>
                    <?php endif; ?>
                    <p class="menu-card__reservation">ご予約・お問い合わせはコチラ</p>
                    <div class="menu-card__button">
                      <a href="<?php echo $contact; ?>" class="button"><span class="button__text">Contact us</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>

    <div class="archive-menu__pagenavi wp-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>
  </div>

  <?php get_footer(); ?>