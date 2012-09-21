<?php get_header(); ?>

<?php $postIndex = -1 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $postIndex = (++$postIndex)%10; $attacheInfo = getAttachmentsInfoById( get_the_ID() ); ?>
    <article class="articleColor<?php echo($postIndex.' '.$attacheInfo['$getArticleClass']) ?> ">
        <div class="divider-top">&nbsp;</div>
        <div class="container">
            <div class="span23">
                <?php echo(__($attacheInfo['$gallery_size_hero'])); /*echo do_shortcode('[gallery link="file" size="first" columns="0" itemtag="div" icontag="div" captiontag="div" include="945"]'); */?>
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


<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery.masonry.min.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript"
        src="<?php bloginfo('template_directory'); ?>/_/js/fancybox/jquery.fancybox.js?v=2.1.0"></script>
<link rel="stylesheet" type="text/css"
      href="<?php bloginfo('template_directory'); ?>/_/js/fancybox/jquery.fancybox.css?v=2.1.0" media="screen"/>
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css"
      href="<?php bloginfo('template_directory'); ?>/_/js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.3"/>
<script type="text/javascript"
        src="<?php bloginfo('template_directory'); ?>/_/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/init.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
     Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

</body>
</html>