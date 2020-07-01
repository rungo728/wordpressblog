<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-10 col-12 mx-auto">
            <!-- 記事があれば繰り返し処理で一覧表示する -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="bg-white py-3 mb-5 text-center">
                <!-- 日付 -->
                <p><?php the_time('Y年n月j日'); ?></p>
                <!-- 記事タイトル -->
                <h1 class="h2 px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h1>
                <!-- カテゴリー -->
                <p><a href=""><?php the_category(''); ?></a></p>
                <!-- サムネイル -->
                <div class="pb-3 portfolio_box">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="" class="img-fluid" />
                  <?php endif; ?>
                </div>
                <!-- 本文 -->
                <!-- 本文の情報を全て取得できる -->
                <div class="test-left px-2">
                  <?php the_content(); ?>
                  <!-- SNSシェアボタン -->
                  <!-- parts-snsを呼び出す -->
                  <?php get_template_part('parts-sns'); ?>
                </div>
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

  </body>
</html>
