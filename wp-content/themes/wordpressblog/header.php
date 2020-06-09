<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css" />
    <title>KAblog</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h1 class="h1 py-3">KAblog</h1>
      </div>
    </header>
    <!-- グローバルナビ -->
    <!-- bg-darkはbootstrapで設定されているcssのcolorブラックを適用 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="#">ホーム</a>
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
              <a class="nav-link text-white" href="#">書きてについて</a>
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