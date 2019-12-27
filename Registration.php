<?php
$db = mysqli_connect("localhost","root","","practical2");
if(isset($_POST['submit'])){
    $Firstname = $_POST['Firstname'];
    $Surname = $_POST['Surname'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];   //md5 hash password security
    $ConfirmPassword = $_POST['Confirm-password'];
    $UserType = $_POST['UserType'];
if($Password==$ConfirmPassword){
    //create user
    $Password = md5(($_POST['Password']));   //md5 hash password security
    $sql = "INSERT INTO users (Firstname, Surname, Username,Password, UserType)"
        . "VALUES ('$Firstname','$Surname','$Username','$Password','$UserType')";
mysqli_query($db,$sql);
    $_SESSION['message'] = 'Registration successful. Added $Username to the database!';
 header("location:Register.php"); //redirect to the home page
}else{
    //failed
    $_SESSION['message'] = 'User could not be added to the database!';
}
}

