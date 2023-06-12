@extends('layout.app')
@section('content')
    <style>
        .demovideo {
            position: relative;
            width: 60%;
            box-shadow: 0 20px 50px #000000ff;
            border-radius: 20px;
            overflow: hidden;
            z-index: 1;
        }
    </style>
    <div id="main-content">
        <section class="content-area">
            <style>.content-area {
                    --thim-padding-content-pdtop-desktop: 0px;
                    --thim-overlay-top-header-color: rgba(0, 0, 0, 0);
                    --thim-breacrumb-color: #000000;
                    --thim-offset-image-bottom: -270px
                }</style>
            <div class="top_heading style_heading_3_out">
                <div class="top_site_main style_heading_3" style="color: #000000;"><span class="overlay-top-header"
                                                                                         style="background-image:url(../wp-content/uploads/sites/91/2022/06/top-heading-elegant-new.jpg);"></span>
                    <div class="page-title-wrapper">
                        <div class="banner-wrapper container">
                            <h1 class="page-title">Gallery</h1>
                            <div class="breadcrumbs-wrapper">
                                <div class="container">
                                    <ul class="breadcrumbs" id="breadcrumbs">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li>Gallery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container site-content">
                <div class="row">
                    <main id="main" class="site-main col-sm-12 full-width">
                        <article id="post-4526" class="post-4526 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="4526"
                                     class="elementor elementor-4526">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-382860a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="382860a" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div
                                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fd4fb94"
                                                data-id="fd4fb94" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-03c8db8 elementor-widget thim-widget-gallery-posts"
                                                        data-id="03c8db8" data-element_type="widget"
                                                        data-widget_type="thim-gallery-posts.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="wrapper-filter-controls">
                                                                <ul class="filter-controls">
                                                                    <li>
                                                                        <a class="filter active" data-filter="*"
                                                                           href="javascript:;">All</a>
                                                                    </li>
                                                                    <li><a class="filter" href="javascript:;"
                                                                           data-filter=".filter-11">Certificates</a>
                                                                    </li>
                                                                    <li><a class="filter" href="javascript:;"
                                                                           data-filter=".filter-8">Event</a>
                                                                    </li>
                                                                    <li><a class="filter" href="javascript:;"
                                                                           data-filter=".filter-9">Video</a></li>
                                                                    {{--                                                                                                                                <li><a class="filter" href="javascript:;"--}}
                                                                    {{--                                                                                                                                       data-filter=".video">Video</a></li>--}}
                                                                </ul>
                                                            </div>
                                                            <div class="wrapper-gallery-filter row" itemscope
                                                                 itemtype="http://schema.org/ItemList">
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a class="thim-gallery-popup"
                                                                       href="../wp-content/uploads/sites/91/2022/11/p1.jpeg"
                                                                       data-id="4515"><img decoding="async"
                                                                                           src="../wp-content/uploads/sites/91/2022/11/p1.jpeg"
                                                                                           alt="Working"
                                                                                           title="courses-7" width="440"
                                                                                           height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p2.jpeg"
                                                                        data-id="4518"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p2.jpeg"
                                                                                            alt="Education WordPress Theme"
                                                                                            title="courses-19"
                                                                                            width="440"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a class="thim-gallery-popup"
                                                                       href="../wp-content/uploads/sites/91/2022/11/p3.jpeg"
                                                                       data-id="4516"><img decoding="async"
                                                                                           loading="lazy"
                                                                                           src="../wp-content/uploads/sites/91/2022/11/p3.jpeg"
                                                                                           alt="Our Books"
                                                                                           title="courses-20"
                                                                                           width="440" height="440"></a>
                                                                </div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p4.jpeg"
                                                                        data-id="4517"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p4.jpeg"
                                                                                            alt="Our Classes"
                                                                                            title="courses-16"
                                                                                            width="440"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p11.jpg"
                                                                        data-id="4512"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p11.jpg"
                                                                                            alt="Life is Good"
                                                                                            title="blog-12" width="440"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a class="thim-gallery-popup"
                                                                       href="../wp-content/uploads/sites/91/2022/11/p12.jpg"
                                                                       data-id="4514"><img decoding="async"
                                                                                           loading="lazy"
                                                                                           src="../wp-content/uploads/sites/91/2022/11/p12.jpg"
                                                                                           alt="Reading"
                                                                                           title="courses-9" width="440"
                                                                                           style="height: 295px;"
                                                                                           height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p13.jpg"
                                                                        data-id="4513"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p13.jpg"
                                                                                            alt="Presentation"
                                                                                            title="blog-18" width="440"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p14.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p14.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p15.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p15.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p16.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p16.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-11">
                                                                    <a
                                                                        class="thim-gallery-popup"
                                                                        href="../wp-content/uploads/sites/91/2022/11/p17.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="../wp-content/uploads/sites/91/2022/11/p17.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>

                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e1.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e1.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e2.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e2.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e3.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e3.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e4.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e4.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e5.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e5.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e6.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e6.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e7.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e7.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e8.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e8.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e9.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e9.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e10.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e10.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e11.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e11.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e12.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e12.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e13.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e13.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e14.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e14.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e15.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e15.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-8"><a
                                                                        class="thim-gallery-popup"
                                                                        href="wp-content/uploads/sites/91/2022/06/e16.jpg"
                                                                        data-id="4510"><img decoding="async"
                                                                                            loading="lazy"
                                                                                            src="wp-content/uploads/sites/91/2022/06/e16.jpg"
                                                                                            alt="Learning"
                                                                                            title="courses-6"
                                                                                            width="440"
                                                                                            style="height: 295px;"
                                                                                            height="440"></a></div>

                                                                <div class="item_gallery col-sm-3 item_post filter-9"><a
                                                                        class=""
                                                                        href="wp-content/uploads/sites/91/2022/06/e17.mp4"
                                                                        data-id="4510">
                                                                        <div class="">
                                                                            <video controls width="440" height="440">
                                                                                <source
                                                                                    src="wp-content/uploads/sites/91/2022/06/e17.mp4"
                                                                                    type="video/mp4">
                                                                            </video>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="item_gallery col-sm-3 item_post filter-9"><a
                                                                        class=""
                                                                        href="wp-content/uploads/sites/91/2022/06/e18.mp4"
                                                                        data-id="4510">
                                                                        <div class="">
                                                                            <video controls width="440" height="440">
                                                                                <source
                                                                                    src="wp-content/uploads/sites/91/2022/06/e18.mp4"
                                                                                    type="video/mp4">
                                                                            </video>
                                                                        </div>
                                                                    </a></div>
                                                            </div>
                                                            <div class="thim-gallery-show"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                        <div data-elementor-type="wp-post" data-elementor-id="18038" class="elementor elementor-18038">
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
                                                        <div class="elementor-widget-wrap elementor-element-populated">
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
                                                        <div class="elementor-widget-wrap elementor-element-populated">
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
                                                                                name="EMAIL" placeholder="Your email"
                                                                                required/>
                                                                            <input type="submit" value="Subscribe"/>
                                                                        </div>
                                                                        <label style="display: none !important;">Leave
                                                                            this field empty if you&#8217;re human:
                                                                            <input type="text" name="_mc4wp_honeypot"
                                                                                   value="" tabindex="-1"
                                                                                   autocomplete="off"/></label><input
                                                                            type="hidden" name="_mc4wp_timestamp"
                                                                            value="1673349906"/><input type="hidden"
                                                                                                       name="_mc4wp_form_id"
                                                                                                       value="3101"/><input
                                                                            type="hidden" name="_mc4wp_form_element_id"
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
        <!--FOOTER-->
    @include('layout.footer')
    <!--FOOTER END-->
    </div>

    <script type='text/javascript' src='../wp-content/themes/eduma/assets/js/isotope.pkgd.minb62d.js?ver=5.1.6'
            id='isotope-js'></script>
    <script type='text/javascript' defer src='../wp-content/plugins/mailchimp-for-wp/assets/js/formse506.js?ver=4.8.12'
            id='mc4wp-forms-api-js'></script>
@endsection
