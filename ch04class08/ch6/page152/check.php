<?php 
$mysqli = new mysqli('localhost', 'root', '', 'r53_jquery'); 
$selectQuery = 'SELECT username as user FROM testusers WHERE username="'.$_POST['username'].'"'; 
$result = $mysqli->query($selectQuery); 
if ($result->num_rows > 0) 
{ 
echo false; 
} 
else 
{ 
echo true; 
} 
?>