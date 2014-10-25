<?php
//$path_parts = pathinfo('/home/pi/RPi_sensor/SensorData.db');

//echo $path_parts['dirname'], "\n";
//echo $path_parts['basename'], "\n";
//echo $path_parts['extension'], "\n";
//echo $path_parts['filename'], "\n"; // since PHP 5.2.0
//$db = new SQLite3('/home/pi/RPi_sensor/SensorData.db');
$db = new SQLite3('SensorData.db');

$results = $db->query('SELECT * FROM onewire');
while ($row = $results->fetchArray()) {
	var_dump($row);
}
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

</body>
</html>
