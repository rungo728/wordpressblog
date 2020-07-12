<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main-1.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/template.css" />
    <title>KAOwebdesigner</title>
  </head>
  <body class="bg-light">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">KAOwebdesigner</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-white" href="<?php echo home_url(); ?>">ホーム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Flex">お客様のこえ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#tab">タブ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Embeds">youTuBE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#modal">モーダル</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#card">じっせき</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#accordion">アコーディオン</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#contactform">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!--スライドショー-->
    <div class="keyvisual">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <a href="https://blogkao.net/wp/lppage3/">
              <img style="height:500px;" src="<?php echo get_template_directory_uri(); ?>/images/lppage3.png" class="d-block w-100" alt="...">
            </a>
            <div class="carousel-caption d-md-block text-white">
              <h5>ランディングページ模写</h5>
            </div>
          </div>
          <div class="carousel-item active">
            <img style="height:500px;" src="<?php echo get_template_directory_uri(); ?>/images/photoshop1.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-md-block">
              <h5>PHotoshop</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height:500px;" src="<?php echo get_template_directory_uri(); ?>/images/illustration2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>ILLUstrator</h5>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container bg-white py-5 my-5">
      <!--WEBdesignポートフォリオ-->
      <div id="column">
        <h2 class="text-center py-3">WEBdesignポートフォリオ</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-12 portfolio_box">
          <a href="https://drive.google.com/drive/u/0/folders/15DA8YpCFQPS8DjyRuxIphKcDxbjuOmP2" class="">
            <img  class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/designportfolio1-1.png" alt="">
            <div class="mask">
              <div class="portfolio_img_p">デザイン摸写（春帆楼）<br>（XDで作成）</div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-12 portfolio_box">
          <a href="https://drive.google.com/drive/u/0/folders/15DA8YpCFQPS8DjyRuxIphKcDxbjuOmP2" class="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/kaoec_top1.png" alt="">
            <div class="mask">
              <div class="portfolio_img_p">ECサイトデザイン<br>（Photoshopで作成）</div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-12 portfolio_box">
         <a href="https://blogkao.net/wordpressblog/lp-page/" class="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/lppage1.png" alt="">
            <div class="mask">
              <div class="portfolio_img_p">ランディングページデザイン・コーディング模写<br>（Photoshopで作成）</div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-12 portfolio_box">
          <a href="https://drive.google.com/drive/u/0/folders/15DA8YpCFQPS8DjyRuxIphKcDxbjuOmP2" class="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/stayhome1.png" alt="">
            <div class="mask">
              <div class="portfolio_img_p">ロゴデザイン（stayhome）<br>（Illustratorで作成）</div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-12 portfolio_box">
          <a href="https://drive.google.com/drive/u/0/folders/15DA8YpCFQPS8DjyRuxIphKcDxbjuOmP2" class="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/KACOSKitchen.png" alt="">
            <div class="mask">
              <div class="portfolio_img_p">サムネイルデザイン<br>（Illustratorで作成）</div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-12 portfolio_box">
         <a href="https://drive.google.com/drive/folders/15DA8YpCFQPS8DjyRuxIphKcDxbjuOmP2" class="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/navigation_readmore.png" alt="">
            <div class="mask">
              <div class="portfolio_img_p">READMORE >></div>
            </div>
          </a>
        </div>
      </div>

      <!--お客様の声-->
      <div id="Flex">
        <h2 class="text-center py-3">お客様の声</h2>
      </div>
      <div class="d-flex flex-wrap-reverse justify-content-center">
        <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
          ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        </div>
        <div class="col-md-6 col-12 p-0 align-self-center">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cropkuchikomi711.jpg" alt="">
        </div>
      </div>
      <div class="d-flex flex-wrap justify-content-center">
        <div class="col-md-6 col-12 p-0 align-self-center">
          <img src="<?php echo get_template_directory_uri(); ?>/images/customer1.jpg" alt="">
        </div>
        <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
          ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        </div>
      </div>

      <!--BootStrapのタブ-->
      <!-- WEBDEsignのタブ -->
      <div id="tab">
        <h2 class="text-center py-3">WEBDEsignのタブ</h2>
      </div>
      <div class="tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item col-4 p-0">
            <a class="nav-link active text-center" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">グリッドシステム</a>
          </li>
          <li class="nav-item col-4 p-0">
            <a class="nav-link text-center" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">イラストレーターとフォトショップの違い</a>
          </li>
          <li class="nav-item col-4 p-0">
            <a class="nav-link text-center" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">イラストレーターの使い道は？</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-8 col-12 my-5 mx-auto">
              <!-- Bootstrap -->
              Webページのデザインでは横幅を１２個の列に分けたグリッドシステムを採用したデザインにするために、photoshopで作成する際にガイドとなる線を入れて作業をします。
              １２は２,3,4,6で割り切れるのでレスポンシブデザインがやりやすくなります。
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-md-8 col-12 my-5 mx-auto">
              拡大した時に画像が粗くなるかどうか、フォトショップではその粗さを使って画像を加工します。
              <!-- BootStrapではOOCSS（Object-Oriented CSS）というオブジェクト指向CSSが採用されています。 構造と見た目を切り離した設計になります。 -->
            </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="col-md-8 col-12 my-5 mx-auto">
              名刺・ロゴ・チラシ・Webデザイン・youtubeのサムネイルなどに使うことが多いです。
              <!-- このサイトでも使われているようにBootstrapでは様々なコンポーネントが用意されています。 公式サイトで調べながら使いながら慣れていきます。 -->
            </div>
          </div>
        </div>
      </div>

      <!--YouTube-->
      <div id="Embeds">
        <h2 class="text-center py-3">youTuBE</h2>
      </div>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BciesYjmly0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <br>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xB9op86ZnKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <!--よくある質問-->
      <div id="modal">
        <h2 class="text-center py-3">よくある質問</h2>
      </div>
      <div class="row">
        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter">
            何ヶ月ぐらい勉強すれば稼げるようになりますか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">何ヶ月ぐらい勉強すれば稼げるようになりますか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  学習期間は半年から１年は必要だと思います。ただ、早い人であれば3ヶ月ほどで稼いでいる人もいます。
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter1">
            WEB制作で必要なスキルは？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">何ヶ月ぐらい勉強すれば稼げるようになりますか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  HTML,CSS,JQueryは必須スキルです。その他にJavascript,Bootstrap。 その他デザインツール(Photoshop,XD,Figma)などのデータからのコーディングが出来ると良いです                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter2">
            おすすめのPCはありますか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">おすすめのPCはありますか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  フロントエンドエンジニアはMacBookを使っている人が多いです。 ただ、まずは持っているPCで勉強を始めるのが良いと思います                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter4">
            プログラミングは独学で勉強可能ですか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">プログラミングは独学で勉強可能ですか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  プログラミングは独学で身に付けることは出来ると思います。 しかし、初心者のうちはメンターをつけるなど解決方法がわからなくなった時に聞ける人を作るのがおすすめです                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--実績-->
      <div id="card">
        <h2 class="text-center py-3">実績</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Instagram</h5>
              <p class="card-text">
                Instagramに編集した動画や画像を載せていきます。</p>
              <a href="#" class="btn btn-primary">Instagram</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">YouTube</h5>
              <p class="card-text">
                日々の料理・プログラミング・デザインの作業工程を中心に発信していきます。
              </p>
              <a href="#" class="btn btn-primary">YouTube</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Twitter</h5>
              <p class="card-text">
              プログラミング・デザイン学習のアウトプットを中心に発信しています。自身の経験をベースに発信しています。
               </p>
              <a href="https://twitter.com/kao11designer" class="btn btn-primary">Twitter</a>
            </div>
          </div>
        </div>
      </div>

      <!--よくある質問-->
      <div id="accordion">
        <h2 class="text-center py-3">よくある質問</h2>
      </div>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                プログラミングスキルは必要ですか
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              HTML/CSS,BootStrapの基礎が必要です。しかし勉強中であれば大丈夫だと思います            
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                稼げるようになりますか
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              半年から一年くらいしっかりと勉強をすれば稼げるようになると思います。 しかし、プログラミングで稼ぐためには技術力だけでなく営業力も必要になるので日々勉強が必要です。            
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                追加でかかる費用はありますか
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              サーバー代、ドメイン代が必要になります。 おすすめのサーバーはエックスサーバー 、ドメインはお名前.comがおすすめです            
            </div>
          </div>
        </div>
      </div>

       <!--お問い合わせ-->
       <div id="contactform">
        <h2 class="text-center py-3">お問い合わせ</h2>
      </div>
      <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScp9cWDa_CqjPVc4TYU2YHskYXNYHDEF_tAN4IzdgxVcZEnJA/formResponse" class="needs-validation col-8 mx-auto" novalidate>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="validationCustom01">苗字</label>
            <input name="entry.2114262126" type="text" class="form-control" id="validationCustom01" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              苗字を入れてください
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="validationCustom02">名前</label>
            <input name="entry.88768733" type="text" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              名前を入れてください
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="validationCustom04">住所</label>
            <select class="custom-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>東京</option>
              <option>神奈川</option>
              <option>千葉</option>
              <option>埼玉</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              同意する
            </label>
            <div class="invalid-feedback">
              同意するにチェックを入れてください
            </div>
          </div>
        </div>
        <button class="btn btn-default" type="submit">問い合わせする</button>
      </form>
      
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
    </div>
    <!-- フッター部分 -->
      <footer class="bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="py-3">
                <h4 class="d-inline-block py-3 border-bottom border-info">ABout</h4>
              </div>
              <div class="mx-5">
                <img class="img-fluid rounded-circle profile" src="<?php echo get_template_directory_uri(); ?>/images/profile1.png" alt="">
              </div>
              <p>
                料理・デザイン・プログラミングを愛しております,転職活動内容も発信,経歴：派遣事務→正社員事務9年→派遣経理（今ココ）→TECH56期卒業/働きながら転職活動しながらフリーで案件依頼を受けながら実績作りに励んでいます。
              </p>
            </div>
            <div class="col-md-4 col-12">
              <div class="py-3">
                <h4 class="d-inline-block py-3 border-bottom border-info">PORTfolio</h4>
              </div>
              <div class="p-3 border-top border-bottom border-secondary">
                <a href="http://13.230.196.160:3000/" class="text-secondary">
                  RYOUTOKU
                </a>
              </div>
              <div class="p-3 border-bottom border-secondary">
                <a href="https://blogkao.net/wordpressblog/" class="text-secondary">
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
          <p>Copyright - Kaoru Koyama, <?php echo date("Y")?> All Rights Reserved</p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- function.phpに設定済みなのでコメントアウト -->
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