<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">
            <!-- アーカイブページタイトル -->
            <div class="py-3">
              <?php if(is_category()): ?>
                <!-- カテゴリーアーカイブ -->
                <h1 class="h2">
                  「<?php echo single_cat_title(); ?>」の記事
                </h1>
              <?php elseif(is_tag()): ?>
                <!-- タグアーカイブ -->
                <h1 class="h2">
                  「<?php echo single_tag_title(); ?>」の記事
                </h1>
                <?php elseif(is_author()): ?>
                <!-- 作成者アーカイブ -->
                <h1 class="h2">
                  「<?php echo esc_attr(get_the_author_meta('nickname')); ?>」の記事
                </h1>
                <?php elseif(is_month()): ?>
                <!-- 日付アーカイブ -->
                <h1 class="h2">
                  「<?php echo the_time('Y年n月'); ?>」の記事
                </h1>
              <?php endif; ?>
            </div>
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
