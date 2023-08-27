<!-- header.phpを読み込むテンプレートタグ -->
<?php get_header(); ?>

    <main class="l-main">            
        <div class="p-single-visual">
            <h2 class="p-single-visual__text c-title"><?php echo get_the_title(); ?></h2>
        </div>            

        <section class="p-single">                    
            <div class="c-inner">

                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ): ?>
                        <?php the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>表示する記事がありません</p>
                <?php endif; ?>

            </div>
        </section>
    </main>

<!-- sidebar.phpを読み込むテンプレートタグ -->
<?php get_sidebar(); ?>

        <!-- ハンバーガーメニュー展開時の背景 -->
        <div class="c-cover js-cover"></div> 

<!-- footer.phpを読み込むテンプレートタグ -->
<?php get_footer(); ?>