window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
require('bootstrap');

jQuery(document).ready(function() {
    jQuery('.mobilenavbtn').on('click','button',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');
    });
    jQuery('.closemenu').on('click',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');    
    });
    setInterval(function() {
        jQuery('#doitac .dt-item.d-block:first').toggleClass('d-none d-block').appendTo('#doitac .dt-wrap .row');
        jQuery('#doitac .dt-item.d-block:last').next().toggleClass('d-none d-block');
    },3000);
});