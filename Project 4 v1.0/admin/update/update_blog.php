<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$P0 = $_POST['Blog_P0'];
$P1 = $_POST['Blog_P1'];

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE blog SET content = '$P0' where id='1'";
if (mysqli_query($connection, $sql)) {
    echo "<br>What is 'Inside My Mind?'' updated successfully";
} else {
    echo "<br>Error updating What is \"Inside My Mind?\": " . mysqli_error($connection);
}

$sql = "UPDATE blog SET content = '$P1' where id='2'";
if (mysqli_query($connection, $sql)) {
    echo "<br>What's more on Inside my Mind? updated successfully";
} else {
    echo "<br>Error updating What's more on Inside my Mind?: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../blog.php", "_self");
    }
</script>
