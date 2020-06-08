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
            <div class="bg-white py-3 text-center">
              <!-- 日付 -->
              <p>2020/06/08</p>
              <!-- 記事タイトル -->
              <h2 class="px-3 pb-3 font-weight-bolder">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- カテゴリー -->
              <p><a href="">WEbデザイン</a></p>
              <!-- サムネイル -->
              <div class="pb-3">
                <img src="images/webdesign.png" alt="" class="img-fluid" />
              </div>
              <!-- ディスクリプション -->
              <p class="text-secondary">サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>
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
          <!-- サイドバー -->
          <div class="col-md-4 col-12">
            <!-- プロフィール -->
            <div class="container bg-white mb-5 py-5">
              <div class="mx-5">
                <img src="images/profile1.png" alt="" class="img-fluid rounded-circle">
              </div>
              <div class="text-center">
                <h4 class="d-inline-block py-3 border-bottom border-info">コヤマカオル</h4>
              </div>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <!-- 検索フォーム -->
            <div class="container bg-white mb-5 py-5">
              <form>
                <div class="form-group">
                  <input type="etext" class="form-control" placeholder="検索できます">
                </div>
              </form>
            </div>
            <!-- 読んで欲しい記事 -->
            <div class="container bg-white mb-5 py-5">
              <div class="text-center pb-5">
                  <h4 class="d-inline-block py-3 border-bottom border-info">読んで欲しい記事</h4>
              </div>
              <div class="pb-5">
                <!-- サムネイル -->
                <div class="pb-3">
                  <img src="images/meeting.png" alt="" class="img-fluid" />
                </div>
                <!-- 記事タイトル -->
                <h5 class="h5">読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１</h5>
              </div>
              <div class="pb-5">
                <!-- サムネイル -->
                <div class="pb-3">
                  <img src="images/teacher1.png" alt="" class="img-fluid" />
                </div>
                <!-- 記事タイトル -->
                <h5 class="h5">読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１</h5>
              </div>
              <div class="pb-5">
                <!-- サムネイル -->
                <div class="pb-3">
                  <img src="images/illustration.png" alt="" class="img-fluid" />
                </div>
                <!-- 記事タイトル -->
                <h5 class="h5">読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１読んで欲しい記事１</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="py-3">
                <h4 class="d-inline-block py-3 border-bottom border-info">ABout</h4>
              </div>
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </div>
            <div class="col-md-4 col-12">
              <div class="py-3">
                <h4 class="d-inline-block py-3 border-bottom border-info">PORTfolio</h4>
              </div>
              <div class="p-3 border-top border-bottom border-secondary">
                <a href="" class="text-secondary">
                  RYOUTOKU
                </a>
              </div>
              <div class="p-3 border-bottom border-secondary">
                <a href="" class="text-secondary">
                  KAblog 
                </a>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="py-3">
                <h4 class="d-inline-block py-3 border-bottom border-info">Twitter</h4>
              </div>
              <a class="twitter-timeline" data-lang="ja" data-height="600" href="https://twitter.com/kao11designer?ref_src=twsrc%5Etfw">Tweets by kao11designer</a> 
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
        <div class="bg-dark text-white text-center p-3">
          <p>Copyright - Kaoru Koyama, 2020 All Rights Reserved</p>
        </div>
      </footer>
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
