<?php
session_start();
?>

<header>
      <!--Pjesa e Logos-->
      <a href="main.php" class="logo" aria-label="homepage">flow.</a>
      <!--Pjesa e Nav-Bar-->
      <nav class="main_nav">
        <ul class="nav_list">
          <li class="nav_list-item"><a href="main.php" class="nav_link">Home</a></li>
          <li class="nav_list-item"><a href="about.php" class="nav_link">About</a></li>
          <li class="nav_list-item"><a href="gallery.php" class="nav_link">Gallery</a></li>
          <li class="nav_list-item"><a href="community.php" class="nav_link">Community</a></li>
          <li class="nav_list-item"><a href="contacts.php" class="nav_link">Contacts</a></li>
          <?php
          if(isset($_SESSION['email'])){
            if($_SESSION['role'] == "admin"){?>
                <li class="nav-list-item"><a href="login/views/test.php" class="nav_link">Dashboard</a></li>
            <?php }
          }

          ?>
        </ul>
      </nav>
      <!--Pjesa e Login/Register(Join)-->
      <nav>
        <ul class="nav_list">
        <?php
          if(isset($_SESSION['email'])){?>
            <li class="nav_list-item"><a href="main.php" class="nav_link nav_link--btn"><?php echo $_SESSION['username'] ?></a></li>
            <li class="nav_list-item"><a href="login/login/logout.php" class="nav_link nav_link--btn nav_link--btn--highlight">Log Out</a></li>
          <?php }else { ?>
            <li class="nav_list-item"><a href="login/login/index.php" class="nav_link nav_link--btn">Login</a></li>
            <li class="nav_list-item"><a href="login/login/create.php" class="nav_link nav_link--btn nav_link--btn--highlight">Join</a></li>
          <?php } ?>
          </ul>
      </nav>
    </header>