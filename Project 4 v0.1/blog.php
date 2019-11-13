<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Blog</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Aniket Gade</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li class="current"><a href="blog.php">Blog</a></li>
            <li><a href="prices.php">Prices</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <br>
    <br>

    <?php
      $connection = mysqli_connect("localhost", "root", "", "resume") or die(mysqli_error());
      $result = mysqli_query($connection, "SELECT * FROM blog") or die(mysqli_error($connection));
      $blog_row = array();
      while($row = mysqli_fetch_array($result)){
        array_push($blog_row, $row['content']);
      }
      mysqli_close($connection);
    ?>

    <section id="main-experience1" style="padding: 20px;">
      <div class="container-exp">
        <article id="main_exp1" style="padding-left: 20px;">
          <h2 class="page-title"> Inside My Mind </h2>
          <h3 class="page-title"> What is "Inside My Mind?" </h3>
          <p> <?php echo $blog_row[0]?> </p>
        </article>
      </div>
      </section>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <section id="main-experience2" style="padding: 20px;">
        <div class="container-exp">
        <article id="main_exp2" style="padding-left: 20px;">
          <h3> What's more on Inside my Mind?</h3>
          <p> <?php echo $blog_row[1]?> </p>
        </article>
      </div>
    </section>
    <br>
    <br>
    <section id="main-experience2" style="padding: 20px;">
      <div class="container-exp">
      <article id="main_exp2" style="padding-left: 20px;">
        <h3> Ready to get inside my mind?
          <a href="http://aniketgade.uta.cloud/" target="_blank">
            <button type="submit" class="button_1">Get In</button>
          </a>
      </article>
    </div>
  </section>


    <footer style="padding-top:150px;">
      <?php
        $connection = mysqli_connect("localhost", "root", "", "resume") or die(mysqli_error());
        $result = mysqli_query($connection, "SELECT link FROM social") or die(mysqli_error($connection));
        $social_row = array();
        while($row = mysqli_fetch_array($result)){
          array_push($social_row, $row['link']);
        }
      ?>
        <p><a href= "<?php echo $social_row[0]?>" target="_blank"><img src="./imgs/LinkedIn.png" height="45" width="45"></a>
        <a href="<?php echo $social_row[1]?>" target="_blank"><img src="./imgs/insta.png" height="45" width="45"></a>
        <a href="<?php echo $social_row[2]?>" target="_blank"><img src="./imgs/twitter.png" height="45" width="45"></a></p>
    </footer>
  </body>
</html>
