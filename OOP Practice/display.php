<?php
	include 'child.php';
	$child = new Child;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$child->j(100); 
	echo $child->add_2_public('...');
?>
</body>
</html>