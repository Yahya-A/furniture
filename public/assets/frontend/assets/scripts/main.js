$(document).ready(function () {

    $(".featured .copy-inner").dotdotdot({
        ellipsis: ' ...CLICK HERE TO SEE MORE',
        wrap: 'word',
        watch: true
    });

    $(".js-ellipsis").dotdotdot({
        ellipsis: ' ...',
        wrap: 'word',
        watch: true
    });



    if ($(window).width() <= 600) {
        $(".image-wrapper a").one("click", false);
    }


    if ($(window).width() <= 600) {
        $(".home-intro-text").insertAfter(".featured-wrapper");

    }

});


jQuery(document).ready(function () {
    $(".fancybox").fancybox({ openEffect: 'none', closeEffect: 'none', type: "image" });
    $("#product_desc_wrapper tr:odd").addClass("odd");
    $("#slider").responsiveSlides({ maxwidth: 1000, speed: 2000, pager: true, nav: true });
    $("#product_image").responsiveSlides({ speed: 2000, pager: true, nav: true });
    $('#mobnav-btn').click(function () { $('.sf-menu').slideToggle('slow'); });
    $('.sub-parent').click(function (e) { $(this).find("ul").slideToggle('slow'); });
    responsiveImgs();
    responsiveCatGrid();
    //responsiveCatHover();
    bindMobileNav();
});

function resFactor(r_img) {
    var w = $(r_img).attr("width");
    var h = $(r_img).attr("height");
    var r = h / w;
    var new_w = $(r_img).parent().width();
    $(r_img).height(new_w * r);
}
/* If you need your images to be responsive, call resFactor.
Your Image should have  it's original width and height attributes inside <img>  tag*/
function responsiveImgs() {
    resFactor('.bottom-content-box img');
    resFactor('.logo-wrapper img');
}

$(window).resize(function () {
    responsiveImgs();
    responsiveCatGrid();
    //responsiveCatHover();
    //resMenu();
});


function bindMobileNav() {
    $(".js-mobile-dropdown-trigger").click(function () {
        var trigger = $(this);
        var ul = trigger.parent().find("ul");
        
        $(".menu-wrapper ul li ul").hide();
        if (trigger.hasClass("active")) {
            $(".js-mobile-dropdown-trigger").removeClass("active");
            trigger.removeClass("active");
            ul.hide();
        } else {
            $(".js-mobile-dropdown-trigger").removeClass("active");
            trigger.addClass("active");
            ul.show();
        }
    });

    $(window).resize(function () {
        var screen_width = $(window).width();
        if (screen_width > 767) {
            $(".menu-wrapper .sf-menu").show();
        }
    });
}


//function resMenu() {
//    var screen_width = $(window).width();
//    //for older browsers who don't understand css mediaqueries
//    if (screen_width > 767) {
//        $(".menu-wrapper ul li").hover(function () {
//            $(this).find("ul").css("display", "block");
//        }, function () {
//            $(this).find("ul").css("display", "none");
//        });
//    }
//    else {
//        $(".menu-wrapper ul li").hover(function () {
//           $(this).find("ul").css("display", "none");
//        });
//    }
//}

//function resMenu() {
//    var screen_width = $(window).width();
//    //for older browsers who don't understand css mediaqueries
//    if (screen_width > 767) {
//        $(".menu-wrapper ul li").hover(function () {
//            //console.log( $(window).width() );
//            $(this).find("ul").css("display", "block");
//        }, function () {
//            $(this).find("ul").css("display", "none");
//        });
//    }
//    else {
//        $(".menu-wrapper ul li").hover(function () {
//            $(this).find("ul").css("display", "none");
//        });
//    }
//}

function responsiveCatHover() {

    if ($(window).width() > 767) {
        $('.category_item img').on("mouseenter mouseleave");
        $('.category_item img').hover(
                function () {
                    //console.log("img in");
                    if ($(window).width() > 767) {
                        $('.category_item').css({ 'z-index': '0' });
                        $(this).parents('.category_item').css({ 'z-index': '100' });
                        $(this).parent().addClass('cat_hover');
                        $(this).parent().children('.category_hover_desc').css({ 'display': 'block' });
                    }
                },
                function () {
                    //console.log("img out");
                    if ($(window).width() > 767) {
                        $('.category_item').css({ 'z-index': '0' });
                        $(this).parent().removeClass('cat_hover');
                        $(this).parent().children('.category_hover_desc').css({ 'display': 'none' });
                    }
                }
        );
    } else {
        $('.category_item img').on("mouseenter mouseleave");
        $('.category_item').hover(
            function () {
                if ($(window).width() < 768) {
                    $(this).children().addClass('cat_hover_min');
                    $(this).find('.category_hover_desc').css({ 'display': 'block' });
                }
            },
            function () {
                if ($(window).width() < 768) {
                    $(this).children().removeClass('cat_hover_min');
                    $(this).find('.category_hover_desc').css({ 'display': 'none' });
                }
        });
    }
}

function resFactor(r_img) {
    var w = $(r_img).attr("width");
    var h = $(r_img).attr("height");
    var r = h / w;
    var new_w = $(r_img).parent().width();
    $(r_img).height(new_w * r);
}

function responsiveCatGrid() {

    $(".category_list").each(function () {
        $(this).find('.category_item').removeClass('first_column middle_column last_column');
        var i = 0;
        var iMax;
        var catPosition;
        var screenWidth = $(window).width();
        if (screenWidth < 767) {
            catPosition = ['first_column'];
            iMax = 1;
        }
        else if (screenWidth < 1025) {
            catPosition = ['first_column', 'last_column'];
            iMax = 2;
        }
        else {
            catPosition = ['first_column', 'middle_column', 'last_column'];
            iMax = 3;
        }
        $(this).find(".category_item").each(function () {
            if (i == iMax) { i = 0; }
            $(this).addClass(catPosition[i]);
            i++;
        });

    });

    
}

function responsiveImgs() {
    resFactor('.bottom-content-box img');
    resFactor('.logo-wrapper img');
}




/*

$(window).on("load resize", function (e) {
    if ($(window).width() > 500) {
        $(".copy-wrapper").each(function () {
            $(this).mouseenter(function () {
                $(this).css("visibility", "hidden");
            });
            $(this).mouseleave(function () {
                $(this).css("visibility", "visible");
            });
        });
    }
});

*/

