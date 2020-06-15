<!-- パンくずリスト -->
<div class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo home_url(); ?>">
      ホーム
    </a>
  </li>
  <!-- もし投稿のページだった時に -->
  <?php if(is_single()): ?>
    <?php
      $cats = $sort = array();
      // まず複数のカテゴリーを取得
      $category = get_the_category();
      foreach($category as $cat){
        // レイヤーの数を取得（何階層になるのか）
        // カテゴリーの親子関係・階層を取得することができる関数
        $layer = count(get_ancestors($cat->term_id,'category'));
        // カテゴリーのname,id,layerを配列で定義
        $cats[] = array(
          'name' => $cat->name,
          'id' => $cat->term_id,
          'layer' => $layer
        );
        // $sortを$layer(階層）で定義しておく
        $sort[] = $layer;
      }
      // multisortは複数の配列を一度にソートとして条件を絞り込む
      array_multisort($sort,SORT_ASC,$cats);
    ?>
    <!-- $catsの配列を入れて繰り返し表示する -->
    <?php foreach ($cats as $cat): ?>
    <li class="breadcrumb-item">
      <a href="<?php echo get_category_link($cat['id']); ?>">
        <?php echo $cat['name'];?>
      </a>
    </li>
    <?php endforeach; ?>
  <?php endif; ?>
</div>