<?php get_header(); ?>

<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">
      <!-- ↓幅768px以下で表示↓ -->
      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-sp.jpg"
        media="(max-width: 767px)" />
      <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-pc.jpg" alt="ダイバーの写真">
    </picture>
    <h1 class="sub-mv__title">price</h1>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb-layout">
    <?php get_template_part('parts/breadcrumb'); ?>
  </div>

  <!-- 下層ページ -->
  <div class="page-price-layout page-price">
    <div class="page-price__inner inner">
      <div class="page-price__column one-column">
        <?php $dinner_group = SCF::get_option_meta('price_option', 'dinner');
        if ($dinner_group[0]['dinner_course_name']) : ?>
        <div class="page-price__container data-list data-list--sub" id="dinner">
          <h2 class=" data-list__title"><span>ディナー</span></h2>
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

        <?php $breakfast_group = SCF::get_option_meta('price_option', 'breakfast');
        if ($breakfast_group[0]['breakfast_course_name']) : ?>
        <div class="page-price__container data-list data-list--sub" id="breakfast">
          <h2 class="data-list__title"><span>ランチ</span></h2>
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

        <?php $launch_group = SCF::get_option_meta('price_option', 'launch');
        if ($launch_group[0]['launch_course_name']) : ?>
        <div class="page-price__container data-list data-list--sub" id="launch">
          <h2 class="data-list__title"><span>ブレックファースト</span></h2>
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

        <?php $special_group = SCF::get_option_meta('price_option', 'special');
        if ($special_group[0]['special_course_name']) : ?>
        <div class="page-price__container data-list data-list--sub" id="special">
          <h2 class=" data-list__title"><span>スペシャルコース</span></h2>
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
  </div>
  <?php get_footer(); ?>