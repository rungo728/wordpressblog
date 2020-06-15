<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-xs-12">
            <div class="bg-white mb-5 p-5">
              <h1 class="h2 px-3 pb-3">
                記事がありません
              </h1>
              <p>キーワード検索</p>
              <?php get_search_form(); ?>
              <p class="pt-3">カテゴリーから探す</p>
              <?php wp_list_categories(); ?>
            </div>
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
