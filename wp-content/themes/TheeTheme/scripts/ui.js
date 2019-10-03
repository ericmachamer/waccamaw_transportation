/**
 * Module: ui
 * General ui behaviors
 */

require('popper.js/dist/umd/popper-utils');
require('bootstrap/dist/js/bootstrap.bundle');

var $ = require('jquery');
var Masonry = require('masonry-layout');

function init() {
    //Bootstrap items
    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();

    // Toggle active state
    $('[data-toggle-active]').on('click', function (e) {
        e.preventDefault();
        var target = $(this).data('toggle-active');
        $(this).toggleClass('active');
        $(target).toggleClass('active');
    });

    $('[data-url]').on('click', function (e) {
        e.preventDefault();
        var target = $(this).data('url');
        window.location.href = target;
    });

    $('.mobile-nav').on('click', function() {
        $('#nav-holder > ul').toggleClass('active');
        $(this).toggleClass('active');
    });

    $('#nav-holder li.menu-item-has-children').append('<div class="mobile-dropdown"></div>');

    $('.mobile-dropdown').on('click', function(e) {
        if($(this).parent('li').hasClass('active')) {
            $('.nav-item').removeClass('active');
        } else {
            $('.nav-item').removeClass('active');
            $(this).parent('li').addClass('active');
        }
        e.stopPropagation();
    });

    $('.graphic-columns .col').on('click', function() {
        url = $(this).find('a').attr("href");
        window.location = url;
        return true;
    });

    //Masonry
    $(window).bind('load', function () {
        masonry();
    });
    $( window ).resize(function() {
        masonry();
    });

    // Timeline
    $('.show-all').on('click', function() {
        if($(this).hasClass('shown')) {
            $(this).removeClass('shown').html('Read More').siblings('.reveal').removeClass('show').addClass('hidden');
        } else {
            $(this).addClass('shown').html('Read Less').siblings('.reveal').addClass('show').removeClass('hidden');
        }
        masonry();
        return false;
    });

    // Smooth scroll
    $('.js-scroll[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    //dynamic sticky header
    function stickyHeader() {
        if ($('.header').hasClass('sticky')) {
            var header_height = $('.header').outerHeight();
            if($(".header-gap").length) {
                $(".header-gap").css('padding-top', header_height);
            } else {
                $('.content-wrapper').css('padding-top', header_height);
            }

        }
    }
    //dynamic sticky footer
    function stickyFooter() {
        if ($('.footer').hasClass('sticky')) {
            var footer_height = $('.footer').outerHeight();
            $('.content-wrapper').css({
                'margin-bottom': '-' + footer_height + 'px',
                'padding-bottom': footer_height + 'px'
            });
        }
    }

    function smallOnScroll() {
        var header_height = $('.header').height();
        if ($(window).scrollTop() > header_height) {
            $('.header.sticky').addClass('header-small');
        } else {
            $('.header.sticky').removeClass('header-small');
        }
        if($('.hero-nav').length) {
            var scrollDistace = $(window).scrollTop() + header_height;
            var subOffset = $('.main').offset().top - 35;
            var containerWidth = $('.container:first').width();
            if (scrollDistace > subOffset) {
                $('.hero-nav').addClass('fixed');
                $('.hero-nav.fixed').css({'width': containerWidth + 'px', 'top': header_height + 'px'});
                $('.header.sticky').addClass('no-shadow');
            } else {
                $('.hero-nav').removeClass('fixed').css({'width': '', 'top': ''});
                $('.header.sticky').removeClass('no-shadow');
            }
        }
    }
    //call sticky header and footer to load
    stickyFooter();
    smallOnScroll();

    $(".gform_body input, .gform_body textarea, .gform_body select").focus(function(){
        $(this).closest('li').addClass("active");

    }).blur(function(){
        if(!$(this).val()) {
            $(this).closest('li').removeClass("active");
        }
    })

    $(window).bind('scroll', function () {
        stickyFooter();
        //Turn off if you want header to be same size
        smallOnScroll();
        //Allows for header to shrink when below height
    });

    //Bootstrap Guide
    $("a[href='#']").click(function(e) {
        e.preventDefault();
    });

    var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function(){
        var html = $(this).parent().html();
        html = cleanSource(html);
        $("#source-modal pre").text(html);
        $("#source-modal").modal();
    });

    $(".bs-component").hover(function(){
        $(this).append($button);
        $button.show();
    }, function(){
        $button.hide();
    });

    function cleanSource(html) {
        html = html.replace(/×/g, "&times;")
            .replace(/«/g, "&laquo;")
            .replace(/»/g, "&raquo;")
            .replace(/←/g, "&larr;")
            .replace(/→/g, "&rarr;");

        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
            re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function(line){
            if (line.match(re)) {
                line = line.substring(indentSize);
            }

            return line;
        });

        lines = lines.join("\n");

        return lines;
    }

    function masonry() {
        var msnry = new Masonry('.timeline-holder', {
            itemSelector: '.timeline-element', // use a separate class for itemSelector, other than .col-
            columnWidth: '.timeline-element',
            percentPosition: true
        });
        var windowWidth = $(window).width() / 2;
        if (windowWidth >= 512) {
            $('.timeline-element').removeClass('justify-content-end').removeClass('odd');
            $('.timeline-element-holder').removeClass('offset-lg-2');
            $('.timeline-element').each(function () {
                var offset = $(this).offset().left;
                if (offset >= windowWidth) {
                    $(this).addClass('justify-content-end odd').find('.timeline-element-holder').addClass('offset-lg-2');
                } else {
                    $(this).addClass('justify-content-start');
                }
            });
        } else {
            $('.timeline-element').removeClass('justify-content-end odd');
            $('.timeline-element-holder').removeClass('offset-lg-2');
            $('.timeline-element:odd').addClass('odd');
        }
    }
}

/**
 * Public API
 * @type {Object}
 */
module.exports = {
    init: init
};