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
    <source src="music/Sea of Trees.mp3" type="audio/mpeg">
    <source src="music/Sea of Trees.mp3" type="audio/mp3">
  </audio>
  
  <?php
    include "header.php";
  ?>

    <main style="  background: linear-gradient(-45deg, #23d5ab, #23a6d5, #e05a83, #ee7752);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;">
    <div class="ob">
      <section class="home-intro-com">
        <img src="img/logo.png" alt="Logo.png">
        <h1>A continuous stream of entertainment</h1>
      </section>
    </div>
    <div style="background-color:whitesmoke; height: 3%; opacity: 70%;">
    </div>
    <div class="about">
      <div class="home-about" style="flex-direction: column; align-items: center; letter-spacing: 1px; line-height: 2;">
        <h2>Community</h2>
        <div class="columns">
            <p style="max-width: 500px;">
              Soon, this will be the place where you put all of your ideas for us and the rest of the community to look at, and thus, the beginning of something beautiful. For now though, we're focusing on our first project, and since we don't want your ideas to go unchecked and we won't have time to follow each one, we'll open this section after we finish developing our first game. Until then!
            </p>
            
       </div>
       
      </div>    
    </div>
    <div class="home-about">
      <div class="loading" style="font-size: 30px; font: 300 4em/150% Impact; color: white; margin-top: -10%;">Coming soon</div>
    </div>
    <?php
      include "footer.php";
    ?>
    </main>
    <script src="observers.js"></script>
    </main>
  </body>
</html>