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

  // ボタンショートコード($attsは属性 $contentはショートコードで囲まれた中のことを指す)
  function KAblog_shortcode( $atts, $content = "" ) {
    // linkという引数を持った属性を追加
    // '.$atts['link']'" class="btn '.$atts['class']'">'までがaタグの中身
    return '<a href= " '.$atts['link']. ' " class="btn '. $atts['class'].' " > '.$content . '</a>';
    
  }
  add_shortcode( 'btn', 'KAblog_shortcode' );

  // ページネーション
  function KAblog_pagenation(){
    // いろんな情報が取得できるwp_queryを使用する
    global $wp_query;
    if ($wp_query->max_num_pages <=1)
      return;
    echo '<nav class="pagenation">';
    echo paginate_links( array(
      // 全体のページ数を表示させる
      'total' => $wp_query->max_num_pages,
      'prev_text'          => __('<'),
      'next_text'          => __('>'),
      'type'               => 'list'
    ));
    echo '</nav>';
  }
  // 投稿者ページカスタマイズ
  function KAblog_profile_fields($user_contact){
    // 項目の追加その名前をTwitterとする
    $user_contact['twitter'] = 'Twitter';
    // $user_contactの値を返す
    return $user_contact;
  }
  add_filter('user_contactmethods','KAblog_profile_fields');

  // カスタム投稿タイプ
  function codex_custom_init() {
    $args = array(
      // 投稿できるようにする見えるようにする
      'public' => true,
      // 投稿タイプの名前
      'label'  => 'Books',
      'menu_position' => 5,
      'menu_icon' => 'dashicons-book',
      'has_archive' => true
     );
    register_post_type( 'book', $args );

    // Booksにカテゴリーをつけるための処理を記述（カスタムタクソノミー）
    $args = array(
      // パラメーターを指定してあげてregister_taxonomyで開く
      // 本のカテゴリー(ジャンル）を管理画面に表示させる
      'label' => __( '本のカテゴリー' ),
      'rewrite' => array( 'slug' => 'genre' ),
      // カテゴリーのような階層化する場合に記述
      'hierarchical' => true
    );
    register_taxonomy('genre','book',$args );

  }
  add_action( 'init', 'codex_custom_init' );


?>
