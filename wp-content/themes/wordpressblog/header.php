<!DOCTYPE html>
<!-- サイトの言語を管理画面から指定できる -->
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main1.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/template.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lp-page-1.css" />
    <!-- <title>KAblog</title> -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <!-- 投稿ページであれば記事のタイトルになっている -->
        <?php
        if ( is_home() ) {?>
          <h1 class="h1 py-3">KAblog</h1>
        <?php
        } else {?>
          <div class="h1 py-3">KAblog</div>
        <?php }?>
      </div>
    </header>
    <!-- グローバルナビ -->
    <!-- bg-darkはbootstrapで設定されているcssのcolorブラックを適用 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="<?php echo home_url(); ?>">ホーム</a>
        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#about">書きてについて</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">WEbデザイン</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Webコーディング</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">どうが</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">お問合せ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>