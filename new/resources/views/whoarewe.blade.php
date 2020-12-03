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

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
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

    function dropdown() {
      var dropdown = document.querySelector('.dropdown');
      dropdown.classList.toggle('is-active');
    }
  </script>
</head>

<body>
  <div class="open" onclick="openDiv()">Menu
  </div>
  <div>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent is-vertical">
            <article class="tile is-child notification is-info">
              <p class="title">Vertical...</p>
              <p class="subtitle">Top tile</p>
              <div class="content"></div>

            </article>
            <article class="tile is-child notification is-info">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification is-info">
              <p class="title">Middle tile</p>
              <p class="subtitle">With an image</p>
              <img src="logo.jpg" width="250" height="250" class="center">
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-info">
            <p class="title">Wide tile</p>
            <p class="subtitle">Aligned with the right tile</p>
            <div class="content">
              <!-- Content -->
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2020</time>
              </div>
            </div>
          </div>
      </div>
      </article>
    </div>

  </div>

  <div class="container">

    <div class="notification">
      <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
          <li>
            <a href="#">
              <span class="icon is-small">
                <i class="fas fa-home" aria-hidden="true"></i>
              </span>
              <span>Bulma</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon is-small">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              <span>Documentation</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon is-small">
                <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
              </span>
              <span>Components</span>
            </a>
          </li>
          <li class="is-active">
            <a href="#">
              <span class="icon is-small">
                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
              </span>
              <span>Breadcrumb</span>
            </a>
            <div class="dropdown" onclick="dropdown()">
                  <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu2">
                      <span>Content</span>
                      <span class="icon is-small">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </button>
                  </div>
                  <div class="dropdown-menu" id="dropdown-menu2" role="menu">
                    <div class="dropdown-content">
                      <div class="dropdown-item">
                        <p>You can insert <strong>any type of content</strong> within the dropdown menu.</p>
                      </div>
                      <hr class="dropdown-divider">
                      <div class="dropdown-item">
                        <p>You simply need to use a <code>&lt;div&gt;</code> instead.</p>
                      </div>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item">
                        This is a link
                      </a>
                    </div>
                  </div>
                </div>
          </li>
        </ul>
        
      </nav>
    </div>

  </div>
<!-- <div class="wrapper">
  <div class="bg">
    <div class="el"></div>
  </div>
</div>
$loadingTime: 10s;
$color: rgb(160,196,226);

body {
  background-color: white;
}

@keyframes loading {
  0% {
    width: 0;
  } 100% {
    width: 100%;
  }
}

@keyframes percentage { 
  @for $i from 1 through 100 {
    $percentage: $i + "%";
    #{$percentage} {
      content: $percentage;
    }
  }
}

.bg {
  background-color: $color;
  animation: loading $loadingTime linear infinite;
}

.el{
  color: $color;
  width: 200px;
  border: 1px solid $color;
  
  &:after {
    padding-left: 20px;
    content: "0%";
    display: block;
    text-align: center;
    font-size: 50px;
    padding: 10px 20px;
    color: rgb(223,170,7);
    mix-blend-mode: ovrer
      
      
      ;
    animation: percentage $loadingTime linear infinite;
  }
}

html {
  height: 100%;
  background-color: white;
  font-family: 'PT Sans', sans-serif;
  font-weight: bold;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

_____________
animation

.puff-in-center {
	-webkit-animation: puff-in-center 4s cubic-bezier(0.470, 0.000, 0.745, 0.715) reverse backwards;
	        animation: puff-in-center 4s cubic-bezier(0.470, 0.000, 0.745, 0.715) reverse backwards;
}

/* ----------------------------------------------
 * Generated by Animista on 2020-8-25 20:23:4
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation puff-in-center
 * ----------------------------------------
 */
@-webkit-keyframes puff-in-center {
  0% {
    -webkit-transform: scale(2);
            transform: scale(2);
    -webkit-filter: blur(4px);
            filter: blur(4px);
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}
@keyframes puff-in-center {
  0% {
    -webkit-transform: scale(2);
            transform: scale(2);
    -webkit-filter: blur(4px);
            filter: blur(4px);
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}

 -->
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



  <footer class="footer">
    <div class="content has-text-centered">
      <p>Wavehouse Entertainment © 2020 <br>
        based in Cologne, Germany</p>
    </div>
  </footer>


  <div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
  </div>

</body>

</html>