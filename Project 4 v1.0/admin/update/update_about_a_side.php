<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$age = $_POST['Age'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$address = $_POST['Address'];
$languages = $_POST['Languages'];
$education = $_POST['Education'];

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE about_a_side SET value = '$age' where name='Age:'";
if (mysqli_query($connection, $sql)) {
    echo "Age updated successfully";
} else {
    echo "Error updating Age: " . mysqli_error($connection);
}

$sql = "UPDATE about_a_side SET value = '$email' where name='Email:'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Email updated successfully";
} else {
    echo "Error updating Email: " . mysqli_error($connection);
}

$sql = "UPDATE about_a_side SET value = '$phone' where name='Phone:'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Phone updated successfully";
} else {
    echo "Error updating Phone: " . mysqli_error($connection);
}

$sql = "UPDATE about_a_side SET value = '$address' where name='Address:'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Address updated successfully";
} else {
    echo "Error updating Address: " . mysqli_error($connection);
}

$sql = "UPDATE about_a_side SET value = '$languages' where name='Languages:'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Languages updated successfully";
} else {
    echo "Error updating Languages: " . mysqli_error($connection);
}

$sql = "UPDATE about_a_side SET value = '$education' where name='Education:'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Education updated successfully";
} else {
    echo "Error updating Education: " . mysqli_error($connection);
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
