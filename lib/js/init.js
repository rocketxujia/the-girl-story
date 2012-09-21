/**
 * Created with IntelliJ IDEA.
 * User: xujia01
 * Date: 12-9-18
 * Time: ����11:17
 * To change this template use File | Settings | File Templates.
 */

$(function () {
    //  初始化masonry
    $('.gallery').imagesLoaded(function () {
        var $this = $(this);
        $this.filter('.gallery-size-masonry').masonry({
            itemSelector:'.gallery-item',
            columnWidth:182
        });
    });
    $('.gallery-icon a').fancybox({
        /*openEffect:'none',
         closeEffect:'none',*/

        prevEffect:'fade',
        nextEffect:'fade',

        closeBtn:false,

        helpers:{
            title:{
                type:'inside'
            },
            buttons:{}
        }/*,
         // title
         afterLoad : function() {
         this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
         }*/
    });

});
