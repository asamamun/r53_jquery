<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Product Details</title>
<style type="text/css">
body{font-family: "Trebuchet MS", Verdana, Arial;width:600px;}
div { background-color: #F5F5DC; }
</style>
<script type="text/javascript" src="../script/jquery-1.3.2.min.js" language="javascript"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
$('#selectLanguage').change(function()
{
if($(this).val() == '') return;
$.get(
'results.php',
{ id : $(this).val() },
function(data)
{
$('#result').html(data);
}
);
});
});
</script>
</head>

<body>
<?php
include("dbconf.php");
if (mysqli_connect_errno())
{
die('Unable to connect!');
}
else
{
$query = 'SELECT * FROM productcategory';
if ($result = $mysqli->query($query))
{
if ($result->num_rows > 0)
{
?>
<p>
Select a Category
<select id="selectLanguage">
<option value="">select</option>
<?php
while($row = $result->fetch_array(MYSQLI_ASSOC))
{
?>
<option value="<?php echo $row['categoryId']; ?>"><?php echo $row['categoryName']; ?></option>
<?php
}
?>
</select>
</p>
<p id="result"></p>
<?php
}
else
{
echo 'No records found!';
}
$result->close();
}
else
{
echo 'Error in query: $query. '.$mysqli->error;
}
}
$mysqli->close();
?>
</body>
</html>
