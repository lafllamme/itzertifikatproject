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

        .img-container-block {
            text-align: center;
        }

        .img-container-inline {
            text-align: center;
            display: block;
        }

        h1 {
            margin: 20% auto 5% auto;
            text-align: center;
            font-size: 4em;
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
        
    </style>
    <script>
        function openDiv() {
            var theDiv = document.getElementById("myDiv");
            theDiv.style.transform = "scale(1)";
        }

        function closeDiv() {
            var closeDiv = document.getElementById("myDiv");
            closeDiv.style.transform = "scale(0)";
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

    <div class="open" onclick="openDiv()">Menu</div>
    <div>
        
    <div class="tabs is-toggle is-toggle-rounded">
  <ul>
    <li class="is-active">
      <a>
        <span class="icon is-small"><i class="fas fa-image"></i></span>
        <span>Pictures</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon is-small"><i class="fas fa-music"></i></span>
        <span>Music</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon is-small"><i class="fas fa-film"></i></span>
        <span>Videos</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon is-small"><i class="fas fa-file-alt"></i></span>
        <span>Documents</span>
      </a>
    </li>
  </ul>
</div>
        

            <div class="card has-text-centered is-wide">
                
              
                <div class="card-content">
                <iframe src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=1&amp;bgcolor=%23039BE5&amp;ctz=Europe%2FBerlin&amp;src=dGVrZTkwMEBnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%237986CB&amp;showTitle=1&amp;title=Testing&amp;showNav=1&amp;showTz=1&amp;showPrint=0&amp;showTabs=1" style="border-width:0" width="800" height="800" frameborder="0" scrolling="no"></iframe>
                   
                </div>
               
            </div>

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

   
    </div>




    <!-- <footer class="footer">
        <div class="content has-text-centered">
            <p>Wavehouse Entertainment © 2020 <br>
                based in Cologne, Germany</p>
        </div>
    </footer> -->


    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

</body>

</html>