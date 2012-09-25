<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); $postId = get_the_ID();  $attacheInfo = getImagesInfoById( $postId ); $postId = $postId % 10; ?>
    <article class="articleColor<?php echo($postId.' '.$attacheInfo['$getArticleClass']) ?> ">
        <div class="divider-top">&nbsp;</div>
        <div class="container">
            <div class="span23">
                <?php echo(__($attacheInfo['$gallery_size_hero'])); ?>
                <?php if ($attacheInfo['$getArticleClass']=='') : ?>
                    <?php echo( __($attacheInfo['$gallery_size_masonry']) ); ?>
                    <section>
                        <header>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <?php girl_post_meta() ?>
                        <div class="post">
                            <?php the_content(); ?>
                        </div>
                    </section>
                <?php else : ?>
                    <section >
                        <header>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <?php girl_post_meta() ?>
                        <div class="post">
                            <?php the_content(); ?>
                        </div>
                    </section>
                    <?php echo( __($attacheInfo['$gallery_size_masonry']) ); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="divider-bottom">&nbsp;</div>
    </article>
    <?php endwhile; ?>

<?php else : ?>

<h2>Not Found</h2>

<?php endif; ?>

<?php get_footer(); ?>

</body>
</html>