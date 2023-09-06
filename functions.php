<?php
    // テーマサポート
    function custom_theme_support() {
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support( 'post-thumbnails' ); //アイキャッチ機能有効化
        add_theme_support( 'title-tag' ); //管理画面からタイトルタグ登録可能に
        add_theme_support( 'menus' ); //メニューのカスタマイズを有効化
        register_nav_menus( array( //カスタムメニューの有効化
            'footer_nav' => esc_html__( 'footer navigation', 'hamburger-site-wp' ),
            'category_nav' => esc_html__( 'category navigation', 'hamburger-site-wp' ),
        ));
        add_theme_support( 'editor-styles' ); // エディターのスタイルを変更できるようにする
        add_editor_style(); // エディターにフロントエンド用CSSを読み込む
    }

    add_action( 'after_setup_theme', 'custom_theme_support' );

    // archive.phpのカテゴリー説明文を取得・表示する際に自動的に生成されるpタグを削除
    remove_filter('term_description','wpautop');

    
    //条件分岐タグを使ってページにより $title を変更する処理
    function change_title_tag( $title ) {  
        if ( is_front_page() && is_home() ) { 
          $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) {
          $title = single_post_title( '', false );
        }
        
        return $title;
      }
      add_filter( 'pre_get_document_title', 'change_title_tag' );

    //googleフォント、ress.css、style.css、JavaScript読み込み
    function my_script_init() {
      wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap', array() );
      wp_enqueue_style( 'ress', get_template_directory_uri() . '/css/ress.css', array(), '5.0.2');
      wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
      wp_enqueue_script( 'JavaScript', get_template_directory_uri() . '/js/hamburger.js', array(), '1.0.0', true);
    }
      add_action( 'wp_enqueue_scripts', 'my_script_init');

      

   
