<footer class="articleColor11">
    <div class="divider-top">&nbsp;</div>
    <div class="container">
        <div class="inner span23">
            <div class="logo-footer"><a href="<?php bloginfo('url'); ?>/"><strong>Girl</strong> <span>With A colorful</span>
                <strong>life</strong></a></div>
            <nav>
                <ul id="menu-footer-nav" class="menu">
                    <li><a href="#girlwithacamera.co.uk/about/">About</a></li>
                    <li><a href="#girlwithacamera.co.uk/contact/">Contact</a></li>
                    <li><a href="/feed">RSS Feed</a></li>
                </ul>
                <p>© 2012 xujia. All Rights Reserved.</p>
            </nav>
        </div>
    </div>
</footer>

<script type="text/javascript">
    blog = {
        themeDirUrl:' <?php bloginfo('template_directory'); ?>'
    }
</script>
<script src="<?php bloginfo('template_directory'); ?>/lib/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/jquery.masonry.min.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript"
        src="<?php bloginfo('template_directory'); ?>/lib/js/fancybox/jquery.fancybox.js?v=2.1.0"></script>
<link rel="stylesheet" type="text/css"
      href="<?php bloginfo('template_directory'); ?>/lib/js/fancybox/jquery.fancybox.css?v=2.1.0" media="screen"/>
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css"
      href="<?php bloginfo('template_directory'); ?>/lib/js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.3"/>
<script type="text/javascript"
        src="<?php bloginfo('template_directory'); ?>/lib/js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>

<script src="<?php bloginfo('template_directory'); ?>/lib/js/infinite-scroll/jquery.infinitescroll.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/js/init.js"></script>

<!-- UY BEGIN -->
<script type="text/javascript" id="UYScript" src="http://v1.uyan.cc/js/iframe.js?UYUserId=1689138" async=""></script>
<script language="javascript" charset="utf-8" src="http://v1.uyan.cc/js/countFrame.js" defer></script>  <!--获取评论量 添加-->
<!-- UY END -->

<?php
/* Always have wp_footer() just before the closing </body>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to reference JavaScript files.
     */
wp_footer();
?>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-35130132-1']);
    _gaq.push(['_setDomainName', 'xjsxj.com']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>