<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );

        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);

	// Add RSS links to <head> section
	automatic_feed_links();



	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.


    /*
     * 这里开始自己添加
     * */

    /*Remove or Disable the Admin Bar */
    add_filter( 'show_admin_bar', '__return_false' );
    remove_action( 'personal_options', '_admin_bar_preferences' );

    /**
     * Prints HTML with meta information for the current post—date/time and author.
     */
    if ( ! function_exists( 'getImagesInfoById' ) ) :
        function getImagesInfoById( $id = 0 ) {
            $post_id = intval( $id );
            $args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_mime_type'=> 'image', 'post_parent' => $post_id, 'order'=> 'ASC', 'orderby'=> 'post_date' );
            $attachments = get_posts($args);
            $num = count($attachments);
            $getArticleClass = (rand()%2==0)?"full":"";

            //
            $gallery_size_hero = '';
            $gallery_size_masonry = '';
            $gallery_size_heroes = '';
            switch($num){
                case 0:
                    $getArticleClass = 'full';
                    break;
                case 1:
                    $getArticleClass = '';
                    $gallery_size_masonry = getmasonryTemplate($post_id, $attachments, array( 'col2' ) );
                    break;
                case 2:
                    $getArticleClass = '';
                    $gallery_size_masonry = getmasonryTemplate($post_id, $attachments, getRandColsClasses( $attachments, $num) );
                    break;
                case 3:
                case 4:
                    $getArticleClass = '';
                    $gallery_size_hero = getHeroTemplate($post_id, $attachments[0]);
                    array_shift($attachments);
                    $gallery_size_masonry = getmasonryTemplate($post_id, $attachments, getRandColsClasses( $attachments, $num) );
                    break;
                case 5:
                    $gallery_size_hero = getHeroTemplate($post_id, $attachments[0]);
                    array_shift($attachments);
                    $gallery_size_masonry = getmasonryTemplate($post_id, $attachments, getRandColsClasses( $attachments, $num) );
                    break;
                default:
                    $getArticleClass = 'full';
                    $gallery_size_hero = getHeroTemplate($post_id, $attachments[0]);
                    array_shift($attachments);
                    $gallery_size_masonry = getmasonryTemplate($post_id, $attachments, getRandColsClasses( $attachments, $num) );
                    break;
            }

            return array( '$getArticleClass' => $getArticleClass, '$gallery_size_hero' => $gallery_size_hero, '$gallery_size_masonry' => $gallery_size_masonry, '$gallery_size_heroes' => $gallery_size_heroes );
        }

        function getImagesForHeroesById( $id = 0 ) {
            $post_id = intval( $id );

            $args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_mime_type'=> 'image', 'post_parent' => $post_id, 'order'=> 'ASC', 'orderby'=> 'post_date' );
            $attachments = get_posts($args);
            $num = count($attachments);

            $gallery_size_heroes = getHeroesTemplate($post_id, $attachments );

            return array( '$gallery_size_heroes' => $gallery_size_heroes );
        }

        // 解析出hero图片展示的html片段
        function getHeroTemplate( $post_id, $attachment ){
            $attachment_id = $attachment->ID;
            $image = wp_get_attachment_image_src( $attachment_id );
            return __( '<div class="gallery gallery-size-hero">'.getImageTemplate($post_id, $attachment, 'hero', 'hero').'</div>' , 'girl_with_colorful_life' ) ;
        }

        // 解析出hero图片展示的html片段
        function getHeroesTemplate( $post_id, $attachments ){
            $out='<div class="gallery gallery-size-hero">';
            foreach( $attachments as $key=>$value  ){
                $attachment = $value;
                $out .= getImageTemplate($post_id, $attachment, 'hero', 'hero');
            }
            $out.='</div>';
            return $out;
        }

        // 解析出second图片展示的html片段
        function getmasonryTemplate( $post_id, $attachments, $classes ){
            $out='<div class="gallery gallery-size-masonry">';
            foreach( $attachments as $key=>$value  ){
                $attachment = $value;
                $out .= getImageTemplate( $post_id,  $attachment, $classes[$key], 'masonry');
            }
            $out.='</div>';
            return $out;
        }

        // 解析出单个图片html片段 '.wp_get_attachment_image( $attachment_id, $size ).'
        function getImageTemplate( $post_id, $attachment , $class = '', $size = 'masonry' ){
            $_post = & get_post( $post_id );
            $attachment_id = $attachment->ID;
            $image = wp_get_attachment_image_src( $attachment_id );
            $widths = array( "col1"=> "154", "col2"=>"336", "hero"=>"712" );

            $thumbnail_url = get_bloginfo('template_directory').'/timthumb/timthumb.php?src='.wp_get_attachment_url( $attachment_id ).'&w='.$widths[$class?$class:'col1'];
            return __( '<div class="gallery-item '.$class.'">
                            <div class="gallery-icon ">
                                <a href="'.wp_get_attachment_url( $attachment_id ).'" rel="gallery'.$post_id.'" title="'.esc_attr( $attachment->post_title ).'">
                                    <img src="'.$thumbnail_url.'" alt="'.$_post->post_excerpt.'" title="'.$_post->post_title.'">
                                </a>
                            </div>
                        </div>' , 'girl_with_colorful_life' ) ;
        }

    function getRandColsClasses( $attachments, $num = 0 ){
        $classes = array();
        $canCol2 = true;
        $i = 0;
        while($i<$num){
            $attachment_id = $attachments[$i]->ID;
            $image = wp_get_attachment_image_src( $attachment_id, 'masonry' );
            $isHorizon = $image[1] >= $image[2];
            if(rand()%2==0 && $canCol2 && $isHorizon){
                $classes[$i] = 'col2';
            }else{
                $classes[$i] = 'col1';
                $canCol2 = !$canCol2;
            }
            $i++;
        }
        return $classes;
    }

    endif;

    // 去除wordpress默认的gallery内嵌样式
    add_filter( 'use_default_gallery_style', '__return_false' );

    // 新增图片展示的两种尺寸大小： masonry 和 second
    add_image_size( 'hero', 712, 'auto' ); //712 pixels wide (and unlimited height)
    add_image_size( 'masonry', 154, 'auto' ); //154 pixels wide (and unlimited height)
    /*add_image_size( 'three', 526, 'auto' ); //154 pixels wide (and unlimited height) --
    add_image_size( 'second', 344, 'auto' ); //154 pixels wide (and unlimited height) (154 + 8 + 20 ) * n -20 = 182 * n - 20*/

    /**
     * 解析出 文章信息介绍行的html片段.
     */
    if ( ! function_exists( 'girl_post_meta' ) ) :
        function girl_post_meta() {
            printf( __( '<footer><time datetime="%1$s"><a href="%2$s"><span>%1$s</span></a></time>', 'girl_with_colorful_life' ),
                get_the_time('Y/m/d'),
                get_permalink());
            echo(__('<div class="comments-link"> <a href="'.get_permalink().'" uyan_identify="true" >0条评论</a></div></footer>'));
        }
    endif;




?>