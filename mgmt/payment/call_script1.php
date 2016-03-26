<?php
include('conn.php');
$first=$_REQUEST["first"];
echo($first);
$quy=mysql_query("select * from training_courses where id = '".$first."'");
while($data=mysql_fetch_array($quy))
{
echo "<option value='".$data['training_code']."'>".$data['training_code']."</option>";

}?>

