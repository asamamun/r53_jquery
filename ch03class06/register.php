<?php
if(isset($_POST['action']) && $_POST['action']=="register"){
require "connection.php";
$p = password_hash($_POST['pass'],PASSWORD_DEFAULT);
$q = "insert into users values(null,'".$_POST['username']."','".$p."',CURRENT_TIMESTAMP)";
$conn->query($q);
if($conn->affected_rows){
    echo "success";
}
else{
    echo "error";
}
}
// echo "thank you for registering your account";
?>