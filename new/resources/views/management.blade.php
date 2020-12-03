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
        body {
            background-color: grey !important;
        }

        html {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(42, 42, 255, 1) 33%, rgba(0, 212, 255, 1) 100%) !important;
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
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


        .overlay {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .9);
            height: 100vh;
            transform: scale(0);
            transition: .5s;
        }

        .content {
            position: relative;
            top: 20%;
            text-align: center;
        }

        .overlay .content a {
            transition: 1s;
            text-decoration: none;
            display: block;
            color: #FFF;
            font-size: 3em;
            margin-bottom: 2%;
        }

        .overlay .content a:hover {
            color: #fc00ff;
        }

        .overlay .close {
            position: absolute;
            top: 0px;
            color: #FFF;
            right: 30px;
            text-decoration: none;
            transition: 1s;
            font-size: 6em;
        }

        .overlay .close:hover {
            color: #fc00ff;
        }

        .open {
            font-size: 23px;
            cursor: pointer;
            margin: 0 auto;
            border: 1px solid #FFF;
            width: 100px;
            border-radius: 10px;
            text-align: center;
            transition: 1s;
        }

        .open:hover {
            background: #FFF;
            color: #fc00ff;
        }

        .slideshow {
            position: absolute;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .slideshow-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background: no-repeat 50% 50%;
            background-size: cover;
            -webkit-animation-name: kenburns;
            animation-name: kenburns;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-duration: 16s;
            animation-duration: 16s;
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .slideshow-image:nth-child(1) {
            -webkit-animation-name: kenburns-1;
            animation-name: kenburns-1;
            z-index: 3;
        }

        .slideshow-image:nth-child(2) {
            -webkit-animation-name: kenburns-2;
            animation-name: kenburns-2;
            z-index: 2;
        }

        .slideshow-image:nth-child(3) {
            -webkit-animation-name: kenburns-3;
            animation-name: kenburns-3;
            z-index: 1;
        }

        .slideshow-image:nth-child(4) {
            -webkit-animation-name: kenburns-4;
            animation-name: kenburns-4;
            z-index: 0;
        }

        @-webkit-keyframes kenburns-1 {
            0% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            1.5625% {
                opacity: 1;
            }

            23.4375% {
                opacity: 1;
            }

            26.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            98.4375% {
                opacity: 0;
                -webkit-transform: scale(1.2117647059);
                transform: scale(1.2117647059);
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes kenburns-1 {
            0% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            1.5625% {
                opacity: 1;
            }

            23.4375% {
                opacity: 1;
            }

            26.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            98.4375% {
                opacity: 0;
                -webkit-transform: scale(1.2117647059);
                transform: scale(1.2117647059);
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes kenburns-2 {
            23.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            26.5625% {
                opacity: 1;
            }

            48.4375% {
                opacity: 1;
            }

            51.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @keyframes kenburns-2 {
            23.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            26.5625% {
                opacity: 1;
            }

            48.4375% {
                opacity: 1;
            }

            51.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @-webkit-keyframes kenburns-3 {
            48.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            51.5625% {
                opacity: 1;
            }

            73.4375% {
                opacity: 1;
            }

            76.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @keyframes kenburns-3 {
            48.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            51.5625% {
                opacity: 1;
            }

            73.4375% {
                opacity: 1;
            }

            76.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @-webkit-keyframes kenburns-4 {
            73.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            76.5625% {
                opacity: 1;
            }

            98.4375% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes kenburns-4 {
            73.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            76.5625% {
                opacity: 1;
            }

            98.4375% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            z-index: 99;
            text-align: center;
            font-family: Raleway, sans-serif;
            font-weight: 300;
            text-transform: uppercase;
            background-color: rgba(255, 255, 255, 0.75);
            box-shadow: 0 1em 2em -1em rgba(0, 0, 0, 0.5);
            padding: 1em 2em;
            line-height: 1.5;
        }

        h1 small {
            display: block;
            text-transform: lowercase;
            font-size: 0.7em;
        }

        h1 small:first-child {
            border-bottom: 1px solid rgba(0, 0, 0, 0.25);
            padding-bottom: 0.5em;
        }

        h1 small:last-child {
            border-top: 1px solid rgba(0, 0, 0, 0.25);
            padding-top: 0.5em;
        }
    </style>
    <script>
        function openDiv() {
            var theDiv = document.getElementById("myDiv");
            theDiv.style.transform = "scale(1)";


            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

        }

        function closeDiv() {
            var closeDiv = document.getElementById("myDiv");
            closeDiv.style.transform = "scale(0)";
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>
</head>

<body>
    <div class="notification" onclick="openDiv()">Menu</div>
    <div>

        <div class="overlay" id="myDiv">

            <a href="#" onclick="closeDiv()" class="close">&times;</a>

            <div class="content">
                <a href="/">Home</a>
                <a href="{{url('whoarewe')}}"> Who are we?</a>
                <a href="{{url('management')}}"> Project Management</a>
                <a href="{{url('studio')}}">Studio</a>
                <a href="{{url('contact')}}">Contact</a>
            </div>
        </div>

        <!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
        <div class="slideshow" id="myDIV">
        <h1><small>Studio / Mixing / Mastering</small> Wavehouse Entertainment <small>Cologne</small></h1>


            <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/nature/1600x1400')"></div>
            <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/buildings/1600x1400')"></div>
            <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/food/1600x1400')"></div>
            <div class="slideshow-image" style="background-image: url('https://source.unsplash.com/category/technology/1600x1400')"></div>
        </div>

        <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    </div>








    <!-- <footer class="footer">
        <div class="content has-text-centered">
            <p>Wavehouse Entertainment © 2020 <br>
                based in Cologne, Germany</p>
        </div>
    </footer> -->


    

</body>

</html>