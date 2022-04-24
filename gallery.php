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
   <audio id="myaudio">
    <source src="music/Evergreen.mp3" type="audio/mpeg">
    <source src="music/Evergreen.mp3" type="audio/mp3">
  </audio>

  <?php
    include "header.php";
  ?>
  
    <main style="background: linear-gradient(-45deg, #23d5ab, #ee7752, #e73c7e, #23a6d5); background-size: 400% 400%;
    animation: gradient 15s ease infinite">
    <div class="ob">
      <section class="home-intro-gal">
        <img src="img/logo.png" alt="Logo.png">
        <h1>A continuous stream of entertainment</h1>
      </section>
      <div style="background-color:whitesmoke; height: 3%; opacity: 70%;"></div>
    </div>
    <div class="about" style=" letter-spacing: 1px; line-height: 2;">
      <div class="home-about">
        <h2>Gallery</h2>
        <div class="columns">
            <p>
                Get a glimpse of us working, our studio, games we enjoy or are inspired from, or random images that we enjoy!(You might see references to them in future games, so keep your eyes wide open!)
            </p>
        </div>
        <div class="columns "style="display: flex; justify-content: center; width:80%; height: 500px">
          <img class="slideshowimg" style="display: none; width: 40%;" src="img/games2.png" alt="Game_Dev">
          <img class="slideshowimg" style="display: none; width: 40%;" src="img/games3.jpg" alt="Games">
          <img class="slideshowimg" style="display: none; width: 40%;" src="img/cover.png" alt="Logo">
      </div>
      <div class="home-about">
        <input id="radio1" class="radios" style="position:relative" type="radio" disabled>
        <input id="radio2" class="radios" style="position:relative" type="radio" disabled>
        <input id="radio3" class="radios" style="position:relative" type="radio" disabled>
      </div>
       </div>
       <div class="home-about" style="align-items: center; text-align: center; margin-top: -20%;">
        <img src="img/naomi.jpg" alt="" style="width: 80%; margin: 5%;">
        Our company appreciates the work of artists like Naomi. Their cute artstyle is something that inspires us on our own work. Go and show them some support!
        <img src="img/bv.jpg" alt="" style="width: 80%;  margin: 5%;">
        That's our founder during his younger years! He's using Ruby to make one of his first programs ever, and he sure looks excited about it!
        <img src="img/hk.jpg" alt="" style="width: 80%;  margin: 5%;">
        Hollow Knight is one of the games that inspired us to create this company to start with. The team behind it, Team Cherry, continues to inspire us to this day. Go and show them your support! 
        </div>
      </div>
    <?php
      include "footer.php";
    ?>
    </main>
    <script src="observers.js"></script>
    <script src="slideshow.js"></script>
    </main>
  </body>
</html>