<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="header.png">


    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">


    <!-- Styles -->
    <style>
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


        .hide {
            display: none;
        }

        .myDIV:hover+.hide {
            display: flex;
            color: red;
        }
    </style>
    <script>
        function switchVisible() {
            if (document.getElementById('centered')) {

                if (document.getElementById('centered').style.display == 'none') {
                    document.getElementById('centered').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                } else {
                    document.getElementById('centered').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
        }
    </script>
</head>

<body>
    <div class="exactCenter" onclick="switchVisible();"><img src="log.gif"></div>

    <div class="centered" id="centered">
        <div class="hide"><button>hdddddddddddddddddddddddddddddddddddddd</button></div>
<div class="myDIV">hdddddddddddddddddddddddddddddddddddddd</div>
        <nav>
            <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
            <ul class="menu">
                <li><a class="homer" href="#"><i class="fa fa-home"></i> HOME</a>
                    <ul class="sub-menu">
                        <li><a href="#">Sub-Menu 1</a></li>
                        <li><a href="#">Sub-Menu 2</a></li>
                        <li><a href="#">Sub-Menu 3</a></li>
                        <li><a href="#">Sub-Menu 4</a></li>
                        <li><a href="#">Sub-Menu 5</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-user"></i> ABOUT</a></li>
                <li><a href="#"><i class="fa fa-camera"></i> PORTFOLIO</a>
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
                <li><a href="#"><i class="fa fa-bullhorn"></i> BLOG</a></li>
                <li><a href="#"><i class="fa fa-tags"></i> CATEGORIES</a>
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
                <li><a href="#"><i class="fa fa-envelope"></i> CONTACT</a></li>
                <li><a href="#"><i class="fa fa-sitemap"></i> SITEMAP</a></li>
            </ul>
        </nav>
    </div>


</body>

</html>