<DOCTYPE! html>
<html>
  <head>
    <title>Flow Entertainment</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap" rel="stylesheet"/>
    <link href="main.css" rel="stylesheet" />
  </head>
  <script>
    var playing = false;
    function play(){ 
      var audio = document.getElementById('myaudio');
      if(!playing){
        audio.play();
        playing = true;
      } else{
        audio.pause();
        playing = false;
      }
    } 
  </script>
  <body ondblclick="play()" onscroll="disableScrolling()" 
  onmousewheel="enableScrolling()" 
   onclick="enableScrolling()">

    <!--Pjesa e Header ku gjenden Logo, Nav-Bar dhe Login/Registration Forms-->
    <?php
    include "header.php";
    ?>
    <!--Pjesa e faqes me Background dhe Content-->
    <main>
      <!--Ketu fillon pjesa qe duhet te observohet nga Javascript per ndryshimin e Header-->
      <div class="ob">
      <section class="home-intro">
        <img src="img/logo.png" alt="Logo.png">
        <h1>A continuous stream of entertainment</h1>
      </section>
      </div>
      <!--Ketu fillon content-->
      <div style="background-color:whitesmoke; height: 3%; opacity: 70%;">
      </div>
      <div class ="about" style=" letter-spacing: 1px; line-height: 2;">
      <div class="home-about"><div class='abt-intro'>
        <h2>Flow Entertainment</h2>
        <p>Let the relaxing flow guide you.</p>
        <br>
        <hr style="background-color: black; border-width: 0; width: 100%; height: 1px;">
      </div> 
        <div class="columns">
          <div style="border-right:1px solid gray;height:auto">
            <h3>Who are we?</h3>
            <p>
              A small indie company, made by the dreams of some ambitious college students.
            </p>
          </div>
          <div style="border-right:1px solid gray;height:auto">
            <h3>What do we do?</h3>
            <p>
              Attemp to bring you video-games that provide you with the entertainment you rightfully deserve.
            </p>
          </div>
          <div>
            <h3>What's so special about you?</h3>
            <p>
              We try to work more with the community, and attempt to create something beautiful together.
            </p>
        </div>
       </div>
      </div>
    </div>
    <!--Audio burimi ne background pas double click-->
    <audio id="myaudio">
      <source src="music/Better Days.mp3" type="audio/mpeg">
      <source src="music/Better Days.mp3" type="audio/mp3">
    </audio>
  <!--Slider bashke me SVG(kodi i artit per dy shigjetat e Slider) me animacion me rrathe-->
 <div class='parent'>
    <div class='slider'>
     <button type="button" id='right' class='right' name="button">
  
         <svg version="1.1" id="Capa_1" width='40px' height='40px ' x="0px" y="0px"
           viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
         <g>
          <path style='fill: #9d9d9d;' d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
            c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
            "/>
         </g>
  
         </svg>
  
         </button>
     <button type="button" id='left' class='left' name="button">
         <svg version="1.1" id="Capa_2" x="0px" y="0px"
           viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
         <g>
          <path style='fill: #9d9d9d;' d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
            c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
         </g>
         </svg>
         </button>
     <svg id='svg2' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <circle id='circle1' class='circle1 steap' cx="34px" cy="49%" r="20"  />
        <circle id='circle2' class='circle2 steap' cx="34px" cy="49%" r="100"  />
        <circle id='circle3' class='circle3 steap' cx="34px" cy="49%" r="180"  />
        <circle id='circle4' class='circle4 steap' cx="34px" cy="49%" r="260"  />
        <circle id='circle5' class='circle5 steap' cx="34px" cy="49%" r="340"  />
        <circle id='circle6' class='circle6 steap' cx="34px" cy="49%" r="420"  />
        <circle id='circle7' class='circle7 steap' cx="34px" cy="49%" r="500"  />
        <circle id='circle8' class='circle8 steap' cx="34px" cy="49%" r="580"  />
        <circle id='circle9' class='circle9 steap' cx="34px" cy="49%" r="660"  />
      </svg>
     <svg id='svg1' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <circle id='circle10' class='circle10 steap' cx="648px" cy="49%" r="20"  />
        <circle id='circle11' class='circle11 steap' cx="648px" cy="49%" r="100"  />
        <circle id='circle12' class='circle12 steap' cx="648px" cy="49%" r="180"  />
        <circle id='circle13' class='circle13 steap' cx="648px" cy="49%" r="260"  />
        <circle id='circle14' class='circle14 steap' cx="648px" cy="49%" r="340"  />
        <circle id='circle15' class='circle15 steap' cx="648px" cy="49%" r="420"  />
        <circle id='circle16' class='circle16 steap' cx="648px" cy="49%" r="500"  />
        <circle id='circle17' class='circle17 steap' cx="648px" cy="49%" r="580"  />
        <circle id='circle18' class='circle18 steap' cx="648px" cy="49%" r="660"  />
      </svg>
     <div id='slide1' class='slide1 up1'></div>
     <div id='slide2' class='slide2'></div>
     <div id='slide3' class='slide3' style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"> flow.</div>
     <div id='slide4' class='slide4'></div>
    </div>
   </div>
   <div class="about" style=" letter-spacing: 1px; line-height: 2;"><div class="abt-intro">
     <h2>Small Company, Big Dream!</h2>
     <br>
    <p>We are Flow Entertainment, a small independent video-game developing company, trying to follow a dream. Our passion for creating
      new things has brought us here: creating new games for you to enjoy. Although we are not too experienced yet, we've been making lots of progress
      and soon enough we will have something to present to you, to show the fruits of our combined efforts. But what we need the most is not some
      finished product. No. Instead, what we really need is you yourselves.
    </p>
    </div>
    <div class="home-about"><div class='abt-intro' style="margin-top: -4%;">
      <h2 style="color: lightblue; font-style: italic; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">All together now!</h2>
      <br>
      <hr style="background-color: black; border-width: 0; width: 100%; height: 1px;">
    </div> 
  <div class="img-columns">
    <a href="about.php" style="text-decoration: none;"><div class="icon">
      <img src="img/joy.png" width="100px" height="100px">
      <h3>Friendship!</h3>
      <p>
        Learn more about us so we can establish a trustful relationship!
      </p>
    </div>
  </a>
    <a href="community.php"  style="text-decoration: none;"><div class="icon">
      <img src="img/ideas.png" width="100px" height="100px">
      <h3>Imagine!</h3>
      <p>
        The only boundary is your imagination! Think up ideas with the community!
      </p>
    </div>
  </a>
    <a href="contacts.php"  style="text-decoration: none;"><div class="icon">
     <img src="img/share.png" width="100px" height="100px">
      <h3>Share!</h3>
      <p>
        Have something interesting cooked up? Contact us and tell us all about it!
      </p>
    </div>
  </a>
    <a href="login/login/create.php"  style="text-decoration: none;"><div class="icon">
      <img src="img/chat.png" width="100px" height="100px">
      <h3>Chat!</h3>
      <p>
        Join our community and socialize! Talk with other fans around the world!
      </p>
    </div>
  </a>
  </div>
   </div>
   </div>
      <?php
      include "footer.php";
      ?>
    </main>
    <script src="observers.js"></script>
  </body>
</html>