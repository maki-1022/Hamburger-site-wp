<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>"> <!-- サイトのキャッチフレーズを表示 -->
    <title><?php bloginfo( 'name' ); ?></title> <!-- サイトのタイトルを表示 -->
    <!-- <link rel="shortcut icon" href="#" type="image/x-icon"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <!-- ページごとに自動的にタグを追加 -->
    <div class="l-container">
        <header class="l-header">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?> "> <!-- ホームURLを取得 -->
                <img src="./img/Hamburger.svg" alt="ヘッダーHamburgerロゴ">
                </a>
            </h1>
            <!-- ハンバーガーメニュー -->
            <button class="p-hamburger u-bold js-hamburger">
                <span>Menu</span>
            </button>
            <!-- フォーム -->
            <form class="p-search" action="#" method="get">
                <input type="text" class="p-search__text c-input">
                <button type="submit" class="p-search__button c-button">検索</button>
            </form>
        </header>