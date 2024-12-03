<footer>
  <div id="footer-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="SocialTech">
  </div>
  <div id="footer-link">
    <a href="<?php echo esc_url(home_url('/')); ?>/category/mission">MISSION</a>
    <a href="<?php echo esc_url(home_url('/')); ?>/category/product">PRODUCT</a>
    <a href="<?php echo esc_url(home_url('/')); ?>#aboutus">ABOUT US</a>
    <a href="<?php echo esc_url(home_url('/')); ?>#vision">VISION</a>
    <a href="<?php echo esc_url(home_url('/')); ?>#company">COMPANY</a>
    <a href="<?php echo esc_url(home_url('/')); ?>/category/news">NEWS</a>
    <a href="<?php echo esc_url(home_url('/')); ?>#contact">CONTACT</a>
  </div>
  <div id="sns-footer">
    <div class="sns-btns">
      <a href="<?php echo get_template_directory_uri(); ?>/https://www.facebook.com/sejuku2013"><img src="<?php echo get_template_directory_uri(); ?>/images/button-facebook.png" alt="Facebookのリンク"></a>
      <a href="<?php echo get_template_directory_uri(); ?>/https://twitter.com/samuraijuku"><img src="<?php echo get_template_directory_uri(); ?>/images/button-twitter.png" alt="Twitterのリンク"></a>
      <a href="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g"><img src="<?php echo get_template_directory_uri(); ?>/images/button-youtube.png" alt="YouTubeのリンク"></a>
    </div>
    <p id="copyright">&copy;2021 SocialTech, Inc. All Rights Reserved.</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- slickの読み込み -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="script.js"></script>
<?php wp_footer(); ?>
</body>

</html>