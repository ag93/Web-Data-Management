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
        <article id="main_col">
          <h1 class="page-title"> About Me </h1>
          <p><?php echo $about_row[0]?></p>
        </article>

        <aside id="sidebar">
          <h3>Basic Information</h3>
          <table style="width:100%">
          <tr>
            <td><?php echo $a_side_key_row[0]?></td>
            <td><?php echo $a_side_val_row[0]?></td>
          </tr>
          <tr>
            <td><?php echo $a_side_key_row[1]?></td>
            <td><?php echo $a_side_val_row[1]?></td>
          </tr>
          <tr>
            <td><?php echo $a_side_key_row[2]?></td>
            <td><?php echo $a_side_val_row[2]?></td>
          </tr>
          <tr>
            <td><?php echo $a_side_key_row[3]?></td>
            <td><?php echo $a_side_val_row[3]?></td>
          </tr>
          <tr>
            <td><?php echo $a_side_key_row[4]?></td>
            <td><?php echo $a_side_val_row[4]?></td>
          </tr>
          <tr>
            <td><?php echo $a_side_key_row[5]?></td>
            <td><?php echo $a_side_val_row[5]?></td>
          </tr>

        </table>
        </aside>

        <article id="main_col">
          <h1 class="page-title"> Career Goals </h1>
          <p><?php echo $about_row[1]?></p>
        </article>

        <article id="main_col">
          <h1 class="page-title"> Life Goals </h1>
          <p><?php echo $about_row[2]?></p>
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
