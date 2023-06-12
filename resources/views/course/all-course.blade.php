@extends('layout.app')
@section('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div id="main-content">
        <section class="content-area">
            <style>.content-area {
                    --thim-padding-content-pdtop-desktop: 0px;
                    --thim-overlay-top-header-color: rgba(0, 0, 0, 0);
                    --thim-breacrumb-color: #000000;
                    --thim-offset-image-bottom: -270px
                }</style>
            <div class="top_heading style_heading_3_out">
                <div class="top_site_main style_heading_3" style="color: #000000;">
                    <span class="overlay-top-header"
                          style="background-image:url(../wp-content/uploads/sites/91/2022/06/top-heading-elegant-new.jpg);"></span>
                    <div class="page-title-wrapper">
                        <div class="banner-wrapper container">
                            <h1 class="page-title">Courses</h1>
                            <div class="breadcrumbs-wrapper">
                                <div class="container">
                                    <ul class="breadcrumbs" id="breadcrumbs">
                                        <li>
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li>Courses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container sidebar-right site-content">
                <div class="row">
                    <main id="main" class="site-main col-sm-9 alignleft">
                        <div id="lp-archive-courses" class="lp-archive-courses"
                             data-all-courses-url="https://eduma.thimpress.com/demo-elegant/courses/">
                            <div class="lp-content-area">
                                <div class="thim-course-top switch-layout-container">
                                    <div class="thim-course-switch-layout switch-layout">
                                        <a href="#" class="list switchToGrid"><i class="fa fa-th-large"></i></a>
                                        <a href="#" class="grid switchToList"><i class="fa fa-list-ul"></i></a>
                                    </div>
                                    <div class="course-index">
                                        <span>Showing 1-12 of 19 results</span>
                                    </div>
                                </div>
                                <div id="thim-course-archive" class="thim-course-list" data-attr="thim-course-list">
                                    <ul class="learn-press-courses ">
                                        <div id="post-5429"
                                             class="course-grid-3 lpr_course post-5429 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb"
                                                       href="{{route('full-stack-dev')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/full2.png')}}"
                                                            alt="Full Stack Development" title="courses-1"
                                                            width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('full-stack-dev')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">
                                                    <div class="course-author" itemscope=""
                                                         itemtype="http://schema.org/Person">
                                                        <a href="{{route('full-stack-dev')}}"><img
                                                                alt=""
                                                                src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=50&amp;r=g"
                                                                srcset="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=100&amp;r=g 2x"
                                                                class="avatar avatar-50 photo" height="50" width="50"
                                                                loading="lazy" decoding="async">
                                                        </a>
                                                    </div>
                                                    <h2 class="course-title"><a
                                                            href="{{route('full-stack-dev')}}"
                                                            rel="bookmark">Full Stack Development</a></h2>
                                                    <div class="course-description"><p>We have grown an expert in the
                                                            whole lot that goes into developing front-end and back-end,
                                                            working on both sides to accelerate the development cycles.
                                                            Our full-stack developers have a wide knowledge switching
                                                            roles between frontend and backend development delivering
                                                            end-to-end solution to our customers.</p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value"><i aria-hidden="true"
                                                                                  class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                27
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="post-5430"
                                             class="course-grid-3 lpr_course post-5430 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb"
                                                       href="{{route('web-development')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/web1.png')}}"
                                                            alt="Full Stack Development" title="courses-1"
                                                            width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('web-development')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">
                                                    <div class="course-author" itemscope=""
                                                         itemtype="http://schema.org/Person">
                                                        <a href="{{route('web-development')}}"><img
                                                                alt=""
                                                                src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=50&amp;r=g"
                                                                srcset="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=100&amp;r=g 2x"
                                                                class="avatar avatar-50 photo" height="50" width="50"
                                                                loading="lazy" decoding="async">
                                                        </a>
                                                    </div>
                                                    <h2 class="course-title"><a
                                                            href="{{route('web-development')}}"
                                                            rel="bookmark">Web Development</a></h2>
                                                    <div class="course-description"><p>Great web behavior needs highly
                                                            competent front-end implementation. Our team of master
                                                            developers can transpose your cutting-edge graphic designs
                                                            to clean W3C validated mark-up that turns out to be the best
                                                            possible development solution for our clients.</p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value"><i aria-hidden="true"
                                                                                  class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                77
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="post-5428"
                                             class="course-grid-3 lpr_course post-5428 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb"
                                                       href="{{route('ui-ux')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/ui-ux.jpg')}}"
                                                            alt="UI/UX & Graphics Design" title="courses-1"
                                                            width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="https://eduma.thimpress.com/demo-elegant/courses/introduction-learnpress-lms-plugin/">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">
                                                    <div class="course-author" itemscope=""
                                                         itemtype="http://schema.org/Person">
                                                        <a href="{route('ui-ux')}}"><img
                                                                alt=""
                                                                src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=50&amp;r=g"
                                                                srcset="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=100&amp;r=g 2x"
                                                                class="avatar avatar-50 photo" height="50" width="50"
                                                                loading="lazy" decoding="async">
                                                        </a>
                                                    </div>
                                                    <h2 class="course-title"><a
                                                            href="{{route('ui-ux')}}"
                                                            rel="bookmark">UI/UX & Graphics Design</a></h2>
                                                    <div class="course-description"><p>A WordPress LMS Plugin to create
                                                            WordPress Learning Management System. Turn your WP to LMS
                                                            WordPress with Courses, Lessons, Quizzes &amp; more.</p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value"><i aria-hidden="true"
                                                                                  class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                97
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="post-5206"
                                             class="course-grid-3 lpr_course post-5206 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb" href="{{route('react-js')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/ReactJS.jpg')}}"
                                                            alt="50 Tips on Making a Great Online Course"
                                                            title="courses-13" width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('react-js')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">

                                                    <h2 class="course-title">
                                                        <a href="{{route('react-js')}}"
                                                           rel="bookmark">React JS</a>
                                                    </h2>
                                                    <div class="course-description">
                                                        <p>This tutorial is specially
                                                            designed to help you learn AngularJS as quickly and
                                                            efficiently as possible.
                                                        </p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value">
                                                                <i aria-hidden="true" class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                200
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="post-5346"
                                             class="course-grid-3 lpr_course post-5346 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb" href="{{route('node-js')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/nodejs.png')}}"
                                                            alt="50 Tips on Making a Great Online Course"
                                                            title="courses-13" width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('node-js')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">

                                                    <h2 class="course-title">
                                                        <a href="{{route('node-js')}}"
                                                           rel="bookmark">Node JS</a>
                                                    </h2>
                                                    <div class="course-description">
                                                        <p>As an asynchronous event-driven JavaScript runtime, Node.js
                                                            is designed to build scalable network applications. In the
                                                            following “hello world” example, many connections can be
                                                            handled concurrently. Upon each connection, the callback is
                                                            fired, but if there is no work to be done, Node.js will
                                                            sleep.
                                                        </p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value">
                                                                <i aria-hidden="true" class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                20
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="post-5347"
                                             class="course-grid-3 lpr_course post-5347 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb" href="{{route('react-native')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/rn11.jpg')}}"
                                                            alt="50 Tips on Making a Great Online Course"
                                                            title="courses-13" width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('react-native')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">

                                                    <h2 class="course-title">
                                                        <a href="{{route('react-native')}}"
                                                           rel="bookmark">React Native</a>
                                                    </h2>
                                                    <div class="course-description">
                                                        <p>COURSE DESCRIPTION
                                                            React Native is used by organizations worldwide to create
                                                            cross-platform phone/tablet apps with one code base. This
                                                            means that you can write code easily that will run on
                                                            iPhones, iPads, and Android phones and tablets without
                                                            having to rewrite it in two or more languages -- just one.
                                                            And that one language is easy to learn if you know React and
                                                            JavaScript because it is React and JavaScript! Furthermore,
                                                            these apps run natively and can be deployed to the Apple
                                                            AppStore or the Google Play store, not web apps that run in
                                                            some adapter or translator. So they're faster and more
                                                            reliable
                                                        </p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value">
                                                                <i aria-hidden="true" class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                30
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="post-5143"
                                             class="course-grid-3 lpr_course post-5143 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb"
                                                       href="{{route('advance-laravel')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/laravel.png')}}"
                                                            alt="Instructional Design for Learning and Development"
                                                            title="courses-16" width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('advance-laravel')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">
                                                    <h2 class="course-title">
                                                        <a href="{{route('advance-laravel')}}"
                                                           rel="bookmark">Advance Laravel
                                                        </a>
                                                    </h2>
                                                    <div class="course-description">
                                                        <p>This tutorial will introduce you
                                                            to PHP, a server-side scripting language you can use to make
                                                            dynamic websites and web applications.
                                                        </p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value"><i aria-hidden="true"
                                                                                  class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                70
                                                            </div>
                                                            <span>student</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="post-5063"
                                             class="course-grid-3 lpr_course post-5063 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-online-business course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb"
                                                       href="{{route('web-design')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/web-design.jpeg')}}"
                                                            alt="How to Teach English Online and Get Paid"
                                                            title="courses-18" width="400" height="300">
                                                    </a>
                                                    <a
                                                        class="course-readmore"
                                                        href="{{route('web-design')}}">Read
                                                        Mor
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">
                                                    <h2 class="course-title"><a
                                                            href="{{route('web-design')}}"
                                                            rel="bookmark">Web Design</a>
                                                    </h2>
                                                    <div class="course-description"><p>In this course, We'll learn how
                                                            to create websites by structuring and styling your pages
                                                            with HTML and CSS.</p></div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value"><i aria-hidden="true"
                                                                                  class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                70
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="post-5206"
                                             class="course-grid-3 lpr_course post-5206 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                            <div class="course-item">
                                                <div class="course-thumbnail">
                                                    <a class="thumb"
                                                       href="{{route('basic-php')}}"><img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/php.png')}}"
                                                            alt="50 Tips on Making a Great Online Course"
                                                            title="courses-13" width="400" height="300">
                                                    </a>
                                                    <a class="course-readmore"
                                                       href="{{route('basic-php')}}">Read
                                                        More
                                                    </a>
                                                </div>
                                                <div class="thim-course-content">
                                                    <h2 class="course-title">
                                                        <a href="{{route('basic-php')}}"
                                                           rel="bookmark">Basic PHP</a>
                                                    </h2>
                                                    <div class="course-description">
                                                        <p>This tutorial is specially
                                                            designed to help you learn AngularJS as quickly and
                                                            efficiently as possible.
                                                        </p>
                                                    </div>
                                                    <div class="course-meta">
                                                        <div class="course-lesson">
                                                            <div class="value">
                                                                <i aria-hidden="true" class="tk tk-file-invoice"></i>0
                                                            </div>
                                                        </div>
                                                        <div class="course-students">
                                                            <label>Students</label>
                                                            <div class="value"><i class="tk tk-students-friend"></i>
                                                                80
                                                            </div>
                                                            <span>students</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </main>
                    <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">
                        <aside id="course-categories-3" class="widget widget_course-categories">
                            <div class="thim-widget-course-categories template-course-categories">
                                <h3 class="widget-title">All Courses</h3>
                                <ul>
                                    <li>
                                        <a href="{{route("all-course")}}">Coaching</a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="../course-category/online-business/index.html">Online Business</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="../course-category/passive-income/index.html">Passive Income</a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="{{route("gallery")}}">Photography</a>
                                    </li>
                                    <li>
                                        <a href="{{route("all-course")}}">Teacher Training</a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="../course-category/teaching-online/index.html">Teaching Online</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="../course-category/technology/index.html">Technology</a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="{{route("gallery")}}">Video Creation</a>
                                </ul>
                            </div>
                        </aside>
                        <aside id="courses-7" class="widget widget_courses">
                            <div class="thim-widget-courses template-courses">
                                <h3 class="widget-title">Latest Courses</h3>
                                <div class="thim-course-list-sidebar">
                                    <div class="lpr_course has-post-thumbnail">
                                        <div class="course-thumbnail"><img
                                                src="../wp-content/uploads/sites/91/2022/09/LMS_course_LP_Eduma_970x560-150x150.png"
                                                alt="Create an LMS Website with LearnPress"/></div>
                                        <div class="thim-course-content">
                                            <h3 class="course-title">
                                                <a href="#"> Create an
                                                    LMS Website with LearnPress</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lpr_course has-post-thumbnail">
                                        <div class="course-thumbnail"><img
                                                src="../wp-content/uploads/sites/91/2022/04/courses-1-150x150.jpg"
                                                alt="Introduction LearnPress &#8211; LMS plugin"/></div>
                                        <div class="thim-course-content">
                                            <h3 class="course-title">
                                                <a href="#"> Introduction
                                                    LearnPress &#8211; LMS plugin</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lpr_course has-post-thumbnail">
                                        <div class="course-thumbnail"><img
                                                src="../wp-content/uploads/sites/91/2022/04/courses-2-150x150.jpg"
                                                alt="How to teach an online course"/></div>
                                        <div class="thim-course-content">
                                            <h3 class="course-title">
                                                <a href="#"> How to teach an
                                                    online course</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
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
        <!--FOOTER-->
    @include('layout.footer')
    <!--FOOTER END-->
    </div>
@endsection
