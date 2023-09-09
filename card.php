<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <ul>
            <li>
                <figure class="p-card">
                    <?php if( has_post_thumbnail() ): ?>
                    <!-- アイキャッチ画像があれば表示し、alt属性をタイトルにする -->
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'p-card__img', 'alt' => the_title_attribute('echo=0'))); ?>
                    <?php endif; ?>
                    <figcaption class="p-card__menu">
                        <h2 class="c-heading--h2"><?php the_title(); ?></h2>
                        <h3>小見出しが入ります</h3>
                        <?php the_excerpt(); ?>
                        <div  class="c-link u-bold">
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </figcaption>
                </figure>
            </li>
        </ul>
        
    <?php endwhile; ?>
<?php else : ?>
    <p>表示する記事がありません</p>
<?php endif; ?> 
