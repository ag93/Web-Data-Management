<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$about_me = $_POST['About_Me'];
$careers_goals = $_POST['Career_Goals'];
$life_goals = $_POST['Life_Goals'];
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE about SET content = '$about_me' where name='About Me'";
if (mysqli_query($connection, $sql)) {
    echo "About Me updated successfully";
} else {
    echo "<br>Error updating About Me: " . mysqli_error($connection);
}

$sql = "UPDATE about SET content = '$careers_goals' where name='Career Goals'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Career Goals updated successfully";
} else {
    echo "<br>Error updating Career Goals: " . mysqli_error($connection);
}

$sql = "UPDATE about SET content = '$life_goals' where name='Life Goals'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Life Goals updated successfully";
} else {
    echo "<br>Error updating Life Goals: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../about.php", "_self");
    }
</script>
