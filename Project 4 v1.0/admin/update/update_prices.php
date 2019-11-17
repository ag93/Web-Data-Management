<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$Cost0 = $_POST['Price_Cost_0'];
$Title0 = $_POST['Price_Title_0'];
$Desc0 = $_POST['Price_Desc_0'];

$Cost1 = $_POST['Price_Cost_1'];
$Title1 = $_POST['Price_Title_1'];
$Desc1 = $_POST['Price_Desc_1'];

$Cost2 = $_POST['Price_Cost_2'];
$Title2 = $_POST['Price_Title_2'];
$Desc2 = $_POST['Price_Desc_2'];

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE prices SET cost = '$Cost0', title = '$Title0', services = '$Desc0' where id='1'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Service 0 updated successfully";
} else {
    echo "<br>Error updating Service 0: " . mysqli_error($connection);
}

$sql = "UPDATE prices SET cost = '$Cost1', title = '$Title1', services = '$Desc1' where id='2'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Service 1 updated successfully";
} else {
    echo "<br>Error updating Service 1: " . mysqli_error($connection);
}

$sql = "UPDATE prices SET cost = '$Cost2', title = '$Title2', services = '$Desc2' where id='3'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Service 2 updated successfully";
} else {
    echo "<br>Error updating Service 2: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../prices.php", "_self");
    }
</script>
