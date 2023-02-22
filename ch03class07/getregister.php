<?php
if(isset($_GET['action']) && $_GET['action']=="register"){
require "connection.php";
$p = password_hash($_GET['pass'],PASSWORD_DEFAULT);
$q = "insert into users values(null,'".$_GET['username']."','".$p."',CURRENT_TIMESTAMP)";
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