
<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title> php </title>
</head>

<body>

<?php
	header("Content-type: text/html; charset=utf-8");
	if (empty($_GET['name'])) {
		echo "<h1>Hej du okände</h1>";
	} 	else {
		echo "<h1>Hej ", (filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS)), "</h1>";
	}
?>

</body>
</html>