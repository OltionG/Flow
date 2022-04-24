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
    <source src="music/Chill Day.mp3" type="audio/mpeg">
    <source src="music/Chill Day.mp3" type="audio/mp3">
  </audio>
    
  <?php
    include "header.php";
  ?>

    <main style="background: linear-gradient(-45deg, #23d5ab, #23a6d5, #163391, #e73c7e);
     background-size: 400% 400%;
    animation: gradient 15s ease infinite">
    <div class="ob">
      <section class="home-intro-con">
        <img src="img/logo.png" alt="Logo.png">
        <h1>A continuous stream of entertainment</h1>
      </section>
    </div>
    <div style="background-color:whitesmoke; height: 3%; opacity: 70%;"></div>
    <div class = "about" style=" letter-spacing: 1px; line-height: 2; justify-content: space-evenly;">
      <div class="home-about">
        <h2>Contacts</h2>
        <div class="columns">
          <p>
            Curious about us? Want to learn more? Have something you really want us to know? Well, here are some ways you can contact us:      
          </p>
        </div>
        
        <div class="img-columns">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d723.619706
        3631031!2d20.587913829234303!3d42.35909799869919!2m3!1f0!2f0!3f0!3m2!1i1024!2i7
        68!4f13.1!3m3!1m2!1s0x1353bb9687c9c2bb%3A0xe160f60dfcf07625!2sGani%20Paqarizi%2
        0Agim%20Kelmendi%2C%20Tafil%20Zyberaj%20n%C3%AB%20Fortes%C3%AB!5e1!3m2!1sen!2s!4v1640538063961!5m2!1sen!2s"
         width="30%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         <div>
          <div style="margin: 50% auto">
           <img src="img/icon.png" style="width: 20px; height: 20px;"> +383 49 570 576
          </div>
          <div>
            <img src="img/icon.png" style="width: 20px; height: 20px;"> +383 49 570 576
           </div>
         </div>
        </div>
        <div style="text-align: center; margin-top: 10%;">
          <h2>Check us out!</h2>
          <br>
         <p>Reach us through one of the following methods!
         </p>
         </div>
       <div class="img-columns">
         <div class="linkicon">
          <a target="_blank" href="https://www.facebook.com/Flow-Entertainment-100628881531882/?modal=admin_todo_tour%22%3E"><img class="ftimg" src="img/facebook.png" height="100" width="100" alt="Facebook.png"></a>
          <h3>Facebook</h3>
         </div>
         <div class="linkicon">
          <a target="_blank" href="https://www.instagram.com/flow.entertainment.games/"><img class="ftimg" src="img/instagram.png" height="100" width="100" alt="Instagram.png"></a>
          <h3>Instagram</h3>
         </div>
         <div class="linkicon">
          <a target="_blank" href="https://www.youtube.com/channel/UCk1H9Uwr8k82EouBomBjosA?view_as=subscriber%22%3E"><img src="img/youtube.png" height="100" width="100" alt="Youtube.png"></a>
          <h3>YouTube</h3>
         </div>
         <div class="linkicon">
           <a target="_blank" href="https://www.google.com/gmail/"><img src="img/gmail.png" width="100px" height="100px"></a>
           <h3>GMail</h3>
         </div>
       </div>

      </div>
    </div>
    <?php
      include "footer.php";
    ?>
    </main>
    <script src="observers.js"></script>
    </main> 
  </body>
</html>