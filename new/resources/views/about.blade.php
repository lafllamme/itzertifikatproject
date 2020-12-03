<!DOCTYPE html>
<html lang="en">
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: "Lato", sans-serif
  }

  .mySlides {
    display: none
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="/start" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <!-- <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a> -->
      <!-- <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a> -->
      <!-- <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a> -->
      <div class="w3-dropdown-hover w3-hide-small">
        <!-- <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button> -->
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="#" class="w3-bar-item w3-button">Merchandise</a>
          <a href="#" class="w3-bar-item w3-button">Extras</a>
          <a href="#" class="w3-bar-item w3-button">Media</a>
        </div>
      </div>
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
  </div>

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
  </div>

  <!-- Page content -->
  <!-- <div class="w3-content" style="max-width:2000px;margin-top:46px"> -->

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <br>
    <br>
    <img src="/logo.jpg" width="250" height="250" />
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div>
  </div>
  <!-- <div class="mySlides w3-display-container w3-center"> -->
  <!-- <img src="/w3images/ny.jpg" style="width:100%"> -->
  <!-- <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small"> -->
  <!-- <h3>New York</h3> -->
  <!-- <p><b>The atmosphere in New York is lorem ipsum.</b></p> -->
  <!-- </div> -->
  </div>
  <div class="mySlides w3-display-container w3-center">
    <br>
    <br>
    <img src="/logo.jpg" width="250" height="250" />
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ABOUT US</h2>
    <p class="w3-opacity"><i>We love music</i></p>

    <p class="w3-justify">Das <strong><em>Wavehouse Entertainment Kollektiv</em></strong> wurde im Jahr <strong>2018</strong> gegründet. Das Kollektiv
      besteht aus einem Innovativen Team aus mehreren Mitgliedern <em> <strong>(Artist, Producer, Management, ANR)</em></strong>.
      In unserem Service ist ein <strong>Music Studio</strong> eingeschlossen. Unter anderem befassen wir uns damit<strong> Artists
        aufzubauen, zu betreuen, Songs aufnehmen und zu produzieren</strong>. Desweiteren sind wir in enger Zusammenarbeit mit anderen <strong>
        Labels, Beatproduzenten, Grafikern</strong> und mehr. Für außenstehende Künstler und Projekte stellen wir
      dementsprechend das Studio auch zur Verfügung.
      <br><br>
      <p text-align="center"> Für weitere Informationen oder Kontaktanfragen könnt ihr euch durchklicken<p>


          <hr>
          The <strong><em>Wavehouse Entertainment Collective</em></strong> was founded in <strong>2018</strong>.
          The collective consists of an innovative team of several members <strong><em>(artist, producer, management, anr)</em></strong>.
          <br>
          A <strong>music studio</strong> is also included in our service. Among other things, we deal with <strong>building, entrusting artists,
            recording and producing songs</strong>. In addition to that, we work together with different <strong>Labels, Beatproducers, Printmakers</strong> and more.

          For outstanding artists and projects we provide the studio accordingly.
          <br><br>
          For further information or contact requests you can click through. </p>
        <div class="w3-row w3-padding-32">
          <div class="w3-third">
            <p></p>
            <!-- <img src="https://content3.promiflash.de/article-images/square600/travis-scott-guckt-genervt.jpg" class="w3-round w3-margin-bottom" alt="Random E" style="width:60%"> -->
          </div>
          <div class="w3-third">
            <p><strong><i>Chris Chapter</i></p><strong>
              <img src="chris.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
          </div>
          <div class="w3-third">
            <p></p>
            <!-- <img src="https://content3.promiflash.de/article-images/square600/travis-scott-guckt-genervt.jpg" class="w3-round" alt="Random Name" style="width:60%"> -->
          </div>
        </div>
  </div>

  <!-- The Tour Section -->
  <!-- <div class="w3-black" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">TOUR DATES</h2>
        <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

        <ul class="w3-ul w3-border w3-white w3-text-grey">
          <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
          <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
          <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
        </ul>

        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
          <div class="w3-third w3-margin-bottom">
            <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p><b>New York</b></p>
              <p class="w3-opacity">Fri 27 Nov 2016</p>
              <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
              <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
            </div>
          </div>
          <div class="w3-third w3-margin-bottom">
            <img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p><b>Paris</b></p>
              <p class="w3-opacity">Sat 28 Nov 2016</p>
              <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
              <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
            </div>
          </div>
          <div class="w3-third w3-margin-bottom">
            <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
              <p><b>San Francisco</b></p>
              <p class="w3-opacity">Sun 29 Nov 2016</p>
              <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
              <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
            </div>
          </div>
        </div>
      </div>
    </div>-->

  <!-- Ticket Modal -->
  <!-- <div id="ticketModal" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32">
          <span onclick="document.getElementById('ticketModal').style.display='none'" class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
          <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
        </header>
        <div class="w3-container">
          <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
          <input class="w3-input w3-border" type="text" placeholder="How many?">
          <p><label><i class="fa fa-user"></i> Send To</label></p>
          <input class="w3-input w3-border" type="text" placeholder="Enter email">
          <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
          <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
          <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
        </div>
      </div>
    </div>  -->

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Location: Cologne 50968, Marktstr. 10<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +49 172 3687070<br>
        <i class="fa fa-envelope" style="width:30px"></i> Email: info@wavehousee .com<br>
      </div>

      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>

  <!-- End Page Content -->
  </div>

  <!-- Image of location/map -->

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity" onclick="location.href='https://instagram.com/wavehouse.ent?igshid=lfcbbs3zfev1';"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Wavehouse Entertainment</p>
  </footer>

  <script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>