window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
require('bootstrap');

jQuery(document).ready(function() {
    jQuery('.mobilenavbtn').on('click','button',function() {
        jQuery('#mainnav .nav').toggleClass('d-none d-block');
    });
});