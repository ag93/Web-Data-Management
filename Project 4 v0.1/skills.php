<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Skills</title>
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
            <li class="current"><a href="skills.php">Skills</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="prices.php">Prices</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <?php
      $connection = mysqli_connect("localhost", "root", "", "resume") or die(mysqli_error());
      $result = mysqli_query($connection, "SELECT * FROM tech_skills") or die(mysqli_error($connection));
      $tech_skill_row = array();
      $tech_val_row = array();

      while($row = mysqli_fetch_array($result)){
        array_push($tech_skill_row, $row['name']);
        array_push($tech_val_row, $row['percent']);
      }

      $result = mysqli_query($connection, "SELECT * FROM non_tech_skills") or die(mysqli_error($connection));
      $non_tech_skill_row = array();
      $non_tech_val_row = array();

      while($row = mysqli_fetch_array($result)){
        array_push($non_tech_skill_row, $row['name']);
        array_push($non_tech_val_row, $row['percent']);
      }
      mysqli_close($connection);
    ?>

    <section id="main-skills">
      <div class="container">

        <article id="main_col">
          <h1 class="page-title"> Technical Skills </h1>
          <div class="row">
            <div class="column">
              <label for="<?php echo $tech_skill_row[0]?>"> <?php echo $tech_skill_row[0]?> : <?php echo $tech_val_row[0]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[0]?>"></progress>

              <label for="<?php echo $tech_skill_row[1]?>"> <?php echo $tech_skill_row[1]?> : <?php echo $tech_val_row[1]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[1]?>"></progress>

              <label for="<?php echo $tech_skill_row[2]?>"> <?php echo $tech_skill_row[2]?> : <?php echo $tech_val_row[2]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[2]?>"></progress>

              <label for="<?php echo $tech_skill_row[3]?>"> <?php echo $tech_skill_row[3]?> : <?php echo $tech_val_row[3]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[3]?>"></progress>

              <label for="<?php echo $tech_skill_row[4]?>"> <?php echo $tech_skill_row[4]?> : <?php echo $tech_val_row[4]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[4]?>"></progress>
            </div>

            <div class="column">
              <label for="<?php echo $tech_skill_row[5]?>"> <?php echo $tech_skill_row[5]?> : <?php echo $tech_val_row[5]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[5]?>"></progress>

              <label for="<?php echo $tech_skill_row[6]?>"> <?php echo $tech_skill_row[6]?> : <?php echo $tech_val_row[6]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[6]?>"></progress>

              <label for="<?php echo $tech_skill_row[7]?>"> <?php echo $tech_skill_row[7]?> : <?php echo $tech_val_row[7]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[7]?>"></progress>

              <label for="<?php echo $tech_skill_row[8]?>"> <?php echo $tech_skill_row[8]?> : <?php echo $tech_val_row[8]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[8]?>"></progress>

              <label for="<?php echo $tech_skill_row[9]?>"> <?php echo $tech_skill_row[9]?> : <?php echo $tech_val_row[9]?>% </label>
              <progress max="100" value="<?php echo $tech_val_row[9]?>"></progress>

            </div>
          </div>

          <h1 class="page-title"> Non-Technical Skills </h1>
          <div class="row">
            <div class="column">
              <label for="<?php echo $non_tech_skill_row[0]?>"> <?php echo $non_tech_skill_row[0]?> : <?php echo $non_tech_val_row[0]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[0]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[1]?>"> <?php echo $non_tech_skill_row[1]?> : <?php echo $non_tech_val_row[1]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[1]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[2]?>"> <?php echo $non_tech_skill_row[2]?> : <?php echo $non_tech_val_row[2]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[2]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[3]?>"> <?php echo $non_tech_skill_row[3]?> : <?php echo $non_tech_val_row[3]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[3]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[4]?>"> <?php echo $non_tech_skill_row[4]?> : <?php echo $non_tech_val_row[4]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[4]?>"></progress>
            </div>

            <div class="column">
              <label for="<?php echo $non_tech_skill_row[5]?>"> <?php echo $non_tech_skill_row[5]?> : <?php echo $non_tech_val_row[5]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[5]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[6]?>"> <?php echo $non_tech_skill_row[6]?> : <?php echo $non_tech_val_row[6]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[6]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[7]?>"> <?php echo $non_tech_skill_row[7]?> : <?php echo $non_tech_val_row[7]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[7]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[8]?>"> <?php echo $non_tech_skill_row[8]?> : <?php echo $non_tech_val_row[8]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[8]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[9]?>"> <?php echo $non_tech_skill_row[9]?> : <?php echo $non_tech_val_row[9]?>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[9]?>"></progress>

            </div>
          </div>
        </article>
      </div>
    </section>

    <footer>
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
