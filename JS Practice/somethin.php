<?php
$x = array(0, 10, 3, 4);
$encoded = json_encode($x);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script type="text/javascript">


	document.cookie = 'test=This is a test';

	var x = document.cookie;

	console.log(x);
</script>

</body>
</html>