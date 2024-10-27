<?php
    include("connecion.php");
?>

<?php
    $mobile = $_POST['MN'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "insert into login (MobileNumber, password) values ($mobile, '$hash')";
    mysqli_query($conn, $sql);
    $sql1 = "select * from login";
    $result = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result) > 0)
    {
        ($row = mysqli_fetch_assoc($result));
        {
            echo $row ['userId']."<br>";
            echo $row ['MobileNumber']."<br>";
            echo $row ['password']."<br>";
        }
    }
    else
    {
        echo "!! No user found !!";
    }
?>