@extends('layout.app')
@section('content')
    <style id='elementor-frontend-inline-css' type='text/css'>.elementor-kit-15312 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-color-df29220: #FFB606;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

        {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(min-width:1440px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1320px;
            }

            .e-con {
                --container-max-width: 1320px;
            }
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-87 .elementor-element.elementor-element-9b18d32 {
            overflow: hidden;
            margin-top: 0px;
            margin-bottom: 30px;
        }

        .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .sc-heading .heading__primary,
        .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .sc-heading .heading__primary a {
            color: #000000;
        }

        .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .boxes-icon {
            font-size: 40px;
            width: 105px;
            height: 70px;
            line-height: 70px;
            border-style: none;
            color: #FFFFFF;
            border-color: #F5986A;
            background-color: #F5986A;
        }

        .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .iconbox-left .content-inner,
        .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .iconbox-right .content-inner {
            width: calc(100% - 105px - 15px);
        }

        .elementor-87 .elementor-element.elementor-element-a944cd0 .dot_line_buttom_top .dot-line,
        .elementor-87 .elementor-element.elementor-element-a944cd0 .dot_line_buttom_top .dot-line span {
            color: #FFFFFF;
            background-color: #FFFFFF;
        }

        .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .content-inner .smicon-read {
            border-style: none;
        }

        .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .sc-heading .heading__primary,
        .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .sc-heading .heading__primary a {
            color: #000000;
        }

        .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .boxes-icon {
            font-size: 40px;
            width: 105px;
            height: 70px;
            line-height: 70px;
            border-style: none;
            color: #FFFFFF;
            border-color: #FFC000;
            background-color: #FFC000;
        }

        .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .iconbox-left .content-inner,
        .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .iconbox-right .content-inner {
            width: calc(100% - 105px - 15px);
        }

        .elementor-87 .elementor-element.elementor-element-a4bf395 .dot_line_buttom_top .dot-line,
        .elementor-87 .elementor-element.elementor-element-a4bf395 .dot_line_buttom_top .dot-line span {
            color: #FFFFFF;
            background-color: #FFFFFF;
        }

        .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .content-inner .smicon-read {
            border-style: none;
        }

        .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .sc-heading .heading__primary,
        .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .sc-heading .heading__primary a {
            color: #000000;
        }

        .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .boxes-icon {
            font-size: 40px;
            width: 105px;
            height: 70px;
            line-height: 70px;
            border-style: none;
            color: #FFFFFF;
            border-color: #45444B;
            background-color: #45444B;
        }

        .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .iconbox-left .content-inner,
        .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .iconbox-right .content-inner {
            width: calc(100% - 105px - 15px);
        }

        .elementor-87 .elementor-element.elementor-element-be9fd42 .dot_line_buttom_top .dot-line,
        .elementor-87 .elementor-element.elementor-element-be9fd42 .dot_line_buttom_top .dot-line span {
            color: #FFFFFF;
            background-color: #FFFFFF;
        }

        .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .content-inner .smicon-read {
            border-style: none;
        }

        .elementor-87 .elementor-element.elementor-element-845721f:not(.elementor-motion-effects-element-type-background),
        .elementor-87 .elementor-element.elementor-element-845721f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-87 .elementor-element.elementor-element-845721f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 80px;
        }

        .elementor-87 .elementor-element.elementor-element-845721f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-87 .elementor-element.elementor-element-d26e196:not(.elementor-motion-effects-element-type-background),
        .elementor-87 .elementor-element.elementor-element-d26e196>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-87 .elementor-element.elementor-element-d26e196 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 40px 0px;
        }

        .elementor-87 .elementor-element.elementor-element-d26e196>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-87 .elementor-element.elementor-element-3bd6ad5 .thim-ekit-wpcf7 .wpcf7-form-control-wrap input,
        .elementor-87 .elementor-element.elementor-element-3bd6ad5 .thim-ekit-wpcf7 .wpcf7-form-control-wrap textarea {
            padding: 12px 30px 12px 30px;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-radius: 40px 40px 40px 40px;
        }

        .elementor-87 .elementor-element.elementor-element-3bd6ad5 .thim-ekit-wpcf7 .wpcf7-submit {
            padding: 12px 50px 12px 50px;
            font-weight: 500;
            border-style: none;
            border-radius: 15px 15px 15px 15px;
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-87 .elementor-element.elementor-element-b2f9814 {
                width: 100%;
            }

            .elementor-87 .elementor-element.elementor-element-a238177 {
                width: 100%;
            }

            .elementor-87 .elementor-element.elementor-element-cc656b9 {
                width: 100%;
            }
        }

        @media(min-width:1440px) {
            .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .boxes-icon {
                width: 120px;
            }

            .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 120px - 15px);
            }

            .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .boxes-icon {
                width: 120px;
            }

            .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 120px - 15px);
            }

            .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .boxes-icon {
                width: 120px;
            }

            .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 120px - 15px);
            }
        }

        @media(max-width:1024px) {
            .elementor-87 .elementor-element.elementor-element-9b18d32 {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            .elementor-87 .elementor-element.elementor-element-b2f9814>.elementor-element-populated {
                margin: 0px 0px -30px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-87 .elementor-element.elementor-element-a238177>.elementor-element-populated {
                margin: 0px 0px -30px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-87 .elementor-element.elementor-element-845721f {
                margin-top: 0px;
                margin-bottom: 30px;
            }

            .elementor-87 .elementor-element.elementor-element-d26e196 {
                padding: 0px 10px 0px 10px;
            }
        }

        @media(max-width:767px) {
            .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .boxes-icon {
                font-size: 30px;
                width: 70px;
            }

            .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-87 .elementor-element.elementor-element-a944cd0 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 70px - 15px);
            }

            .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .boxes-icon {
                font-size: 30px;
                width: 70px;
            }

            .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-87 .elementor-element.elementor-element-a4bf395 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 70px - 15px);
            }

            .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .boxes-icon {
                font-size: 30px;
                width: 80px;
            }

            .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-87 .elementor-element.elementor-element-be9fd42 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 80px - 15px);
            }

            .elementor-87 .elementor-element.elementor-element-d26e196 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-87 .elementor-element.elementor-element-3bd6ad5>.elementor-widget-container {
                margin: 40px 0px 0px 0px;
            }
        }

        /* Start custom CSS for section, class: .elementor-element-9b18d32 */
        .elementor-widget-thim-icon-box .thim-widget-icon-box .image_box .heading__primary {
            font-size: 20px !important;
            line-height: 30px;
            margin: 0;
        }

        .elementor-widget-thim-icon-box .thim-widget-icon-box .image_box .desc-icon-box .desc-content {
            line-height: 25px !important
        }

        .elementor-widget-thim-icon-box .thim-widget-icon-box .layout_text_number .content-inner {
            padding-right: 15px;
        }

        /* End custom CSS */
        /* Start custom CSS for thim-ekits-contact-form-7, class: .elementor-element-3bd6ad5 */
        .thim-ekit-wpcf7 .wpcf7-form .ct-form-elegant .wpcf7-form-control-wrap .wpcf7-text,
        .thim-ekit-wpcf7 .wpcf7-form .ct-form-elegant .wpcf7-form-control-wrap .wpcf7-textarea {
            font-size: 14px;
        }

        /* End custom CSS */
    </style>
    <div id="main-content">
        <section class="content-area">
            <style>.content-area {
                    --thim-padding-content-pdtop-desktop: 0px;
                    --thim-overlay-top-header-opacity: 1;
                    --thim-overlay-top-header-color: rgba(0, 0, 0, 0);
                    --thim-breacrumb-color: #000000;
                    --thim-offset-image-bottom: -270px
                }
            </style>
            <div class="top_heading style_heading_3_out">
                <div class="top_site_main style_heading_3" style="color: #000000;">
                    <span class="overlay-top-header" style="background-image:url(../wp-content/uploads/sites/91/2022/06/top-heading-elegant-new.jpg);"></span>
                    <div class="page-title-wrapper">
                        <div class="banner-wrapper container">
                            <h1 class="page-title">Contact</h1>
                            <div class="breadcrumbs-wrapper">
                                <div class="container">
                                    <ul class="breadcrumbs" id="breadcrumbs">
                                        <li><a href="https://eduma.thimpress.com/demo-elegant">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid no-padding-top site-content">
                <div class="row">
                    <main id="main" class="site-main content-wide">
                        <article id="post-87" class="post-87 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="87" class="elementor elementor-87">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-9b18d32 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="9b18d32" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-wide">
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b2f9814"
                                                data-id="b2f9814" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-a944cd0 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                                        data-id="a944cd0" data-element_type="widget"
                                                        data-widget_type="thim-icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-widget-icon-box">
                                                                <div class="wrapper-box-icon layout_text_number text-left image_box">
                                                                    <div class="smicon-box iconbox-left">
                                                                        <div class="boxes-icon circle">
                                                                            <span class="inner-icon">
                                                                                <span class="text-number-icon">
                                                                                    <i aria-hidden="true" class="tk tk-phone-volume"></i>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content-inner">
                                                                            <div class="sc-heading">
                                                                                <h2 class="heading__primary" style="font-size:28px;">Phone Number</h2>
                                                                            </div>
                                                                            <div class="desc-icon-box">
                                                                                <div class="desc-content">+91 7043267494
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a238177"
                                                data-id="a238177" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-a4bf395 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                                        data-id="a4bf395" data-element_type="widget" data-widget_type="thim-icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-widget-icon-box">
                                                                <div class="wrapper-box-icon layout_text_number text-left image_box">
                                                                    <div class="smicon-box iconbox-left">
                                                                        <div class="boxes-icon circle">
                                                                            <span class="inner-icon">
                                                                                <span
                                                                                    class="text-number-icon">
                                                                                    <i aria-hidden="true" class="tk tk-envelope-open-text"></i>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content-inner">
                                                                            <div class="sc-heading">
                                                                                <h2 class="heading__primary" style="font-size:28px;">Email &#38;Chat</h2>
                                                                            </div>
                                                                            <div class="desc-icon-box">
                                                                                <div class="desc-content">
                                                                                    <a href="https://eduma.thimpress.com/cdn-cgi/l/email-protection"
                                                                                        class="__cf_email__"
                                                                                        data-cfemail="f59d9099999ab59091809894db969a98"> info@dreamspotacademy.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cc656b9"
                                                data-id="cc656b9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-be9fd42 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                                        data-id="be9fd42" data-element_type="widget"
                                                        data-widget_type="thim-icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-widget-icon-box">
                                                                <div class="wrapper-box-icon layout_text_number text-left image_box">
                                                                    <div class="smicon-box iconbox-left">
                                                                        <div class="boxes-icon circle">
                                                                            <span class="inner-icon">
                                                                                <span class="text-number-icon">
                                                                                    <i class="far fa-map"></i>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content-inner">
                                                                            <div class="sc-heading">
                                                                                <h2 class="heading__primary" style="font-size:28px;">Address&#38; Hours</h2>
                                                                            </div>
                                                                            <div class="desc-icon-box">
                                                                                <div class="desc-content">
                                                                                    601,RK Empire,
                                                                                    150 Feet Ring Road,
                                                                                    Near Mavdi Circle,
                                                                                    Rajkot
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-845721f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="845721f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f79d8f"
                                                data-id="0f79d8f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5898f52 thim-ekits-heading-text-center elementor-widget thim-ekits-heading elementor-widget-thim-heading"
                                                        data-id="5898f52" data-element_type="widget" data-widget_type="thim-heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="sc_heading text-center">
                                                                <h2 class="title">Send a message</h2>
                                                                <div class="sub-heading">
                                                                    <p>We are ready to solve your questions and queries. Kindly contact us with the details below.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-d26e196 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="d26e196" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8994342"
                                                data-id="8994342" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-02e98f8 elementor-widget elementor-widget-image"
                                                        data-id="02e98f8" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="774" height="781"
                                                                 src="../wp-content/uploads/sites/91/2021/07/send-mess-contact-page.png"
                                                                 class="attachment-full size-full wp-image-16116" alt=""
                                                                 loading="lazy"
                                                                 sizes="(max-width: 774px) 100vw, 774px"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f073295"
                                                data-id="f073295" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3bd6ad5 elementor-widget elementor-widget-thim-ekits-contact-form-7"
                                                        data-id="3bd6ad5" data-element_type="widget" data-widget_type="thim-ekits-contact-form-7.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-ekit-wpcf7">
                                                                <div class="wpcf7 no-js" id="wpcf7-f4-p87-o1" lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response">
                                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                        <ul></ul>
                                                                    </div>
                                                                    <form method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                            <div>
                                                                                  <input size="40" class="wpcf7-form-control" placeholder="Name" type="text" name="name" required/>
                                                                            </div>
                                                                            <br>
                                                                            <div>
                                                                                <input size="40" placeholder="Email" type="email" name="email" required/>
                                                                            </div>
                                                                            <br>
                                                                            <div>
                                                                                <input size="40" placeholder="Subject" type="text" name="subject" required/>
                                                                            </div>
                                                                            <br>
                                                                            <div class="form-group">
                                                                                <textarea cols="40" rows="10" placeholder="Message" name="message"></textarea>
                                                                            </div>
                                                                            <br>
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.3999003763406!2d70.78459361541503!3d22.262836549878593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca5dbe7afda3%3A0x6d8e1af5be0f4126!2sR.K.%20Empire!5e0!3m2!1sen!2sin!4v1658210512001!5m2!1sen!2sin"
                                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </section>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </section>
        <div class="footer-bottom-above">
            <div class="container">
                <style
                    id="elementor-post-18038">.elementor-18038 .elementor-element.elementor-element-a1c53d2:not(.elementor-motion-effects-element-type-background), .elementor-18038 .elementor-element.elementor-element-a1c53d2 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                        background-color: #5A6F89;
                        background-image: url("../wp-content/uploads/sites/91/2022/12/bg-newsletter.png");
                        background-position: center center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    .elementor-18038 .elementor-element.elementor-element-a1c53d2 {
                        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                    }

                    .elementor-18038 .elementor-element.elementor-element-a1c53d2 > .elementor-background-overlay {
                        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                    }

                    .elementor-18038 .elementor-element.elementor-element-ab1474e > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                        margin-bottom: 0px;
                    }

                    .elementor-18038 .elementor-element.elementor-element-ab1474e > .elementor-element-populated {
                        margin: 0px 0px 0px 0px;
                        --e-column-margin-right: 0px;
                        --e-column-margin-left: 0px;
                        padding: 0px 0px 0px 0px;
                    }

                    .elementor-18038 .elementor-element.elementor-element-f4d775f > .elementor-container > .elementor-column > .elementor-widget-wrap {
                        align-content: center;
                        align-items: center;
                    }

                    .elementor-18038 .elementor-element.elementor-element-f4d775f {
                        padding: 65px 0px 65px 0px;
                    }

                    .elementor-18038 .elementor-element.elementor-element-1131929 > .elementor-element-populated {
                        margin: 0px 15px 0px 80px;
                        --e-column-margin-right: 15px;
                        --e-column-margin-left: 80px;
                        padding: 0px 0px 0px 0px;
                    }

                    .elementor-18038 .elementor-element.elementor-element-499c875 .elementor-heading-title {
                        color: #FFFFFF;
                        font-size: 28px;
                        font-weight: 700;
                        line-height: 1.4em;
                    }

                    .elementor-18038 .elementor-element.elementor-element-499c875 {
                        width: var(--container-widget-width, 200px);
                        max-width: 200px;
                        --container-widget-width: 200px;
                        --container-widget-flex-grow: 0;
                    }

                    .elementor-18038 .elementor-element.elementor-element-9b0ce78 > .elementor-element-populated {
                        margin: 0px 15px 0px 15px;
                        --e-column-margin-right: 15px;
                        --e-column-margin-left: 15px;
                        padding: 0px 0px 0px 0px;
                    }

                    @media (min-width: 768px) {
                        .elementor-18038 .elementor-element.elementor-element-1131929 {
                            width: 32.046%;
                        }

                        .elementor-18038 .elementor-element.elementor-element-9b0ce78 {
                            width: 67.954%;
                        }
                    }

                    @media (max-width: 1024px) {
                        .elementor-18038 .elementor-element.elementor-element-a1c53d2 {
                            padding: 0px 15px 0px 15px;
                        }

                        .elementor-18038 .elementor-element.elementor-element-f4d775f {
                            padding: 60px 0px 60px 0px;
                        }

                        .elementor-18038 .elementor-element.elementor-element-1131929 > .elementor-element-populated {
                            margin: 0px 0px 0px 0px;
                            --e-column-margin-right: 0px;
                            --e-column-margin-left: 0px;
                            padding: 0px 0px 0px 0px;
                        }
                    }

                    @media (max-width: 767px) {
                        .elementor-18038 .elementor-element.elementor-element-f4d775f {
                            padding: 50px 0px 50px 0px;
                        }

                        .elementor-18038 .elementor-element.elementor-element-1131929 > .elementor-element-populated {
                            margin: 0px 15px 30px 15px;
                            --e-column-margin-right: 15px;
                            --e-column-margin-left: 15px;
                        }

                        .elementor-18038 .elementor-element.elementor-element-499c875 .elementor-heading-title {
                            font-size: 26px;
                        }

                        .elementor-18038 .elementor-element.elementor-element-499c875 > .elementor-widget-container {
                            margin: 0px 0px 0px 0px;
                            padding: 0px 0px 0px 0px;
                        }
                    }</style>
                <aside id="text-5" class="widget widget_text footer_bottom_widget">
                    <div class="textwidget">
                        <div data-elementor-type="wp-post" data-elementor-id="18038"
                             class="elementor elementor-18038">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-a1c53d2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="a1c53d2" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab1474e"
                                        data-id="ab1474e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-f4d775f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="f4d775f" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div
                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1131929"
                                                        data-id="1131929" data-element_type="column">
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated">
                                                            <div
                                                                class="elementor-element elementor-element-499c875 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                                                data-id="499c875" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        Subscribe our Newsletter</h2></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9b0ce78"
                                                        data-id="9b0ce78" data-element_type="column">
                                                        <div
                                                            class="elementor-widget-wrap elementor-element-populated">
                                                            <div
                                                                class="elementor-element elementor-element-380a75d mc4wp-form-inline elementor-widget elementor-widget-text-editor"
                                                                data-id="380a75d" data-element_type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <script data-cfasync="false"
                                                                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                                                    <script>(function () {
                                                                            window.mc4wp = window.mc4wp || {
                                                                                listeners: [],
                                                                                forms: {
                                                                                    on: function (evt, cb) {
                                                                                        window.mc4wp.listeners.push(
                                                                                            {
                                                                                                event: evt,
                                                                                                callback: cb
                                                                                            }
                                                                                        );
                                                                                    }
                                                                                }
                                                                            }
                                                                        })();
                                                                    </script>
                                                                    <form id="mc4wp-form-1"
                                                                          class="mc4wp-form mc4wp-form-3101 mc4wp-form-basic"
                                                                          method="post" data-id="3101"
                                                                          data-name="Default sign-up form">
                                                                        <div class="mc4wp-form-fields"><input
                                                                                type="email" id="mc4wp_email"
                                                                                name="EMAIL"
                                                                                placeholder="Your email"
                                                                                required/>
                                                                            <input type="submit" value="Subscribe"/>
                                                                        </div>
                                                                        <label style="display: none !important;">Leave
                                                                            this field empty if you&#8217;re human:
                                                                            <input type="text"
                                                                                   name="_mc4wp_honeypot"
                                                                                   value="" tabindex="-1"
                                                                                   autocomplete="off"/></label><input
                                                                            type="hidden" name="_mc4wp_timestamp"
                                                                            value="1673349906"/><input type="hidden"
                                                                                                       name="_mc4wp_form_id"
                                                                                                       value="3101"/><input
                                                                            type="hidden"
                                                                            name="_mc4wp_form_element_id"
                                                                            value="mc4wp-form-1"/>
                                                                        <div class="mc4wp-response"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
