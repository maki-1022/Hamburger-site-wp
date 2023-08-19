<!-- header.phpを読み込むテンプレートタグ -->
<?php get_header(); ?>

    <?php
    if ( have_posts() ):
        while ( have_posts() ): the_post();
    ?>

        <main class="l-main">            
            <div class="p-page-visual">
                <h2 class="p-page-visual__text c-title"><?php the_title(); ?></h2>
            </div>

            <section class="p-single-block">
                <div class="c-inner">
                    <section class="p-single-section">
                        <h2 class="c-heading--h2">見出しh2</h2>
                        <p class="c-heading--p">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                        <h3 class="c-heading--h3">見出しh3</h3>
                        <h4 class="c-heading--h4">見出しh4</h4>
                        <h5 class="c-heading--h5">見出しh5</h5>
                        <h6 class="c-heading--h6">見出しh6</h6>
                    </section>
                    <div class="p-blockquote">
                        <blockquote>
                            <p class="p-blockquote__text">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                        </blockquote>
                        <p class="p-blockquote__cite">出典元： <cite><a class="p-blockquote__link" href="#">○○○○○○○○○○○○</a></cite></p>
                    </div>

                    <article class="p-content-block p-content-block--01">
                        <img class="p-content-block--01__img" src="<?php echo get_theme_file_uri( './img/cooked-food.jpg' ); ?>" alt="ハンバーガーとポテトの写真">
                    </article>

                    <article class="p-content-block p-content-block--02">
                        <div class="c-flex--row">
                            <img class="p-content-block--02__img" src="../../img/cooked-food.jpg" alt="ハンバーガーとポテトの写真">
                            <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        </div>
                    </article>
                    <article class="p-content-block p-content-block--02">
                        <div class="c-flex--row u-reverse">
                            <img class="p-content-block--02__img" src="../../img/cooked-food.jpg" alt="ハンバーガーとポテトの写真">
                            <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        </div>
                    </article>

                    <article class="p-content-block p-content-block--03">
                        <img src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                    </article>

                    <article class="p-content-block p-content-block--04">
                        <div class="c-flex--wrap">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                            <img class="p-content-block--04__img c-flex--wrap__item" src="../../img/cooked-foods-square.jpg" alt="ハンバーガーとポテトの写真">
                        </div>
                    </article>

                    <article class="p-content-block p-content-block--menu">
                        <ul class="p-content-block--menu__list">
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>                            
                        </ul>
                        <ul class="p-content-block--menu__list p-content-block--menu__list--02">
                            <li>1.リスト2リスト2リスト2</li>
                            <li>2.リスト2リスト2リスト2</li>
                        </ul>
                        <ul class="p-content-block--menu__list">
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>                            
                        </ul>
                        <ul class="p-content-block--menu__list u-margin-top57">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>                            
                        </ul>
                        <ul class="p-content-block--menu__list p-content-block--menu__list--02">
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>                            
                        </ul>
                        <ul class="p-content-block--menu__list">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>                            
                        </ul>                        
                    </article>

                    <article class="p-content-block p-content-block--html">
                        <pre><code class="p-content-block--html__code">
&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </article>

                    <article class="p-content-block p-content-block--table">
                        <table class="c-table">
                            <tr>
                                <td class="c-table__left">テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-table__left">テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-table__left">テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-table__left">テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-table__left">テーブル</td>
                                <td>テーブル</td>
                            </tr>
                        </table>
                    </article>

                    <article class="p-content-block--button">
                        <div class="p-content-block--button__inner">
                            <button class="c-button--single">ボタン</button>
                        </div>
                        <p class="p-content-block--button__text">boldboldboldboldboldboldbold</p>
                    </article>
                </div>

            </section>

        </main>
    
    <?php
        endwhile;
    endif;
    ?>

<!-- sidebar.phpを読み込むテンプレートタグ -->
<?php get_sidebar(); ?>

        <!-- ハンバーガーメニュー展開時の背景 -->
        <div class="c-cover js-cover"></div> 

<!-- footer.phpを読み込むテンプレートタグ -->
<?php get_footer(); ?>