<head>
  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
  }

  *,
  *:after,
  *:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
  }

  .clearfix:before,
  .clearfix:after {
    display: table;
    content: '';
  }

  .clearfix:after {
    clear: both;
  }


  body {
    background: black;
    color: #37a2c1;
    font-weight: normal;
    font-size: 1em;
    font-family: 'Roboto', Arial, sans-serif;
  }

  input:focus,
  textarea:focus,
  keygen:focus,
  select:focus {
    outline: none;
  }

  ::-moz-placeholder {
    color: #fbf680;
    font-weight: 300;
    opacity: 1;
  }

  ::-webkit-input-placeholder {
    color: #666;
    font-weight: 300;
  }

  /* contact from design */
  .container {
    padding: 20px 50px 70px;
  }

  .sec1title {
    text-align: center;
  }

  .sec1title h1 {
    font-size: 40px;
    margin: 25px;
    text-transform: uppercase;
    color: #37a2c1;
    font-weight: 400;
  }

  .section2 {
    position: relative;
    overflow: hidden;
  }

  .section2 .contactform {
    position: absolute;
    top: 0;
    right: 10%;
    z-index: 99;
    background: #276185;
    padding: 30px 40px 70px;
    box-sizing: border-box;
  }

  .section2 .contactform input.form-fields,
  .section2 .contactform button.form-fields,
  .section2 .contactform textarea.form-fields {
    padding: 0 0 0 40px;
    display: block;
    box-sizing: border-box;
    width: 350px;
    font-size: 16px;
    background: #216087;
    margin: 7px 0;
    border: 1px solid white;
    color: white;
    opacity: 0.5;
    min-height: 35px;
    text-shadow: none;
    position: relative;
  }

  .section2 .contactform textarea.form-fields {
    padding: 8px 40px;
    resize: none;
  }

  .section2 .contactform button.form-fields.button {
    color: #fbf680;
    font-size: 14px;
    padding: 0;
    text-transform: uppercase;

  }

  .section2 .contactform button.form-fields.button:hover {
    background: #1b4a67;
    color: #fff;
    cursor: pointer;
    opacity: 1;
  }

  .section2 .contactform button.form-fields.button i {
    margin-left: 10px;
  }

  .section2 .contactform h5 {
    color: white;
    font-size: 16px;
    margin-bottom: 15px;
  }

  .section2 .contactform label .cntfrmicn {
    color: #00C1A8;
    padding: 14px;
    position: absolute;
    z-index: 99;
  }

  @media only screen and (max-width: 660px) {
    .container {
      padding: 10px 20px 30px;
    }

    .contmap {
      height: 475px !important;
    }

    .sec1title h1 {
      font-size: 28px;
    }

    .section2 .contactform {
      padding: 10px;
      right: 0;
      width: 100%;
    }

    .section2 .contactform input.form-fields,
    .section2 .contactform button.form-fields,
    .section2 .contactform textarea.form-fields {
      width: 100%;
    }
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

  .exactCenter {
    width: 150px;
    height: 150px;
    position: fixed;
    top: 15%;
    left: 51%;
    margin-top: -100px;
    margin-left: -100px;
  }

  /* .whitetext{
    color: white;
  }*/
  .mydiv {
    position:fixed;
    top: 50%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}
</style>
<script>
  function switchVisible() {
    if (document.getElementById('centered')) {

      if (document.getElementById('centered').style.display == 'none') {
        document.getElementById('centered').style.display = 'block';
      } else {
        document.getElementById('centered').style.display = 'none';
      }
    }
  }
</script>
<div class="exactCenter"><img src="wavey.gif" width="150" height="150" onmouseover="switchVisible();"></div>

<div id="centered">
  <nav>
    <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
    <ul class="menu">
      <li><a class="homer" href="{{url('start')}}"><i class="fa fa-home"></i> HOME</a>
        <ul class="sub-menu">
          <li><a href="#">Abschnitt 1</a></li>
          <li><a href="#">Abschnitt 2</a></li>
          <li><a href="#">Abschnitt 3</a></li>
          <li><a href="#">Abschnitt 4</a></li>
          <li><a href="#">Abschnitt 5</a></li>
        </ul>
      </li>
      <li><a href="{{url('about')}}"><i class="fa fa-user"></i> ABOUT</a></li>
      <li><a href="{{url('portfolio')}}"><i class="fa fa-camera"></i> PORTFOLIO</a>
        <ul class="sub-menu">
          <li><a href="#">Artist 1</a></li>
          <li><a href="#">Artist 2</a>
            <ul>
              <li><a href="#">Sub Sub-Menu 1</a></li>
              <li><a href="#">Sub Sub-Menu 2</a></li>
              <li><a href="#">Sub Sub-Menu 3</a></li>
              <li><a href="#">Sub Sub-Menu 4</a></li>
              <li><a href="#">Sub Sub-Menu 5</a></li>
            </ul>
          </li>
          <li><a href="#">Artist 3</a>
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

<div class="container">
  <section class="section1">
    <div class="sec1title">
      <h1>Get in touch</h1>
    </div>
  </section>
  <section class="section2">
    <div class="contactform">
      <h5>Drop us a line...</h5>
      <form action="#">
        <label for="firstname">
          <i class="fas fa-user"></i>
          <input name="firstname" class="form-fields" type="text">
        </label>
        <label for="email">
          <i class="fas fa-envelope"></i>
          <input name="email" class="form-fields" type="text">
        </label>
        <label for="contact">
          <i class="fas fa-phone"></i>
          <input name="contact" class="form-fields" type="text">
        </label>
        <label for="textarea">
          <i class="fas fa-comment"></i>
          <textarea class="form-fields" name="textarea" id="" cols="30" rows="10"></textarea>
        </label>
        <button class="form-fields button" value="Send" type="submit">Send <i class="fa fa-paper-plane"></i></button>
      </form>
    </div>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <div class="contmap" style='overflow:hidden;height:550px;width:100%;'>
      <div id='gmap_canvas' style='height:100%;width:100%;'></div>
      <div><small><a href="http://embedgooglemaps.com"> embed google maps </a></small></div>
      <div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div>
      <style>
        #gmap_canvas img {
          max-width: none !important;
          background: none !important
        }
      </style>
    </div>
    <script type='text/javascript'>
      function init_map() {
        var myOptions = {
          zoom: 14,
          center: new google.maps.LatLng(50.935173, 6.953101),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.935173, 6.953101)
        });
        infowindow = new google.maps.InfoWindow({
          content: '<strong>My Location</strong><br>Wavehouse Studio<br>'
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
      }
      google.maps.event.addDomListener(window, 'load', init_map);
    </script>
  </section>
</div>