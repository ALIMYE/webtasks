<?php
if (isset($_GET["name"])){
	setcookie("name",$_GET["name"]);
}
else if (!isset($_COOKIE["name"])){
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Task11page1.php">
	Enter your name:<input type="text" name="name"/>	
	<input type="submit"/>

</body>
</html>


</form>
<?php
}
else{
echo "Hello ".$_COOKIE["name"];
}
?>