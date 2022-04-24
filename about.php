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
    <source src="music/By The Pool.mp3" type="audio/mpeg">
    <source src="music/By The Pool.mp3" type="audio/mp3">
  </audio>
  
  <?php
    include "header.php";
  ?>

    <main style="  background: linear-gradient(-45deg, #e73c7e, #23a6d5, #23d5ab, #ee7752);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;">
    <div class="ob">
      <section class="home-intro-abt">
        <img src="img/logo.png" alt="Logo.png">
        <h1>A continuous stream of entertainment</h1>
      </section>
    </div>
    <div style="background-color:whitesmoke; height: 3%; opacity: 70%;"></div> 
      <div class="about" style=" letter-spacing: 1px; line-height: 2;">
      <div class="home-about-abt">
        <h2>About us</h2>
        <div class="columns">
            <p>
                The people working behind the scenes trying to make something you might enjoy. Learn a bit about their personalities, roles, and the vital importance they all have to the company.
            </p>
        </div>
       </div>

       <div class="img-columns">
        <div id="blackdiv" style="text-align: center; max-width: 300px; letter-spacing: 1px; line-height: 2; margin-bottom: 5%;">
          <img src="img/Olti.jpg" alt="" style="width: 250px; height: 250px; border-radius: 100%; margin-top: 5%;">
          <h2 style="margin-top: 5%;">Oltion Gashi</h2>
          <h5>Founder / CEO / Lead Designer</h5>
          <hr id="blackhr">
          Olti started following his career as a programmer at a young age. He has been working on a personal project for
          about 2 years now and he is excited to see the community reaction. He is the founder of the company and an essential
        part of it, inspiring everyone around him to do their best, and reminding them to have fun!
        </div>
        <div id="whitediv" style="text-align: center; max-width: 300px;  letter-spacing: 1px; line-height: 2; margin-bottom: 5%;">
          <img src="img/lorik.jpeg" alt="" style="width: 250px; height: 250px; border-radius: 100%; margin-top: 5%;">
          <h2 style="margin-top: 5%;">Lorik Popaj</h2>
          <h5>CEO / Assistand Designer</h5>
          <hr id="whitehr">
          Lorik has been Olti's parter throughout his entire life. He started getting into programming about 2 years ago,
          and decided to also pursue his career with his friend. Although he may have only started recently, his determination
          and quick learning has helped the company plenty, and are looked up to by the entire staff.
        </div>
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

