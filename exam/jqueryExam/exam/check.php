<?php
include("dbconf.php");
$selectQuery = 'SELECT username as user FROM users WHERE username="'.$_POST['username'].'"';
$result = $mysqli->query($selectQuery);
if($result)
{
if ($result->num_rows > 0)
{
echo false;
}
else
{
echo true;
}
}
else
{
echo false;
}
?>