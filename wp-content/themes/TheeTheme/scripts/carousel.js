/*
 *  Module: carousel
 */

require('./vendor/bootstrap.bundle');

var $ = require('jquery');

/**
 * Initialize carousels
 */
function init() {
    $('.box-carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<0;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
}

/**
 * Public API
 * @type {Object}
 */
module.exports = {
    init: init,
};