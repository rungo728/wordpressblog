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
                    <span class="lineWaveCmn01 font-weight-bolder">
                      英語にたくさん
                    </span>
                    <br>
                    <span class="lineWaveCmn01 font-weight-bolder">
                      触れるための学習環境。
                    </span>
                    <br>
                    <span class="lineWaveCmn01 font-weight-bolder">
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
                      <!-- お悩みの声部分 -->
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
                      <!-- お悩み解決部分 -->
                      <section class="secAbout bg01">
                        <div class="pt-5 aboutIn innerCmn01 cf">
                          <div class="p-5 aboutItem item01 boxCmn01 is_arw_bottom cf js-inview fadeIn">
                            <h2 class="h2 mb-5 aboutTit font-weight-bolder">
                              <span class="lineWaveCmn01 only_pc">
                                <span class="lineWaveCmn01 only_sp">使える英語力を身に</span>
                                <br class="viewSp"><span class="lineWaveCmn01 only_sp">つけるには</span>
                              </span>
                            </h2>
                            <p class="h5 aboutTxt font-weight-bolder">
                              <span class="txt01">
                                新しいことを吸収しやすい
                                <br class="viewSp">
                                <span class="text-info">
                                  小学生から始めるのが
                                  <br class="viewSp">
                                  ベストです。
                                </span>
                              </span>
                              <br>
                              <span class="txt02">
                                ただし、やみくもに
                                <br class="viewSp">
                                勉強するのではなく、
                              </span>
                              <br>
                              <span class="txt03 text-info">
                                <img class="balance img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/img_about_almighty01.png" alt="">
                                  バランスのいい
                                  <br class="viewSp">
                                  英語力を身につけることが
                                  <br class="viewSp">
                                  大切です。
                              </span>
                            </p>
                          </div>
                          <div class="my-5 py-5 aboutItem item02 boxCmn01 is_arw_top is_arw_bottom cf js-inview fadeIn">
                            <div class="boxCmn01_bg">
                              
                            </div>
                            <p class="h5 mb-5 aboutTxt font-weight-bolder">
                              <span class="txt01">偏った英語力では、将来役立つ
                                <span class="text-warning">「使える
                                  <br class="viewSp">英語力」
                                </span>は身につきません。
                                <br>小学生の頃からバランスのいい英語力を
                                <br class="viewSp">育んでいくには、
                              </span>
                                <br>
                              <span class="txt02">
                                <span class="lineWaveCmn01">次の
                                  <span class="is_large">2つ</span>が大切です。
                                </span>
                              </span>
                            </p>
                            <ul class="d-flex aboutPoint cf">
                              <li class="col-5 aboutPointItem">
                                <p class="aboutPointIco rounded-circle font-weight-bolder">
                                  楽しく
                                  <br>
                                  学ぶ
                                </p>
                                <p class="aboutPointTxt font-weight-bolder">自ら学ぶ
                                  <br class="viewSp">姿勢を
                                  <br>身につける
                                </p>
                                <div class="aboutPointImg">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/img_about_point01.png" alt="">
                                </div>
                              </li>
                              <li class="col-5 aboutPointItem">
                                <p class="aboutPointIco rounded-circle font-weight-bolder">無理なく
                                  <br>続ける
                                </p>
                                <p class="aboutPointTxt font-weight-bolder">継続して学び、
                                  <br>確実に
                                  <br class="viewSp">身につける
                                </p>
                                <div class="aboutPointImg">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/img_about_point02.png" alt="">
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="my-5 py-5 aboutItem item03 boxCmn01 is_arw_top js-inview fadeIn">
                            <div class="aboutItemIn cf">
                              <div class="boxCmn01_bg"></div>
                              <p class="h4 aboutTxt font-weight-bolder">
                                <span class="txt01">
                                  能開の
                                  <img class="balance img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/img_about_almighty01.png" alt="">では、
                                </span>
                                <br>
                                <span class="txt02">バランスのとれた
                                  <br class="viewPc">英語力を
                                  <br class="viewSp">習得する為に
                                  <br class="viewPc">最適なプログラムを
                                  <br>ご用意しています。
                                </span>
                              </p>
                              <div class="aboutImg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pic_about_point01.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <!-- お問い合わせ部分 -->
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
