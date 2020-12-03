@extends('master')
<style>
  .image-cropper {
    max-width: 100px;
    height: auto;
    position: relative;
    overflow: hidden;
  }

  img {
    display: block;
    margin: 0 auto;
    height: auto;
    width: 100%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
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

  html {
    background-image: url('https://i.pinimg.com/originals/90/2f/b6/902fb683da6e99129aa43990f81607cd.gif');
  }

  .notification {
    height: 100px;
    width: 1200px;
    /** Use 100% to fill the width of the page **/
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    margin: 0 auto;
    opacity: 0.5;
  }

  @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap');

  /* body {

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #101010;

  } */


  p {

    font-size: 1rem;
    color: lightblue;
    text-shadow: 5px 5px 30px blue;
    font-family: 'Open Sans Condensed', sans-serif;
    animation-name: repeat;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    font-weight: lighter;
  }

  @keyframes repeat {

    0% {
      color: lightblue;
      text-shadow: 5px 5px 30px lightblue;
    }

    20% {
      color: #45aaf2;
      text-shadow: 5px 5px 30px #45aaf2;
    }

    40% {
      color: #2d98da;
      text-shadow: 5px 5px 30px #2d98da;
    }

    60% {
      color: #4b7bec;
      text-shadow: 5px 5px 30px #2d98da;
    }

    80% {
      color: #3867d6;
      text-shadow: 5px 5px 30px #3867d6;
    }

    100% {
      color: lightblue;
      text-shadow: 5px 5px 30px lightblue;
    }

  }

  /* ---------- Fog ---------- */
  .fogwrapper {
    height: 100%;
    position: absolute;
    top: 0;
    width: 100%;
    -webkit-filter: blur(1px) grayscale(0.2) saturate(1.2) sepia(0.2);
    filter: blur(1px) grayscale(0.2) saturate(1.2) sepia(0.2);
  }

  #foglayer_01,
  #foglayer_02,
  #foglayer_03 {
    height: 100%;
    position: absolute;
    width: 200%;
  }

  #foglayer_01 .image01,
  #foglayer_01 .image02,
  #foglayer_02 .image01,
  #foglayer_02 .image02,
  #foglayer_03 .image01,
  #foglayer_03 .image02 {
    float: left;
    height: 100%;
    width: 50%;
  }

  #foglayer_01 {
    -webkit-animation: foglayer_01_opacity 10s linear infinite, foglayer_moveme 15s linear infinite;
    -moz-animation: foglayer_01_opacity 10s linear infinite, foglayer_moveme 15s linear infinite;
    animation: foglayer_01_opacity 10s linear infinite, foglayer_moveme 15s linear infinite;
  }

  #foglayer_02,
  #foglayer_03 {
    -webkit-animation: foglayer_02_opacity 21s linear infinite, foglayer_moveme 13s linear infinite;
    -moz-animation: foglayer_02_opacity 21s linear infinite, foglayer_moveme 13s linear infinite;
    animation: foglayer_02_opacity 21s linear infinite, foglayer_moveme 13s linear infinite;
  }

  /* ---------- Moving Fog ---------- */
  /*
  'size: cover' || 'size: 100%'; results remain the same
  'attachment: scroll' can be added or removed; results remain the same
  'attachment: fixed' causing unexpected results in Chrome
  'repeat-x' || 'no-repeat'; results remain the same
*/
  #foglayer_01 .image01,
  #foglayer_01 .image02 {
    background: url("https://raw.githubusercontent.com/danielstuart14/CSS_FOG_ANIMATION/master/fog1.png") center center/cover no-repeat transparent;
  }

  #foglayer_02 .image01,
  #foglayer_02 .image02,
  #foglayer_03 .image01,
  #foglayer_03 .image02 {
    background: url("https://raw.githubusercontent.com/danielstuart14/CSS_FOG_ANIMATION/master/fog2.png") center center/cover no-repeat transparent;
  }

  /* ---------- Keyframe Layer 1 ---------- */
  @-webkit-keyframes foglayer_01_opacity {
    0% {
      opacity: .1;
    }

    22% {
      opacity: .5;
    }

    40% {
      opacity: .28;
    }

    58% {
      opacity: .4;
    }

    80% {
      opacity: .16;
    }

    100% {
      opacity: .1;
    }
  }

  @-moz-keyframes foglayer_01_opacity {
    0% {
      opacity: .1;
    }

    22% {
      opacity: .5;
    }

    40% {
      opacity: .28;
    }

    58% {
      opacity: .4;
    }

    80% {
      opacity: .16;
    }

    100% {
      opacity: .1;
    }
  }

  @-o-keyframes foglayer_01_opacity {
    0% {
      opacity: .1;
    }

    22% {
      opacity: .5;
    }

    40% {
      opacity: .28;
    }

    58% {
      opacity: .4;
    }

    80% {
      opacity: .16;
    }

    100% {
      opacity: .1;
    }
  }

  @keyframes foglayer_01_opacity {
    0% {
      opacity: .1;
    }

    22% {
      opacity: .5;
    }

    40% {
      opacity: .28;
    }

    58% {
      opacity: .4;
    }

    80% {
      opacity: .16;
    }

    100% {
      opacity: .1;
    }
  }

  /* ---------- Keyframe Layer 2 ---------- */
  @-webkit-keyframes foglayer_02_opacity {
    0% {
      opacity: .5;
    }

    25% {
      opacity: .2;
    }

    50% {
      opacity: .1;
    }

    80% {
      opacity: .3;
    }

    100% {
      opacity: .5;
    }
  }

  @-moz-keyframes foglayer_02_opacity {
    0% {
      opacity: .5;
    }

    25% {
      opacity: .2;
    }

    50% {
      opacity: .1;
    }

    80% {
      opacity: .3;
    }

    100% {
      opacity: .5;
    }
  }

  @-o-keyframes foglayer_02_opacity {
    0% {
      opacity: .5;
    }

    25% {
      opacity: .2;
    }

    50% {
      opacity: .1;
    }

    80% {
      opacity: .3;
    }

    100% {
      opacity: .5;
    }
  }

  @keyframes foglayer_02_opacity {
    0% {
      opacity: .5;
    }

    25% {
      opacity: .2;
    }

    50% {
      opacity: .1;
    }

    80% {
      opacity: .3;
    }

    100% {
      opacity: .5;
    }
  }

  /* ---------- Keyframe Layer 3 ---------- */
  @-webkit-keyframes foglayer_03_opacity {
    0% {
      opacity: .8
    }

    27% {
      opacity: .2;
    }

    52% {
      opacity: .6;
    }

    68% {
      opacity: .3;
    }

    100% {
      opacity: .8;
    }
  }

  @-moz-keyframes foglayer_03_opacity {
    0% {
      opacity: .8
    }

    27% {
      opacity: .2;
    }

    52% {
      opacity: .6;
    }

    68% {
      opacity: .3;
    }

    100% {
      opacity: .8;
    }
  }

  @-o-keyframes foglayer_03_opacity {
    0% {
      opacity: .8
    }

    27% {
      opacity: .2;
    }

    52% {
      opacity: .6;
    }

    68% {
      opacity: .3;
    }

    100% {
      opacity: .8;
    }
  }

  @keyframes foglayer_03_opacity {
    0% {
      opacity: .8;
    }

    27% {
      opacity: .2;
    }

    52% {
      opacity: .6;
    }

    68% {
      opacity: .3;
    }

    100% {
      opacity: .8;
    }
  }

  /* ---------- Keyframe moveMe ---------- */
  @-webkit-keyframes foglayer_moveme {
    0% {
      left: 0;
    }

    100% {
      left: -100%;
    }
  }

  @-moz-keyframes foglayer_moveme {
    0% {
      left: 0;
    }

    100% {
      left: -100%;
    }
  }

  @-o-keyframes foglayer_moveme {
    0% {
      left: 0;
    }

    100% {
      left: -100%;
    }
  }

  @keyframes foglayer_moveme {
    0% {
      left: 0;
    }

    100% {
      left: -100%;
    }
  }

  @media only screen and (min-width: 280px) and (max-width: 767px) {

    #foglayer_01 .image01,
    #foglayer_01 .image02,
    #foglayer_02 .image01,
    #foglayer_02 .image02,
    #foglayer_03 .image01,
    #foglayer_03 .image02 {
      width: 100%;
    }
  }


  .marquee {
    height: 25px;
    width: 420px;

    overflow: hidden;
    position: relative;

  }

  .marqueewrap {
    /* for visualization purposes */
    text-align: center;
  }

  .marqueefloat {
    display: inline-block;
  }



  .marquee div {
    display: block;
    width: 200%;
    height: 30px;

    position: absolute;
    overflow: hidden;

    animation: marquee 5s linear infinite;
  }

  .marquee span {
    float: left;
    width: 50%;
  }

  @keyframes marquee {
    0% {
      left: -100%;
    }

    100% {
      left: 0%;
    }
  }

  .topcenter {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;

    margin: auto;
  }

  .glow {
    font-size: 13px;
    color: #fff;
    text-align: center;
    -webkit-animation: glow 3s ease-in-out infinite alternate;
    -moz-animation: glow 3s ease-in-out infinite alternate;
    animation: glow 3s ease-in-out infinite alternate;
  }

  @-webkit-keyframes glow {
    from {
      text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #FFDB04, 0 0 20px #FFDB04, 0 0 25px #FFDB04, 0 0 30px #FFDB04, 0 0 35px #FFDB04;
    }

    to {
      text-shadow: 0 0 5px #fff, 0 0 10px #51B8CE, 0 0 15px #51B8CE, 0 0 20px #51B8CE, 0 0 25px #51B8CE, 0 0 30px #51B8CE, 0 0 35px #51B8CE;
    }
  }
</style>
<script>

</script>
<div id="foglayer_01" class="fog">
  <div class="image01"></div>
  <div class="image02"></div>
</div>
<div id="foglayer_02" class="fog">
  <div class="image01"></div>
  <div class="image02"></div>
</div>
<div id="foglayer_03" class="fog">
  <div class="image01"></div>
  <div class="image02"></div>
</div>
@section('title', 'Home')

@section('info')
<!-- <div class="notification">
  <button class="delete"></button>
  <div class="container">

    <h2 class="subtitle">
      <h1 class="item-1">This is your last chance. After this, there is no turning back.</p>

      <h1 class="item-2">You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe.</p>

      <h1 class="item-3">You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>
    </h2>
  </div>
</div> -->
<div class="marqueewrap">
  <div class="marqueefloat">
    <div class="marquee">
      <div>
        <span class="glow">
          Wavehouse Entertainment
        </span>
        <span class="glow">
          Wavehouse Entertainment
        </span>
      </div>
    </div>
  </div>
</div>
<br>
<div class="exactCenter" onmouseover="switchVisible();"><img src="wavey.gif"></div>


<!-- <div class="container"> 
                <h1 class="title">
                    <u>Daily News</u>
                </h1>
                <h2 class="subtitle">
                    <p class="item-1">This is your last chance. After this, there is no turning back.</p>

                    <p class="item-2">You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe.</p>

                    <p class="item-3">You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>
                </h2>
        
        </div>
  -->

@endsection
<script>
  document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      $notification = $delete.parentNode;

      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });
</script>