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


<script type="module" >
	var x = <?php echo $encoded ?>;
	import {hello, array_test, do_something} from './somethin_else.js';
	array_test(x);
	hello('world');
	do_something(x);
</script>

</body>
</html>