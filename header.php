<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about-us/'));
$menu = esc_url(home_url('/menu/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$sitemap = esc_url(home_url('/sitemap/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));
$termsOfService = esc_url(home_url('/terms-of-service/'));
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/icon.svg" />
  <?php wp_head(); ?>
</head>

<body>

  <!-- ヘッダー -->
  <header class="top-header header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home; ?>" class="header__logolink">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/Oshima-noframe.png" alt="oshimaのロゴ">
        </a>
      </h1>
      <!-- ハンバーガーメニュー -->
      <div class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- ナビゲーション（pc） -->
      <div class="header__pc-nav pc-nav js-drawer-menu">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $menu; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">Menu</span>
              <span class="pc-nav__japanese-title">メニュー</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">About us</span>
              <span class="pc-nav__japanese-title">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">Information</span>
              <span class="pc-nav__japanese-title">サービス情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">Blog</span>
              <span class="pc-nav__japanese-title">ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">Voice</span>
              <span class="pc-nav__japanese-title">お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">Price</span>
              <span class="pc-nav__japanese-title">料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">FAQ</span>
              <span class="pc-nav__japanese-title">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>" class="pc-nav__link">
              <span class="pc-nav__english-title">Contact</span>
              <span class="pc-nav__japanese-title">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- ナビゲーション（sp） -->
      <div class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__lists">
            <!-- ページリスト -->
            <?php get_template_part('parts/lists'); ?>
          </div>
        </div>
      </div>
    </div>
  </header>