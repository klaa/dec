window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
require('bootstrap');

var equalHeights = function() {
    jQuery('.scrollitem').each(function(e,v) {
        //e.preventDefault();
        var newsItemHeight = 0;
        jQuery(v).find('.newsitem').each(function() {
            var itemHeight = jQuery(this).height();
            if(itemHeight > newsItemHeight) {
                newsItemHeight = itemHeight;
            }
        });       
        jQuery(v).find('.newsitem').height(newsItemHeight);
        jQuery(v).find('.newswrap').height(newsItemHeight*5 + 20);
    });
};

var navigateNews = function(direction) {
    if(direction==2) {
        jQuery('.newsevents .newsevents-item.d-block:first').animate({opacity:'0'},333,function(e) {
            //e.preventDefault();
            jQuery(this).toggleClass('d-none d-block').appendTo('.newsevents .row').removeAttr('style');
            jQuery('.newsevents .newsevents-item.d-block:last').next().toggleClass('d-none d-block');
        });
    }
    if(direction==1) {
        jQuery('.newsevents .newsevents-item.d-block:last').toggleClass('d-none d-block');
        jQuery('.newsevents .newsevents-item.d-none:last').toggleClass('d-none d-block').css('opacity',0).prependTo('.newsevents .row').animate({opacity:'0'},250,function() {
            jQuery(this).removeAttr('style');    
        });
        
    }       
}

jQuery(function() {
    jQuery('.mobilenavbtn').on('click','button',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');
    });
    jQuery('.closemenu').on('click',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');    
    });
    
    jQuery('.newseventsbtn').on('click',function() {
        var dir = jQuery(this).data('direction');
        navigateNews(dir);
    });

    equalHeights();
    
    setInterval(function() {

        jQuery('#doitac .dt-item.d-block:first').animate({opacity:'0',width: 0},1000,function(e) {
            //e.preventDefault();
            jQuery(this).toggleClass('d-none d-block').appendTo('#doitac .dt-wrap .row').removeAttr('style');
            jQuery('#doitac .dt-item.d-block:last').next().toggleClass('d-none d-block');
        });

        jQuery('.scrollitem').each(function(e,v) {
            //e.preventDefault();
            var targetItem = jQuery(v).find('.newsitem:first');
            var targetItemHeight = jQuery(v).find('.newsitem:first').height();
            targetItem.slideUp(333,function() {
                jQuery(this).css({height:targetItemHeight,marginBottom:'',display:''}).appendTo(jQuery(v).find('.newswrap'));
            });
        });
    },5000);
});