<?php
    include("connecion.php");
?>

<?php
    $mobile = $_POST['MN'];
    $password = $_POST['password'];
    $sql = "insert into login (MobileNumber, password) values ($mobile, '$password')";
    mysqli_query($conn, $sql);
    header("Location : index2.php");
?>
