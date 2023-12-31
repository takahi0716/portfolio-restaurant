<?php
$home = esc_url(home_url('/'));
$contact = esc_url(home_url('/contact/'));
?>
<!-- contact -->
<section
  class="top-contact contact <?php if(is_page('contact')||is_page('thanks')||is_404()){ echo 'contact--sub'; } ?>">
  <div class="contact__inner inner">
    <div class="contact__company">
      <div class="contact__company-info">
        <div class="contact__logo">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/Oshima-wihte.png" alt="会社のロゴ">
        </div>
        <div class="contact__container">
          <div class="contact__text">
            <p>東京都新宿区1-1</p>
            <p>TEL:0120-000-0000</p>
            <p>営業時間:8:30-19:00</p>
            <p>定休日:毎週火曜日</p>
          </div>
          <div class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.371914236573!2d139.69753921528877!3d35.68957656654233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1698010855195!5m2!1sja!2sjp"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__contact-info">
        <div class="contact__title">
          <p class="contact__main-title">contact</p>
          <h2 class="contact__sub-title">お問い合わせ</h2>
        </div>
        <p class="contact__contact-text">
          ご予約・お問い合わせはコチラ
        </p>
        <div class="contact__wrapper">
          <!-- button -->
          <div class="contact__button">
            <a href="<?php echo $contact; ?>" class="button"><span class="button__text">Contact us</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--to-topボタン -->
<div class="to-top">
  <a href="#top" class="to-top__link">
    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/topbutton.svg" alt="ページの一番上に戻るボタン">
  </a>
</div>
</main>

<!-- footer -->
<footer class="footer top-footer <?php if(is_404()){ echo 'top-footer--sub'; } ?>">
  <div class="footer__inner inner">
    <div class="footer__wrapper">
      <div class="footer__logo">
        <a href="<?php echo $home; ?>" class="footer__logolink">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/Oshima-noframe.png" alt="oshimaのロゴ">
        </a>
      </div>
      <div class="footer__sns">
        <a href="https://ja-jp.facebook.com" class="footer__facebook" target="_blank">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/facebook.png" alt="facebookのロゴ">
        </a>
        <a href="https://www.instagram.com" class="footer__instagram" target="_blank">
          <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/Instagram.png" alt="Instagramのロゴ">
        </a>
      </div>
    </div>
    <div class="footer__lists">
      <!-- ページリスト -->
      <?php get_template_part('parts/lists'); ?>
    </div>
  </div>
  <p class="footer__copyright">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>

</footer>
<?php wp_footer() ?>
</body>

</html>