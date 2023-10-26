<?php get_header(); ?>

<main>
  <!--サブメインビュー -->
  <section class="sub-mv">
    <picture class="sub-mv__image">
      <!-- ↓幅768px以下で表示↓ -->
      <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/information-sp.jpg"
        media="(max-width: 767px)" />
      <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
      <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/information-pc.jpg" alt="ダイバーの写真">
    </picture>
    <h1 class="sub-mv__title">information</h1>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb-layout">
    <?php get_template_part('parts/breadcrumb'); ?>
  </div>

  <!-- 下層ページ -->
  <section class="information-sub page-information-layout ornament">
    <div class="information-sub__inner inner">
      <div class="information-sub__content">
        <ul class="information-sub__tab information-tab">
          <li class="information-tab__item js-tab-trigger is-active" data-id="tab01">
            <span class="information-tab__text">ディナー</span>
          </li>
          <li class="information-tab__item js-tab-trigger" data-id="tab02">
            <span>ランチ</span>
          </li>
          <li class="information-tab__item js-tab-trigger" data-id="tab03">
            <span>ブレックファースト</span>
          </li>
        </ul>
        <div class="information-sub__container">
          <div class="information-sub__item information-item js-tab-target is-show" data-tab="tab01">
            <div class="information-item__body">
              <h2 class="information-item__title">
                ディナー
              </h2>
              <p class="information-item__text">
                夕暮れの優美な雰囲気の中、私たちのディナーは、シェフの芸術的な技巧が光る繊細な一皿へと昇華します。新鮮なシーフード、希少な和牛、季節の最高の食材を使用した料理は、五感を刺激し、舌を魅了します。シャンパンやワインと共に、至福の夜をお楽しみください。
              </p>
            </div>
            <div class="information-item__image">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/dinner.jpg" alt="ディナーの画像">
            </div>
          </div>
          <div class="information-sub__item information-item js-tab-target" data-tab="tab02">
            <div class="information-item__body">
              <h2 class="information-item__title">
                ランチ
              </h2>
              <p class="information-item__text">
                忙しい日常の中でほっと一息。私たちのランチは、軽やかな前菜、ヘルシーなサラダ、心温まるスープなど、バラエティ豊かなメニューで構成されています。新鮮な食材の恩恵を感じながら、素晴らしいランチタイムをお過ごしください。
              </p>
            </div>
            <div class="information-item__image">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/launch.jpg" alt="インフォメーション2の画像">
            </div>
          </div>
          <div class="information-sub__item information-item js-tab-target" data-tab="tab03">
            <div class="information-item__body">
              <h2 class="information-item__title">
                ブレックファースト
              </h2>
              <p class="information-item__text">
                朝の静寂の中、新たな一日を祝福するひととき。私たちのブレックファーストは、新鮮なフルーツ、ふんわり焼き上げたクロワッサン、豪華なエッグベネディクトなど、心地よい朝の目覚めをお届けします。上質なコーヒーとともに、贅沢なスタートをご体験ください。
              </p>
            </div>
            <div class="information-item__image">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/breakfast.jpg"
                alt="インフォメーション3の画像">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>