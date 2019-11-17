<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Portfolio</title>
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
            <li class="current"><a href="portfolio.php">Portfolio</a></li>
            <li><a href="experience.php">Experience</a></li>
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
      $result = mysqli_query($connection, "SELECT * FROM portfolio") or die(mysqli_error($connection));
      $pf_row = array();
      while($row = mysqli_fetch_array($result)){
        array_push($pf_row, $row['git_link']);
      }
      mysqli_close($connection);
    ?>

    <form class="quote" action="./update/update_portfolio.php" method="post">
    <section id="prices">
      <div id="menu">
          <article id="main_col">
            <h1>Portfolio</h1>
            <ul>
              <li>
                <img src="./imgs/Proj_NN.jpeg" style="width:700px;height:500px;">
                <p>GitHub: <textarea rows = "1" cols="70" type="text" name="Project_0_Link"><?php echo $pf_row[0]?></textarea></p>
              </li>

              <li>
                <img src="./imgs/Proj_DB.jpg" style="width:700px;height:500px;">
                <p>GitHub: <textarea rows = "1" cols="70" type="text" name="Project_1_Link"><?php echo $pf_row[1]?></textarea></p>
              </li>
            </ul>

            <ul>
              <li>
                <img src="./imgs/Proj_Robo.jpg" style="width:700px;height:500px;">
                <p>GitHub: <textarea rows = "1" cols="70" type="text" name="Project_2_Link"><?php echo $pf_row[2]?></textarea></p>
              </li>

              <li>
                <img src="./imgs/Proj_WD.jpg" style="width:700px;height:500px;">
                <p>GitHub: <textarea rows = "1" cols="70" type="text" name="Project_3_Link"><?php echo $pf_row[3]?></textarea></p>
              </li>
            </ul>
            <ul>
              <p style="align: right"><button class="button_1" onclick="">Update</button><p>
            </ul>
          </article>
      </div>
    </section>
  </form>

    <footer style="padding-top:30px;">
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
