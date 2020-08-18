<?php
/*
Template Name: ランディングページ２
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lppage2.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
  <!-- グーグルフォントの設定 -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- スライダーの設定 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  <!-- jQueryのライブラリー本体を読み込む -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lppage.js" ></script>
  <title>KA FREELANCE
  </title>
</head>
<body>
  <!-- ヘッダー -->
  <header class="header">
    <h1 class="header-ttl">
      <img width="240" height="160" src="<?php echo get_template_directory_uri(); ?>/images/kafreelance2.png" alt="KAFREELANCE">
    </h1>
    <nav class="header-nav">
      <ul class="headernavList">
        <li class="header-navItem">
          <a href="#news" class="header-navLink js-navLink">News</a>
        </li>
        <li class="header-navItem">
          <a href="#service" class="header-navLink js-navLink">Service</a>
        </li>
        <li class="header-navItem">
          <a href="#results" class="header-navLink js-navLink">Results</a>
        </li>
        <li class="header-navItem">
          <a href="#price" class="header-navLink js-navLink">Price</a>
        </li>
        <li class="header-navItem">
          <a href="#comments" class="header-navLink js-navLink">Comments</a>
        </li>
        <li class="header-navItem">
          <a href="#faqs" class="header-navLink js-navLink">FAQs</a>
        </li>
        <li class="header-navItem">
          <a href="#contacts" class="header-navLink js-navLink">Contact</a>
        </li>
      </ul>
    </nav>
  </header>
  <!-- ヒーロー -->
  <div class="hero">
    <div class="hero-inner">
      <div class="hero-content">
        <h2 class="hero-ttl">
          詩が生れて、画が出来る。<br>とかくに人の世は住みにくい。
        </h2>
        <p class="hero-txt">
          どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。
        </p>
        <a href="#contact" class="hero-link">お問い合わせしてみる</a>
      </div>
    </div>
  </div>
  <main>
    <!-- ニュース -->
    <section class="news">
      <div class="news-inner">
        <h2 class="util-ttl">News</h2>
        <ul class="news-list">
          <li class="news-item">
            <a href="#" class="news-itemLink">
              <time class="news-itemDate" datetime="2019-02-01">2019-02-01</time>
              <div class="news-itemCategory">カテゴリー</div>
              <p class="news-itemTxt">ニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュース</p>
            </a>
          </li>
          <li class="news-item">
            <a href="#" class="news-itemLink">
              <time class="news-itemDate" datetime="2019-02-01">2019-02-01</time>
              <div class="news-itemCategory">カテゴリー</div>
              <p class="news-itemTxt">ニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュース</p>
            </a>
          </li>
          <li class="news-item">
            <a href="#" class="news-itemLink">
              <time class="news-itemDate" datetime="2019-02-01">2019-02-01</time>
              <div class="news-itemCategory">カテゴリー</div>
              <p class="news-itemTxt">ニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュースニュース</p>
            </a>
          </li>
        </ul>
        <div class="util-linkBox">
          <a href="#" class="util-link">MORE</a>
        </div>
      </div>
    </section>
    <!-- サービス部分 -->
    <section class="service">
      <h2 class="util-ttl">Service</h2>
      <div class="service-inner">
        <dl class="service-list">
          <div class="service-item">
            <dt>WEB<br>DESIGN</dt>
            <dd>どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</dd>
          </div>
          <div class="service-item">
            <dt>WEB<br>DESIGN</dt>
            <dd>どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</dd>
          </div>
          <div class="service-item">
            <dt>WEB<br>DESIGN</dt>
            <dd>どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</dd>
          </div>
        </dl>
      </div>
    </section>
    <!-- 実績部分 -->
    <section class="results">
      <h2 class="util-ttl">Results</h2>
      <div class="results-container swiper-container swiper-container-initialized swiper-container-horizontal">
        <ul class="results-list swiper-wrapper">
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
          <li class="results-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active">
            <a href="#" class="results-itemLink">
              <figure class="results-itemFig">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="">
              </figure>
              <div class="results-itemLinkInner">
                <h3 class="results-itemTtl">とかくに人の世は住みにくい。</h3>
                <p class="results-itemTxt">どこへ越しても住みにくいと悟った時、詩が生れて、画が出来る。意地を通せば窮屈だ。</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- 前ページボタン -->
        <div class="swiper-button-prev"></div>
        <!-- 次ページボタン -->
        <div class="swiper-button-next"></div>
      </div>
      <div class="results-pagination swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
        <span class="swiper-pagination-bullet"></span>
        <span class="swiper-pagination-bullet"></span>
        <span class="swiper-pagination-bullet"></span>
        <span class="swiper-pagination-bullet"></span>
        <span class="swiper-pagination-bullet"></span>
      </div>
      <div class="util-linkBox">
        <a href="#" class="util-link mod-light">VIEW ALL</a>
      </div>
    </section>
    <section class="price">
      <h2 class="util-ttl">Price</h2>
      <table class="price-table">
        <tbody>
          <tr>
            <th>row 1</th>
            <td>Price ¥10,000</td>
          </tr>
          <tr>
            <th>row 1</th>
            <td>Price ¥10,000</td>
          </tr> 
          <tr>
            <th>row 1</th>
            <td>Price ¥10,000</td>
          </tr> 
        </tbody>
      </table>
      <p class="price-txt">※ 上記料金はサンプルです。</p>
    </section>
  </main>
</body>
</html>