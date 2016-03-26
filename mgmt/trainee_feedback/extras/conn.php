<?php
$uname='root';
$pwd='';
$dbname='news';
$con=mysql_connect('localhost',$uname,$pwd);

/*$uname='construc_ins';
$pwd='insurance123';
$dbname = 'construc_insurance';
$con=mysql_connect('localhost',$uname,$pwd);
*/
mysql_select_db($dbname,$con);

if (!$con) die('not connected');
?>