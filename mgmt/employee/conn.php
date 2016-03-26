<?php 

//mysql_connect("mysql","root","mobileapp");
//$m=mysql_connect("localhost","root","mahender","nexg");
$ms=mysql_connect("localhost","root","");
$mm=mysql_select_db("nexg");

if($ms){
//database connected sucess

}

else{
// error in database connect
	echo mysql_error();
}

if($mm){
// db selected
}

else{
	
echo "Error in db selection".mysql_errno();
	
}

?>