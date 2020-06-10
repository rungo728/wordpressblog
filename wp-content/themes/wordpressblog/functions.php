<?php
  // サムネイルに画像を乗せることができるように設定
  add_theme_support('post-thumbnails');

  // titleタグの設定
  add_theme_support('title-tag');  
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

  // スクリプトとスタイルを正しくエンキューする方法
  function theme_name_scripts() {
    // wordpressテーマに必要なテーマ名などが書いてあるstyle.cssのこと
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-css', 
    'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
   );
    wp_enqueue_script( 
      'jquery',
      'https://code.jquery.com/jquery-3.5.1.slim.min.js', 
      array(),
      true 
    );
    wp_enqueue_script( 
      'jsdelivr',
      'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', 
      array(),
      true 
    );
    wp_enqueue_script( 
      'bootstrap-js',
      'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', 
      array(),
      true 
    );
  }

  add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>
