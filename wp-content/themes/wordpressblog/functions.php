<?php
  // サムネイルに画像を乗せることができるように設定
  add_theme_support('post-thumbnails');

  // ウィジェットの登録
  function my_widgets_init() {

    register_sidebar( array(
      'name' => 'サイドバー',
      'id' => 'sidebar_widget01',
      'before_widget' => '<div class="container bg-white mb-5 py-5">',
      'after_widget' => '</div>',

    ) );
    // フッターとかもウィジェットを設定する場合はコメントアウトを解除
    // register_sidebar( array(
    //   'name' => 'フッターABout',
    //   'id' => 'sidebar_widgets02',
    //   'before_widget' => '<h4 class="d-inline-block py-3 border-bottom border-info">ABout',
    //   'after_widget' => '</h4>',

    // ) );
    // フッターとかもウィジェットを設定する場合はコメントアウトを解除
    // register_sidebar( array(
    //   'name' => 'フッターTwitter',
    //   'id' => 'sidebar_widgets02',
    //   'before_widget' => '<h4 class="d-inline-block py-3 border-bottom border-info">ABout',
    //   'after_widget' => '</h4>',

    // ) );
  }
  add_action( 'widgets_init', 'my_widgets_init' );

?>
