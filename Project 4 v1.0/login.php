<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Aniket Gade | Login</title>
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
            <li><a href="prices.php">Prices</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="current"><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <br>
    <br>

    <section id="contact-me">
      <div class="container">
        <h2>Log In</h2>
        <form class="quote">
          <div>
            <table style="width:30%" align="center">
            <tr>
              <td><label>UserID</label></td>
              <td><input type="text" placeholder="User ID" name="UserID"></td>
            </tr>

            <tr>
              <td><label>Password</label></td>
              <td><input type="password" placeholder="Enter your password" name="Password"></td>
            </tr>
            </table>
            <br>
          <button class="button_1" onclick="check(this.form)">Log In</button>
      </form>
      </div>
    </section>

    <script language="javascript">
      function check(form) {
        if(form.UserID.value == "admin" && form.Password.value == "root123")
        {
          window.open("admin/index.php");
        }
        else {
          alert("Invalid Username and Password");
        }

      }

    </script>

    <footer style="padding-top:300px;">
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
