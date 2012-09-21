<?php get_header(); ?>

<?php $postIndex = rand(0, 9) ?>
<?php if (have_posts()) : while (have_posts()) : the_post();  $attacheInfo = getAttachmentsForHeroesById( get_the_ID() ); ?>
<article class=" full articleColor<?php echo($postIndex) ?> ">
    <div class="divider-top">&nbsp;</div>
    <div class="container">
        <div class="span23">
            <section>
                <header>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                </header>
                <?php girl_post_meta() ?>
                <div class="post">
                    <?php the_content(); ?>
                </div>
            </section>
            <?php echo( __($attacheInfo['$gallery_size_heroes']) ); ?>
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