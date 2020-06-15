<!-- 関連記事の設定 -->
<?php
  if(has_category()){
    $category = get_the_category();
    // カテゴリーを複数選択できるので配列で保存
    $categoryids = array();
    foreach($category as $cat){
      $categoryids = $cat->term_id;
    }    
  }
  // WP_Query関数$argsに配列で取得して入れる
  $args = array(
    // 何ページ取得か
    'posts_per_page' => 8,
    // 現在の記事($post->ID)は関連記事には表示しない
    'post__not_in' => array($post->ID),
    'category__in' => $categoryids,
    'orderby'        => 'rand',
  );
  // $argとついたものをピックアップ記事に表示させる
  $related_query = new WP_Query( $args );
?>
<!-- 内部リンクとして働くので関連記事を置く -->
<h5>関連記事</h5>
<div class="d-flex flex-wrap">
  <?php if ( $related_query->have_posts() ) : ?>
    <!-- have_postsから記事を取ってきて表示させる -->
    <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
      <!-- 最大８記事を表示させるのでcol-md-3とする -->
      <div class="col-md-3 pb-5">
        <!-- サムネイル -->
        <div class="pb-3">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="" class="img-fluid" />
          <?php endif; ?>
        </div>
        <!-- 記事タイトル -->
        <p><a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?>
        </a></p>
      </div>
    <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
  <!-- 何も表示するものがなければ -->
  <?php endif; ?>
</div>
