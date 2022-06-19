<?php
require("./connection.php");
echo "<pre>";
print_r($_POST);
if(isset($_POST["login_submit"]))
{
    $sql = "INSERT INTO `users`(`username`, `email`, `phone`, `password`) VALUES ('".$_POST['Username']."','".$_POST['Email']."', ".$_POST['Phone'].",'".$_POST['Password']."')";
    $res = $db->query($sql);
    if($res){
        echo "<script>alert('Query successfully Submitted.Thank you')</script>";
    }
    else {
        echo "<script>alert('Something Went wrong!!')</script>";
    }
}

// str 1 . str2 . 'h'  ' "
/*
username pasword email phone
fetch_both [0 => 'hrishi, 'username => 'hrihsi]
fetch_num [0, 1, 2, 3]
fetch_assoc ['username' => 'hrishi']

[
    'a': 67,
    ''
]
*/