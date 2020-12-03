<style>
    @keyframes slidy {
        0% {
            left: 0%;
        }

        20% {
            left: 0%;
        }

        25% {
            left: -100%;
        }

        45% {
            left: -100%;
        }

        50% {
            left: -200%;
        }

        70% {
            left: -200%;
        }

        75% {
            left: -300%;
        }

        95% {
            left: -300%;
        }

        100% {
            left: -400%;
        }
    }

    /* body {
        margin: 0;
    } */

    div#slider {
        overflow: hidden;
    }

    div#slider figure img {
        width: 20%;
        float: left;
    }

    div#slider figure {
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        text-align: left;
        font-size: 0;
        animation: 30s slidy infinite;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    /* *,
    html,
    body {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        perspective: 800px;
    } */

    body {
        background-color: #f3f3f3;
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .Box {
        width: 300px;
        height: 380px;
        background: url(a.png), url('https://www.wsls.com/resizer/51fzrkWSMO3v-NRh8OXaWXSIjlg=/1600x899/smart/filters:format(jpeg):strip_exif(true):strip_icc(true):no_upscale(true):quality(65)/arc-anglerfish-arc2-prod-gmg.s3.amazonaws.com/public/PUIEGRLKANAN5PHGTTDDA7O2OQ.jpg');
        background-repeat: no-repeat;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, .5);
        border-radius: 10px;
        animation: ChangeBg 5s ease-in-out infinite;
        cursor: pointer;
        transition: .5s;
    }

    .Box:hover {
        transform: scale(1.1);
    }

    @keyframes ChangeBg {

        0%,
        100% {
            background: url(a.png), url('https://www.wsls.com/resizer/51fzrkWSMO3v-NRh8OXaWXSIjlg=/1600x899/smart/filters:format(jpeg):strip_exif(true):strip_icc(true):no_upscale(true):quality(65)/arc-anglerfish-arc2-prod-gmg.s3.amazonaws.com/public/PUIEGRLKANAN5PHGTTDDA7O2OQ.jpg');
            background-size: cover;
            background-position: center;
        }

        45% {
            background: url(a.png), url('https://www.wsls.com/resizer/51fzrkWSMO3v-NRh8OXaWXSIjlg=/1600x899/smart/filters:format(jpeg):strip_exif(true):strip_icc(true):no_upscale(true):quality(65)/arc-anglerfish-arc2-prod-gmg.s3.amazonaws.com/public/PUIEGRLKANAN5PHGTTDDA7O2OQ.jpg');
            background-size: cover;
            background-position: center;
        }

        50% {
            background: url(a.png), url(http://ipadwallpapergallery.com/uploads/vizzzual.com-window-with-raindrops-ipad-wallpaper.jpg);
            background-size: cover;
            background-position: center;
        }

        95% {
            background: url(a.png), url(http://ipadwallpapergallery.com/uploads/vizzzual.com-window-with-raindrops-ipad-wallpaper.jpg);
            background-size: cover;
            background-position: center;
        }
    }

    .container {
        position: relative;
    }

    .child {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 0%);
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
</style>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>

<body>
<div class="exactCenter"><img src="wavey.gif" width="150" height="150" onmouseover="switchVisible();"></div>


    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/"><base>


    <div id="slider">

        <figure>
            <img src="https://wallpaperboat.com/wp-content/uploads/2019/11/recording-studio-01-728x410.jpg" alt>
            <img src="https://wallpaperboat.com/wp-content/uploads/2019/11/recording-studio-02-728x410.jpg" alt>

            <img src="https://wallpaperboat.com/wp-content/uploads/2019/11/recording-studio-03-728x410.jpg" alt>
            <img src="https://wallpaperboat.com/wp-content/uploads/2019/11/recording-studio-04-728x410.jpg" alt>
            <img src="https://wallpaperboat.com/wp-content/uploads/2019/11/recording-studio-04-728x410.jpg" alt>
        </figure>
        <div class="container">
            <div class="block">
                This text is within a <strong>block</strong>.
            </div>
         
            </div>
            <div class="modal" id="myModal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Modal title</p>
                        <button class="delete" aria-label="close" data-bulma-modal="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <p>There is something here</p>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" data-bulma-modal="close">Ok</button>
                        <button class="button" data-bulma-modal="close">Cancel</button>
                    </footer>
                </div>
            </div>

            <button id="btn">Click for Modal</button>

            <div class="child">
                <div class="box"></div>
            </div>
        </div>
    </div>

</body>
</html>
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
    class BulmaModal {
        constructor(selector) {
            this.elem = document.querySelector(selector)
            this.close_data()
        }

        show() {
            this.elem.classList.toggle('is-active')
            this.on_show()
        }

        close() {
            this.elem.classList.toggle('is-active')
            this.on_close()
        }

        close_data() {
            var modalClose = this.elem.querySelectorAll("[data-bulma-modal='close'], .modal-background")
            var that = this
            modalClose.forEach(function(e) {
                e.addEventListener("click", function() {

                    that.elem.classList.toggle('is-active')

                    var event = new Event('modal:close')

                    that.elem.dispatchEvent(event);
                })
            })
        }

        on_show() {
            var event = new Event('modal:show')

            this.elem.dispatchEvent(event);
        }

        on_close() {
            var event = new Event('modal:close')

            this.elem.dispatchEvent(event);
        }

        addEventListener(event, callback) {
            this.elem.addEventListener(event, callback)
        }
    }

    var btn = document.querySelector("#btn")
    var mdl = new BulmaModal("#myModal")

    btn.addEventListener("click", function() {
        mdl.show()
    })

    mdl.addEventListener('modal:show', function() {
        console.log("opened")
    })

    mdl.addEventListener("modal:close", function() {
        console.log("closed")
    })
</script>