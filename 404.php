<?php get_header(); ?>

    <main class="l-main">
        <h1>404 NOT FOUND</h1>
        <p>お探しのページはありませんでした。</p>
        <p>Topページは<a href="<?php echo esc_url( home_url( '/' ) ); ?>">こちら</a></p>
    </main>

<?php get_sidebar(); ?>

<!-- ハンバーガーメニュー展開時の背景 -->
<div class="c-cover js-cover"></div> 

<?php get_footer(); ?>