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

    //
    $('#articles').infinitescroll({

        // callback		: function () { console.log('using opts.callback'); },
        navSelector:"#nav-previous",
        nextSelector:"#nav-new a",
        itemSelector:"article",
        debug:true,
        dataType:'html',
        loading:{
            finished:function () {
                return true;
            },
            finishedMsg:"谢谢您的欣赏，记得留下你的脚印哦~~",
            img:blog.themeDirUrl + "/lib/img/ajax-loader.gif",
            /*msg: $('<div class="divider-top">&nbsp;</div>\
             <div class="container">\
             <div class="span23 nav-tip">\
             <div id="infscr-loading" style="display: none; ">\
             <img alt="Loading..." src="' + blog.themeDirUrl + '/lib/img/ajax-loader.gif" style="display: none; ">\
             <div style="opacity: 1; "><em>徐欣然的生活故事已加载完毕~</em></div>\
             </div>\
             </div>\
             <div class="divider-bottom">&nbsp;</div>'),*/
            msg:null,
            msgText:"请稍后，正在加载徐欣然更多的生活故事~~",
            selector:'#navTipWrap .nav-tip',
            speed:'fast',
            start:undefined
        }
        // behavior		: 'twitter',
        // appendCallback	: false, // USE FOR PREPENDING
        // pathParse     	: function( pathStr, nextPage ){ return pathStr.replace('2', nextPage ); }
    }, function (newElements) {
        // optional callback when new content is successfully loaded in.

        // keyword `this` will refer to the new DOM content that was just added.
        // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
        //                   all the new elements that were found are passed in as an array

        //USE FOR PREPENDING
        var $this = $(this);
        $this.append(newElements);
    });

});
