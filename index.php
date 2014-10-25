<?php 
$db = new SQLite3('SensorData.db');
 ?>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <meta HTTP-EQUIV="REFRESH" content="2; url=http://www.mipe.dk" /> -->  	
<title>Redirect</title>
</head>
<body>
<p>Now index.php file on github</p>
<?php
$results = $db->query('SELECT bar FROM foo');
while ($row = $results->fetchArray()) {
	var_dump($row);
?>
</body>
</html>
