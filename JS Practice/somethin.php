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

<canvas id="test" width="500" height="500"></canvas>

<script type="module" >
	var x = <?php echo $encoded ?>;
	import {hello} from './somethin_else.js';
	hello('world');
	var canvas = document.getElementById('test');
	var ctx = canvas.getContext('2d');
	ctx.fillStyle = "rgb(255, 0, 0)";
	let initx = 40;
	let width = 30; // 30 px wide
	let spacing = 10;
	for(var i = 0; i < x.length; i++){
		var height = (x[i] * 10) + 1; // simulating a graph ,scale by 10;
		ctx.fillRect(initx, 10, width, height);
		initx += width + spacing;
	}
</script>

</body>
</html>