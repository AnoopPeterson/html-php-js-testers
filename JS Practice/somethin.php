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


	document.cookie = 'test=1000';
function getCookie(cname) {
	var name = cname + '=';
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
		  c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
		  return c.substring(name.length, c.length);
		}
	}
	return '';
}

var cookie = getCookie('test');
console.log(typeof Number(cookie));
console.log(Number(cookie) + 100);
</script>

</body>
</html>