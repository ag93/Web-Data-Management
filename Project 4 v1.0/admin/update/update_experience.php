<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$Pos_0 = $_POST['Exp_0_Pos'];
$Comp_0 = $_POST['Exp_0_Comp'];
$Desc_0 = $_POST['Exp_0_Desc'];

$Pos_1 = $_POST['Exp_1_Pos'];
$Comp_1 = $_POST['Exp_1_Comp'];
$Desc_1 = $_POST['Exp_1_Desc'];

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE experience SET position = '$Pos_0', company = '$Comp_0', description='$Desc_0' where id='1'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Experience 0 updated successfully";
} else {
    echo "<br>Error updating Experience 0: " . mysqli_error($connection);
}

$sql = "UPDATE experience SET position = '$Pos_1', company = '$Comp_1', description='$Desc_1' where id='2'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Experience 1 updated successfully";
} else {
    echo "<br>Error updating Experience 1: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../experience.php", "_self");
    }
</script>
