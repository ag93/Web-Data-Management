<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Prices</title>
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
            <li><a href="blog.php">Blog</a></li>
            <li class="current"><a href="prices.php">Prices</a></li>
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
      $result = mysqli_query($connection, "SELECT * FROM prices") or die(mysqli_error($connection));
      $price_cost_row = array();
      $price_title_row = array();
      $price_desc_row = array();
      while($row = mysqli_fetch_array($result)){
        array_push($price_cost_row, $row['cost']);
        array_push($price_title_row, $row['title']);
        array_push($price_desc_row, $row['services']);
      }
      mysqli_close($connection);
    ?>

    <section id="prices">
      <div id="menu">
          <article id="main_col">
            <h1>Prices</h1>
            <ul>
              <li>
                <img src="./imgs/cart1.png">
                <h2 style="text-align: center; font-size:48px;"><?php echo $price_cost_row[0]?></h2>
                <h4 style="text-align: center;"><?php echo $price_title_row[0]?></h4>
                <br><br><br><br>
                <p style="text-align: center;"><?php echo $price_desc_row[0]?></p>
                <br>
                <a href="contact.php">Hire Me?</a>
              </li>

              <li>
                <img src="./imgs/cart2.png">
                <h2 style="text-align: center; font-size:48px;"><?php echo $price_cost_row[1]?></h2>
                <h4 style="text-align: center;"><?php echo $price_title_row[1]?></h4>
                <br><br><br><br>
                <p style="text-align: center;"><?php echo $price_desc_row[1]?></p>
                <a href="contact.php">Hire Me?</a>
              </li>

              <li>
                <img src="./imgs/cart3.png">
                <h2 style="text-align: center; font-size:48px;"><?php echo $price_cost_row[2]?></h2>
                <h4 style="text-align: center;"><?php echo $price_title_row[2]?></h4>
                <br><br><br><br>
                <p style="text-align: center;"><?php echo $price_desc_row[2]?></p>
                <a href="contact.php">Hire Me?</a>
              </li>
            </ul>

          </article>
      </div>
    </section>

    <footer style="padding-top:80px;">
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
