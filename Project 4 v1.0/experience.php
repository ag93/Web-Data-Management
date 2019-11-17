<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Experience</title>
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
            <li class="current"><a href="experience.php">Experience</a></li>
            <li><a href="blog.php">Blog</a></li>
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
      $result = mysqli_query($connection, "SELECT * FROM experience") or die(mysqli_error($connection));
      $exp_position_row = array();
      $exp_company_row = array();
      $exp_desc_row = array();
      while($row = mysqli_fetch_array($result)){
        array_push($exp_position_row, $row['position']);
        array_push($exp_company_row, $row['company']);
        array_push($exp_desc_row, $row['description']);
      }
      mysqli_close($connection);
    ?>

    <section id="main-experience1" style="padding: 20px;">
      <div class="container-exp">
        <article id="main_exp1" style="padding-left: 20px;">
          <h2 class="page-title"><?php echo $exp_position_row[0]?></h2>
          <h4><?php echo $exp_company_row[0]?></h4>
          <p><?php echo $exp_desc_row[0]?></p>
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
          <h2 class="page-title"><?php echo $exp_position_row[1]?></h2>
          <h4><?php echo $exp_company_row[1]?></h4>
          <p><?php echo $exp_desc_row[1]?></p>
        </article>
      </div>
    </section>

    <footer style="padding-top:250px;">
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
