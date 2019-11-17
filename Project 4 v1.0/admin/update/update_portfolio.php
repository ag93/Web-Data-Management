<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$P0 = $_POST['Project_0_Link'];
$P1 = $_POST['Project_1_Link'];
$P2 = $_POST['Project_2_Link'];
$P3 = $_POST['Project_3_Link'];
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE portfolio SET git_link = '$P0' where id='1'";
if (mysqli_query($connection, $sql)) {
    echo "Link 0 updated successfully";
} else {
    echo "<br>Error updating Link 0: " . mysqli_error($connection);
}

$sql = "UPDATE portfolio SET git_link = '$P1' where id='2'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Link 1 updated successfully";
} else {
    echo "<br>Error updating Link 1: " . mysqli_error($connection);
}

$sql = "UPDATE portfolio SET git_link = '$P2' where id='3'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Link 2 updated successfully";
} else {
    echo "<br>Error updating Link 2: " . mysqli_error($connection);
}

$sql = "UPDATE portfolio SET git_link = '$P3' where id='4'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Link 3 updated successfully";
} else {
    echo "<br>Error updating Link 3: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../portfolio.php", "_self");
    }
</script>
