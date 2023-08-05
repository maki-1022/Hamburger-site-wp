<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="これはarchiveページです。">
    <title>archive page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="l-container">
        <header class="l-header">
            <h1 class="l-header__logo"><a href="#"><img src="./img/Hamburger.svg" alt="ヘッダーHamburgerロゴ"></a></h1>
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

        <main class="l-main">            
            <div class="p-archive-visual">
                <h2 class="p-archive-visual__text c-title--archive">Menu:</h2>
            </div>

            <section class="p-menu">
                <div class="c-inner">
                    <h2 class="c-heading--h2 u-brown">小見出しが入ります</h2>
                    <p class="p-menu__text u-brown">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                    <ul>
                        <li>
                            <figure class="p-card">
                                <img class="p-card__img" src="img/burger-menu-img.jpg" alt="バーガーの写真">
                                <figcaption class="p-card__menu">
                                    <h2 class="c-heading--h2">チーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div  class="c-link u-bold">
                                        <a href="#">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="p-card">
                                <img class="p-card__img" src="img/burger-menu-img.jpg" alt="バーガーの写真">
                                <figcaption class="p-card__menu">
                                    <h2 class="c-heading--h2">ダブルチーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div  class="c-link u-bold">
                                        <a href="#">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="p-card">
                                <img class="p-card__img" src="img/burger-menu-img.jpg" alt="バーガーの写真">
                                <figcaption class="p-card__menu">
                                    <h2 class="c-heading--h2">スペシャルチーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div  class="c-link u-bold">
                                        <a href="#">詳しく見る</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>

            <nav class="p-pager">
                <span class="u-bold">page 1/10</span>
                <a href="#"><img src="/img/prev.svg" class="p-pager__arrow" alt="前へ"></a>
                <p class="p-pager__prev"><a href="">前へ</a></p>
                <ul class="p-pager__item u-bold">                    
                    <li class="p-pager__link"><a href="">1</a></li>
                    <li class="p-pager__link"><a href="">2</a></li>
                    <li class="p-pager__link"><a href="">3</a></li>
                    <li class="p-pager__link"><a href="">4</a></li>
                    <li class="p-pager__link"><a href="">5</a></li>
                    <li class="p-pager__link"><a href="">6</a></li>
                    <li class="p-pager__link"><a href="">7</a></li>
                    <li class="p-pager__link"><a href="">8</a></li>
                    <li class="p-pager__link"><a href="">9</a></li>                    
                </ul>
                <p class="p-pager__next"><a href="">次へ</a></p>
                <a href="#"><img src="/img/next.svg" class="p-pager__arrow" alt="次へ"></a>
            </nav>
        </main>

        <aside class="l-sidebar p-sidebar js-menu">
            <h2 class="p-sidebar__heading">Menu</h2>
            <ul class="p-sidebar__block">
                <li class="p-sidebar__menu"><h3>バーガー</h3>
                    <ul class="p-sidebar__list">
                        <li class="p-sidebar__item">ハンバーガー</li>
                        <li class="p-sidebar__item">チーズバーガー</li>
                        <li class="p-sidebar__item">テリヤキバーガー</li>
                        <li class="p-sidebar__item">アボカドバーガー</li>
                        <li class="p-sidebar__item">フィッシュバーガー</li>
                        <li class="p-sidebar__item">ベーコンバーガー</li>
                        <li class="p-sidebar__item">チキンバーガー</li>
                    </ul>
                </li>
                <li class="p-sidebar__menu"><h3>サイド</h3>
                    <ul class="p-sidebar__list">
                        <li class="p-sidebar__item">ポテト</li>
                        <li class="p-sidebar__item">サラダ</li>
                        <li class="p-sidebar__item">ナゲット</li>
                        <li class="p-sidebar__item">コーン</li>
                    </ul>
                </li>
                <li class="p-sidebar__menu"><h3>ドリンク</h3>
                    <ul class="p-sidebar__list">
                        <li class="p-sidebar__item">コーラ</li>
                        <li class="p-sidebar__item">ファンタ</li>
                        <li class="p-sidebar__item">オレンジ</li>
                        <li class="p-sidebar__item">アップル</li>
                        <li class="p-sidebar__item">紅茶（Ice/Hot）</li>
                        <li class="p-sidebar__item">コーヒー（Ice/Hot）</li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ハンバーガーメニュー展開時の背景 -->
        <div class="c-cover js-cover"></div> 

        <footer class="l-footer">
            <ul class="l-footer__menu">
                <li class="l-footer__list">ショップ情報 | ヒストリー</li>
                <li class="l-footer__copyright"><small>Copyright: RaiseTech</small></li>
            </ul>
        </footer>
    </div>

    <script src="js/hamburger.js"></script>
</body>
</html>