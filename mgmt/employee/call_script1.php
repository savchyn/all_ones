<?php
session_start();
include('conn.php');
$first=$_REQUEST["first"];
echo($first);
$quy=mysql_query("select * from training_courses where id = '".$first."'");
while($data=mysql_fetch_array($quy))
{
  $_SESSION['b']=$data['training_name'];
echo "<option value='".$data['training_code']."'>".$data['training_code']."</option>";

}?>

