<?php
include('conn.php');
$first=$_REQUEST["first"];
echo($first);
$quy=mysql_query("select * from country_code where country_name = '".$first."'");
while($data=mysql_fetch_array($quy))
{
echo "<option value='".$data['country_code']."'>".$data['country_code']."</option>";

}?>

