var woof_js_after_ajax_done, thim_scroll = !0, can_escape = !0;
!function (e) {
    "use strict";
    var t, i, a;
    "undefined" != typeof LearnPress && void 0 === LearnPress.load_lesson && (LearnPress.load_lesson = function (e, t) {
        LearnPress.$Course && LearnPress.$Course.loadLesson(e, t)
    }), e.avia_utilities = e.avia_utilities || {}, e.avia_utilities.supported = {}, e.avia_utilities.supports = (t = document.createElement("div"), i = ["Khtml", "Ms", "Moz", "Webkit", "O"], function (e, a) {
        if (void 0 !== t.style.prop) return "";
        void 0 !== a && (i = a), e = e.replace(/^[a-z]/, function (e) {
            return e.toUpperCase()
        });
        for (var o = i.length; o--;) if (void 0 !== t.style[i[o] + e]) return "-" + i[o].toLowerCase() + "-";
        return !1
    }), jQuery, a = "smartresize", jQuery.fn[a] = function (e) {
        return e ? this.bind("resize", (t = e, function () {
            var e = this, a = arguments;
            s ? clearTimeout(s) : o && t.apply(e, a), s = setTimeout(function () {
                o || t.apply(e, a), s = null
            }, i || 100)
        })) : this.trigger(a);
        var t, i, o, s
    };
    e(document).ready(function () {
        var t = e("#thim-course-archive").attr("data-attr");
        jQuery.cookie("course_switch") || (e("#thim-course-archive").removeClass(), e(".thim-course-switch-layout > a").removeClass("switch-active"), "thim-course-list" === t ? (e("#thim-course-archive").addClass("thim-course-list"), e(".thim-course-switch-layout > a.switchToList").addClass("switch-active")) : (e("#thim-course-archive").addClass("thim-course-grid"), e(".thim-course-switch-layout > a.switchToGrid").addClass("switch-active")))
    });
    e(document).on("click", "#course-curriculum-popup .popup-close", function (t) {
        t.preventDefault(), e("#learn-press-block-content").remove()
    }), e(function () {
        jQuery(window).scroll(function () {
            jQuery(this).scrollTop() > 400 ? jQuery("#back-to-top").addClass("active") : jQuery("#back-to-top").removeClass("active")
        }), jQuery("#back-to-top").on("click", function () {
            return jQuery("html, body").animate({scrollTop: "0px"}, 800), !1
        }), void 0 !== jQuery.fn.waypoint && jQuery(".wpb_animate_when_almost_visible:not(.wpb_start_animation)").waypoint(function () {
            jQuery(this).addClass("wpb_start_animation")
        }, {offset: "85%"})
    });
    window.innerWidth, window.innerHeight, e(document);
    var o = {
        selector: ".article__parallax", initialized: !1, animated: !1, initialize: function () {
        }, update: function () {
        }
    };
    e(window).on("debouncedresize", function (t) {
        e(window).width(), e(window).height(), o.initialize()
    }), e(window).on("orientationchange", function (e) {
        setTimeout(function () {
            o.initialize()
        }, 300)
    });
    e("html").scrollTop() || e("body").scrollTop();
    var s, n, r = !1;

    function c() {
        r = !1, o.update()
    }

    e(window).on("scroll", function () {
        e("html").scrollTop() || e("body").scrollTop(), r || requestAnimationFrame(c), r = !0
    }), jQuery(function (e) {
        var t = jQuery("#wpadminbar").outerHeight();
        jQuery(".navbar-nav li a,.arrow-scroll > a").on("click", function (i) {
            if (parseInt(jQuery(window).scrollTop(), 10) < 2) var a = 47; else a = 0;
            var o = jQuery("#masthead").outerHeight(), s = jQuery(this).attr("href");
            s && 0 == s.indexOf("#") && s.length > 1 && (i.preventDefault(), e("html,body").animate({scrollTop: jQuery(s).offset().top - t - o + a}, 850))
        })
    }), n = !1, s = navigator.userAgent || navigator.vendor || window.opera, (/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(s) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(s.substr(0, 4))) && (n = !0), n && window.addEventListener("load", function () {
        var t = document.getElementById("main-content");
        t && t.addEventListener("touchstart", function (t) {
            e("body").removeClass("mobile-menu-open")
        })
    }, !1), jQuery(".navbar-nav>li.menu-item-has-children").hasClass("thim-ekits-menu__has-dropdown") || (jQuery(window).width() > 768 ? jQuery(".navbar-nav>li.menu-item-has-children >a,.navbar-nav>li.menu-item-has-children >span,.navbar-nav>li.tc-menu-layout-builder >a,.navbar-nav>li.tc-menu-layout-builder >span").after('<span class="icon-toggle"><i class="fa fa-angle-down"></i></span>') : (jQuery(".navbar-nav>li.menu-item-has-children:not(.current-menu-parent) >a,.navbar-nav>li.menu-item-has-children:not(.current-menu-parent) >span,.navbar-nav>li.tc-menu-layout-builder:not(.current-menu-parent) >a,.navbar-nav>li.tc-menu-layout-builder:not(.current-menu-parent) >span").after('<span class="icon-toggle"><i class="fa fa-angle-down"></i></span>'), jQuery(".navbar-nav>li.menu-item-has-children.current-menu-parent >a,.navbar-nav>li.menu-item-has-children.current-menu-parent >span,.navbar-nav>li.tc-menu-layout-builder.current-menu-parent >a,.navbar-nav>li.tc-menu-layout-builder.current-menu-parent >span").after('<span class="icon-toggle"><i class="fa fa-angle-up"></i></span>'))), e(".navbar-nav>li .icon-toggle").on("click", function (t) {
        t.stopPropagation(), e(this).parent().addClass("thim-ekits-menu__is-hover")
    }), e(".navbar-nav>li .icon-toggle,.thim-ekits-menu__icon").on("click", function (t) {
        t.stopPropagation(), e(".mobile-menu-wrapper .icon-menu-back").addClass("show-icon")
    }), e(".mobile-menu-wrapper .icon-menu-back").on("click", function (t) {
        t.stopPropagation(), e(".mobile-menu-container > ul >li").removeClass("thim-ekits-menu__is-hover"), e(this).removeClass("show-icon")
    }), e(window).on("load", function () {
        var t;
        e("article.format-gallery .flexslider").imagesLoaded(function () {
            jQuery().flexslider && e(".flexslider").flexslider({
                slideshow: !0,
                animation: "fade",
                pauseOnHover: !0,
                animationSpeed: 400,
                smoothHeight: !0,
                directionNav: !0,
                controlNav: !1
            })
        }), e(document).on("click", ".quick-view", function (t) {
            e(".quick-view a").css("display", "none"), e(this).append('<a href="javascript:;" class="loading dark"></a>');
            var i = {action: "jck_quickview", product: e(this).attr("data-prod")};
            e.post(ajaxurl, i, function (t) {
                e.magnificPopup.open({
                    mainClass: "my-mfp-zoom-in",
                    items: {src: t, type: "inline"},
                    callbacks: {
                        open: function () {
                            e("body").addClass("thim-popup-active"), e.magnificPopup.instance.close = function () {
                                e("body").removeClass("thim-popup-active"), e.magnificPopup.proto.close.call(this)
                            }
                        }
                    }
                }), e(".quick-view a").css("display", "inline-block"), e(".loading").remove(), e(".product-card .wrapper").removeClass("animate"), setTimeout(function () {
                    "undefined" != typeof wc_add_to_cart_variation_params && e(".product-info .variations_form").each(function () {
                        e(this).wc_variation_form().find(".variations select:eq(0)").change()
                    })
                }, 600)
            }), t.preventDefault()
        }), e("#thim-course-archive").length > 0 && e(document).on("click", ".thim-course-switch-layout > a", function (t) {
            var i = e(this), a = e("#thim-course-archive");
            t.preventDefault(), i.hasClass("switch-active") || (e(".thim-course-switch-layout > a").removeClass("switch-active"), i.addClass("switch-active"), i.hasClass("switchToGrid") ? a.fadeOut(300, function () {
                a.removeClass("thim-course-list").addClass(" thim-course-grid").fadeIn(300), jQuery.cookie("course_switch", "grid-layout", {
                    expires: 3,
                    path: "/"
                })
            }) : a.fadeOut(300, function () {
                a.removeClass("thim-course-grid").addClass("thim-course-list").fadeIn(300), jQuery.cookie("course_switch", "list-layout", {
                    expires: 3,
                    path: "/"
                })
            }))
        }), (t = e("#thim-product-archive")).length > 0 && (jQuery.cookie("product_list") && "grid-layout" != jQuery.cookie("product_list") ? (t.hasClass("thim-product-grid") && t.removeClass("thim-product-grid").addClass("thim-product-list"), e(".thim-product-switch-layout > a.switch-active").removeClass("switch-active"), e(".thim-product-switch-layout > a.switchToList").addClass("switch-active")) : (t.hasClass("thim-product-list") && t.removeClass("thim-product-list").addClass("thim-product-grid"), e(".thim-product-switch-layout > a.switch-active").removeClass("switch-active"), e(".thim-product-switch-layout > a.switchToGrid").addClass("switch-active")), e(document).on("click", ".thim-product-switch-layout > a", function (t) {
            var i = e(this), a = e("#thim-product-archive");
            t.preventDefault(), i.hasClass("switch-active") || (e(".thim-product-switch-layout > a").removeClass("switch-active"), i.addClass("switch-active"), i.hasClass("switchToGrid") ? a.fadeOut(300, function () {
                a.removeClass("thim-product-list").addClass(" thim-product-grid").fadeIn(300), jQuery.cookie("product_list", "grid-layout", {
                    expires: 3,
                    path: "/"
                })
            }) : a.fadeOut(300, function () {
                a.removeClass("thim-product-grid").addClass("thim-product-list").fadeIn(300), jQuery.cookie("product_list", "list-layout", {
                    expires: 3,
                    path: "/"
                })
            }))
        })), function () {
            var t = e("#blog-archive"), i = t.find(".switch-layout");
            t.length > 0 && (jQuery.cookie("blog_layout") && "grid-layout" != jQuery.cookie("blog_layout") ? (t.hasClass("blog-grid") && t.removeClass("blog-grid").addClass("blog-list"), i.find("> a.switch-active").removeClass("switch-active"), i.find("> a.switchToList").addClass("switch-active")) : (t.hasClass("blog-list") && t.removeClass("blog-list").addClass("blog-grid"), i.find("> a.switch-active").removeClass("switch-active"), i.find("> a.switchToGrid").addClass("switch-active")), e(document).on("click", "#blog-archive .switch-layout > a", function (t) {
                var a = e(this), o = e("#blog-archive");
                t.preventDefault(), a.hasClass("switch-active") || (i.find(">a").removeClass("switch-active"), a.addClass("switch-active"), a.hasClass("switchToGrid") ? o.fadeOut(300, function () {
                    o.removeClass("blog-list").addClass("blog-grid").fadeIn(300), jQuery.cookie("blog_layout", "grid-layout", {
                        expires: 3,
                        path: "/"
                    })
                }) : o.fadeOut(300, function () {
                    o.removeClass("blog-grid").addClass("blog-list").fadeIn(300), jQuery.cookie("blog_layout", "list-layout", {
                        expires: 3,
                        path: "/"
                    })
                }))
            }))
        }(), jQuery().magnificPopup && e(".thim-image-popup").magnificPopup({
            type: "image",
            closeOnContentClick: !0
        }), setTimeout(function () {
            o.initialize(), function () {
                if (e(".thim-course-menu-landing").length > 0) {
                    var t = e(".thim-course-menu-landing"), i = e("#learn-press-course-tabs .nav-tabs"),
                        a = i.find(">li.active"), o = i.find(">li>a"), s = t.find(".thim-course-landing-tab"),
                        n = s.find(">li>a"),
                        r = e("#course-landing").length > 0 ? e("#course-landing").offset().top : 0,
                        c = e(window).height() > r ? e(window).height() : r;
                    if (e("footer#colophon").addClass("has-thim-course-menu"), a.length > 0) {
                        var l = a.find(">a").attr("href"), d = s.find('>li>a[href="' + l + '"]');
                        d.length > 0 && d.parent().addClass("active")
                    }
                    n.on("click", function (t) {
                        t.preventDefault();
                        var a = e(this).attr("href"), o = e(this).parent();
                        o.hasClass("active") || (s.find("li.active").removeClass("active"), o.addClass("active")), i.length > 0 ? (i.find('>li>a[href="' + a + '"]').trigger("click"), e("body, html").animate({scrollTop: i.offset().top - 50}, 800)) : e("body, html").animate({scrollTop: e(e.attr(this, "href")).offset().top}, 500)
                    }), o.on("click", function () {
                        var t = e(this).attr("href"), i = s.find('>li>a[href="' + t + '"]').parent();
                        i.hasClass("active") || (s.find("li.active").removeClass("active"), i.addClass("active"))
                    }), e(window).scroll(function () {
                        e(window).scrollTop() > c ? e("body").addClass("course-landing-active") : e("body.course-landing-active").removeClass("course-landing-active")
                    })
                }
            }()
        }, 400)
    })
}(jQuery), function (e) {
    e(window).on("load", function () {
        var t, i;
        t = e(".single-quiz .index-question"), i = e(".single-quiz .quiz-total .quiz-text"), t.length > 0 && i.html(t.html());
        var a = e(".profile-tabs .nav-tabs>li ");
        a.length > 0 && a.addClass("thim-profile-list-" + a.length)
    }), e(document).ready(function () {
        if (e("body:not(.learnpress-v4) .course-wishlist-box [class*='course-wishlist']").on("click", function (t) {
            t.preventDefault();
            var i = e(this);
            i.hasClass("loading") || (i.addClass("loading"), i.toggleClass("course-wishlist"), i.toggleClass("course-wishlisted"), $class = i.attr("class"), i.hasClass("course-wishlisted") && e.ajax({
                type: "POST",
                url: window.location.href,
                dataType: "html",
                data: {"lp-ajax": "toggle_course_wishlist", course_id: i.data("id"), nonce: i.data("nonce")},
                success: function () {
                    i.removeClass("loading")
                },
                error: function () {
                    i.removeClass("loading")
                }
            }), i.hasClass("course-wishlist") && e.ajax({
                type: "POST",
                url: window.location.href,
                dataType: "html",
                data: {"lp-ajax": "toggle_course_wishlist", course_id: i.data("id"), nonce: i.data("nonce")},
                success: function () {
                    i.removeClass("loading")
                },
                error: function () {
                    i.removeClass("loading")
                }
            }))
        }), e(".video-container").on("click", ".beauty-intro .btns", function () {
            var t = '<iframe src="' + e(this).closest(".video-container").find(".yt-player").attr("data-video") + '" height= "' + e(".parallaxslider").height() + '"></iframe>';
            e(this).closest(".video-container").find(".yt-player").replaceWith(t), e(this).closest(".video-container").find(".hideClick:first").css("display", "none")
        }), e(".add-review").length) {
            var t = e(".add-review .filled"), i = e("#review-course-value");
            t.find("li").on("mouseover", function () {
                e(this).nextAll().find("span").removeClass("fa-star").addClass("fa-star-o"), e(this).prevAll().find("span").removeClass("fa-star-o").addClass("fa-star"), e(this).find("span").removeClass("fa-star-o").addClass("fa-star"), i.val(e(this).index() + 1)
            }), e('.login-username [name="log"]').attr("placeholder", thim_js_translate.login), e('.login-password [name="pwd"]').attr("placeholder", thim_js_translate.password), e(window).scroll(function (e) {
                thim_scroll && !1 === thim_scroll && e.preventDefault()
            })
        }
    }), e(document).on("click", ".single-lp_course .course-meta .course-review .value", function () {
        var t = e('.course-tabs a[href="#tab-course-review"]');
        t.length > 0 && (t.trigger("click"), e("body, html").animate({scrollTop: t.offset().top - 50}, 800));
        var i = e('.course-tabs a[href="#tab-reviews"]');
        i.length > 0 && (i.trigger("click"), e("body, html").animate({scrollTop: i.offset().top - 50}, 800))
    });

    function t(t) {
        var i = t.find(".courses-search-input"), a = t.find(".courses-list-search"), o = i.val(),
            s = t.find(".fa-search,.fa-times");
        if (o) {
            if (o.length < 1) return;
            s.addClass("fa-spinner fa-spin"), e.ajax({
                type: "POST",
                data: "action=courses_searching&keyword=" + o + "&from=search",
                url: ajaxurl,
                success: function (t) {
                    var i = "", o = jQuery.parseJSON(t);
                    o.error || (e.each(o, function (e) {
                        0 == e ? "#" != this.guid ? i += '<li class="ui-menu-item' + this.id + ' ob-selected"><a class="ui-corner-all" href="' + this.guid + '">' + this.title + "</a></li>" : i += '<li class="ui-menu-item' + this.id + ' ob-selected">' + this.title + "</li>" : i += '<li class="ui-menu-item' + this.id + '"><a class="ui-corner-all" href="' + this.guid + '">' + this.title + "</a></li>"
                    }), a.addClass("search-visible").html("").append(i)), e(".courses-list-search li").on("mouseenter", function () {
                        e(".courses-list-search li").removeClass("ob-selected"), e(this).addClass("ob-selected")
                    }), s.removeClass("fa-spinner fa-spin")
                },
                error: function (e) {
                }
            })
        }
        a.html("")
    }

    function i(t) {
        var i = 0;
        t.each(function (a, o) {
            e(this).outerHeight() > i && (i = e(this).outerHeight()), a + 1 == t.length && t.css("min-height", i)
        })
    }

    function a(t, i) {
        e(t).each(function () {
            var t = e(this), a = i ? t.find(i) : t.children(), o = 0;
            a.each(function () {
                var t = e(this).outerHeight();
                t > o && (o = t)
            }).css("min-height", o)
        })
    }

    function o() {
        var t = e("#main-content .content-area"), i = e("#main-content .site-footer"), a = e(window).height();
        t.length > 0 && i.length > 0 && t.css("min-height", a - i.height())
    }

    e(document).ready(function () {
        e(document).on("click", ".thim-course-search-overlay .search-toggle", function (t) {
            t.stopPropagation();
            var i = e(this).parent();
            e("body").addClass("thim-search-active"), setTimeout(function () {
                i.find(".thim-s").focus()
            }, 500)
        }), e(document).on("click", ".search-popup-bg", function () {
            var t = e(this).parent();
            window.clearTimeout(!1), t.find(".courses-list-search").empty(), t.find(".thim-s").val(""), e("body").removeClass("thim-search-active")
        }), e(document).on("keyup", ".courses-search-input", function (i) {
            clearTimeout(e.data(this, "search_timer"));
            var a = e(this).parents(".courses-searching"), o = a.find(".courses-list-search"), s = o.find(">li");
            if (13 == i.which) i.preventDefault(), e(this).stop(); else if (38 == i.which) {
                if (-1 != navigator.userAgent.indexOf("Chrome") && parseFloat(navigator.userAgent.substring(navigator.userAgent.indexOf("Chrome") + 7).split(" ")[0]) >= 15) {
                    var n = s.filter(".ob-selected");
                    s.length > 1 && (s.removeClass("ob-selected"), 0 == n.prev().length ? n.siblings().last().addClass("ob-selected") : n.prev().addClass("ob-selected"))
                }
            } else if (40 == i.which) {
                if (-1 != navigator.userAgent.indexOf("Chrome") && parseFloat(navigator.userAgent.substring(navigator.userAgent.indexOf("Chrome") + 7).split(" ")[0]) >= 15) {
                    n = s.filter(".ob-selected");
                    s.length > 1 && (s.removeClass("ob-selected"), 0 == n.next().length ? n.siblings().first().addClass("ob-selected") : n.next().addClass("ob-selected"))
                }
            } else if (27 == i.which) e("body").hasClass("thim-search-active") && e("body").removeClass("thim-search-active"), o.html(""), e(this).val(""), e(this).stop(); else {
                var r = setTimeout(function () {
                    t(a)
                }, 500);
                e(this).data("search_timer", r)
            }
        }), e(document).on("keypress", ".courses-search-input", function (t) {
            var i = e(this).parents(".courses-searching").find(".courses-list-search>li");
            if (13 == t.keyCode) {
                if ((o = e(".ob-selected")).length > 0) {
                    var a = o.find("a").first().attr("href");
                    window.location.href = a
                }
                t.preventDefault()
            }
            if (27 == t.keyCode && (e("body").hasClass("thim-search-active") && e("body").removeClass("thim-search-active"), e(".courses-list-search").html(""), e(this).val(""), e(this).stop()), 38 == t.keyCode) {
                var o = i.filter(".ob-selected");
                i.length > 1 && (i.removeClass("ob-selected"), 0 == o.prev().length ? o.siblings().last().addClass("ob-selected") : o.prev().addClass("ob-selected"))
            }
            if (40 == t.keyCode) {
                o = i.filter(".ob-selected");
                i.length > 1 && (i.removeClass("ob-selected"), 0 == o.next().length ? o.siblings().first().addClass("ob-selected") : o.next().addClass("ob-selected"))
            }
        }), e(document).on("click", ".courses-list-search, .courses-search-input", function (e) {
            e.stopPropagation()
        }), e(document).on("click", "body", function () {
            e("body").hasClass("course-scroll-remove") || (e("body").addClass("course-scroll-remove"), e(".courses-list-search").html(""))
        }), e(window).scroll(function () {
            e("body").hasClass("course-scroll-remove") && e(".courses-list-search li").length > 0 && (e(".courses-searching .courses-list-search").empty(), e(".courses-searching .thim-s").val(""))
        }), e(document).on("focus", ".courses-search-input", function () {
            e("body").hasClass("course-scroll-remove") && e("body").removeClass("course-scroll-remove")
        }), e(document).on("click", "#popup-header .search-visible", function (t) {
            e(t.target).attr("href") || e("#popup-header .search-visible").removeClass("search-visible")
        }), e(document).on("click", "#popup-header button", function (t) {
            e("#popup-header .thim-s").trigger("focus")
        }), e(document).on("focus", "#popup-header .thim-s", function () {
            var t = e("#popup-header .courses-list-search a");
            "" != e(this).val() && t.length > 0 && e("#popup-header .courses-list-search").addClass("search-visible")
        }), e(".wrapper-box-icon").each(function () {
            var t = e(this);
            if (t.attr("data-icon")) var i = e(".boxes-icon i", t).css("color"),
                a = e(".heading__primary a", t).css("color"), o = t.attr("data-icon");
            if (t.attr("data-icon-border")) var s = e(".boxes-icon", t).css("border-color"),
                n = t.attr("data-icon-border");
            if (t.attr("data-icon-bg")) var r = e(".boxes-icon", t).css("background-color"), c = t.attr("data-icon-bg");
            if (t.attr("data-btn-bg")) {
                var l = e(".smicon-read", t).css("background-color"), d = e(".smicon-read", t).css("border-color"),
                    u = e(".smicon-read", t).css("color"), h = t.attr("data-btn-bg");
                if (t.attr("data-text-readmore")) var m = t.attr("data-text-readmore"); else m = u;
                e(".smicon-read", t).on({
                    mouseenter: function () {
                        e("#style_selector_container").length > 0 && e(".smicon-read", t).css("background-color") != l && (l = e(".smicon-read", t).css("background-color")), e(".smicon-read", t).css({
                            "background-color": h,
                            "border-color": h,
                            color: m
                        })
                    }, mouseleave: function () {
                        e(".smicon-read", t).css({"background-color": l, "border-color": d, color: u})
                    }
                })
            }
            e(t).on({
                mouseenter: function () {
                    t.attr("data-icon") && (e(".boxes-icon i", t).css({color: o}), e(".heading__primary a", t).css({color: o})), t.attr("data-icon-bg") && (e("#style_selector_container").length > 0 && e(".boxes-icon", t).css("background-color") != r && (r = e(".boxes-icon", t).css("background-color")), e(".boxes-icon", t).css({"background-color": c})), t.attr("data-icon-border") && e(".boxes-icon", t).css({"border-color": n})
                }, mouseleave: function () {
                    t.attr("data-icon") && (e(".boxes-icon i", t).css({color: i}), e(".heading__primary a", t).css({color: a})), t.attr("data-icon-bg") && e(".boxes-icon", t).css({"background-color": r}), t.attr("data-icon-border") && e(".boxes-icon", t).css({"border-color": s})
                }
            })
        }), e(".bg-video-play").on("click", function () {
            var t = e(this), i = e(this).parents(".thim-widget-icon-box").find(".full-screen-video").get(0);
            i.paused ? (i.play(), t.addClass("bg-pause")) : (i.pause(), t.removeClass("bg-pause"))
        }), e(document).on("click", ".wpcf7-form-control.wpcf7-submit", function () {
            var t = e(this).parents(".wpcf7-form");
            t.addClass("thim-sending"), e(document).on("invalid.wpcf7", function (e) {
                t.removeClass("thim-sending")
            }), e(document).on("spam.wpcf7", function (i) {
                t.removeClass("thim-sending"), setTimeout(function () {
                    e(".wpcf7-response-output").length > 0 && e(".wpcf7-response-output").hide()
                }, 4e3)
            }), e(document).on("mailsent.wpcf7", function (i) {
                t.removeClass("thim-sending"), setTimeout(function () {
                    e(".wpcf7-response-output").length > 0 && e(".wpcf7-response-output").hide()
                }, 4e3)
            }), e(document).on("mailfailed.wpcf7", function (i) {
                t.removeClass("thim-sending"), setTimeout(function () {
                    e(".wpcf7-response-output").length > 0 && e(".wpcf7-response-output").hide()
                }, 4e3)
            })
        })
    }), jQuery(document).ready(function () {
        for (var t = e(".tp_event_owl_carousel"), i = 0; i < t.length; i++) {
            var a = e(t[i]).attr("data-countdown"),
                o = {navigation: !0, slideSpeed: 300, paginationSpeed: 400, singleItem: !0};
            void 0 !== a && (a = JSON.parse(a), e.extend(o, a), e.each(o, function (e, t) {
                "true" === t ? o[e] = !0 : "false" === t && (o[e] = !1)
            })), void 0 === o.slide || !0 === o.slide ? e(t[i]).owlCarousel(o) : e(t[i]).removeClass("owl-carousel")
        }
    }), jQuery(document).ready(function () {
        var t = 20;
        e("#wpadminbar").length && (t += e("#wpadminbar").outerHeight()), e("#masthead.sticky-header").length && (t += e("#masthead.sticky-header").outerHeight()), jQuery("#sidebar.sticky-sidebar").theiaStickySidebar({
            containerSelector: "",
            additionalMarginTop: t,
            additionalMarginBottom: "0",
            updateSidebarHeight: !1,
            minWidth: "768",
            sidebarBehavior: "modern"
        })
    }), jQuery(document).ready(function () {
        document.querySelector(".lp-archive-course-skeleton");

        function t() {
            var e = jQuery(".isotope-layout");
            e.each(function () {
                var t, i, a, o, s = jQuery(this);
                1 != (i = 6) && (parseInt(e.width()) < 768 && (i = 4), parseInt(e.width()) < 480 && (i = 2)), a = Math.floor((parseInt(e.width(), 10) - 10 * (i - 1)) / i), o = Math.floor(parseInt(a, 10)), s.find(".item_gallery").css({width: a}), 1 == i && (o = "auto"), s.find(".item_gallery .thim-gallery-popup").css({height: o}), s.find(".item_gallery").hasClass("size32") && i > 1 && s.find(".item_gallery.size32 .thim-gallery-popup").css({height: 2 * o + 10}), s.find(".item_gallery").hasClass("size32") && (i > 3 ? (t = 4 * a + 30, s.find(".item_gallery.size32").css({width: t})) : (t = 2 * a + 10, s.find(".item_gallery.size32").css({width: t}))), s.find(".item_gallery").hasClass("size22") && 1 != i && s.find(".item_gallery.size22 .thim-gallery-popup").css({height: 2 * o + 10}), s.find(".item_gallery").hasClass("size22") && 1 != i && (t = 2 * a + 10, s.find(".item_gallery.size22").css({width: t})), jQuery().isotope && s.isotope({
                    itemSelector: ".item_gallery",
                    masonry: {columnWidth: a, gutter: 10}
                })
            })
        }

        e("form#bbp-search-form").submit(function () {
            if ("" === e.trim(e("#bbp_search").val())) return e("#bbp_search").focus(), !1
        }), e("form.search-form").submit(function () {
            var t = e(this).find("input[name='s']");
            if ("" === e.trim(t.val())) return t.focus(), !1
        }), e("#customer_login .login").submit(function (t) {
            var i = e(this), a = i.find("#username"), o = i.find("#password");
            o.length > 0 && "" == o.val() && (o.addClass("invalid"), t.preventDefault()), a.length > 0 && "" == a.val() && (a.addClass("invalid"), t.preventDefault())
        }), e("#customer_login .register").submit(function (t) {
            var i = e(this), a = i.find("#reg_username"), o = i.find("#reg_email"), s = i.find("#reg_password"),
                n = e("#customer_login .register .captcha-result");
            n.length > 0 && (parseInt(n.data("captcha1")) + parseInt(n.data("captcha2")) != parseInt(n.val()) && (n.addClass("invalid").val(""), t.preventDefault()));
            s.length > 0 && "" == s.val() && (s.addClass("invalid"), t.preventDefault()), a.length > 0 && "" == a.val() && (a.addClass("invalid"), t.preventDefault()), o.length > 0 && ("" == o.val() || !/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/gim.test(o.val())) && (o.addClass("invalid"), t.preventDefault())
        }), e("form#commentform").submit(function (t) {
            var i = e(this), a = i.find('#comment[aria-required="true"]'), o = i.find('#author[aria-required="true"]'),
                s = i.find('#url[aria-required="true"]'), n = i.find('#email[aria-required="true"]');
            o.length > 0 && "" == o.val() && (o.addClass("invalid"), t.preventDefault()), a.length > 0 && "" == a.val() && (a.addClass("invalid"), t.preventDefault()), s.length > 0 && "" == s.val() && (s.addClass("invalid"), t.preventDefault()), n.length > 0 && ("" == n.val() || !/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/gim.test(n.val())) && (n.addClass("invalid"), t.preventDefault())
        }), e("#customer_login .register, #reg_username, #reg_email, #reg_password").on("focus", function () {
            e(this).removeClass("invalid")
        }), e("input.wpcf7-text, textarea.wpcf7-textarea").on("focus", function () {
            e(this).hasClass("wpcf7-not-valid") && e(this).removeClass("wpcf7-not-valid")
        }), e(".thim-language").on({
            mouseenter: function () {
                e(this).children(".list-lang").stop(!0, !1).fadeIn(250)
            }, mouseleave: function () {
                e(this).children(".list-lang").stop(!0, !1).fadeOut(250)
            }
        }), e("#toolbar .menu li.menu-item-has-children").on({
            mouseenter: function () {
                e(this).children(".sub-menu").stop(!0, !1).fadeIn(250)
            }, mouseleave: function () {
                e(this).children(".sub-menu").stop(!0, !1).fadeOut(250)
            }
        }), t(), e(window).resize(function () {
            t()
        }), e(document).on("click", ".filter-controls .filter", function (t) {
            t.preventDefault();
            var i = e(this).data("filter"),
                a = e(this).parents(".thim-widget-gallery-posts").find(".wrapper-gallery-filter");
            e(".filter-controls .filter").removeClass("active"), e(this).addClass("active"), a.isotope({filter: i})
        }), e(document).on("click", ".thim-gallery-popup", function (t) {
            t.preventDefault();
            var i = e(this), a = {action: "thim_gallery_popup", post_id: i.attr("data-id")};
            i.addClass("loading"), e.post(ajaxurl, a, function (t) {
                i.removeClass("loading"), e(".thim-gallery-show").append(t), e(".thim-gallery-show img").length > 0 ? e(".thim-gallery-show").magnificPopup({
                    mainClass: "my-mfp-zoom-in",
                    type: "image",
                    delegate: "a",
                    showCloseBtn: !1,
                    gallery: {enabled: !0},
                    callbacks: {
                        open: function () {
                            e("body").addClass("thim-popup-active"), e.magnificPopup.instance.close = function () {
                                e(".thim-gallery-show").empty(), e("body").removeClass("thim-popup-active"), e.magnificPopup.proto.close.call(this)
                            }
                        }
                    }
                }).magnificPopup("open") : e.magnificPopup.open({
                    mainClass: "my-mfp-zoom-in",
                    items: {src: e(".thim-gallery-show"), type: "inline"},
                    showCloseBtn: !1,
                    callbacks: {
                        open: function () {
                            e("body").addClass("thim-popup-active"), e.magnificPopup.instance.close = function () {
                                e(".thim-gallery-show").empty(), e("body").removeClass("thim-popup-active"), e.magnificPopup.proto.close.call(this)
                            }
                        }
                    }
                })
            })
        }), e(".widget-button.custom_style").each(function () {
            var t = e(this), i = t.attr("style"), a = t.data("hover");
            t.on({
                mouseenter: function () {
                    t.attr("style", a)
                }, mouseleave: function () {
                    t.attr("style", i)
                }
            })
        })
    }), e(window).on("load", function () {
        e(window).resize(function () {
            if (e(".thim-carousel-instructors .instructor-item").css("min-height", ""), e("body.thim-demo-university-4 .thim-about-eduma, body.thim-demo-university-4 .thim-video-popup .video-info").css("min-height", ""), (e(window).width() < 767 || e(window).width() > 1200) && e("body.thim-demo-university-4 #sb_instagram .sbi_photo").css("min-height", ""), a(e(".thim-owl-carousel-post:not(.layout-3) .image")), a(e(".thim-row-bg-border-top .thim-bg-border-top")), i(e(".thim-carousel-instructors .instructor-item")), i(e(".thim-testimonial-carousel-kindergarten .item")), a(e(".thim-widget-carousel-categories .item")), a(e(".elementor-widget-thim-carousel-categories .item")), o(), e(window).width() > 767 && (a(e(".thim-grid-posts .item-post")), a(e("body.thim-demo-university-4 .thim-about-eduma, body.thim-demo-university-4 .thim-video-popup .video-info"))), e(window).width() > 767 && e(window).width() < 1200 && e("body.thim-demo-university-4 .thim-icon-our-programs").length) {
                var t = parseInt(e("body.thim-demo-university-4 .thim-icon-our-programs").outerHeight() / 3);
                e("body.thim-demo-university-4 #sb_instagram .sbi_photo").css("min-height", t)
            }
        })
    }), e(window).on("load", function () {
        a(".thim-carousel-instructors", ".instructor-item"), a(".thim-owl-carousel-post", ".image"), o()
    }), e(document).ready(function () {
        e(".thim-search-light-style").append('<a class="thim-button-down thim-click-to-bottom" href="#"><i class="fa fa-chevron-down"></i></a>'), e(document).on("click", ".thim-button-down", function (t) {
            if (t.preventDefault(), e("#wpadminbar").length > 0) var i = parseInt(e("#wpadminbar").outerHeight()) + parseInt(e(".thim-search-light-style").outerHeight()); else i = parseInt(e(".thim-search-light-style").outerHeight());
            e("body, html").animate({scrollTop: i}, 600)
        });
        e(".have_scroll_bottom").append('<div class="scroll_slider_tab"><div class="container"><a href="" class="to_bottom"><svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="18px" height="28px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)"d="M16.169,2.687 C14.585,0.904 12.173,0.000 9.000,0.000 C5.827,0.000 3.415,0.904 1.831,2.687 C0.238,4.479 -0.000,6.580 -0.000,7.673 L-0.000,20.328 C-0.000,21.420 0.238,23.520 1.831,25.313 C3.415,27.096 5.827,28.000 9.000,28.000 C12.173,28.000 14.585,27.096 16.169,25.313 C17.762,23.520 18.000,21.420 18.000,20.328 L18.000,7.673 C18.000,6.580 17.762,4.479 16.169,2.687 ZM9.000,9.755 C8.342,9.755 7.808,9.242 7.808,8.611 L7.808,6.159 C7.808,5.528 8.342,5.015 9.000,5.015 C9.658,5.015 10.192,5.528 10.192,6.159 L10.192,8.611 C10.192,9.242 9.658,9.755 9.000,9.755 ZM17.059,20.328 C17.059,21.458 16.670,27.097 9.000,27.097 C1.330,27.097 0.941,21.458 0.941,20.328 L0.941,7.673 C0.941,6.566 1.315,1.138 8.529,0.911 L8.529,4.163 C7.578,4.369 6.866,5.185 6.866,6.159 L6.866,8.611 C6.866,9.585 7.578,10.401 8.529,10.607 L8.529,14.318 C8.529,14.568 8.740,14.770 9.000,14.770 C9.260,14.770 9.471,14.568 9.471,14.318 L9.471,10.607 C10.422,10.401 11.134,9.585 11.134,8.611 L11.134,6.159 C11.134,5.185 10.422,4.369 9.471,4.163 L9.471,0.911 C16.685,1.138 17.059,6.566 17.059,7.673 L17.059,20.328 Z"/></svg><i class="icon-chevron-down icon1"></i><i class="icon-chevron-down icon2"></i></a></div></div>'), e(document).on("click", ".have_scroll_bottom .scroll_slider_tab .to_bottom", function (t) {
            if (t.preventDefault(), e("#wpadminbar").length > 0) var i = parseInt(e("#wpadminbar").outerHeight()) + parseInt(e(".have_scroll_bottom").outerHeight()); else i = parseInt(e(".have_scroll_bottom").outerHeight());
            e("body, html").animate({scrollTop: i}, 600)
        }), e(document).on("click", "body.page-template-landing-page .current_page_item>a, .thim-top-landing .widget-button", function (t) {
            if (e(".thim-top-landing").length > 0) {
                if (t.preventDefault(), e("#wpadminbar").length > 0) var i = parseInt(e("#wpadminbar").outerHeight()) + parseInt(e(".thim-top-landing").outerHeight()); else i = parseInt(e(".thim-top-landing").outerHeight());
                e("body, html").animate({scrollTop: i}, 600)
            }
        })
    }), e(document).ready(function () {
        e('.woof_list input[data-tax="pa_color"]').each(function () {
            e(this).css("background-color", e(this).attr("name"))
        }), e('.woof_list input.woof_radio_term[name="pa_color"]').each(function () {
            e(this).css("background-color", e(this).data("slug"))
        })
    }), woof_js_after_ajax_done = function () {
        e('.woof_list input[data-tax="pa_color"]').each(function () {
            e(this).css("background-color", e(this).attr("name"))
        }), e('.woof_list input.woof_radio_term[name="pa_color"]').each(function () {
            e(this).css("background-color", e(this).data("slug"))
        }), e("#thim-product-archive").hasClass("thim-product-list") ? (e(".thim-product-switch-layout>a.switchToGrid.switch-active").removeClass("switch-active"), e(".thim-product-switch-layout>a.switchToList").addClass("switch-active")) : (e(".thim-product-switch-layout>a.switchToList.switch-active").removeClass("switch-active"), e(".thim-product-switch-layout>a.switchToGrid").addClass("switch-active"))
    }, e(document).ready(function () {
        var t = e(".thim-carousel-course-categories-tabs");
        t.each(function () {
            t.find(".thim-course-slider .item").click(function (i) {
                i.preventDefault(), t.find(".item_content.active").removeClass("active"), t.find(e(this).find(".title a").attr("href")).addClass("active"), t.find(".thim-course-slider .item.active").removeClass("active"), e(this).addClass("active")
            })
        });
        var i = e(".course-tabs .nav-tabs>li").length;
        i > 0 && e(".course-tabs .nav-tabs>li").addClass("thim-col-" + i), e(".thim-widget-timetable .timetable-item ").each(function () {
            var t = e(this), i = t.attr("style"), a = t.data("hover");
            t.on({
                mouseenter: function () {
                    t.attr("style", a)
                }, mouseleave: function () {
                    t.attr("style", i)
                }
            })
        }), "undefined" != typeof LP && LP.Hook.addAction("learn_press_receive_message", function () {
            var t = e(".course-item.item-current .course-item-title").text(),
                i = e(".course-item.item-current .index").text();
            e("#popup-header .popup-title").html('<span class="index">' + i + "</span>" + t)
        }), e(".thim-video-popup .button-popup").on("click", function (t) {
            var i = e(this);
            t.preventDefault(), e.magnificPopup.open({
                items: {
                    src: i.parent().parent().find(".video-content"),
                    type: "inline"
                }, showCloseBtn: !1, callbacks: {
                    open: function () {
                        e("body").addClass("thim-popup-active"), e.magnificPopup.instance.close = function () {
                            e("body").removeClass("thim-popup-active"), e.magnificPopup.proto.close.call(this)
                        }
                    }
                }
            })
        }), e(".mc4wp-form #mc4wp_email").on("focus", function () {
            e(this).parents(".mc4wp-form").addClass("focus-input")
        }).on("focusout", function () {
            e(this).parents(".mc4wp-form.focus-input").removeClass("focus-input")
        }), e(document).on("click", ".button-retake-course, .button-finish-course", function () {
            e(".thim-box-loading-container.visible").removeClass("visible")
        }), e(document).on("click", ".button-load-item", function () {
            e("#course-curriculum-popup").addClass("loading"), e(".thim-box-loading-container").addClass("visible")
        }), e(".width-navigation .menu-main-menu>li.menu-item").last().addClass("last-menu-item"), setTimeout(function () {
            e(window).trigger("resize")
        }, 1e3), e(window).resize(function () {
            var t = parseFloat(e('body.rtl .vc_row-has-fill[data-vc-full-width="true"]').css("left")),
                i = parseFloat(e('body.rtl .vc_row-no-padding[data-vc-full-width="true"]').css("left"));
            "undefined" != t && e('body.rtl .vc_row-has-fill[data-vc-full-width="true"]').css({
                right: t,
                left: ""
            }), "undefined" != i && e('body.rtl .vc_row-no-padding[data-vc-full-width="true"]').css({
                right: i,
                left: ""
            })
        }), e(document).on("click", ".button-load-item", function () {
            can_escape = !1
        }), e(document).on("keydown", function (e) {
            27 == e.keyCode && void 0 !== can_escape && !1 === can_escape && e.preventDefault()
        }), e(".login-password").append('<span id="show_pass"><i class="fa fa-eye"></i></span>'), e(document).on("click", "#show_pass", function () {
            var t = e(this), i = t.parents(".login-password").find(">input");
            t.hasClass("active") ? i.attr("type", "password") : i.attr("type", "text"), t.toggleClass("active")
        }), e(document).on("click", ".content_course_2 .course_right .menu_course ul li a, .content_course_2 .thim-course-menu-landing .thim-course-landing-tab li a", function () {
            e("html, body").animate({scrollTop: e(e(this).attr("href")).offset().top}, 1e3)
        }), e(window).resize(function () {
            e(window).width() > 600 && e("footer#colophon.has-footer-bottom").css("margin-bottom", e(".footer-bottom").height()), e(window).width() < 768 && (e("body.course-item-popup").addClass("full-screen-content-item"), e("body.ltr.course-item-popup #learn-press-course-curriculum").css("left", "-300px"), e("body.ltr.course-item-popup #learn-press-content-item").css("left", "0"), e("body.rtl.course-item-popup #learn-press-course-curriculum").css("right", "auto"), e("body.rtl.course-item-popup #learn-press-content-item").css("right", "auto"))
        })
    })
}(jQuery);
