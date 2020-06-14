<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <!-- ピックアップ記事 -->
        <!-- py-3はpaddingをつけるという意味？ -->
        <div class="row py-3">
        <?php
          // タブにtoppickupとついたものをピックアップ記事に表示させる
          $top_query = new WP_Query( 'tag=toppickup' );
        ?>
        <!-- top-queryをhave_postsから探してくる -->
        <!-- postsにあればピックアップに表示させます -->
        <?php if ( $top_query->have_posts() ) : ?>
          <?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
            <div class="col-md-4 col-12">
              <div class="bg-white py-3">
                <!-- サムネイル -->
                <div class="pb-3">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="" class="img-fluid" />
                  <?php endif; ?>
                </div>
                <!-- 記事タイトル -->
                <h2 class="h4 px-3 pb-3"><?php the_title(); ?></h2>
                <!-- READMOREボタン -->
                <div class="text-center">
                  <!-- 繰り返し処理の中で記事のURLを取得する -->
                  <a href="<?php the_permalink(); ?>">
                    <div class="d-inline-block border p-3 text-secondary">
                      READ MORE
                    </div> 
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <!-- 何も表示するものがなければ -->
        <?php endif; ?>
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">
            <!-- 記事があれば繰り返し処理で一覧表示する -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="bg-white py-3 mb-5 text-center">
                <!-- 日付 -->
                <p><?php the_time('Y年n月j日'); ?></p>
                <!-- 記事タイトル -->
                <h2 class="px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
                <!-- カテゴリー -->
                <p><a href=""><?php the_category(''); ?></a></p>
                <!-- サムネイル -->
                <div class="pb-3">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="" class="img-fluid" />
                  <?php endif; ?>
                </div>
                <!-- ディスクリプション -->
                <p class="text-secondary"><?php the_excerpt(); ?></p>
                <!-- READMOREボタン -->
                <div class="text-center">
                  <!-- 繰り返し処理の中で記事のURLを取得 -->
                  <a href="<?php the_permalink(); ?>">
                    <div class="d-inline-block border p-3 text-secondary">
                      READ MORE
                    </div> 
                  </a>
                </div>
              </div>
            <?php endwhile; else : ?>
              <p>記事がありません。</p>
            <?php endif; ?>
            <!-- ページネーション -->
            <div class="float-left pb-3">
              <?php previous_posts_link('<div class="d-inline-block border p-3 text-secondary">前のページ</div>'); ?>
            </div>
            <div class="float-right pb-3">
              <?php next_posts_link('<div class="d-inline-block border p-3 text-secondary">次のページ</div>'); ?>
            </div>
            <?php if(function_exists("KAblog_pagenation")): ?>
              <?php KAblog_pagenation(); ?>
            <?php endif; ?>
          </div>
          <!-- サイドバー部分 -->
          <?php get_sidebar(); ?>
        </div>
      </div>
      <!-- フッター部分 -->
      <?php get_footer(); ?>
    </main>
    <!-- 一番上に固定ツールバーを出現させるための記述 -->
    <?php wp_footer(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- function.phpに設定済みなのでコメントアウト -->
    <!-- <script
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
    ></script> -->
  </body>
</html>
