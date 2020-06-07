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
    <link rel="stylesheet" href="../wordpressblog/style.css" />
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

    <main class="bg-light">
      <div class="container">
        <!-- ピックアップ記事 -->
        <!-- py-3はpaddingをつけるという意味？ -->
        <div class="row py-3">
          <!-- mdが４、それ以降は12？ -->
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
              <div class="pb-3">
                <img src="images/eyecatch.png" alt="" class="img-fluid" />
              </div>
              <!-- 記事タイトル -->
              <h2 class="h4 px-3 pb-3">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- READMOREボタン -->
              <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div> 
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
              <div class="pb-3">
                <img src="images/choco.png" alt="" class="img-fluid" />
              </div>
              <!-- 記事タイトル -->
              <h2 class="h4 px-3 pb-3">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- READMOREボタン -->
              <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div> 
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
              <div class="pb-3">
                <img src="images/book1.jpg" alt="" class="img-fluid" />
              </div>
              <!-- 記事タイトル -->
              <h2 class="h4 px-3 pb-3">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- READMOREボタン -->
              <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div> 
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">

          </div>
          <div class="col-md-4 col-12">

          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
