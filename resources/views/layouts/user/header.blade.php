<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" href="/favicon.png">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <script src="{{asset('js/jquery.min.js')}}" async defer></script>
        <style data-href="{{asset('css/styles.css')}}" id="gatsby-global-css">
            @font-face {
                font-family: Open Sans;
                src: url(/static/OpenSans-Light-0381cb2d553b12329619ac6a28cb64bc.woff2) format("woff2");
                font-weight: 300;
                font-display: swap
            }

            @font-face {
                font-family: Open Sans;
                src: url(/static/OpenSans-Regular-b94ffe5a021e7a8615e2b38344ed717a.woff2) format("woff2");
                font-weight: 400;
                font-display: swap
            }

            @font-face {
                font-family: Open Sans;
                src: url(/static/OpenSans-SemiBold-eab5ab4a41640b3f6a7f15e67cb9bb6a.woff2) format("woff2");
                font-weight: 600;
                font-display: swap
            }

            @font-face {
                font-family: Open Sans;
                src: url(/static/OpenSans-Bold-4a72f904e1ddd98d3d30340b8f426077.woff2) format("woff2");
                font-weight: 700;
                font-display: swap
            }

            @font-face {
                font-family: Open Sans;
                src: url(/static/OpenSans-ExtraBold-a1d29d768634e50befd2b717a9a54de4.woff2) format("woff2");
                font-weight: 800;
                font-display: swap
            }

            *,:after,:before {
                box-sizing: border-box
            }

            :root {
                --color-primary: #990d15;
                --box-shadow: 2px 2px 2px hsla(0,0%,43.9%,0.1);
                --box-shadow-hover: 0 5px 5px hsla(0,0%,43.9%,0.4);
                font-size: 16px;
                -webkit-font-smoothing: antialiased
            }

            :root,textarea {
                font-family: Open Sans,sans-serif
            }

            body,html {
                margin: 0;
                background: #f5f5f5;
                scroll-behavior: smooth
            }

            .seo-hidden {
                position: absolute;
                z-index: -1;
                visibility: hidden
            }

            .about-us-mobile-navigation {
                background: #fff;
                height: calc(100vh - 48px);
                padding: 42px 22px
            }

            .about-us-mobile-navigation-title {
                margin: 0 0 29px
            }

            .announcement-banner {
                display: block;
                height: 367px!important;
                width: 100%;
                max-width: 921px;
                margin: 0 0 39px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            .announcement-type {
                display: inline-block;
                color: #fff;
                font-size: 10px;
                font-weight: 600;
                line-height: 15px;
                background: #990d15;
                border-radius: 2px;
                padding: 3px 11px;
                margin: 0 0 12px;
                text-transform: uppercase
            }

            .announcement-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px
            }

            .announcement-date {
                color: #505050;
                font-size: 14px;
                line-height: 20px;
                margin: 0 0 35px
            }

            .announcement-content p {
                color: #303030;
                font-size: 15px;
                font-weight: 300;
                line-height: 25px
            }

            @media (max-width: 599px) {
                .career-opportunity {
                    padding:0!important
                }
            }

            .career-opportunity-banner {
                display: block;
                width: 100%;
                margin: 0 0 5px;
                border-radius: 3px;
                max-height: 367px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .career-opportunity-banner {
                    margin:0;
                    height: 255px
                }
            }

            @media (max-width: 599px) {
                .career-opportunity-container {
                    padding:1rem 2rem 4rem
                }
            }

            .career-opportunity-container .form-container {
                margin: 0;
                display: block
            }

            @media (max-width: 599px) {
                .career-opportunity-container .form-container .career-post-form .form-field-container {
                    margin-left:0
                }
            }

            @media (max-width: 599px) {
                .career-opportunity-container .form-container .career-post-form .file-upload {
                    margin:10px 0
                }
            }

            @media (max-width: 599px) {
                .career-opportunity-container .form-container .career-post-form .form-content {
                    margin-left:0
                }
            }

            @media (max-width: 599px) {
                .career-opportunity-container .form-container .form-content {
                    overflow:unset
                }
            }

            @media (max-width: 599px) {
                .career-opportunity-container .side-form-modal {
                    height:100%;
                    max-width: none
                }
            }

            .career-opportunity-header {
                display: flex;
                justify-content: space-between;
                margin: 2rem 0
            }

            @media (max-width: 599px) {
                .career-opportunity-header {
                    flex-direction:column
                }
            }

            .career-opportunity-header-container-title {
                color: #a52930;
                font-size: 15px;
                font-weight: 700;
                line-height: 25px;
                margin: 0 0 3px;
                text-transform: uppercase
            }

            .career-opportunity-header-container-position {
                color: #303030;
                font-size: 25px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px
            }

            .career-opportunity-header-container-location {
                color: #a9a9a9;
                font-size: 16px;
                font-weight: 400;
                line-height: 32px;
                margin: 0 0 6px
            }

            .career-opportunity-header-container-location span {
                padding: 0 5px
            }

            @media (max-width: 599px) {
                .career-opportunity-header-container-location span {
                    padding:0 2px
                }
            }

            @media (max-width: 599px) {
                .career-opportunity-header-container-location {
                    font-size:11px;
                    line-height: 25px
                }
            }

            .career-opportunity-body {
                color: #303030;
                font-size: 15px;
                line-height: 25px;
                border-top: 1px solid #dadada;
                padding: 28px 0 40px
            }

            .career-opportunity-body-title {
                color: #303030;
                font-size: 22px;
                font-weight: 700;
                line-height: 32px;
                margin: 0 0 22px
            }

            .career-opportunity-body-list {
                color: #303030;
                font-size: 14px;
                font-weight: 400;
                line-height: 24px;
                margin: 0 0 3rem;
                padding: 0
            }

            .career-opportunity-body-separator {
                background: #962024;
                height: 10px;
                width: 52px;
                margin-bottom: 35px
            }

            .career-opportunity-button {
                margin: 0 0 3rem;
                display: flex;
                justify-content: flex-end
            }

            .career-opportunity-button button {
                color: #fff;
                background: #990d15;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: none;
                cursor: pointer;
                width: 145px;
                height: 40px;
                padding: 0;
                line-height: 40px;
                text-align: center;
                text-decoration: none
            }

            @media (max-width: 599px) {
                .career-opportunity-button button {
                    width:100%
                }
            }

            .contact-us-mobile-navigation {
                background: #fff;
                height: calc(100vh - 48px);
                padding: 42px 22px
            }

            .contact-us-mobile-navigation-title {
                margin: 0 0 29px
            }

            @media (max-width: 599px) {
                .estates {
                    padding:0!important
                }
            }

            @media (max-width: 599px) {
                .estates-container {
                    padding:0 30px 40px
                }
            }

            .estates-featured {
                max-width: 921px
            }

            .estates-featured .gatsby-image-wrapper,.estates-featured img {
                display: block;
                width: 100%;
                margin: 0 0 39px;
                border-radius: 3px;
                max-height: 367px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .estates-featured .gatsby-image-wrapper,.estates-featured img {
                    height:255px;
                    border-radius: 0;
                    max-height: none
                }
            }

            .estates-header {
                color: #990d15;
                font-size: 16px;
                text-transform: uppercase
            }

            .estates-header,.estates-location {
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px
            }

            .estates-location {
                color: #303030;
                font-size: 30px
            }

            @media (max-width: 599px) {
                .estates-location {
                    font-size:24px;
                    font-weight: 700;
                    line-height: 32px
                }
            }

            .estates-content {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between
            }

            @media (max-width: 599px) {
                .estates-content {
                    flex-direction:column
                }
            }

            .estates-content .article-card-link {
                margin: 1rem 0
            }

            .estates-content .article-card-link .article-card {
                margin: 20px 0
            }

            @media (max-width: 599px) {
                .estates-content .article-card-link .article-card {
                    width:100%
                }
            }

            @media (max-width: 599px) {
                .estates-content .article-card-link .article-card-header {
                    height:225px
                }
            }

            .estates-content .article-card-link .article-card-details p {
                font-size: 14px;
                font-weight: 400
            }

            .estates .no-result {
                margin-top: 7rem
            }

            @media (max-width: 599px) {
                .estates .no-result {
                    margin-top:3rem
                }
            }

            .estates-list-content {
                display: flex;
                flex-direction: column;
                padding: 0 40px 40px;
                max-width: 1325px;
                margin: 0 auto;
                justify-content: space-between
            }

            @media (max-width: 599px) {
                .estates-list-content {
                    flex-direction:column;
                    margin: 0;
                    padding: 0
                }
            }

            .estates-list-content .search-input {
                margin: 0 1rem 4rem 0
            }

            @media (max-width: 599px) {
                .estates-list-content .search-input {
                    margin:0 auto
                }
            }

            .estates-list-content .search-input span {
                position: relative
            }

            .estates-list-content .search-input span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .estates-list-content .search-input span input {
                font-size: 15px;
                font-family: inherit;
                color: #fff;
                width: 431px;
                padding: .75rem 1.5rem .75rem 2.5rem;
                background: #850b13;
                border: 1px solid hsla(0,0%,100%,.66);
                border-radius: 3px;
                outline: 0
            }

            .estates-list-content .search-input span input::-webkit-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .estates-list-content .search-input span input:-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .estates-list-content .search-input span input::-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .estates-list-content .search-input span input::placeholder {
                color: hsla(0,0%,100%,.67)
            }

            @media (max-width: 599px) {
                .estates-list-content .search-input span input {
                    width:300px;
                    margin-bottom: .5rem
                }
            }

            .estates-list-content-cards {
                margin: -3.8rem 0 0;
                flex-wrap: wrap;
                justify-content: center;
                padding: 0 65px;
                display: flex
            }

            @media (max-width: 599px) {
                .estates-list-content-cards {
                    margin:-3.5rem 0 0
                }
            }

            .estates-list-content-cards .image-card-link,.estates-list-content-cards .minislider-card-link {
                margin: 1rem 20px
            }

            @media (max-width: 599px) {
                .estates-list-content-cards .minislider-card-link .minislider-card {
                    max-width:318px
                }
            }

            @media (max-width: 599px) {
                .estates-list-content-cards .minislider-card-link .minislider-card-header {
                    padding:0
                }
            }

            .estates-list-content-cards .minislider-card-link .minislider-card-details h3 {
                font-size: 18px;
                font-weight: 700
            }

            .estates-list-content-cards .no-result {
                margin-top: 7rem
            }

            @media (max-width: 599px) {
                .estates-list-content-cards .no-result {
                    margin-top:5rem
                }
            }

            .hero-banner {
                position: relative;
                height: calc(100vh - 229px);
                width: 100%;
                height: 703px
            }

            @media (max-width: 899px) {
                .hero-banner {
                    height:unset;
                    margin-top: 0
                }
            }

            .hero-banner-search .search-property {
                background: #1d2e41
            }

            .hero-banner-search .search-property-content {
                color: #fff
            }

            .hero-banner-search .search-property-content-container .search-property-select .css-yk16xz-control .css-1wa3eu0-placeholder,.hero-banner-search .search-property-content-container .search-property-select .css-yk16xz-control .css-g1d714-ValueContainer .css-1uccc91-singleValue {
                color: hsla(0,0%,100%,.71)
            }

            .hero-banner-search .search-property-content-container .search-property-select .css-yk16xz-control .css-g1d714-ValueContainer .css-b8ldur-Input {
                color: hsla(0,0%,100%,.71)!important
            }

            .hero-banner-search .search-property-content-container .search-property-select .css-2b097c-container .css-1pahdxg-control {
                border: 1px solid hsla(0,0%,100%,.71)
            }

            .hero-banner-search .search-property-content-container .search-property-select .css-2b097c-container .css-1pahdxg-control .css-g1d714-ValueContainer .css-1uccc91-singleValue {
                color: hsla(0,0%,100%,.71)
            }

            .hero-banner-search .search-property-content-container .search-property-select .css-2b097c-container .css-1pahdxg-control .css-g1d714-ValueContainer .css-b8ldur-Input {
                color: hsla(0,0%,100%,.71)!important
            }

            .hero-banner-link {
                display: none;
                position: absolute;
                z-index: 1
            }

            @media (max-width: 899px) {
                .hero-banner-link {
                    height:unset;
                    height: 600px;
                    display: block;
                    width: 100%
                }
            }

            @media (max-width: 599px) {
                .hero-banner-link {
                    height:258px
                }
            }

            .hero-banner-slider>.slick-list {
                height: calc(100vh - 229px);
                height: 703px
            }

            @media (max-width: 899px) {
                .hero-banner-slider>.slick-list {
                    height:unset;
                    height: 600px
                }
            }

            @media (max-width: 599px) {
                .hero-banner-slider>.slick-list {
                    height:258px
                }
            }

            .hero-banner-slider>.slick-list .slick-track,.hero-banner-slider>.slick-list .slick-track .slick-slide,.hero-banner-slider>.slick-list .slick-track .slick-slide img,.hero-banner-slider>.slick-list .slick-track .slick-slide>div {
                height: 100%
            }

            .hero-banner-slider>.slick-list .slick-track .slick-slide img {
                -o-object-fit: fill;
                object-fit: fill
            }

            .hero-banner-slider .gatsby-image-wrapper,.hero-banner-slider-image {
                height: 703px;
                height: 100%;
                width: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                background: #990d15
            }

            @media (max-width: 899px) {
                .hero-banner-slider .gatsby-image-wrapper,.hero-banner-slider-image {
                    height:unset;
                    height: 600px
                }
            }

            @media (max-width: 599px) {
                .hero-banner-slider .gatsby-image-wrapper,.hero-banner-slider-image {
                    height:258px
                }
            }

            .hero-banner-slider-video {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 130%!important;
                height: 110%
            }

            @media screen and (max-width: 812px) {
                .hero-banner-slider-video {
                    width:145%!important
                }
            }

            @media (min-width: 1800px) {
                .hero-banner-slider-video {
                    height:140%!important
                }
            }

            .hero-banner-content {
                position: relative;
                flex: 1 1 auto
            }

            .hero-banner-content-container {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                display: flex;
                flex-direction: column
            }

            @media (max-width: 899px) {
                .hero-banner-content-container {
                    position:relative;
                    background: #fff;
                    max-height: 400px;
                    box-shadow: 0 12px 24px -22px rgba(0,0,0,.5)
                }
            }

            @media (max-width: 599px) {
                .hero-banner-content-container {
                    margin-top:68px
                }
            }

            .hero-banner-layout-helper {
                width: 100%;
                height: 100%;
                position: relative
            }

            @media (max-width: 899px) {
                .hero-banner-layout-helper {
                    display:none
                }
            }

            .hero-banner-layout-helper:before {
                content: " ";
                position: absolute;
                background: rgba(153,13,21,.8);
                width: 43%;
                height: 100%
            }

            @media (min-width: 1400px) {
                .hero-banner-layout-helper:before {
                    width:50%
                }
            }

            .hero-banner-layout-helper .helper-link {
                width: 57%;
                height: 100%;
                position: absolute;
                right: 0;
                z-index: 1
            }

            .hero-banner-current-content {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                max-width: 1280px;
                padding: 0 30px;
                height: 100%;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start
            }

            @media (max-width: 899px) {
                .hero-banner-current-content {
                    position:static;
                    align-items: normal;
                    padding: 20px 20px 34px
                }
            }

            .hero-banner-current-logo {
                display: inline-block
            }

            .hero-banner-current-logo img {
                max-width: 275px;
                min-height: 80px
            }

            .hero-banner-current-logo-tag-line {
                max-width: 488px!important;
                width: 32vw
            }

            @media (max-width: 899px) {
                .hero-banner-current-logo {
                    position:absolute;
                    top: -600px;
                    left: 0;
                    background: rgba(153,13,21,.9);
                    padding: 15px 22px
                }

                .hero-banner-current-logo img {
                    min-height: unset
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-logo {
                    top:-326px
                }

                .hero-banner-current-logo img {
                    height: 30px;
                    width: unset
                }
            }

            .hero-banner-current-brand-desc {
                color: #fff;
                width: 40%;
                margin-top: 1.5rem;
                margin-bottom: 4rem;
                display: block
            }

            @media (max-width: 899px) {
                .hero-banner-current-brand-desc {
                    display:none
                }
            }

            .hero-banner-current-description {
                position: relative;
                display: flex;
                flex-direction: column;
                background: hsla(0,0%,100%,.95);
                width: 558px;
                border-radius: 3px;
                border-bottom-left-radius: 0;
                padding: 18px 22px 18px 30px;
                min-height: 120px
            }

            @media (max-width: 899px) {
                .hero-banner-current-description {
                    width:100%;
                    padding: 0;
                    margin-bottom: 28px;
                    min-height: unset
                }
            }

            .hero-banner-current-header {
                display: flex;
                justify-content: space-between;
                margin-bottom: 5px
            }

            @media (max-width: 899px) {
                .hero-banner-current-header {
                    align-items:first baseline;
                    margin-bottom: 18px
                }
            }

            .hero-banner-current-header h3 {
                font-size: 20px;
                font-weight: 700;
                line-height: 28px;
                color: #505050;
                margin: 0 15px 0 0
            }

            @media (max-width: 899px) {
                .hero-banner-current-header h3 {
                    color:#1d2e41
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-header h3 {
                    font-size:18px;
                    font-weight: 400;
                    line-height: 24px;
                    padding-right: 50px;
                    width: 60%
                }
            }

            .hero-banner-current-header p {
                display: block;
                flex: 0 0 auto;
                background: #990d15;
                padding: .5rem .75rem;
                color: #fff;
                font-size: 12px;
                font-weight: 700;
                border-radius: 2px;
                text-transform: capitalize
            }

            @media (max-width: 899px) {
                .hero-banner-current-header p {
                    position:absolute;
                    top: -600px;
                    right: 0
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-header p {
                    top:-326px;
                    font-size: 10px;
                    line-height: 15px;
                    padding: 4px 10px
                }
            }

            .hero-banner-current-title {
                margin-right: 10px
            }

            .hero-banner-current-location {
                font-size: 12px;
                color: #505050
            }

            @media (max-width: 899px) {
                .hero-banner-current-location {
                    width:60%
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-location {
                    margin-top:2rem;
                    width: 100%
                }
            }

            .hero-banner-current-details {
                display: flex;
                justify-content: space-between
            }

            .hero-banner-current-address {
                font-size: 15px;
                line-height: 21px;
                color: #505050;
                margin: 0 15px 0 0;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden
            }

            @media (max-width: 899px) {
                .hero-banner-current-address {
                    color:#505050
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-address {
                    font-size:12px;
                    line-height: 17px
                }
            }

            .hero-banner-current-price-range {
                flex: 0 0 auto;
                font-size: 12px;
                line-height: 17px;
                color: #505050;
                margin: 6px 0 0;
                text-align: right
            }

            @media (max-width: 899px) {
                .hero-banner-current-price-range {
                    position:absolute;
                    top: 0;
                    right: 0;
                    margin-top: 0
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-price-range {
                    font-size:10px;
                    line-height: 15px
                }
            }

            .hero-banner-current-price-value {
                font-size: 20px;
                font-weight: 700;
                line-height: 28px;
                color: #505050;
                white-space: nowrap
            }

            @media (max-width: 599px) {
                .hero-banner-current-price-value {
                    font-size:16px;
                    font-weight: 700;
                    line-height: 23px
                }
            }

            .hero-banner-current-spec {
                display: flex;
                justify-content: space-between;
                min-width: 421px;
                background: #1d2e41;
                border-radius: 0 0 0 3px;
                color: #fff;
                padding: 13px 29px;
                border-bottom-left-radius: 3px
            }

            .hero-banner-current-spec+.slider-nav-container {
                margin-top: 39px!important
            }

            @media (max-width: 899px) {
                .hero-banner-current-spec {
                    position:static;
                    width: 100%;
                    min-width: unset;
                    margin-bottom: 10px;
                    border-radius: 4px;
                    padding: 11px 16px
                }
            }

            .hero-banner-current-spec span {
                display: inline-flex;
                font-size: 12px;
                margin-right: 1rem
            }

            .hero-banner-current-spec span:last-child {
                margin-right: 0
            }

            @media (max-width: 899px) {
                .hero-banner-current-spec span {
                    font-size:10px;
                    margin-right: 10px
                }
            }

            .hero-banner-current-spec span img {
                margin-right: 7px
            }

            .hero-banner-current-link {
                font-size: 14px;
                text-decoration: none;
                color: #f9f9f9;
                padding: 9px 38px;
                border: 1px solid #f9f9f9;
                border-radius: 3px;
                display: inline-block
            }

            @media (max-width: 899px) {
                .hero-banner-current-link {
                    color:#fff;
                    text-align: center;
                    width: 100%;
                    background: #a52930;
                    border: 1px solid #cdcdcd;
                    border-radius: 4px;
                    padding: 7px 14px
                }
            }

            @media (max-width: 599px) {
                .hero-banner-current-link {
                    line-height:25px
                }
            }

            .hero-banner .slider-nav-container {
                display: flex;
                margin-top: 82px;
                margin-bottom: 44px
            }

            @media (max-width: 899px) {
                .hero-banner .slider-nav-container {
                    position:absolute;
                    margin-top: unset!important;
                    top: -100px;
                    left: 18px;
                    z-index: 2
                }
            }

            @media (max-width: 599px) {
                .hero-banner .slider-nav-container {
                    top:-68px;
                    background: #1d2e41;
                    width: 100%;
                    left: 0;
                    padding: 10px
                }
            }

            .hero-banner .slider-nav-container button {
                background: 0 0;
                border: none;
                padding: 0;
                margin-right: 24px
            }

            @media (max-width: 599px) {
                .hero-banner .slider-nav-container button {
                    margin-right:10px;
                    width: 51px;
                    height: 48px
                }
            }

            .hero-banner .slider-nav-container button:focus {
                outline: 0
            }

            @media (max-width: 599px) {
                .hero-banner .slider-nav-container button img {
                    width:100%;
                    height: 100%
                }
            }

            .hero-banner .slider-nav {
                cursor: pointer;
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
                width: 108px;
                height: 72px;
                -o-object-fit: cover;
                object-fit: cover;
                opacity: .5;
                transition: all .3s ease;
                border: 2px solid #fff
            }

            .hero-banner .slider-nav.active {
                -webkit-filter: none;
                filter: none;
                opacity: 1
            }

            @media (max-width: 599px) {
                .hero-banner .slider-nav {
                    width:51px;
                    height: 48px;
                    margin-right: 10px
                }
            }

            .hero-banner .next-item {
                position: absolute;
                bottom: 0;
                right: 0;
                z-index: 2;
                display: flex;
                flex-direction: column;
                padding: 13px 56px 13px 17px;
                background: hsla(0,0%,100%,.9);
                border: none;
                outline: 0;
                cursor: pointer;
                max-width: unset;
                transition: all .3s ease
            }

            @media (max-width: 899px) {
                .hero-banner .next-item {
                    color:#990d15;
                    text-align: left;
                    top: -100px;
                    bottom: unset;
                    right: 0;
                    max-width: 330px
                }

                .hero-banner .next-item img {
                    right: 15px!important
                }

                .hero-banner .next-item:hover img {
                    right: 10px!important
                }

                .hero-banner .next-item>span {
                    text-align: right
                }
            }

            @media (max-width: 599px) {
                .hero-banner .next-item {
                    top:-57px;
                    right: 10px;
                    padding: 8px 30px 9px 14px;
                    width: calc(100% - 213px)
                }

                .hero-banner .next-item>span {
                    font-size: 8px!important;
                    line-height: 11px
                }
            }

            .hero-banner .next-item>span {
                color: #505050!important;
                text-transform: uppercase;
                font-size: 12px;
                font-weight: 400!important;
                line-height: 17px
            }

            .hero-banner .next-item span.next-item-name {
                font-size: 20px;
                font-weight: 700!important;
                color: #990d15!important;
                line-height: 28px;
                text-align: left;
                width: 100%;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                text-transform: unset
            }

            @media (max-width: 599px) {
                .hero-banner .next-item span.next-item-name {
                    font-size:10px!important;
                    line-height: 1.3
                }
            }

            .hero-banner .next-item:hover {
                background: #fff;
                box-shadow: 0 5px 10px 0 rgba(0,0,0,.25)
            }

            .hero-banner .next-item:hover img {
                right: 1.125rem;
                transition: all .3s ease
            }

            .hero-banner .next-item img {
                position: absolute;
                top: 0;
                bottom: 0;
                right: 1.5rem;
                margin: auto;
                transition: all .3s ease
            }

            @media only screen and (min-width: 2560px) {
                .hero-banner,.hero-banner .hero-banner-slider>.slick-list {
                    height:1100px!important
                }
            }

            @media only screen and (min-width: 1367px) and (max-width:2559px) {
                .hero-banner,.hero-banner .hero-banner-slider>.slick-list {
                    height:825px!important
                }

                .hero-banner .hero-banner-slider>.slick-list .slick-track .slick-slide img {
                    -o-object-fit: fill!important;
                    object-fit: fill!important
                }
            }

            @media only screen and (max-width: 768px) {
                .hero-banner .hero-banner-slider>.slick-list .slick-track .slick-slide img {
                    -o-object-fit:fill!important;
                    object-fit: fill!important
                }
            }

            .news-events-list-content {
                display: flex;
                flex-direction: column;
                padding: 0 40px 40px;
                max-width: 1325px;
                margin: 0 auto;
                justify-content: space-between
            }

            @media (max-width: 599px) {
                .news-events-list-content {
                    flex-direction:column;
                    padding: 0
                }
            }

            .news-events-list-content-cards {
                margin: 1rem 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding: 0 65px
            }

            .news-events-list-content-cards .article-card-link {
                margin: 1rem 25px
            }

            @media (max-width: 599px) {
                .news-events-list-content-cards .article-card-link .article-card {
                    width:318px
                }
            }

            @media (max-width: 599px) {
                .news-events-list-content-cards .article-card-link .article-card-header {
                    height:225px
                }
            }

            .news-events-list-content-cards .article-card-link .article-card-details p {
                font-size: 14px;
                font-weight: 400
            }

            .news-events-list-pagination {
                text-align: center
            }

            @media (max-width: 599px) {
                .news-events-list-pagination {
                    display:none
                }
            }

            .news-events-list-load-more {
                display: none;
                text-align: center;
                margin: 74px 0
            }

            @media (max-width: 599px) {
                .news-events-list-load-more {
                    display:block
                }
            }

            .news-events-list-load-more-button {
                cursor: pointer;
                color: #8a8a8a;
                font-size: 14px;
                font-weight: 600;
                text-align: center;
                background: #e5e5e5;
                border: 0;
                border-radius: 2px;
                padding: 8px 21px
            }

            @media (max-width: 599px) {
                .news-events {
                    padding:0!important
                }
            }

            .news-events .gatsby-image-wrapper {
                display: block;
                height: 367px!important;
                width: 100%;
                max-width: 921px;
                margin: 0 0 39px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .news-events .gatsby-image-wrapper {
                    height:255px;
                    border-radius: 0
                }
            }

            .news-events-banner {
                display: block;
                height: 367px!important;
                width: 100%;
                max-width: 921px;
                margin: 0 0 39px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .news-events-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            @media (max-width: 599px) {
                .news-events-container {
                    padding:0 30px 40px
                }
            }

            .news-events-container-type {
                display: inline-block;
                color: #fff;
                font-size: 10px;
                font-weight: 600;
                line-height: 15px;
                background: #990d15;
                border-radius: 2px;
                padding: 3px 11px;
                margin: 0 0 12px;
                text-transform: uppercase
            }

            .news-events-container-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px
            }

            @media (max-width: 599px) {
                .news-events-container-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            .news-events-container-date {
                color: #505050;
                font-size: 14px;
                line-height: 20px;
                margin: 0 0 35px
            }

            .office-appointment {
                width: 100%;
                max-width: 895px;
                margin: 0 auto;
                padding: 33px 40px 150px
            }

            @media (max-width: 599px) {
                .office-appointment {
                    padding:0 0 50px
                }
            }

            .office-appointment-container {
                background: #fff
            }

            @media (max-width: 599px) {
                .office-appointment-header {
                    display:flex;
                    flex-direction: column-reverse
                }
            }

            .office-appointment-title-container {
                display: flex;
                margin: 0 0 16px;
                justify-content: space-between;
                flex-wrap: wrap
            }

            @media (max-width: 599px) {
                .office-appointment-title-container {
                    flex-direction:column-reverse;
                    padding: 0 24px
                }
            }

            .office-appointment-title-container h2 {
                color: #303030;
                font-size: 36px;
                line-height: 40px;
                margin: 0 15px 20px 10px
            }

            @media (max-width: 599px) {
                .office-appointment-title-container h2 {
                    font-size:30px;
                    font-weight: 600;
                    line-height: 32px;
                    margin: 0
                }
            }

            .office-appointment-book-now-button {
                align-self: flex-start;
                color: #fff;
                font-size: 14px;
                line-height: 20px;
                padding: 10px 20px;
                background: #990d15;
                border-radius: 3px;
                text-decoration: none;
                margin: 0 0 20px
            }

            @media (max-width: 599px) {
                .office-appointment-book-now-button {
                    margin:0 0 38px
                }
            }

            .office-appointment-banner {
                display: block;
                width: 100%;
                height: 290px;
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 4px;
                margin: 0 0 28px
            }

            @media (max-width: 599px) {
                .office-appointment-banner {
                    border-radius:0
                }
            }

            @media (max-width: 599px) {
                .office-appointment-content-container {
                    padding:0 24px 40px
                }
            }

            .office-appointment-description {
                color: #707070;
                font-size: 15px;
                line-height: 25px;
                text-align: center;
                max-width: 776px;
                margin: 0 auto 29px
            }

            .office-appointment-steps {
                padding: 0
            }

            .office-appointment-steps li {
                display: table-cell;
                width: 25%;
                padding: 10px
            }

            @media (max-width: 599px) {
                .office-appointment-steps li {
                    display:flex;
                    flex-direction: column;
                    width: 100%
                }
            }

            .office-appointment-steps li img {
                display: block;
                width: 100%;
                max-width: 150px;
                margin: 0 auto 10px
            }

            .office-appointment-steps li p {
                text-align: center;
                font-size: 14px;
                max-width: 200px;
                margin: 0 auto
            }

            .office-appointment-steps-title {
                color: #303030;
                font-size: 24px;
                font-weight: 700;
                text-align: center;
                margin: 0 0 40px
            }

            .our-neighborhood-list-content {
                display: flex;
                flex-direction: column;
                padding: 0 40px 40px;
                max-width: 1325px;
                margin: 0 auto;
                justify-content: space-between
            }

            @media (max-width: 599px) {
                .our-neighborhood-list-content {
                    flex-direction:column;
                    margin: 0;
                    padding: 0
                }
            }

            .our-neighborhood-list-content .search-input {
                margin: 0 1rem 4rem 0
            }

            @media (max-width: 599px) {
                .our-neighborhood-list-content .search-input {
                    margin:0 auto
                }
            }

            .our-neighborhood-list-content .search-input span {
                position: relative
            }

            .our-neighborhood-list-content .search-input span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .our-neighborhood-list-content .search-input span input {
                font-size: 15px;
                font-family: inherit;
                color: #fff;
                width: 431px;
                padding: .75rem 1.5rem .75rem 2.5rem;
                background: #850b13;
                border: 1px solid hsla(0,0%,100%,.66);
                border-radius: 3px;
                outline: 0
            }

            .our-neighborhood-list-content .search-input span input::-webkit-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .our-neighborhood-list-content .search-input span input:-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .our-neighborhood-list-content .search-input span input::-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .our-neighborhood-list-content .search-input span input::placeholder {
                color: hsla(0,0%,100%,.67)
            }

            @media (max-width: 599px) {
                .our-neighborhood-list-content .search-input span input {
                    width:300px;
                    margin-bottom: .5rem
                }
            }

            .our-neighborhood-list-content-cards {
                margin: -3.8rem 0 0;
                flex-wrap: wrap;
                justify-content: center;
                padding: 0 65px;
                display: flex
            }

            @media (max-width: 599px) {
                .our-neighborhood-list-content-cards {
                    margin:-3.5rem 0 0
                }
            }

            .our-neighborhood-list-content-cards .minislider-card-link {
                margin: 1rem 20px
            }

            @media (max-width: 599px) {
                .our-neighborhood-list-content-cards .minislider-card-link .minislider-card {
                    width:318px
                }
            }

            .our-neighborhood-list-content-cards .no-result {
                margin-top: 7rem
            }

            @media (max-width: 599px) {
                .our-neighborhood-list-content-cards .no-result {
                    margin-top:3rem
                }
            }

            @media (max-width: 599px) {
                .our-neighborhood {
                    padding:0!important
                }
            }

            @media (max-width: 599px) {
                .our-neighborhood-container {
                    padding:0 30px 40px
                }
            }

            .our-neighborhood-featured {
                max-width: 921px;
                position: relative;
                min-height: 367px
            }

            .our-neighborhood-featured .gatsby-image-wrapper,.our-neighborhood-featured img {
                width: 100%;
                max-height: 367px;
                -o-object-fit: cover;
                object-fit: cover
            }

            .our-neighborhood-featured img {
                display: block;
                margin: 0 0 39px;
                border-radius: 3px
            }

            @media (max-width: 599px) {
                .our-neighborhood-featured img {
                    height:255px;
                    border-radius: 0;
                    max-height: none
                }
            }

            .our-neighborhood-featured .featured-video-banner {
                height: 100%;
                overflow: hidden
            }

            .our-neighborhood-featured .featured-video-banner,.our-neighborhood-featured .featured-video-banner video {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 100%
            }

            @media screen and (max-width: 812px) {
                .our-neighborhood-featured .featured-video-banner video {
                    width:180%
                }
            }

            .our-neighborhood-header {
                color: #990d15;
                font-size: 16px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px;
                text-transform: uppercase
            }

            .our-neighborhood-location {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px
            }

            @media (max-width: 599px) {
                .our-neighborhood-location {
                    font-size:24px;
                    font-weight: 700;
                    line-height: 32px
                }
            }

            .our-neighborhood-content {
                display: flex;
                flex-wrap: wrap
            }

            @media (max-width: 599px) {
                .our-neighborhood-content {
                    flex-direction:column
                }
            }

            .our-neighborhood-content .article-card-link {
                margin: 1rem 0;
                width: 33.33333%
            }

            @media (max-width: 599px) {
                .our-neighborhood-content .article-card-link {
                    width:100%
                }
            }

            .our-neighborhood-content .article-card-link .article-card {
                margin: 20px 0;
                width: 93%
            }

            @media (max-width: 599px) {
                .our-neighborhood-content .article-card-link .article-card {
                    width:100%
                }
            }

            @media (max-width: 599px) {
                .our-neighborhood-content .article-card-link .article-card-header {
                    height:225px
                }
            }

            .our-neighborhood-content .article-card-link .article-card-details p {
                font-size: 14px;
                font-weight: 400
            }

            .our-neighborhood-overview {
                position: absolute;
                bottom: 0;
                padding: 0 30px 20px;
                width: 100%;
                background: linear-gradient(0deg,rgba(0,0,0,.811765),transparent)
            }

            .our-neighborhood-overview .category {
                align-self: flex-end;
                color: #fff;
                font-size: 10px;
                font-weight: 700;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 3px;
                padding: 3px 5px;
                margin-left: auto
            }

            .our-neighborhood-overview .title {
                margin-bottom: 0;
                color: #fff
            }

            @media (max-width: 599px) {
                .our-neighborhood-overview .title {
                    font-size:16px
                }
            }

            .our-neighborhood-overview .description {
                margin-top: 3px;
                color: #fff;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical
            }

            @media (max-width: 599px) {
                .our-neighborhood-overview .description {
                    font-size:14px
                }
            }

            .our-neighborhood .no-result {
                margin-top: 15rem
            }

            @media (max-width: 599px) {
                .our-neighborhood .no-result {
                    margin:3rem 0
                }
            }

            @media (max-width: 599px) {
                .property-amenity {
                    padding:0
                }
            }

            .property-amenity-content-container {
                padding: 38px 63px 57px
            }

            @media (max-width: 599px) {
                .property-amenity-content-container {
                    padding:38px 24px 40px
                }
            }

            .property-amenity .media-gallery {
                height: 420px;
                margin-bottom: 0;
                max-width: unset
            }

            @media (max-width: 599px) {
                .property-amenity .media-gallery {
                    height:253px
                }
            }

            .property-amenity h3 {
                color: #a52930;
                font-size: 15px;
                font-weight: 600;
                line-height: 25px;
                margin: 0 0 1px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .property-amenity h3 {
                    font-size:12px;
                    font-weight: 700
                }
            }

            .property-amenity h2 {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 30px
            }

            @media (max-width: 599px) {
                .property-amenity h2 {
                    font-size:24px;
                    font-weight: 700
                }
            }

            .property-amenity-details {
                color: #303030;
                font-size: 15px;
                font-weight: 300;
                line-height: 25px;
                margin: 0 0 37px;
                white-space: pre-wrap
            }

            @media (max-width: 599px) {
                .property-amenity-details {
                    font-size:13px;
                    line-height: 26px
                }
            }

            .property-amenity-list {
                width: 80%;
                cursor: pointer;
                padding: 5px;
                display: flex;
                flex-wrap: wrap
            }

            @media (max-width: 599px) {
                .property-amenity-list {
                    width:100%;
                    display: block;
                    text-align: center
                }

                .property-amenity-list button {
                    margin-bottom: 20px
                }
            }

            .property-amenity-list button {
                cursor: pointer;
                color: #9c2429;
                font-size: 14px;
                line-height: 20px;
                background: 0 0;
                padding: 10px 20px;
                border: 0;
                margin-right: 25px
            }

            .property-amenity-list button:focus {
                outline: 0
            }

            .property-amenity-list button.active {
                border: 1px solid #952024;
                border-radius: 3px
            }

            @media (max-width: 599px) {
                .property-concept {
                    padding:0
                }
            }

            .property-concept-content-container {
                padding: 38px 63px 57px
            }

            @media (max-width: 599px) {
                .property-concept-content-container {
                    padding:38px 24px 40px
                }
            }

            .property-concept .media-gallery {
                height: 420px;
                margin-bottom: 0;
                max-width: unset;
                border-radius: 0
            }

            @media (max-width: 599px) {
                .property-concept .media-gallery {
                    height:242px
                }
            }

            .property-concept h3 {
                color: #a52930;
                font-size: 15px;
                font-weight: 600;
                line-height: 25px;
                margin: 0 0 1px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .property-concept h3 {
                    font-size:12px;
                    font-weight: 700
                }
            }

            .property-concept h2 {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 17px
            }

            @media (max-width: 599px) {
                .property-concept h2 {
                    font-size:24px;
                    font-weight: 700
                }
            }

            .property-concept-details {
                color: #303030;
                font-size: 15px;
                line-height: 25px;
                white-space: pre-wrap
            }

            .property-concept .property-concept-details {
                font-size: 14px;
                font-weight: 300;
                line-height: 24px;
                margin: 10px 25px 37px 0
            }

            @media (max-width: 599px) {
                .property-concept .property-concept-details {
                    font-size:13px;
                    line-height: 26px
                }
            }

            .property-concept .property-concept-button {
                cursor: pointer;
                color: #fff;
                font-size: 15px;
                font-weight: 700;
                line-height: 25px;
                height: 40px;
                padding: 5px 15px;
                background: #a52930;
                border: none;
                border-radius: 3px;
                margin-top: 3rem
            }

            .property-floor-plan {
                display: flex;
                height: 100%
            }

            @media (max-width: 599px) {
                .property-floor-plan {
                    flex-direction:column
                }
            }

            .property-floor-plan-view {
                flex: 0 0 auto;
                width: 45%;
                background: #f2f2f2;
                padding: 82px 48px 33px 63px
            }

            @media (max-width: 599px) {
                .property-floor-plan-view {
                    height:483px;
                    width: 100%;
                    padding: 40px 24px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between
                }

                .property-floor-plan-view .slider {
                    margin-bottom: 40px!important
                }
            }

            .property-floor-plan-view .slider {
                margin-bottom: 100px
            }

            .property-floor-plan-view .view-floor-plan {
                cursor: pointer;
                color: #939393;
                font-size: 13px;
                font-weight: 600;
                line-height: 18px;
                height: 35px;
                background: 0 0;
                border: 1px solid #e2e2e2;
                border-radius: 3px;
                padding: 0 8px
            }

            .property-floor-plan-view .view-floor-plan img {
                height: 18px;
                vertical-align: bottom;
                margin-right: 8px
            }

            .property-floor-plan-view .view-floor-plan:hover {
                background: #fff
            }

            .property-floor-plan-view .view-navigation {
                display: flex;
                justify-content: space-between
            }

            .property-floor-plan-view .slider-navigation button {
                cursor: pointer;
                height: 35px;
                width: 35px;
                background: rgba(0,0,0,.25);
                border: none
            }

            .property-floor-plan-view .slider-navigation button:first-child {
                margin-right: 1px
            }

            .property-floor-plan-view .slider-navigation button:first-child img {
                height: 7px;
                transform: scaleX(-1)
            }

            .property-floor-plan-view .slider-navigation button img {
                height: 7px;
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            .property-floor-plan-details {
                flex: 1 1 auto;
                padding: 82px 60px 40px
            }

            @media (max-width: 599px) {
                .property-floor-plan-details {
                    padding:40px 24px
                }
            }

            .property-floor-plan-details h2 {
                color: #414141;
                font-size: 25px;
                line-height: 25px;
                margin: 0 0 20px
            }

            @media (max-width: 599px) {
                .property-floor-plan-details h2 {
                    color:#303030;
                    font-size: 24px;
                    line-height: 32px
                }
            }

            .property-floor-plan-details h4 {
                color: #303030;
                font-size: 13px;
                font-weight: 300;
                line-height: 22px;
                margin: 0
            }

            @media (max-width: 599px) {
                .property-floor-plan-details h4 {
                    font-size:12px;
                    text-align: center;
                    margin: 0 0 30px
                }
            }

            .property-floor-plan-details .unit-list {
                list-style: none;
                padding: 0;
                margin: 0
            }

            .property-floor-plan-details .unit-list li:not(:first-of-type) button {
                border-top: 1px solid #e2e2e2
            }

            .property-floor-plan-details .unit-list button {
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                color: #303030;
                font-size: 14px;
                font-weight: 600;
                line-height: 63px;
                background: 0;
                border: none;
                padding: 0;
                width: 100%
            }

            @media (max-width: 599px) {
                .property-floor-plan-details .unit-list button {
                    display:block;
                    line-height: 27px;
                    padding-bottom: 13px
                }

                .property-floor-plan-details .unit-list button span {
                    display: block
                }
            }

            .property-floor-plan-details .unit-list button.active {
                color: #990d15;
                font-weight: 700
            }

            .property-floor-plan-details table {
                width: 100%;
                border: 1px solid #aaa;
                border-radius: 3px;
                border-spacing: 0;
                margin-bottom: 38px
            }

            .property-floor-plan-details table td,.property-floor-plan-details table th {
                text-align: right
            }

            .property-floor-plan-details table td:first-child,.property-floor-plan-details table th:first-child {
                text-align: left
            }

            .property-floor-plan-details table thead {
                background: #990d15;
                white-space: nowrap
            }

            .property-floor-plan-details table thead th {
                color: #fff;
                font-size: 16px;
                font-weight: 600;
                line-height: 23px;
                padding: 14px 0 16px
            }

            @media (max-width: 599px) {
                .property-floor-plan-details table thead th {
                    font-size:12px
                }
            }

            .property-floor-plan-details table thead span {
                font-size: 12px;
                font-weight: 400
            }

            @media (max-width: 599px) {
                .property-floor-plan-details table thead span {
                    font-size:10px
                }
            }

            .property-floor-plan-details table tbody:before {
                content: " ";
                display: block;
                height: 14px
            }

            .property-floor-plan-details table tbody tr:not(:first-child) td {
                border-top: 1px solid #e2e2e2
            }

            .property-floor-plan-details table tfoot:before {
                content: " ";
                display: block;
                height: 30px
            }

            .property-floor-plan-details table tfoot:after {
                content: " ";
                display: block;
                height: 15px
            }

            .property-floor-plan-details table tfoot td {
                border-top: 1px solid #e2e2e2
            }

            .property-floor-plan-details table tr:before {
                content: " ";
                display: block;
                width: 19px
            }

            @media (max-width: 599px) {
                .property-floor-plan-details table tr:before {
                    width:13px
                }
            }

            .property-floor-plan-details table tr:after {
                content: " ";
                display: block;
                width: 29px
            }

            @media (max-width: 599px) {
                .property-floor-plan-details table tr:after {
                    width:13px
                }
            }

            .property-floor-plan-details table tbody td,.property-floor-plan-details table tfoot td {
                color: #58637e;
                font-size: 14px;
                line-height: 32px;
                padding-top: 0;
                padding-bottom: 0
            }

            @media (max-width: 599px) {
                .property-floor-plan-details table tbody td,.property-floor-plan-details table tfoot td {
                    font-size:12px
                }
            }

            .typical-floor-plan {
                margin-top: 10px;
                width: 100%
            }

            @media (max-width: 599px) {
                .property-location {
                    padding:0
                }
            }

            .property-location-content-container {
                padding: 38px 63px 57px
            }

            @media (max-width: 599px) {
                .property-location-content-container {
                    padding:38px 24px 40px
                }
            }

            .property-location-map {
                position: relative;
                border-radius: 3px;
                overflow: hidden;
                height: 420px;
                max-width: unset
            }

            @media (max-width: 599px) {
                .property-location-map {
                    border-radius:0
                }
            }

            .property-location-map #property-map {
                height: 420px;
                margin-bottom: 0;
                margin-left: -200px
            }

            @media (max-width: 899px) {
                .property-location-map #property-map {
                    margin-left:0
                }
            }

            @media (max-width: 599px) {
                .property-location-map #property-map {
                    height:242px
                }
            }

            .property-location-map .nearby-establishments {
                position: absolute;
                top: 27px;
                right: 32px;
                background: #fff;
                box-shadow: 0 15px 34px -10px hsla(0,0%,43.9%,.3);
                border-radius: 5px;
                padding: 24px 27px 13px;
                width: 280px
            }

            @media (max-width: 899px) {
                .property-location-map .nearby-establishments {
                    position:unset;
                    width: 100%;
                    box-shadow: unset
                }
            }

            .property-location-map .nearby-establishments h5 {
                color: #303030;
                font-size: 13px;
                font-weight: 600;
                margin: 0 0 30px
            }

            .property-location-map .nearby-establishments ul {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                max-height: 230px;
                list-style: none;
                padding: 0;
                margin: 0
            }

            .property-location-map .nearby-establishments ul li {
                display: flex;
                color: #505050;
                margin: 0 30px 21px 0;
                min-width: 110px
            }

            .property-location-map .nearby-establishments ul li.active {
                color: #a52930;
                font-weight: 600
            }

            .property-location-map .nearby-establishments ul li button {
                cursor: pointer;
                display: block;
                color: inherit;
                font-weight: inherit;
                font-size: 12px;
                line-height: 17px;
                background: 0 0;
                border: none;
                margin: 0;
                padding: 0
            }

            .property-location h3 {
                color: #a52930;
                font-size: 15px;
                font-weight: 600;
                line-height: 25px;
                margin: 0 0 1px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .property-location h3 {
                    font-size:12px;
                    font-weight: 700
                }
            }

            .property-location h2 {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 5px
            }

            @media (max-width: 599px) {
                .property-location h2 {
                    font-size:24px;
                    font-weight: 700
                }
            }

            .property-location-address {
                color: #303030;
                font-size: 15px;
                line-height: 25px;
                margin: 0 0 28px
            }

            @media (max-width: 599px) {
                .property-location-address {
                    font-size:13px
                }
            }

            .property-location-details {
                color: #303030;
                font-size: 15px;
                font-weight: 300;
                line-height: 25px;
                margin: 0 0 37px
            }

            @media (max-width: 599px) {
                .property-location-details {
                    font-size:13px;
                    line-height: 26px
                }
            }

            .property-location h5 {
                color: #303030;
                font-size: 15px;
                font-weight: 600;
                line-height: 20px
            }

            .property-location .landmarks {
                margin-bottom: 19px
            }

            .property-location .landmarks .landmark {
                cursor: pointer;
                color: #303030;
                font-size: 14px;
                padding: 12px 20px;
                margin: 0 20px 20px 0;
                background: #fff;
                border: 1px solid #e0e0e0;
                border-radius: 3px
            }

            .property-location .landmarks .landmark.active {
                border: 1px solid #a52930;
                color: #a52930
            }

            .property-location .markerLabel {
                padding-left: 70%
            }

            .custom-overlay {
                width: 42px;
                height: 42px;
                border-radius: 100%;
                background-color: #a52930;
                padding: 6px;
                position: absolute;
                transform: translate(-50%,-50%);
                z-index: 9999
            }

            .custom-overlay:before {
                content: "";
                position: absolute;
                bottom: -6px;
                left: 50%;
                transform: translateX(-50%);
                width: 0;
                border-top: 8px solid #a52930;
                border-left: 8px solid transparent;
                border-right: 8px solid transparent
            }

            .custom-overlay-content {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: 50%;
                border-radius: 100%
            }

            .fallback-image {
                height: 49px
            }

            @media (max-width: 599px) {
                .property-neighborhood {
                    padding:0
                }
            }

            .property-neighborhood-content-container {
                padding: 28px 92px 50px 63px
            }

            @media (max-width: 599px) {
                .property-neighborhood-content-container {
                    padding:38px 24px 40px
                }
            }

            .property-neighborhood-featured {
                position: relative;
                height: 420px;
                width: 100%;
                overflow: hidden
            }

            @media (max-width: 599px) {
                .property-neighborhood-featured {
                    height:260px;
                    border-radius: 0
                }
            }

            .property-neighborhood-featured-description {
                position: absolute;
                left: 47px;
                bottom: 34px
            }

            @media (max-width: 599px) {
                .property-neighborhood-featured-description {
                    left:15px;
                    bottom: 15px
                }
            }

            .property-neighborhood-featured-description .type {
                display: inline-block;
                color: #fff;
                font-size: 10px;
                font-weight: 800px;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 3px;
                padding: 3px 5px;
                margin-bottom: 10px
            }

            .property-neighborhood-featured-description h3 {
                color: #fff;
                font-size: 20px;
                font-weight: 700;
                text-align: left;
                margin: 0 0 6px
            }

            @media (max-width: 599px) {
                .property-neighborhood-featured-description h3 {
                    font-size:17px
                }
            }

            .property-neighborhood-featured-description p {
                color: #fff;
                font-size: 14px;
                font-weight: 300;
                line-height: 20px;
                margin: 0;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden;
                padding-right: 3rem
            }

            @media (max-width: 599px) {
                .property-neighborhood-featured-description p {
                    font-size:10px;
                    line-height: 16px
                }
            }

            .property-neighborhood-sub-title {
                color: #a52930;
                font-size: 15px;
                font-weight: 600;
                line-height: 25px;
                margin: 0 0 1px;
                text-transform: uppercase
            }

            .property-neighborhood-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 38px
            }

            .property-neighborhood-article-list {
                display: flex;
                flex-wrap: wrap
            }

            .property-neighborhood-article-list .article-card-link {
                width: 33.33333%
            }

            .property-neighborhood-article-list .article-card {
                margin-bottom: 10px;
                width: 93%
            }

            @media (max-width: 599px) {
                .property-neighborhood-article-list .article-card,.property-neighborhood-article-list .article-card-link {
                    width:100%
                }
            }

            .property-neighborhood-article-list .article-card-header {
                height: 195px
            }

            .property-neighborhood-article-list .article-card-details h3 {
                color: #505050;
                font-size: 17px;
                font-weight: 700;
                line-height: 20px
            }

            .property-neighborhood-article-list .article-card-details p {
                color: #505050;
                font-size: 13px;
                font-weight: 400
            }

            .property-neighborhood .no-result {
                margin-top: 15rem
            }

            @media (max-width: 599px) {
                .property-neighborhood .no-result {
                    margin:3rem 0
                }
            }

            .property-updates {
                height: 100%
            }

            .property-updates-view {
                width: 100%
            }

            .property-updates-view .media-gallery {
                height: 420px;
                margin: 0;
                border-radius: 0;
                max-width: unset
            }

            @media (max-width: 599px) {
                .property-updates-view .media-gallery {
                    height:242px
                }
            }

            .property-updates-details {
                padding: 38px 60px 52px 54px
            }

            @media (max-width: 599px) {
                .property-updates-details {
                    width:100%;
                    padding: 38px 20px 52px
                }
            }

            .property-updates-details .update-header {
                display: flex;
                justify-content: space-between;
                margin-bottom: 38px
            }

            @media (max-width: 599px) {
                .property-updates-details .update-header {
                    display:block
                }
            }

            .property-updates-details h3 {
                display: none;
                color: #a52930;
                font-size: 12px;
                font-weight: 700;
                line-height: 25px;
                margin: 0 0 1px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .property-updates-details h3 {
                    display:block
                }
            }

            .property-updates-details h2 {
                color: #414141;
                font-size: 28px;
                font-weight: 600;
                margin: 0 5px 0 0
            }

            @media (max-width: 599px) {
                .property-updates-details h2 {
                    color:#303030;
                    font-size: 24px;
                    font-weight: 700;
                    line-height: 32px;
                    margin: 0 0 15px
                }
            }

            .property-updates-details h4 {
                color: #58637e;
                font-size: 14px;
                font-weight: 600;
                margin: 0 0 15px
            }

            .property-updates-details .details {
                color: grey;
                font-size: 14px;
                line-height: 25px;
                margin-bottom: 32px
            }

            @media (max-width: 599px) {
                .property-updates-details .details {
                    font-size:13px;
                    font-weight: 300;
                    color: #303030;
                    line-height: 26px
                }
            }

            .property-updates .construction-list .construction {
                margin-bottom: 17px
            }

            .property-updates .construction-list h5 {
                color: #990d15;
                font-size: 14px;
                font-weight: 400;
                line-height: 25px;
                margin: 0 0 4px
            }

            .property-updates .construction-list .percentage-container {
                display: flex;
                align-items: center
            }

            .property-updates .construction-list .percentage-container span {
                color: grey;
                font-size: 14px;
                line-height: 25px;
                width: 88px
            }

            .property-updates .construction-list .percentage-container .percentage {
                flex: 1 1 auto;
                height: 8px;
                background: #eee;
                border-radius: 4px;
                overflow: hidden
            }

            .property-updates .construction-list .percentage-container .percentage .value {
                height: 100%;
                background: #9c151d;
                border-radius: 4px
            }

            .pursuit-passion-content {
                display: flex;
                flex-direction: column;
                padding: 0 40px 40px;
                max-width: 1325px;
                margin: 0 auto;
                justify-content: space-between
            }

            @media (max-width: 599px) {
                .pursuit-passion-content {
                    flex-direction:column;
                    padding: 0
                }
            }

            .pursuit-passion-content .search-input {
                margin: 0 1rem 4rem 0
            }

            @media (max-width: 599px) {
                .pursuit-passion-content .search-input {
                    margin:0 auto
                }
            }

            .pursuit-passion-content .search-input span {
                position: relative
            }

            .pursuit-passion-content .search-input span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .pursuit-passion-content .search-input span input {
                font-size: 15px;
                font-family: inherit;
                color: #fff;
                width: 431px;
                padding: .75rem 1.5rem .75rem 2.5rem;
                background: #850b13;
                border: 1px solid hsla(0,0%,100%,.66);
                border-radius: 3px;
                outline: 0
            }

            .pursuit-passion-content .search-input span input::-webkit-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .pursuit-passion-content .search-input span input:-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .pursuit-passion-content .search-input span input::-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .pursuit-passion-content .search-input span input::placeholder {
                color: hsla(0,0%,100%,.67)
            }

            @media (max-width: 599px) {
                .pursuit-passion-content .search-input span input {
                    width:300px;
                    margin-bottom: .5rem
                }
            }

            .pursuit-passion-content .no-result {
                margin-top: 2rem
            }

            .pursuit-passion-content-subscribe {
                margin: 2rem 0 1rem;
                padding: 0 110px
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-subscribe {
                    padding:0 20px
                }
            }

            .pursuit-passion-content-subscribe-texts {
                margin-right: 25px
            }

            .pursuit-passion-content-subscribe-card {
                background: red;
                margin: 0 auto;
                padding: 17px 20px 4px 24px;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3);
                background: #fff;
                border-radius: 3px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-subscribe-card {
                    flex-direction:column;
                    padding: 19px 19px 4px
                }
            }

            .pursuit-passion-content-subscribe-card-header {
                font-size: 12px;
                color: #505050;
                margin: 0;
                opacity: .5
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-subscribe-card-header {
                    margin:0 0 4px
                }
            }

            .pursuit-passion-content-subscribe-card-title {
                font-size: 16px;
                font-weight: 600;
                color: #505050;
                margin: 0 0 15px
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-subscribe-card-title {
                    font-size:15px;
                    margin: 0 0 25px
                }
            }

            .pursuit-passion-content-subscribe-card button {
                color: #fff;
                background: #990d15;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: none;
                cursor: pointer;
                width: 149px;
                height: 44px;
                padding: 0;
                margin: 0 0 15px;
                line-height: 40px;
                text-align: center;
                text-decoration: none
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-subscribe-card button {
                    width:100%;
                    height: 36px;
                    font-size: 12px;
                    line-height: 36px
                }
            }

            .pursuit-passion-content-cards {
                margin: 1rem 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding: 0 65px
            }

            .pursuit-passion-content-cards .article-card-link {
                margin: 1rem 25px
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-cards .article-card-link .article-card {
                    width:318px
                }
            }

            @media (max-width: 599px) {
                .pursuit-passion-content-cards .article-card-link .article-card-header {
                    height:225px
                }
            }

            .pursuit-passion-content-cards .article-card-link .article-card-details p {
                font-size: 14px;
                font-weight: 400
            }

            .pursuit-passion-pagination {
                text-align: center
            }

            @media (max-width: 599px) {
                .pursuit-passion-pagination {
                    display:none
                }
            }

            .pursuit-passion-load-more {
                display: none;
                text-align: center;
                margin: 74px 0
            }

            @media (max-width: 599px) {
                .pursuit-passion-load-more {
                    display:block
                }
            }

            .pursuit-passion-load-more-button {
                cursor: pointer;
                color: #8a8a8a;
                font-size: 14px;
                font-weight: 600;
                text-align: center;
                background: #e5e5e5;
                border: 0;
                border-radius: 2px;
                padding: 8px 21px
            }

            .pursuit-passion-subscription-form {
                padding: 6rem 3rem 1rem
            }

            @media (max-width: 599px) {
                .pursuit-passion-subscription-form {
                    padding:6rem 1.5rem 3rem
                }
            }

            @media (max-width: 599px) {
                .pursuit-of-passion {
                    padding:0!important
                }
            }

            .pursuit-of-passion-banner {
                display: block;
                width: 100%;
                margin: 0 0 39px;
                border-radius: 3px;
                max-height: 367px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .pursuit-of-passion-container {
                    padding:0 30px 40px
                }
            }

            .pursuit-of-passion-container-type {
                display: inline-block;
                color: #fff;
                font-size: 10px;
                font-weight: 600;
                line-height: 15px;
                background: #990d15;
                border-radius: 2px;
                padding: 3px 11px;
                margin: 0 0 12px;
                text-transform: uppercase
            }

            .pursuit-of-passion-container-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 6px
            }

            @media (max-width: 599px) {
                .pursuit-of-passion-container-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            .pursuit-of-passion-container-date {
                color: #505050;
                font-size: 14px;
                line-height: 20px;
                margin: 0 0 35px
            }

            .mdor-login {
                min-height: 100vh;
                width: 100%;
                background: url(/images/mdor-background.png) no-repeat 50%/cover;
                padding: 138px 20px 48px
            }

            @media (max-width: 599px) {
                .mdor-login {
                    padding:90px 22px 170px
                }
            }

            .mdor-login-company-logo {
                display: block;
                margin: 0 auto 9px
            }

            .mdor-login-title {
                color: #a42930;
                font-size: 16px;
                font-weight: 600;
                text-align: center;
                margin: 0 0 28px
            }

            .mdor-login-content {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                max-width: 500px;
                margin: 0 auto
            }

            .mdor-login-form-error {
                display: block;
                color: #ce6a6a;
                font-size: 12px;
                text-align: center;
                background: #f0dada;
                border-radius: 4px;
                padding: 5px 10px;
                width: 100%
            }

            .mdor-login-form-error:empty {
                display: none
            }

            .mdor-login-form-container {
                background: #fff;
                box-shadow: 0 22px 44px -20px rgba(0,0,0,.5);
                border-radius: 10px;
                padding: 50px 80px 75px;
                margin-bottom: 50px
            }

            @media (max-width: 599px) {
                .mdor-login-form-container {
                    padding:40px 25px
                }
            }

            .mdor-login-form-container .i-agree-container {
                margin-left: .75rem;
                margin-right: .75rem;
                margin-top: 15px;
                font-size: 12px
            }

            .mdor-login-form-container .i-agree-container label {
                margin-left: -4px;
                margin-right: 4px
            }

            .mdor-login-form-container .i-agree-container a {
                color: #a4292f;
                text-decoration: none
            }

            .mdor-login-form-container .i-agree-container p {
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content;
                color: red;
                margin: 10px auto 0
            }

            .mdor-login-form-container .recaptcha-container {
                display: block;
                margin: 15px auto
            }

            .mdor-login-form-container .recaptcha-container p {
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content;
                color: red;
                margin: 10px auto 0;
                font-size: 12px
            }

            .mdor-login-form-submit {
                color: #fff;
                font-size: 13px;
                font-weight: 700;
                text-align: center;
                background: #a42930;
                box-shadow: 0 1px 4px 0 rgba(47,114,169,.5);
                border: 0;
                border-radius: 4px;
                width: 100%;
                height: 40px;
                margin: 25px 0 35px
            }

            .mdor-login-support-link {
                color: #9b9b9b;
                font-size: 12px;
                line-height: 20px;
                letter-spacing: .5px;
                text-align: center;
                margin: 0
            }

            .mdor-login-support-link button {
                cursor: pointer;
                background: 0 0;
                border: 0;
                padding: 0;
                color: #a42930
            }

            .mdor-login-footer {
                color: #fff;
                font-size: 12px;
                letter-spacing: 1px;
                text-align: center;
                line-height: 20px
            }

            .mdor-viewer {
                text-align: center
            }

            .mdor-viewer .react-pdf__Document {
                display: grid;
                place-items: center
            }

            .mdor-viewer__canvas {
                pointer-events: none
            }

            .mdor-viewer__pager {
                display: inline-flex;
                align-items: center;
                background: #fff;
                border-radius: 8px;
                width: auto;
                padding: 0 10px;
                position: fixed;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                box-shadow: 0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24)
            }

            .mdor-viewer__pager p {
                margin: 10px 15px;
                color: #a5a5a5;
                font-size: 12px
            }

            .mdor-viewer__pager-btn {
                background-color: transparent;
                border: none;
                cursor: pointer
            }

            .mdor-viewer__pager-btn:disabled {
                cursor: not-allowed
            }

            .mdor-viewer__pager-btn:focus {
                outline: 0
            }

            .mdor-viewer__zoom-btn {
                position: fixed;
                right: 15px;
                background-color: #fff;
                box-shadow: 0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
                border: none;
                font-size: 24px;
                border-radius: 100%;
                width: 40px;
                height: 40px;
                text-align: center;
                cursor: pointer
            }

            .mdor-viewer__zoom-btn:disabled {
                background-color: #bbb
            }

            .mdor-viewer__zoom-btn:focus {
                outline: 0
            }

            .mdor-viewer__zoom-btn--in {
                top: 15px
            }

            .mdor-viewer__zoom-btn--out {
                top: 65px
            }

            .mdor-viewer__zoom-btn--down {
                top: 115px;
                display: grid;
                place-items: center;
                font-size: 15px;
                color: #000
            }

            .mdor-viewer__loading {
                color: #990d15;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%)
            }

            .featured-card-container {
                margin: -45px auto 0;
                position: relative;
                width: 1024px;
                background: #fff;
                border-radius: 3px;
                overflow: hidden
            }

            @media (max-width: 899px) {
                .featured-card-container {
                    width:80%
                }
            }

            @media (max-width: 1399px) {
                .featured-card-container {
                    width:80%
                }
            }

            @media (max-width: 599px) {
                .featured-card-container {
                    margin:0 auto;
                    width: 100%;
                    border-radius: 0
                }
            }

            .featured-card-item {
                position: relative;
                height: 100%
            }

            .featured-card-slider {
                height: 367px;
                justify-content: center
            }

            @media (max-width: 599px) {
                .featured-card-slider {
                    height:258px
                }
            }

            .featured-card-slider>.slick-list,.featured-card-slider>.slick-list .slick-track,.featured-card-slider>.slick-list .slick-track .slick-slide,.featured-card-slider>.slick-list .slick-track .slick-slide>div {
                height: 100%
            }

            .featured-card-slider img {
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                background: #fff;
                background-position: 50%
            }

            @media (max-width: 599px) {
                .featured-card-slider img {
                    height:258px
                }
            }

            .featured-card-slider .slider-overlay {
                position: absolute;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                color: #fff;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background-image: linear-gradient(180deg,hsla(0,0%,100%,0),rgba(0,0,0,.576471));
                width: 100%;
                padding: 11rem 16rem 1.5rem 3.5rem
            }

            @media (max-width: 599px) {
                .featured-card-slider .slider-overlay {
                    padding:13px 18px
                }
            }

            .featured-card-slider .slider-overlay-type {
                align-self: flex-start;
                color: #fff;
                font-size: 10px;
                font-weight: 800px;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 3px;
                padding: 3px 5px;
                margin: 0 0 27px
            }

            .featured-card-slider .slider-overlay-title {
                color: #fff;
                font-weight: 700;
                font-size: 20px;
                margin: 0 0 7px
            }

            @media (max-width: 599px) {
                .featured-card-slider .slider-overlay-title {
                    font-size:14px
                }
            }

            .featured-card-slider .slider-overlay-description {
                color: #fff;
                font-size: 14px;
                font-weight: 300;
                line-height: 18px;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden
            }

            @media (max-width: 599px) {
                .featured-card-slider .slider-overlay-description {
                    font-size:10px
                }
            }

            .featured-card-overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center
            }

            .featured-card-overlay-navigation {
                position: absolute;
                top: 18rem;
                right: 3rem
            }

            @media (max-width: 599px) {
                .featured-card-overlay-navigation {
                    top:1rem;
                    right: 1rem
                }
            }

            .featured-card-overlay-navigation button {
                cursor: pointer;
                height: 35px;
                width: 35px;
                background: hsla(0,0%,98.8%,.51);
                border: none
            }

            .featured-card-overlay-navigation button:first-child {
                margin-right: 1px
            }

            .featured-card-overlay-navigation button:first-child img {
                height: 10px;
                transform: scaleX(-1)
            }

            .featured-card-overlay-navigation button img {
                height: 10px
            }

            .featured-card-overlay-navigation button:focus {
                outline: 0
            }

            .slick-loading .slick-list {
                background: #fff url(data:image/gif;base64,R0lGODlhIAAgAPUAAP///wAAAPr6+sTExOjo6PDw8NDQ0H5+fpqamvb29ubm5vz8/JKSkoaGhuLi4ri4uKCgoOzs7K6urtzc3D4+PlZWVmBgYHx8fKioqO7u7kpKSmxsbAwMDAAAAM7OzsjIyNjY2CwsLF5eXh4eHkxMTLCwsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAIAAgAAAG/0CAcEgkFjgcR3HJJE4SxEGnMygKmkwJxRKdVocFBRRLfFAoj6GUOhQoFAVysULRjNdfQFghLxrODEJ4Qm5ifUUXZwQAgwBvEXIGBkUEZxuMXgAJb1dECWMABAcHDEpDEGcTBQMDBQtvcW0RbwuECKMHELEJF5NFCxm1AAt7cH4NuAOdcsURy0QCD7gYfcWgTQUQB6Zkr66HoeDCSwIF5ucFz3IC7O0CC6zx8YuHhW/3CvLyfPX4+OXozKnDssBdu3G/xIHTpGAgOUPrZimAJCfDPYfDin2TQ+xeBnWbHi37SC4YIYkQhdy7FvLdpwWvjA0JyU/ISyIx4xS6sgfkNS4me2rtVKkgw0JCb8YMZdjwqMQ2nIY8BbcUQNVCP7G4MQq1KRivR7tiDEuEFrggACH5BAAKAAEALAAAAAAgACAAAAb/QIBwSCQmNBpCcckkEgREA4ViKA6azM8BEZ1Wh6LOBls0HA5fgJQ6HHQ6InKRcWhA1d5hqMMpyIkOZw9Ca18Qbwd/RRhnfoUABRwdI3IESkQFZxB4bAdvV0YJQwkDAx9+bWcECQYGCQ5vFEQCEQoKC0ILHqUDBncCGA5LBiHCAAsFtgqoQwS8Aw64f8m2EXdFCxO8INPKomQCBgPMWAvL0n/ff+jYAu7vAuxy8O/myvfX8/f7/Arq+v0W0HMnr9zAeE0KJlQkJIGCfE0E+PtDq9qfDMogDkGmrIBCbNQUZIDosNq1kUsEZJBW0dY/b0ZsLViQIMFMW+RKKgjFzp4fNokPIdki+Y8JNVxA79jKwHAI0G9JGw5tCqDWTiFRhVhtmhVA16cMJTJ1OnVIMo1cy1KVI5NhEAAh+QQACgACACwAAAAAIAAgAAAG/0CAcEgkChqNQnHJJCYWRMfh4CgamkzFwBOdVocNCgNbJAwGhKGUOjRQKA1y8XOGAtZfgIWiSciJBWcTQnhCD28Qf0UgZwJ3XgAJGhQVcgKORmdXhRBvV0QMY0ILCgoRmIRnCQIODgIEbxtEJSMdHZ8AGaUKBXYLIEpFExZpAG62HRRFArsKfn8FIsgjiUwJu8FkJLYcB9lMCwUKqFgGHSJ5cnZ/uEULl/CX63/x8KTNu+RkzPj9zc/0/Cl4V0/APDIE6x0csrBJwybX9DFhBhCLgAilIvzRVUriKHGlev0JtyuDvmsZUZlcIiCDnYu7KsZ0UmrBggRP7n1DqcDJEzciOgHwcwTyZEUmIKEMFVIqgyIjpZ4tjdTxqRCMPYVMBYDV6tavUZ8yczpkKwBxHsVWtaqo5tMgACH5BAAKAAMALAAAAAAgACAAAAb/QIBwSCQuBgNBcck0FgvIQtHRZCYUGSJ0IB2WDo9qUaBQKIXbLsBxOJTExUh5mB4iDo0zXEhWJNBRQgZtA3tPZQsAdQINBwxwAnpCC2VSdQNtVEQSEkOUChGSVwoLCwUFpm0QRAMVFBQTQxllCqh0kkIECF0TG68UG2O0foYJDb8VYVa0alUXrxoQf1WmZnsTFA0EhgCJhrFMC5Hjkd57W0jpDsPDuFUDHfHyHRzstNN78PPxHOLk5dwcpBuoaYk5OAfhXHG3hAy+KgLkgNozqwzDbgWYJQyXsUwGXKNA6fnYMIO3iPeIpBwyqlSCBKUqEQk5E6YRmX2UdAT5kEnHKkQ5hXjkNqTPtKAARl1sIrGoxSFNuSEFMNWoVCxEpiqyRlQY165wEHELAgAh+QQACgAEACwAAAAAIAAgAAAG/0CAcEgsKhSLonJJTBIFR0GxwFwmFJlnlAgaTKpFqEIqFJMBhcEABC5GjkPz0KN2tsvHBH4sJKgdd1NHSXILah9tAmdCC0dUcg5qVEQfiIxHEYtXSACKnWoGXAwHBwRDGUcKBXYFi0IJHmQEEKQHEGGpCnp3AiW1DKFWqZNgGKQNA65FCwV8bQQHJcRtds9MC4rZitVgCQbf4AYEubnKTAYU6eoUGuSpu3fo6+ka2NrbgQAE4eCmS9xVAOW7Yq7IgA4Hpi0R8EZBhDshOnTgcOtfM0cAlTigILFDiAFFNjk8k0GZgAxOBozouIHIOyKbFixIkECmIyIHOEiEWbPJTTQ5FxcVOMCgzUVCWwAcyZJvzy45ADYVZNIwTlIAVfNB7XRVDLxEWLQ4E9JsKq+rTdsMyhcEACH5BAAKAAUALAAAAAAgACAAAAb/QIBwSCwqFIuicklMEgVHQVHKVCYUmWeUWFAkqtOtEKqgAsgFcDFyHJLNmbZa6x2Lyd8595h8C48RagJmQgtHaX5XZUYKQ4YKEYSKfVKPaUMZHwMDeQBxh04ABYSFGU4JBpsDBmFHdXMLIKofBEyKCpdgspsOoUsLXaRLCQMgwky+YJ1FC4POg8lVAg7U1Q5drtnHSw4H3t8HDdnZy2Dd4N4Nzc/QeqLW1bnM7rXuV9tEBhQQ5UoCbJDmWKBAQcMDZNhwRVNCYANBChZYEbkVCZOwASEcCDFQ4SEDIq6WTVqQIMECBx06iCACQQPBiSabHDqzRUTKARMhSFCDrc+WNQIcOoRw5+ZIHj8ADqSEQBQAwKKLhIzowEEeGKQ0owIYkPKjHihZoBKi0KFE01b4zg7h4y4IACH5BAAKAAYALAAAAAAgACAAAAb/QIBwSCwqFIuicklMEgVHQVHKVCYUmWeUWFAkqtOtEKqgAsgFcDFyHJLNmbZa6x2Lyd8595h8C48RagJmQgtHaX5XZUUJeQCGChGEin1SkGlubEhDcYdOAAWEhRlOC12HYUd1eqeRokOKCphgrY5MpotqhgWfunqPt4PCg71gpgXIyWSqqq9MBQPR0tHMzM5L0NPSC8PCxVUCyeLX38+/AFfXRA4HA+pjmoFqCAcHDQa3rbxzBRD1BwgcMFIlidMrAxYICHHA4N8DIqpsUWJ3wAEBChQaEBnQoB6RRr0uARjQocMAAA0w4nMz4IOaU0lImkSngYKFc3ZWyTwJAALGK4fnNA3ZOaQCBQ22wPgRQlSIAYwSfkHJMrQkTyEbKFzFydQq15ccOAjUEwQAIfkEAAoABwAsAAAAACAAIAAABv9AgHBILCoUi6JySUwSBUdBUcpUJhSZZ5RYUCSq060QqqACyAVwMXIcks2ZtlrrHYvJ3zn3mHwLjxFqAmZCC0dpfldlRQl5AIYKEYSKfVKQaW5sSENxh04ABYSFGU4LXYdhR3V6p5GiQ4oKmGCtjkymi2qGBZ+6eo+3g8KDvYLDxKrJuXNkys6qr0zNygvHxL/V1sVD29K/AFfRRQUDDt1PmoFqHgPtBLetvMwG7QMes0KxkkIFIQNKDhBgKvCh3gQiqmxt6NDBAAEIEAgUOHCgBBEH9Yg06uWAIQUABihQMACgBEUHTRwoUEOBIcqQI880OIDgm5ABDA8IgUkSwAAyij1/jejAARPPIQwONBCnBAJDCEOOCnFA8cOvEh1CEJEqBMIBEDaLcA3LJIEGDe/0BAEAIfkEAAoACAAsAAAAACAAIAAABv9AgHBILCoUi6JySUwSBUdBUcpUJhSZZ5RYUCSq060QqqACyAVwMXIcks2ZtlrrHYvJ3zn3mHwLjxFqAmZCC0dpfldlRQl5AIYKEYSKfVKQaW5sSENxh04ABYSFGU4LXYdhR3V6p5GiQ4oKmGCtjkymi2qGBZ+6eo+3g8KDvYLDxKrJuXNkys6qr0zNygvHxL/V1sVDDti/BQccA8yrYBAjHR0jc53LRQYU6R0UBnO4RxmiG/IjJUIJFuoVKeCBigBN5QCk43BgFgMKFCYUGDAgFEUQRGIRYbCh2xACEDcAcHDgQDcQFGf9s7VkA0QCI0t2W0DRw68h8ChAEELSJE8xijBvVqCgIU9PjwA+UNzG5AHEB9xkDpk4QMGvARQsEDlKxMCALDeLcA0rqEEDlWCCAAAh+QQACgAJACwAAAAAIAAgAAAG/0CAcEgsKhSLonJJTBIFR0FRylQmFJlnlFhQJKrTrRCqoALIBXAxchySzZm2Wusdi8nfOfeYfAuPEWoCZkILR2l+V2VFCXkAhgoRhIp9UpBpbmxIQ3GHTgAFhIUZTgtdh2FHdXqnkaJDigqYYK2OTKaLaoYFn7p6j0wOA8PEAw6/Z4PKUhwdzs8dEL9kqqrN0M7SetTVCsLFw8d6C8vKvUQEv+dVCRAaBnNQtkwPFRQUFXOduUoTG/cUNkyYg+tIBlEMAFYYMAaBuCekxmhaJeSeBgiOHhw4QECAAwcCLhGJRUQCg3RDCmyUVmBYmlOiGqmBsPGlyz9YkAlxsJEhqCubABS9AsPgQAMqLQfM0oTMwEZ4QpLOwvMLxAEEXIBG5aczqtaut4YNXRIEACH5BAAKAAoALAAAAAAgACAAAAb/QIBwSCwqFIuicklMEgVHQVHKVCYUmWeUWFAkqtOtEKqgAsgFcDFyHJLNmbZa6x2Lyd8595h8C48RahAQRQtHaX5XZUUJeQAGHR0jA0SKfVKGCmlubEhCBSGRHSQOQwVmQwsZTgtdh0UQHKIHm2quChGophuiJHO3jkwOFB2UaoYFTnMGegDKRQQG0tMGBM1nAtnaABoU3t8UD81kR+UK3eDe4nrk5grR1NLWegva9s9czfhVAgMNpWqgBGNigMGBAwzmxBGjhACEgwcgzAPTqlwGXQ8gMgAhZIGHWm5WjelUZ8jBBgPMTBgwIMGCRgsygVSkgMiHByD7DWDmx5WuMkZqDLCU4gfAq2sACrAEWFSRLjUfWDopCqDTNQIsJ1LF0yzDAA90UHV5eo0qUjB8mgUBACH5BAAKAAsALAAAAAAgACAAAAb/QIBwSCwqFIuickk0FIiCo6A4ZSoZnRBUSiwoEtYipNOBDKOKKgD9DBNHHU4brc4c3cUBeSOk949geEQUZA5rXABHEW4PD0UOZBSHaQAJiEMJgQATFBQVBkQHZKACUwtHbX0RR0mVFp0UFwRCBSQDSgsZrQteqEUPGrAQmmG9ChFqRAkMsBd4xsRLBBsUoG6nBa14E4IA2kUFDuLjDql4peilAA0H7e4H1udH8/Ps7+3xbmj0qOTj5mEWpEP3DUq3glYWOBgAcEmUaNI+DBjwAY+dS0USGJg4wABEXMYyJNvE8UOGISKVCNClah4xjg60WUKyINOCUwrMzVRARMGENWQ4n/jpNTKTm15J/CTK2e0MoD+UKmHEs4onVDVVmyqdpAbNR4cKTjqNSots07EjzzJh1S0IADsAAAAAAAAAAAA=) 50% no-repeat
            }

            @font-face {
                font-family: slick;
                font-weight: 400;
                font-style: normal;
                src: url(data:application/vnd.ms-fontobject;base64,AAgAAGQHAAABAAIAAAAAAAIABQkAAAAAAAABAJABAAAAAExQAQAAgCAAAAAAAAAAAAAAAAEAAAAAAAAATxDE8AAAAAAAAAAAAAAAAAAAAAAAAAoAcwBsAGkAYwBrAAAADgBSAGUAZwB1AGwAYQByAAAAFgBWAGUAcgBzAGkAbwBuACAAMQAuADAAAAAKAHMAbABpAGMAawAAAAAAAAEAAAANAIAAAwBQRkZUTW3RyK8AAAdIAAAAHEdERUYANAAGAAAHKAAAACBPUy8yT/b9sgAAAVgAAABWY21hcCIPRb0AAAHIAAABYmdhc3D//wADAAAHIAAAAAhnbHlmP5u2YAAAAzwAAAIsaGVhZAABMfsAAADcAAAANmhoZWED5QIFAAABFAAAACRobXR4BkoASgAAAbAAAAAWbG9jYQD2AaIAAAMsAAAAEG1heHAASwBHAAABOAAAACBuYW1lBSeBwgAABWgAAAFucG9zdC+zMgMAAAbYAAAARQABAAAAAQAA8MQQT18PPPUACwIAAAAAAM9xeH8AAAAAz3F4fwAlACUB2wHbAAAACAACAAAAAAAAAAEAAAHbAAAALgIAAAAAAAHbAAEAAAAAAAAAAAAAAAAAAAAEAAEAAAAHAEQAAgAAAAAAAgAAAAEAAQAAAEAAAAAAAAAAAQIAAZAABQAIAUwBZgAAAEcBTAFmAAAA9QAZAIQAAAIABQkAAAAAAACAAAABAAAAIAAAAAAAAAAAUGZFZABAAGEhkgHg/+AALgHb/9sAAAABAAAAAAAAAgAAAAAAAAACAAAAAgAAJQAlACUAJQAAAAAAAwAAAAMAAAAcAAEAAAAAAFwAAwABAAAAHAAEAEAAAAAMAAgAAgAEAAAAYSAiIZAhkv//AAAAAABhICIhkCGS//8AAP+l3+PedN5xAAEAAAAAAAAAAAAAAAAAAAEGAAABAAAAAAAAAAECAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGAIwAsAEWAAIAJQAlAdsB2wAYACwAAD8BNjQvASYjIg8BBhUUHwEHBhUUHwEWMzI2FAcGBwYiJyYnJjQ3Njc2MhcWF/GCBgaCBQcIBR0GBldXBgYdBQgH7x0eMjB8MDIeHR0eMjB8MDIecYIGDgaCBQUeBQcJBFhYBAkHBR4F0nwwMh4dHR4yMHwwMh4dHR4yAAAAAgAlACUB2wHbABgALAAAJTc2NTQvATc2NTQvASYjIg8BBhQfARYzMjYUBwYHBiInJicmNDc2NzYyFxYXASgdBgZXVwYGHQUIBwWCBgaCBQcIuB0eMjB8MDIeHR0eMjB8MDIecR4FBwkEWFgECQcFHgUFggYOBoIF0nwwMh4dHR4yMHwwMh4dHR4yAAABACUAJQHbAdsAEwAAABQHBgcGIicmJyY0NzY3NjIXFhcB2x0eMjB8MDIeHR0eMjB8MDIeAT58MDIeHR0eMjB8MDIeHR0eMgABACUAJQHbAdsAQwAAARUUBisBIicmPwEmIyIHBgcGBwYUFxYXFhcWMzI3Njc2MzIfARYVFAcGBwYjIicmJyYnJjQ3Njc2NzYzMhcWFzc2FxYB2woIgAsGBQkoKjodHBwSFAwLCwwUEhwcHSIeIBMGAQQDJwMCISspNC8mLBobFBERFBsaLCYvKicpHSUIDAsBt4AICgsLCScnCwwUEhwcOhwcEhQMCw8OHAMDJwMDAgQnFBQRFBsaLCZeJiwaGxQRDxEcJQgEBgAAAAAAAAwAlgABAAAAAAABAAUADAABAAAAAAACAAcAIgABAAAAAAADACEAbgABAAAAAAAEAAUAnAABAAAAAAAFAAsAugABAAAAAAAGAAUA0gADAAEECQABAAoAAAADAAEECQACAA4AEgADAAEECQADAEIAKgADAAEECQAEAAoAkAADAAEECQAFABYAogADAAEECQAGAAoAxgBzAGwAaQBjAGsAAHNsaWNrAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABGAG8AbgB0AEYAbwByAGcAZQAgADIALgAwACAAOgAgAHMAbABpAGMAawAgADoAIAAxADQALQA0AC0AMgAwADEANAAARm9udEZvcmdlIDIuMCA6IHNsaWNrIDogMTQtNC0yMDE0AABzAGwAaQBjAGsAAHNsaWNrAABWAGUAcgBzAGkAbwBuACAAMQAuADAAAFZlcnNpb24gMS4wAABzAGwAaQBjAGsAAHNsaWNrAAAAAAIAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAABwAAAAEAAgECAQMAhwBECmFycm93cmlnaHQJYXJyb3dsZWZ0AAAAAAAAAf//AAIAAQAAAA4AAAAYAAAAAAACAAEAAwAGAAEABAAAAAIAAAAAAAEAAAAAzu7XsAAAAADPcXh/AAAAAM9xeH8=);
                src: url(data:application/vnd.ms-fontobject;base64,AAgAAGQHAAABAAIAAAAAAAIABQkAAAAAAAABAJABAAAAAExQAQAAgCAAAAAAAAAAAAAAAAEAAAAAAAAATxDE8AAAAAAAAAAAAAAAAAAAAAAAAAoAcwBsAGkAYwBrAAAADgBSAGUAZwB1AGwAYQByAAAAFgBWAGUAcgBzAGkAbwBuACAAMQAuADAAAAAKAHMAbABpAGMAawAAAAAAAAEAAAANAIAAAwBQRkZUTW3RyK8AAAdIAAAAHEdERUYANAAGAAAHKAAAACBPUy8yT/b9sgAAAVgAAABWY21hcCIPRb0AAAHIAAABYmdhc3D//wADAAAHIAAAAAhnbHlmP5u2YAAAAzwAAAIsaGVhZAABMfsAAADcAAAANmhoZWED5QIFAAABFAAAACRobXR4BkoASgAAAbAAAAAWbG9jYQD2AaIAAAMsAAAAEG1heHAASwBHAAABOAAAACBuYW1lBSeBwgAABWgAAAFucG9zdC+zMgMAAAbYAAAARQABAAAAAQAA8MQQT18PPPUACwIAAAAAAM9xeH8AAAAAz3F4fwAlACUB2wHbAAAACAACAAAAAAAAAAEAAAHbAAAALgIAAAAAAAHbAAEAAAAAAAAAAAAAAAAAAAAEAAEAAAAHAEQAAgAAAAAAAgAAAAEAAQAAAEAAAAAAAAAAAQIAAZAABQAIAUwBZgAAAEcBTAFmAAAA9QAZAIQAAAIABQkAAAAAAACAAAABAAAAIAAAAAAAAAAAUGZFZABAAGEhkgHg/+AALgHb/9sAAAABAAAAAAAAAgAAAAAAAAACAAAAAgAAJQAlACUAJQAAAAAAAwAAAAMAAAAcAAEAAAAAAFwAAwABAAAAHAAEAEAAAAAMAAgAAgAEAAAAYSAiIZAhkv//AAAAAABhICIhkCGS//8AAP+l3+PedN5xAAEAAAAAAAAAAAAAAAAAAAEGAAABAAAAAAAAAAECAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGAIwAsAEWAAIAJQAlAdsB2wAYACwAAD8BNjQvASYjIg8BBhUUHwEHBhUUHwEWMzI2FAcGBwYiJyYnJjQ3Njc2MhcWF/GCBgaCBQcIBR0GBldXBgYdBQgH7x0eMjB8MDIeHR0eMjB8MDIecYIGDgaCBQUeBQcJBFhYBAkHBR4F0nwwMh4dHR4yMHwwMh4dHR4yAAAAAgAlACUB2wHbABgALAAAJTc2NTQvATc2NTQvASYjIg8BBhQfARYzMjYUBwYHBiInJicmNDc2NzYyFxYXASgdBgZXVwYGHQUIBwWCBgaCBQcIuB0eMjB8MDIeHR0eMjB8MDIecR4FBwkEWFgECQcFHgUFggYOBoIF0nwwMh4dHR4yMHwwMh4dHR4yAAABACUAJQHbAdsAEwAAABQHBgcGIicmJyY0NzY3NjIXFhcB2x0eMjB8MDIeHR0eMjB8MDIeAT58MDIeHR0eMjB8MDIeHR0eMgABACUAJQHbAdsAQwAAARUUBisBIicmPwEmIyIHBgcGBwYUFxYXFhcWMzI3Njc2MzIfARYVFAcGBwYjIicmJyYnJjQ3Njc2NzYzMhcWFzc2FxYB2woIgAsGBQkoKjodHBwSFAwLCwwUEhwcHSIeIBMGAQQDJwMCISspNC8mLBobFBERFBsaLCYvKicpHSUIDAsBt4AICgsLCScnCwwUEhwcOhwcEhQMCw8OHAMDJwMDAgQnFBQRFBsaLCZeJiwaGxQRDxEcJQgEBgAAAAAAAAwAlgABAAAAAAABAAUADAABAAAAAAACAAcAIgABAAAAAAADACEAbgABAAAAAAAEAAUAnAABAAAAAAAFAAsAugABAAAAAAAGAAUA0gADAAEECQABAAoAAAADAAEECQACAA4AEgADAAEECQADAEIAKgADAAEECQAEAAoAkAADAAEECQAFABYAogADAAEECQAGAAoAxgBzAGwAaQBjAGsAAHNsaWNrAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABGAG8AbgB0AEYAbwByAGcAZQAgADIALgAwACAAOgAgAHMAbABpAGMAawAgADoAIAAxADQALQA0AC0AMgAwADEANAAARm9udEZvcmdlIDIuMCA6IHNsaWNrIDogMTQtNC0yMDE0AABzAGwAaQBjAGsAAHNsaWNrAABWAGUAcgBzAGkAbwBuACAAMQAuADAAAFZlcnNpb24gMS4wAABzAGwAaQBjAGsAAHNsaWNrAAAAAAIAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAABwAAAAEAAgECAQMAhwBECmFycm93cmlnaHQJYXJyb3dsZWZ0AAAAAAAAAf//AAIAAQAAAA4AAAAYAAAAAAACAAEAAwAGAAEABAAAAAIAAAAAAAEAAAAAzu7XsAAAAADPcXh/AAAAAM9xeH8=?#iefix) format("embedded-opentype"),url(data:font/woff;base64,d09GRk9UVE8AAAVkAAsAAAAAB1wAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAABCAAAAi4AAAKbH/pWDkZGVE0AAAM4AAAAGgAAABxt0civR0RFRgAAA1QAAAAcAAAAIAAyAARPUy8yAAADcAAAAFIAAABgUBj/rmNtYXAAAAPEAAAAUAAAAWIiC0SwaGVhZAAABBQAAAAuAAAANgABMftoaGVhAAAERAAAABwAAAAkA+UCA2htdHgAAARgAAAADgAAAA4ESgBKbWF4cAAABHAAAAAGAAAABgAFUABuYW1lAAAEeAAAANwAAAFuBSeBwnBvc3QAAAVUAAAAEAAAACAAAwABeJw9ks9vEkEUx2cpWyeUoFYgNkHi2Wt7N3rVm3cTs3UVLC4LxIWEQvi1P3i7O1tYLJDAmlgKGEhQrsajf0j7J3jYTXrQWUrMJG+++b55n5e8NwwKBhHDMLv5kxT3ATEBxKBn3qOAl9zxHgb1MAPhHQgHkyF08Gr/L8B/Eb6zWnmCJ7AJVLubQOheArXvJ1A4EXi6j4I+Zg9F0QFKvsnlBCmXeve+sFEnb/nCptdtQ4QYhVFRAT1HrF8UQK/RL/SbmUbclsvGVFXRZKDHUE38cc4qpkbAAsuwiImvro+ufcfaOIQ6szlrmjRJDaKZKnbjN3GWKIbiIzRFUfCffuxxKOL+3LDlDVvx2TdxN84qZEsnhNBa6pgm2dAsnzbLsETdsmRFxUeHV4e+I2/ptN8TyqV8T3Dt29t7EYOuajVIw2y1Wy3M86w0zg/Fz2IvawmQAUHOVrPVfLkoScVynsqsTG0MGUs4z55nh3mnOJa+li+rl9WpPIcFfDubDeaDC+fLBdYN3QADzLauGfj4B6sZmq6CCpqmtSvF0qlUl2qf5AJIUCSlTqlb7lUG+LRfGzZGzZEyBgccMu6MuqPecNDvD4Y9Kjtj4gD+DsvKVMTcMdtqtZtmkzQstQvYje7Syep0PDSAhSOeHYXYWThEF//A/0YvYV1fSQtpKU5STtrhbQ444OtpKSWJIg3pOg8cBs7maTY1EZf07aq+hjWs7IWzdCYTGhb2CtZ47x+Uhx28AAB4nGNgYGBkAIJz765vANHnCyvqYTQAWnkHswAAeJxjYGRgYOADYgkGEGBiYARCFjAG8RgABHYAN3icY2BmYmCcwMDKwMHow5jGwMDgDqW/MkgytDAwMDGwcjKAQQMDAyOQUmCAgoA01xQGB4ZExUmMD/4/YNBjvP3/NgNEDQPjbbBKBQZGADfLDgsAAHicY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQzMCQqKClOUJz0/z9YHRLv/+L7D+8V3cuHmgAHjGwM6ELUByxUMIOZCmbgAAA5LQ8XeJxjYGRgYABiO68w73h+m68M3EwMIHC+sKIeTqsyqDLeZrwN5HIwgKUB/aYJUgAAeJxjYGRgYLzNwMCgx8QAAkA2IwMqYAIAMGIB7QIAAAACAAAlACUAJQAlAAAAAFAAAAUAAHicbY49asNAEIU/2ZJDfkiRIvXapUFCEqpcptABUrg3ZhEiQoKVfY9UqVLlGDlADpAT5e16IUWysMz3hjfzBrjjjQT/EjKpCy+4YhN5yZoxcirPe+SMWz4jr6S+5UzSa3VuwpTnBfc8RF7yxDZyKs9r5IxHPiKv1P9iZqDnyAvMQ39UecbScVb/gJO03Xk4CFom3XYK1clhMdQUlKo7/d9NF13RkIdfy+MV7TSe2sl11tRFaXYmJKpWTd7kdVnJ8veevZKc+n3I93t9Jnvr5n4aTVWU/0z9AI2qMkV4nGNgZkAGjAxoAAAAjgAF) format("woff"),url(data:font/ttf;base64,AAEAAAANAIAAAwBQRkZUTW3RyK8AAAdIAAAAHEdERUYANAAGAAAHKAAAACBPUy8yT/b9sgAAAVgAAABWY21hcCIPRb0AAAHIAAABYmdhc3D//wADAAAHIAAAAAhnbHlmP5u2YAAAAzwAAAIsaGVhZAABMfsAAADcAAAANmhoZWED5QIFAAABFAAAACRobXR4BkoASgAAAbAAAAAWbG9jYQD2AaIAAAMsAAAAEG1heHAASwBHAAABOAAAACBuYW1lBSeBwgAABWgAAAFucG9zdC+zMgMAAAbYAAAARQABAAAAAQAA8MQQT18PPPUACwIAAAAAAM9xeH8AAAAAz3F4fwAlACUB2wHbAAAACAACAAAAAAAAAAEAAAHbAAAALgIAAAAAAAHbAAEAAAAAAAAAAAAAAAAAAAAEAAEAAAAHAEQAAgAAAAAAAgAAAAEAAQAAAEAAAAAAAAAAAQIAAZAABQAIAUwBZgAAAEcBTAFmAAAA9QAZAIQAAAIABQkAAAAAAACAAAABAAAAIAAAAAAAAAAAUGZFZABAAGEhkgHg/+AALgHb/9sAAAABAAAAAAAAAgAAAAAAAAACAAAAAgAAJQAlACUAJQAAAAAAAwAAAAMAAAAcAAEAAAAAAFwAAwABAAAAHAAEAEAAAAAMAAgAAgAEAAAAYSAiIZAhkv//AAAAAABhICIhkCGS//8AAP+l3+PedN5xAAEAAAAAAAAAAAAAAAAAAAEGAAABAAAAAAAAAAECAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGAIwAsAEWAAIAJQAlAdsB2wAYACwAAD8BNjQvASYjIg8BBhUUHwEHBhUUHwEWMzI2FAcGBwYiJyYnJjQ3Njc2MhcWF/GCBgaCBQcIBR0GBldXBgYdBQgH7x0eMjB8MDIeHR0eMjB8MDIecYIGDgaCBQUeBQcJBFhYBAkHBR4F0nwwMh4dHR4yMHwwMh4dHR4yAAAAAgAlACUB2wHbABgALAAAJTc2NTQvATc2NTQvASYjIg8BBhQfARYzMjYUBwYHBiInJicmNDc2NzYyFxYXASgdBgZXVwYGHQUIBwWCBgaCBQcIuB0eMjB8MDIeHR0eMjB8MDIecR4FBwkEWFgECQcFHgUFggYOBoIF0nwwMh4dHR4yMHwwMh4dHR4yAAABACUAJQHbAdsAEwAAABQHBgcGIicmJyY0NzY3NjIXFhcB2x0eMjB8MDIeHR0eMjB8MDIeAT58MDIeHR0eMjB8MDIeHR0eMgABACUAJQHbAdsAQwAAARUUBisBIicmPwEmIyIHBgcGBwYUFxYXFhcWMzI3Njc2MzIfARYVFAcGBwYjIicmJyYnJjQ3Njc2NzYzMhcWFzc2FxYB2woIgAsGBQkoKjodHBwSFAwLCwwUEhwcHSIeIBMGAQQDJwMCISspNC8mLBobFBERFBsaLCYvKicpHSUIDAsBt4AICgsLCScnCwwUEhwcOhwcEhQMCw8OHAMDJwMDAgQnFBQRFBsaLCZeJiwaGxQRDxEcJQgEBgAAAAAAAAwAlgABAAAAAAABAAUADAABAAAAAAACAAcAIgABAAAAAAADACEAbgABAAAAAAAEAAUAnAABAAAAAAAFAAsAugABAAAAAAAGAAUA0gADAAEECQABAAoAAAADAAEECQACAA4AEgADAAEECQADAEIAKgADAAEECQAEAAoAkAADAAEECQAFABYAogADAAEECQAGAAoAxgBzAGwAaQBjAGsAAHNsaWNrAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABGAG8AbgB0AEYAbwByAGcAZQAgADIALgAwACAAOgAgAHMAbABpAGMAawAgADoAIAAxADQALQA0AC0AMgAwADEANAAARm9udEZvcmdlIDIuMCA6IHNsaWNrIDogMTQtNC0yMDE0AABzAGwAaQBjAGsAAHNsaWNrAABWAGUAcgBzAGkAbwBuACAAMQAuADAAAFZlcnNpb24gMS4wAABzAGwAaQBjAGsAAHNsaWNrAAAAAAIAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAABwAAAAEAAgECAQMAhwBECmFycm93cmlnaHQJYXJyb3dsZWZ0AAAAAAAAAf//AAIAAQAAAA4AAAAYAAAAAAACAAEAAwAGAAEABAAAAAIAAAAAAAEAAAAAzu7XsAAAAADPcXh/AAAAAM9xeH8=) format("truetype"),url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBzdGFuZGFsb25lPSJubyI/PjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxtZXRhZGF0YT5HZW5lcmF0ZWQgYnkgRm9udGFzdGljLm1lPC9tZXRhZGF0YT48ZGVmcz48Zm9udCBpZD0ic2xpY2siIGhvcml6LWFkdi14PSI1MTIiPjxmb250LWZhY2UgZm9udC1mYW1pbHk9InNsaWNrIiB1bml0cy1wZXItZW09IjUxMiIgYXNjZW50PSI0ODAiIGRlc2NlbnQ9Ii0zMiIvPjxtaXNzaW5nLWdseXBoIGhvcml6LWFkdi14PSI1MTIiLz48Z2x5cGggdW5pY29kZT0i4oaSIiBkPSJNMjQxIDExM2wxMzAgMTMwYzQgNCA2IDggNiAxMyAwIDUtMiA5LTYgMTNsLTEzMCAxMzBjLTMgMy03IDUtMTIgNS01IDAtMTAtMi0xMy01bC0yOS0zMGMtNC0zLTYtNy02LTEyIDAtNSAyLTEwIDYtMTNsODctODgtODctODhjLTQtMy02LTgtNi0xMyAwLTUgMi05IDYtMTJsMjktMzBjMy0zIDgtNSAxMy01IDUgMCA5IDIgMTIgNXogbTIzNCAxNDNjMC00MC05LTc3LTI5LTExMC0yMC0zNC00Ni02MC04MC04MC0zMy0yMC03MC0yOS0xMTAtMjktNDAgMC03NyA5LTExMCAyOS0zNCAyMC02MCA0Ni04MCA4MC0yMCAzMy0yOSA3MC0yOSAxMTAgMCA0MCA5IDc3IDI5IDExMCAyMCAzNCA0NiA2MCA4MCA4MCAzMyAyMCA3MCAyOSAxMTAgMjkgNDAgMCA3Ny05IDExMC0yOSAzNC0yMCA2MC00NiA4MC04MCAyMC0zMyAyOS03MCAyOS0xMTB6Ii8+PGdseXBoIHVuaWNvZGU9IuKGkCIgZD0iTTI5NiAxMTNsMjkgMzBjNCAzIDYgNyA2IDEyIDAgNS0yIDEwLTYgMTNsLTg3IDg4IDg3IDg4YzQgMyA2IDggNiAxMyAwIDUtMiA5LTYgMTJsLTI5IDMwYy0zIDMtOCA1LTEzIDUtNSAwLTktMi0xMi01bC0xMzAtMTMwYy00LTQtNi04LTYtMTMgMC01IDItOSA2LTEzbDEzMC0xMzBjMy0zIDctNSAxMi01IDUgMCAxMCAyIDEzIDV6IG0xNzkgMTQzYzAtNDAtOS03Ny0yOS0xMTAtMjAtMzQtNDYtNjAtODAtODAtMzMtMjAtNzAtMjktMTEwLTI5LTQwIDAtNzcgOS0xMTAgMjktMzQgMjAtNjAgNDYtODAgODAtMjAgMzMtMjkgNzAtMjkgMTEwIDAgNDAgOSA3NyAyOSAxMTAgMjAgMzQgNDYgNjAgODAgODAgMzMgMjAgNzAgMjkgMTEwIDI5IDQwIDAgNzctOSAxMTAtMjkgMzQtMjAgNjAtNDYgODAtODAgMjAtMzMgMjktNzAgMjktMTEweiIvPjxnbHlwaCB1bmljb2RlPSLigKIiIGQ9Ik00NzUgMjU2YzAtNDAtOS03Ny0yOS0xMTAtMjAtMzQtNDYtNjAtODAtODAtMzMtMjAtNzAtMjktMTEwLTI5LTQwIDAtNzcgOS0xMTAgMjktMzQgMjAtNjAgNDYtODAgODAtMjAgMzMtMjkgNzAtMjkgMTEwIDAgNDAgOSA3NyAyOSAxMTAgMjAgMzQgNDYgNjAgODAgODAgMzMgMjAgNzAgMjkgMTEwIDI5IDQwIDAgNzctOSAxMTAtMjkgMzQtMjAgNjAtNDYgODAtODAgMjAtMzMgMjktNzAgMjktMTEweiIvPjxnbHlwaCB1bmljb2RlPSJhIiBkPSJNNDc1IDQzOWwwLTEyOGMwLTUtMS05LTUtMTMtNC00LTgtNS0xMy01bC0xMjggMGMtOCAwLTEzIDMtMTcgMTEtMyA3LTIgMTQgNCAyMGw0MCAzOWMtMjggMjYtNjIgMzktMTAwIDM5LTIwIDAtMzktNC01Ny0xMS0xOC04LTMzLTE4LTQ2LTMyLTE0LTEzLTI0LTI4LTMyLTQ2LTctMTgtMTEtMzctMTEtNTcgMC0yMCA0LTM5IDExLTU3IDgtMTggMTgtMzMgMzItNDYgMTMtMTQgMjgtMjQgNDYtMzIgMTgtNyAzNy0xMSA1Ny0xMSAyMyAwIDQ0IDUgNjQgMTUgMjAgOSAzOCAyMyA1MSA0MiAyIDEgNCAzIDcgMyAzIDAgNS0xIDctM2wzOS0zOWMyLTIgMy0zIDMtNiAwLTItMS00LTItNi0yMS0yNS00Ni00NS03Ni01OS0yOS0xNC02MC0yMC05My0yMC0zMCAwLTU4IDUtODUgMTctMjcgMTItNTEgMjctNzAgNDctMjAgMTktMzUgNDMtNDcgNzAtMTIgMjctMTcgNTUtMTcgODUgMCAzMCA1IDU4IDE3IDg1IDEyIDI3IDI3IDUxIDQ3IDcwIDE5IDIwIDQzIDM1IDcwIDQ3IDI3IDEyIDU1IDE3IDg1IDE3IDI4IDAgNTUtNSA4MS0xNSAyNi0xMSA1MC0yNiA3MC00NWwzNyAzN2M2IDYgMTIgNyAyMCA0IDgtNCAxMS05IDExLTE3eiIvPjwvZm9udD48L2RlZnM+PC9zdmc+) format("svg")
            }

            .slick-next,.slick-prev {
                font-size: 0;
                line-height: 0;
                position: absolute;
                top: 50%;
                display: block;
                width: 20px;
                height: 20px;
                padding: 0;
                transform: translateY(-50%);
                cursor: pointer;
                border: none
            }

            .slick-next,.slick-next:focus,.slick-next:hover,.slick-prev,.slick-prev:focus,.slick-prev:hover {
                color: transparent;
                outline: 0;
                background: 0 0
            }

            .slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before {
                opacity: 1
            }

            .slick-next.slick-disabled:before,.slick-prev.slick-disabled:before {
                opacity: .25
            }

            .slick-next:before,.slick-prev:before {
                font-family: slick;
                font-size: 20px;
                line-height: 1;
                opacity: .75;
                color: #fff;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .slick-prev {
                left: -25px
            }

            [dir=rtl] .slick-prev {
                right: -25px;
                left: auto
            }

            .slick-prev:before {
                content: "\2190"
            }

            [dir=rtl] .slick-prev:before {
                content: "\2192"
            }

            .slick-next {
                right: -25px
            }

            [dir=rtl] .slick-next {
                right: auto;
                left: -25px
            }

            .slick-next:before {
                content: "\2192"
            }

            [dir=rtl] .slick-next:before {
                content: "\2190"
            }

            .slick-dotted.slick-slider {
                margin-bottom: 30px
            }

            .slick-dots {
                position: absolute;
                bottom: -25px;
                display: block;
                width: 100%;
                padding: 0;
                margin: 0;
                list-style: none;
                text-align: center
            }

            .slick-dots li {
                position: relative;
                display: inline-block;
                margin: 0 5px;
                padding: 0
            }

            .slick-dots li,.slick-dots li button {
                width: 20px;
                height: 20px;
                cursor: pointer
            }

            .slick-dots li button {
                font-size: 0;
                line-height: 0;
                display: block;
                padding: 5px;
                color: transparent;
                border: 0;
                outline: 0;
                background: 0 0
            }

            .slick-dots li button:focus,.slick-dots li button:hover {
                outline: 0
            }

            .slick-dots li button:focus:before,.slick-dots li button:hover:before {
                opacity: 1
            }

            .slick-dots li button:before {
                font-family: slick;
                font-size: 6px;
                line-height: 20px;
                position: absolute;
                top: 0;
                left: 0;
                width: 20px;
                height: 20px;
                content: "\2022";
                text-align: center;
                opacity: .25;
                color: #000;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .slick-dots li.slick-active button:before {
                opacity: .75;
                color: #000
            }

            .slick-slider {
                box-sizing: border-box;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                touch-action: pan-y;
                -webkit-tap-highlight-color: transparent
            }

            .slick-list,.slick-slider {
                position: relative;
                display: block
            }

            .slick-list {
                overflow: hidden;
                margin: 0;
                padding: 0
            }

            .slick-list:focus {
                outline: 0
            }

            .slick-list.dragging {
                cursor: pointer;
                cursor: hand
            }

            .slick-slider .slick-list,.slick-slider .slick-track {
                transform: translateZ(0)
            }

            .slick-track {
                position: relative;
                top: 0;
                left: 0;
                display: block;
                margin-left: auto;
                margin-right: auto
            }

            .slick-track:after,.slick-track:before {
                display: table;
                content: ""
            }

            .slick-track:after {
                clear: both
            }

            .slick-loading .slick-track {
                visibility: hidden
            }

            .slick-slide {
                display: none;
                float: left;
                height: 100%;
                min-height: 1px
            }

            [dir=rtl] .slick-slide {
                float: right
            }

            .slick-slide img {
                display: block
            }

            .slick-slide.slick-loading img {
                display: none
            }

            .slick-slide.dragging img {
                pointer-events: none
            }

            .slick-initialized .slick-slide {
                display: block
            }

            .slick-loading .slick-slide {
                visibility: hidden
            }

            .slick-vertical .slick-slide {
                display: block;
                height: auto;
                border: 1px solid transparent
            }

            .slick-arrow.slick-hidden {
                display: none
            }

            .article-navigation-container {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                display: flex;
                background: #f9f9f9;
                box-shadow: 0 0 10px 0 rgba(0,0,0,.17);
                z-index: 10000
            }

            @media (max-width: 599px) {
                .article-navigation-container {
                    padding:25px 15px
                }
            }

            @media (max-width: 1199px) {
                .article-navigation-container .article-social-share,.article-navigation-container .current-article-description {
                    padding:0 20px!important
                }
            }

            @media (max-width: 899px) {
                .article-navigation-container .article-social-share {
                    flex:1 1 auto
                }
            }

            .article-navigation-container .tooltip.next .tooltip-content {
                right: 10px
            }

            .article-navigation-container .tooltip.previous .tooltip-content {
                left: 10px
            }

            .article-navigation-container .tooltip:hover .tooltip-content {
                display: inline-block
            }

            .article-navigation-container .tooltip .tooltip-content {
                position: absolute;
                bottom: 90px;
                background: #fff;
                padding: 15px 20px;
                box-shadow: 0 2px 8px rgba(0,0,0,.15);
                max-width: 300px;
                border-radius: 3px;
                display: none;
                transition: all .3s ease
            }

            .article-navigation-container .tooltip .tooltip-content h5 {
                color: #58637e;
                font-size: 15px;
                font-weight: 600;
                margin: 0 0 5px
            }

            .article-navigation-container .tooltip .tooltip-content span {
                display: inline-block;
                color: #fff;
                font-size: 13px;
                font-weight: 700;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 3px;
                padding: 3px 5px;
                margin-right: auto
            }

            .article-navigation-container .next,.article-navigation-container .previous {
                display: flex;
                align-items: center;
                color: #58637e;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: 0;
                padding: 28px 32px;
                text-decoration: none
            }

            @media (max-width: 599px) {
                .article-navigation-container .next,.article-navigation-container .previous {
                    display:none
                }
            }

            .article-navigation-container .next.disabled,.article-navigation-container .previous.disabled {
                opacity: .6
            }

            .article-navigation-container .next:not(.disabled):hover,.article-navigation-container .previous:not(.disabled):hover {
                color: #fff;
                background: var(--color-primary)
            }

            .article-navigation-container .next:not(.disabled):hover img,.article-navigation-container .previous:not(.disabled):hover img {
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            .article-navigation-container .next img,.article-navigation-container .previous img {
                height: 11px;
                margin: 0 0 0 16px
            }

            .article-navigation-container .previous {
                border-right: .5px solid #d9d9d9
            }

            .article-navigation-container .previous img {
                transform: scaleX(-1);
                margin: 0 16px 0 0
            }

            .article-navigation-container .next {
                border-left: .5px solid #d9d9d9
            }

            .article-navigation-container .current-article-description {
                display: flex;
                flex: 1 1 auto;
                flex-direction: column;
                justify-content: center;
                padding: 0 80px
            }

            .article-navigation-container .current-article-description h3 {
                color: #9b9b9b;
                font-size: 12px;
                font-weight: 600;
                line-height: 14px;
                letter-spacing: .8px;
                margin: 0 0 7px
            }

            @media (max-width: 599px) {
                .article-navigation-container .current-article-description h3 {
                    font-size:9px
                }
            }

            .article-navigation-container .current-article-description h4 {
                color: #303030;
                font-size: 15px;
                font-weight: 400;
                line-height: 16px;
                margin: 0
            }

            .article-navigation-container .article-social-share {
                display: flex;
                align-items: center;
                justify-content: center;
                color: #bebebe;
                font-size: 15px;
                line-height: 16px;
                padding-right: 103px
            }

            @media (max-width: 599px) {
                .article-navigation-container .article-social-share {
                    justify-content:flex-end
                }
            }

            .article-navigation-container .article-social-share span {
                margin-right: 14px
            }

            @media (max-width: 599px) {
                .article-navigation-container .article-social-share span {
                    display:none
                }
            }

            .article-navigation-container .article-social-share button {
                cursor: pointer;
                height: 40px;
                width: 40px;
                border: none;
                border-radius: 3px;
                margin: 0 3px
            }

            .article-navigation-container .article-social-share button:not(.scroll-top):not(.share) {
                background: hsla(0,0%,91.8%,.5)!important
            }

            .article-navigation-container .article-social-share button:not(.scroll-top):not(.share):hover {
                background: var(--color-primary)!important
            }

            .article-navigation-container .article-social-share button:not(.scroll-top):not(.share):hover img {
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            @media (max-width: 599px) {
                .article-navigation-container .article-social-share button:not(.scroll-top):not(.share) {
                    display:none
                }
            }

            .article-navigation-container .article-social-share button.scroll-top {
                background: 0 0;
                border: .5px solid #ddd
            }

            .article-navigation-container .article-social-share button.scroll-top img {
                transform: rotate(-90deg)
            }

            .article-navigation-container .article-social-share button.scroll-top:hover {
                border-width: 1px
            }

            .article-navigation-container .article-social-share button.share {
                display: none
            }

            @media (max-width: 599px) {
                .article-navigation-container .article-social-share button.share {
                    display:block;
                    background: hsla(0,0%,91.8%,.5)!important;
                    border: .5px solid #ddd
                }
            }

            .article-navigation-container .article-social-share button.share img {
                transform: rotate(-180deg)
            }

            .sub-image {
                padding: 1rem 0
            }

            .content-variant {
                display: flex;
                flex-wrap: wrap;
                margin: 0 -1rem 1rem
            }

            .content-variant-content {
                margin: 1rem;
                width: 100%
            }

            .content-variant-content.half {
                width: calc(50% - 2rem)
            }

            @media (max-width: 599px) {
                .content-variant-content.half {
                    width:100%
                }
            }

            .content-variant .media-player,.content-variant img {
                display: block;
                height: 100%!important;
                width: 100%!important;
                min-height: 300px;
                border-radius: 5px;
                -o-object-fit: cover;
                object-fit: cover
            }

            .content-variant .media-player.content-banner,.content-variant img.content-banner {
                height: 400px!important
            }

            .content-variant h2 {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0
            }

            @media (max-width: 599px) {
                .content-variant h2 {
                    font-size:18px
                }
            }

            .content-variant h2+p {
                margin-top: 1rem
            }

            .content-variant p {
                color: #303030;
                font-size: 14px;
                font-weight: 300;
                line-height: 24px;
                white-space: pre-wrap;
                margin: 0
            }

            @media (max-width: 599px) {
                .content-variant p {
                    font-size:11px;
                    line-height: 25px
                }
            }

            .content-variant p+p {
                margin-top: 1rem
            }

            .content-variant p.content-caption {
                text-align: center;
                font-size: 14px
            }

            .third-party-form iframe {
                width: 100%!important
            }

            .career-cards {
                border: 1px solid #c4c4c4
            }

            .career-cards-selected {
                border: 1px solid #ab101b
            }

            .career-cards,.career-cards-selected {
                background: #fff;
                border-radius: 5px;
                margin-bottom: 20px;
                padding: 2rem 3rem;
                display: flex;
                justify-content: space-between;
                cursor: pointer;
                max-height: 200px
            }

            @media (max-width: 599px) {
                .career-cards,.career-cards-selected {
                    flex-direction:column;
                    padding: 20px;
                    max-height: none
                }
            }

            .career-cards-selected:focus,.career-cards:focus {
                outline: 0
            }

            .career-cards-content-title {
                font-size: 18px;
                color: #303030;
                font-weight: 600;
                margin: 0
            }

            @media (max-width: 599px) {
                .career-cards-content-title {
                    font-size:14px
                }
            }

            .career-cards-content-location {
                font-size: 12px;
                color: #9b9b9b;
                margin: 0
            }

            @media (max-width: 599px) {
                .career-cards-content-location {
                    font-size:10px;
                    margin-top: 7px
                }
            }

            .career-cards-content-location span {
                padding: 0 5px
            }

            .career-cards-content-body {
                font-size: 14px;
                color: #303030;
                margin: 2rem 0 0;
                max-width: 31rem;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden
            }

            @media (max-width: 599px) {
                .career-cards-content-body {
                    font-size:11px;
                    width: auto;
                    line-height: 24px
                }
            }

            .career-cards-button-container {
                margin: 2rem 0
            }

            @media (max-width: 599px) {
                .career-cards-button-container {
                    margin:2rem 0 0
                }
            }

            .career-cards-button-container button {
                color: #fff;
                background: #990d15;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: none;
                cursor: pointer;
                width: 151px;
                height: 39px;
                padding: 0;
                line-height: 39px;
                text-align: center;
                text-decoration: none
            }

            @media (max-width: 599px) {
                .career-cards-button-container button {
                    font-size:12px
                }
            }

            .pagination {
                padding: 0;
                margin: 0;
                list-style: none
            }

            .pagination,.pagination li {
                display: inline-block
            }

            .pagination li.active button {
                color: #fff;
                background: #990d15
            }

            .pagination li button {
                color: #990d15;
                width: 33px;
                height: 33px;
                margin: 5px;
                background: #e5e5e5;
                border: none;
                border-radius: 2px
            }

            .no-result {
                width: 100%;
                text-align: center
            }

            .no-result p {
                color: #858585;
                font-size: 14px;
                margin: 11px 0 0
            }

            .article-card {
                width: 308px;
                background: #fff;
                border: 0 solid #ddd;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3);
                border-radius: 5px;
                overflow: hidden
            }

            @media (max-width: 599px) {
                .article-card {
                    width:240px
                }
            }

            .article-card-link {
                display: block;
                color: inherit;
                text-decoration: none
            }

            .article-card-header {
                position: relative;
                height: 330px
            }

            @media (max-width: 599px) {
                .article-card-header {
                    height:178px;
                    padding: 17px 13px 9px 24px
                }
            }

            .article-card-header .gatsby-image-wrapper,.article-card-header img {
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover
            }

            .article-card-header .type {
                position: absolute;
                top: 0;
                right: 0;
                margin: 30px 20px;
                color: #fff;
                font-size: 10px;
                font-weight: 700;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 3px;
                padding: 3px 5px
            }

            .article-card-details {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                color: #505050;
                padding: 22px 23px 23px;
                height: 150px
            }

            @media (max-width: 599px) {
                .article-card-details {
                    height:110px
                }
            }

            .article-card-details h3 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: 17px;
                font-weight: 400;
                line-height: 24px;
                margin: 0
            }

            @media (max-width: 599px) {
                .article-card-details h3 {
                    -webkit-line-clamp:2;
                    font-size: 16px;
                    line-height: 23px
                }
            }

            .article-card-details p {
                font-size: 13px;
                line-height: 19px;
                margin: 0
            }

            @media (max-width: 599px) {
                .article-card-details p {
                    font-size:10px;
                    line-height: 15px;
                    font-weight: 700
                }
            }

            .minislider-card-link {
                display: block;
                margin: 30px 0
            }

            .minislider-card {
                width: 318.96px;
                height: 100%;
                background: #fff;
                border: 0 solid #ddd;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3);
                border-radius: 5px;
                overflow: hidden
            }

            .minislider-card-link {
                color: inherit;
                text-decoration: none
            }

            .minislider-card .minislider-card-header {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 224px;
                position: relative
            }

            @media (max-width: 599px) {
                .minislider-card .minislider-card-header {
                    height:178px;
                    padding: 17px 60px 9px 24px
                }
            }

            .minislider-card .minislider-video-header {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                height: 100%
            }

            .minislider-card .minislider-card-details .minislider-details {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                color: #505050;
                padding: 15px 17px 23px
            }

            .minislider-card .minislider-card-details .minislider-details h3 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: 18px;
                font-weight: 400;
                line-height: 24px;
                margin: 0 auto
            }

            @media (max-width: 599px) {
                .minislider-card .minislider-card-details .minislider-details h3 {
                    -webkit-line-clamp:2;
                    font-size: 13px;
                    line-height: 23px
                }
            }

            .property-card {
                width: 308px;
                background: #fff;
                border: 0 solid #ddd;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3);
                border-radius: 5px;
                overflow: hidden
            }

            @media (max-width: 599px) {
                .property-card {
                    width:240px
                }
            }

            .property-card-link {
                display: block;
                color: inherit;
                text-decoration: none
            }

            .property-card-header {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 330px;
                padding: 27px 16px 8px 23px
            }

            @media (max-width: 599px) {
                .property-card-header {
                    height:178px;
                    padding: 17px 13px 9px 24px
                }
            }

            .property-card-header .price-range {
                color: hsla(0,0%,100%,.8);
                font-size: 11px;
                line-height: 16px
            }

            .property-card-header .price-range-value {
                color: #fff;
                font-size: 17px;
                font-weight: 700;
                line-height: 24px
            }

            @media (max-width: 599px) {
                .property-card-header .price-range-value {
                    font-size:14px;
                    line-height: 20px
                }
            }

            .property-card-type {
                align-self: flex-end;
                color: #fff;
                font-size: 10px;
                font-weight: 700;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 3px;
                padding: 3px 5px;
                margin-left: auto
            }

            .property-card-details .property-details {
                padding: 20px 23px 23px
            }

            @media (max-width: 599px) {
                .property-card-details .property-details {
                    padding:17px 24px 11px
                }
            }

            .property-card-details .property-details h3 {
                color: #505050;
                font-size: 20px;
                font-weight: 400;
                line-height: 28px;
                margin: 0;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            @media (max-width: 599px) {
                .property-card-details .property-details h3 {
                    font-size:16px;
                    line-height: 23px;
                    margin-bottom: 2px
                }
            }

            .property-card-details .property-details p {
                color: rgba(80,80,80,.5);
                font-size: 13px;
                line-height: 19px;
                margin: 0;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            @media (max-width: 599px) {
                .property-card-details .property-details p {
                    font-size:10px;
                    line-height: 15px
                }
            }

            .property-card-details .size {
                color: #505050;
                font-size: 15px;
                font-weight: 700;
                line-height: 21px;
                padding: 16px 23px;
                border-top: 1px solid #ddd
            }

            @media (max-width: 599px) {
                .property-card-details .size {
                    font-size:12px;
                    line-height: 17px;
                    padding: 10px 24px 11px
                }
            }

            .property-card-details .size img {
                display: inline-block;
                margin-right: 9px
            }

            .slider-section {
                overflow: hidden;
                margin-bottom: 120px
            }

            @media (max-width: 599px) {
                .slider-section {
                    margin-bottom:113px
                }
            }

            .slider-section .slider-header {
                text-align: center;
                margin-bottom: 76px;
                padding: 0 20px
            }

            @media (max-width: 599px) {
                .slider-section .slider-header {
                    margin-bottom:69px
                }
            }

            .slider-section .slider-header h4 {
                color: #2c2c2c;
                font-size: 15px;
                font-weight: 400;
                line-height: 21px;
                text-transform: uppercase;
                margin: 0 0 7px
            }

            .slider-section .slider-header img {
                height: 53px;
                margin-bottom: 27px
            }

            .slider-section .slider-header h3 {
                color: #000;
                font-size: 48px;
                font-weight: 700;
                line-height: 33px;
                text-transform: uppercase;
                margin: 0 0 18px
            }

            @media (max-width: 599px) {
                .slider-section .slider-header h3 {
                    font-size:24px
                }
            }

            .slider-section .slider-header h3 span {
                color: #990d15
            }

            .slider-section .slider-header p {
                color: #707070;
                font-size: 15px;
                line-height: 25px;
                margin: 0 auto;
                max-width: 981px
            }

            @media (max-width: 599px) {
                .slider-section .slider-header p {
                    font-size:14px
                }
            }

            .slider-section .slider {
                margin-bottom: 46px;
                padding-left: 12px
            }

            @media (max-width: 599px) {
                .slider-section .slider {
                    margin-bottom:41px
                }
            }

            .slider-section .slider .slick-list {
                overflow: visible
            }

            .slider-section .slider .slick-slide>div>* {
                display: inline-block;
                margin: 0 16px
            }

            @media (max-width: 599px) {
                .slider-section .slider .slick-slide>div>* {
                    margin:0 8px
                }
            }

            .slider-section .link-container {
                text-align: center
            }

            .slider-section .link-container a {
                color: #9b9b9b;
                font-size: 15px;
                line-height: 21px;
                font-weight: 400;
                text-decoration: none;
                text-transform: uppercase
            }

            .search-input-container span {
                position: relative
            }

            .search-input-container span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .search-input-container span input {
                font-size: 15px;
                font-family: inherit;
                color: #fff;
                width: 400px;
                padding: .75rem 1.5rem .75rem 2.5rem;
                background: 0 0;
                border: 1px solid #fff;
                border-radius: 3px;
                outline: 0
            }

            .search-select-container {
                width: 310px
            }

            @media (max-width: 899px) {
                .search-select-container {
                    width:200px
                }
            }

            .media-gallery {
                width: 100%;
                max-width: 949px;
                min-height: 367px;
                margin-bottom: 38px;
                overflow: hidden
            }

            .media-gallery.zoomed {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                max-width: unset;
                height: 100%!important;
                z-index: 100000;
                background: #fff
            }

            .media-gallery-content {
                position: relative;
                height: 100%;
                width: 100%
            }

            .gallery-slider {
                margin: 0 auto;
                position: relative
            }

            @media (min-width: 1200px) {
                .gallery-slider {
                    max-width:600px
                }
            }

            .gallery-slider .slider-header {
                margin: 12px 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 15px
            }

            @media (min-width: 1200px) {
                .gallery-slider .slider-header {
                    padding:0
                }
            }

            .gallery-slider .slider-count {
                color: #fff
            }

            .gallery-slider .slider-count--toggled {
                position: absolute;
                top: 45%;
                transform: translateY(-50%);
                right: -35px
            }

            .gallery-slider .slider-title {
                font-size: 14px;
                margin: 0;
                width: 130px;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis
            }

            @media (min-width: 1200px) {
                .gallery-slider .slider-title {
                    width:300px
                }
            }

            .gallery-slider .slider,.gallery-slider .slider .slick-list {
                height: 100%
            }

            .gallery-slider .slider .slick-list .slick-track {
                height: 65px
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide {
                padding: 0 5px;
                height: 100%;
                max-width: 119px;
                min-width: 119px
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide>div {
                height: 100%;
                border: 1px solid #8c8c8c
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide>div .thumbnail {
                height: 100%;
                cursor: pointer;
                -webkit-filter: brightness(.5);
                filter: brightness(.5);
                -o-object-fit: cover;
                object-fit: cover;
                -o-object-position: top;
                object-position: top
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide>div .thumbnail.with-icon {
                display: flex!important;
                justify-content: center;
                align-items: center;
                background-image: url(/static/properties-banner-d119a1a08642fe0135d6229f38c52e77.png);
                background-size: cover;
                background-position: 50%
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide>div .thumbnail.with-icon .icon {
                height: 80%;
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide>div .mp4-thumbnail {
                height: 100%
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide.slick-current>div {
                border-color: #d8d8d8
            }

            .gallery-slider .slider .slick-list .slick-track .slick-slide.slick-current>div .thumbnail {
                -webkit-filter: brightness(1);
                filter: brightness(1)
            }

            .media-gallery-panel {
                height: 100%;
                width: 100%;
                position: relative;
                background: rgba(0,0,0,.7);
                position: absolute;
                bottom: 0
            }

            .media-gallery-panel.toggled {
                max-height: 45px;
                transition: .6s
            }

            @media (min-width: 1200px) {
                .media-gallery-panel.toggled {
                    max-height:125px
                }
            }

            @media (max-width: 1199px) {
                .media-gallery-panel.toggled .slick-arrow {
                    top:-21px;
                    transition: .6s
                }

                .media-gallery-panel.toggled .slick-prev {
                    left: 43%
                }

                .media-gallery-panel.toggled .slick-next {
                    right: 43%
                }
            }

            .media-gallery-panel.untoggled {
                max-height: 45px;
                transition: .6s
            }

            @media (min-width: 1200px) {
                .media-gallery-panel.untoggled {
                    max-height:0
                }
            }

            .media-gallery-panel.untoggled .slick-arrow {
                top: -21px;
                transition: .6s
            }

            .media-gallery-panel.untoggled .slick-prev {
                left: 43%
            }

            .media-gallery-panel.untoggled .slick-next {
                right: 43%
            }

            .media-gallery-panel .panel-trigger {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                top: -28px;
                width: 89px;
                border-bottom: 20px solid rgba(0,0,0,.7);
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-top: 0;
                border-radius: 25px 25px 0 0;
                height: 0;
                cursor: pointer;
                outline: 0;
                background: 0 0;
                padding-top: 1px;
                padding-bottom: 7px;
                display: none
            }

            @media (min-width: 1200px) {
                .media-gallery-panel .panel-trigger {
                    display:block
                }
            }

            .media-gallery-panel .caret-icon {
                color: #fff;
                position: absolute;
                left: 50%;
                top: 8px;
                transform: translateX(-50%)
            }

            .media-gallery-panel .caret-icon.toggled {
                transform: translateX(-50%) rotate(0);
                transition: .6s
            }

            .media-gallery-panel .caret-icon.untoggled {
                transform: translateX(-50%) rotate(180deg);
                transition: .6s;
                top: 5px
            }

            .displayed-slider {
                height: 100%
            }

            .displayed-slider .media-gallery-zoom {
                cursor: pointer;
                position: absolute;
                right: 20px;
                top: 20px;
                padding: 10px;
                border-radius: 100%;
                background: 0;
                border: 0;
                background: #000;
                opacity: .3;
                z-index: 2
            }

            .displayed-slider .media-gallery-zoom:hover {
                opacity: .7
            }

            .displayed-slider .media-gallery-zoom button {
                top: 200px
            }

            .displayed-slider .media-gallery-zoom img {
                display: block;
                height: 15px;
                width: 15px
            }

            @media (min-width: 1200px) {
                .displayed-slider .slick-arrow {
                    top:179px;
                    z-index: 4;
                    transform: scale(2.5);
                    -webkit-filter: drop-shadow(0 2px 1px #828282);
                    filter: drop-shadow(0 2px 1px #828282)
                }

                .displayed-slider .slick-prev {
                    left: 2%
                }

                .displayed-slider .slick-prev:before {
                    content: "<"
                }

                .displayed-slider .slick-next {
                    right: 2%
                }

                .displayed-slider .slick-next:before {
                    content: ">"
                }
            }

            .displayed-slider .slick-current div,.displayed-slider .slick-list,.displayed-slider .slick-slide,.displayed-slider .slick-slider,.displayed-slider .slick-track {
                height: 100%
            }

            .displayed-slider .thumbnail {
                min-height: 325px;
                -o-object-fit: cover;
                object-fit: cover;
                -o-object-position: top;
                object-position: top;
                height: 100%
            }

            .displayed-slider iframe {
                min-height: 300px;
                z-index: -5;
                height: 100%
            }

            @media (min-width: 1200px) {
                .displayed-slider.zoomed .slick-arrow {
                    top:40vh
                }
            }

            .displayed-slider.zoomed .thumbnail {
                -o-object-fit: contain;
                object-fit: contain;
                -o-object-position: center;
                object-position: center
            }

            .header {
                position: fixed;
                top: 0;
                width: 100%;
                background: #fff;
                min-height: 64px;
                height: 1px;
                box-shadow: 0 1px 3px 0 rgba(0,0,0,.5);
                z-index: 100000
            }

            @media (max-width: 1199px) {
                .header {
                    position:relative;
                    z-index: 1
                }
            }

            .header-arrow-icon {
                opacity: .39;
                transform: rotate(180deg);
                padding: 5px 0
            }

            .header-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-width: 1340px;
                padding: 0 30px;
                margin: 0 auto
            }

            @media (max-width: 899px) {
                .header-content {
                    padding:0 19px;
                    height: 100%
                }
            }

            @media (max-width: 1199px) {
                .header-content {
                    padding:10px 19px
                }
            }

            .header .burger-container {
                flex: 0 0 auto;
                width: 25px;
                height: 20px;
                cursor: pointer;
                display: none
            }

            @media (max-width: 899px) {
                .header .burger-container {
                    display:block
                }
            }

            @media (max-width: 1199px) {
                .header .burger-container {
                    display:block
                }
            }

            .header .burger-container img {
                display: none
            }

            @media (max-width: 899px) {
                .header .burger-container img {
                    display:block
                }
            }

            @media (max-width: 1199px) {
                .header .burger-container img {
                    display:block
                }
            }

            .header .burger-container button {
                cursor: pointer;
                border: none;
                background: 0 0;
                outline: 0
            }

            .header .logo-container {
                flex: 0 0 auto;
                display: flex;
                align-items: center;
                margin: 0 auto
            }

            .header .logo-container img {
                height: 37px;
                margin-left: 2rem
            }

            @media (max-width: 899px) {
                .header .logo-container img {
                    display:block;
                    margin: 0 auto;
                    height: 27px
                }
            }

            .header .main-nav {
                padding: 0;
                margin: 0 0 0 4.5rem;
                list-style: none;
                flex: 1 1 auto;
                display: flex;
                justify-content: space-around
            }

            .header .main-nav button {
                background: 0 0;
                border: none
            }

            @media (max-width: 899px) {
                .header .main-nav {
                    display:none
                }
            }

            @media (max-width: 1199px) {
                .header .main-nav {
                    display:none
                }
            }

            .header .main-nav .nav-item {
                display: inline-block;
                height: 64px;
                line-height: 64px;
                padding: 0 5px;
                font-size: 12px;
                color: #858585;
                text-decoration: none;
                text-transform: uppercase;
                white-space: nowrap;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                transition: all .3s ease
            }

            .header .main-nav .nav-item a {
                display: block;
                height: 100%;
                text-decoration: none;
                color: #858585
            }

            .header .main-nav .nav-item a.active {
                color: #990d15
            }

            .header .main-nav .nav-item img {
                width: .8rem;
                margin: 1rem 1rem 0 0
            }

            .header .main-nav .nav-item:hover {
                background: rgba(0,0,0,.125);
                cursor: pointer
            }

            .header .main-nav .nav-item:focus {
                background: rgba(0,0,0,.125);
                outline: 0
            }

            .header .search-section {
                flex: 0 0 auto;
                display: flex;
                justify-content: flex-end;
                align-items: center
            }

            @media (max-width: 899px) {
                .header .search-section {
                    flex:0 0 auto
                }
            }

            .header .search-section .search-container {
                flex: 0 0 auto;
                position: relative;
                display: inline-flex;
                justify-content: flex-end;
                margin-left: 1rem;
                transition: all .5s ease-in-out;
                transition-delay: .15s;
                cursor: pointer
            }

            .header .search-section .search-container:focus {
                outline: 0
            }

            .header .search-section .search-container-overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center
            }

            .header .search-section .search-container-overlay img {
                margin-top: .6rem
            }

            @media (max-width: 899px) {
                .header .search-section .search-container-overlay img {
                    margin:.4rem 0 0
                }
            }

            .header .search-section .search-container-circle-grey,.header .search-section .search-container-circle-red {
                font-family: inherit;
                width: 37px;
                height: 37px;
                border: none;
                border-radius: 20px;
                background: rgba(0,0,0,.06);
                outline: 0;
                padding-right: 37px;
                z-index: 0
            }

            @media (max-width: 899px) {
                .header .search-section .search-container-circle-grey,.header .search-section .search-container-circle-red {
                    width:28px;
                    height: 28px;
                    padding-right: 28px
                }
            }

            .header .search-section .search-container-circle-red {
                background: rgba(153,13,20,.466)
            }

            .header .search-section .search-hide {
                display: none
            }

            @media (max-width: 899px) {
                .header .search-section .search-hide {
                    display:block
                }
            }

            .header .search-section .search-hide-overlay {
                position: absolute;
                bottom: 0;
                right: 0;
                text-align: center
            }

            @media (max-width: 899px) {
                .header .search-section .search-hide-overlay img {
                    display:inline-block;
                    transform: translateY(-8px) translateX(-26px)
                }
            }

            .header .search-section .search-hide-circle {
                font-family: inherit;
                width: 28px;
                height: 28px;
                padding-right: 28px;
                border: none;
                border-radius: 20px;
                background: rgba(0,0,0,.06);
                outline: 0
            }

            @media (max-width: 899px) {
                .header .search-section .search-hide-circle {
                    width:28px;
                    height: 28px;
                    padding-right: 28px
                }
            }

            .header .search-section-appointment {
                color: #a8a8a8;
                background: #fff;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: 1px solid #a8a8a8;
                cursor: pointer;
                width: auto;
                height: 40px;
                padding: 0 12px;
                line-height: 40px;
                text-align: center;
                text-decoration: none
            }

            @media (max-width: 899px) {
                .header .search-section-appointment {
                    display:none
                }
            }

            @media (max-width: 1199px) {
                .header .search-section-appointment {
                    display:none
                }
            }

            .header .search-section-appointment:focus {
                outline: 0
            }

            .header .search-section-reserve {
                color: #fff;
                background: #990d15;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: none;
                cursor: pointer;
                width: 145px;
                height: 40px;
                padding: 0;
                line-height: 40px;
                text-align: center;
                margin-left: .6rem;
                text-decoration: none
            }

            @media (max-width: 899px) {
                .header .search-section-reserve {
                    display:none
                }
            }

            @media (max-width: 1199px) {
                .header .search-section-reserve {
                    display:none
                }
            }

            .header .search-section-reserve:focus {
                outline: 0
            }

            @media (max-width: 899px) {
                body.nav-slider-open {
                    overflow:hidden
                }
            }

            .open-dim {
                display: none;
                background-color: rgba(0,0,0,.5);
                position: fixed;
                top: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: auto;
                transition: all .5s ease-in-out;
                transition-delay: .15s;
                z-index: 10
            }

            @media (max-width: 599px) {
                .open-dim {
                    display:block
                }
            }

            @media (max-width: 1199px) {
                .open-dim {
                    display:block
                }
            }

            .nav-slider {
                padding: 35px;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                width: 75%;
                display: flex;
                color: #000;
                transform: translateX(-600px);
                overflow-y: auto;
                z-index: 11;
                display: none
            }

            @media (max-width: 599px) {
                .nav-slider {
                    padding:32px 35px 0 30px
                }
            }

            @media (max-width: 1199px) {
                .nav-slider {
                    display:block
                }
            }

            .nav-content {
                display: none;
                padding: 3rem 2rem;
                height: 100%;
                overflow: auto
            }

            @media (max-width: 599px) {
                .nav-content {
                    display:block
                }
            }

            @media (max-width: 1199px) {
                .nav-content {
                    display:block
                }
            }

            .nav-content a {
                text-decoration: none;
                color: #000
            }

            .nav-content a p {
                margin: 1.5rem 0;
                text-transform: uppercase;
                font-size: 14px;
                font-weight: 700
            }

            .nav-content a:focus {
                outline: 0
            }

            .nav-content-list {
                list-style-type: none;
                padding: 0;
                margin: 0
            }

            .nav-content-list-content {
                font-size: 14px;
                margin-bottom: 25px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .nav-content-list-section {
                    margin:2rem 0
                }
            }

            @media (max-width: 899px) {
                .nav-content-list-section .nav-slider-content {
                    margin:0
                }
            }

            .nav-content-list-section .nav-slider-content-hide {
                margin-top: 1rem;
                font-size: 14px
            }

            .nav-content .button-appointment {
                width: 100%;
                background: 0 0;
                border: 1px solid #a9a9a9;
                cursor: pointer;
                font-size: 15px;
                border-radius: 3px;
                line-height: 40px;
                text-align: center;
                text-decoration: none;
                color: #a9a9a9;
                margin-top: 4rem
            }

            .nav-content .button-appointment:focus {
                outline: 0
            }

            .nav-content .button-appointment a {
                color: #a9a9a9
            }

            @media (max-width: 599px) {
                .nav-content .button-appointment {
                    font-size:12px;
                    padding: 0
                }
            }

            .nav-content .button-reserve {
                margin-top: 1rem;
                width: 100%;
                background: #ab101b;
                border: none;
                cursor: pointer;
                font-size: 15px;
                border-radius: 3px;
                padding: .5rem 1rem;
                line-height: 25px;
                text-align: center;
                margin-bottom: 2rem
            }

            .nav-content .button-reserve a {
                text-decoration: none;
                color: #fff
            }

            .nav-content .button-reserve a:focus {
                outline: 0
            }

            .slide-in {
                transform: translateX(0);
                transition: transform .5s ease-in-out
            }

            .slide-out {
                transform: translateX(-100%);
                transition: transform .4s ease-in-out
            }

            .glaze {
                display: none;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                background: #fff;
                opacity: .9
            }

            @media (max-width: 599px) {
                .glaze {
                    display:block
                }
            }

            @media (max-width: 1199px) {
                .glaze {
                    display:block
                }
            }

            .glaze-in {
                transform: translateX(0)
            }

            .glaze-in,.glaze-out {
                transition: transform .3s ease-in-out
            }

            .glaze-out {
                transform: translateX(-100%)
            }

            .nav-slider-content-container {
                display: flex;
                justify-content: space-between;
                cursor: pointer;
                margin-top: -10px
            }

            .nav-slider-content-container:focus {
                outline: 0
            }

            .nav-slider-content-container img {
                transition: transform .2s ease
            }

            .nav-slider-content-container.active img {
                transform: rotate(180deg)
            }

            .nav-slider-content-container-dropdown {
                font-size: 15px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .nav-slider-content-container-dropdown {
                    font-size:14px;
                    margin: 0
                }
            }

            .nav-slider-content-container-dropdown img {
                margin-left: 30px
            }

            .nav-slider-content-container-dropdown .rotate {
                transform: rotate(180deg)
            }

            .nav-slider-content-container-dropdown:focus {
                outline: 0
            }

            .nav-slider-content-hide {
                list-style: none;
                font-size: 12px
            }

            .nav-slider-content-hide li {
                margin-bottom: 15px;
                text-transform: capitalize
            }

            .nav-slider-content-hide li-link {
                text-transform: capitalize;
                text-decoration: none;
                font-size: 15px;
                color: #303030
            }

            .nav-slider-content-hide li-link:focus {
                outline: 0
            }

            .menu-container {
                padding: 40px 60px
            }

            @media (max-width: 599px) {
                .menu-container {
                    padding:40px
                }
            }

            .menu-container .test,.menu-container-home-link {
                text-decoration: none;
                color: #000;
                text-transform: uppercase
            }

            .menu-container .test.active,.menu-container-home-link.active {
                color: #990d15
            }

            .menu-container h3 {
                text-transform: uppercase;
                margin-top: 4rem
            }

            .menu-content-list {
                list-style: none;
                padding: 0
            }

            .menu-content-list-section .nav-slider-content {
                margin: -10px 0 10px
            }

            .menu-content-list li {
                margin-bottom: 1.5rem
            }

            .menu-content-list a {
                text-decoration: none;
                font-size: 15px;
                color: #303030;
                text-transform: capitalize
            }

            @media (max-width: 599px) {
                .menu-content-list a {
                    font-size:12px
                }
            }

            .modal-background {
                left: 0;
                width: 100vw;
                background-color: #000;
                opacity: .5
            }

            .modal-background,.side-modal {
                position: fixed;
                top: 0;
                height: 100vh;
                z-index: 100000
            }

            .side-modal {
                background: #fff;
                right: 0;
                width: 380px;
                overflow-x: hidden;
                overflow-y: auto;
                outline: 0;
                animation: slide-in-right .5s cubic-bezier(.25,.46,.45,.94) both
            }

            @media (max-width: 599px) {
                .side-modal {
                    width:100%
                }
            }

            .side-modal-close {
                background: 0 0;
                border: 0;
                cursor: pointer;
                position: absolute;
                right: 50px;
                top: 40px
            }

            .side-modal-close:focus {
                outline: 0
            }

            .side-modal-close img {
                height: 2rem;
                opacity: .5
            }

            .header-property-search {
                position: relative;
                max-width: 1280px;
                padding: 27px 30px 4px;
                margin: 0 auto;
                height: 100%
            }

            @media (max-width: 899px) {
                .header-property-search {
                    padding:80px 27px 30px;
                    overflow: auto
                }
            }

            .header-property-search-container {
                display: none;
                top: 64px;
                left: 0;
                right: 0;
                background: #1d2e41;
                box-shadow: 10px 2px 10px 0 hsla(0,0%,45.1%,.07);
                z-index: 10000
            }

            .header-property-search-container.display {
                display: block
            }

            .header-property-search-container.display:not(.sticky) {
                position: fixed;
                z-index: 10005
            }

            @media (max-width: 899px) {
                .header-property-search-container.sticky {
                    display:none
                }
            }

            .header-property-search-container.sticky.stick {
                position: fixed;
                z-index: 10005
            }

            @media (max-width: 899px) {
                .header-property-search-container.sticky.stick {
                    position:fixed;
                    display: block
                }
            }

            @media (max-width: 899px) {
                .header-property-search-container {
                    position:fixed;
                    top: 0;
                    bottom: 0;
                    z-index: 10005
                }
            }

            .header-property-search-exit {
                cursor: pointer;
                display: none;
                position: absolute;
                top: 30px;
                right: 35px;
                background: 0 0;
                border: 0;
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1);
                padding: 0
            }

            .header-property-search-exit>img {
                height: 20px
            }

            @media (max-width: 899px) {
                .header-property-search-exit {
                    display:block
                }
            }

            .header-property-search-title {
                display: none;
                color: #fff;
                font-size: 24px;
                font-weight: 600;
                margin: 0 0 10px
            }

            @media (max-width: 899px) {
                .header-property-search-title {
                    display:block;
                    font-size: 20px;
                    color: #fff;
                    margin: 0 0 15px
                }
            }

            .header-property-search-title small {
                font-size: 17px;
                font-weight: 300;
                text-transform: uppercase
            }

            @media (max-width: 899px) {
                .header-property-search-title small {
                    font-size:16px
                }
            }

            .header-property-search-fields {
                position: relative;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                margin: 0 -10px
            }

            .header-property-search-fields>* {
                flex: 1 1 auto;
                margin-left: 10px!important;
                margin-right: 10px!important;
                max-width: 338px
            }

            @media (max-width: 899px) {
                .header-property-search-fields>* {
                    max-width:unset
                }
            }

            .header-property-search-advanced-filters.hidden {
                display: none
            }

            .header-property-search-advanced-filters-title {
                color: #fff;
                font-size: 12px;
                font-weight: 400;
                letter-spacing: 1px;
                margin: 0 0 14px;
                text-transform: uppercase
            }

            .header-property-search-submit {
                cursor: pointer;
                flex: 0 1 auto;
                color: #fff;
                font-size: 15px;
                font-weight: 600;
                line-height: 20px;
                background: #990d15;
                border: 0;
                border-radius: 3px;
                padding: 15px 17px;
                white-space: nowrap;
                align-self: start;
                margin: 0 0 30px
            }

            @media (max-width: 899px) {
                .header-property-search-submit {
                    width:100%
                }
            }

            .property-search-input {
                width: 100%;
                border: 1px solid #fff;
                border-radius: 3px;
                background: 0 0;
                font-size: 15px;
                font-weight: 300;
                color: #fff;
                line-height: 26px;
                padding: 11px 12px 11px 40px;
                outline: 0
            }

            .property-search-input::-webkit-input-placeholder {
                opacity: .5
            }

            .property-search-input:-ms-input-placeholder {
                opacity: .5
            }

            .property-search-input::-ms-input-placeholder {
                opacity: .5
            }

            .property-search-input::placeholder {
                opacity: .5
            }

            .property-search-input-container {
                position: relative;
                width: 100%;
                margin: 0 0 23px
            }

            .property-search-input-icon {
                position: absolute;
                top: 18px;
                left: 14px;
                bottom: 0;
                height: 16px;
                width: 16px
            }

            .property-search-select-container {
                margin: 0 0 23px;
                width: 100%
            }

            .property-search-select-container .css-1uccc91-singleValue,.property-search-select-container .css-1wa3eu0-placeholder,.property-search-select-container input {
                color: #fff!important;
                font-size: 15px;
                font-weight: 300;
                line-height: 26px;
                padding: 0 10px!important
            }

            .property-search-select-container .css-1pahdxg-control,.property-search-select-container .css-yk16xz-control {
                background: 0 0;
                border: 1px solid #fff!important;
                box-shadow: none!important;
                border-radius: 3px;
                height: 50px
            }

            .property-search-select-container .css-1okebmr-indicatorSeparator {
                display: none
            }

            .property-search-select-container .css-1wa3eu0-placeholder {
                opacity: .5;
                white-space: nowrap
            }

            .newsletter-section {
                background: #f3f3f3
            }

            .newsletter-section .newsletter-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-width: 1410px;
                padding: 25px 65px 20px;
                margin: 0 auto
            }

            @media (max-width: 599px) {
                .newsletter-section .newsletter-container {
                    flex-direction:column;
                    padding: 45px 21px
                }
            }

            @media (max-width: 899px) {
                .newsletter-section .newsletter-container {
                    flex-direction:column;
                    padding: 45px 21px
                }
            }

            .newsletter-section .newsletter-container .newsletter-header {
                flex: 0 0 auto;
                width: 350px;
                margin-right: 50px
            }

            @media (max-width: 599px) {
                .newsletter-section .newsletter-container .newsletter-header {
                    padding:0 8px;
                    width: 100%;
                    margin: 0 0 30px
                }
            }

            @media (max-width: 899px) {
                .newsletter-section .newsletter-container .newsletter-header {
                    padding:0 8px;
                    width: 100%;
                    margin: 0 0 30px
                }
            }

            .newsletter-section .newsletter-container .newsletter-header-text {
                color: #9b9b9b;
                text-transform: uppercase;
                font-weight: 300;
                font-size: 15px;
                line-height: 21px;
                margin: 0
            }

            .newsletter-section .newsletter-container .newsletter-header-image {
                width: 100%;
                max-width: 400px
            }

            .newsletter-section .newsletter-container .newsletter-input-container {
                position: relative;
                width: 100%
            }

            .newsletter-section .newsletter-container .newsletter-input-container form {
                position: relative;
                margin-top: 2rem
            }

            .newsletter-section .newsletter-container .newsletter-input-container .grecaptcha-badge {
                margin-left: 30rem;
                margin-top: -2rem
            }

            @media (max-width: 1199px) {
                .newsletter-section .newsletter-container .newsletter-input-container .grecaptcha-badge {
                    margin:0
                }
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-form-required {
                display: none!important
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-error-msgs,.newsletter-section .newsletter-container .newsletter-input-container .inputs-list {
                list-style: none;
                padding: 0
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-error-msg {
                color: red;
                font-size: 12px
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=email] {
                font-size: 15px;
                line-height: 21px;
                border: 0;
                border-bottom: .5px solid #bebebe;
                letter-spacing: 1.15px;
                background-color: #f3f3f3;
                padding: 14px 10px;
                width: 100%
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=email]::-webkit-input-placeholder {
                color: #bebebe;
                font-size: 15px;
                line-height: 21px;
                text-transform: uppercase
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=email]:-ms-input-placeholder {
                color: #bebebe;
                font-size: 15px;
                line-height: 21px;
                text-transform: uppercase
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=email]::-ms-input-placeholder {
                color: #bebebe;
                font-size: 15px;
                line-height: 21px;
                text-transform: uppercase
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=email]::placeholder {
                color: #bebebe;
                font-size: 15px;
                line-height: 21px;
                text-transform: uppercase
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=email]:focus {
                outline: 0
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=submit] {
                cursor: pointer;
                position: absolute;
                top: 15px;
                right: 13px;
                background: 0 0;
                border: 0;
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyM3B4IiBoZWlnaHQ9IjIxcHgiIHZpZXdCb3g9IjAgMCAyMyAyMSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjQkVCRUJFIiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGQ9Ik04LDE2IEw4LDIwLjMwNDAwODkgQzgsMjAuNjA0Njc3MSA4LjIwNDU3MzQsMjAuODcxMDA5NyA4LjUwNzQ5OTM5LDIwLjk2NTY2NDQgQzguNTgzMjMwODgsMjAuOTg4ODY0MSA4LjY2MDkyOTQzLDIxIDguNzM3NjQ0NDYsMjEgQzguOTY3Nzg5NTMsMjEgOS4xOTAwNjYzOSwyMC44OTc5MjEzIDkuMzMxNjk0MTIsMjAuNzE2MDM1NiBMMTIsMTcuMjg5OTAzNSBMOCwxNiBaIi8+PHBhdGggZD0iTTIyLjY5ODA5NDQsMC4xMjUxNzkxOTUgQzIyLjQ3NzY3ODQsLTAuMDIxNTIwMTU1MSAyMi4xODgyNjI3LC0wLjA0MTMyMDA2NzQgMjEuOTQ4NjgwMSwwLjA3NjU3OTQxMDIgTDAuMzg2MjQ5NzEyLDEwLjY1MTUzMjYgQzAuMTMxMzMzODY3LDEwLjc3NjYzMiAtMC4wMTkxMjM5ODAzLDExLjAzMjIzMDkgMC4wMDE5NTkyODQ5OSwxMS4zMDEzMjk3IEMwLjAyNDAwMDg4MDUsMTEuNTcxMzI4NSAwLjIxNDcwODU5OCwxMS44MDE3Mjc1IDAuNDg1OTE2MDU3LDExLjg4OTAyNzEgTDYuNDgwMjcxNzEsMTMuODEzMjE4NSBMMTkuMjQ2MTg4OCwzLjU2MjI2Mzk3IEw5LjM2NzcyMDczLDE0LjczOTMxNDQgTDE5LjQxMzg5NjYsMTcuOTY0MDAwMiBDMTkuNDg4NjQ2NCwxNy45ODc0MDAxIDE5LjU2NzIyOTUsMTggMTkuNjQ1ODEyNiwxOCBDMTkuNzc2MTQ1NSwxOCAxOS45MDU1MjAxLDE3Ljk2NjcwMDEgMjAuMDE5NTYxNCwxNy45MDE5MDA0IEMyMC4yMDE2NDQxLDE3Ljc5NzUwMDkgMjAuMzI1MjY4NywxNy42MjIwMDE3IDIwLjM1Njg5MzYsMTcuNDI0OTAyNSBMMjIuOTkyMzAxOCwwLjc3NDk3NjMxNiBDMjMuMDMxNTkzMywwLjUyMjk3NzQzMiAyMi45MTg1MTAzLDAuMjcyNzc4NTQxIDIyLjY5ODA5NDQsMC4xMjUxNzkxOTUgWiIvPjwvZz48L2c+PC9zdmc+) no-repeat 50%/cover;
                height: 25px;
                width: 25px;
                color: transparent;
                padding: 0
            }

            .newsletter-section .newsletter-container .newsletter-input-container input[type=submit]:focus {
                outline: 0
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-form-booleancheckbox-display {
                display: flex;
                font-size: 12px;
                line-height: 15px
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-form-booleancheckbox-display input,.newsletter-section .newsletter-container .newsletter-input-container .hs-form-booleancheckbox-display span {
                display: inline-block
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-form-booleancheckbox-display input {
                height: 15px;
                margin: 0 5px 0 0;
                width: 15px
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-form-booleancheckbox-display a {
                color: #990d15;
                text-decoration: none
            }

            .newsletter-section .newsletter-container .newsletter-input-container .hs-form-booleancheckbox-display a:hover {
                text-decoration: underline
            }

            .footer-section {
                position: relative;
                background: #fff
            }

            .footer-section-content {
                display: flex;
                margin: 0 auto;
                position: relative
            }

            @media (max-width: 599px) {
                .footer-section-content {
                    flex-direction:column
                }

                .footer-section-content>div {
                    width: 100%
                }
            }

            @media (max-width: 899px) {
                .footer-section-content {
                    flex-direction:column
                }

                .footer-section-content>div {
                    width: 100%
                }
            }

            .footer-section-content .footer-background-image {
                position: absolute;
                flex: 0 0 auto;
                width: 37%;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 0;
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyMDRweCIgaGVpZ2h0PSIxNjJweCIgdmlld0JveD0iMCAwIDIwNCAxNjIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHJlY3QgaWQ9InBhdGgtMSIgeD0iMCIgeT0iMCIgd2lkdGg9IjUzNiIgaGVpZ2h0PSIzNTciLz48cG9seWdvbiBpZD0icGF0aC0zIiBwb2ludHM9IjAuMjY2Nzk1ODk4IDAuMDg1NzM3Nzc3OCA4MC45MjQ2NDkyIDAuMDg1NzM3Nzc3OCA4MC45MjQ2NDkyIDc0LjY1Mjc3NzggMC4yNjY3OTU4OTggNzQuNjUyNzc3OCIvPjxwb2x5Z29uIGlkPSJwYXRoLTUiIHBvaW50cz0iMC4yNDYwOTcxMTEgMC4zMTYyIDY2Ljk1NzQzOTYgMC4zMTYyIDY2Ljk1NzQzOTYgMTE2LjY1NjAyIDAuMjQ2MDk3MTExIDExNi42NTYwMiIvPjwvZGVmcz48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgLTE5NS4wMDAwMDApIj48Zz48ZyBpZD0iTWFzayIgZmlsbC1ydWxlPSJub256ZXJvIj48cmVjdCBpZD0icGF0aC0xIiB4PSIwIiB5PSIwIiB3aWR0aD0iNTM2IiBoZWlnaHQ9IjM1NyIvPjwvZz48ZyBpZD0iQ2xpcHBlZCI+PG1hc2sgaWQ9Im1hc2stMiIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSIvPjwvbWFzaz48ZyBpZD0icGF0aC0xIi8+PGcgb3BhY2l0eT0iMC41IiBtYXNrPSJ1cmwoI21hc2stMikiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05MS4wMDAwMDAsIDE5NS4wMDAwMDApIj48Zz48cGF0aCBkPSJNMjc4Ljg4NDQ4MSw2OS43OTU3NTAxIEMyOTMuNjEzNzg3LDYxLjA1Njc2MDIgMjk5LjE2MzEzMSw0My4xNTg5NDA5IDI5MS4yNzk2MDUsMjkuODE5NjMzOSBDMjgzLjM5NTQ4NCwxNi40ODE1MjE0IDI2NS4wNjQxNywxMi43NTI1MzUzIDI1MC4zMzU0NiwyMS40OTIxMjI1IEMyNDcuMTI5MjM5LDIzLjM5NDIzOTggMjQyLjAxNDQyNSwyOC41MTExNDQ0IDI0Mi4wNjY4NzgsMjguMzU4ODU1NiBMMTM5Ljg2NTM2NywxMjEuNzM5Mzc5IEwxNDAuNDcyNzU1LDEyMi43NjY1ODIgTDI3MC4yNjY2MDYsNzMuNDI2MTk2MyBDMjcwLjA3MTA5Nyw3My42MzcwMTE5IDI3Ni4xMDg2MTcsNzEuNDQyODU4MyAyNzguODg0NDgxLDY5Ljc5NTc1MDEiIGZpbGw9IiNBNTJBMkUiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik0yMzQuODIyMDI5LDEyNC4xMjAxNiBDMjQ1LjQ1NzcxNCwxMjIuNTgyOTQgMjUyLjk0Nzc5NCwxMTMuNTg4NTkzIDI1MS41NTA0MTQsMTA0LjAzMDc1OCBDMjUwLjE1MjQzMyw5NC40NzI5MjMyIDI0MC4zOTgzNTcsODcuOTcwNDQ2OSAyMjkuNzYyMDcyLDg5LjUwNzY2NjkgQzIyNy40NDcwOTgsODkuODQyMTgyMiAyMjMuMjU3MzU1LDkxLjU3NTU3OTYgMjIzLjMyMzkyNSw5MS41MDA0NDc4IEwxNDEuNzE4MDk5LDEyMS4wMzAyMTcgTDE0MS44MjYwNTEsMTIxLjc2NjYyNyBMMjI4Ljk1MzAzLDEyNC4xNjQ4ODEgQzIyOC43ODg3MDMsMTI0LjIzOTQxNyAyMzIuODE3MTE3LDEyNC40MDkzNTggMjM0LjgyMjAyOSwxMjQuMTIwMTYiIGZpbGw9IiNCOTMyMzYiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik0yNDYuNjQwMzk2LDE5MC40NjcxMDkgQzI1OS43MTA3NzcsMTk2LjA4Mzc0OCAyNzQuNTM5MzU1LDE5MC42NTU2NTYgMjc5Ljc2MDY4NSwxNzguMzQ0MTA4IEMyODQuOTgyMDE1LDE2Ni4wMzI1NiAyNzguNjE5NDczLDE1MS40OTg4MTMgMjY1LjU0OTA5MiwxNDUuODgyMTc0IEMyNjIuNzA0MTQsMTQ0LjY1OTkzNSAyNTYuNzUzMzE5LDE0My43ODUyNzEgMjU2Ljg4MTk4MywxNDMuNzQzMTA1IEwxNDMuOTg4NzQ0LDEyMS42ODMxNTggTDE0My41ODU5OTgsMTIyLjYzMTkxNCBMMjM5Ljk5ODM4NSwxODYuNDE1NDY3IEMyMzkuNzYwODA3LDE4Ni4zODg5NjIgMjQ0LjE3NzI0NCwxODkuNDA4NzE4IDI0Ni42NDAzOTYsMTkwLjQ2NzEwOSIgZmlsbD0iI0EyMjMyNyIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTMwLjg4MDgyMjYsMTQzLjcwNTk1NiBDMTguODc4MTUzMSwxNDguNDU5OTc0IDEyLjY0NzYzNjIsMTYxLjA2NTcwMiAxNi45NjQ5MDE1LDE3MS44NjI4NTEgQzIxLjI4MjE2NjgsMTgyLjY1OTk5OSAzNC41MTIzNDEsMTg3LjU1ODUxMiA0Ni41MTUwMTA1LDE4Mi44MDUwOTEgQzQ5LjEyNzgwNzksMTgxLjc3MDMzNyA1My41MzkyNjU5LDE3OC41Nzc3MDYgNTMuNDgyMjcwMywxNzguNjgzOTg4IEwxNDAuNTk1NTE3LDEyMS40NTMwNzEgTDE0MC4yNjI1NDIsMTIwLjYyMTMyNyBMMzcuNzI5ODkxNiwxNDIuMDIyNzY0IEMzNy45MDAyNzg0LDE0MS44ODk2MTQgMzMuMTQyNjQ3MiwxNDIuODA5NzI3IDMwLjg4MDgyMjYsMTQzLjcwNTk1NiIgZmlsbD0iI0FBMjQyOCIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTE3Mi44OTY4NzMsMTg4LjAwOTkzOSBDMTc3LjY1NDQ3NSwxOTQuOTAxOTg1IDE4Ni41Njk4NDEsMTk3LjAwODI1MSAxOTIuODA5NDY2LDE5Mi43MTQ4NDYgQzE5OS4wNDkwOSwxODguNDIyMDM1IDIwMC4yNDk5NTcsMTc5LjM1NDc0MyAxOTUuNDkyMzU1LDE3Mi40NjMyOTIgQzE5NC40NTY0ODgsMTcwLjk2MzU3MyAxOTEuNzg5MDg2LDE2OC42NDAyNTggMTkxLjg2NTMzMSwxNjguNjYwNDc2IEwxNDIuODgzNTM0LDEyMS45NDAyNTQgTDE0Mi40MDI4MywxMjIuMjcwODgyIEwxNzAuODM1ODYxLDE4My45MjgyMzEgQzE3MC43MjYyNTgsMTgzLjgzOTYyNyAxNzEuOTk5Nzk2LDE4Ni43MTA2MTkgMTcyLjg5Njg3MywxODguMDA5OTM5IiBmaWxsPSIjQTYyMjI2IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNMTQ1LjY5MDc2NiwxNzQuODA1NzIxIEMxNDcuMjE3NjczLDE4MC42OTE2ODggMTUyLjczNzE2OCwxODQuMzM1OTE5IDE1OC4wMTg1ODEsMTgyLjk0NTg4OCBDMTYzLjMwMDU4MywxODEuNTU1ODU3IDE2Ni4zNDQzNzgsMTc1LjY1ODYxMyAxNjQuODE4MDYxLDE2OS43NzMyNCBDMTY0LjQ4NTY4OSwxNjguNDkxODI0IDE2My4yNTA0OTEsMTY2LjI0NDc0NiAxNjMuMjk2NDU4LDE2Ni4yNzc5ODMgTDE0MS42MTkyMTEsMTIyLjI0MTU0OSBMMTQxLjIxMTk5NiwxMjIuMzQ4OTc2IEwxNDUuMjk5NDYzLDE3MS41MDc1MTQgQzE0NS4yNDc2MDQsMTcxLjQyMDI2NiAxNDUuNDAzMTgyLDE3My42OTcwMiAxNDUuNjkwNzY2LDE3NC44MDU3MjEiIGZpbGw9IiNBQzI4MkMiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDU4LjU5NDk4NSwgMTIyLjE0MDc1NCkiPjxnPjxtYXNrIGlkPSJtYXNrLTQiIGZpbGw9IndoaXRlIj48dXNlIHhsaW5rOmhyZWY9IiNwYXRoLTMiLz48L21hc2s+PGcgaWQ9InBhdGgtMyIvPjxwYXRoIGQ9Ik01LjQ1ODQ4ODE4LDY3Ljk1MjUxMTEgQzExLjM4NTM5MjksNzQuNzU3MTExMSAyMi4yNzQ0MTMsNzQuOTQwMTExMSAyOS43Nzk3OTE5LDY4LjM2MTcxMTEgQzMxLjQxMzI5NDUsNjYuOTMwNzExMSAzMy43OTg2NTA4LDYzLjQ1MjUxMTEgMzMuNzg0ODkzNyw2My41NDU1MTExIEw4Mi4zODg2MjI1LC0wLjg2NDQ4ODg4OSBMODEuOTMxNjQ4NSwtMS4zODg4ODg4OSBMMTIuODYzMzgwNyw0MC43MjA5MTExIEMxMi45NTMxMDA3LDQwLjU3OTkxMTEgOS43Mjk3NTkzOSw0Mi40ODA3MTExIDguMzE1MTczNyw0My43MjAzMTExIEMwLjgxMDM5Mjg3NSw1MC4yOTg3MTExIC0wLjQ2OTAxNDY0OCw2MS4xNDczMTExIDUuNDU4NDg4MTgsNjcuOTUyNTExMSBaIiBmaWxsPSIjOUYyMjI2IiBmaWxsLXJ1bGU9Im5vbnplcm8iIG1hc2s9InVybCgjbWFzay00KSIvPjwvZz48L2c+PHBhdGggZD0iTTI5LjM3ODM0MTUsNzQuMjQyNTg3OSBDMTYuMDMwMDY0Niw3MS4zNDM0NTMgMy4xMDUwMzg4OCw3OC44NjY1NzgxIDAuNTA5MjU3ODkzLDkxLjA0NjMyODkgQy0yLjA4NjUyMzA5LDEwMy4yMjYwOCA2LjYyOTkzNzA1LDExNS40NDk5NDkgMTkuOTc4MjE0LDExOC4zNDg0OCBDMjIuODgzNTAxMSwxMTguOTgwMDQgMjguNjQ0Mzg2OCwxMTguNzU4MjM5IDI4LjUzMTI0MDUsMTE4LjgxOTI3OSBMMTM4Ljg1MTMzNCwxMTkuNjIxMjcxIEwxMzkuMDUxODg0LDExOC42ODI2OTMgTDM2LjM4NjIzMTgsNzYuODEyOTQ4NyBDMzYuNjE0OTE5MSw3Ni43OTYwMjY1IDMxLjg5MzkwMjMsNzQuNzg4OTMzMSAyOS4zNzgzNDE1LDc0LjI0MjU4NzkiIGZpbGw9IiNBOTIwMjUiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik0xOTMuMjY1NzA4LDUwLjA3MzE2NTMgQzE5Ny44MzMzNTksNDEuMjM2NTY5NiAxOTQuODk3NjQ3LDMwLjU5Nzk2MTggMTg2LjcwODMzOCwyNi4zMTE0MDIxIEMxNzguNTE5MDI5LDIyLjAyNTQzODYgMTY4LjE3NzY5NCwyNS43MTQxMDkzIDE2My42MTA2MzYsMzQuNTUwNzA1IEMxNjIuNjE2NjY0LDM2LjQ3NDMyMTcgMTYxLjY5NDM2Nyw0MC41ODUwMzE3IDE2MS42NzE4NTgsNDAuNDkyNjM2MSBMMTQwLjQxOTM0MiwxMTguMTkzNzU3IEwxNDEuMDUwNzkyLDExOC41MjQ1OTIgTDE5MC4xMjA4OTUsNTQuNTAxNTk2OSBDMTkwLjA5MDA5Myw1NC42NjYxMjA3IDE5Mi40MDUwMTcsNTEuNzM4NjcwNSAxOTMuMjY1NzA4LDUwLjA3MzE2NTMiIGZpbGw9IiNBQTI0MjgiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDczLjY3MDIzNSwgMC42MjMxNDEpIj48Zz48bWFzayBpZD0ibWFzay02IiBmaWxsPSJ3aGl0ZSI+PHVzZSB4bGluazpocmVmPSIjcGF0aC01Ii8+PC9tYXNrPjxnIGlkPSJwYXRoLTUiLz48cGF0aCBkPSJNNDEuMDM4NDE1NCwxMy40MTM0MiBDMzUuOTcyMDE3OSwyLjI5MjQyIDIzLjE5NjY2MjYsLTIuNzIwNTggMTIuNTAzMDUzNiwyLjIxNjgyIEMxLjgxMDA0MDY3LDcuMTU0MjIgLTIuNzUyMTYwNTUsMjAuMTcyNDIgMi4zMTQyMzY5MSwzMS4yOTM0MiBDMy40MTczODk2OCwzMy43MTM4MiA2LjcyNTY1NjAzLDM3LjY5MzAyIDYuNjE3Nzg0MjYsMzcuNjQ2ODIgTDY2LjEzMzIwMzksMTE2LjY1NjAyIEw2Ni45NTc0Mzk2LDExNi4yNzU2MiBMNDIuODk5NjUwNCwxOS44MzY0MiBDNDMuMDM3MzIxLDE5Ljk4OTQyIDQxLjk5MzE2OTksMTUuNTA5MjIgNDEuMDM4NDE1NCwxMy40MTM0MiIgZmlsbD0iI0I5MzIzNiIgZmlsbC1ydWxlPSJub256ZXJvIiBtYXNrPSJ1cmwoI21hc2stNikiLz48L2c+PC9nPjxwYXRoIGQ9Ik0xMDAuNzA4MzE3LDU3LjY5NjAyNzggQzk0LjkxNzg2Nyw1MS40OTgzMzM1IDg1LjcxODUxMzUsNTAuNzQ5ODUxNSA4MC4xNTk5OSw1Ni4wMjQ0OTc2IEM3NC42MDIwNTk3LDYxLjI5OTE0MzggNzQuNzkwMDkyMSw3MC41OTk1NzExIDgwLjU4MDU0MjEsNzYuNzk3MjY1MyBDODEuODQwNDE4Nyw3OC4xNDY1NjU2IDg0Ljg1MTkwMzUsODAuMDcyMTczMSA4NC43NzMwMTI5LDgwLjA2MzIwNTcgTDE0MC42ODMzMDEsMTE5LjUxMDM2MSBMMTQxLjExMTU2NCwxMTkuMTA0NDM1IEwxMDMuMzgzNDc5LDYxLjQ4MzI3NTEgQzEwMy41MDU2Nyw2MS41NTU2MTI1IDEwMS43OTkxNDIsNTguODY0MTg1OCAxMDAuNzA4MzE3LDU3LjY5NjAyNzgiIGZpbGw9IiNBNjIyMjYiIGZpbGwtcnVsZT0ibm9uemVybyIvPjwvZz48L2c+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=) 0 100% no-repeat,linear-gradient(#990d15,#990d15)
            }

            @media (max-width: 599px) {
                .footer-section-content .footer-background-image {
                    display:none
                }
            }

            @media (max-width: 899px) {
                .footer-section-content .footer-background-image {
                    flex-direction:column;
                    width: 100%;
                    height: 50%
                }
            }

            .footer-section-content .footer-avida-container {
                flex: 0 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                width: 33.33%;
                padding: 43px 65px 21px;
                margin: .3rem 0 0 3rem;
                z-index: 1
            }

            @media (max-width: 599px) {
                .footer-section-content .footer-avida-container {
                    width:100%;
                    background: linear-gradient(#990d15,#990d15);
                    margin: 0;
                    padding: 25px 32px 36px
                }
            }

            @media (min-width: 600px) {
                .footer-section-content .footer-avida-container {
                    padding:25px 32px 16px
                }
            }

            @media (max-width: 599px) {
                .footer-section-content .footer-avida-container .footer-avida-icon {
                    width:25%
                }
            }

            .footer-section-content .footer-avida-container img {
                margin-bottom: 28px
            }

            .footer-section-content .footer-avida-container .footer-avida-content {
                color: hsla(0,0%,100%,.8);
                font-size: 13px;
                line-height: 22px;
                margin: 0 0 25px
            }

            @media (max-width: 599px) {
                .footer-section-content .footer-avida-container .footer-avida-content {
                    font-size:12px;
                    line-height: 17px
                }
            }

            @media (max-width: 899px) {
                .footer-section-content .footer-avida-container .footer-avida-content {
                    width:80vw
                }
            }

            .footer-section-content .footer-avida-container .footer-social-container {
                display: flex;
                justify-content: flex-start;
                margin-bottom: 3rem
            }

            @media (max-width: 599px) {
                .footer-section-content .footer-avida-container .footer-social-container {
                    position:absolute;
                    top: 23px;
                    right: 21px
                }
            }

            .footer-section-content .footer-avida-container .footer-social-container a {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                margin-right: 10px;
                border: 1px solid hsla(0,0%,100%,.15)
            }

            .footer-section-content .footer-avida-container .footer-social-container a .footer-social-facebook {
                display: inline-block;
                transform: translateX(10px) translateY(6px)
            }

            .footer-section-content .footer-avida-container .footer-social-container a .footer-social-instagram {
                display: inline-block;
                transform: translateX(6px) translateY(6px)
            }

            .footer-section-content .footer-avida-container .footer-social-container a .footer-social-youtube {
                display: inline-block;
                transform: translateX(6px) translateY(8px)
            }

            @media (max-width: 899px) {
                .footer-section-content .footer-avida-container .footer-agreement {
                    width:80vw
                }
            }

            .footer-section-content .footer-avida-container .footer-agreement-links {
                text-decoration: none;
                margin: 7.5px 0;
                font-size: 12px;
                line-height: 17px;
                color: #fff
            }

            .footer-section-content .footer-avida-container .footer-agreement-links:active {
                text-decoration: none
            }

            .footer-section-content .footer-avida-container .footer-agreement-links:hover {
                cursor: pointer
            }

            @media (max-width: 599px) {
                .footer-section-content .footer-avida-container .footer-agreement-links {
                    font-size:11px
                }
            }

            .footer-section-content .footer-avida-container .dot-separator {
                color: hsla(0,0%,100%,.3);
                margin: 0 10px
            }

            .footer-section .footer-details-container {
                display: flex;
                flex: 1 1 auto
            }

            .footer-section .footer-details-container>div {
                width: 50%
            }

            @media (max-width: 599px) {
                .footer-section .footer-details-container {
                    flex-direction:column
                }

                .footer-section .footer-details-container>div {
                    width: 100%
                }
            }

            .footer-section .footer-details-container .hotline-container {
                display: flex;
                flex-direction: column;
                padding: 27px 65px 25px
            }

            @media (max-width: 599px) {
                .footer-section .footer-details-container .hotline-container {
                    width:100%;
                    padding: 15px 30px
                }
            }

            .footer-section .footer-details-container .hotline-container h3 {
                color: #a52930;
                font-size: 15px;
                font-weight: 400;
                text-transform: uppercase
            }

            .footer-section .footer-details-container .hotline-container-details {
                font-size: 13px;
                line-height: 19px;
                color: rgba(80,80,80,.5);
                margin: 0 0 6px
            }

            .footer-section .footer-details-container .hotline-container-link,.footer-section .footer-details-container .hotline-container-numbers {
                color: #505050;
                font-size: 13px;
                font-weight: 700;
                line-height: 19px;
                margin-bottom: 21px
            }

            .footer-section .footer-details-container .hotline-container-link {
                cursor: pointer
            }

            .footer-section .footer-details-container .hotline-container-link a {
                text-decoration: none;
                color: #505050
            }

            .footer-section .footer-details-container .footer-navlinks {
                display: flex;
                flex-direction: column;
                padding: 27px 5% 35px
            }

            @media (max-width: 599px) {
                .footer-section .footer-details-container .footer-navlinks {
                    padding:0 30px 35px
                }
            }

            .footer-section .footer-details-container .footer-navlinks h3 {
                color: #a52930;
                font-size: 15px;
                font-weight: 400;
                line-height: 21px;
                text-transform: uppercase
            }

            .footer-section .footer-details-container .footer-navlinks .footer-group,.footer-section .footer-details-container .footer-navlinks-container {
                display: flex;
                flex-direction: column
            }

            @media (max-width: 599px) {
                .footer-section .footer-details-container .footer-navlinks .footer-group,.footer-section .footer-details-container .footer-navlinks-container {
                    display:none
                }
            }

            .footer-section .footer-details-container .footer-navlinks-container .footer-group {
                display: flex;
                flex-direction: column
            }

            .footer-section .footer-details-container .footer-navlinks-container .footer-group:last-child {
                margin-right: 1rem
            }

            .footer-section .footer-details-container .footer-navlinks-container .footer-group a {
                font-size: 13px;
                font-weight: 700;
                line-height: 35px;
                color: #505050;
                text-decoration: none
            }

            .footer-section .footer-details-container .footer-navlinks-container .footer-group a:hover {
                cursor: pointer
            }

            .footer-section .section-subfooter {
                background: #f3f3f3
            }

            .footer-section .section-subfooter-container {
                display: flex;
                justify-content: space-between;
                max-width: 1410px;
                padding: 19px 100px 24px;
                margin: 0 auto;
                z-index: 2;
                position: relative
            }

            @media (max-width: 599px) {
                .footer-section .section-subfooter-container {
                    flex-direction:column;
                    justify-content: center;
                    align-items: center;
                    padding: 13px 32px 29px;
                    z-index: auto
                }
            }

            .footer-section .section-subfooter-container p {
                font-size: 12px;
                color: #bebebe;
                letter-spacing: 0;
                text-align: left;
                margin: 3px 0
            }

            .footer-section .section-subfooter-container a {
                margin-left: .4rem;
                color: inherit;
                text-decoration: none
            }

            .footer-section .section-subfooter-container a:hover {
                color: #000
            }

            .footer-link {
                display: none
            }

            @media (max-width: 599px) {
                .footer-link {
                    display:block
                }
            }

            .footer-link-container {
                display: flex;
                flex-direction: row;
                justify-content: space-between
            }

            .footer-link .footer-link-group a {
                font-size: 13px;
                font-weight: 700;
                line-height: 35px;
                color: #505050;
                text-decoration: none
            }

            .newsletter-title {
                text-transform: uppercase;
                font-size: 28px;
                font-weight: 700;
                line-height: 39px;
                color: #303030;
                margin: 0
            }

            @media (max-width: 599px) {
                .newsletter-title {
                    font-size:18px;
                    line-height: 25px
                }
            }

            .newsletter-title span {
                color: #990d15
            }

            .property-layout-container {
                display: flex;
                background: #fff
            }

            @media (max-width: 599px) {
                .property-layout-container {
                    flex-direction:column
                }
            }

            .property-layout-aside {
                flex: 0 0 auto;
                width: 296px;
                background: #f6f6f6
            }

            @media (max-width: 599px) {
                .property-layout-aside {
                    width:100%
                }
            }

            .property-layout-main {
                display: flex;
                flex-direction: column;
                flex: 1 1 auto;
                overflow-x: hidden
            }

            .property-layout-main-content {
                flex: 1 1 auto;
                height: 100%
            }

            .property-layout-main-navigation.mobile-visible {
                display: none
            }

            @media (max-width: 599px) {
                .property-layout-main-navigation.mobile-visible {
                    display:flex
                }
            }

            @media (max-width: 599px) {
                .property-layout-aside.mobile-hidden,.property-layout-main-navigation:not(.mobile-visible) {
                    display:none
                }
            }

            .property-layout-aside-header {
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyMzJweCIgaGVpZ2h0PSIxMzJweCIgdmlld0JveD0iMCAwIDIzMiAxMzIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHJlY3QgaWQ9InBhdGgtMSIgeD0iMCIgeT0iMCIgd2lkdGg9IjIzMiIgaGVpZ2h0PSIxMzIiLz48cG9seWdvbiBpZD0icGF0aC0zIiBwb2ludHM9IjAuMjQ2MDk3MTExIDAuMzE2MiA2Ni45NTc0Mzk2IDAuMzE2MiA2Ni45NTc0Mzk2IDExNi42NTYwMiAwLjI0NjA5NzExMSAxMTYuNjU2MDIiLz48L2RlZnM+PGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PG1hc2sgaWQ9Im1hc2stMiIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSIvPjwvbWFzaz48ZyBpZD0iUmVjdGFuZ2xlIi8+PGcgb3BhY2l0eT0iMC41IiBtYXNrPSJ1cmwoI21hc2stMikiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03NC4wMDAwMDAsIDEwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0yNzguODg0NDgxLDY5Ljc5NTc1MDEgQzI5My42MTM3ODcsNjEuMDU2NzYwMiAyOTkuMTYzMTMxLDQzLjE1ODk0MDkgMjkxLjI3OTYwNSwyOS44MTk2MzM5IEMyODMuMzk1NDg0LDE2LjQ4MTUyMTQgMjY1LjA2NDE3LDEyLjc1MjUzNTMgMjUwLjMzNTQ2LDIxLjQ5MjEyMjUgQzI0Ny4xMjkyMzksMjMuMzk0MjM5OCAyNDIuMDE0NDI1LDI4LjUxMTE0NDQgMjQyLjA2Njg3OCwyOC4zNTg4NTU2IEwxMzkuODY1MzY3LDEyMS43MzkzNzkgTDE0MC40NzI3NTUsMTIyLjc2NjU4MiBMMjcwLjI2NjYwNiw3My40MjYxOTYzIEMyNzAuMDcxMDk3LDczLjYzNzAxMTkgMjc2LjEwODYxNyw3MS40NDI4NTgzIDI3OC44ODQ0ODEsNjkuNzk1NzUwMSIgZmlsbD0iI0E1MkEyRSIvPjxwYXRoIGQ9Ik0yMzQuODIyMDI5LDEyNC4xMjAxNiBDMjQ1LjQ1NzcxNCwxMjIuNTgyOTQgMjUyLjk0Nzc5NCwxMTMuNTg4NTkzIDI1MS41NTA0MTQsMTA0LjAzMDc1OCBDMjUwLjE1MjQzMyw5NC40NzI5MjMyIDI0MC4zOTgzNTcsODcuOTcwNDQ2OSAyMjkuNzYyMDcyLDg5LjUwNzY2NjkgQzIyNy40NDcwOTgsODkuODQyMTgyMiAyMjMuMjU3MzU1LDkxLjU3NTU3OTYgMjIzLjMyMzkyNSw5MS41MDA0NDc4IEwxNDEuNzE4MDk5LDEyMS4wMzAyMTcgTDE0MS44MjYwNTEsMTIxLjc2NjYyNyBMMjI4Ljk1MzAzLDEyNC4xNjQ4ODEgQzIyOC43ODg3MDMsMTI0LjIzOTQxNyAyMzIuODE3MTE3LDEyNC40MDkzNTggMjM0LjgyMjAyOSwxMjQuMTIwMTYiIGZpbGw9IiNCOTMyMzYiLz48cGF0aCBkPSJNMjQ2LjY0MDM5NiwxOTAuNDY3MTA5IEMyNTkuNzEwNzc3LDE5Ni4wODM3NDggMjc0LjUzOTM1NSwxOTAuNjU1NjU2IDI3OS43NjA2ODUsMTc4LjM0NDEwOCBDMjg0Ljk4MjAxNSwxNjYuMDMyNTYgMjc4LjYxOTQ3MywxNTEuNDk4ODEzIDI2NS41NDkwOTIsMTQ1Ljg4MjE3NCBDMjYyLjcwNDE0LDE0NC42NTk5MzUgMjU2Ljc1MzMxOSwxNDMuNzg1MjcxIDI1Ni44ODE5ODMsMTQzLjc0MzEwNSBMMTQzLjk4ODc0NCwxMjEuNjgzMTU4IEwxNDMuNTg1OTk4LDEyMi42MzE5MTQgTDIzOS45OTgzODUsMTg2LjQxNTQ2NyBDMjM5Ljc2MDgwNywxODYuMzg4OTYyIDI0NC4xNzcyNDQsMTg5LjQwODcxOCAyNDYuNjQwMzk2LDE5MC40NjcxMDkiIGZpbGw9IiNBMjIzMjciLz48cGF0aCBkPSJNMzAuODgwODIyNiwxNDMuNzA1OTU2IEMxOC44NzgxNTMxLDE0OC40NTk5NzQgMTIuNjQ3NjM2MiwxNjEuMDY1NzAyIDE2Ljk2NDkwMTUsMTcxLjg2Mjg1MSBDMjEuMjgyMTY2OCwxODIuNjU5OTk5IDM0LjUxMjM0MSwxODcuNTU4NTEyIDQ2LjUxNTAxMDUsMTgyLjgwNTA5MSBDNDkuMTI3ODA3OSwxODEuNzcwMzM3IDUzLjUzOTI2NTksMTc4LjU3NzcwNiA1My40ODIyNzAzLDE3OC42ODM5ODggTDE0MC41OTU1MTcsMTIxLjQ1MzA3MSBMMTQwLjI2MjU0MiwxMjAuNjIxMzI3IEwzNy43Mjk4OTE2LDE0Mi4wMjI3NjQgQzM3LjkwMDI3ODQsMTQxLjg4OTYxNCAzMy4xNDI2NDcyLDE0Mi44MDk3MjcgMzAuODgwODIyNiwxNDMuNzA1OTU2IiBmaWxsPSIjQUEyNDI4Ii8+PHBhdGggZD0iTTE3Mi44OTY4NzMsMTg4LjAwOTkzOSBDMTc3LjY1NDQ3NSwxOTQuOTAxOTg1IDE4Ni41Njk4NDEsMTk3LjAwODI1MSAxOTIuODA5NDY2LDE5Mi43MTQ4NDYgQzE5OS4wNDkwOSwxODguNDIyMDM1IDIwMC4yNDk5NTcsMTc5LjM1NDc0MyAxOTUuNDkyMzU1LDE3Mi40NjMyOTIgQzE5NC40NTY0ODgsMTcwLjk2MzU3MyAxOTEuNzg5MDg2LDE2OC42NDAyNTggMTkxLjg2NTMzMSwxNjguNjYwNDc2IEwxNDIuODgzNTM0LDEyMS45NDAyNTQgTDE0Mi40MDI4MywxMjIuMjcwODgyIEwxNzAuODM1ODYxLDE4My45MjgyMzEgQzE3MC43MjYyNTgsMTgzLjgzOTYyNyAxNzEuOTk5Nzk2LDE4Ni43MTA2MTkgMTcyLjg5Njg3MywxODguMDA5OTM5IiBmaWxsPSIjQTYyMjI2Ii8+PHBhdGggZD0iTTI5LjM3ODM0MTUsNzQuMjQyNTg3OSBDMTYuMDMwMDY0Niw3MS4zNDM0NTMgMy4xMDUwMzg4OCw3OC44NjY1NzgxIDAuNTA5MjU3ODkzLDkxLjA0NjMyODkgQy0yLjA4NjUyMzA5LDEwMy4yMjYwOCA2LjYyOTkzNzA1LDExNS40NDk5NDkgMTkuOTc4MjE0LDExOC4zNDg0OCBDMjIuODgzNTAxMSwxMTguOTgwMDQgMjguNjQ0Mzg2OCwxMTguNzU4MjM5IDI4LjUzMTI0MDUsMTE4LjgxOTI3OSBMMTM4Ljg1MTMzNCwxMTkuNjIxMjcxIEwxMzkuMDUxODg0LDExOC42ODI2OTMgTDM2LjM4NjIzMTgsNzYuODEyOTQ4NyBDMzYuNjE0OTE5MSw3Ni43OTYwMjY1IDMxLjg5MzkwMjMsNzQuNzg4OTMzMSAyOS4zNzgzNDE1LDc0LjI0MjU4NzkiIGZpbGw9IiNBOTIwMjUiLz48cGF0aCBkPSJNMTkzLjI2NTcwOCw1MC4wNzMxNjUzIEMxOTcuODMzMzU5LDQxLjIzNjU2OTYgMTk0Ljg5NzY0NywzMC41OTc5NjE4IDE4Ni43MDgzMzgsMjYuMzExNDAyMSBDMTc4LjUxOTAyOSwyMi4wMjU0Mzg2IDE2OC4xNzc2OTQsMjUuNzE0MTA5MyAxNjMuNjEwNjM2LDM0LjU1MDcwNSBDMTYyLjYxNjY2NCwzNi40NzQzMjE3IDE2MS42OTQzNjcsNDAuNTg1MDMxNyAxNjEuNjcxODU4LDQwLjQ5MjYzNjEgTDE0MC40MTkzNDIsMTE4LjE5Mzc1NyBMMTQxLjA1MDc5MiwxMTguNTI0NTkyIEwxOTAuMTIwODk1LDU0LjUwMTU5NjkgQzE5MC4wOTAwOTMsNTQuNjY2MTIwNyAxOTIuNDA1MDE3LDUxLjczODY3MDUgMTkzLjI2NTcwOCw1MC4wNzMxNjUzIiBmaWxsPSIjQUEyNDI4Ii8+PGcgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3My42NzAyMzUsIDAuNjIzMTQxKSI+PG1hc2sgaWQ9Im1hc2stNCIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMyIvPjwvbWFzaz48ZyBpZD0iQ2xpcC0yMSIvPjxwYXRoIGQ9Ik00MS4wMzg0MTU0LDEzLjQxMzQyIEMzNS45NzIwMTc5LDIuMjkyNDIgMjMuMTk2NjYyNiwtMi43MjA1OCAxMi41MDMwNTM2LDIuMjE2ODIgQzEuODEwMDQwNjcsNy4xNTQyMiAtMi43NTIxNjA1NSwyMC4xNzI0MiAyLjMxNDIzNjkxLDMxLjI5MzQyIEMzLjQxNzM4OTY4LDMzLjcxMzgyIDYuNzI1NjU2MDMsMzcuNjkzMDIgNi42MTc3ODQyNiwzNy42NDY4MiBMNjYuMTMzMjAzOSwxMTYuNjU2MDIgTDY2Ljk1NzQzOTYsMTE2LjI3NTYyIEw0Mi44OTk2NTA0LDE5LjgzNjQyIEM0My4wMzczMjEsMTkuOTg5NDIgNDEuOTkzMTY5OSwxNS41MDkyMiA0MS4wMzg0MTU0LDEzLjQxMzQyIiBmaWxsPSIjQjkzMjM2IiBtYXNrPSJ1cmwoI21hc2stNCkiLz48L2c+PHBhdGggZD0iTTEwMC43MDgzMTcsNTcuNjk2MDI3OCBDOTQuOTE3ODY3LDUxLjQ5ODMzMzUgODUuNzE4NTEzNSw1MC43NDk4NTE1IDgwLjE1OTk5LDU2LjAyNDQ5NzYgQzc0LjYwMjA1OTcsNjEuMjk5MTQzOCA3NC43OTAwOTIxLDcwLjU5OTU3MTEgODAuNTgwNTQyMSw3Ni43OTcyNjUzIEM4MS44NDA0MTg3LDc4LjE0NjU2NTYgODQuODUxOTAzNSw4MC4wNzIxNzMxIDg0Ljc3MzAxMjksODAuMDYzMjA1NyBMMTQwLjY4MzMwMSwxMTkuNTEwMzYxIEwxNDEuMTExNTY0LDExOS4xMDQ0MzUgTDEwMy4zODM0NzksNjEuNDgzMjc1MSBDMTAzLjUwNTY3LDYxLjU1NTYxMjUgMTAxLjc5OTE0Miw1OC44NjQxODU4IDEwMC43MDgzMTcsNTcuNjk2MDI3OCIgZmlsbD0iI0E2MjIyNiIvPjwvZz48L2c+PC9nPjwvc3ZnPg==) no-repeat 0 100%,linear-gradient(180deg,#a52930 21%,#941f23 99%);
                padding: 47px 40px 22px
            }

            @media (max-width: 599px) {
                .property-layout-aside-header {
                    padding:36px 40px 30px
                }
            }

            .property-layout-aside-header h2 {
                color: #fff;
                font-size: 1.3em;
                font-weight: 700;
                margin-top: 0
            }

            .property-layout-aside-header h3 {
                color: #fff;
                font-size: 25px;
                font-weight: 700;
                line-height: 27px;
                margin: 0 0 12px
            }

            .property-layout-aside-header-image {
                display: block;
                width: 100%;
                border-radius: 5px;
                margin: 0 0 26px
            }

            @media (max-width: 599px) {
                .property-layout-aside-header-image {
                    display:none
                }
            }

            .property-layout-aside-header-type {
                background: #fff;
                font-size: 12px;
                font-weight: 600;
                border-radius: 3px;
                line-height: 25px;
                color: #a52930;
                margin: 0 8px 10px 0;
                padding: 0 5px
            }

            @media (max-width: 599px) {
                .property-layout-aside-header-type {
                    color:#fff;
                    font-size: 15px;
                    font-weight: 300;
                    line-height: 20px;
                    background: unset;
                    padding: 0
                }
            }

            .property-layout-aside-header-type-container {
                justify-content: space-between;
                display: flex;
                flex-wrap: wrap;
                align-items: center
            }

            .property-layout-aside-header-availability {
                color: #fff;
                font-size: 12px;
                line-height: 22px
            }

            .property-layout-aside-header-availability img {
                margin-right: 5px
            }

            .property-layout-aside-details {
                padding: 24px 24px 10px
            }

            .property-layout-aside-details-link {
                text-decoration: none
            }

            .property-layout-aside-details-card {
                display: flex;
                background: #fff;
                padding: 14px 20px 11px 18px;
                margin-bottom: 10px
            }

            .property-layout-aside-details-card img {
                margin-right: 12px
            }

            .property-layout-aside-details-card h6 {
                color: #a2a2a2;
                font-size: 10px;
                font-weight: 400;
                line-height: 14px;
                text-transform: uppercase;
                margin: 0 0 1px
            }

            .property-layout-aside-details-card p {
                color: #505050;
                font-size: 13px;
                line-height: 18px;
                margin: 0
            }

            .property-layout-details-info {
                color: #303030;
                font-size: 13px;
                font-weight: 300;
                line-height: 22px;
                margin: 0 0 26px
            }

            .property-layout-details-info-container {
                padding: 0 24px 24px;
                background: #f6f6f6
            }

            .property-layout-details-info-container.mobile-visible {
                display: none
            }

            @media (max-width: 599px) {
                .property-layout-details-info-container.mobile-visible {
                    display:block
                }

                .property-layout-details-info-container:not(.mobile-visible) {
                    display: none
                }
            }

            .property-layout-details-info-container h5 {
                color: #2c2c2c;
                font-size: 20px;
                font-weight: 400;
                line-height: 25px;
                max-width: 180px;
                margin: 33px 0 13px
            }

            .property-layout-details-info-container h5 strong {
                font-weight: 700
            }

            .property-layout-details-info-button {
                display: inline-block;
                color: #2c2c2c;
                font-size: 13px;
                font-weight: 600;
                font-family: Open Sans,sans-serif;
                text-align: center;
                border: 1px solid #cdcdcd;
                background: 0 0;
                border-radius: 3px;
                line-height: 26px;
                padding: 6px 10px;
                width: 100%;
                text-decoration: none;
                margin: 0 0 10px;
                cursor: pointer
            }

            .property-layout-details-info-button:focus {
                outline: 0
            }

            .property-layout-details-info-button-container {
                margin-bottom: 2rem
            }

            .modal {
                padding: 40px 30px
            }

            .modal-description {
                font-size: .9rem
            }

            .modal-project {
                font-size: .95rem;
                font-weight: 600
            }

            .cookie__content {
                display: block;
                font-size: 16px;
                top: 50%;
                left: 50%;
                bottom: unset;
                transform: translate(-50%,-50%);
                width: 85%;
                background: #1d2e41;
                color: #fff;
                padding: .7em 1em 1.3em;
                position: fixed;
                z-index: 100003
            }

            @media (min-width: 1200px) {
                .cookie__content {
                    display:flex;
                    align-items: center;
                    justify-content: center;
                    -webkit-box-align: center;
                    -webkit-box-pack: center;
                    font-size: 14px;
                    bottom: 0;
                    width: 100%;
                    top: unset;
                    transform: translateX(-50%);
                    padding: 1.4em 3em
                }
            }

            .cookie__description {
                width: 100%
            }

            @media (min-width: 1200px) {
                .cookie__description {
                    display:flex;
                    width: 55%
                }
            }

            .cookie__accept-btn {
                color: #fff;
                background: #990d15;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: none;
                cursor: pointer;
                width: 100%;
                font-weight: 700;
                text-transform: uppercase;
                padding: .7em
            }

            @media (min-width: 1200px) {
                .cookie__accept-btn {
                    padding:.8em 1em;
                    max-width: 185px;
                    margin-left: 1em;
                    transition: .5s ease
                }
            }

            .cookie__accept-btn:hover {
                background: #af1018;
                transition: .5s ease
            }

            .cookie__btn-wrapper {
                display: flex;
                padding: 0 15px
            }

            .cookie__link {
                text-decoration: underline;
                color: #fff
            }

            .cookie__overlay {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 100003;
                width: 100vw;
                height: 100vh;
                background-color: #000;
                opacity: .7;
                display: block
            }

            @media (min-width: 1200px) {
                .cookie__overlay {
                    display:none
                }
            }

            .our-properties-list-view .no-result {
                margin-top: 12rem
            }

            .our-properties-list-view-pagination {
                text-align: center
            }

            @media (max-width: 599px) {
                .our-properties-list-view-pagination {
                    display:none
                }
            }

            .our-properties-list-view-load-more {
                display: none;
                text-align: center;
                margin: 74px 0
            }

            @media (max-width: 599px) {
                .our-properties-list-view-load-more {
                    display:block
                }
            }

            .our-properties-list-view-load-more-button {
                cursor: pointer;
                color: #8a8a8a;
                font-size: 14px;
                font-weight: 600;
                text-align: center;
                background: #e5e5e5;
                border: 0;
                border-radius: 2px;
                padding: 8px 21px
            }

            .our-properties-map-view {
                position: relative;
                background-color: rgba(0,0,0,.3);
                height: 675px
            }

            .our-properties-map-view #map {
                height: 100%
            }

            @media (max-width: 599px) {
                .our-properties-map-view {
                    margin-top:-1rem;
                    height: 500px
                }
            }

            .our-properties-featured-list {
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                overflow: auto;
                width: 730px;
                padding: 42px 80px 20px 20px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between
            }

            @media (max-width: 899px) {
                .our-properties-featured-list {
                    display:none
                }
            }

            .our-properties-featured-list:after {
                content: "";
                display: block;
                height: 20px;
                width: 100%
            }

            .our-properties-featured-list>* {
                margin-bottom: 24px
            }

            .our-properties-featured-list .item {
                width: 300px;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3),0 35px 54px -20px hsla(0,0%,43.9%,.5);
                border-radius: 6px
            }

            @media (max-width: 599px) {
                .our-properties-featured-list .item {
                    width:100%
                }
            }

            .our-properties-featured-list .item .property-card-header {
                height: 159px
            }

            .our-properties-featured-list-load-more {
                display: none;
                text-align: center;
                margin: 74px 0
            }

            @media (max-width: 599px) {
                .our-properties-featured-list-load-more {
                    display:block
                }
            }

            .our-properties-featured-list-load-more-button {
                cursor: pointer;
                color: #8a8a8a;
                font-size: 14px;
                font-weight: 600;
                text-align: center;
                background: #e5e5e5;
                border: 0;
                border-radius: 2px;
                padding: 8px 21px
            }

            .our-properties-featured-list-hide {
                display: none
            }

            @media (max-width: 899px) {
                .our-properties-featured-list-hide {
                    display:block;
                    position: relative;
                    width: 100%;
                    padding: 0 40px 40px;
                    top: -2.2rem
                }
            }

            .our-properties-featured-list-hide:after {
                content: "";
                display: block;
                height: 20px;
                width: 100%
            }

            .our-properties-featured-list-hide>* {
                margin-bottom: 24px
            }

            .our-properties-featured-list-hide .item {
                width: 300px;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3),0 35px 54px -20px hsla(0,0%,43.9%,.5);
                border-radius: 6px
            }

            @media (max-width: 599px) {
                .our-properties-featured-list-hide .item {
                    width:100%
                }
            }

            .our-properties-featured-list-hide .item .property-card-header {
                height: 223px
            }

            #main {
                margin-top: 64px
            }

            @media (max-width: 1199px) {
                #main {
                    margin-top:0
                }
            }

            @media (max-width: 599px) {
                .about-us {
                    padding:0!important
                }
            }

            .about-us-banner {
                display: block;
                height: 367px;
                width: 100%;
                max-width: 921px;
                margin: 0 0 39px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .about-us-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            .about-us-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 17px
            }

            @media (max-width: 599px) {
                .about-us-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            @media (max-width: 599px) {
                .about-us-content-container {
                    padding:0 30px 40px
                }
            }

            .about-us-content p {
                color: #303030;
                font-size: 14px;
                font-weight: 300;
                line-height: 24px;
                white-space: pre-wrap
            }

            @media (max-width: 599px) {
                .about-us-content p {
                    font-size:13px;
                    line-height: 26px
                }
            }

            @media (max-width: 599px) {
                .about-us-office {
                    padding:0!important
                }
            }

            .about-us-office-banner {
                display: block;
                height: 367px;
                width: 100%;
                max-width: 921px;
                margin: 0 0 50px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .about-us-office-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            .about-us-office-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 23px
            }

            @media (max-width: 599px) {
                .about-us-office-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            @media (max-width: 599px) {
                .about-us-office-content-container {
                    padding:0 30px 40px
                }
            }

            .about-us-office-location {
                color: #303030;
                font-size: 19px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 25px
            }

            @media (max-width: 599px) {
                .about-us-office-location {
                    font-size:14px;
                    line-height: 26px
                }
            }

            .about-us-office-location-list {
                display: flex;
                flex-wrap: wrap;
                list-style: none;
                padding: 0;
                margin: 0 -32px 20px
            }

            .about-us-office-location-list li {
                margin: 0 32px 30px;
                border: 1px solid #d1d1d1;
                border-radius: 8px;
                min-height: 134px;
                width: calc(50% - 64px);
                padding: 22px 40px
            }

            @media (max-width: 599px) {
                .about-us-office-location-list li {
                    width:100%;
                    padding: 16px 20px 20px;
                    min-height: unset
                }
            }

            .about-us-office-location-list li h4 {
                color: #303030;
                font-size: 18px;
                font-weight: 600;
                margin: 0 0 13px
            }

            @media (max-width: 599px) {
                .about-us-office-location-list li h4 {
                    font-size:14px
                }
            }

            .about-us-office-location-list li p {
                color: #303030;
                font-size: 14px;
                line-height: 24px;
                margin: 0
            }

            @media (max-width: 599px) {
                .about-us-office-location-list li p {
                    font-size:10px
                }
            }

            .after-sales-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 41px 0 6px
            }

            @media (max-width: 599px) {
                .after-sales-title {
                    color:#303030;
                    font-size: 24px;
                    margin: 0 0 9px
                }
            }

            .after-sales-description {
                color: #a9a9a9;
                font-size: 18px;
                line-height: 24px;
                margin: 0 0 37px
            }

            @media (max-width: 599px) {
                .after-sales-description {
                    color:#a5a5a5;
                    font-size: 12px;
                    font-weight: 600;
                    line-height: 25px;
                    margin: 0 0 48px
                }
            }

            .after-sales-content p {
                color: #303030;
                font-size: 15px;
                font-weight: 300;
                line-height: 25px
            }

            .after-sales-chat-link-title {
                color: #5d5d5d;
                font-size: 24px;
                font-weight: 600;
                margin: 0 0 27px
            }

            .after-sales-chat-link-container {
                margin: 0 0 43px
            }

            .after-sales-chat-link-container p {
                color: #5d5d5d;
                font-size: 16px;
                line-height: 26px
            }

            @media (max-width: 599px) {
                .after-sales-chat-link-container p {
                    font-size:14px
                }
            }

            .after-sales-chat-link-container p a {
                color: #ab101b;
                font-weight: 600;
                text-decoration: none
            }

            .after-sales-chat-link-container p a:hover {
                text-decoration: underline
            }

            .after-sales-contact-channels {
                list-style: none;
                padding: 0
            }

            .after-sales-contact-channels li {
                color: #303030;
                font-size: 14px;
                line-height: 32px
            }

            .after-sales-contact-channels li strong {
                font-weight: 600
            }

            .after-sales-contact-channels-title {
                color: #303030;
                font-size: 18px;
                font-weight: 600;
                line-height: 32px
            }

            @media (max-width: 599px) {
                .after-sales-contact-channels-title {
                    font-size:16px
                }
            }

            .after-sales-contact-channels-container {
                margin: 0 0 21px
            }

            .after-sales-form-title {
                color: #303030;
                font-size: 15px;
                line-height: 32px;
                margin: 0 0 34px
            }

            @media (max-width: 599px) {
                .after-sales-form-title {
                    font-size:14px
                }
            }

            .buyers-guide {
                padding: 20px 50px 100px
            }

            @media (max-width: 599px) {
                .buyers-guide {
                    padding:0!important
                }
            }

            @media (max-width: 599px) {
                .buyers-guide-main-content {
                    margin:0 30px
                }
            }

            .buyers-guide-contents {
                padding: 1rem 2rem;
                max-width: 949px;
                color: #666
            }

            .buyers-guide-contents__article {
                border-top: 2px solid #eee
            }

            .buyers-guide-contents__article--header {
                display: flex;
                gap: 1.5rem
            }

            .buyers-guide-contents__article--header h4 {
                padding: 0;
                margin: 0
            }

            .buyers-guide-contents__article--header button {
                border: none;
                background: 0 0;
                font-size: 1.1rem;
                color: #666;
                cursor: pointer
            }

            .buyers-guide-contents__article--text {
                transition: all .5s ease-in-out;
                display: block
            }

            .buyers-guide-contents__article--text-hide {
                display: none
            }

            .buyers-guide-contents__article--text-item {
                border-top: 2px solid #eee;
                padding: 15px 15px 15px 22px;
                transition: all .3s ease-in-out
            }

            .buyers-guide-contents__article--text-item button {
                font-size: .9rem
            }

            .buyers-guide-contents__article--text-item strong {
                border-bottom: 1px solid transparent
            }

            .buyers-guide-contents__article--text-item p {
                padding: 0 26px
            }

            .buyers-guide-contents__article--text-item .table table {
                margin: 0 auto
            }

            .buyers-guide-contents__article--text-item:hover {
                background-color: #eee;
                border-radius: 5px
            }

            .buyers-guide-contents__article--text-item:hover strong {
                border-bottom: 1px solid #666
            }

            .buyers-guide-contents__article:last-child {
                border-bottom: 2px solid #eee
            }

            .buyers-guide-contents h2 {
                padding-bottom: 25px;
                letter-spacing: 1px
            }

            .buyers-guide-content-container {
                max-width: 949px;
                font-size: 14px;
                line-height: 24px;
                font-weight: 300
            }

            .buyers-guide-content-container .table table {
                border: 1px solid #303030;
                border-collapse: collapse;
                text-align: center
            }

            .buyers-guide-content-container .table table tr:first-child {
                font-weight: 700
            }

            .buyers-guide-content-container .table table td {
                border: 1px solid #303030;
                padding: 10px 20px
            }

            .buyers-guide-banner {
                height: 367px;
                width: 100%;
                max-width: 949px;
                margin-bottom: 32px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .buyers-guide-banner {
                    height:242px
                }
            }

            .buyers-guide-sub-title {
                color: #a52930;
                font-size: 15px;
                font-weight: 700;
                line-height: 25px;
                margin: 0 0 3px
            }

            @media (max-width: 599px) {
                .buyers-guide-sub-title {
                    font-size:12px;
                    line-height: 25px;
                    padding: 0 30px
                }
            }

            .buyers-guide-tabs-wrapper {
                display: flex;
                align-items: center;
                justify-content: space-around;
                margin: 35px 0 50px;
                justify-content: space-evenly;
                max-width: 949px
            }

            .buyers-guide-tabs-wrapper a {
                text-decoration: none
            }

            @media (max-width: 450px) {
                .buyers-guide-tabs-wrapper {
                    display:none
                }
            }

            .buyers-guide .slider-buttons {
                margin: 30px 0
            }

            @media (min-width: 450px) {
                .buyers-guide .slider-buttons {
                    display:none
                }
            }

            .buyers-guide .slider-buttons a {
                text-decoration: none
            }

            .buyers-guide-tab-button {
                background-color: #eee;
                color: #cacaca;
                width: 190px;
                height: 150px;
                border: none;
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                font-size: 1.1em;
                cursor: pointer;
                padding: 15px;
                letter-spacing: .6px
            }

            @media (max-width: 450px) {
                .buyers-guide-tab-button {
                    width:auto
                }
            }

            @media (max-width: 899px) {
                .buyers-guide-tab-button {
                    font-size:.7em;
                    padding: 15px 10px;
                    height: 127px
                }
            }

            .buyers-guide-tab-button img {
                width: 28%;
                margin-bottom: 1em
            }

            .buyers-guide-tab-button.active {
                background-color: #990d15;
                color: #f3f3f3
            }

            .buyers-guide-tab-button.active img {
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            @media (max-width: 785px) {
                .buyers-guide-contents {
                    padding:1rem .3rem
                }
            }

            @media (max-width: 675px) {
                .buyers-guide-contents {
                    padding:1rem 0;
                    font-size: .834rem
                }

                .buyers-guide-contents h2 {
                    padding-bottom: 15px
                }

                .buyers-guide-contents__article--header {
                    gap: 1rem
                }

                .buyers-guide-contents__article--text-item {
                    padding: 25px 8px 10px 15px
                }

                .buyers-guide-contents__article--text-item p {
                    padding: 0 22px
                }
            }

            .career-broker {
                margin-bottom: 2rem
            }

            .career-broker-header {
                font-size: 30px;
                font-weight: 600;
                color: #303030;
                margin: 0
            }

            @media (max-width: 599px) {
                .career-broker-header {
                    font-size:18px
                }
            }

            .career-broker-description {
                font-size: 18px;
                font-weight: 400;
                color: #a9a9a9;
                margin-top: 0
            }

            @media (max-width: 599px) {
                .career-broker-description {
                    font-size:14px
                }
            }

            .career-broker-body {
                font-size: 15px;
                font-weight: 400;
                color: #5d5d5d;
                margin: 0;
                line-height: 28px
            }

            @media (max-width: 599px) {
                .career-broker-body {
                    font-size:14px;
                    line-height: 26px
                }
            }

            .career-broker-contact {
                font-size: 15px;
                font-weight: 400;
                color: #5d5d5d;
                line-height: 28px
            }

            .career-broker-contact span {
                font-weight: 600
            }

            @media (max-width: 599px) {
                .career-broker-contact {
                    font-size:14px;
                    line-height: 26px
                }
            }

            .article-career-layout-container {
                display: flex;
                background: #fff
            }

            @media (max-width: 599px) {
                .article-career-layout-container {
                    flex-direction:column
                }
            }

            .article-career-layout-aside {
                flex: 0 0 auto;
                width: 346px;
                background: #f6f6f6
            }

            @media (max-width: 599px) {
                .article-career-layout-aside {
                    display:none
                }
            }

            .article-career-layout-main {
                flex: 1 1 auto
            }

            .article-career-layout-main-content {
                padding: 20px 50px
            }

            @media (max-width: 599px) {
                .article-career-layout-main-content {
                    padding:2rem 2rem 4rem
                }
            }

            .article-career-layout-aside-header {
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyMzJweCIgaGVpZ2h0PSIxMzJweCIgdmlld0JveD0iMCAwIDIzMiAxMzIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHJlY3QgaWQ9InBhdGgtMSIgeD0iMCIgeT0iMCIgd2lkdGg9IjIzMiIgaGVpZ2h0PSIxMzIiLz48cG9seWdvbiBpZD0icGF0aC0zIiBwb2ludHM9IjAuMjQ2MDk3MTExIDAuMzE2MiA2Ni45NTc0Mzk2IDAuMzE2MiA2Ni45NTc0Mzk2IDExNi42NTYwMiAwLjI0NjA5NzExMSAxMTYuNjU2MDIiLz48L2RlZnM+PGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PG1hc2sgaWQ9Im1hc2stMiIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSIvPjwvbWFzaz48ZyBpZD0iUmVjdGFuZ2xlIi8+PGcgb3BhY2l0eT0iMC41IiBtYXNrPSJ1cmwoI21hc2stMikiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03NC4wMDAwMDAsIDEwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0yNzguODg0NDgxLDY5Ljc5NTc1MDEgQzI5My42MTM3ODcsNjEuMDU2NzYwMiAyOTkuMTYzMTMxLDQzLjE1ODk0MDkgMjkxLjI3OTYwNSwyOS44MTk2MzM5IEMyODMuMzk1NDg0LDE2LjQ4MTUyMTQgMjY1LjA2NDE3LDEyLjc1MjUzNTMgMjUwLjMzNTQ2LDIxLjQ5MjEyMjUgQzI0Ny4xMjkyMzksMjMuMzk0MjM5OCAyNDIuMDE0NDI1LDI4LjUxMTE0NDQgMjQyLjA2Njg3OCwyOC4zNTg4NTU2IEwxMzkuODY1MzY3LDEyMS43MzkzNzkgTDE0MC40NzI3NTUsMTIyLjc2NjU4MiBMMjcwLjI2NjYwNiw3My40MjYxOTYzIEMyNzAuMDcxMDk3LDczLjYzNzAxMTkgMjc2LjEwODYxNyw3MS40NDI4NTgzIDI3OC44ODQ0ODEsNjkuNzk1NzUwMSIgZmlsbD0iI0E1MkEyRSIvPjxwYXRoIGQ9Ik0yMzQuODIyMDI5LDEyNC4xMjAxNiBDMjQ1LjQ1NzcxNCwxMjIuNTgyOTQgMjUyLjk0Nzc5NCwxMTMuNTg4NTkzIDI1MS41NTA0MTQsMTA0LjAzMDc1OCBDMjUwLjE1MjQzMyw5NC40NzI5MjMyIDI0MC4zOTgzNTcsODcuOTcwNDQ2OSAyMjkuNzYyMDcyLDg5LjUwNzY2NjkgQzIyNy40NDcwOTgsODkuODQyMTgyMiAyMjMuMjU3MzU1LDkxLjU3NTU3OTYgMjIzLjMyMzkyNSw5MS41MDA0NDc4IEwxNDEuNzE4MDk5LDEyMS4wMzAyMTcgTDE0MS44MjYwNTEsMTIxLjc2NjYyNyBMMjI4Ljk1MzAzLDEyNC4xNjQ4ODEgQzIyOC43ODg3MDMsMTI0LjIzOTQxNyAyMzIuODE3MTE3LDEyNC40MDkzNTggMjM0LjgyMjAyOSwxMjQuMTIwMTYiIGZpbGw9IiNCOTMyMzYiLz48cGF0aCBkPSJNMjQ2LjY0MDM5NiwxOTAuNDY3MTA5IEMyNTkuNzEwNzc3LDE5Ni4wODM3NDggMjc0LjUzOTM1NSwxOTAuNjU1NjU2IDI3OS43NjA2ODUsMTc4LjM0NDEwOCBDMjg0Ljk4MjAxNSwxNjYuMDMyNTYgMjc4LjYxOTQ3MywxNTEuNDk4ODEzIDI2NS41NDkwOTIsMTQ1Ljg4MjE3NCBDMjYyLjcwNDE0LDE0NC42NTk5MzUgMjU2Ljc1MzMxOSwxNDMuNzg1MjcxIDI1Ni44ODE5ODMsMTQzLjc0MzEwNSBMMTQzLjk4ODc0NCwxMjEuNjgzMTU4IEwxNDMuNTg1OTk4LDEyMi42MzE5MTQgTDIzOS45OTgzODUsMTg2LjQxNTQ2NyBDMjM5Ljc2MDgwNywxODYuMzg4OTYyIDI0NC4xNzcyNDQsMTg5LjQwODcxOCAyNDYuNjQwMzk2LDE5MC40NjcxMDkiIGZpbGw9IiNBMjIzMjciLz48cGF0aCBkPSJNMzAuODgwODIyNiwxNDMuNzA1OTU2IEMxOC44NzgxNTMxLDE0OC40NTk5NzQgMTIuNjQ3NjM2MiwxNjEuMDY1NzAyIDE2Ljk2NDkwMTUsMTcxLjg2Mjg1MSBDMjEuMjgyMTY2OCwxODIuNjU5OTk5IDM0LjUxMjM0MSwxODcuNTU4NTEyIDQ2LjUxNTAxMDUsMTgyLjgwNTA5MSBDNDkuMTI3ODA3OSwxODEuNzcwMzM3IDUzLjUzOTI2NTksMTc4LjU3NzcwNiA1My40ODIyNzAzLDE3OC42ODM5ODggTDE0MC41OTU1MTcsMTIxLjQ1MzA3MSBMMTQwLjI2MjU0MiwxMjAuNjIxMzI3IEwzNy43Mjk4OTE2LDE0Mi4wMjI3NjQgQzM3LjkwMDI3ODQsMTQxLjg4OTYxNCAzMy4xNDI2NDcyLDE0Mi44MDk3MjcgMzAuODgwODIyNiwxNDMuNzA1OTU2IiBmaWxsPSIjQUEyNDI4Ii8+PHBhdGggZD0iTTE3Mi44OTY4NzMsMTg4LjAwOTkzOSBDMTc3LjY1NDQ3NSwxOTQuOTAxOTg1IDE4Ni41Njk4NDEsMTk3LjAwODI1MSAxOTIuODA5NDY2LDE5Mi43MTQ4NDYgQzE5OS4wNDkwOSwxODguNDIyMDM1IDIwMC4yNDk5NTcsMTc5LjM1NDc0MyAxOTUuNDkyMzU1LDE3Mi40NjMyOTIgQzE5NC40NTY0ODgsMTcwLjk2MzU3MyAxOTEuNzg5MDg2LDE2OC42NDAyNTggMTkxLjg2NTMzMSwxNjguNjYwNDc2IEwxNDIuODgzNTM0LDEyMS45NDAyNTQgTDE0Mi40MDI4MywxMjIuMjcwODgyIEwxNzAuODM1ODYxLDE4My45MjgyMzEgQzE3MC43MjYyNTgsMTgzLjgzOTYyNyAxNzEuOTk5Nzk2LDE4Ni43MTA2MTkgMTcyLjg5Njg3MywxODguMDA5OTM5IiBmaWxsPSIjQTYyMjI2Ii8+PHBhdGggZD0iTTI5LjM3ODM0MTUsNzQuMjQyNTg3OSBDMTYuMDMwMDY0Niw3MS4zNDM0NTMgMy4xMDUwMzg4OCw3OC44NjY1NzgxIDAuNTA5MjU3ODkzLDkxLjA0NjMyODkgQy0yLjA4NjUyMzA5LDEwMy4yMjYwOCA2LjYyOTkzNzA1LDExNS40NDk5NDkgMTkuOTc4MjE0LDExOC4zNDg0OCBDMjIuODgzNTAxMSwxMTguOTgwMDQgMjguNjQ0Mzg2OCwxMTguNzU4MjM5IDI4LjUzMTI0MDUsMTE4LjgxOTI3OSBMMTM4Ljg1MTMzNCwxMTkuNjIxMjcxIEwxMzkuMDUxODg0LDExOC42ODI2OTMgTDM2LjM4NjIzMTgsNzYuODEyOTQ4NyBDMzYuNjE0OTE5MSw3Ni43OTYwMjY1IDMxLjg5MzkwMjMsNzQuNzg4OTMzMSAyOS4zNzgzNDE1LDc0LjI0MjU4NzkiIGZpbGw9IiNBOTIwMjUiLz48cGF0aCBkPSJNMTkzLjI2NTcwOCw1MC4wNzMxNjUzIEMxOTcuODMzMzU5LDQxLjIzNjU2OTYgMTk0Ljg5NzY0NywzMC41OTc5NjE4IDE4Ni43MDgzMzgsMjYuMzExNDAyMSBDMTc4LjUxOTAyOSwyMi4wMjU0Mzg2IDE2OC4xNzc2OTQsMjUuNzE0MTA5MyAxNjMuNjEwNjM2LDM0LjU1MDcwNSBDMTYyLjYxNjY2NCwzNi40NzQzMjE3IDE2MS42OTQzNjcsNDAuNTg1MDMxNyAxNjEuNjcxODU4LDQwLjQ5MjYzNjEgTDE0MC40MTkzNDIsMTE4LjE5Mzc1NyBMMTQxLjA1MDc5MiwxMTguNTI0NTkyIEwxOTAuMTIwODk1LDU0LjUwMTU5NjkgQzE5MC4wOTAwOTMsNTQuNjY2MTIwNyAxOTIuNDA1MDE3LDUxLjczODY3MDUgMTkzLjI2NTcwOCw1MC4wNzMxNjUzIiBmaWxsPSIjQUEyNDI4Ii8+PGcgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3My42NzAyMzUsIDAuNjIzMTQxKSI+PG1hc2sgaWQ9Im1hc2stNCIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMyIvPjwvbWFzaz48ZyBpZD0iQ2xpcC0yMSIvPjxwYXRoIGQ9Ik00MS4wMzg0MTU0LDEzLjQxMzQyIEMzNS45NzIwMTc5LDIuMjkyNDIgMjMuMTk2NjYyNiwtMi43MjA1OCAxMi41MDMwNTM2LDIuMjE2ODIgQzEuODEwMDQwNjcsNy4xNTQyMiAtMi43NTIxNjA1NSwyMC4xNzI0MiAyLjMxNDIzNjkxLDMxLjI5MzQyIEMzLjQxNzM4OTY4LDMzLjcxMzgyIDYuNzI1NjU2MDMsMzcuNjkzMDIgNi42MTc3ODQyNiwzNy42NDY4MiBMNjYuMTMzMjAzOSwxMTYuNjU2MDIgTDY2Ljk1NzQzOTYsMTE2LjI3NTYyIEw0Mi44OTk2NTA0LDE5LjgzNjQyIEM0My4wMzczMjEsMTkuOTg5NDIgNDEuOTkzMTY5OSwxNS41MDkyMiA0MS4wMzg0MTU0LDEzLjQxMzQyIiBmaWxsPSIjQjkzMjM2IiBtYXNrPSJ1cmwoI21hc2stNCkiLz48L2c+PHBhdGggZD0iTTEwMC43MDgzMTcsNTcuNjk2MDI3OCBDOTQuOTE3ODY3LDUxLjQ5ODMzMzUgODUuNzE4NTEzNSw1MC43NDk4NTE1IDgwLjE1OTk5LDU2LjAyNDQ5NzYgQzc0LjYwMjA1OTcsNjEuMjk5MTQzOCA3NC43OTAwOTIxLDcwLjU5OTU3MTEgODAuNTgwNTQyMSw3Ni43OTcyNjUzIEM4MS44NDA0MTg3LDc4LjE0NjU2NTYgODQuODUxOTAzNSw4MC4wNzIxNzMxIDg0Ljc3MzAxMjksODAuMDYzMjA1NyBMMTQwLjY4MzMwMSwxMTkuNTEwMzYxIEwxNDEuMTExNTY0LDExOS4xMDQ0MzUgTDEwMy4zODM0NzksNjEuNDgzMjc1MSBDMTAzLjUwNTY3LDYxLjU1NTYxMjUgMTAxLjc5OTE0Miw1OC44NjQxODU4IDEwMC43MDgzMTcsNTcuNjk2MDI3OCIgZmlsbD0iI0E2MjIyNiIvPjwvZz48L2c+PC9nPjwvc3ZnPg==) no-repeat 0 100%,linear-gradient(180deg,#a52930 21%,#941f23 99%);
                padding: 48px 25px 32px
            }

            .article-career-layout-aside-header-title {
                color: #fff;
                font-size: 20px;
                font-weight: 700;
                line-height: 27px;
                margin: 4px 0 23px
            }

            .article-career-layout-recent-articles {
                padding: 33px 25px 25px
            }

            .article-career-layout-recent-articles-title {
                color: #4a4a4a;
                font-size: 20px;
                font-weight: 700;
                line-height: 22px;
                margin: 0 0 25px
            }

            .article-career-layout-recent-articles .item {
                margin: 10px 0
            }

            .mini-career-article-card {
                display: flex;
                width: 100%;
                height: 125px;
                background: #fff;
                border-radius: 3px;
                overflow: hidden;
                -webkit-filter: drop-shadow(var(--box-shadow));
                filter: drop-shadow(var(--box-shadow));
                transition: -webkit-filter .25s ease-in-out;
                transition: filter .25s ease-in-out;
                transition: filter .25s ease-in-out,-webkit-filter .25s ease-in-out
            }

            .mini-career-article-card:hover {
                -webkit-filter: drop-shadow(var(--box-shadow-hover));
                filter: drop-shadow(var(--box-shadow-hover))
            }

            .mini-career-article-card-link {
                display: block;
                color: inherit;
                text-decoration: none
            }

            .mini-career-article-card-details {
                padding: 17px 10px 20px 19px
            }

            .mini-career-article-card-details span {
                display: inline-block;
                color: #fff;
                font-size: 10px;
                font-weight: 700;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 1px;
                padding: 2px 9px;
                margin: 0 0 5px
            }

            .mini-career-article-card-details h3 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                color: #303030;
                font-size: 14px;
                font-weight: 600;
                line-height: 19px;
                margin: 0 0 4px;
                overflow: hidden
            }

            .mini-career-article-card-details p {
                font-size: 12px;
                color: #4a4a4a;
                margin: 0
            }

            .mini-career-article-card img {
                display: block;
                width: 90px;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover
            }

            .sales-list-header {
                text-align: center;
                font-size: 26px;
                line-height: 32px;
                font-weight: 600;
                margin-bottom: 3rem
            }

            @media (max-width: 599px) {
                .sales-list-header {
                    font-size:18px
                }
            }

            .sales-list-content {
                margin: 0 auto
            }

            .sales-list-content .no-result {
                margin-top: 15rem
            }

            @media (max-width: 599px) {
                .sales-list-content .no-result {
                    margin:3rem 0
                }
            }

            @media (max-width: 599px) {
                .sales-list .landing-page-layout .landing-page-layout-content-main {
                    padding:2rem 20px
                }
            }

            .sales-list-pagination {
                text-align: center;
                margin: 4rem 0
            }

            @media (max-width: 599px) {
                .sales-list-pagination {
                    display:none
                }
            }

            .sales-list-load-more {
                display: none;
                text-align: center;
                margin: 74px 0
            }

            @media (max-width: 599px) {
                .sales-list-load-more {
                    display:block
                }
            }

            .sales-list-load-more-button {
                cursor: pointer;
                color: #8a8a8a;
                font-size: 14px;
                font-weight: 600;
                text-align: center;
                background: #e5e5e5;
                border: 0;
                border-radius: 2px;
                padding: 8px 21px
            }

            .career-list-header {
                text-align: center;
                font-size: 26px;
                line-height: 32px;
                font-weight: 600;
                margin-bottom: 3rem
            }

            @media (max-width: 599px) {
                .career-list-header {
                    font-size:18px
                }
            }

            .career-list-content {
                margin: 0 auto
            }

            .career-list-content .no-result {
                margin-top: 15rem
            }

            @media (max-width: 599px) {
                .career-list-content .no-result {
                    margin:3rem 0
                }
            }

            @media (max-width: 599px) {
                .career-list .landing-page-layout .landing-page-layout-content-main {
                    padding:2rem 20px
                }
            }

            .career-list-pagination {
                text-align: center;
                margin: 4rem 0
            }

            @media (max-width: 599px) {
                .career-list-pagination {
                    display:none
                }
            }

            .career-list-load-more {
                display: none;
                text-align: center;
                margin: 74px 0
            }

            @media (max-width: 599px) {
                .career-list-load-more {
                    display:block
                }
            }

            .career-list-load-more-button {
                cursor: pointer;
                color: #8a8a8a;
                font-size: 14px;
                font-weight: 600;
                text-align: center;
                background: #e5e5e5;
                border: 0;
                border-radius: 2px;
                padding: 8px 21px
            }

            .landing-page-layout-overlay {
                text-align: center;
                height: 452px;
                padding-bottom: 8rem;
                margin-bottom: 1rem
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay {
                    height:350px;
                    top: 2.9rem
                }
            }

            .landing-page-layout-overlay-header {
                margin-top: 3rem;
                color: #fcfcfc;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-header {
                    margin-top:-1rem;
                    font-size: 14px
                }
            }

            .landing-page-layout-overlay-title-default {
                color: #fcfcfc;
                text-transform: uppercase;
                font-size: 48px
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-title-default {
                    font-size:25px
                }
            }

            .landing-page-layout-overlay-title {
                color: #fcfcfc;
                text-transform: uppercase;
                font-size: 48px;
                margin-top: 3rem
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-title {
                    font-size:25px;
                    margin-top: 2rem
                }
            }

            .landing-page-layout-overlay-body {
                color: #fcfcfc;
                margin: 0 auto;
                width: 53%
            }

            @media (max-width: 899px) {
                .landing-page-layout-overlay-body {
                    font-size:12px;
                    padding: 10px 20px;
                    width: 100%;
                    line-height: 25px
                }
            }

            .landing-page-layout-overlay-banner {
                width: 100%
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-banner {
                    margin-bottom:4rem
                }
            }

            .landing-page-layout-overlay-search-container {
                display: flex;
                margin: 4rem 0 3rem;
                justify-content: center
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-search-container {
                    flex-direction:column;
                    margin: 1rem 0
                }
            }

            @media (min-width: 600px) {
                .landing-page-layout-overlay-search-container {
                    margin-top:2rem
                }
            }

            .landing-page-layout-overlay-search-container .search-input {
                margin: 0 1rem 4rem 0
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-search-container .search-input {
                    margin:0
                }
            }

            .landing-page-layout-overlay-search-container .search-input span {
                position: relative
            }

            .landing-page-layout-overlay-search-container .search-input span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .landing-page-layout-overlay-search-container .search-input span input {
                font-size: 15px;
                font-family: inherit;
                color: #fff;
                width: 431px;
                padding: .75rem 1.5rem .75rem 2.5rem;
                background: rgba(133,11,19,.7);
                border: 1px solid transparent;
                border-radius: 3px;
                outline: 0;
                transition: border .3s ease
            }

            .landing-page-layout-overlay-search-container .search-input span input:focus {
                border: 1px solid hsla(0,0%,100%,.5)
            }

            .landing-page-layout-overlay-search-container .search-input span input::-webkit-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .landing-page-layout-overlay-search-container .search-input span input:-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .landing-page-layout-overlay-search-container .search-input span input::-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .landing-page-layout-overlay-search-container .search-input span input::placeholder {
                color: hsla(0,0%,100%,.67)
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-search-container .search-input span input {
                    width:327px;
                    margin-bottom: 1rem
                }
            }

            .landing-page-layout-overlay-search-container .search-select {
                margin-right: 1rem;
                width: 250px;
                height: 47.5px;
                text-align: left
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-search-container .search-select {
                    width:327px;
                    margin: 0 auto
                }
            }

            .landing-page-layout-overlay-search-container .search-select .css-yk16xz-control {
                height: 46px;
                background: rgba(133,11,19,.7);
                border-color: transparent
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-search-container .search-select .css-yk16xz-control {
                    margin-bottom:1rem;
                    width: 327px
                }
            }

            .landing-page-layout-overlay-search-container .search-select .css-yk16xz-control .css-1wa3eu0-placeholder,.landing-page-layout-overlay-search-container .search-select .css-yk16xz-control .css-g1d714-ValueContainer .css-1uccc91-singleValue {
                color: hsla(0,0%,100%,.815)
            }

            .landing-page-layout-overlay-search-container .search-select .css-1okebmr-indicatorSeparator {
                display: none
            }

            .landing-page-layout-overlay-search-container .search-select .css-2b097c-container .css-1pahdxg-control {
                height: 46px;
                background: rgba(133,11,19,.7);
                box-shadow: none;
                border: 1px solid transparent
            }

            @media (max-width: 599px) {
                .landing-page-layout-overlay-search-container .search-select .css-2b097c-container .css-1pahdxg-control {
                    margin-bottom:1.5rem;
                    width: 327px
                }
            }

            .landing-page-layout-overlay-search-container .search-select .css-2b097c-container .css-1pahdxg-control:hover {
                border: 1px solid transparent;
                box-shadow: none
            }

            .landing-page-layout-overlay-search-container .search-select .css-2b097c-container .css-1pahdxg-control .css-g1d714-ValueContainer .css-1uccc91-singleValue,.landing-page-layout-overlay-search-container .search-select .css-2b097c-container .css-1pahdxg-control .css-g1d714-ValueContainer .css-b8ldur-Input {
                color: hsla(0,0%,100%,.815)
            }

            .landing-page-layout-overlay-search-container .search-select .css-26l3qy-menu {
                color: #000
            }

            .landing-page-layout-content {
                background: #fff;
                position: relative;
                border-radius: 5px;
                box-shadow: 0 15px 34px -20px hsla(0,0%,43.9%,.3);
                max-width: 1024px;
                height: auto;
                margin: -5.7rem auto 0
            }

            @media (max-width: 599px) {
                .landing-page-layout-content {
                    width:auto;
                    margin: -3.7rem auto 0
                }
            }

            .landing-page-layout-content .content-navigation {
                background: #fff;
                padding: 1rem 0
            }

            .landing-page-layout-content .content-navigation.center {
                justify-content: space-between;
                padding: 0;
                border-bottom: 1px solid #e1e7f1
            }

            @media (max-width: 599px) {
                .landing-page-layout-content .content-navigation.center {
                    justify-content:flex-start
                }
            }

            .landing-page-layout-content .content-navigation li a,.landing-page-layout-content .content-navigation li button {
                color: #000;
                padding: 2rem 4rem;
                font-size: 17px;
                text-transform: capitalize
            }

            .landing-page-layout-content .content-navigation li a.active,.landing-page-layout-content .content-navigation li button.active {
                padding: 2rem 4rem;
                color: #ab101b;
                border-bottom: 5px solid #ab101b
            }

            .landing-page-layout-content-main {
                padding: 2rem 4rem
            }

            @media (max-width: 599px) {
                .landing-page-layout-content-main {
                    padding:2rem
                }
            }

            .landing-page-layout-social-container {
                display: flex;
                justify-content: center;
                padding-top: 25px
            }

            .landing-page-layout-social-link {
                align-items: center;
                background: hsla(0,0%,91.8%,.5);
                border-radius: 50%;
                display: flex;
                height: 35px;
                justify-content: center;
                margin: 0 3px;
                width: 35px
            }

            .landing-page-layout-social-link:hover {
                background: var(--color-primary)
            }

            .landing-page-layout-social-link:hover img {
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            .contact-us-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 41px 0 32px
            }

            @media (max-width: 599px) {
                .contact-us-title {
                    color:#303030;
                    font-size: 24px;
                    margin: 0 0 9px
                }
            }

            .contact-us p:first-of-type {
                margin-bottom: 10px
            }

            .contact-us-form-title {
                color: #303030;
                font-size: 15px;
                line-height: 32px;
                margin: 0 0 32px
            }

            @media (max-width: 599px) {
                .contact-us-form-title {
                    color:#a5a5a5;
                    font-size: 12px;
                    font-weight: 600;
                    line-height: 25px;
                    margin: 0 0 37px
                }
            }

            .contact-us-country-code-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 41px 0 36px
            }

            @media (max-width: 599px) {
                .contact-us-country-code-title {
                    font-size:24px;
                    font-weight: 700;
                    margin: 0 0 36px
                }
            }

            .contact-us-country-code-list {
                display: flex;
                flex-wrap: wrap;
                margin: 0;
                padding: 0;
                max-width: 908px;
                list-style: none;
                border: 1px solid #d1d1d1;
                border-radius: 8px
            }

            .contact-us-country-code-list li {
                display: flex;
                width: 50%;
                font-size: 16px;
                color: #303030;
                line-height: 32px;
                padding: 10px 48px
            }

            @media (max-width: 599px) {
                .contact-us-country-code-list li {
                    width:100%;
                    border: none!important;
                    padding: 10px 20px!important;
                    font-size: 14px
                }
            }

            .contact-us-country-code-list li:first-child,.contact-us-country-code-list li:nth-child(2) {
                padding-top: 35px
            }

            .contact-us-country-code-list li:last-child {
                padding-bottom: 35px
            }

            .contact-us-country-code-list li:nth-child(n+1) {
                border-right: 1px solid #d1d1d1
            }

            .contact-us-country-code-list li strong {
                display: block;
                font-weight: 600;
                width: 60%;
                padding-right: 10px
            }

            .contact-us-country-code-list li span {
                width: 40%
            }

            @media (max-width: 599px) {
                .contact-us-head-office {
                    padding:0!important
                }
            }

            .contact-us-head-office-banner {
                display: block;
                height: 367px;
                width: 100%;
                max-width: 921px;
                margin: 0 0 50px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .contact-us-head-office-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            .contact-us-head-office-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 23px
            }

            @media (max-width: 599px) {
                .contact-us-head-office-title {
                    display:none
                }
            }

            @media (max-width: 599px) {
                .contact-us-head-office-content-container {
                    padding:0 30px 40px
                }
            }

            .contact-us-head-office-details {
                padding-left: 40px
            }

            @media (max-width: 599px) {
                .contact-us-head-office-details {
                    padding:0
                }
            }

            .contact-us-head-office-details h2 {
                color: #303030;
                font-size: 24px;
                font-weight: 600;
                margin: 0 0 5px
            }

            @media (max-width: 599px) {
                .contact-us-head-office-details h2 {
                    font-size:24px;
                    font-weight: 700;
                    line-height: 32px;
                    margin: 0 0 9px
                }
            }

            .contact-us-head-office-details h4 {
                color: #a9a9a9;
                font-size: 18px;
                margin: 0 0 18px
            }

            @media (max-width: 599px) {
                .contact-us-head-office-details h4 {
                    color:#a5a5a5;
                    font-size: 12px;
                    font-weight: 600;
                    line-height: 25px
                }
            }

            .contact-us-head-office-address {
                color: #303030;
                font-size: 16px;
                line-height: 26px;
                margin: 0 0 12px
            }

            @media (max-width: 599px) {
                .contact-us-head-office-address {
                    font-size:13px
                }
            }

            .contact-us-head-office-contact-info {
                color: #303030;
                font-size: 14px;
                line-height: 24px;
                margin: 0
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office {
                    padding:0!important
                }
            }

            .contact-us-satellite-office-banner {
                display: block;
                height: 367px;
                width: 100%;
                max-width: 921px;
                margin: 0 0 50px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            .contact-us-satellite-office-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 23px
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-content-container {
                    padding:0 30px 40px
                }
            }

            .contact-us-satellite-office-location {
                color: #303030;
                font-size: 19px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 25px
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-location {
                    font-size:14px;
                    line-height: 26px
                }
            }

            .contact-us-satellite-office-location-list {
                display: flex;
                flex-wrap: wrap;
                list-style: none;
                padding: 0;
                margin: 0 -32px 20px
            }

            .contact-us-satellite-office-location-list li {
                margin: 0 32px 30px;
                border: 1px solid #d1d1d1;
                border-radius: 8px;
                min-height: 134px;
                width: calc(50% - 64px);
                padding: 22px 40px
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-location-list li {
                    width:100%;
                    padding: 16px 20px 20px;
                    min-height: unset
                }
            }

            .contact-us-satellite-office-location-list li h4 {
                color: #303030;
                font-size: 18px;
                font-weight: 600;
                margin: 0 0 13px
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-location-list li h4 {
                    font-size:14px
                }
            }

            .contact-us-satellite-office-location-list li p {
                color: #303030;
                font-size: 14px;
                line-height: 24px;
                margin: 0
            }

            @media (max-width: 599px) {
                .contact-us-satellite-office-location-list li p {
                    font-size:10px
                }
            }

            @media (max-width: 599px) {
                .contact-us-showroom {
                    padding:0!important
                }
            }

            .contact-us-showroom-banner {
                display: block;
                height: 367px;
                width: 100%;
                max-width: 921px;
                margin: 0 0 50px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .contact-us-showroom-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            .contact-us-showroom-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 37px
            }

            @media (max-width: 599px) {
                .contact-us-showroom-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            @media (max-width: 599px) {
                .contact-us-showroom-content-container {
                    padding:0 30px 40px
                }
            }

            .contact-us-showroom-location {
                color: #303030;
                font-size: 19px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 25px
            }

            @media (max-width: 599px) {
                .contact-us-showroom-location {
                    font-size:14px;
                    line-height: 26px
                }
            }

            .contact-us-showroom-location-list {
                display: flex;
                flex-wrap: wrap;
                list-style: none;
                padding: 0;
                margin: 0 -32px 20px
            }

            .contact-us-showroom-location-list li {
                margin: 0 32px 30px;
                border: 1px solid #d1d1d1;
                border-radius: 8px;
                min-height: 134px;
                width: calc(50% - 64px);
                padding: 22px 40px
            }

            @media (max-width: 599px) {
                .contact-us-showroom-location-list li {
                    width:100%;
                    padding: 16px 20px 20px;
                    min-height: unset
                }
            }

            .contact-us-showroom-location-list li h4 {
                color: #303030;
                font-size: 18px;
                font-weight: 600;
                margin: 0 0 13px
            }

            @media (max-width: 599px) {
                .contact-us-showroom-location-list li h4 {
                    font-size:14px
                }
            }

            .contact-us-showroom-location-list li p {
                color: #303030;
                font-size: 14px;
                line-height: 24px;
                margin: 0
            }

            @media (max-width: 599px) {
                .contact-us-showroom-location-list li p {
                    font-size:10px
                }
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout .content-navigation.center {
                    justify-content:center
                }
            }

            .our-neighborhood-layout-list {
                display: flex;
                flex: 0 0 auto;
                list-style: none;
                background: #2c2c2c;
                margin: 0;
                justify-content: center;
                padding: 1rem 2rem
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-list {
                    flex-direction:column;
                    margin: 0 auto
                }
            }

            .our-neighborhood-layout-list li {
                font-size: 12px
            }

            .our-neighborhood-layout-list li a {
                cursor: pointer;
                opacity: .3;
                padding: 1rem 2rem;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 12px;
                font-weight: 600;
                color: #fff;
                text-align: left
            }

            .our-neighborhood-layout-list li a:focus {
                outline: 0
            }

            .our-neighborhood-layout-list li a.active {
                opacity: 1
            }

            .our-neighborhood-layout-banner {
                text-align: center;
                padding-top: 1rem;
                height: 452px
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-banner {
                    height:367px;
                    top: 7rem
                }
            }

            .our-neighborhood-layout-banner-title {
                color: #fcfcfc;
                text-transform: uppercase;
                font-size: 48px;
                margin: 5rem 0 1rem
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-banner-title {
                    font-size:28px;
                    margin-top: 30px
                }
            }

            .our-neighborhood-layout-banner-body {
                color: #fcfcfc;
                margin: 0 auto;
                width: 50%;
                line-height: 24px
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-banner-body {
                    font-size:12px;
                    padding: 0 20px;
                    width: 100%
                }
            }

            @media (min-width: 600px) {
                .our-neighborhood-layout-banner-body {
                    padding:10px 0
                }
            }

            .our-neighborhood-layout-banner-search-container {
                display: flex;
                margin: 4rem 0 3rem;
                justify-content: center
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-banner-search-container {
                    flex-direction:column;
                    margin: 2rem 0 1rem
                }
            }

            @media (min-width: 600px) {
                .our-neighborhood-layout-banner-search-container {
                    margin-top:1.5rem
                }
            }

            .our-neighborhood-layout-banner-search-container .search-input {
                margin: 0 1rem 4rem 0
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-banner-search-container .search-input {
                    margin:0 auto
                }
            }

            .our-neighborhood-layout-banner-search-container .search-input span {
                position: relative
            }

            .our-neighborhood-layout-banner-search-container .search-input span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .our-neighborhood-layout-banner-search-container .search-input span input {
                color: #fff;
                font-family: inherit;
                font-size: 15px;
                line-height: 20px;
                width: 431px;
                padding: .75rem 1.5rem .75rem 2.5rem;
                background: rgba(133,11,19,.7);
                border: 1px solid transparent;
                border-radius: 3px;
                outline: 0;
                transition: border .3s ease
            }

            .our-neighborhood-layout-banner-search-container .search-input span input:focus {
                border: 1px solid hsla(0,0%,100%,.5)
            }

            .our-neighborhood-layout-banner-search-container .search-input span input::-webkit-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .our-neighborhood-layout-banner-search-container .search-input span input:-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .our-neighborhood-layout-banner-search-container .search-input span input::-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .our-neighborhood-layout-banner-search-container .search-input span input::placeholder {
                color: hsla(0,0%,100%,.67)
            }

            @media (max-width: 599px) {
                .our-neighborhood-layout-banner-search-container .search-input span input {
                    width:300px;
                    margin-bottom: .5rem
                }
            }

            .main-container {
                max-width: 1130px;
                margin: 10rem auto
            }

            @media (max-width: 899px) {
                .main-container {
                    background-size:1100px 1753px!important
                }
            }

            @media (max-width: 599px) {
                .main-container {
                    margin-top:38px
                }
            }

            .main-search-title {
                position: absolute;
                top: 33px;
                left: 0;
                right: 0;
                color: #fff;
                font-size: 24px;
                font-weight: 600;
                max-width: 1280px;
                padding: 0 30px;
                margin: 0 auto;
                z-index: 10001
            }

            .main-search-title-container {
                position: relative;
                background: #1d2e41;
                margin-bottom: -117px;
                height: 164px;
                padding-top: 33px
            }

            @media (max-width: 899px) {
                .main-search-title-container {
                    display:none
                }
            }

            .main-search-title small {
                font-size: 17px;
                font-weight: 300;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .mission-vision {
                    padding:0!important
                }
            }

            .mission-vision-banner {
                display: block;
                height: 367px;
                width: 100%;
                max-width: 921px;
                margin: 0 0 50px;
                border-radius: 3px;
                -o-object-fit: cover;
                object-fit: cover
            }

            @media (max-width: 599px) {
                .mission-vision-banner {
                    height:255px;
                    border-radius: 0
                }
            }

            .mission-vision-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 0 0 23px
            }

            @media (max-width: 599px) {
                .mission-vision-title {
                    font-size:24px;
                    font-weight: 700
                }
            }

            .mission-vision-content {
                margin: 0 0 70px
            }

            @media (max-width: 599px) {
                .mission-vision-content-container {
                    padding:0 30px 40px
                }
            }

            .mission-vision-content p {
                color: #303030;
                font-size: 14px;
                font-weight: 300;
                line-height: 24px;
                white-space: pre-wrap
            }

            @media (max-width: 599px) {
                .mission-vision-content p {
                    font-size:13px;
                    line-height: 26px
                }
            }

            .our-properties .search-container {
                padding: 45px 0 145px;
                background-image: linear-gradient(180deg,rgba(153,13,20,.843137),rgba(153,13,20,.843137)),url(/static/properties-banner-d119a1a08642fe0135d6229f38c52e77.png);
                background-repeat: no-repeat;
                background-position: bottom;
                background-size: cover;
                display: flex;
                flex-direction: column
            }

            @media (max-width: 599px) {
                .our-properties .search-container {
                    margin-bottom:1rem
                }
            }

            @media (max-width: 899px) {
                .our-properties .search-container {
                    display:flex;
                    flex-direction: column
                }
            }

            .our-properties .search-container.map-search {
                padding: 27px 0 60px!important
            }

            .our-properties .search-container.map-search h1 {
                display: block
            }

            .our-properties .search-container .search-container-title {
                font-size: 36px;
                text-transform: uppercase;
                color: #fff;
                margin: 0 auto;
                padding: 51px 0 39px
            }

            .our-properties .search-container-main {
                display: flex;
                margin: 0 auto;
                height: 6rem;
                width: 100%;
                max-width: 1280px;
                padding: 0 40px;
                flex-direction: column
            }

            .our-properties .search-container-main .search-container-content {
                display: flex;
                margin-bottom: 20px
            }

            @media (max-width: 899px) {
                .our-properties .search-container-main .search-container-content {
                    display:none
                }
            }

            .our-properties .search-container-main .search-container-content .property-search-input-container {
                flex: 0 0 340px
            }

            .our-properties .search-container-main .search-container-content .property-search-input-container,.our-properties .search-container-main .search-container-content .property-search-select-container {
                margin: 0 16px 29px 0;
                background: rgba(133,11,19,.7)
            }

            .our-properties .search-container-main .search-container-content-button {
                cursor: pointer;
                flex: 0 0 145px;
                background: #fff;
                color: #990d15;
                font-size: 14px;
                font-weight: 600;
                border-radius: 3px;
                border: none;
                width: 145px;
                height: 50px;
                padding: 0;
                line-height: 40px;
                text-align: center;
                text-decoration: none
            }

            @media (max-width: 599px) {
                .our-properties .search-container-main .search-container-content-button {
                    width:300px;
                    height: 50px;
                    margin: 1rem auto
                }
            }

            .our-properties .search-container .search-button-hide {
                display: none
            }

            @media (max-width: 899px) {
                .our-properties .search-container .search-button-hide {
                    margin:0 auto;
                    display: block;
                    background: #fff;
                    color: #990d15;
                    font-size: 14px;
                    font-weight: 600;
                    border-radius: 3px;
                    border: none;
                    cursor: pointer;
                    width: 145px;
                    line-height: 40px;
                    text-align: center;
                    text-decoration: none
                }
            }

            .our-properties .search-container .search-button-hide:focus {
                outline: 0
            }

            .our-properties .search-container .search-container-button {
                display: flex;
                justify-content: space-between;
                margin-top: -1.5rem
            }

            @media (max-width: 899px) {
                .our-properties .search-container .search-container-button {
                    margin-top:1.5rem
                }
            }

            .our-properties .search-container .search-container-button .search-advanced-filter,.our-properties .search-container .search-container-button .search-advanced-filter-content {
                display: flex
            }

            @media (max-width: 599px) {
                .our-properties .search-container .search-container-button .search-advanced-filter-content {
                    display:none
                }
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .property-search-input-container,.our-properties .search-container .search-container-button .search-advanced-filter .property-search-select-container {
                flex: 0 0 250px;
                margin: 0 16px 29px 0;
                background: rgba(133,11,19,.7)
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide {
                margin-top: .3rem
            }

            @media (max-width: 599px) {
                .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide {
                    margin-top:1.1rem
                }
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-show {
                margin-top: 1rem
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide,.our-properties .search-container .search-container-button .search-advanced-filter .filter-button-show {
                display: flex;
                background: 0 0;
                border: none;
                cursor: pointer;
                align-self: flex-start;
                margin: 1rem 0 0
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide:focus,.our-properties .search-container .search-container-button .search-advanced-filter .filter-button-show:focus {
                outline: 0
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide span,.our-properties .search-container .search-container-button .search-advanced-filter .filter-button-show span {
                margin: 0 0 0 .5rem;
                display: inline-block;
                color: #fff;
                font-size: 14px;
                line-height: 17px
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide {
                display: none
            }

            @media (max-width: 599px) {
                .our-properties .search-container .search-container-button .search-advanced-filter .filter-button-hide {
                    display:flex
                }
            }

            .our-properties .search-container .search-container-button .search-advanced-filter .advanced-filter {
                width: 250px;
                height: 50px;
                margin-right: 1rem
            }

            @media (max-width: 599px) {
                .our-properties .search-container .search-container-button .search-advanced-filter .advanced-filter {
                    width:300px;
                    margin: 1rem 0 .3rem
                }
            }

            .our-properties .search-container .search-container-button .search-advanced-toggle {
                color: #fff;
                font-size: 14px;
                display: flex
            }

            .our-properties .search-container .search-container-button .search-advanced-toggle span {
                margin: 1rem 1rem 0 0
            }

            .our-properties .search-container .search-container-button .search-advanced-toggle>div {
                margin-top: .6rem
            }

            .our-properties-list-view {
                display: flex;
                flex-wrap: wrap;
                padding: 0 40px 40px;
                max-width: 1325px;
                margin: -64px auto 0
            }

            @media (max-width: 1399px) {
                .our-properties-list-view {
                    justify-content:space-between
                }
            }

            @media (max-width: 599px) {
                .our-properties-list-view {
                    justify-content:space-around
                }
            }

            .our-properties-list-view .property-card-link {
                display: inline-block;
                margin-bottom: 30px
            }

            @media (min-width: 1400px) {
                .our-properties-list-view .property-card-link {
                    margin:0 17px 30px
                }
            }

            @media (max-width: 599px) {
                .our-properties-list-view .property-card-link {
                    width:100%
                }
            }

            @media (min-width: 1400px) {
                .our-properties-list-view .property-card-link .property-card {
                    position:relative;
                    width: 381px
                }

                .our-properties-list-view .property-card-link .property-card .property-card-header {
                    flex-direction: column-reverse
                }

                .our-properties-list-view .property-card-link .property-card .property-card-header .type {
                    position: absolute;
                    bottom: 16px;
                    right: 15px
                }
            }

            @media (max-width: 599px) {
                .our-properties-list-view .property-card-link .property-card {
                    width:100%
                }
            }

            .our-properties-list-view .property-card-link .property-card .property-card-header {
                height: 223px
            }

            .our-properties-list-view .property-card-link .property-card .size {
                border: none
            }

            .privacy-policy-article-title {
                color: #303030;
                font-size: 24px!important;
                font-weight: 600;
                line-height: 32px;
                margin: 50px 0 15px
            }

            .privacy-policy-article-title-main {
                font-size: 30px
            }

            @media (max-width: 599px) {
                .privacy-policy-article-title {
                    font-size:24px;
                    font-weight: 700;
                    line-height: 32px;
                    margin: 0 0 9px
                }
            }

            .privacy-policy-article-description {
                color: #a9a9a9;
                font-size: 14px;
                line-height: 20px;
                margin: 0 0 25px
            }

            @media (max-width: 599px) {
                .privacy-policy-article-description {
                    color:#a5a5a5;
                    font-size: 12px;
                    font-weight: 600;
                    line-height: 25px
                }
            }

            .privacy-policy-article-description a {
                color: #990d15
            }

            .privacy-policy-article-content h1 {
                font-size: 20px
            }

            .privacy-policy-article-content h2 {
                font-size: 15px
            }

            .privacy-policy-article-content h4 {
                font-size: 20px;
                font-weight: bolder
            }

            .privacy-policy-article-content a {
                color: var(--color-primary);
                text-decoration: none
            }

            .privacy-policy-article-content a:hover {
                text-decoration: underline
            }

            .privacy-policy-article-content p {
                color: #303030;
                font-size: 14px;
                font-weight: 300;
                line-height: 24px
            }

            @media (max-width: 599px) {
                .privacy-policy-article-content p {
                    font-size:13px;
                    line-height: 26px
                }
            }

            .privacy-policy-article-content hr {
                margin-bottom: 30px
            }

            .privacy-policy-article-divider {
                display: grid;
                grid-template-columns: 1fr 250px
            }

            @media (max-width: 480px) {
                .privacy-policy-article-divider {
                    grid-template-columns:1fr
                }
            }

            .privacy-policy-article-divider img {
                height: 400px;
                -o-object-fit: cover;
                object-fit: cover
            }

            .privacy-policy .grid-container {
                display: grid;
                grid-template-columns: repeat(2,2fr);
                grid-auto-rows: minmax(5rem,auto)
            }

            .privacy-policy .grid-item-content {
                padding: 1rem 0 2rem 1.5rem
            }

            .privacy-policy .grid-item-content:nth-child(4n-4),.privacy-policy .grid-item-content:nth-child(4n-5) {
                background: #f6f6f6
            }

            .privacy-policy .grid-item-title {
                font-weight: bolder;
                padding: 1rem 0 2rem 1.5rem
            }

            @media only screen and (max-width: 480px) {
                .privacy-policy .plus {
                    margin-left:15px;
                    margin-top: 12px
                }
            }

            .pursuit-passion-layout-slider>.slick-list {
                height: calc(100vh - 229px);
                height: 449px
            }

            @media (max-width: 899px) {
                .pursuit-passion-layout-slider>.slick-list {
                    height:unset;
                    height: 600px
                }
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-slider>.slick-list {
                    height:258px
                }
            }

            .pursuit-passion-layout-slider-image {
                height: 449px;
                width: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                background: #990d15;
                background-position: 50%
            }

            @media (max-width: 899px) {
                .pursuit-passion-layout-slider-image {
                    height:unset;
                    height: 600px
                }
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-slider-image {
                    height:258px
                }
            }

            .pursuit-passion-layout-overlay {
                text-align: center;
                padding: 66px 30px 105px
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-overlay {
                    padding:57px 24px 32px
                }
            }

            .pursuit-passion-layout-overlay-header {
                color: #fcfcfc;
                font-size: 15px;
                margin: 0 0 15px;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-overlay-header {
                    font-size:14px;
                    margin: 0
                }
            }

            .pursuit-passion-layout-overlay-title {
                color: #fcfcfc;
                text-transform: uppercase;
                font-size: 48px;
                line-height: 33px;
                margin: 0 0 18px
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-overlay-title {
                    font-size:28px;
                    margin: 0 0 21px
                }
            }

            .pursuit-passion-layout-overlay-body {
                color: #fcfcfc;
                max-width: 616px;
                margin: 0 auto 70px
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-overlay-body {
                    font-size:12px;
                    margin: 0 auto 35px
                }
            }

            .pursuit-passion-layout-overlay-search {
                display: flex;
                justify-content: center
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-overlay-search {
                    flex-direction:column
                }
            }

            .pursuit-passion-layout-overlay-search .search-input span {
                position: relative
            }

            .pursuit-passion-layout-overlay-search .search-input span:after {
                position: absolute;
                content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxNSAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIyNS4wMDAwMDAsIC0yMy4wMDAwMDApIiBmaWxsPSIjQThBOEE4IiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxnPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMTQuMDAwMDAwLCAxMy4wMDAwMDApIj48ZyBpZD0ic2VhcmNoLSgxKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTEuMDAwMDAwLCAxMC4wMDAwMDApIj48cGF0aCBkPSJNMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IEwxMC43NTc3NzI4LDEwLjI1MTEyMjQgQzExLjY4MTM2NjUsOS4xMjY4NzkyNCAxMi4xODc0MDg5LDcuNzEyMzUxMzIgMTIuMTg3NDA4OSw2LjIzOTc2NjQ0IEMxMi4xODc0MDg5LDIuNzk5MjEzNDggOS40NTM3MjAwOCwxLjk1Mzk5MjUyZS0xNCA2LjA5MzcwNDQ0LDEuOTUzOTkyNTJlLTE0IEMyLjczMzY4ODgsMS45NTM5OTI1MmUtMTQgNC45NzM3OTkxNWUtMTQsMi43OTkyMTM0OCA0Ljk3Mzc5OTE1ZS0xNCw2LjIzOTc2NjQ0IEM0Ljk3Mzc5OTE1ZS0xNCw5LjY4MDMxOTQgMi43MzM2ODg4LDEyLjQ3OTUzMjkgNi4wOTM3MDQ0NCwxMi40Nzk1MzI5IEM3LjM1NTEwMTI2LDEyLjQ3OTUzMjkgOC41NTcxNTA3LDEyLjA4OTk1NDQgOS41ODQ4NjcyLDExLjM1MDQwNjQgTDEzLjIwNDI2MjcsMTUuMjA0OTU0MyBDMTMuMzU1NTQ1NSwxNS4zNjU4MzE4IDEzLjU1OTAyMjMsMTUuNDU0NTQ1IDEzLjc3NzA3MDksMTUuNDU0NTQ1IEMxMy45ODM0NjIsMTUuNDU0NTQ1IDE0LjE3OTI1NTQsMTUuMzczOTcwNiAxNC4zMjc4ODg4LDE1LjIyNzQ3MTggQzE0LjY0MzcwMTcsMTQuOTE2Mjk3MyAxNC42NTM3Njk1LDE0LjQwMDI5NTggMTQuMzQ5ODc5MSwxNC4wNzY2NDE4IFogTTYuMDkzNzA0NDQsMS42Mjc3NjUxNiBDOC41NzcyODY0MiwxLjYyNzc2NTE2IDEwLjU5Nzc0NjksMy42OTY2NTQ2NyAxMC41OTc3NDY5LDYuMjM5NzY2NDQgQzEwLjU5Nzc0NjksOC43ODI4NzgyMSA4LjU3NzI4NjQyLDEwLjg1MTc2NzcgNi4wOTM3MDQ0NCwxMC44NTE3Njc3IEMzLjYxMDEyMjQ3LDEwLjg1MTc2NzcgMS41ODk2NjIwMyw4Ljc4Mjg3ODIxIDEuNTg5NjYyMDMsNi4yMzk3NjY0NCBDMS41ODk2NjIwMywzLjY5NjY1NDY3IDMuNjEwMTIyNDcsMS42Mjc3NjUxNiA2LjA5MzcwNDQ0LDEuNjI3NzY1MTYgWiIgaWQ9IlNoYXBlIi8+PC9nPjwvZz48L2c+PC9nPjwvZz48L3N2Zz4=);
                top: 1px;
                left: 1rem
            }

            .pursuit-passion-layout-overlay-search .search-input span input {
                color: #fff;
                font-family: inherit;
                font-size: 15px;
                line-height: 20px;
                width: 431px;
                padding: 14px 1.5rem 14px 2.5rem;
                background: rgba(133,11,19,.7);
                border: 1px solid transparent;
                border-radius: 3px;
                outline: 0;
                transition: border .3s ease
            }

            .pursuit-passion-layout-overlay-search .search-input span input:focus {
                border: 1px solid hsla(0,0%,100%,.5)
            }

            .pursuit-passion-layout-overlay-search .search-input span input::-webkit-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .pursuit-passion-layout-overlay-search .search-input span input:-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .pursuit-passion-layout-overlay-search .search-input span input::-ms-input-placeholder {
                color: hsla(0,0%,100%,.67)
            }

            .pursuit-passion-layout-overlay-search .search-input span input::placeholder {
                color: hsla(0,0%,100%,.67)
            }

            @media (max-width: 599px) {
                .pursuit-passion-layout-overlay-search .search-input span input {
                    width:100%
                }
            }

            .terms-condition-article-title {
                color: #303030;
                font-size: 30px;
                font-weight: 600;
                line-height: 32px;
                margin: 50px 0 6px
            }

            @media (max-width: 599px) {
                .terms-condition-article-title {
                    font-size:24px;
                    font-weight: 700;
                    line-height: 32px;
                    margin: 0 0 9px
                }
            }

            .terms-condition-article-description {
                color: #a9a9a9;
                font-size: 14px;
                line-height: 20px;
                margin: 0 0 35px
            }

            @media (max-width: 599px) {
                .terms-condition-article-description {
                    color:#a5a5a5;
                    font-size: 12px;
                    font-weight: 600;
                    line-height: 25px
                }
            }

            .terms-condition-article-content {
                color: #303030;
                font-size: 14px;
                font-weight: 300;
                line-height: 24px;
                white-space: pre-wrap
            }

            @media (max-width: 599px) {
                .terms-condition-article-content {
                    font-size:13px;
                    line-height: 26px
                }
            }

            .article-layout-container {
                display: flex;
                background: #fff
            }

            @media (max-width: 899px) {
                .article-layout-container {
                    flex-direction:column
                }
            }

            .article-layout-aside {
                flex: 0 0 auto;
                width: 346px;
                background: #f6f6f6
            }

            @media (max-width: 899px) {
                .article-layout-aside {
                    width:100%
                }
            }

            @media (max-width: 599px) {
                .article-layout-aside {
                    display:none
                }
            }

            .article-layout-main {
                flex: 1 1 auto;
                overflow: hidden
            }

            .article-layout-main-content {
                padding: 20px 50px 100px
            }

            @media (max-width: 599px) {
                .article-layout-main-content {
                    padding:2rem 2rem 4rem
                }
            }

            @media (max-width: 599px) {
                .article-layout-main-content-breadcrumbs {
                    display:none
                }
            }

            .article-layout-aside-header {
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIyMzJweCIgaGVpZ2h0PSIxMzJweCIgdmlld0JveD0iMCAwIDIzMiAxMzIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHJlY3QgaWQ9InBhdGgtMSIgeD0iMCIgeT0iMCIgd2lkdGg9IjIzMiIgaGVpZ2h0PSIxMzIiLz48cG9seWdvbiBpZD0icGF0aC0zIiBwb2ludHM9IjAuMjQ2MDk3MTExIDAuMzE2MiA2Ni45NTc0Mzk2IDAuMzE2MiA2Ni45NTc0Mzk2IDExNi42NTYwMiAwLjI0NjA5NzExMSAxMTYuNjU2MDIiLz48L2RlZnM+PGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PG1hc2sgaWQ9Im1hc2stMiIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSIvPjwvbWFzaz48ZyBpZD0iUmVjdGFuZ2xlIi8+PGcgb3BhY2l0eT0iMC41IiBtYXNrPSJ1cmwoI21hc2stMikiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03NC4wMDAwMDAsIDEwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0yNzguODg0NDgxLDY5Ljc5NTc1MDEgQzI5My42MTM3ODcsNjEuMDU2NzYwMiAyOTkuMTYzMTMxLDQzLjE1ODk0MDkgMjkxLjI3OTYwNSwyOS44MTk2MzM5IEMyODMuMzk1NDg0LDE2LjQ4MTUyMTQgMjY1LjA2NDE3LDEyLjc1MjUzNTMgMjUwLjMzNTQ2LDIxLjQ5MjEyMjUgQzI0Ny4xMjkyMzksMjMuMzk0MjM5OCAyNDIuMDE0NDI1LDI4LjUxMTE0NDQgMjQyLjA2Njg3OCwyOC4zNTg4NTU2IEwxMzkuODY1MzY3LDEyMS43MzkzNzkgTDE0MC40NzI3NTUsMTIyLjc2NjU4MiBMMjcwLjI2NjYwNiw3My40MjYxOTYzIEMyNzAuMDcxMDk3LDczLjYzNzAxMTkgMjc2LjEwODYxNyw3MS40NDI4NTgzIDI3OC44ODQ0ODEsNjkuNzk1NzUwMSIgZmlsbD0iI0E1MkEyRSIvPjxwYXRoIGQ9Ik0yMzQuODIyMDI5LDEyNC4xMjAxNiBDMjQ1LjQ1NzcxNCwxMjIuNTgyOTQgMjUyLjk0Nzc5NCwxMTMuNTg4NTkzIDI1MS41NTA0MTQsMTA0LjAzMDc1OCBDMjUwLjE1MjQzMyw5NC40NzI5MjMyIDI0MC4zOTgzNTcsODcuOTcwNDQ2OSAyMjkuNzYyMDcyLDg5LjUwNzY2NjkgQzIyNy40NDcwOTgsODkuODQyMTgyMiAyMjMuMjU3MzU1LDkxLjU3NTU3OTYgMjIzLjMyMzkyNSw5MS41MDA0NDc4IEwxNDEuNzE4MDk5LDEyMS4wMzAyMTcgTDE0MS44MjYwNTEsMTIxLjc2NjYyNyBMMjI4Ljk1MzAzLDEyNC4xNjQ4ODEgQzIyOC43ODg3MDMsMTI0LjIzOTQxNyAyMzIuODE3MTE3LDEyNC40MDkzNTggMjM0LjgyMjAyOSwxMjQuMTIwMTYiIGZpbGw9IiNCOTMyMzYiLz48cGF0aCBkPSJNMjQ2LjY0MDM5NiwxOTAuNDY3MTA5IEMyNTkuNzEwNzc3LDE5Ni4wODM3NDggMjc0LjUzOTM1NSwxOTAuNjU1NjU2IDI3OS43NjA2ODUsMTc4LjM0NDEwOCBDMjg0Ljk4MjAxNSwxNjYuMDMyNTYgMjc4LjYxOTQ3MywxNTEuNDk4ODEzIDI2NS41NDkwOTIsMTQ1Ljg4MjE3NCBDMjYyLjcwNDE0LDE0NC42NTk5MzUgMjU2Ljc1MzMxOSwxNDMuNzg1MjcxIDI1Ni44ODE5ODMsMTQzLjc0MzEwNSBMMTQzLjk4ODc0NCwxMjEuNjgzMTU4IEwxNDMuNTg1OTk4LDEyMi42MzE5MTQgTDIzOS45OTgzODUsMTg2LjQxNTQ2NyBDMjM5Ljc2MDgwNywxODYuMzg4OTYyIDI0NC4xNzcyNDQsMTg5LjQwODcxOCAyNDYuNjQwMzk2LDE5MC40NjcxMDkiIGZpbGw9IiNBMjIzMjciLz48cGF0aCBkPSJNMzAuODgwODIyNiwxNDMuNzA1OTU2IEMxOC44NzgxNTMxLDE0OC40NTk5NzQgMTIuNjQ3NjM2MiwxNjEuMDY1NzAyIDE2Ljk2NDkwMTUsMTcxLjg2Mjg1MSBDMjEuMjgyMTY2OCwxODIuNjU5OTk5IDM0LjUxMjM0MSwxODcuNTU4NTEyIDQ2LjUxNTAxMDUsMTgyLjgwNTA5MSBDNDkuMTI3ODA3OSwxODEuNzcwMzM3IDUzLjUzOTI2NTksMTc4LjU3NzcwNiA1My40ODIyNzAzLDE3OC42ODM5ODggTDE0MC41OTU1MTcsMTIxLjQ1MzA3MSBMMTQwLjI2MjU0MiwxMjAuNjIxMzI3IEwzNy43Mjk4OTE2LDE0Mi4wMjI3NjQgQzM3LjkwMDI3ODQsMTQxLjg4OTYxNCAzMy4xNDI2NDcyLDE0Mi44MDk3MjcgMzAuODgwODIyNiwxNDMuNzA1OTU2IiBmaWxsPSIjQUEyNDI4Ii8+PHBhdGggZD0iTTE3Mi44OTY4NzMsMTg4LjAwOTkzOSBDMTc3LjY1NDQ3NSwxOTQuOTAxOTg1IDE4Ni41Njk4NDEsMTk3LjAwODI1MSAxOTIuODA5NDY2LDE5Mi43MTQ4NDYgQzE5OS4wNDkwOSwxODguNDIyMDM1IDIwMC4yNDk5NTcsMTc5LjM1NDc0MyAxOTUuNDkyMzU1LDE3Mi40NjMyOTIgQzE5NC40NTY0ODgsMTcwLjk2MzU3MyAxOTEuNzg5MDg2LDE2OC42NDAyNTggMTkxLjg2NTMzMSwxNjguNjYwNDc2IEwxNDIuODgzNTM0LDEyMS45NDAyNTQgTDE0Mi40MDI4MywxMjIuMjcwODgyIEwxNzAuODM1ODYxLDE4My45MjgyMzEgQzE3MC43MjYyNTgsMTgzLjgzOTYyNyAxNzEuOTk5Nzk2LDE4Ni43MTA2MTkgMTcyLjg5Njg3MywxODguMDA5OTM5IiBmaWxsPSIjQTYyMjI2Ii8+PHBhdGggZD0iTTI5LjM3ODM0MTUsNzQuMjQyNTg3OSBDMTYuMDMwMDY0Niw3MS4zNDM0NTMgMy4xMDUwMzg4OCw3OC44NjY1NzgxIDAuNTA5MjU3ODkzLDkxLjA0NjMyODkgQy0yLjA4NjUyMzA5LDEwMy4yMjYwOCA2LjYyOTkzNzA1LDExNS40NDk5NDkgMTkuOTc4MjE0LDExOC4zNDg0OCBDMjIuODgzNTAxMSwxMTguOTgwMDQgMjguNjQ0Mzg2OCwxMTguNzU4MjM5IDI4LjUzMTI0MDUsMTE4LjgxOTI3OSBMMTM4Ljg1MTMzNCwxMTkuNjIxMjcxIEwxMzkuMDUxODg0LDExOC42ODI2OTMgTDM2LjM4NjIzMTgsNzYuODEyOTQ4NyBDMzYuNjE0OTE5MSw3Ni43OTYwMjY1IDMxLjg5MzkwMjMsNzQuNzg4OTMzMSAyOS4zNzgzNDE1LDc0LjI0MjU4NzkiIGZpbGw9IiNBOTIwMjUiLz48cGF0aCBkPSJNMTkzLjI2NTcwOCw1MC4wNzMxNjUzIEMxOTcuODMzMzU5LDQxLjIzNjU2OTYgMTk0Ljg5NzY0NywzMC41OTc5NjE4IDE4Ni43MDgzMzgsMjYuMzExNDAyMSBDMTc4LjUxOTAyOSwyMi4wMjU0Mzg2IDE2OC4xNzc2OTQsMjUuNzE0MTA5MyAxNjMuNjEwNjM2LDM0LjU1MDcwNSBDMTYyLjYxNjY2NCwzNi40NzQzMjE3IDE2MS42OTQzNjcsNDAuNTg1MDMxNyAxNjEuNjcxODU4LDQwLjQ5MjYzNjEgTDE0MC40MTkzNDIsMTE4LjE5Mzc1NyBMMTQxLjA1MDc5MiwxMTguNTI0NTkyIEwxOTAuMTIwODk1LDU0LjUwMTU5NjkgQzE5MC4wOTAwOTMsNTQuNjY2MTIwNyAxOTIuNDA1MDE3LDUxLjczODY3MDUgMTkzLjI2NTcwOCw1MC4wNzMxNjUzIiBmaWxsPSIjQUEyNDI4Ii8+PGcgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3My42NzAyMzUsIDAuNjIzMTQxKSI+PG1hc2sgaWQ9Im1hc2stNCIgZmlsbD0id2hpdGUiPjx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMyIvPjwvbWFzaz48ZyBpZD0iQ2xpcC0yMSIvPjxwYXRoIGQ9Ik00MS4wMzg0MTU0LDEzLjQxMzQyIEMzNS45NzIwMTc5LDIuMjkyNDIgMjMuMTk2NjYyNiwtMi43MjA1OCAxMi41MDMwNTM2LDIuMjE2ODIgQzEuODEwMDQwNjcsNy4xNTQyMiAtMi43NTIxNjA1NSwyMC4xNzI0MiAyLjMxNDIzNjkxLDMxLjI5MzQyIEMzLjQxNzM4OTY4LDMzLjcxMzgyIDYuNzI1NjU2MDMsMzcuNjkzMDIgNi42MTc3ODQyNiwzNy42NDY4MiBMNjYuMTMzMjAzOSwxMTYuNjU2MDIgTDY2Ljk1NzQzOTYsMTE2LjI3NTYyIEw0Mi44OTk2NTA0LDE5LjgzNjQyIEM0My4wMzczMjEsMTkuOTg5NDIgNDEuOTkzMTY5OSwxNS41MDkyMiA0MS4wMzg0MTU0LDEzLjQxMzQyIiBmaWxsPSIjQjkzMjM2IiBtYXNrPSJ1cmwoI21hc2stNCkiLz48L2c+PHBhdGggZD0iTTEwMC43MDgzMTcsNTcuNjk2MDI3OCBDOTQuOTE3ODY3LDUxLjQ5ODMzMzUgODUuNzE4NTEzNSw1MC43NDk4NTE1IDgwLjE1OTk5LDU2LjAyNDQ5NzYgQzc0LjYwMjA1OTcsNjEuMjk5MTQzOCA3NC43OTAwOTIxLDcwLjU5OTU3MTEgODAuNTgwNTQyMSw3Ni43OTcyNjUzIEM4MS44NDA0MTg3LDc4LjE0NjU2NTYgODQuODUxOTAzNSw4MC4wNzIxNzMxIDg0Ljc3MzAxMjksODAuMDYzMjA1NyBMMTQwLjY4MzMwMSwxMTkuNTEwMzYxIEwxNDEuMTExNTY0LDExOS4xMDQ0MzUgTDEwMy4zODM0NzksNjEuNDgzMjc1MSBDMTAzLjUwNTY3LDYxLjU1NTYxMjUgMTAxLjc5OTE0Miw1OC44NjQxODU4IDEwMC43MDgzMTcsNTcuNjk2MDI3OCIgZmlsbD0iI0E2MjIyNiIvPjwvZz48L2c+PC9nPjwvc3ZnPg==) no-repeat 0 100%,linear-gradient(180deg,#a52930 21%,#941f23 99%);
                padding: 48px 25px 32px
            }

            .article-layout-aside-header-title {
                color: #fff;
                font-size: 20px;
                font-weight: 700;
                line-height: 27px;
                margin: 4px 0 23px
            }

            .article-layout-recent-articles {
                padding: 33px 25px 25px
            }

            .article-layout-recent-articles.mobile-visible {
                display: none
            }

            @media (max-width: 599px) {
                .article-layout-recent-articles.mobile-visible {
                    display:block
                }
            }

            .article-layout-recent-articles-title {
                color: #4a4a4a;
                font-size: 20px;
                font-weight: 700;
                line-height: 22px;
                margin: 0 0 25px
            }

            .article-layout-recent-articles .item {
                margin: 10px 0
            }

            .mini-article-card {
                display: flex;
                width: 100%;
                height: 125px;
                background: #fff;
                border-radius: 3px;
                overflow: hidden;
                -webkit-filter: drop-shadow(var(--box-shadow));
                filter: drop-shadow(var(--box-shadow));
                transition: -webkit-filter .25s ease-in-out;
                transition: filter .25s ease-in-out;
                transition: filter .25s ease-in-out,-webkit-filter .25s ease-in-out
            }

            .mini-article-card:hover {
                -webkit-filter: drop-shadow(var(--box-shadow-hover));
                filter: drop-shadow(var(--box-shadow-hover))
            }

            .mini-article-card-link {
                display: block;
                color: inherit;
                text-decoration: none
            }

            .mini-article-card-details {
                padding: 17px 10px 20px 19px
            }

            .mini-article-card-details span {
                display: inline-block;
                color: #fff;
                font-size: 10px;
                font-weight: 700;
                line-height: 15px;
                text-transform: uppercase;
                background: #990d15;
                border-radius: 1px;
                padding: 2px 9px;
                margin: 0 0 5px
            }

            .mini-article-card-details h3 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                text-overflow: ellipsis;
                color: #303030;
                font-size: 14px;
                font-weight: 600;
                line-height: 19px;
                margin: 0 0 4px;
                overflow: hidden
            }

            .mini-article-card-details p {
                font-size: 12px;
                color: #4a4a4a;
                margin: 0
            }

            .mini-article-card .gatsby-image-wrapper {
                min-width: 90px;
                width: 90px;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover
            }

            .breadcrumbs {
                list-style: none;
                padding: 0;
                margin: 0 0 20px
            }

            .breadcrumbs li {
                display: inline-block;
                color: #303030;
                font-size: 15px;
                font-weight: 300;
                line-height: 25px
            }

            .breadcrumbs li:not(:last-child):after {
                content: "\2022";
                display: inline-block;
                padding: 0 6px
            }

            .breadcrumbs li a {
                color: inherit;
                text-decoration: none;
                text-transform: capitalize
            }

            .breadcrumbs li a:hover {
                text-decoration: underline
            }

            .breadcrumbs li span {
                text-transform: capitalize;
                font-weight: 600
            }

            .vertical-navigation {
                color: #fff;
                font-size: 14px;
                line-height: 20px;
                list-style: none;
                padding: 0;
                margin: 0
            }

            @media (max-width: 400px) {
                .vertical-navigation {
                    padding:20px!important
                }
            }

            .vertical-navigation.secondary {
                color: #990d15;
                font-size: 16px;
                line-height: 16px;
                margin-left: 20px
            }

            .vertical-navigation.secondary ul {
                margin-top: 10px
            }

            .vertical-navigation.secondary ul li {
                color: #505050;
                font-size: 13px
            }

            .vertical-navigation:not(.secondary) button img {
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            .vertical-navigation>li {
                padding: 15px 0
            }

            .vertical-navigation>li:not(:first-child) {
                border-top: 1px solid #fff
            }

            .vertical-navigation>li button {
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                width: 100%;
                padding: 0 10px 0 0;
                border: none;
                background: 0 0
            }

            .vertical-navigation>li button:focus {
                outline: 0
            }

            .vertical-navigation>li button img {
                transition: transform .2s ease;
                padding: 5px 0
            }

            .vertical-navigation>li button.active img {
                transform: rotate(180deg)
            }

            .vertical-navigation ul {
                padding-left: 23px;
                margin: 15 0 0;
                height: 0;
                list-style: none;
                transition: height .2s ease;
                overflow: hidden
            }

            .vertical-navigation ul li {
                margin: 10px 0;
                height: 20px
            }

            .vertical-navigation a,.vertical-navigation button {
                color: inherit;
                font-size: inherit;
                font-weight: 600;
                text-decoration: none
            }

            .vertical-navigation a:hover,.vertical-navigation button:hover {
                opacity: .9
            }

            .content-navigation {
                display: flex;
                flex: 0 0 auto;
                list-style: none;
                background: rgba(44,44,44,.91);
                padding: 0 1rem;
                margin: 0;
                overflow: auto;
                -ms-overflow-style: none;
                scrollbar-width: none
            }

            .content-navigation.center {
                justify-content: center
            }

            @media (max-width: 599px) {
                .content-navigation.center {
                    justify-content:flex-start
                }
            }

            .content-navigation li {
                flex: 0 0 auto
            }

            .content-navigation li button {
                margin-top: 2px
            }

            .content-navigation li a,.content-navigation li button {
                cursor: pointer;
                display: block;
                padding: 1rem 2rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: opacity .5s ease-in-out;
                font-size: 12px;
                font-weight: 600;
                color: #fff;
                text-align: left;
                white-space: nowrap;
                background: 0 0;
                border: 0
            }

            .content-navigation li a:focus,.content-navigation li button:focus {
                outline: 0
            }

            .content-navigation li a:not(.active):hover,.content-navigation li button:not(.active):hover {
                opacity: .5
            }

            .content-navigation li a.active,.content-navigation li button.active {
                background-color: #fff;
                color: rgba(44,44,44,.91)
            }

            .content-navigation ul {
                list-style: none;
                padding: 0
            }

            .content-navigation-other-categories {
                position: absolute;
                background: #fff;
                box-shadow: 0 2px 6px 0 rgba(221,220,220,.5);
                border-radius: 3px;
                padding: 20px 22px;
                margin: 10px 0 0 32px;
                min-width: 181px;
                z-index: 100000
            }

            @media (max-width: 599px) {
                .content-navigation-other-categories {
                    position:relative;
                    background: hsla(0,0%,100%,.91);
                    width: 80%;
                    height: 100%;
                    max-width: 316px;
                    padding: 112px 30px 30px;
                    margin: 0;
                    text-transform: uppercase;
                    border-radius: 0
                }
            }

            .content-navigation-other-categories-container {
                display: none;
                z-index: 100000
            }

            @media (max-width: 599px) {
                .content-navigation-other-categories-container {
                    position:fixed;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    margin: 0;
                    width: 100%;
                    background: rgba(0,0,0,.47)
                }
            }

            .content-navigation-other-categories-container.active {
                display: block
            }

            .content-navigation-other-categories-title,.content-navigation-other-categories-title-mobile {
                color: #333;
                font-size: 14px;
                margin: 0 0 30px
            }

            @media (max-width: 599px) {
                .content-navigation-other-categories-title {
                    display:none
                }
            }

            .content-navigation-other-categories-title-mobile {
                display: none
            }

            @media (max-width: 599px) {
                .content-navigation-other-categories-title-mobile {
                    display:block
                }
            }

            .content-navigation-other-categories li a,.content-navigation-other-categories li button {
                color: #333;
                font-size: 14px;
                line-height: 36px;
                padding: 0;
                text-transform: none;
                opacity: .5
            }

            @media (max-width: 599px) {
                .content-navigation-other-categories li a,.content-navigation-other-categories li button {
                    color:#303030;
                    font-size: 15px;
                    text-transform: uppercase;
                    padding: 5px 0
                }
            }

            .content-navigation-other-categories li a:not(.active):hover,.content-navigation-other-categories li button:not(.active):hover {
                opacity: .8
            }

            .form-modal-background {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-color: #000;
                opacity: .5;
                z-index: 100000
            }

            .side-form-modal {
                position: fixed;
                background: #fff;
                top: 0;
                right: 0;
                height: 100vh;
                width: 30vw;
                overflow-x: hidden;
                overflow-y: auto;
                outline: 0;
                z-index: 1000000;
                animation: slide-in-right .5s cubic-bezier(.25,.46,.45,.94) both
            }

            @media (max-width: 599px) {
                .side-form-modal {
                    width:100%;
                    max-width: 316px
                }
            }

            .side-form-modal-container-overlay {
                position: absolute;
                left: 41px;
                top: 31px;
                text-align: center;
                z-index: 1;
                cursor: pointer
            }

            .side-form-modal-container-circle {
                position: absolute;
                left: 50px;
                top: 40px;
                border-radius: 50%;
                height: 34px;
                width: 34px;
                background: #e7e9f3;
                border: 0;
                color: #fff
            }

            @keyframes slide-in-right {
                0% {
                    transform: translateX(100%);
                    opacity: 0
                }

                to {
                    transform: translateX(0);
                    opacity: 1
                }
            }

            .career-post-form {
                padding: 7rem 3rem 1rem
            }

            @media (max-width: 599px) {
                .career-post-form {
                    padding:7rem 2.5rem 1rem
                }
            }

            .career-post-form-separator {
                border-top: 1px solid #dadada;
                width: 100%;
                position: absolute;
                top: 6rem
            }

            .career-post-form-position {
                font-size: 22px;
                color: #303030;
                margin: 0 0 0 11px
            }

            .career-post-form-location {
                font-size: 14px;
                color: #a9a9a9;
                margin-left: 11px;
                margin-top: 5px
            }

            .career-post-form-footer {
                display: flex;
                padding-top: 10px;
                flex-direction: column
            }

            @media (max-width: 599px) {
                .career-post-form-footer {
                    flex-direction:column
                }
            }

            .career-post-form .career-post-form-checkboxes .career-post-form-recaptcha {
                margin-left: 15px
            }

            @media (max-width: 599px) {
                .career-post-form .career-post-form-checkboxes .career-post-form-recaptcha {
                    margin-left:-2px
                }
            }

            .career-post-form-i-agree {
                display: flex;
                margin: 0 0 23px;
                line-height: 17px
            }

            .career-post-form-i-agree input[type=checkbox] {
                display: none
            }

            .career-post-form-i-agree input[type=checkbox]+span {
                display: block;
                margin-right: 13px;
                width: 20px;
                height: 20px;
                outline: 0
            }

            .career-post-form-i-agree input[type=checkbox]+span:after {
                content: "\A0";
                display: block;
                width: 100%;
                height: 100%;
                border: 1px solid #a8a8a8;
                border-radius: 2px
            }

            .career-post-form-i-agree input[type=checkbox]:checked+span:after {
                content: "\2713";
                text-align: center;
                color: #000
            }

            .career-post-form-policy-text {
                color: #303030;
                font-size: 11px;
                line-height: 19px
            }

            .career-post-form-policy-text a {
                color: #157b58;
                text-decoration: none
            }

            .career-post-form-policy-text a:hover {
                text-decoration: underline
            }

            .career-post-form-checkboxes {
                flex: 1 1 auto;
                margin: 0 0 2rem
            }

            .career-post-form-submit-button {
                cursor: pointer;
                align-self: center;
                background: 0 0;
                border-radius: 4px;
                border: none;
                padding: 11px 100px;
                color: #fff;
                font-size: 20px;
                font-weight: 400;
                display: flex;
                text-transform: uppercase
            }

            @media (max-width: 599px) {
                .career-post-form-submit-button {
                    width:100%;
                    justify-content: center
                }
            }

            .career-post-form-submit-button:disabled {
                cursor: not-allowed;
                opacity: .8;
                justify-content: center
            }

            .career-post-form-submit-button img {
                margin-right: 6px
            }

            .career-post-form-button {
                background: #ab101b;
                width: 100%;
                height: 72px;
                display: flex;
                align-items: center;
                justify-content: center
            }

            .career-post-form-button button:focus {
                outline: 0
            }

            .form-container {
                margin: 0 -.75rem;
                display: flex;
                flex-wrap: wrap
            }

            .form-container .form-content,.form-container .form-field-container {
                margin-left: .75rem;
                margin-right: .75rem;
                width: 100%
            }

            .form-container .form-content {
                overflow: hidden
            }

            .form-container .form-field-container.half {
                width: calc(50% - 1.5rem)
            }

            @media (max-width: 599px) {
                .form-container .form-field-container.half {
                    width:100%
                }
            }

            .form-field {
                position: relative;
                border: .0625rem solid #a8a8a8;
                border-radius: .1875rem;
                transition: all .2s ease
            }

            .form-field-container {
                display: inline-block;
                width: 100%;
                margin-top: .5625rem;
                margin-bottom: .875rem
            }

            .form-field-input-container {
                display: flex
            }

            .form-field-input-container input::-webkit-input-placeholder {
                color: #a8a8a8;
                font-size: .875rem;
                line-height: 1.375rem;
                opacity: 1!important
            }

            .form-field-input-container input:-ms-input-placeholder {
                color: #a8a8a8;
                font-size: .875rem;
                line-height: 1.375rem;
                opacity: 1!important
            }

            .form-field-input-container input::-ms-input-placeholder {
                color: #a8a8a8;
                font-size: .875rem;
                line-height: 1.375rem;
                opacity: 1!important
            }

            .form-field-input-container input::placeholder {
                color: #a8a8a8;
                font-size: .875rem;
                line-height: 1.375rem;
                opacity: 1!important
            }

            .form-field-input-prefix.large .css-1pahdxg-control,.form-field-input-prefix.large .css-yk16xz-control {
                min-width: 7.875rem
            }

            .form-field-input-prefix .css-1pahdxg-control,.form-field-input-prefix .css-yk16xz-control {
                min-width: 5.875rem
            }

            .form-field-input-prefix .css-1wa3eu0-placeholder {
                display: block!important
            }

            .form-field-input-prefix .css-1gtu0rj-indicatorContainer,.form-field-input-prefix .css-tlfecz-indicatorContainer {
                padding: 0!important
            }

            .form-field-error {
                color: red;
                font-size: .875rem;
                line-height: 1.375rem;
                height: 1.375rem;
                margin: 0;
                transition: all .2s ease
            }

            .form-field-error:empty {
                height: 0
            }

            .form-field.has-error {
                border-color: red
            }

            .form-field.has-error label {
                color: red
            }

            .form-field:not(.is-focused).empty-field>label {
                top: .8125rem;
                left: .5625rem;
                font-size: .875rem;
                background: 0 0
            }

            .form-field input,.form-field textarea {
                display: block;
                width: 100%;
                padding: .5rem 1rem;
                border: none;
                font-size: .875rem;
                line-height: 1.375rem;
                background: 0 0;
                resize: none
            }

            .form-field input:focus,.form-field textarea:focus {
                outline: 0
            }

            .form-field input::-webkit-input-placeholder,.form-field textarea::-webkit-input-placeholder {
                opacity: 0
            }

            .form-field input:-ms-input-placeholder,.form-field textarea:-ms-input-placeholder {
                opacity: 0
            }

            .form-field input::-ms-input-placeholder,.form-field textarea::-ms-input-placeholder {
                opacity: 0
            }

            .form-field input::placeholder,.form-field textarea::placeholder {
                opacity: 0
            }

            .form-field input:-ms-input-placeholder:not(:focus)~label,.form-field textarea:-ms-input-placeholder:not(:focus)~label {
                top: .8125rem;
                left: .5625rem;
                font-size: .875rem;
                background: 0 0
            }

            .form-field input:placeholder-shown:not(:focus)~label,.form-field textarea:placeholder-shown:not(:focus)~label {
                top: .8125rem;
                left: .5625rem;
                font-size: .875rem;
                background: 0 0
            }

            .form-field label {
                position: absolute;
                top: -.375rem;
                left: .5625rem;
                color: #a8a8a8;
                font-size: .6875rem;
                line-height: .875rem;
                padding: 0 .4375rem;
                background: #fff;
                white-space: nowrap;
                transition: all .2s ease
            }

            .form-field .css-1pahdxg-control,.form-field .css-yk16xz-control {
                border: none;
                box-shadow: none;
                flex-wrap: nowrap
            }

            .form-field .css-1pahdxg-control>div,.form-field .css-yk16xz-control>div {
                padding: 0
            }

            .form-field .css-1pahdxg-control .css-1uccc91-singleValue,.form-field .css-yk16xz-control .css-1uccc91-singleValue {
                font-size: .875rem;
                line-height: 1.375rem
            }

            .form-field .css-1pahdxg-control .css-1uccc91-singleValue,.form-field .css-1pahdxg-control .css-1wa3eu0-placeholder,.form-field .css-yk16xz-control .css-1uccc91-singleValue,.form-field .css-yk16xz-control .css-1wa3eu0-placeholder {
                padding: .5rem 1rem!important
            }

            .form-field .css-1pahdxg-control input[type=text],.form-field .css-yk16xz-control input[type=text] {
                padding: 0 1rem!important
            }

            .form-field .css-1pahdxg-control .css-1wa3eu0-placeholder,.form-field .css-yk16xz-control .css-1wa3eu0-placeholder {
                display: none;
                color: #a8a8a8;
                font-size: .875rem;
                line-height: .875rem
            }

            .form-field .css-1pahdxg-control .css-b8ldur-Input,.form-field .css-1pahdxg-control input,.form-field .css-yk16xz-control .css-b8ldur-Input,.form-field .css-yk16xz-control input {
                font-size: .875rem;
                line-height: .875rem;
                padding: 0;
                margin: 0
            }

            .form-field .css-1pahdxg-control .css-1okebmr-indicatorSeparator,.form-field .css-yk16xz-control .css-1okebmr-indicatorSeparator {
                display: none
            }

            .form-field .css-1pahdxg-control .css-1gtu0rj-indicatorContainer,.form-field .css-1pahdxg-control .css-tlfecz-indicatorContainer,.form-field .css-yk16xz-control .css-1gtu0rj-indicatorContainer,.form-field .css-yk16xz-control .css-tlfecz-indicatorContainer {
                padding: 0 1rem 0 0
            }

            .file-upload {
                display: flex;
                margin: 10px -12px 1rem 10px;
                flex-wrap: wrap
            }

            .file-upload .form-field-error {
                flex: 1 1 100%
            }

            .file-upload-container {
                position: relative;
                overflow: hidden
            }

            .file-upload-container input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0
            }

            .file-upload-button {
                border: .0625rem solid #a8a8a8;
                border-left: 0;
                border-radius: 0 3px 3px 0;
                background: #ab101b;
                color: #fff;
                height: 42px;
                padding: 10px 26px 0 10px;
                font-size: 14px
            }

            .file-upload-button.has-error {
                border-color: red
            }

            .file-upload-input {
                height: 42px;
                background: #fff;
                border: .0625rem solid #a8a8a8;
                border-radius: 3px 0 0 3px;
                width: 100%;
                max-width: 400px;
                padding: 0 14px;
                color: hsla(0,0%,51.4%,.67);
                font-size: 14px;
                flex: 1 1 50%
            }

            @media (min-width: 600px) {
                .file-upload-input {
                    flex-basis:30%
                }
            }

            .file-upload-input.has-error {
                border-color: red;
                color: red
            }

            .file-upload-input:focus {
                outline: 0
            }

            .file-upload-text {
                margin-left: 11px;
                font-size: 12px;
                color: #a9a9a9
            }

            .pop-up-dim-overlay {
                width: 100vw;
                height: 100vh;
                background-color: #000;
                opacity: .5
            }

            .pop-up,.pop-up-dim-overlay {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1900000
            }

            .pop-up {
                width: 100%;
                height: 100%;
                overflow-x: hidden;
                overflow-y: auto;
                outline: 0
            }

            .pop-up-content {
                position: relative;
                z-index: 100;
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIzODZweCIgaGVpZ2h0PSIyNTVweCIgdmlld0JveD0iMCAwIDM4NiAyNTUiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PCEtLUdlbmVyYXRvcjogU2tldGNoIDY0ICg5MzUzNykgLSBodHRwczovL3NrZXRjaC5jb20tLT48dGl0bGU+R3JvdXAgMjU8L3RpdGxlPjxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPjxkZWZzPjxwb2x5Z29uIGlkPSJwYXRoLTEiIHBvaW50cz0iMC4zNDkxNDAzMTEgMC4xMTIwMzA2OTYgMTA1LjkwMTM5MyAwLjExMjAzMDY5NiAxMDUuOTAxMzkzIDk3LjU0NjI5NjMgMC4zNDkxNDAzMTEgOTcuNTQ2Mjk2MyIvPjxwb2x5Z29uIGlkPSJwYXRoLTMiIHBvaW50cz0iMC4zMjMyMzIwMjcgMC40MTM0OTIzMDggODcuOTQ0MDk5OCAwLjQxMzQ5MjMwOCA4Ny45NDQwOTk4IDE1Mi41NTAxOCAwLjMyMzIzMjAyNyAxNTIuNTUwMTgiLz48L2RlZnM+PGcgaWQ9IlNlcC0yLVNwcmludC0zIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBvcGFjaXR5PSIwLjAzMDk5NDIzMzYiPjxnIGlkPSJHcm91cC0yNSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTkzLjAwMDAwMCwgMTI4LjUwMDAwMCkgc2NhbGUoLTEsIDEpIHRyYW5zbGF0ZSgtMTkzLjAwMDAwMCwgLTEyOC41MDAwMDApICI+PHBhdGggZD0iTTM2NS4wNzAxOTQsOTAuNTM4MjQ4MiBDMzg0LjM2MDgzNCw3OS4wNzg2MjkzIDM5MS42Mjg2ODQsNTUuNjA4ODQ3NCAzODEuMzAzODA5LDM4LjExNjczNzMgQzM3MC45NzgxNTMsMjAuNjI2MTkzNSAzNDYuOTcwMDQ2LDE1LjczNjI5NjcgMzI3LjY4MDE4NywyNy4xOTY2OTg3IEMzMjMuNDgxMDcxLDI5LjY5MDk4NDYgMzE2Ljc4MjMxNCwzNi40MDA4ODc5IDMxNi44NTEwMTIsMzYuMjAxMTg4NCBMMTgzLDE1OC42NTMwMDcgTDE4My43OTU0ODIsMTYwIEwzNTMuNzgzNTU4LDk1LjI5ODkyNzcgQzM1My41Mjc1MDUsOTUuNTc1Mzc0NCAzNjEuNDM0NzA4LDkyLjY5ODEzNTMgMzY1LjA3MDE5NCw5MC41MzgyNDgyIiBpZD0iRmlsbC0xIiBmaWxsPSIjQTUyQTJFIi8+PHBhdGggZD0iTTMwNi44ODE1MDksMTYxLjc4NjQyMyBDMzIwLjgwNDU4OCwxNTkuNzY2MDc3IDMzMC42MDk3ODMsMTQ3Ljk0NDkzNiAzMjguNzgwNDg1LDEzNS4zODMyMDkgQzMyNi45NTA0MDIsMTIyLjgyMTQ4MyAzMTQuMTgxNDI5LDExNC4yNzUzNzIgMzAwLjI1NzU2NSwxMTYuMjk1NzE4IEMyOTcuMjI3MDUzLDExNi43MzUzNjcgMjkxLjc0MjI5OSwxMTkuMDEzNTQ2IDI5MS44Mjk0NDYsMTE4LjkxNDgwMSBMMTg1LDE1Ny43MjUzNTUgTDE4NS4xNDEzMTksMTU4LjY5MzIwOSBMMjk5LjE5ODQ1NiwxNjEuODQ1MiBDMjk4Ljk4MzMzNywxNjEuOTQzMTYxIDMwNC4yNTY4OTcsMTYyLjE2NjUxMiAzMDYuODgxNTA5LDE2MS43ODY0MjMiIGlkPSJGaWxsLTMiIGZpbGw9IiNCOTMyMzYiLz48cGF0aCBkPSJNMzIzLjE2NTU1LDI0OC4wOTcyODggQzM0MC4zMDg1ODYsMjU1LjQ1NDI5NSAzNTkuNzU3NjYzLDI0OC4zNDQyNTggMzY2LjYwNTkyOSwyMzIuMjE3ODY0IEMzNzMuNDU0MTk2LDIxNi4wOTE0NzEgMzY1LjEwOTEyMiwxOTcuMDU0MzEgMzQ3Ljk2NjA4NiwxODkuNjk3MzAzIEMzNDQuMjM0NjY0LDE4OC4wOTYzNDIgMzM2LjQyOTYwMiwxODYuOTUwNjU2IDMzNi41OTgzNTYsMTg2Ljg5NTQyMyBMMTg4LjUyODIzOSwxNTggTDE4OCwxNTkuMjQyNzM4IEwzMTQuNDUzOTI3LDI0Mi43OTAyMDcgQzMxNC4xNDIzMjEsMjQyLjc1NTQ5IDMxOS45MzQ4OTUsMjQ2LjcxMDk0NiAzMjMuMTY1NTUsMjQ4LjA5NzI4OCIgaWQ9IkZpbGwtNSIgZmlsbD0iI0EyMjMyNyIvPjxwYXRoIGQ9Ik00MC4wNTQzMjE1LDE4Ny4yOTg1NzYgQzI0LjMwNjgxOTIsMTkzLjUzODIyMyAxNi4xMzIzODA5LDIxMC4wODMyNDIgMjEuNzk2NjMzLDIyNC4yNTQ0OTkgQzI3LjQ2MDg4NSwyMzguNDI1NzU3IDQ0LjgxODg3MzcsMjQ0Ljg1NTA1NCA2MC41NjYzNzYsMjM4LjYxNjE5IEM2My45OTQzNjYzLDIzNy4yNTgwNzYgNjkuNzgyMTk5MSwyMzMuMDY3NzQ3IDY5LjcwNzQyMDksMjMzLjIwNzI0MiBMMTg0LDE1OC4wOTE2NjQgTDE4My41NjMxMzgsMTU3IEw0OS4wNDAzLDE4NS4wODkzODYgQzQ5LjI2Mzg0NzUsMTg0LjkxNDYyNiA0My4wMjE4MzU0LDE4Ni4xMjIyNzQgNDAuMDU0MzIxNSwxODcuMjk4NTc2IiBpZD0iRmlsbC03IiBmaWxsPSIjQUEyNDI4Ii8+PHBhdGggZD0iTTIyNS43NTExNjMsMjQ0Ljk4MTA5NyBDMjMxLjk1MzAzNywyNTMuOTUwMTk3IDI0My41NzQ4NTQsMjU2LjY5MTIyOSAyNTEuNzA4NjUsMjUxLjEwMzkyIEMyNTkuODQyNDQ2LDI0NS41MTczODUgMjYxLjQwNzg2MiwyMzMuNzE3NDg1IDI1NS4yMDU5ODgsMjI0Ljc0OTE1OCBDMjUzLjg1NTY2MiwyMjIuNzk3NDY5IDI1MC4zNzg1MTIsMjE5Ljc3Mzk3NyAyNTAuNDc3OTA0LDIxOS44MDAyODggTDE4Ni42MjY2MzIsMTU5IEwxODYsMTU5LjQzMDI2OSBMMjIzLjA2NDQ4NywyMzkuNjY5Mjg0IEMyMjIuOTIxNjExLDIzOS41NTM5NzggMjI0LjU4MTc2LDI0My4yOTAyMDEgMjI1Ljc1MTE2MywyNDQuOTgxMDk3IiBpZD0iRmlsbC05IiBmaWxsPSIjQTYyMjI2Ii8+PHBhdGggZD0iTTE5MC43ODUwNzgsMjI3LjkzNjYxOSBDMTkyLjc1NzMzMywyMzUuNjU1OTIgMTk5Ljg4NjY4LDI0MC40MzUyMzkgMjA2LjcwODUwNSwyMzguNjEyMjQ4IEMyMTMuNTMxMDkxLDIzNi43ODkyNTcgMjE3LjQ2MjY2LDIyOS4wNTUxNjYgMjE1LjQ5MTE2NiwyMjEuMzM2NjQ0IEMyMTUuMDYxODUzLDIxOS42NTYwOTggMjEzLjQ2NjM4OSwyMTYuNzA5MTExIDIxMy41MjU3NjIsMjE2Ljc1MjcwMSBMMTg1LjUyNTk4NSwxNTkgTDE4NSwxNTkuMTQwODg5IEwxOTAuMjc5NjQ1LDIyMy42MTExMDIgQzE5MC4yMTI2NiwyMjMuNDk2Njc4IDE5MC40MTM2MTUsMjI2LjQ4MjU4NSAxOTAuNzg1MDc4LDIyNy45MzY2MTkiIGlkPSJGaWxsLTExIiBmaWxsPSIjQUMyODJDIi8+PGcgaWQ9Ikdyb3VwLTE1IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3Ny4wMDAwMDAsIDE1OS4wMDAwMDApIj48bWFzayBpZD0ibWFzay0yIiBmaWxsPSJ3aGl0ZSI+PHVzZSB4bGluazpocmVmPSIjcGF0aC0xIi8+PC9tYXNrPjxnIGlkPSJDbGlwLTE0Ii8+PHBhdGggZD0iTTcuMTQzMjA2NzUsODguNzkxMjgxMiBDMTQuODk5NDAzLDk3LjY4MjYyNTIgMjkuMTQ5MjMxOCw5Ny45MjE3NDUyIDM4Ljk3MTA4NTcsODkuMzI1OTY5MiBDNDEuMTA4NzU1Nyw4Ny40NTYxMjkyIDQ0LjIzMDMzMzEsODIuOTExMjgxMiA0NC4yMTIzMzAxLDgzLjAzMjgwMTIgTDEwNy44MTcyMSwtMS4xMjk1OTg4MSBMMTA3LjIxOTE5NCwtMS44MTQ4MTQ4MSBMMTYuODMzNTU5OSw1My4yMDg2NTcyIEMxNi45NTA5NzEzLDUzLjAyNDQxNzIgMTIuNzMyNzcxNSw1NS41MDgxMjkyIDEwLjg4MTU4NTMsNTcuMTI3ODczMiBDMS4wNjA1MTQxMyw2NS43MjM2NDkyIC0wLjYxMzc3MjI1NSw3OS44OTkxNTMyIDcuMTQzMjA2NzUsODguNzkxMjgxMiBaIiBpZD0iRmlsbC0xMyIgZmlsbD0iIzlGMjIyNiIgbWFzaz0idXJsKCNtYXNrLTIpIi8+PC9nPjxwYXRoIGQ9Ik0zOC4zOTg2NzA3LDk1LjgxMDQxMzggQzIwLjkyMTA3MDgsOTIuMDI4OTMzNSAzLjk5NzY1NTgsMTAxLjg0MTcwNSAwLjU5ODg2MzQyNiwxMTcuNzI4MzM3IEMtMi43OTk5Mjg5NSwxMzMuNjE0OTY4IDguNjEyOTkwMDksMTQ5LjU1OTE0NiAyNi4wOTA1OTAxLDE1My4zMzk4MzggQzI5Ljg5NDYzNTEsMTU0LjE2MzYxMyAzNy40Mzc2NjUzLDE1My44NzQzMDYgMzcuMjg5NTE2OSwxNTMuOTUzOTI0IEwxODEuNzM3NDA5LDE1NSBMMTgyLDE1My43NzU3NjggTDQ3LjU3NDQ2OTUsOTkuMTYzMDU4MiBDNDcuODczOTAxOSw5OS4xNDA5ODU4IDQxLjY5MjQyNjYsOTYuNTIzMDM3OSAzOC4zOTg2NzA3LDk1LjgxMDQxMzgiIGlkPSJGaWxsLTE2IiBmaWxsPSIjQTkyMDI1Ii8+PHBhdGggZD0iTTI1My4xNzY3OTYsNjQuNDMwNTc5MyBDMjU5LjE2NDU0MSw1Mi44Njc3OTk5IDI1NS4zMTYxMDgsMzguOTQ3MDY4MyAyNDQuNTgwNzIsMzMuMzM4MDU5NCBDMjMzLjg0NTMzMiwyNy43Mjk4MzA2IDIyMC4yODg4NDcsMzIuNTU2NDk1NCAyMTQuMzAxODc5LDQ0LjExOTI3NDkgQzIxMi45OTg4NzgsNDYuNjM2MzQ3OCAyMTEuNzg5ODM3LDUyLjAxNTI1NTUgMjExLjc2MDMyOSw1MS44OTQzNTQ5IEwxODMuOTAwMzQ3LDE1My41NjcwOTggTDE4NC43MjgxMTcsMTU0IEwyNDkuMDU0MjUyLDcwLjIyNTIyOTEgQzI0OS4wMTM4NzMsNzAuNDQwNTEwMyAyNTIuMDQ4NTEyLDY2LjYwOTkxMDYgMjUzLjE3Njc5Niw2NC40MzA1NzkzIEw5MSw1MS44OTQzNTQ5IiBpZD0iRmlsbC0xOCIgZmlsbD0iI0FBMjQyOCIvPjxnIGlkPSJHcm91cC0yMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTYuMDAwMDAwLCAwLjAwMDAwMCkiPjxtYXNrIGlkPSJtYXNrLTQiIGZpbGw9IndoaXRlIj48dXNlIHhsaW5rOmhyZWY9IiNwYXRoLTMiLz48L21hc2s+PGcgaWQ9IkNsaXAtMjEiLz48cGF0aCBkPSJNNTMuOTAxMjAyMywxNy41NDA2MjYyIEM0Ny4yNDY4Mjk1LDIuOTk3NzggMzAuNDY3MjU4MywtMy41NTc2ODE1NCAxNi40MjE5MjEyLDIuODk4OTE4NDYgQzIuMzc3MzY2ODUsOS4zNTU1MTg0NiAtMy42MTQ3NzgwMywyNi4zNzkzMTg1IDMuMDM5NTk0NzUsNDAuOTIyMTY0NiBDNC40ODg1MTE4MSw0NC4wODczMDMxIDguODMzNjk3NDcsNDkuMjkwODcyMyA4LjY5MjAxNTE0LDQ5LjIzMDQ1NjkgTDg2Ljg2MTUyMTYsMTUyLjU1MDE4IEw4Ny45NDQwOTk4LDE1Mi4wNTI3MzQgTDU2LjM0NTgwOTUsMjUuOTM5OTMzOCBDNTYuNTI2NjMwNiwyNi4xNDAwMTA4IDU1LjE1NTIwODMsMjAuMjgxMjg3NyA1My45MDEyMDIzLDE3LjU0MDYyNjIiIGlkPSJGaWxsLTIwIiBmaWxsPSIjQjkzMjM2IiBtYXNrPSJ1cmwoI21hc2stNCkiLz48L2c+PHBhdGggZD0iTTEzMi4xNjQ5ODUsNzQuODExMDI1MSBDMTI0LjU5Mjg1OCw2Ni42NzA3NyAxMTIuNTYyOTM0LDY1LjY4NzY4OTEgMTA1LjI5NDA5NSw3Mi42MTU1ODI1IEM5OC4wMjYwMzI3LDc5LjU0MzQ3NiA5OC4yNzE5MjEzLDkxLjc1ODk2MjYgMTA1Ljg0NDA0OCw5OS44OTkyMTc3IEMxMDcuNDkxNTc5LDEwMS42NzE0MzMgMTExLjQyOTY3NSwxMDQuMjAwNTg5IDExMS4zMjY1MSwxMDQuMTg4ODExIEwxODQuNDM5OTY0LDE1NiBMMTg1LDE1NS40NjY4NDQgTDEzNS42NjMyNzMsNzkuNzg1MzIwMiBDMTM1LjgyMzA2Miw3OS44ODAzMzA0IDEzMy41OTE0NDgsNzYuMzQ1MzIyMyAxMzIuMTY0OTg1LDc0LjgxMTAyNTEiIGlkPSJGaWxsLTIzIiBmaWxsPSIjQTYyMjI2Ii8+PC9nPjwvZz48L3N2Zz4=) no-repeat,#fff;
                background-position: bottom -3rem right -11.5rem;
                border-radius: 10px;
                max-width: 600px;
                padding: 3rem 3.75rem;
                margin: 10rem auto 0
            }

            @media (max-width: 599px) {
                .pop-up-content {
                    height:100%;
                    margin: 0;
                    max-width: none;
                    border-radius: 0;
                    padding: 4rem 2rem
                }

                .pop-up-content-close {
                    height: 2.5rem!important;
                    width: 2.5rem!important
                }

                .pop-up-content-close img {
                    height: 1rem!important;
                    width: 1rem!important;
                    margin-top: .2rem
                }
            }

            .pop-up-content-close {
                cursor: pointer;
                position: absolute;
                top: 1.75rem;
                right: 1.75rem;
                border-radius: 50%;
                height: 1.5rem;
                width: 1.5rem;
                background: rgba(171,16,26,.27);
                border: 0;
                color: #fff
            }

            .pop-up-content-close img {
                height: .5rem;
                width: .5rem;
                -webkit-filter: brightness(0) invert(1);
                filter: brightness(0) invert(1)
            }

            .pop-up-content-logo {
                margin: 0 0 1.625rem
            }

            .pop-up-content-main {
                display: flex;
                flex-direction: column;
                padding: 0
            }

            .pop-up-content-main h3 {
                font-size: 1.5rem;
                font-weight: 600;
                margin: 0 0 .9375rem
            }

            .pop-up-content-main p {
                color: #303030;
                line-height: 1.625rem;
                margin: 0 0 1.4375rem
            }

            .pop-up-content-main-contact-list {
                color: #a6a6a6;
                font-size: .875rem;
                line-height: 1.625rem;
                margin: 0;
                padding: 0;
                list-style: none
            }

            .pop-up-content-main-link {
                text-decoration: none;
                font-size: 14px;
                color: #ab101b;
                cursor: pointer
            }

            .form-container {
                padding-left: 12px
            }

            body.modal-open {
                overflow: hidden
            }

            .modal-overlay {
                z-index: 100040;
                background-color: #000;
                opacity: .5
            }

            .modal-overlay,.modal-wrapper {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0
            }

            .modal-wrapper {
                z-index: 100050;
                overflow-x: hidden;
                overflow-y: auto;
                outline: 0
            }

            .modal-wrapper .modal {
                position: relative;
                z-index: 100;
                background: #fff;
                border-radius: 3px;
                max-width: 600px;
                padding: 30px;
                margin: 20px auto
            }

            @media (max-width: 599px) {
                .modal-wrapper .modal {
                    margin:0;
                    height: 100%;
                    width: 100%
                }
            }

            .modal-wrapper .modal .modal-header {
                text-align: right
            }

            .modal-wrapper .modal .modal-header .modal-close-button {
                cursor: pointer;
                display: inline-block;
                color: #fff;
                font-size: 20px;
                padding: 0;
                height: 30px;
                width: 30px;
                background: rgba(0,0,0,.08);
                border: none;
                border-radius: 15px
            }

            .modal-wrapper .modal .modal-header .modal-close-button span {
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                padding-bottom: 2px
            }

            .modal-wrapper .modal>* {
                max-width: 100%
            }
        </style>
        <meta name="generator" content="Gatsby 2.32.13">
        <script>
            !function(e, t, a, n, g) {
                e[n] = e[n] || [],
                e[n].push({
                    "gtm.start": (new Date).getTime(),
                    event: "gtm.js"
                });
                var m = t.getElementsByTagName(a)[0]
                  , r = t.createElement(a);
                r.async = !0,
                r.src = "https://www.googletagmanager.com/gtm.js?id=GTM-PQDQ6MX",
                m.parentNode.insertBefore(r, m)
            }(window, document, "script", "dataLayer")
        </script>
        <script>
            !function(e, t, a, n, g) {
                e[n] = e[n] || [],
                e[n].push({
                    "gtm.start": (new Date).getTime(),
                    event: "gtm.js"
                });
                var m = t.getElementsByTagName(a)[0]
                  , r = t.createElement(a);
                r.async = !0,
                r.src = "https://www.googletagmanager.com/gtm.js?id=AW-10870289884",
                m.parentNode.insertBefore(r, m)
            }(window, document, "script", "dataLayer")
        </script>
        <link rel="sitemap" type="application/xml" href="/sitemap.xml">
        <style>
            .gatsby-image-wrapper {
                position: relative;
                overflow: hidden
            }

            .gatsby-image-wrapper picture.object-fit-polyfill {
                position: static!important
            }

            .gatsby-image-wrapper img {
                bottom: 0;
                height: 100%;
                left: 0;
                margin: 0;
                max-width: none;
                padding: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%;
                object-fit: cover
            }

            .gatsby-image-wrapper [data-main-image] {
                opacity: 0;
                transform: translateZ(0);
                transition: opacity .25s linear;
                will-change: opacity
            }

            .gatsby-image-wrapper-constrained {
                display: inline-block;
                vertical-align: top
            }
        </style>
        <noscript>
            <style>
                .gatsby-image-wrapper noscript [data-main-image] {
                    opacity: 1!important
                }

                .gatsby-image-wrapper [data-placeholder-image] {
                    opacity: 0!important
                }
            </style>
        </noscript>
        <script type="module">
            const e = "undefined" != typeof HTMLImageElement && "loading"in HTMLImageElement.prototype;
            e && document.body.addEventListener("load", (function(e) {
                if (void 0 === e.target.dataset.mainImage)
                    return;
                if (void 0 === e.target.dataset.gatsbyImageSsr)
                    return;
                const t = e.target;
                let a = null
                  , n = t;
                for (; null === a && n; )
                    void 0 !== n.parentNode.dataset.gatsbyImageWrapper && (a = n.parentNode),
                    n = n.parentNode;
                const o = a.querySelector("[data-placeholder-image]")
                  , r = new Image;
                r.src = t.currentSrc,
                r.decode().catch((()=>{}
                )).then((()=>{
                    t.style.opacity = 1,
                    o && (o.style.opacity = 0,
                    o.style.transition = "opacity 500ms linear")
                }
                ))
            }
            ), !0)
        </script>