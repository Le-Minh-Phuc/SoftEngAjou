<?php
//Connect to the database
$base = mysql_connect ('server', 'login', 'pass');
mysql_select_db ('database_name', $base)
?>
<html>
<head>
<title>Temperature of Sensor</title>
</head>
<body>
<?php
//<!--Launch SQL Request-->
$sql = 'SELECT sensor FROM list_owner WHERE name ="toto"';
//<!--mysql_querry , error if problem with request-->
$req = mysql_query ($sql) or die('Error SQL !< br />').$sql.'<br />'.mysql_error());
//<!--Result (tabloid)-->
$data = mysql_fetch_array($req);
//<!--Free memory>
mysql_free_result($req);
mysql_close();
?>
Current temperature of the sensor is : <br />
<?php echo $data['sensor']; ?>
</body>
</html>
