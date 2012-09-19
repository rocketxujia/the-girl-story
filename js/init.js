/**
 * Created with IntelliJ IDEA.
 * User: xujia01
 * Date: 12-9-18
 * Time: 上午11:17
 * To change this template use File | Settings | File Templates.
 */

$(function(){
    // 初始化图片masonry
    $('.thumbnails').imagesLoaded(function(){
        $(this).masonry({
            itemSelector:'.thumbnail',
            columnWidth: 182
        });

        $('.hero a, .thumbnail a').fancybox({
            /*openEffect  : 'none',
            closeEffect : 'none',*/

            prevEffect : 'fade',
            nextEffect : 'fade',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons	: {}
            }

            /*,
               // 也可以添加title 给A节点
             afterLoad : function() {
             this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
             }*/
        });

    });


});
