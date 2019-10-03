/**
 * Module: utilities
 * General helper functions
 */

var Modernizr = require('browsernizr');
var $ = require('jquery');

var user = {
    mobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(global.navigator.userAgent),
    lte8: $('html').hasClass('lte8')
};

/**
 * Convert dash separated values into camel case format
 * @param  {string} input The dash separated string to convert
 * @return {string}       The camel case formatted string
 */
function dashToCamel(input) {
    return input.toLowerCase().replace(/-(.)/g, function (match, group1) {
        return group1.toUpperCase();
    });
}

/**
 * Determine if a given string is a valid email address
 * @param  {string} email The email address
 * @return {bool}
 */
var isEmail = function (email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

/**
 * Public API
 */
module.exports = {
    user: user,
    dashToCamel: dashToCamel,
    isEmail: isEmail
};