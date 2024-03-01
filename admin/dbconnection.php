<?php
$mysql_hostname = "aws.connect.psdb.cloud";
$mysql_user ="v7c8oo7cckn7wr5pkbyg";
$mysql_password ="pscale_pw_QKUnNrmQrlgcd5lyhDWw8NY9LBt3ZmurVwnBHMEJviU";
$mysql_database ="Products";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("database not connected");

?>
