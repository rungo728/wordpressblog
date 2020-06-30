<div class="col-md-4 col-12">
<!-- サイドバーのプロフィールと検索部分をウィジェットで表示させている -->
<?php dynamic_sidebar( 'sidebar_widget01' ); ?>
  <!-- プロフィール -->
  <!-- <div class="container bg-white mb-5 py-5">
    <div class="mx-5">
      <img src="<?php echo get_template_directory_uri(); ?>/images/profile1.png" alt="" class="img-fluid rounded-circle">
    </div>
    <div class="text-center">
      <h4 class="d-inline-block py-3 border-bottom border-info">コヤマカオル</h4>
    </div>
    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
  </div> -->
  <!-- 検索フォーム部分 -->
  <!-- 読んで欲しい記事 -->
  <div class="container bg-white mb-5 py-5">
    <div class="text-center pb-5">
        <h4 class="d-inline-block py-3 border-bottom border-info">読んで欲しい記事</h4>
    </div>
    <?php
      // タブにsidepickupとついたものをピックアップ記事に表示させる
      $side_query = new WP_Query( 'tag=sidepickup' );
    ?>
    <!-- top-queryをhave_postsから探してくる -->
    <!-- postsにあればピックアップに表示させます -->
    <?php if ( $side_query->have_posts() ) : ?>
      <?php while ( $side_query->have_posts() ) : $side_query->the_post(); ?>
        <div class="pb-5">
          <!-- サムネイル -->
          <div class="pb-3 portfolio_box">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="" class="img-fluid" />
            <?php endif; ?>
          </div>
          <!-- 記事タイトル -->
          <h5 class="h5"><a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <!-- 何も表示するものがなければ -->
    <?php endif; ?>
  </div>
</div>