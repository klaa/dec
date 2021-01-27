window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
require('bootstrap');

var equalHeights = function() {
    jQuery('.scrollitem').each(function(i,v) {
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

jQuery(function() {
    jQuery('.mobilenavbtn').on('click','button',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');
    });
    jQuery('.closemenu').on('click',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');    
    });
    
    equalHeights();
    
    setInterval(function() {

        jQuery('#doitac .dt-item.d-block:first').animate({opacity:'0'},800,function() {
            jQuery(this).toggleClass('d-none d-block').appendTo('#doitac .dt-wrap .row').animate({opacity:'1'},10);
            jQuery('#doitac .dt-item.d-block:last').next().toggleClass('d-none d-block');
        });

        jQuery('.scrollitem').each(function(i,v) {
            var targetItem = jQuery(v).find('.newsitem:first');
            var targetItemHeight = jQuery(v).find('.newsitem:first').height();
            targetItem.slideUp(800,function() {
                jQuery(this).css({height:targetItemHeight,marginBottom:'',display:''}).appendTo(jQuery(v).find('.newswrap'));
            });
        });
    },5000);
});