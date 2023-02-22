<?php
// sleep(5);
// echo "You want info of product id : ".$_POST['id'];
if(isset($_POST['action']) && $_POST['action']=="search"){
    require "connection.php";
    $id = $conn->escape_string($_POST['id']);
    $q = "select * from products where id = '$id' limit 1";
    $r = $conn->query($q);
    $row = array();
    if($r->num_rows){
        $row['success'] = true;
        $row['item'] = $r->fetch_assoc();
    }
    else{
        $row['success'] = false;
        $row['item'] = null;
    }
    //array to json
    echo json_encode($row);

}
?>