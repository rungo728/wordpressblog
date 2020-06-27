<?php
/*
Template Name: ランディングページ
*/
?>
<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-12 mx-auto">
              <div class="bg-white pb-5 mb-5 text-center">
                <!-- サムネイル -->
                <div class="pb-3" id="maining">
                  <p class="mvCatch text-left">
                    <span class="lineWavecmn01 font-weight-bolder">
                      英語にたくさん
                    </span>
                    <br>
                    <span class="lineWavecmn01 font-weight-bolder">
                      触れるための学習環境。
                    </span>
                    <br>
                    <span class="lineWavecmn01 font-weight-bolder">
                      楽しく学ぶための広場。
                    </span>
                  </p>
                  <p class="mb-5 col-6 mvAnthor">
                    <a href="#point" class="fuwafuwa">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="">
                    </a>
                  </p>
                </div>
                <div id="contents" class="mt-5">
                  <main role="main">
                    <div id="main">
                      <section class="h6 secTrouble js-inview fadeIn">
                        <div class="troubleIn cf">
                          <h2 class="troubleTit font-weight-bolder">
                            こんなことで
                            <br class="viewSp">
                            お悩みではありませんか？
                          </h2>
                          <div class="d-flex troubleVoice">
                            <div class="mr-4 troubleVoiceItem item01">
                              <p class="p-4 troubleVoiceTxt font-weight-bolder text-white bg-info">
                                抵抗なく英語に
                                <br>
                                接してほしい...
                              </p>
                              <div class="troubleVoiceImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/img_trouble01.png" alt="">
                              </div>
                            </div>
                            <div class="mr-4 troubleVoiceItem item02">
                              <p class="p-4 troubleVoiceTxt font-weight-bolder text-white bg-info">
                                中学での英語学習で、
                                <br>
                                出遅れたくない…
                              </p>
                              <div class="troubleVoiceImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/img_trouble02.png" alt="">
                              </div>
                            </div>
                            <div class="troubleVoiceItem item03">
                              <p class="p-4 troubleVoiceTxt font-weight-bolder text-white bg-info">
                                英語を話せても、
                                <br>
                                書く力が足りない気がする…
                              </p>
                              <div class="troubleVoiceImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/img_trouble03.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="secAbout bg01">
                        <div class="aboutIn innerCmn01 cf"></div>
                      </section>
                    </div>
                  </main>
                </div>
              </div>
            </div>
          <!-- メインコンテンツ -->
          <div class="col-12 mx-auto">
            <!-- 記事があれば繰り返し処理で一覧表示する -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- 記事タイトル -->
                <h1 class="h2 px-3 py-5 font-weight-bolder"><?php the_title(); ?></h1>
                <!-- 本文 -->
                <!-- 本文の情報を全て取得できる -->
                <div class="test-left px-2"><?php the_content(); ?></div>
              </div>
            <?php endwhile; else : ?>
              <p>記事がありません。</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <!-- フッター部分 -->
      <?php get_footer(); ?>
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
