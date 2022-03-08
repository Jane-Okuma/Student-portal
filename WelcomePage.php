<?php
$val = $_GET['id'];
header("Location: CourseReg.php?id=".$val);
?>

<!DOCTYPE html>
<html>
    <body style="background: url(image/bgg.jpg); -webkit-background-size: cover;background-size: cover;" >
        <a href="CourseReg.php" style="color: black;">Click to register courses</a>
    </body>
</html>