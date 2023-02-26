<?php
$conn = new mysqli("localhost","root","","r53_jquery");
$conn->set_charset('utf8');
if(isset($_GET['term'])){
    $t = $conn->escape_string($_GET['term']);
    $q = "select id,name,price from products where name like '%".$t."%'";
    $r = $conn->query($q);
    if($r->num_rows){
        $rows = array();
        while( $row= $r->fetch_assoc()){
            $rows[] = [
                'label' => $row['name'],
                'id' => $row['id'],                
                'price' => $row['price'],                
            ];
        }
    }
    echo json_encode($rows);

}