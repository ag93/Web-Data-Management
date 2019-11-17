<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$IG = $_POST['Link_IG'];
$Twitter = $_POST['Link_Twitter'];
$LinkedIn = $_POST['Link_LinkedIn'];

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE social SET link = '$LinkedIn' where id='1'";
if (mysqli_query($connection, $sql)) {
    echo "<br>LinkedIn updated successfully";
} else {
    echo "<br>Error updating LinkedIn: " . mysqli_error($connection);
}

$sql = "UPDATE social SET link = '$IG' where id='2'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Instagram updated successfully";
} else {
    echo "<br>Error updating Instagram: " . mysqli_error($connection);
}

$sql = "UPDATE social SET link = '$Twitter' where id='3'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Twitter updated successfully";
} else {
    echo "<br>Error updating Twitter: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../index.php", "_self");
    }
</script>
