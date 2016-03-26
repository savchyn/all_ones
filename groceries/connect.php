<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("antimsan")or die (mysql_error());
session_start();
error_reporting(0);
$country=array();
$query=mysql_query('SELECT * FROM country');
while($row=mysql_fetch_array($query))
{
$country[]=$row;
}
return $country;
?>
