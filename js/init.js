/**
 * Created with IntelliJ IDEA.
 * User: xujia01
 * Date: 12-9-18
 * Time: ����11:17
 * To change this template use File | Settings | File Templates.
 */

$(function(){
    // ��ʼ��ͼƬmasonry
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
               // Ҳ�������title ��A�ڵ�
             afterLoad : function() {
             this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
             }*/
        });

    });


});
