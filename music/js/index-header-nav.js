/* JS Document */

/******************************

 [Table of Contents]

 1. Vars and Inits
 2. Set Header
 3. Init Menu
 4. Init Header Search
 5. Init Home Slider
 6. Initialize Milestones


 ******************************/

$(document).ready(function()
{
    "use strict";

    /*

    1. Vars and Inits

    */

    var header = $('.header');
    var menuActive = false;
    var menu = $('.menu');
    var burger = $('.hamburger');
    var ctrl = new ScrollMagic.Controller();

    setHeader();

    $(window).on('resize', function()
    {
        setHeader();
    });

    $(document).on('scroll', function()
    {
        setHeader();
    });

    initMenu();
    initHeaderSearch();
    initHomeSlider();
    initMilestones();

    /*

    2. Set Header

    */

    function setHeader()
    {
        if($(window).scrollTop() > 100)
        {
            header.addClass('navbar-fixed-top nav-back');
        }
        else
        {
            header.removeClass('navbar-fixed-top nav-back');
        }
    }



});