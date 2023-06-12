@extends('layout.app')
@section('content')

    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-kit-15312 {
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

        .elementor-2901 .elementor-element.elementor-element-72c41ad7 {
            overflow: hidden;
            margin-top: 0px;
            margin-bottom: 30px;
        }

        .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .sc-heading .heading__primary,
        .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .sc-heading .heading__primary a {
            color: #000000;
        }

        .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .boxes-icon {
            font-size: 36px;
            width: 135px;
            height: 70px;
            line-height: 70px;
            border-style: none;
            color: #FFFFFF;
            border-color: #F5986A;
            background-color: #F5986A;
        }

        .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .iconbox-left .content-inner,
        .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .iconbox-right .content-inner {
            width: calc(100% - 135px - 15px);
        }

        .elementor-2901 .elementor-element.elementor-element-1672c856 .dot_line_buttom_top .dot-line,
        .elementor-2901 .elementor-element.elementor-element-1672c856 .dot_line_buttom_top .dot-line span {
            color: #FFFFFF;
            background-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .content-inner .smicon-read {
            border-style: none;
        }

        .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .sc-heading .heading__primary,
        .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .sc-heading .heading__primary a {
            color: #000000;
        }

        .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .boxes-icon {
            font-size: 36px;
            width: 135px;
            height: 70px;
            line-height: 70px;
            border-style: none;
            color: #FFFFFF;
            border-color: #FFC000;
            background-color: #FFC000;
        }

        .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .iconbox-left .content-inner,
        .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .iconbox-right .content-inner {
            width: calc(100% - 135px - 15px);
        }

        .elementor-2901 .elementor-element.elementor-element-fb15860 .dot_line_buttom_top .dot-line,
        .elementor-2901 .elementor-element.elementor-element-fb15860 .dot_line_buttom_top .dot-line span {
            color: #FFFFFF;
            background-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .content-inner .smicon-read {
            border-style: none;
        }

        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .sc-heading .heading__primary,
        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .sc-heading .heading__primary a {
            color: #000000;
        }

        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .boxes-icon {
            font-size: 36px;
            width: 135px;
            height: 70px;
            line-height: 70px;
            border-style: none;
            color: #FFFFFF;
            border-color: #45444B;
            background-color: #45444B;
        }

        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .iconbox-left .content-inner,
        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .iconbox-right .content-inner {
            width: calc(100% - 135px - 15px);
        }

        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .dot_line_buttom_top .dot-line,
        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .dot_line_buttom_top .dot-line span {
            color: #FFFFFF;
            background-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .content-inner .smicon-read {
            border-style: none;
        }

        .elementor-2901 .elementor-element.elementor-element-12a5d782:not(.elementor-motion-effects-element-type-background),
        .elementor-2901 .elementor-element.elementor-element-12a5d782>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-12a5d782 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 70px;
        }

        .elementor-2901 .elementor-element.elementor-element-12a5d782>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-2901 .elementor-element.elementor-element-c87527e:not(.elementor-motion-effects-element-type-background),
        .elementor-2901 .elementor-element.elementor-element-c87527e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-c87527e {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 80px;
        }

        .elementor-2901 .elementor-element.elementor-element-c87527e>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-2901 .elementor-element.elementor-element-21c7761>.elementor-widget-container {
            margin: 0px 30px 0px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-69d32d9>.elementor-element-populated {
            margin: 0px 0px 0px 50px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 50px;
        }

        .elementor-2901 .elementor-element.elementor-element-1ac36da .counter-box .counter-box-content {
            color: #CECECE;
        }

        .elementor-2901 .elementor-element.elementor-element-1ac36da .counter-box .display-percentage {
            color: #86D2E8;
        }

        .elementor-2901 .elementor-element.elementor-element-fb9f37d>.elementor-element-populated {
            margin: 80px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-367cfa9 .counter-box .counter-box-content {
            color: #CECECE;
        }

        .elementor-2901 .elementor-element.elementor-element-367cfa9 .counter-box .display-percentage {
            color: #8EA4EC;
        }

        .elementor-2901 .elementor-element.elementor-element-b7ab150>.elementor-element-populated {
            margin: -80px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-384f727 .counter-box .counter-box-content {
            color: #CECECE;
        }

        .elementor-2901 .elementor-element.elementor-element-384f727 .counter-box .display-percentage {
            color: #FBA53F;
        }

        .elementor-2901 .elementor-element.elementor-element-9fcb068 .counter-box .counter-box-content {
            color: #CECECE;
        }

        .elementor-2901 .elementor-element.elementor-element-9fcb068 .counter-box .display-percentage {
            color: #A6D772;
        }

        .elementor-2901 .elementor-element.elementor-element-b73cf46:not(.elementor-motion-effects-element-type-background),
        .elementor-2901 .elementor-element.elementor-element-b73cf46>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-b73cf46 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 180px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-b73cf46>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-2901 .elementor-element.elementor-element-a207d21:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-2901 .elementor-element.elementor-element-a207d21>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("../../demo-elegantegant/wp-content/uploads/sites/91/2021/07/blockquote-about-us.png");
            background-position: 100% 0px;
            background-repeat: no-repeat;
        }

        .elementor-2901 .elementor-element.elementor-element-a207d21>.elementor-element-populated {
            border-style: solid;
            border-width: 0px 0px 0px 5px;
            border-color: #85CEF9;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 35px 0px 30px 30px;
        }

        .elementor-2901 .elementor-element.elementor-element-a207d21>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-2901 .elementor-element.elementor-element-1cd95f1 {
            font-family: "Manrope", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 28px;
        }

        .elementor-2901 .elementor-element.elementor-element-1cd95f1>.elementor-widget-container {
            margin: 0px 80px 0px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-ff6bad9 {
            text-align: left;
        }

        .elementor-2901 .elementor-element.elementor-element-87bca12 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -70px;
            margin-bottom: 0px;
            z-index: 1;
        }

        .elementor-2901 .elementor-element.elementor-element-87bca12>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77 .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-stacked .elementor-icon {
            background-color: #FFFFFF;
            color: #F5986A;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-framed .elementor-icon,
        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-default .elementor-icon {
            color: #FFFFFF;
            border-color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-framed .elementor-icon,
        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-default .elementor-icon svg {
            fill: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-framed .elementor-icon {
            background-color: #F5986A;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77.elementor-view-stacked .elementor-icon svg {
            fill: #F5986A;
        }

        .elementor-2901 .elementor-element.elementor-element-64606a77 .elementor-icon {
            font-size: 50px;
            padding: 20px;
        }

        .elementor-2901 .elementor-element.elementor-element-cade1bf:not(.elementor-motion-effects-element-type-background),
        .elementor-2901 .elementor-element.elementor-element-cade1bf>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
            background-image: url("../../demo-elegantegant/wp-content/uploads/sites/91/2021/07/about-our-team.png");
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-2901 .elementor-element.elementor-element-cade1bf {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -130px;
            margin-bottom: -90px;
        }

        .elementor-2901 .elementor-element.elementor-element-cade1bf>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-2901 .elementor-element.elementor-element-e2bc08f>.elementor-element-populated {
            margin: 160px 0px 100px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-815574e {
            text-align: center;
        }

        .elementor-2901 .elementor-element.elementor-element-815574e .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Manrope", Sans-serif;
            font-size: 46px;
            font-weight: bold;
            text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .elementor-2901 .elementor-element.elementor-element-815574e>.elementor-widget-container {
            margin: 0px 0px 10px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-5736e2c {
            text-align: center;
        }

        .elementor-2901 .elementor-element.elementor-element-5736e2c .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Manrope", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .elementor-2901 .elementor-element.elementor-element-5736e2c>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 {
            --thim-ekits-slider-show: 5;
            --thim-ekits-slider-space: 15px;
            --thim-ekits-bg-image-color: #00000000;
            --thim-ekits-img-border-radius: 50% 50% 50% 50%;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__article {
            text-align: center;
            padding: 10px 0px 0px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__thumbnail {
            max-width: 190px;
            padding: 7px 7px 7px 7px;
            margin-bottom: 25px;
            border-style: dashed;
            border-width: 2px 2px 2px 2px;
            border-color: #DCDCFF;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 {
            --thim-ekits-bg-image-hover-color: #1D171778;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__member-name {
            font-size: 1.1em;
            font-weight: 500;
            color: #FFFFFF;
            margin-bottom: 8px;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__member-position {
            color: #FFFFFF;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__member-description {
            border-top-style: none;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__member-rating {
            text-align: right;
            top: 50%;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__member-rating i {
            color: #FAD556;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__social {
            display: inline-block;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__list-social {
            text-align: center;
            top: 50%;
            -webkit-transform: translateY(20px);
            -ms-transform: translateY(20px);
            transform: translateY(20px);
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__social>a {
            color: #FFFFFF;
            padding: 0px 5px 0px 5px;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__social>a:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5 .thim-ekit-team__social>a i {
            font-size: 20px;
        }

        .elementor-2901 .elementor-element.elementor-element-43ff4d5>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 10px 0px 20px 0px;
        }

        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button .elementor-align-icon-right {
            margin-left: 15px;
        }

        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button .elementor-align-icon-left {
            margin-right: 15px;
        }

        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button {
            font-family: "Manrope", Sans-serif;
            font-weight: 500;
            fill: #000000;
            color: #000000;
            background-color: #FFFFFF;
            border-radius: 40px 40px 40px 40px;
            padding: 16px 45px 16px 45px;
        }

        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button:hover,
        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button:focus {
            color: #FFFFFF;
            background-color: #FFB606;
        }

        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button:hover svg,
        .elementor-2901 .elementor-element.elementor-element-6134e80 .elementor-button:focus svg {
            fill: #FFFFFF;
        }

        @media(min-width:768px) {
            .elementor-2901 .elementor-element.elementor-element-35832a1 {
                width: 15%;
            }

            .elementor-2901 .elementor-element.elementor-element-a207d21 {
                width: 54.332%;
            }

            .elementor-2901 .elementor-element.elementor-element-15b635f {
                width: 30%;
            }
        }

        @media(max-width:1024px) {
            .elementor-2901 .elementor-element.elementor-element-72c41ad7 {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-754b9476>.elementor-element-populated {
                margin: 0px 0px -30px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-39ce9ed3>.elementor-element-populated {
                margin: 0px 0px -30px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-12a5d782 {
                margin-top: 0px;
                margin-bottom: 30px;
            }

            .elementor-2901 .elementor-element.elementor-element-c87527e {
                margin-top: 0px;
                margin-bottom: 30px;
            }

            .elementor-2901 .elementor-element.elementor-element-69d32d9>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-b73cf46 {
                margin-top: 0px;
                margin-bottom: 170px;
                padding: 15px 15px 50px 15px;
            }

            .elementor-2901 .elementor-element.elementor-element-a207d21:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-2901 .elementor-element.elementor-element-a207d21>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-position: 0px 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-a207d21>.elementor-element-populated {
                padding: 30px 30px 30px 100px;
            }

            .elementor-2901 .elementor-element.elementor-element-87bca12 {
                margin-top: -189px;
                margin-bottom: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-64606a77 .elementor-icon {
                font-size: 30px;
            }

            .elementor-2901 .elementor-element.elementor-element-cade1bf {
                margin-top: -130px;
                margin-bottom: -90px;
            }

            .elementor-2901 .elementor-element.elementor-element-43ff4d5 {
                --thim-ekits-slider-show: 3;
            }
        }

        @media(max-width:767px) {
            .elementor-2901 .elementor-element.elementor-element-72c41ad7 {
                padding: 0px 0px 50px 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .boxes-icon {
                width: 70px;
            }

            .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-2901 .elementor-element.elementor-element-1672c856 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 70px - 15px);
            }

            .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .boxes-icon {
                width: 70px;
            }

            .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-2901 .elementor-element.elementor-element-fb15860 .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 70px - 15px);
            }

            .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .boxes-icon {
                width: 70px;
            }

            .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .iconbox-left .content-inner,
            .elementor-2901 .elementor-element.elementor-element-62d8ff1f .wrapper-box-icon .iconbox-right .content-inner {
                width: calc(100% - 70px - 15px);
            }

            .elementor-2901 .elementor-element.elementor-element-fb9f37d>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-b7ab150>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-f29b003>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-a207d21:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-2901 .elementor-element.elementor-element-a207d21>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-position: 0px 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-1cd95f1 {
                font-size: 16px;
            }

            .elementor-2901 .elementor-element.elementor-element-1cd95f1>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-64606a77 .elementor-icon {
                font-size: 30px;
            }

            .elementor-2901 .elementor-element.elementor-element-cade1bf {
                margin-top: -80px;
                margin-bottom: -45px;
            }

            .elementor-2901 .elementor-element.elementor-element-e2bc08f>.elementor-element-populated {
                margin: 100px 0px 50px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-815574e .elementor-heading-title {
                font-size: 32px;
            }

            .elementor-2901 .elementor-element.elementor-element-5736e2c .elementor-heading-title {
                font-size: 16px;
                line-height: 2em;
            }

            .elementor-2901 .elementor-element.elementor-element-5736e2c>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-2901 .elementor-element.elementor-element-43ff4d5 {
                --thim-ekits-slider-show: 2;
                --thim-ekits-slider-space: 15px;
            }

            .elementor-2901 .elementor-element.elementor-element-43ff4d5>.elementor-widget-container {
                padding: 30px 0px 30px 0px;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-2901 .elementor-element.elementor-element-754b9476 {
                width: 100%;
            }

            .elementor-2901 .elementor-element.elementor-element-39ce9ed3 {
                width: 100%;
            }

            .elementor-2901 .elementor-element.elementor-element-1efb3cb6 {
                width: 100%;
            }

            .elementor-2901 .elementor-element.elementor-element-6828c06 {
                width: 100%;
            }

            .elementor-2901 .elementor-element.elementor-element-69d32d9 {
                width: 100%;
            }

            .elementor-2901 .elementor-element.elementor-element-a207d21 {
                width: 100%;
            }
        }

        /* Start custom CSS for section, class: .elementor-element-72c41ad7 */
        .elementor-widget-thim-icon-box .thim-widget-icon-box .image_box .heading__primary {
            font-size: 20px !important;
            line-height: 30px;
            margin: 0;
        }

        .elementor-widget-thim-icon-box .thim-widget-icon-box .image_box .desc-icon-box .desc-content {
            line-height: 25px !important
        }

        /* End custom CSS */
    </style>
    <div id="main-content">
        <section class="content-area">
            <style>.content-area {
                    --thim-padding-content-pdtop-desktop: 0px;
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
                            <h1 class="page-title">About Us</h1>
                            <div class="breadcrumbs-wrapper">
                                <div class="container">
                                    <ul class="breadcrumbs" id="breadcrumbs">
                                        <li><a href="https://eduma.thimpress.com/demo-elegant">Home</a></li>
                                        <li>About Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid site-content">
                <div class="row">
                    <main id="main" class="site-main content-wide">
                        <article id="post-2901" class="post-2901 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="2901" class="elementor elementor-2901">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-72c41ad7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="72c41ad7" data-element_type="section"
                                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-wide">
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-754b9476" data-id="754b9476" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1672c856 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                                        data-id="1672c856" data-element_type="widget"
                                                        data-widget_type="thim-icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-widget-icon-box">
                                                                <div class="wrapper-box-icon layout_text_number text-left image_box">
                                                                    <div class="smicon-box iconbox-left">
                                                                        <div class="boxes-icon circle">
                                                                            <span class="inner-icon">
                                                                                <span class="text-number-icon">01</span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content-inner">
                                                                            <div class="sc-heading">
                                                                                <h5 class="heading__primary" style="font-size:28px;">
                                                                                    Free Tutorials
                                                                                </h5>
                                                                            </div>
                                                                            <div class="desc-icon-box">
                                                                                <div class="desc-content">
                                                                                    We will provide free upgradation tutorials for any newer version of the course you have.
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
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-39ce9ed3" data-id="39ce9ed3" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-fb15860 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                                        data-id="fb15860" data-element_type="widget" data-widget_type="thim-icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-widget-icon-box">
                                                                <div class="wrapper-box-icon layout_text_number text-left image_box">
                                                                    <div class="smicon-box iconbox-left">
                                                                        <div class="boxes-icon circle">
                                                                            <span class="inner-icon">
                                                                                <span class="text-number-icon">02</span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content-inner">
                                                                            <div class="sc-heading">
                                                                                <h4 class="heading__primary" style="font-size:28px;">Practical Explanation</h4>
                                                                            </div>
                                                                            <div class="desc-icon-box">
                                                                                <div class="desc-content">
                                                                                    You will get a practical learning experience on screen with your favorite technologies.
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
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1efb3cb6"
                                                data-id="1efb3cb6" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-62d8ff1f iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                                        data-id="62d8ff1f" data-element_type="widget"
                                                        data-widget_type="thim-icon-box.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-widget-icon-box">
                                                                <div class="wrapper-box-icon layout_text_number text-left image_box">
                                                                    <div class="smicon-box iconbox-left">
                                                                        <div class="boxes-icon circle">
                                                                            <span class="inner-icon">
                                                                                <span class="text-number-icon">03</span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="content-inner">
                                                                            <div class="sc-heading">
                                                                                <h4 class="heading__primary" style="font-size:28px;">Certification</h4>
                                                                            </div>
                                                                            <div class="desc-icon-box">
                                                                                <div class="desc-content">
                                                                                    We provide a professional certificate after completion of your course for jobs in the future.
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
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-12a5d782 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="12a5d782" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44a28b" data-id="44a28b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2d2d0a3 thim-ekits-heading-text-center elementor-widget thim-ekits-heading elementor-widget-thim-heading"
                                                        data-id="2d2d0a3" data-element_type="widget"
                                                        data-widget_type="thim-heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="sc_heading text-center">
                                                                <h2 class="title">Our story</h2>
                                                                <div class="sub-heading">
                                                                    <p>IT CAREER IN RAJKOT, MOVING TOWARDS THE BETTER TOMORROW!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-c87527e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="c87527e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6828c06" data-id="6828c06" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-21c7761 elementor-widget elementor-widget-image"
                                                        data-id="21c7761" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="666" height="660"
                                                                 src="../wp-content/uploads/sites/91/2021/07/story-bg-about-us.png"
                                                                 class="attachment-full size-full wp-image-16289" alt=""
                                                                 loading="lazy"
                                                                 sizes="(max-width: 666px) 100vw, 666px"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-69d32d9"
                                                data-id="69d32d9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-9bacf1b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="9bacf1b" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8cc5b5c"
                                                                data-id="8cc5b5c" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-1ac36da elementor-widget thim-counters-box"
                                                                        data-id="1ac36da" data-element_type="widget" data-widget_type="thim-counters-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="counter-box demo-elegant">
                                                                                <div class="icon-counter-box">
                                                                                    <i class="fa fa-balance-scale"></i>
                                                                                </div>
                                                                                <div class="content-box-percentage">
                                                                                    <div class="wrap-percentage">
                                                                                        <div class="display-percentage" data-percentage="5000">
                                                                                            5262
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="counter-content-container">
                                                                                        <div class="counter-box-content">
                                                                                            Foreign Follows
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fb9f37d"
                                                                data-id="fb9f37d" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-367cfa9 elementor-widget thim-counters-box"
                                                                        data-id="367cfa9" data-element_type="widget"
                                                                        data-widget_type="thim-counters-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="counter-box demo-elegant">
                                                                                <div class="icon-counter-box">
                                                                                    <i class="fa fa-area-chart"></i>
                                                                                </div>
                                                                                <div class="content-box-percentage">
                                                                                    <div class="wrap-percentage">
                                                                                        <div class="display-percentage" data-percentage="364">
                                                                                            100
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="counter-content-container">
                                                                                        <div class="counter-box-content">
                                                                                            Certified Teachers
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
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-5ec3c4b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="5ec3c4b" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b7ab150"
                                                                data-id="b7ab150" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-384f727 elementor-widget thim-counters-box"
                                                                        data-id="384f727" data-element_type="widget" data-widget_type="thim-counters-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="counter-box demo-elegant">
                                                                                <div class="icon-counter-box">
                                                                                    <i class="fa fa-bolt"></i>
                                                                                </div>
                                                                                <div class="content-box-percentage">
                                                                                    <div class="wrap-percentage">
                                                                                        <div class="display-percentage" data-percentage="2240">1000</div>
                                                                                    </div>
                                                                                    <div class="counter-content-container">
                                                                                        <div class="counter-box-content">
                                                                                            Student Enroll
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f29b003" data-id="f29b003" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-9fcb068 elementor-widget thim-counters-box"
                                                                        data-id="9fcb068" data-element_type="widget" data-widget_type="thim-counters-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="counter-box demo-elegant">
                                                                                <div class="icon-counter-box">
                                                                                    <i class="fa fa-flask"></i>
                                                                                </div>
                                                                                <div class="content-box-percentage">
                                                                                    <div class="wrap-percentage">
                                                                                        <div class="display-percentage" data-percentage="275">
                                                                                            50
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="counter-content-container">
                                                                                        <div class="counter-box-content">
                                                                                            Complete Course
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
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-b73cf46 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="b73cf46" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-35832a1" data-id="35832a1" data-element_type="column">
                                                <div class="elementor-widget-wrap"></div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a207d21"
                                                data-id="a207d21" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1cd95f1 elementor-widget elementor-widget-text-editor"
                                                        data-id="1cd95f1" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>
                                                                DreamSpot IT Academy is one of the best IT training institutes in Rajkot for learning web design,
                                                                Web Development, UI&UX, Graphics Design & other IT courses. We stepped into a global market with the
                                                                goal in the IT industry to help students to grow the best future and get that dream job or desire for
                                                                freelance business in some of the most popular Computer / IT fields. The candidate will have most of the
                                                                chances that they will recruit by the best IT companies.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ff6bad9 elementor-widget elementor-widget-image"
                                                        data-id="ff6bad9" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="199" height="54"
                                                                 src="../wp-content/uploads/sites/91/2021/07/richchard-about-us.png"
                                                                 class="attachment-full size-full wp-image-16510" alt=""
                                                                 loading="lazy"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-15b635f"
                                                data-id="15b635f" data-element_type="column">
                                                <div class="elementor-widget-wrap"></div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-87bca12 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="87bca12" data-element_type="section"
                                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-326a3b06"
                                                data-id="326a3b06" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-64606a77 icon-subscribe elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
                                                        data-id="64606a77" data-element_type="widget"
                                                        id="icon-subscribe" data-widget_type="icon.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-wrapper">
                                                                <div class="elementor-icon">
                                                                    <i aria-hidden="true" class="fas fa-male"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-cade1bf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="cade1bf" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e2bc08f"
                                                data-id="e2bc08f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-815574e elementor-widget elementor-widget-heading"
                                                        data-id="815574e" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Meet our team</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5736e2c elementor-widget elementor-widget-heading"
                                                        data-id="5736e2c" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-43ff4d5 thim-ekit-team-slider elementor-widget elementor-widget-thim-ekits-team"
                                                        data-id="43ff4d5" data-element_type="widget"
                                                        data-settings="{&quot;slidesPerView&quot;:5,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:15,&quot;slidesPerView_tablet&quot;:3,&quot;slidesPerView_mobile&quot;:&quot;2&quot;,&quot;spaceBetween_mobile&quot;:&quot;15&quot;,&quot;slider_speed&quot;:1000,&quot;slider_show_pagination&quot;:&quot;none&quot;}"
                                                        data-widget_type="thim-ekits-team.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="thim-ekit-team thim-ekits-sliders swiper-container">
                                                                <div class=" swiper-wrapper">
                                                                    <div class="thim-ekit-team__article swiper-slide post-2901 page type-page status-publish hentry">
                                                                        <div class="thim-ekit-team__thumbnail">
                                                                            <div class="thim-ekit-team__image">
                                                                                <img decoding="async" width="200"
                                                                                     height="200"
                                                                                     src="../wp-content/uploads/sites/91/2015/11/team-7.jpg"
                                                                                     class="attachment-medium size-medium wp-image-2923"
                                                                                     alt="" loading="lazy"
                                                                                     srcset="https://eduma.thimpress.com/demo-elegant/wp-content/uploads/sites/91/2015/11/team-7.jpg 200w, https://eduma.thimpress.com/demo-elegant/wp-content/uploads/sites/91/2015/11/team-7-150x150.jpg 150w, https://eduma.thimpress.com/demo-elegant/wp-content/uploads/sites/91/2015/11/team-7-100x100.jpg 100w, https://eduma.thimpress.com/demo-elegant/wp-content/uploads/sites/91/2015/11/team-7-60x60.jpg 60w"
                                                                                     sizes="(max-width: 200px) 100vw, 200px"/>
                                                                            </div>
                                                                            <div class="thim-ekit-team__list-social">
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-facebook-f"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-twitter"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-youtube"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-linkedin-in"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="thim-ekit-team__content">
                                                                            <div class="thim-ekit-team__member-name">
                                                                                Owen Christ
                                                                            </div>
                                                                            <div class="thim-ekit-team__member-position">
                                                                                After working as a software developer and...
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="thim-ekit-team__article swiper-slide post-2901 page type-page status-publish hentry">
                                                                        <div class="thim-ekit-team__thumbnail">
                                                                            <div class="thim-ekit-team__image">
                                                                                <img decoding="async" width="200"
                                                                                     height="200"
                                                                                     src="../wp-content/uploads/sites/91/2015/11/team-5.jpg"
                                                                                     class="attachment-medium size-medium wp-image-2921"
                                                                                     alt="" loading="lazy"
                                                                                     sizes="(max-width: 200px) 100vw, 200px"/>
                                                                            </div>
                                                                            <div class="thim-ekit-team__list-social">
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-facebook-f"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-twitter"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-youtube"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-linkedin-in"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="thim-ekit-team__content">
                                                                            <div class="thim-ekit-team__member-name">
                                                                                Namrata Parmar
                                                                            </div>
                                                                            <div class="thim-ekit-team__member-position">
                                                                                After working as a software developer and...
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="thim-ekit-team__article swiper-slide post-2901 page type-page status-publish hentry">
                                                                        <div class="thim-ekit-team__thumbnail">
                                                                            <div class="thim-ekit-team__image">
                                                                                <img decoding="async" width="200"
                                                                                     height="200"
                                                                                     src="../wp-content/uploads/sites/91/2015/11/team-1.jpg"
                                                                                     class="attachment-medium size-medium wp-image-2918"
                                                                                     alt="" loading="lazy"
                                                                                     sizes="(max-width: 200px) 100vw, 200px"/>
                                                                            </div>
                                                                            <div class="thim-ekit-team__list-social">
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-facebook-f"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-twitter"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-youtube"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-linkedin-in"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="thim-ekit-team__content">
                                                                            <div class="thim-ekit-team__member-name">
                                                                                George Clinton
                                                                            </div>
                                                                            <div class="thim-ekit-team__member-position">
                                                                                After working as a software developer and...
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="thim-ekit-team__article swiper-slide post-2901 page type-page status-publish hentry">
                                                                        <div class="thim-ekit-team__thumbnail">
                                                                            <div class="thim-ekit-team__image">
                                                                                <img decoding="async" width="200"
                                                                                     height="200"
                                                                                     src="../wp-content/uploads/sites/91/2015/11/team-8.jpg"
                                                                                     class="attachment-medium size-medium wp-image-2917"
                                                                                     alt="" loading="lazy"
                                                                                     sizes="(max-width: 200px) 100vw, 200px"/>
                                                                            </div>
                                                                            <div class="thim-ekit-team__list-social">
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-facebook-f"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-twitter"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-youtube"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-linkedin-in"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="thim-ekit-team__content">
                                                                            <div class="thim-ekit-team__member-name">
                                                                                George Richards
                                                                            </div>
                                                                            <div class="thim-ekit-team__member-position">
                                                                                After working as a software developer and...
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="thim-ekit-team__article swiper-slide post-2901 page type-page status-publish hentry">
                                                                        <div class="thim-ekit-team__thumbnail">
                                                                            <div class="thim-ekit-team__image">
                                                                                <img decoding="async" width="200"
                                                                                     height="200"
                                                                                     src="../wp-content/uploads/sites/91/2015/11/team-3.jpg"
                                                                                     class="attachment-medium size-medium wp-image-2922"
                                                                                     alt="" loading="lazy"
                                                                                     sizes="(max-width: 200px) 100vw, 200px"/>
                                                                            </div>
                                                                            <div class="thim-ekit-team__list-social">
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-facebook-f"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-twitter"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-youtube"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="thim-ekit-team__social">
                                                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                                                        <i class="fab fa-linkedin-in"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="thim-ekit-team__content">
                                                                            <div class="thim-ekit-team__member-name">
                                                                                Betty Milner
                                                                            </div>
                                                                            <div class="thim-ekit-team__member-position">
                                                                                After working as a software developer
                                                                                and...
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6134e80 elementor-align-center elementor-widget elementor-widget-button"
                                                        data-id="6134e80" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="#" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                                        <i aria-hidden="true" class="fas fa-plus"></i>
                                                                    </span>
                                                                    <span class="elementor-button-text">Join our teams</span>
                                                                </span>
                                                                </a>
                                                            </div>
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
        <div class="footer-bottom-above ">
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
