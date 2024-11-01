<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/2151/PNG/512/wave_icon_132718.png">


    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">


    <!-- Styles -->
    <style>
        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }

        .centered2 {
            width: 70%;
            margin-left: 23%;
            margin-right: 15%;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            opacity: 1;
            background-color: rgba(0, 0, 0, 0);
        }

        .item-1,
        .item-2,
        .item-3 {
            position: fixed;
            top: 2em;

            width: 60%;

            font-size: 1em;

            animation-duration: 20s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        .item-1 {
            animation-name: anim-1;
        }

        .item-2 {
            animation-name: anim-2;
        }

        .item-3 {
            animation-name: anim-3;
        }

        @keyframes anim-1 {

            0%,
            8.3% {
                left: -100%;
                opacity: 0;
            }

            8.3%,
            25% {
                left: 25%;
                opacity: 1;
            }

            33.33%,
            100% {
                left: 110%;
                opacity: 0;
            }
        }

        @keyframes anim-2 {

            0%,
            33.33% {
                left: -100%;
                opacity: 0;
            }

            41.63%,
            58.29% {
                left: 25%;
                opacity: 1;
            }

            66.66%,
            100% {
                left: 110%;
                opacity: 0;
            }
        }

        @keyframes anim-3 {

            0%,
            66.66% {
                left: -100%;
                opacity: 0;
            }

            74.96%,
            91.62% {
                left: 25%;
                opacity: 1;
            }

            100% {
                left: 110%;
                opacity: 0;
            }
        }

        .ocean {
            height: 200px;
            width: 100%;
            overflow: hidden;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .ocean.v01 .wave {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
        }

        .ocean.v01 {
            transform: rotate(180deg);
            position: absolute;
            top: 0;
            left: 0;
        }

        .wave {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
            position: absolute;
            bottom: -25px;
            width: 6400px;
            height: 100%;
            animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
            transform: translate3d(0, 0, 0);
        }

        .wave:nth-of-type(2) {
            bottom: -25px;
            animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -.125s infinite, swell 7s ease -1.25s infinite;
            opacity: 1;
        }

        @keyframes wave {
            0% {
                margin-left: 0;
            }

            100% {
                margin-left: -1600px;
            }
        }

        @keyframes swell {

            0%,
            100% {
                transform: translateY(-25px);
            }

            50% {
                transform: translateY(5px);
            }
        }

        html {
            background-image: url('https://i.pinimg.com/originals/90/2f/b6/902fb683da6e99129aa43990f81607cd.gif');
        }

        .exactCenter {
            width: 150px;
            height: 150px;
            position: fixed;
            top: 15%;
            left: 51%;
            margin-top: -100px;
            margin-left: -100px;
        }

        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,800);

        *,
        html,
        body,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        form,
        label,
        fieldset,
        input,
        p,
        blockquote,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        article,
        aside,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section {
            display: block;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            -webkit-font-smoothing: antialiased;
        }

        a {
            color: #BA0707;
            text-decoration: none;
        }

        a:hover {
            color: #BA0707;
        }


        nav {
            display: block;
            margin-top: 100px;
            opacity: 0.75;
        }

        .menu {
            display: block;
        }

        .menu li {
            display: inline-block;
            position: relative;
            z-index: 100;
        }

        .menu li:first-child {
            margin-left: 0;
        }

        .menu li a {
            font-weight: 600;
            text-decoration: none;
            padding: 20px 15px;
            display: block;
            color: #fff;
            transition: all 0.2s ease-in-out 0s;
        }

        .menu li a:hover,
        .menu li:hover>a {
            color: #fff;
            background: #9ca3da;
        }

        .menu ul {
            visibility: hidden;
            opacity: 0;
            margin: 0;
            padding: 0;
            width: 150px;
            position: absolute;
            left: 0px;
            background: #fff;
            z-index: 99;
            transform: translate(0, 20px);
            transition: all 0.2s ease-out;
        }

        .menu ul:after {
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(255, 255, 255, 0);
            border-bottom-color: #fff;
            border-width: 6px;
            margin-left: -6px;
        }

        .menu ul li {
            display: block;
            float: none;
            background: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li a {
            font-size: 12px;
            font-weight: normal;
            display: block;
            color: #797979;
            background: #fff;
        }

        .menu ul li a:hover,
        .menu ul li:hover>a {
            background: #9ca3da;
            color: #fff;
        }

        .menu li:hover>ul {
            visibility: visible;
            opacity: 1;
            transform: translate(0, 0);
        }

        .menu ul ul {
            left: 149px;
            top: 0px;
            visibility: hidden;
            opacity: 0;
            transform: translate(20px, 20px);
            transition: all 0.2s ease-out;
        }

        .menu ul ul:after {
            left: -6px;
            top: 10%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(255, 255, 255, 0);
            border-right-color: #fff;
            border-width: 6px;
            margin-top: -6px;
        }

        .menu li>ul ul:hover {
            visibility: visible;
            opacity: 1;
            transform: translate(0, 0);
        }

        .responsive-menu {
            display: none;
            width: 100%;
            padding: 20px 15px;
            background: #374147;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
        }

        .responsive-menu:hover {
            background: #374147;
            color: #fff;
            text-decoration: none;
        }

        a.homer {
            background: #9ca3da;
        }

        @media (min-width: 768px) and (max-width: 979px) {
            .mainWrap {
                width: 768px;
            }

            .menu ul {
                top: 37px;
            }

            .menu li a {
                font-size: 12px;
            }

            a.homer {
                background: #374147;
            }
        }

        @media (max-width: 767px) {
            .mainWrap {
                width: auto;
                padding: 50px 20px;
            }

            .menu {
                display: none;
            }

            .responsive-menu {
                display: block;
                margin-top: 100px;
            }

            nav {
                margin: 0;
                background: none;
            }

            .menu li {
                display: block;
                margin: 0;
            }

            .menu li a {
                background: #fff;
                color: #797979;
            }

            .menu li a:hover,
            .menu li:hover>a {
                background: #9ca3da;
                color: #fff;
            }

            .menu ul {
                visibility: hidden;
                opacity: 0;
                top: 0;
                left: 0;
                width: 100%;
                transform: initial;
            }

            .menu li:hover>ul {
                visibility: visible;
                opacity: 1;
                position: relative;
                transform: initial;
            }

            .menu ul ul {
                left: 0;
                transform: initial;
            }

            .menu li>ul ul:hover {
                transform: initial;
            }
        }

        @media (max-width: 480px) {}

        @media (max-width: 320px) {}

        .centered {
            position: fixed;
            top: 25%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
            display: none;
        }

        @-webkit-keyframes shake {
            0% {
                -webkit-transform: translate(2px, 1px) rotate(0deg);
            }

            10% {
                -webkit-transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                -webkit-transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                -webkit-transform: translate(0px, 2px) rotate(0deg);
            }

            40% {
                -webkit-transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                -webkit-transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                -webkit-transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                -webkit-transform: translate(2px, 1px) rotate(-1deg);
            }

            80% {
                -webkit-transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                -webkit-transform: translate(2px, 2px) rotate(0deg);
            }

            100% {
                -webkit-transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .shake:hover {
            -webkit-animation-name: shake;
            -webkit-animation-duration: 0.5s;
            -webkit-transform-origin: 50% 50%;
            -webkit-animation-iteration-count: infinite;
        }

        .shake {
            display: inline-block
        }

        .hover-title {
            display: inline;
            pointer-events: auto;
            cursor: pointer;
        }

        .hover-image {
            visibility: hidden;
        }

        body:not(.mobile) .hover-title:hover+.hover-image {
            visibility: visible;
            pointer-events: none;
        }

        .hover-image {
            display: flex;
            position: fixed;
            top: 50%;
            left: 160%;
            transform: translate(-50%, -50%);
            z-index: -1;
            pointer-events: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            /* Change width and height to scale images */
            width: 17vw;
            height: 17vh;
        }

        .hover-image img {
            max-width: 100% !important;
            max-height: 100% !important;
            width: auto !important;
            height: auto !important;
            margin-bottom: 0;
        }
    </style>
    <script>
        function switchVisible() {
            if (document.getElementById('centered')) {

                if (document.getElementById('centered').style.display == 'none') {
                    document.getElementById('centered').style.display = 'block';
                    // document.getElementById('Div2').style.display = 'none';
                } else {
                    document.getElementById('centered').style.display = 'none';
                    // document.getElementById('Div2').style.display = 'block';
                }
            }
        }
    </script>
    </style>
    <script>

    </script>
</head>

<body>

    @section('abovemenu')
    @yield('info')

    <div class="exactCenter"><img src="wavey.gif" width="200" height="200" onmouseover="switchVisible();"></div>

    <div class="centered" id="centered">
        <nav>
            <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
            <ul class="menu">
                <li><a class="homer" href="#"><i class="fa fa-home"></i> HOME</a>
                    <!-- <ul class="sub-menu"> 
                        <li><a href="#">Abschnitt 1</a></li>
                        <li><a href="#">Abschnitt 2</a></li>
                        <li><a href="#">Abschnitt 3</a></li>
                        <li><a href="#">Abschnitt 4</a></li>
                        <li><a href="#">Abschnitt 5</a></li>
                    </ul>-->
                </li>
                <li><a href="{{url('about')}}"><i class="fa fa-user"></i> ABOUT</a></li>
                <li><a href="#" onClick="alert('Cooming Soon')"><i class="fa fa-camera"></i> PORTFOLIO</a>
                    <ul class="sub-menu">

                        <li class="shake"><a href="#" onClick="loadProfileOne()" class="hover-title">Lex</a>
                            <div class="hover-image"><img src="lex2.jpg"/></div>
                        </li>


                        <li class="shake"><a href="#" onClick="loadProfileTwo()" class="hover-title">Alush & Primo</a>
                            <div class="hover-image"><img src="ap.jpg" /></div>

                            <!-- <ul> 
                                <li><a href="#">Sub Sub-Menu 1</a></li>
                                <li><a href="#">Sub Sub-Menu 2</a></li>
                                <li><a href="#">Sub Sub-Menu 3</a></li>
                                <li><a href="#">Sub Sub-Menu 4</a></li>
                                <li><a href="#">Sub Sub-Menu 5</a></li>
                            </ul>-->
                        </li>
                        <li class="shake"> <a href="#" onClick="loadProfileThree()" class="hover-title">Mo Black</a>
                            <div class="hover-image"><img src="moblack.jpg" /></div>

                            <!-- <ul>
                                <li><a href="#">Sub Sub-Menu 1</a></li>
                                <li><a href="#">Sub Sub-Menu 2</a></li>
                                <li><a href="#">Sub Sub-Menu 3</a></li>
                                <li><a href="#">Sub Sub-Menu 4</a></li>
                                <li><a href="#">Sub Sub-Menu 5</a></li>
                            </ul>-->
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('bookings')}}"><i class="fa fa-bullhorn"></i> BOOKINGS</a></li>
                <li><a href="{{url('projects')}}"><i class="fa fa-tags"></i> PROJECTS</a>
                    <ul class="sub-menu">
                        <li><a href="#">Sub-Menu 1</a></li>
                        <li><a href="#">Sub-Menu 2</a>
                            <ul>
                                <li><a href="#">Sub Sub-Menu 1</a></li>
                                <li><a href="#">Sub Sub-Menu 2</a></li>
                                <li><a href="#">Sub Sub-Menu 3</a></li>
                                <li><a href="#">Sub Sub-Menu 4</a></li>
                                <li><a href="#">Sub Sub-Menu 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sub-Menu 3</a>
                            <ul>
                                <li><a href="#">Sub Sub-Menu 1</a></li>
                                <li><a href="#">Sub Sub-Menu 2</a></li>
                                <li><a href="#">Sub Sub-Menu 3</a></li>
                                <li><a href="#">Sub Sub-Menu 4</a></li>
                                <li><a href="#">Sub Sub-Menu 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('contact')}}"><i class="fa fa-envelope"></i> CONTACT</a></li>
                <!-- <li><a href="#"><i class="fa fa-sitemap"></i> SITEMAP</a></li> -->
            </ul>
        </nav>
    </div>
    @section('belowmenu')
    @yield('content')

    <footer class="footer">
        <div class="content has-text-centered">
            <p>Wavehouse Entertainment © 2020 <br>
                based in Cologne, Germany</p>
        </div>
    </footer>

    <script>
        function loadProfileOne() {
            if (window.confirm("The Content is currently in planning, load Artist's page?")) {
                window.location.href = 'https://www.instagram.com/einfach.lex/';
            };
        }

        function loadProfileTwo() {
            if (window.confirm("The Content is currently in planning, load Artist's page?")) {
                window.location.href = 'https://www.instagram.com/ap.offiziell/';
            };
        }

        function loadProfileThree() {
            if (window.confirm("The Content is currently in planning, load Artist's page?")) {
                window.location.href = 'https://www.instagram.com/c.c_moblack/';
            };
        }
    </script>
    <!-- <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div> -->

</body>

</html>