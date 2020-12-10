jQuery(document).ready(function () {

    //featured slider
    $('#featured-slider').owlCarousel({
        autoplay: true,
        loop: true,
        slideSpeed: 3000,
        paginationSpeed: 1000,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<i class='icon-arrow-left random-arrow-prev' aria-hidden='true'></i>", "<i class='icon-arrow-right random-arrow-next' aria-hidden='true'></i>"],
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        onInitialize: function (event) {
            if ($('#owl-random-post-slider .item').length <= 1) {
                this.settings.loop = false;
            }
        },
    });


    //random slider
    $('#random-slider').owlCarousel({
        autoplay: true,
        loop: true,
        slideSpeed: 3000,
        paginationSpeed: 1000,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<i class='icon-arrow-left random-arrow-prev' aria-hidden='true'></i>", "<i class='icon-arrow-right random-arrow-next' aria-hidden='true'></i>"],
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        onInitialize: function (event) {
            if ($('#owl-random-post-slider .item').length <= 1) {
                this.settings.loop = false;
            }
        },
    });

    //menu item hover
    $(".main-menu .dropdown").hover(function () {
        $(".li-sub-category").removeClass("active");
        $(".sub-menu-inner").removeClass("active");
        $(".sub-menu-right .filter-all").addClass("active");
    }, function () {
    });


    //menu opened dropdown
    $(".main-menu .navbar-nav .dropdown-menu").hover(function () {
        var atr = $(this).attr("data-mega-ul");
        if (atr != undefined) {
            $(".main-menu .navbar-nav .dropdown").removeClass("active");
            $(".mega-li-" + atr).addClass("active");
        }
    }, function () {
        $(".main-menu .navbar-nav .dropdown").removeClass("active");
    });


    //submenu hover
    $(".li-sub-category").hover(function () {
        var atr = $(this).attr("data-category-filter");
        $(".li-sub-category").removeClass("active");
        $(this).addClass("active");
        $(".sub-menu-right .sub-menu-inner").removeClass("active");
        $(".sub-menu-right .filter-" + atr).addClass("active");
    }, function () {

    });

    //show after page loaded
    $(".news-ticker ul li").delay(500).fadeIn(500);

    //news ticker
    $('.news-ticker').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'fast',
        interval: 4000,
        height: '30',
        visible: 0,
        mousePause: 1,
        controls: {
            up: '.news-next',
            down: '.news-prev',
        }
    });


    $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
        checkboxClass: 'icheckbox_minimal-green',
        radioClass: 'iradio_minimal-green',
        increaseArea: '20%' // optional
    });

    //scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 700);
        return false;
    });

    //update token
    $("form").submit(function () {
        $("input[name='" + csfr_token_name + "']").val($.cookie(csfr_cookie_name));
    });

    //set tooltips
    $(document).ready(function () {
        $('[data-toggle-tool="tooltip"]').tooltip();
    });
});


//post detail slider
$(window).load(function () {
    $('#post-detail-slider').owlCarousel({
        navigation: true, // показывать кнопки next и prev
        slideSpeed: 3000,
        paginationSpeed: 1000,
        items: 1,
        dots: false,
        nav: true,
        autoHeight: true,
        navText: ["<i class='fa fa-angle-left post-detail-arrow-prev' aria-hidden='true'></i>", "<i class='fa fa-angle-right post-detail-arrow-next' aria-hidden='true'></i>"],
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        onInitialize: function (event) {
            if ($('#owl-random-post-slider .item').length <= 1) {
                this.settings.loop = false;
            }
        },
    });
});

//add att to iframe
$(document).ready(function () {
    $('iframe').attr("allowfullscreen", "");
});

//function first captcha
$(document).ready(function () {
    var key = generate_random_string(6);
    localStorage['localCaptcha'] = key;
    var canvas = document.getElementById("canvasC");
    imageElem = document.getElementById("imageCaptcha");

    var ctx = canvas.getContext("2d");
    ctx.font = "bold 22px Lucida Console";
    ctx.textAlign = 'center';
    ctx.fillStyle = '#333';
    ctx.fillText(localStorage['localCaptcha'], 100, 32);
    if (imageElem) {
        imageElem.src = ctx.canvas.toDataURL();
    }
});

//function first captcha contact
$(document).ready(function () {
    var key = generate_random_string(6);
    localStorage['localCaptchaContact'] = key;
    var canvas = document.getElementById("canvasCc");
    imageElem = document.getElementById("imageCaptchaContact");

    var ctx = canvas.getContext("2d");
    ctx.font = "bold 22px Lucida Console";
    ctx.textAlign = 'center';
    ctx.fillStyle = '#333';
    ctx.fillText(localStorage['localCaptchaContact'], 100, 32);
    if (imageElem) {
        imageElem.src = ctx.canvas.toDataURL();
    }
});

//function refresh captcha
function refresh_captcha() {
    var canvas = document.getElementById("canvasC");
    imageElem = document.getElementById("imageCaptcha");
    canvas.width = canvas.width;

    var key = generate_random_string(6);
    localStorage['localCaptcha'] = key;

    var ctx = canvas.getContext("2d");
    ctx.font = "bold 22px Lucida Console";
    ctx.textAlign = 'center';
    ctx.fillStyle = '#333';
    ctx.fillText(localStorage['localCaptcha'], 100, 32);
    if (imageElem) {
        imageElem.src = ctx.canvas.toDataURL();
    }
}

//function refresh captcha
function refresh_captcha_contact() {
    var canvas = document.getElementById("canvasCc");
    imageElem = document.getElementById("imageCaptchaContact");
    canvas.width = canvas.width;

    var key = generate_random_string(6);
    localStorage['localCaptchaContact'] = key;

    var ctx = canvas.getContext("2d");
    ctx.font = "bold 22px Lucida Console";
    ctx.textAlign = 'center';
    ctx.fillStyle = '#333';
    ctx.fillText(localStorage['localCaptchaContact'], 100, 32);
    if (imageElem) {
        imageElem.src = ctx.canvas.toDataURL();
    }
}

function check_captcha(key) {
    if (key.toLowerCase() == localStorage['localCaptcha'].toLowerCase()) {
        return true;
    } else {
        return false;
    }
}

function check_captcha_contact(key) {
    if (key.toLowerCase() == localStorage['localCaptchaContact'].toLowerCase()) {
        return true;
    } else {
        return false;
    }
}

//function get random string
function generate_random_string(len, charSet) {
    charSet = charSet || 'abcdefghijklmnopqrstuvwxyz0123456789';
    var random_string = '';
    for (var i = 0; i < len; i++) {
        var randomPoz = Math.floor(Math.random() * charSet.length);
        random_string += charSet.substring(randomPoz, randomPoz + 1);
    }
    return random_string;
}

$(".search-icon").click(function () {
    if ($('#search-form').hasClass('open')) {
        $('#search-form').removeClass('open');

        $('.li-search a i').removeClass('fa-times');
        $('.li-search a i').addClass('fa-search');

    } else {
        $('#search-form').addClass('open');

        $('.li-search a i').removeClass('fa-search');
        $('.li-search a i').addClass('fa-times');
    }
});

$(document).ready(function ($) {
    "use strict";

    //magnific popup
    $('.image-popup').magnificPopup({
        type: 'image',
        titleSrc: function (item) {
            return item.el.attr('title') + '<small></small>';
        },
        image: {
            verticalFit: true,
        },
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        removalDelay: 100, //delay removal by X to allow out-animation
        fixedContentPos: true,

    });
});

$(document).ready(function ($) {
    "use strict";

    //magnific popup
    $('.image-popup-no-title').magnificPopup({
        type: 'image',
        image: {
            verticalFit: true,
        },
        gallery: {
            enabled: false,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        removalDelay: 100, //delay removal by X to allow out-animation
        fixedContentPos: true,

    });
});

$(document).ready(function ($) {
    "use strict";

    //magnific popup
    $('.single-image-popup').magnificPopup({
        type: 'image',
        titleSrc: function (item) {
            return item.el.attr('title') + '<small></small>';
        },
        image: {
            verticalFit: true,
        },
        gallery: {
            enabled: false,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        removalDelay: 100, //delay removal by X to allow out-animation
        fixedContentPos: true,

    });
});

$(document).ready(function () {
    $(".filters .btn").click(function () {
        $(".filters .btn").removeClass('active');
        $(this).addClass('active');
    });

    //masonry
    $(function () {
        var self = $("#masonry");

        self.imagesLoaded(function () {
            self.masonry({
                gutterWidth: 0,
                isAnimated: true,
                itemSelector: ".gallery-item"
            });
        });

        $(".filters .btn").click(function (e) {
            e.preventDefault();

            var filter = $(this).attr("data-filter");

            self.masonryFilter({
                filter: function () {
                    if (!filter) return true;
                    return $(this).attr("data-filter") == filter;
                }
            });
        });
    });
});

//login
$(document).ready(function () {
    var request;
    $("#form-login").submit(function (event) {
        event.preventDefault();

        if (request) {
            request.abort();
        }

        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serializeArray();
        serializedData.push({name: csfr_token_name, value: $.cookie(csfr_cookie_name)});

        request = $.ajax({
            url: base_url + "auth/login_ajax_post",
            type: "post",
            data: serializedData,
        });

        request.done(function (response) {
            $inputs.prop("disabled", false);

            if (response == 'success') {
                location.reload();
            } else {
                document.getElementById("result-login").innerHTML = response;
            }
        });
    });
});

//make comment
$(document).ready(function () {
    var request;
    $("#make-comment").submit(function (event) {
        event.preventDefault();

        var comment_text = $('#parent-comment-text').val();
        comment_text = $.trim(comment_text);

        if (comment_text.length < 2) {
            $('#parent-comment-text').addClass("comment-error");
            return false;
        }

        if (request) {
            request.abort();
        }

        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serializeArray();
        serializedData.push({name: csfr_token_name, value: $.cookie(csfr_cookie_name)});
        $inputs.prop("disabled", true);

        request = $.ajax({
            url: base_url + "home/add_comment_post",
            type: "post",
            data: serializedData,
        });

        request.done(function (response) {
            $inputs.prop("disabled", false);
            $('#make-comment textarea').val('');
            document.getElementById("comments").innerHTML = response;
        });
    });
});

//show subcomment box
function show_sub_comment_box(comment_id) {
    if (comment_id) {
        $('.leave-reply-sub-body').hide();
        if ($('#sub_comment_' + comment_id).is(':visible')) {
            $('.leave-reply-sub-body').hide();
        } else {
            $('#sub_comment_' + comment_id).show();
        }
    }
}

//make subcomment
function make_sub_comment(parent_id) {
    var comment = $('#comment_text_' + parent_id).val();
    var post_id = $('#comment_post_id_' + parent_id).val();
    var user_id = $('#comment_user_id_' + parent_id).val();

    //post
    if (comment && post_id && user_id && parent_id) {

        var data = {
            "comment": comment,
            "post_id": post_id,
            "user_id": user_id,
            "parent_id": parent_id
        };

        data[csfr_token_name] = $.cookie(csfr_cookie_name);

        $.ajax({
            method: 'POST',
            url: base_url + "home/add_comment_post",
            data: data
        })
            .done(function (response) {
                $('#comment_text_' + parent_id).val('');
                document.getElementById("comments").innerHTML = response;
                $('.leave-reply').show();
            });
    } else {
        $('#comment_text_' + parent_id).addClass("comment-error");
    }
    return false;
}


//make sub subcomment
$(document).ready(function () {
    var request;
    $(".form-subcomment-sub").submit(function (event) {

        event.preventDefault();

        if (request) {
            request.abort();
        }

        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serializeArray();
        serializedData.push({name: csfr_token_name, value: $.cookie(csfr_cookie_name)});

        var form_id = $(this).attr("data-form-id");

        console.log(serializedData);


        request = $.ajax({
            url: base_url + "home/add_comment_post",
            type: "post",
            data: serializedData,
        });

        request.done(function (response) {
            $inputs.prop("disabled", false);

            $('#comment_text_' + form_id).val('');
            document.getElementById("comments").innerHTML = response;
            $('.leave-reply').show();

        });
    });
});


//delete comment
function delete_comment(title, content, id) {
    $.confirm({
        title: title,
        content: content,
        theme: 'modern',
        buttons: {
            Delete: function () {
                var data = {
                    "id": id
                };

                data[csfr_token_name] = $.cookie(csfr_cookie_name);

                $.ajax
                ({
                    type: 'POST',
                    url: base_url + "home/delete_comment_post",
                    data: data,
                    success: function (response) {
                        document.getElementById("comments").innerHTML = response;
                    },
                    error: function (response) {

                    }
                });
            },
            Cancel: function () {

            },
        }
    });
}

//like comment
function like_comment(comment_id) {

    var data = {
        "id": comment_id,
    };

    data[csfr_token_name] = $.cookie(csfr_cookie_name);

    $.ajax({
        method: 'POST',
        url: base_url + "home/like_comment_post",
        data: data
    })
        .done(function (response) {
            document.getElementById("comments").innerHTML = response;
        });
}

//view poll results
function view_poll_results(id) {
    $("#poll_" + id + " .question").hide();
    $("#poll_" + id + " .result").show();
}

//view poll options
function view_poll_options(id) {
    $("#poll_" + id + " .result").hide();
    $("#poll_" + id + " .question").show();
}

$(document).ajaxStop(function () {
    //view poll results
    function view_poll_results(id) {
        $("#poll_" + id + " .question").hide();
        $("#poll_" + id + " .result").show();
    }

    //view poll options
    function view_poll_options(id) {
        $("#poll_" + id + " .result").hide();
        $("#poll_" + id + " .question").show();
    }
});

//vote
$(document).ready(function () {
    var request;
    $(".poll-form").submit(function (event) {

        event.preventDefault();

        if (request) {
            request.abort();
        }

        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serializeArray();
        serializedData.push({name: csfr_token_name, value: $.cookie(csfr_cookie_name)});

        var form_id = $(this).attr("data-form-id");

        request = $.ajax({
            url: base_url + "home/add_vote",
            type: "post",
            data: serializedData,
        });

        request.done(function (response) {
            $inputs.prop("disabled", false);

            if (response == "voted") {
                $("#poll-error-message-" + form_id).show();
            } else {

                document.getElementById("poll-results-" + form_id).innerHTML = response;
                $("#poll_" + form_id + " .result").show();
                $("#poll_" + form_id + " .question").hide();
            }

        });
    });
});

function open_mobile_nav() {
    document.getElementById("mobile-menu").style.width = "100%";
}

function close_mobile_nav() {
    document.getElementById("mobile-menu").style.width = "0";
}

$(".close-menu-click").click(function () {
    document.getElementById("mobile-menu").style.width = "0";
});

//add or delete reading list
function add_delete_from_reading_list(post_id) {

    $(".tooltip").hide();

    var data = {
        "post_id": post_id,
    };

    data[csfr_token_name] = $.cookie(csfr_cookie_name);

    $.ajax({
        method: 'POST',
        url: base_url + "home/add_delete_reading_list_post",
        data: data
    })
        .done(function (response) {
            location.reload();
        });
}

//show all comments
function show_all_comments() {
    $('head').append('<style type="text/css">.btn-show-all-comments{display: none} .ul-first-comments{display: none} .ul-all-comments{display: block} </style>');
    $('body').append('<script>$(".ul-first-comments").remove(); $(document).ajaxStop(function(){$(".ul-first-comments").remove();});</script>');
}

