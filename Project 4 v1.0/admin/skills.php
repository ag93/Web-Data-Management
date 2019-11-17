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
          <form class="quote" action="./update/update_skills_technical.php" method="post">
          <div class="row">
            <div class="column">
              <label for="<?php echo $tech_skill_row[0]?>"> <textarea rows="1" type="text" name="T_Skill_0"><?php echo $tech_skill_row[0]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_0_Val"><?php echo $tech_val_row[0]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[0]?>"></progress>

              <label for="<?php echo $tech_skill_row[1]?>"> <textarea rows="1" type="text" name="T_Skill_1"><?php echo $tech_skill_row[1]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_1_Val"><?php echo $tech_val_row[1]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[1]?>"></progress>

              <label for="<?php echo $tech_skill_row[2]?>"> <textarea rows="1" type="text" name="T_Skill_2"><?php echo $tech_skill_row[2]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_2_Val"><?php echo $tech_val_row[2]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[2]?>"></progress>

              <label for="<?php echo $tech_skill_row[3]?>"> <textarea rows="1" type="text" name="T_Skill_3"><?php echo $tech_skill_row[3]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_3_Val"><?php echo $tech_val_row[3]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[3]?>"></progress><br>

              <label for="<?php echo $tech_skill_row[4]?>"> <textarea rows="1" type="text" name="T_Skill_4"><?php echo $tech_skill_row[4]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_4_Val"><?php echo $tech_val_row[4]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[4]?>"></progress>
            </div>

            <div class="column">
              <label for="<?php echo $tech_skill_row[5]?>"> <textarea rows="1" type="text" name="T_Skill_5"><?php echo $tech_skill_row[5]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_5_Val"><?php echo $tech_val_row[5]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[5]?>"></progress>

              <label for="<?php echo $tech_skill_row[6]?>"> <textarea rows="1" type="text" name="T_Skill_6"><?php echo $tech_skill_row[6]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_6_Val"><?php echo $tech_val_row[6]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[6]?>"></progress>

              <label for="<?php echo $tech_skill_row[7]?>"> <textarea rows="1" type="text" name="T_Skill_7"><?php echo $tech_skill_row[7]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_7_Val"><?php echo $tech_val_row[7]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[7]?>"></progress>

              <label for="<?php echo $tech_skill_row[8]?>"> <textarea rows="1" type="text" name="T_Skill_8"><?php echo $tech_skill_row[8]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_8_Val"><?php echo $tech_val_row[8]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[8]?>"></progress>

              <label for="<?php echo $tech_skill_row[9]?>"> <textarea rows="1" type="text" name="T_Skill_9"><?php echo $tech_skill_row[9]?></textarea> : <textarea rows="1" cols = "2" type="text" name="T_Skill_9_Val"><?php echo $tech_val_row[9]?></textarea>% </label>
              <progress max="100" value="<?php echo $tech_val_row[9]?>"></progress>

              <p style="text-align: right"><button type="submit" value="submit">Update</button><p>
            </div>
          </div>
        </form>

          <h1 class="page-title"> Non-Technical Skills </h1>
          <form class="quote" action="./update/update_skills_non_technical.php" method="post">
          <div class="row">
            <div class="column">
              <label for="<?php echo $non_tech_skill_row[0]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_0"><?php echo $non_tech_skill_row[0]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_0_Val"><?php echo $non_tech_val_row[0]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[0]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[1]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_1"><?php echo $non_tech_skill_row[1]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_1_Val"><?php echo $non_tech_val_row[1]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[1]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[2]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_2"><?php echo $non_tech_skill_row[2]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_2_Val"><?php echo $non_tech_val_row[2]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[2]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[3]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_3"><?php echo $non_tech_skill_row[3]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_3_Val"><?php echo $non_tech_val_row[3]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[3]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[4]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_4"><?php echo $non_tech_skill_row[4]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_4_Val"><?php echo $non_tech_val_row[4]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[4]?>"></progress>
            </div>

            <div class="column">
              <label for="<?php echo $non_tech_skill_row[5]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_5"><?php echo $non_tech_skill_row[5]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_5_Val"><?php echo $non_tech_val_row[5]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[5]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[6]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_6"><?php echo $non_tech_skill_row[6]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_6_Val"><?php echo $non_tech_val_row[6]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[6]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[7]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_7"><?php echo $non_tech_skill_row[7]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_7_Val"><?php echo $non_tech_val_row[7]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[7]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[8]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_8"><?php echo $non_tech_skill_row[8]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_8_Val"><?php echo $non_tech_val_row[8]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[8]?>"></progress>

              <label for="<?php echo $non_tech_skill_row[9]?>"> <textarea rows="1" cols="40" type="text" name="NT_Skill_9"><?php echo $non_tech_skill_row[9]?></textarea> : <textarea rows="1" cols = "2" type="text" name="NT_Skill_9_Val"><?php echo $non_tech_val_row[9]?></textarea>% </label>
              <progress max="100" value="<?php echo $non_tech_val_row[9]?>"></progress>

              <p style="text-align: right"><button onclick="">Update</button><p>
            </div>
          </div>
        </form>
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
