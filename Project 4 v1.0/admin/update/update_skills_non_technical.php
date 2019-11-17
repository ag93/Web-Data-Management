<?php
define('DB_NAME', 'resume');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');

$s0 = $_POST['NT_Skill_0'];
$s1 = $_POST['NT_Skill_1'];
$s2 = $_POST['NT_Skill_2'];
$s3 = $_POST['NT_Skill_3'];
$s4 = $_POST['NT_Skill_4'];
$s5 = $_POST['NT_Skill_5'];
$s6 = $_POST['NT_Skill_6'];
$s7 = $_POST['NT_Skill_7'];
$s8 = $_POST['NT_Skill_8'];
$s9 = $_POST['NT_Skill_9'];

$v0 = $_POST['NT_Skill_0_Val'];
$v1 = $_POST['NT_Skill_1_Val'];
$v2 = $_POST['NT_Skill_2_Val'];
$v3 = $_POST['NT_Skill_3_Val'];
$v4 = $_POST['NT_Skill_4_Val'];
$v5 = $_POST['NT_Skill_5_Val'];
$v6 = $_POST['NT_Skill_6_Val'];
$v7 = $_POST['NT_Skill_7_Val'];
$v8 = $_POST['NT_Skill_8_Val'];
$v9 = $_POST['NT_Skill_9_Val'];

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die(mysqli_error());

$sql = "UPDATE non_tech_skills SET name = '$s0', percent = '$v0' where id='1'";
if (mysqli_query($connection, $sql)) {
    echo "Non-Technical Skill 0 updated successfully";
} else {
    echo "Error updating Non-Technical Skill 0: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s1', percent = '$v1' where id='2'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 1 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 1: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s2', percent = '$v2' where id='3'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 2 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 2: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s3', percent = '$v3' where id='4'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 3 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 3: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s4', percent = '$v4' where id='5'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 4 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 4: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s5', percent = '$v5' where id='6'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 5 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 5: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s6', percent = '$v6' where id='7'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 6 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 6: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s7', percent = '$v7' where id='8'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 7 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 7: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s8', percent = '$v8' where id='9'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 8 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 8: " . mysqli_error($connection);
}

$sql = "UPDATE non_tech_skills SET name = '$s9', percent = '$v9' where id='10'";
if (mysqli_query($connection, $sql)) {
    echo "<br>Non-Technical Skill 9 updated successfully";
} else {
    echo "<br>Error updating Non-Technical Skill 9: " . mysqli_error($connection);
}



mysqli_close($connection);
?>
<br>
<button class="button_1" onclick="back()"> OK </button>
<script language="javascript">
  function back() {
      window.open(URL="../skills.php", "_self");
    }
</script>
