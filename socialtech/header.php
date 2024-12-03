<!DOCTYPE html>
<html>

<head>
  <title>SocialTech</title>
  <meta charset="utf-8">
  <meta name="description" content="SocialTechはEdTech業界のリーディングカンパニーを目指します。">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!-- slickの読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header>
    <!-- ロゴ -->
    <a href="<?php echo esc_url(home_url('/')); ?>" id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページに戻る">
    </a>

    <!-- PC用ナビゲーション -->
    <nav id="nav-pc">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>/category/mission">MISSION</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>/category/product">PRODUCT</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#aboutus">ABOUT US</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#vision">VISION</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#company">COMPANY</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>/category/news">NEWS</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>#contact">CONTACT</a></li>
      </ul>
    </nav>

    <!-- スマホ用メニューボタン -->
    <button id="menu-sp">
      <img src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'">
    </button>

    <!-- スマホ用ナビゲーション -->
    <div id="nav-sp">
      <button id="close">
        <img src="<?php echo get_template_directory_uri(); ?>/images/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
      </button>

      <nav>
        <ul>
          <li>
            <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="トップページに戻る"></a>
          </li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>/category/mission" onclick="document.getElementById('nav-sp').style.display = 'none'">MISSION</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>/category/product" onclick="document.getElementById('nav-sp').style.display = 'none'">PRODUCT</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>#aboutus" onclick="document.getElementById('nav-sp').style.display = 'none'">ABOUT US</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>#vision" onclick="document.getElementById('nav-sp').style.display = 'none'">VISION</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>#company" onclick="document.getElementById('nav-sp').style.display = 'none'">COMPANY</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>/category/news" onclick="document.getElementById('nav-sp').style.display = 'none'">NEWS</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>#contact" onclick="document.getElementById('nav-sp').style.display = 'none'">CONTACT</a></li>
        </ul>
      </nav>
      <div id="sns">
        <a href="https://www.facebook.com/sejuku2013">
          <img src="<?php echo get_template_directory_uri(); ?>/images/button-facebook.png" alt="Facebookのリンク">
        </a>
        <a href="https://twitter.com/samuraijuku">
          <img src="<?php echo get_template_directory_uri(); ?>/images/button-twitter.png" alt="Twitterのリンク">
        </a>
        <a href="https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g">
          <img src="<?php echo get_template_directory_uri(); ?>/images/button-youtube.png" alt="YouTubeのリンク">
        </a>
      </div>
    </div>
  </header>