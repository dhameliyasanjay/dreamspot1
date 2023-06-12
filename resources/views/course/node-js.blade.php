@extends('layout.app')
@section('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                          style="background-image:url(../../wp-content/uploads/sites/91/2022/06/top-heading-elegant-new.jpg);"></span>
                    <div class="page-title-wrapper">
                        <div class="banner-wrapper container">
                            <h2 class="page-title">Node JS</h2>
                            <div class="breadcrumbs-wrapper">
                                <div class="container">

                                    <ul class="breadcrumbs" id="breadcrumbs">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('all-course')}}">Courses</a></li>
                                        <li>Node JS</li>
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
                        <div id="lp-single-course" class="lp-single-course learn-press-4">
                            <div id="learn-press-course" class="course-summary learn-press">
                                <div class="course-info">
                                    <h1 class="entry-title" itemprop="name">Node JS</h1>
                                    <div class="course-meta course-meta-single">
                                        <div class="course-author">
                                            <img alt='User Avatar'
                                                 src='https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=500&amp;r=g'
                                                 class='avatar avatar-500 photo' height='500' width='500' loading='lazy'
                                                 decoding='async'/>
                                            <div class="author-contain">
                                                <label itemprop="jobTitle">Teacher</label>
                                                <div class="value" itemprop="name">
                                                    <a href="#"><span>Keny White</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-categories">
                                            <label>Categories</label>
                                            <div class="value">
                                                <span class="cat-links">
                                                    <a href="#" rel="tag">Coaching</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="course-review">
                                            <label>Review</label>
                                            <div class="value">
                                                <div class="review-stars-rated">
                                                    <ul class="review-stars">
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                    </ul>
                                                    <ul class="review-stars filled" style="width: calc(0% - 2px)">
                                                        <li><span class="fa fa-star"></span></li>
                                                        <li><span class="fa fa-star"></span></li>
                                                        <li><span class="fa fa-star"></span></li>
                                                        <li><span class="fa fa-star"></span></li>
                                                        <li><span class="fa fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <span>(<span>0</span> review)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-summary">
                                        <div>
                                            <div class="course-thumbnail">
                                                <div class="media-intro">
                                                    <div class="responsive-iframe">
                                                        <img
                                                            src="{{asset('wp-content/uploads/sites/91/2022/09/nodejs.png')}}"
                                                            alt="React JS" title="React JS">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-content course-summary-content">
                                            <div class="thim-course-menu-landing">
                                                <div class="container">
                                                    <ul class="thim-course-landing-tab">
                                                        <li role="presentation" class="course-nav-tab-overview">
                                                            <a href="#tab-overview">Overview</a>
                                                        </li>
                                                        <li role="presentation" class="course-nav-tab-curriculum">
                                                            <a href="#tab-curriculum">FAQ</a>
                                                        </li>
                                                        <li role="presentation" class="course-nav-tab-instructor">
                                                            <a href="#tab-instructor">Instructor</a>
                                                        </li>
                                                        <li role="presentation" class="course-nav-tab-reviews">
                                                            <a href="#tab-reviews">Reviews</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="lp-entry-content lp-content-area">
                                                <div class="entry-content-left">
                                                    <div id="learn-press-course-tabs" class="course-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li role="presentation"
                                                                class="course-nav-tab-overview active">
                                                                <a href="#tab-overview" data-toggle="tab">
                                                                    <i class="fa fa-bookmark"></i>
                                                                    <span>Overview</span>
                                                                </a>
                                                            </li>
                                                            <li role="presentation" class="course-nav-tab-curriculum">
                                                                <a href="#tab-curriculum" data-toggle="tab">
                                                                    <i class="fa fa-cube"></i>
                                                                    <span>FAQ</span>
                                                                </a>
                                                            </li>
                                                            <li role="presentation" class="course-nav-tab-instructor">
                                                                <a href="#tab-instructor" data-toggle="tab">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>Instructor</span>
                                                                </a>
                                                            </li>
                                                            <li role="presentation" class="course-nav-tab-reviews">
                                                                <a href="#tab-reviews" data-toggle="tab">
                                                                    <i class="fa fa-comments"></i>
                                                                    <span>Reviews</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div
                                                                class="tab-pane course-tab-panel-overview course-tab-panel active"
                                                                id="tab-overview">
                                                                <div class="course-description"
                                                                     id="learn-press-course-description">
                                                                    <div class="thim-course-content">
                                                                        <h4>COURSE DESCRIPTION</h4>
                                                                        <p>
                                                                            Node.js is an open-source, cross-platform,
                                                                            JavaScript run-time environment that
                                                                            executes JavaScript code outside of a
                                                                            browser. Node.js lets developers use
                                                                            JavaScript to write command line tools and
                                                                            for server-side scripting—running scripts
                                                                            server-side to produce dynamic web page
                                                                            content before the page is sent to the
                                                                            user’s web browser. Node.js lets you write
                                                                            JavaScript on both lient and server Node.js
                                                                            holds a lot of relative libraries which we
                                                                            normally use in JavaScript for general
                                                                            purpose programming language.
                                                                        </p>
                                                                        <h4>WHY IS NODE.JS SO POPULAR?</h4>
                                                                        <P>
                                                                            JavaScript is usually associated with the
                                                                            front-end side, but since Node.js, as a
                                                                            back-end technology, uses it as well,
                                                                            development speed and the productivity of
                                                                            both teams increases significantly. This
                                                                            framework allows companies to spend less on
                                                                            hardware because it can handle the same
                                                                            amount of load with less horsepower.
                                                                        </P>

                                                                        <h4>LEARNING OUTCOMES</h4>
                                                                        <ul class="thim-list-content">
                                                                            <li>Node.js Process Model</li>
                                                                            <li>Install Node.js on Windows, Mac</li>
                                                                            <li>Node.js Console/REPL</li>
                                                                            <li>INode.js Basics</li>
                                                                            <li>Node.js Modules</li>
                                                                            <li>Local Modules in Node.js</li>
                                                                            <li>Export Modules in Node.js</li>
                                                                            <li>Node Package Manager (NPM)</li>
                                                                            <li>Debugging Node.js Application</li>
                                                                            <li>Node Inspector for Debugging Node.js Application</li>
                                                                            <li>Node.js EventEmitter</li>
                                                                            <li>Reselect and Reducer Hooks</li>
                                                                            <li>Open-source Frameworks for Node.js</li>
                                                                            <li>Express.js</li>
                                                                            <li>Express.js Web App</li>
                                                                            <li>Serving Static Files from Node.js</li>
                                                                            <li>Node.js Learning Resources</li>
                                                                        </ul>

{{--                                                                        <h4 style="padding-top: 14px">SOFTWARE TO--}}
{{--                                                                            LEARN</h4>--}}
{{--                                                                        <ul class="thim-list-content">--}}
{{--                                                                            <li>Javascript</li>--}}
{{--                                                                        </ul>--}}
                                                                        <br>
                                                                        <button type="button" class="btn btn-primary"
                                                                                data-toggle="modal"
                                                                                data-target="#exampleModal"
                                                                                style="background-color: #00a0e3;border: none;color:white;padding: 10px">
                                                                            Apply Now For Full Course
                                                                        </button>

                                                                        <div class="modal fade" id="exampleModal"
                                                                             tabindex="-1" role="dialog"
                                                                             aria-labelledby="exampleModalLabel"
                                                                             aria-hidden="true">
                                                                            <div class="modal-dialog" role="document"
                                                                                 style="padding-top: 9rem">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h3 class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            Submit Your Information</h3>
                                                                                        <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close"
                                                                                                style="margin-top: -2rem;padding: 8px;background-color: #00a0e3;opacity: 1.2">
                                                                                            <span aria-hidden="true"
                                                                                                  style="color: white">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="POST"
                                                                                              action="{{route('courses.store')}}"
                                                                                              class="lgx-contactform">
                                                                                            @csrf
                                                                                            <div>
                                                                                                <div class="form-group">
                                                                                                    <input type="text"
                                                                                                           name="name"
                                                                                                           class="form-control"
                                                                                                           placeholder="Enter Your Name"
                                                                                                           required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <input type="email"
                                                                                                           name="email"
                                                                                                           class="form-control"
                                                                                                           placeholder="Enter email"
                                                                                                           required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <input type="number"
                                                                                                           name="contact"
                                                                                                           class="form-control"
                                                                                                           placeholder="Enter Contact No"
                                                                                                           required>
                                                                                                </div>
                                                                                                <input type="hidden"
                                                                                                       name="course"
                                                                                                       value="Node JS">
                                                                                                <div class="form-group">
                                                                                                    <textarea
                                                                                                        class="form-control"
                                                                                                        name="message"
                                                                                                        rows="5"
                                                                                                        placeholder="We expect drop some line from you..."
                                                                                                        required></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                        class="btn btn-secondary"
                                                                                                        data-dismiss="modal">
                                                                                                    Cancel
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                        name="submit"
                                                                                                        class="btn btn-primary">
                                                                                                    Save
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="thim-course-info">
                                                                        <h3 class="title">Course Features</h3>
                                                                        <ul>
                                                                            <li class="duration-feature">
                                                                                <i class="fa fa-clock-o"></i>
                                                                                <span class="label">Duration</span>
                                                                                <span class="value">3 Month</span>
                                                                            </li>
                                                                            <li class="quizzes-feature">
                                                                                <i class="fa fa-puzzle-piece"></i>
                                                                                <span class="label">Quizzes</span>
                                                                                <span class="value">1</span>
                                                                            </li>
                                                                            <li class="duration-feature">
                                                                                <i class="fa fa-clock-o"></i>
                                                                                <span class="label">Duration</span>
                                                                                <span class="value">1.5 Hours</span>
                                                                            </li>
                                                                            <li class="skill-feature">
                                                                                <i class="fa fa-level-up"></i>
                                                                                <span class="label">Skill level</span>
                                                                                <span class="value">Beginner</span>
                                                                            </li>
                                                                            <li class="language-feature">
                                                                                <i class="fa fa-language"></i>
                                                                                <span class="label">Language</span>
                                                                                <span class="value">English</span>
                                                                            </li>
                                                                            <li class="assessments-feature">
                                                                                <i class="fa fa-check-square-o"></i>
                                                                                <span class="label">Assessments</span>
                                                                                <span class="value">Yes</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane course-tab-panel-curriculum course-tab-panel"
                                                                id="tab-curriculum">
                                                                <div class="learnpress-course-curriculum"
                                                                     data-section="" data-id="">
                                                                    <ul class="lp-skeleton-animation">
                                                                        <li style="width: 100%; height: 50px; color:black">
                                                                            <p style="padding-top: 12px;"></p></li>
                                                                        <li style="width: 100%; height: 26px; "><p></p>
                                                                        </li>
                                                                        <li style="width: 100%; height: 26px; "><p></p>
                                                                        </li>
                                                                        <li style="width: 100%; height: 26px; "><p></p>
                                                                        </li>

                                                                        <li style="width: 100%; height: 50px; margin-top: 40px; color:black">
                                                                            <p style="padding-top: 12px;"></p></li>
                                                                        <li style="width: 100%; height: 26px;"></li>
                                                                        <li style="width: 100%; height: 26px;"></li>
                                                                        <li style="width: 100%; height: 26px;"></li>
                                                                        <li style="width: 100%; height: 26px;"></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane course-tab-panel-instructor course-tab-panel"
                                                                id="tab-instructor">
                                                                <div class="thim-about-author">
                                                                    <div class="author-wrapper">
                                                                        <div class="author-avatar">
                                                                            <a href="#">
                                                                                <img alt='author avatar'
                                                                                     src='https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=110&amp;r=g'
                                                                                     class='avatar avatar-110 photo'
                                                                                     height='110' width='110'
                                                                                     loading='lazy'
                                                                                     decoding='async'/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="author-bio">
                                                                            <div class="author-top">
                                                                                <a class="name" href="#">Keny White </a>
                                                                                <p class="job">Professor</p>
                                                                            </div>
                                                                            <ul class="thim-author-social"></ul>
                                                                            <div class="author-description">
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet. Qui
                                                                                    incidunt dolores non similique
                                                                                    ducimus et debitis molestiae. Et
                                                                                    autem quia eum reprehenderit
                                                                                    voluptates est
                                                                                    reprehenderit illo est enim
                                                                                    perferendis est neque sunt. Nam amet
                                                                                    sunt aut vero mollitia ut ipsum
                                                                                    corporis vel
                                                                                    facere eius et quia aspernatur qui
                                                                                    fugiat repudiandae. Et officiis
                                                                                    inventore
                                                                                    et quis enim ut quaerat corporis sed
                                                                                    reprehenderit odit sit saepe
                                                                                    distinctio et accusantium
                                                                                    repellendus ea enim harum.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane course-tab-panel-reviews course-tab-panel"
                                                                id="tab-reviews">
                                                                <div class="course-rating">
                                                                    <h3>Reviews</h3>
                                                                    <div class="average-rating">
                                                                        <p class="rating-title">Average Rating</p>
                                                                        <div class="rating-box">
                                                                            <div class="average-value"
                                                                                 itemprop="ratingValue">0
                                                                            </div>
                                                                            <div class="review-star">
                                                                                <div class="review-stars-rated">
                                                                                    <ul class="review-stars">
                                                                                        <li><span
                                                                                                class="fa fa-star-o"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star-o"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star-o"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star-o"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star-o"></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <ul class="review-stars filled"
                                                                                        style="width: calc(0% - 2px)">
                                                                                        <li><span
                                                                                                class="fa fa-star"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star"></span>
                                                                                        </li>
                                                                                        <li><span
                                                                                                class="fa fa-star"></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="review-amount">
                                                                                <meta itemprop="ratingCount"
                                                                                      content="0>"/>
                                                                                0 rating
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="detailed-rating">
                                                                        <p class="rating-title">Detailed Rating</p>
                                                                        <div class="rating-box">
                                                                            <div class="detailed-rating">
                                                                                <div class="stars">
                                                                                    <div class="key">
                                                                                        5
                                                                                    </div>
                                                                                    <div class="bar">
                                                                                        <div class="full_bar">
                                                                                            <div
                                                                                                style="width:0% "></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span>0%</span>
                                                                                </div>
                                                                                <div class="stars">
                                                                                    <div class="key">
                                                                                        4
                                                                                    </div>
                                                                                    <div class="bar">
                                                                                        <div class="full_bar">
                                                                                            <div
                                                                                                style="width:0% "></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span>0%</span>
                                                                                </div>
                                                                                <div class="stars">
                                                                                    <div class="key">
                                                                                        3
                                                                                    </div>
                                                                                    <div class="bar">
                                                                                        <div class="full_bar">
                                                                                            <div
                                                                                                style="width:0% "></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span>0%</span>
                                                                                </div>
                                                                                <div class="stars">
                                                                                    <div class="key">
                                                                                        2
                                                                                    </div>
                                                                                    <div class="bar">
                                                                                        <div class="full_bar">
                                                                                            <div
                                                                                                style="width:0% "></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span>0%</span>
                                                                                </div>
                                                                                <div class="stars">
                                                                                    <div class="key">
                                                                                        1
                                                                                    </div>
                                                                                    <div class="bar">
                                                                                        <div class="full_bar">
                                                                                            <div
                                                                                                style="width:0% "></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span>0%</span>
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
                                        <div class="social_share">
                                            <ul class="thim-social-share">
                                                <li class="heading">Share:</li>
                                                <li>
                                                    <div class="facebook-social">
                                                        <a target="_blank" class="facebook"
                                                           href="https://www.facebook.com/" title="Facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twitter-social">
                                                        <a target="_blank" class="twitter" title="Twitter"
                                                           href="https://twitter.com/">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pinterest-social">
                                                        <a target="_blank" class="pinterest"
                                                           href="https://in.pinterest.com/"
                                                           onclick="window.open(this.href); return false;"
                                                           title="Pinterest">
                                                            <i class="fa fa-pinterest-p"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="thim-related-course">
                                    <h3 class="related-title"> You May Like </h3>
                                    <div class="thim-course-grid">
                                        <div class="thim-carousel-wrapper" data-visible="3" data-itemtablet="2"
                                             data-itemmobile="1" data-pagination="1">
                                            <div id="post-5390"
                                                 class="course-grid-3 lpr_course post-5390 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-passive-income course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('full-stack-dev')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/full2.png')}}"
                                                                alt="Full Stack Development" title="Full Stack Development" width="400"
                                                                style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('full-stack-dev')}}" rel="bookmark">Full Stack Development</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true"
                                                                       class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    32
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5390"
                                                 class="course-grid-3 lpr_course post-5390 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-passive-income course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('web-development')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/web1.png')}}"
                                                                alt="React Native" title="React Native" width="400"
                                                                style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('web-development')}}" rel="bookmark">Web Development</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true"
                                                                       class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    32
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5394"
                                                 class="course-grid-3 lpr_course post-5394 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-passive-income course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('ui-ux')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/ui-ux2.jpg')}}"
                                                                alt="UI/UX & Graphics Design" title="UI/UX & Graphics Design" width="400"
                                                                style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('ui-ux')}}" rel="bookmark">UI/UX & Graphics Design</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true"
                                                                       class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    32
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5407"
                                                 class="course-grid-3 lpr_course post-5407 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('react-js')}}">
                                                            <img src="{{asset('wp-content/uploads/sites/91/2022/09/react2.png')}}"
                                                                 alt="react js" title="react js" width="400" style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title" style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('react-js')}}" rel="bookmark">React JS</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true" class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    28
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5395"
                                                 class="course-grid-3 lpr_course post-5395 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-passive-income course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('react-native')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/rn11.jpg')}}"
                                                                alt="React Native" title="React Native" width="400"
                                                                style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('react-native')}}" rel="bookmark">React Native</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true"
                                                                       class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    32
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5407"
                                                 class="course-grid-3 lpr_course post-5407 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-coaching course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('advance-laravel')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/laravel-inner.png')}}"
                                                                alt="advance laravel" title="advance laravel"
                                                                width="400" style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('advance-laravel')}}" rel="bookmark">Advance
                                                                laravel</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true"
                                                                       class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    28
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5393"
                                                 class="course-grid-3 lpr_course post-5393 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-passive-income course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('web-design')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/web-inner.jpeg')}}"
                                                                alt="web design" title="web design" width="400"
                                                                style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('web-design')}}" rel="bookmark">web
                                                                design</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value">
                                                                    <i aria-hidden="true"
                                                                       class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    32
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="post-5345"
                                                 class="course-grid-3 lpr_course post-5345 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-online-business course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb" href="{{route('basic-php')}}">
                                                            <img
                                                                src="{{asset('wp-content/uploads/sites/91/2022/09/php-inner.jpg')}} "
                                                                alt="Basic PHP" title="basic-php" width="400"
                                                                style="height: 13rem;object-fit: cover">
                                                        </a>
                                                    </div>
                                                    <div class="thim-course-content">
                                                        <h1 class="course-title"
                                                            style="display: flex;justify-content: space-evenly;align-items: center;">
                                                            <a href="{{route('basic-php')}}" rel="bookmark">Basic
                                                                PHP</a>
                                                        </h1>
                                                        <div class="course-meta">
                                                            <div class="course-lesson">
                                                                <div class="value"><i aria-hidden="true"
                                                                                      class="tk tk-file-invoice"></i>0
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="tk tk-students-friend"></i>
                                                                    26
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script data-cfasync="false"
                                    src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script type="text/javascript">
                                function moOpenIdLogin(app_name, is_custom_app) {
                                    var base_url = 'https://eduma.thimpress.com/demo-elegant';
                                    var request_uri = 'index.html';
                                    var http = 'https:///';
                                    var http_host = 'eduma.thimpress.com';
                                    if (is_custom_app == 'false') {
                                        if (request_uri.indexOf('wp-login.html') != -1) {
                                            var redirect_url = base_url + '/?option=getmosociallogin&app_name=';

                                        } else {
                                            var redirect_url = http + http_host + request_uri;
                                            if (redirect_url.indexOf('?') != -1) {
                                                redirect_url = redirect_url + '&option=getmosociallogin&app_name=';
                                            } else {
                                                redirect_url = redirect_url + '?option=getmosociallogin&app_name=';
                                            }
                                        }
                                    } else {
                                        var current_url = window.location.href;
                                        var cname = 'redirect_current_url';
                                        var d = new Date();
                                        d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
                                        var expires = 'expires=' + d.toUTCString();
                                        document.cookie = cname + '=' + current_url + ';' + expires + ';path=/';   //path = root path(/)
                                        if (request_uri.indexOf('wp-login.html') != -1) {
                                            var redirect_url = base_url + '/?option=oauthredirect&app_name=';
                                        } else {
                                            var redirect_url = http + http_host + request_uri;
                                            if (redirect_url.indexOf('?') != -1)
                                                redirect_url = redirect_url + '&option=oauthredirect&app_name=';
                                            else
                                                redirect_url = redirect_url + '?option=oauthredirect&app_name=';
                                        }
                                    }
                                    var redirect_to = jQuery('#loginform input[name="redirect_to"]').val();
                                    redirect_url = redirect_url + app_name + '&redirect_to=' + encodeURIComponent(redirect_to);
                                    window.location.href = redirect_url;
                                }
                            </script>
                            <script type="text/javascript">
                                function moOpenIdLogin(app_name, is_custom_app) {
                                    var base_url = 'https://eduma.thimpress.com/demo-elegant';
                                    var request_uri = 'index.html';
                                    var http = 'https:///';
                                    var http_host = 'eduma.thimpress.com';
                                    if (is_custom_app == 'false') {
                                        if (request_uri.indexOf('wp-login.html') != -1) {
                                            var redirect_url = base_url + '/?option=getmosociallogin&app_name=';

                                        } else {
                                            var redirect_url = http + http_host + request_uri;
                                            if (redirect_url.indexOf('?') != -1) {
                                                redirect_url = redirect_url + '&option=getmosociallogin&app_name=';
                                            } else {
                                                redirect_url = redirect_url + '?option=getmosociallogin&app_name=';
                                            }
                                        }
                                    } else {
                                        var current_url = window.location.href;
                                        var cname = 'redirect_current_url';
                                        var d = new Date();
                                        d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
                                        var expires = 'expires=' + d.toUTCString();
                                        document.cookie = cname + '=' + current_url + ';' + expires + ';path=/';   //path = root path(/)
                                        if (request_uri.indexOf('wp-login.html') != -1) {
                                            var redirect_url = base_url + '/?option=oauthredirect&app_name=';
                                        } else {
                                            var redirect_url = http + http_host + request_uri;
                                            if (redirect_url.indexOf('?') != -1)
                                                redirect_url = redirect_url + '&option=oauthredirect&app_name=';
                                            else
                                                redirect_url = redirect_url + '?option=oauthredirect&app_name=';
                                        }
                                    }
                                    var redirect_to = jQuery('#loginform input[name="redirect_to"]').val();
                                    redirect_url = redirect_url + app_name + '&redirect_to=' + encodeURIComponent(redirect_to);
                                    window.location.href = redirect_url;
                                }
                            </script>
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
                                    {{--                                        <a href="#">Online Business</a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="#">Passive Income</a>--}}
                                    {{--                                    </li>--}}
                                    <li>
                                        <a href="{{route("gallery")}}">Photography</a>
                                    </li>
                                    <li>
                                        <a href="{{route("all-course")}}">Teacher Training</a>
                                    </li>
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="#">Teaching Online</a>--}}
                                    {{--                                    </li>--}}
                                </ul>
                            </div>
                        </aside>
                        <aside id="media_image-3" class="widget widget_media_image">
                            <a href="{{route('react-native')}}">
                                <img width="330" height="359"
                                     src="{{asset('../../wp-content/uploads/sites/91/2022/11/ads-sidebar.jpg')}}"
                                     class="image wp-image-18572  attachment-full size-full" alt="" decoding="async"
                                     loading="lazy" style="max-width: 100%; height: auto;"
                                     sizes="(max-width: 330px) 100vw, 330px"/>
                            </a>
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
                        background-image: url("../../wp-content/uploads/sites/91/2022/12/bg-newsletter.png");
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
                    }
                </style>
                <aside id="text-5" class="widget widget_text footer_bottom_widget">
                    <div class="textwidget">
                        <div data-elementor-type="wp-post" data-elementor-id="18038" class="elementor elementor-18038">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-a1c53d2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="a1c53d2" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            </section>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
