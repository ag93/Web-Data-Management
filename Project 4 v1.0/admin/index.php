<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Welcome!</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Hola Admin!</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
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

    <section id="showcase">
      <div class="container">
        <img src="./imgs/My_DP.jpg" height="400" width="400">
        <h1>Aniket Gade</h1>

        <p><?php
          $connection = mysqli_connect("localhost", "root", "", "resume") or die(mysqli_error());
          $result = mysqli_query($connection, "SELECT line FROM tag_line") or die(mysqli_error($connection));
          $tag_line = array();
          while($row = mysqli_fetch_array($result)){
          	array_push($tag_line, $row['line']);
          }

          $social_links = array();
          $result2 = mysqli_query($connection, "SELECT link FROM social") or die(mysqli_error($connection));
          while($row = mysqli_fetch_array($result2)){
          	array_push($social_links, $row['link']);
          }
          mysqli_close($connection);
        ?></p>

        <form class="quote" action="./update/update_index.php" method="post">
          <div>
            <table style="width:30%" align="center">
            <tr>
              <td><label>Tag Line</label></td>
              <td><textarea rows="2" cols="40" type="text" name="Tag_Line"><?php echo $tag_line[0]?></textarea></td>
              <td>
                <button class="button_1" type="submit" value="submit">Update</button>
              </td>
            </tr>
            </table>
            <br>
          </div>
        </form>

        <button type="submit" class="button_1">Hire Me</button>
        <button type="submit" class="button_1">Download CV</button><br><br>

        <form class="quote" action="./update/update_social.php" method="post">
          <div>
            <table style="width:30%" align="center">
            <tr>
              <td><label>LinkedIn Link</label></td>
              <td><textarea rows="2" cols="50" type="text" name="Link_LinkedIn"><?php echo $social_links[0]?></textarea></td>
            </tr>

            <tr>
              <td><label>Instagram Link</label></td>
              <td><textarea rows="2" cols="50" type="text" name="Link_IG"><?php echo $social_links[1]?></textarea></td>
            </tr>

            <tr>
              <td><label>Twitter Link</label></td>
              <td><textarea rows="2" cols="50" type="text" name="Link_Twitter"><?php echo $social_links[2]?></textarea></td>
            </tr>
            </table>
            <p style="text-align: center"><button class="button_1">Update</button><p>
            <br>
          </div>
        </form>

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
