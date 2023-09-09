<?php get_header(); ?>

    <main class="l-main">      
        <div class="p-archive-visual">
            <h2 class="p-archive-visual__text c-title">Search:</h2>
            <!-- 検索ワードを取得 -->
            <span class="p-archive-visual__ja"><?php the_search_query(); ?></span> 
        </div>

        <section class="p-menu">
            <div class="c-inner">
                <h2 class="c-heading--h2 u-brown">小見出しが入ります</h2>
                <p class="p-menu__text u-brown">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <!-- card.phpを表示 -->
                <?php get_template_part( 'card' ); ?>                
                <!-- ページナビゲーション -->
                <?php if ( function_exists( 'wp_pagenavi' ) ) {
                    wp_pagenavi( array(
                        'wrapper_class' => 'p-pager',
                    ) );
                } ?>
            </div>
        </section>
    </main>

    <?php get_sidebar(); ?>

    <!-- ハンバーガーメニュー展開時の背景 -->
    <div class="c-cover js-cover"></div> 

    <?php get_footer(); ?>