<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$tag_line = $_POST['Tag_Line'];
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE tag_line SET line = '$tag_line' where id=1";

if (mysqli_query($connection, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
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
