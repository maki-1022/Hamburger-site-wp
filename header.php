<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 管理画面の言語設定を自動的に出力 -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- 使われている文字コードを表示-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>"> <!-- サイトのキャッチフレーズを表示 -->
    <!-- <link rel="shortcut icon" href="#" type="image/x-icon"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <!-- ページごとに自動的にタグを追加 -->
    <div class="l-container">
        <header class="l-header">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?> "> <!-- ホームURLを取得 -->
                <img src="<?php echo get_theme_file_uri( './img/Hamburger.svg' ); ?>" alt="ヘッダーHamburgerロゴ">
                </a>
            </h1>
            <!-- ハンバーガーメニュー -->
            <button class="p-hamburger u-bold js-hamburger">
                <span>Menu</span>
            </button>
            <!-- searchform.phpを読み込むテンプレートタグ -->
            <?php get_search_form(); ?>
        </header>