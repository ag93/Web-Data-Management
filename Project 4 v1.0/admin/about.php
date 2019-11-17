<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | About</title>
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
            <li class="current"><a href="about.php">About</a></li>
            <li><a href="skills.php">Skills</a></li>
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
      $result = mysqli_query($connection, "SELECT content FROM about") or die(mysqli_error($connection));
      $about_row = array();
      while($row = mysqli_fetch_array($result)){
        array_push($about_row, $row['content']);
      }

      $result = mysqli_query($connection, "SELECT name, value FROM about_a_side") or die(mysqli_error($connection));
      $a_side_key_row = array();
      $a_side_val_row = array();
      while($row = mysqli_fetch_array($result)){
        array_push($a_side_key_row, $row['name']);
        array_push($a_side_val_row, $row['value']);
      }
      mysqli_close($connection);
    ?>

    <section id="main-about">
      <div class="container">
        <form class="quote" action="./update/update_about_a_side.php" method="post">
          <aside id="sidebar">
            <h3>Basic Information</h3>
            <table style="width:100%">
            <tr>
              <td><?php echo $a_side_key_row[0]?></td>
              <td><textarea rows="1" type="text" name="Age"><?php echo $a_side_val_row[0]?></textarea></td>

            </tr>
            <tr>
              <td><?php echo $a_side_key_row[1]?></td>
              <td><textarea rows="1" cols="25" type="text" name="Email"><?php echo $a_side_val_row[1]?></textarea></td>

            </tr>
            <tr>
              <td><?php echo $a_side_key_row[2]?></td>
              <td><textarea rows="1" type="text" name="Phone"><?php echo $a_side_val_row[2]?></textarea></td>

            </tr>
            <tr>
              <td><?php echo $a_side_key_row[3]?></td>
              <td><textarea rows="1" cols="30" type="text" name="Address"><?php echo $a_side_val_row[3]?></textarea></td>

            </tr>
            <tr>
              <td><?php echo $a_side_key_row[4]?></td>
              <td><textarea rows="1" cols="35" type="text" name="Languages"><?php echo $a_side_val_row[4]?></textarea></td>

            </tr>
            <tr>
              <td><?php echo $a_side_key_row[5]?></td>
              <td><textarea rows="3" cols="35" type="text" name="Education"><?php echo $a_side_val_row[5]?></textarea></td>
            </tr>
          </table>
          <p style="text-align: right"><button type="submit" value="submit">Update</button><p>
          </aside>
        </form>

        <form class="quote" action="./update/update_about_main.php" method="post">
        <article id="main_col">
          <h1 class="page-title"> About Me </h1>
          <p><textarea rows = "8" cols="135" type="text" name="About_Me"><?php echo $about_row[0]?></textarea></p>
        </article>

        <article id="main_col">
          <h1 class="page-title"> Career Goals </h1>
          <p><textarea rows = "8" cols="135" type="text" name="Career_Goals"><?php echo $about_row[1]?></textarea></p>

        </article>

        <article id="main_col">
          <h1 class="page-title"> Life Goals </h1>
          <p><textarea rows = "8" cols="135" type="text" name="Life_Goals"><?php echo $about_row[2]?></textarea></p>
          <p style="text-align: right"><button type="submit" value="submit">Update</button><p>
        </article>
      </form>
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
