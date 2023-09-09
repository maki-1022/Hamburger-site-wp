<?php get_header(); ?>

    <main class="l-main">      
        <div class="p-archive-visual">
            <h2 class="p-archive-visual__text c-title">Menu:</h2>
            <!-- カテゴリー名を取得 -->
            <span class="p-archive-visual__ja"><?php single_cat_title(); ?></span> 
        </div>

        <section class="p-menu">
            <div class="c-inner">
                <h2 class="c-heading--h2 u-brown">小見出しが入ります</h2>
                <!-- カテゴリー説明文を表示 -->
                <p class="p-menu__text u-brown"><?php echo esc_html( category_description() ); ?></p>
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