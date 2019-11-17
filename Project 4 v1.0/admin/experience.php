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

    <form class="quote" action="./update/update_experience.php" method="post">
      <section id="main-experience1" style="padding: 20px;">
        <div class="container-exp">
          <article id="main_exp1" style="padding-left: 20px;">
            <h2 class="page-title"><textarea rows = "1" cols="20" type="text" name="Exp_0_Pos"><?php echo $exp_position_row[0]?></textarea></h2>
            <h4><textarea rows = "2" cols="100" type="text" name="Exp_0_Comp"><?php echo $exp_company_row[0]?></textarea></h4>
            <p><textarea rows = "5" cols="120" type="text" name="Exp_0_Desc"><?php echo $exp_desc_row[0]?></textarea></p>
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
            <h2 class="page-title"><textarea rows = "1" cols="20" type="text" name="Exp_1_Pos"><?php echo $exp_position_row[1]?></textarea></h2>
            <h4><textarea rows = "2" cols="100" type="text" name="Exp_1_Comp"><?php echo $exp_company_row[1]?></textarea></h4>
            <p><textarea rows = "5" cols="120" type="text" name="Exp_1_Desc"><?php echo $exp_desc_row[1]?></textarea></p>
          </article>
        </div>
        </section>

        <section id="main-experience2" style="padding: 20px;">
          <div>
            <article>
              <p style="text-align: right"><button class="button_1" onclick="">Update</button><p>
            </article>
          </div>
        </section>
    </form>
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
