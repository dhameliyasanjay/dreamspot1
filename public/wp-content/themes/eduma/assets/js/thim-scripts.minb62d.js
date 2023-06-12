!function(t){"use strict";var e={el_thim_pop_up_login:null,el_loginpopopform:null,el_registerPopupForm:null,el_form_purchase_course:null,el_form_enroll_course:null,ready:function(){this.getElements(),this.el_thim_pop_up_login.length&&(this.el_loginpopopform=this.el_thim_pop_up_login.find("form[name=loginpopopform]"),this.el_registerPopupForm=this.el_thim_pop_up_login.find("form[name=registerformpopup]"),this.login_form_popup()),this.form_submission_validate(),this.thim_TopHeader(),this.ctf7_input_effect(),this.mobile_menu_toggle(),this.thim_backgroud_gradient(),this.thim_single_image_popup(),this.full_right(),this.course_sidebar_right_offset_top(),this.thim_carousel()},getElements:function(){this.el_thim_pop_up_login=t("#thim-popup-login"),this.el_form_purchase_course=t("form[name=purchase-course]"),this.el_form_enroll_course=t("form[name=enroll-course]")},load:function(){this.thim_menu(),this.thim_contentslider(),this.counter_box(),t("#contact-form-registration").length&&this.thim_course_offline_popup_form_register()},resize:function(){this.full_right(),this.thim_carousel()},validate_form:function(e){var i=!0,o=/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/gim;if(e.find("input.required").each(function(){if(t(this).val()||(t(this).addClass("invalid"),i=!1),t(this).is(":checkbox")&&!t(this).is(":checked")&&(t(this).addClass("invalid"),i=!1),"email"===t(this).attr("type")&&(o.test(t(this).val())||(t(this).addClass("invalid"),i=!1)),t(this).hasClass("captcha-result")){parseInt(t(this).data("captcha1"))+parseInt(t(this).data("captcha2"))!==parseInt(t(this).val())&&(t(this).addClass("invalid").val(""),i=!1)}}),e.hasClass("auto_login")){let t=e.find("input[name=password]"),o=e.find("input[name=repeat_password]");t.val()!==o.val()&&(t.addClass("invalid"),o.addClass("invalid"),i=!1)}return t("form input.required").on("focus",function(){t(this).removeClass("invalid")}),i},login_form_popup:function(){var i=this;t(document).on("click","#thim-popup-login .close-popup",function(e){e.preventDefault(),t("body").removeClass("thim-popup-active"),i.el_thim_pop_up_login.removeClass(),i.el_loginpopopform.find(".params-purchase-code").remove(),i.el_loginpopopform.find(".params-enroll-code").remove()}),t("body .thim-login-popup a.js-show-popup").on("click",function(e){e.preventDefault(),t("body").addClass("thim-popup-active"),i.el_thim_pop_up_login.addClass("active"),t(this).hasClass("login")?i.el_thim_pop_up_login.addClass("sign-in"):i.el_thim_pop_up_login.addClass("sign-up")}),t("body .widget_book-event a.js-show-popup").on("click",function(e){e.preventDefault(),t("body").addClass("thim-popup-active"),i.el_thim_pop_up_login.addClass("active")}),i.el_thim_pop_up_login.find(".link-bottom a").on("click",function(e){e.preventDefault(),t(this).hasClass("login")?i.el_thim_pop_up_login.removeClass("sign-up").addClass("sign-in"):i.el_thim_pop_up_login.removeClass("sign-in").addClass("sign-up")}),t('body:not(".logged-in") .enroll-course .button-enroll-course, body:not(".logged-in") form.purchase-course:not(".guest_checkout") .button:not(.button-add-to-cart)').on("click",function(e){e.preventDefault(),t("body").hasClass("thim-popup-feature")?(t(".thim-link-login.thim-login-popup .login").trigger("click"),i.add_params_purchase_course_to_el(i.el_loginpopopform),i.add_params_purchase_course_to_el(i.el_registerPopupForm)):window.location.href=t(this).parent().find("input[name=redirect_to]").val()}),t(".learn-press-content-protected-message .lp-link-login").on("click",function(e){e.preventDefault(),t("body").hasClass("thim-popup-feature")?(t(".thim-link-login.thim-login-popup .login").trigger("click"),i.add_params_purchase_course_to_el(i.el_loginpopopform),i.add_params_purchase_course_to_el(i.el_registerPopupForm)):window.location.href=t(this).href()}),t(document).on("click",this.el_thim_pop_up_login,function(e){"thim-popup-login"===t(e.target).attr("id")&&(t("body").removeClass("thim-popup-active"),i.el_thim_pop_up_login.removeClass(),i.el_loginpopopform.find(".params-purchase-code").remove(),i.el_registerPopupForm.find(".params-purchase-code").remove(),i.el_loginpopopform.find(".params-enroll-code").remove(),i.el_registerPopupForm.find(".params-enroll-code").remove())}),this.el_loginpopopform.submit(function(o){if(!e.validate_form(t(this)))return o.preventDefault(),!1;i.el_thim_pop_up_login.find(".thim-login-container").addClass("loading")}),i.el_thim_pop_up_login.find("form[name=registerformpopup]").on("submit",function(o){if(!e.validate_form(t(this)))return o.preventDefault(),!1;i.el_thim_pop_up_login.find(".thim-login-container").addClass("loading")})},add_params_purchase_course_to_el:function(e){const i=this;if(i.el_form_purchase_course.length){e.append('<p class="params-purchase-code"></p>');var o=e.find(".params-purchase-code");t.each(i.el_form_purchase_course.find("input"),function(e){const i=t(this).attr("name"),a=t(this).clone();0===o.find("input[name="+i+"]").length&&o.append(a)})}if(i.el_form_enroll_course.length){e.append('<p class="params-enroll-code"></p>');const o=e.find(".params-enroll-code");t.each(i.el_form_enroll_course.find("input"),function(e){const i=t(this).attr("name"),a=t(this).clone();0===o.find("input[name="+i+"]").length&&o.append(a)})}},form_submission_validate:function(){t(".form-submission-login form[name=loginform]").on("submit",function(i){if(!e.validate_form(t(this)))return i.preventDefault(),!1}),t(".form-submission-register form[name=registerform]").on("submit",function(i){if(!e.validate_form(t(this)))return i.preventDefault(),!1}),t(".form-submission-lost-password form[name=lostpasswordform]").on("submit",function(i){if(!e.validate_form(t(this)))return i.preventDefault(),!1})},thim_TopHeader:function(){var e=t("#masthead"),i=e.outerHeight(!0),o=t("#wrapper-container .content-pusher"),a=t("#wrapper-container .top_site_main");t("body").removeClass("fixloader"),e.hasClass("header_overlay")?(a.css({"padding-top":i+"px"}),t(window).resize(function(){let t=e.outerHeight(!0);a.css({"padding-top":t+"px"})})):e.hasClass("sticky-header")&e.hasClass("header_default")&&(o.css({"padding-top":i+"px"}),t(window).resize(function(){let t=e.outerHeight(!0);o.css({"padding-top":t+"px"})}))},ctf7_input_effect:function(){let e=t(".form_developer_course"),i=e.find(".field_item input"),o=e.find(".submit_row");i.focus(function(){t(this).parent().addClass("focusing")}).blur(function(){t(this).parent().removeClass("focusing")}),o.on("click",function(){t(this).closest("form").submit()})},mobile_menu_toggle:function(){t(document).on("click",".menu-mobile-effect",function(e){e.stopPropagation(),t("body").toggleClass("mobile-menu-open")}),t(document).on("click",".wrapper-container",function(e){t("body").removeClass("mobile-menu-open")}),t(document).on("click",".mobile-menu-inner",function(t){t.stopPropagation()})},thim_menu:function(){var e=t("#masthead.sticky-header"),i=t(".content-pusher").length>0?t(".content-pusher").offset().top:0,o=e.outerHeight(),a=0,n=t(".site-header .thim-logo img"),s=t(n).attr("src"),r=t(n).data("retina"),l=t(n).data("sticky"),d=t(n).data("mobile"),c=t(n).data("sticky_mobile");t(window).scrollTop()>2&&e.removeClass("affix-top").addClass("affix"),t(window).outerWidth()<769?null!=d&&t(n).attr("src",d):window.devicePixelRatio>1&&null!=r&&t(n).attr("src",r),t(window).scroll(function(){var m=t(this).scrollTop();m>2?(e.removeClass("affix-top").addClass("affix"),t(window).outerWidth()<769&&null!=c?t(n).attr("src",c):null!=l&&t(n).attr("src",l)):(e.removeClass("affix").addClass("affix-top"),t(window).outerWidth()<769?null!=d?t(n).attr("src",d):null!=s&&t(n).attr("src",s):window.devicePixelRatio>1&&null!=r?t(n).attr("src",r):null!=s&&t(n).attr("src",s)),m>a&&m>o+i?e.hasClass("menu-hidden")||e.addClass("menu-hidden"):e.hasClass("menu-hidden")&&e.removeClass("menu-hidden"),a=m}),t(".wrapper-container:not(.mobile-menu-open) .site-header .navbar-nav > .menu-item").each(function(){if(t(">.sub-menu",this).length<=0)return;let e=t(">.sub-menu",this),i=e.offset().left,o=e.width(),a=t(".thim-nav-wrapper").width();if(i+o<=a){let t=e.find(">.menu-item>.sub-menu");if(t.length<=0)return;t.offset().left+t.width()<=a||e.addClass("dropdown-left-side")}else e.addClass("dropdown-menu-right")});let m=t("header#masthead");m.hasClass("noline_menu_active")||function(){if(t(window).width()>768){var e=t("#masthead .navbar-nav>li.menu-item.current-menu-item,#masthead .navbar-nav>li.menu-item.current-menu-parent, #masthead .navbar-nav>li.menu-item.current-menu-ancestor");if(e.length>0){e.before('<span id="magic-line"></span>');var i=e.find(">a,>span.disable_link,>span.tc-menu-inner"),o=e.position().left,a=parseInt(i.css("padding-left"));(n=t("#magic-line")).width(i.width()).css("left",Math.round(a+o)).data("magic-width",n.width()).data("magic-left",n.position().left)}else{var n;t("#masthead .navbar-nav>li.menu-item:first-child").before('<span id="magic-line"></span>'),(n=t("#magic-line")).data("magic-width",0)}var s=parseInt(t(".site-header .navigation").outerHeight());n.css("bottom",s-(s-90)/2-64),m.hasClass("item_menu_active_top")&&n.css("bottom",s-2),t("#masthead .navbar-nav>li.menu-item").on({mouseenter:function(){var e=t(this).find(">a,>span.disable_link,>span.tc-menu-inner"),i=e.width(),o=e.parent().position().left,a=parseInt(e.css("padding-left"));n.data("magic-left")||(n.css("left",Math.round(o+a)),n.data("magic-left","auto")),n.stop().animate({left:Math.round(o+a),width:i})},mouseleave:function(){n.stop().animate({left:n.data("magic-left"),width:n.data("magic-width")})}})}}()},thim_carousel:function(){if(jQuery().owlCarousel){let i=!!t("body").hasClass("rtl");t(".thim-gallery-images").owlCarousel({rtl:i,autoplay:!1,singleItem:!0,stopOnHover:!0,autoHeight:!1,loop:!0,loadedClass:"owl-loaded owl-carousel"}),t(".thim-carousel-wrapper").each(function(){var o=t(this).data("visible")?parseInt(t(this).data("visible")):4,a=t(this).data("desktopsmall")?parseInt(t(this).data("desktopsmall")):o,n=t(this).data("itemtablet")?parseInt(t(this).data("itemtablet")):2,s=t(this).data("itemmobile")?parseInt(t(this).data("itemmobile")):1,r=!!t(this).data("pagination"),l=!!t(this).data("navigation"),d=!!t(this).data("autoplay")&&parseInt(t(this).data("autoplay")),c=t(this).data("navigation-text")&&"2"===t(this).data("navigation-text")?["<i class='fa fa-long-arrow-left '></i>","<i class='fa fa-long-arrow-right '></i>"]:["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right '></i>"];t(this).owlCarousel({items:o,nav:l,dots:r,loop:t(this).children().length>o,rewind:!0,rtl:i,loadedClass:"owl-loaded owl-carousel",navContainerClass:"owl-nav owl-buttons",dotsClass:"owl-dots owl-pagination",dotClass:"owl-page",responsive:{0:{items:s,dots:!0,nav:!1},480:{items:n},1024:{items:a},1200:{items:o}},lazyLoad:!0,autoplay:d,navText:c,afterAction:function(){var e=t(window).width(),i=t("#main-home-content").width(),o=t(".thim-instructor-courses"),a=t(".thim_full_right.thim-event-layout-6");if(a.length){var n=(jQuery(window).width()-a.width())/2;a.find(".owl-controls .owl-buttons").css("margin-left","-"+n+"px"),a.find(".owl-controls .owl-buttons").css({"margin-left":"-"+n+"px","padding-left":n+"px","margin-right":n+"px"})}if(o.length&&e>i){var s=(e-i)/2;t(".thim-instructor-courses .thim-course-slider-instructor .owl-controls .owl-buttons").css("left",s+"px")}}}),e.addWrapOwlControls(t(this))}),t(".thim-course-slider-instructor").each(function(){var o=t(this).data("visible")?parseInt(t(this).data("visible")):4,a=t(this).data("desktopsmall")?parseInt(t(this).data("desktopsmall")):o,n=t(this).data("itemtablet")?parseInt(t(this).data("itemtablet")):2,s=t(this).data("itemmobile")?parseInt(t(this).data("itemmobile")):1,r=!!t(this).data("pagination"),l=!!t(this).data("navigation"),d=!!t(this).data("autoplay")&&parseInt(t(this).data("autoplay")),c=t(this).data("navigation-text")&&"2"===t(this).data("navigation-text")?["<i class='fa fa-long-arrow-left '></i>","<i class='fa fa-long-arrow-right '></i>"]:["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right '></i>"];t(this).owlCarousel({items:o,rtl:i,responsive:{0:{items:s},480:{items:n},1024:{items:n},1400:{items:a}},nav:l,dots:r,loop:t(this).children().length>o,rewind:!0,lazyLoad:!0,autoplay:d,navText:c,loadedClass:"owl-loaded owl-carousel",navContainerClass:"owl-nav owl-buttons",dotsClass:"owl-dots owl-pagination",dotClass:"owl-page",afterAction:function(){var e=t(window).width(),i=t("#main-home-content").width();if(t(".thim-instructor-courses").length&&e>i){var o=(e-i)/2;t(".thim-instructor-courses .thim-course-slider-instructor .owl-controls .owl-buttons").css("left",o+"px")}}}),e.addWrapOwlControls(t(this))}),t(".thim-carousel-course-categories .thim-course-slider, .thim-carousel-course-categories-tabs .thim-course-slider").each(function(){var o=t(this).data("visible")?parseInt(t(this).data("visible")):7,a=t(this).data("desktop")?parseInt(t(this).data("desktop")):o,n=t(this).data("desktopsmall")?parseInt(t(this).data("desktopsmall")):6,s=t(this).data("tablet")?parseInt(t(this).data("tablet")):4,r=t(this).data("mobile")?parseInt(t(this).data("mobile")):2,l=!!t(this).data("pagination"),d=!!t(this).data("navigation"),c=!!t(this).data("autoplay")&&parseInt(t(this).data("autoplay"));t(this).owlCarousel({items:o,loop:t(this).children().length>o,rewind:!0,rtl:i,responsive:{0:{items:r},480:{items:s},1024:{items:n},1800:{items:a}},nav:d,dots:l,loadedClass:"owl-loaded owl-carousel",autoplay:c,navContainerClass:"owl-nav owl-buttons",dotsClass:"owl-dots owl-pagination",dotClass:"owl-page",navText:["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right '></i>"]}),e.addWrapOwlControls(t(this))})}},thim_contentslider:function(){t(".thim-testimonial-slider").each(function(){var e=t(this),i=parseInt(e.data("visible")),o=parseInt(e.data("time")),a=!!e.data("auto"),n=e.data("ratio")?e.data("ratio"):1.18,s=e.data("padding")?e.data("padding"):15,r=e.data("activepadding")?e.data("activepadding"):0,l=e.data("width")?e.data("width"):100,d=!!e.data("mousewheel");if(jQuery().thimContentSlider)t(this).thimContentSlider({items:e,itemsVisible:i,mouseWheel:d,autoPlay:a,pauseTime:o,itemMaxWidth:l,itemMinWidth:l,activeItemRatio:n,activeItemPadding:r,itemPadding:s})})},counter_box:function(){jQuery().waypoint&&jQuery(".counter-box").waypoint(function(){jQuery(this).find(".display-percentage").each(function(){var t=jQuery(this).data("percentage");jQuery(this).countTo({from:0,to:t,refreshInterval:40,speed:2e3})})},{triggerOnce:!0,offset:"80%"})},thim_backgroud_gradient:function(){var e=jQuery(".thim_overlay_gradient"),i=jQuery(".thim_overlay_gradient_2");e.length&&t(".thim_overlay_gradient rs-sbg-px > rs-sbg-wrap > rs-sbg").addClass("thim-overlayed"),i.length&&t(".thim_overlay_gradient_2 rs-sbg-px > rs-sbg-wrap > rs-sbg").addClass("thim-overlayed")},thim_single_image_popup:function(){jQuery().magnificPopup&&t(".thim-single-image-popup").magnificPopup({type:"image",zoom:{enabled:!0,duration:300,easing:"ease-in-out"}})},full_right:function(){t(".thim_full_right").each(function(){var t=(jQuery(window).width()-jQuery(this).width())/2;jQuery(this).children().css("margin-right","-"+t+"px")}),t(".thim_full_left").each(function(){var t=(jQuery(window).width()-jQuery(this).width())/2;jQuery(this).children().css("margin-left","-"+t+"px")}),t(".thim_coundown_full_left").each(function(){var t=(jQuery(window).width()-jQuery(this).width())/2+"px";jQuery(this).find(".thim-widget-countdown-box").parent().css({"margin-left":"-"+t,"padding-left":t})})},thim_course_offline_popup_form_register:function(){t("#contact-form-registration >.wpcf7").length&&t("#contact-form-registration >.wpcf7").append('<a href="#" class="thim-close fa fa-times"></a>');t(document).on("click","#contact-form-registration .wpcf7-form-control.wpcf7-submit",function(){t(document).on("mailsent.wpcf7",function(e){setTimeout(function(){t("body").removeClass("thim-contact-popup-active"),t("#contact-form-registration").removeClass("active")},3e3)})}),t(document).on("click",".course-payment .thim-enroll-course-button",function(e){e.preventDefault(),t("body").addClass("thim-contact-popup-active"),t("#contact-form-registration").addClass("active")}),t(document).on("click","#contact-form-registration",function(e){"contact-form-registration"==t(e.target).attr("id")&&(t("body").removeClass("thim-contact-popup-active"),t("#contact-form-registration").removeClass("active"))}),t(document).on("click","#contact-form-registration .thim-close",function(e){e.preventDefault(),t("body").removeClass("thim-contact-popup-active"),t("#contact-form-registration").removeClass("active")})},course_sidebar_right_offset_top:function(){var e=t(".course-info-top");if(e.length){var i=e.innerHeight();t(".thim-style-content-layout_style_3 .sticky-sidebar").css("margin-top","-"+(i-20)+"px")}},addWrapOwlControls:function(t){t.find(".owl-controls").length||t.find(".owl-nav, .owl-dots").wrapAll("<div class='owl-controls'></div>")}};t(document).ready(function(){e.ready(),t(window).resize(function(){e.resize()})}),t(window).on("load",function(){e.load()}),t(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/thim-carousel-post.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-twitter.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-courses.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-list-event.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-course-categories.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-our-team.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-gallery-images.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-list-instructors.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-testimonials.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-courses-collection.default",e.thim_carousel),elementorFrontend.hooks.addAction("frontend/element_ready/thim-testimonials.default",e.thim_contentslider),elementorFrontend.hooks.addAction("frontend/element_ready/thim-counters-box.default",e.counter_box),elementorFrontend.hooks.addAction("frontend/element_ready/global",function(t){var e=t.find(".owl-carousel");if(e.length){var i=e.data("owlCarousel");i&&i.reload()}})})}(jQuery);