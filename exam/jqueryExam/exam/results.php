<?php
include("dbconf.php");
$resultStr = '';
$query = 'SELECT * FROM productinfo where categoryId='.$_GET['id'];
if ($result = $mysqli->query($query))
{
if ($result->num_rows > 0)
{
$resultStr.='<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Name</td>
	<td>Image</td>
    <td>category</td>
    <td>purchase Price </td>
    <td>retail Price </td>
    <td>stock</td>
    <td>create Date </td>
	<td>Details</td>
  </tr>';

//$resultStr.='<ul>';
while($row = $result->fetch_assoc())
{
//$resultStr.= '<li><strong>'.$row['functionName'].'</strong>- '.$row['summary'];
//$resultStr.= '<div><pre>'.$row['example'].'</pre></div></li>';
$resultStr.='<tr>';
$resultStr.='<td>'.$row['productId'].'</td>';
$resultStr.='<td>'.$row['productName'].'</td>';
$resultStr.='<td><img src="productImages/'.$row['productId'].'.jpg" width="60" height="40" title="'.$row['productName'].'" /></td>';
$resultStr.='<td>'.$row['categoryId'].'</td>';
$resultStr.='<td>'.$row['purchasePrice'].'</td>';
$resultStr.='<td>'.$row['retailPrice'].'</td>';
$resultStr.='<td>'.$row['quantity'].'</td>';
$resultStr.='<td>'.$row['created'].'</td>';
$resultStr.='<td><a href="prdetails.php?pid='.$row['productId'].'">Details</a></td>';
$resultStr.='</tr>';
}
$resultStr.= '</table>';
}
else
{
$resultStr = 'Nothing found';
}
}
echo $resultStr;
?>