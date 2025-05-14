<?php
include 'dbconnection.php';
if(isset($_SESSION['userid'])){
    // find username using user 
    $find_user_info = $_SESSION['userid'];
    $findusername = "SELECT * FROM `twitter_users` WHERE username = '$find_user_info'";
    $result = mysqli_query($conn,$findusername);
    $userDAta = mysqli_fetch_assoc($result);
    $name = $userDAta['name'];
    $firstchar = $name[0];
    $_SESSION['firstchr'] = $firstchar;
    $_SESSION['login_user_id'] = $userDAta['id'];
}
?>