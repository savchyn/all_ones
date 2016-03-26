<?php
include('conn.php');
if(isset($_GET['uid'])){
	$uid=$_GET['uid'];
$sql=mysql_query(" delete from add_enquiry where id='$uid'");
	if($sql){
	echo "<script type='text/javascript'>alert('Delete Successfully');window.location.href='view_enquiry.php';</script>";
	}
	else{
	echo mysql_error();
	}
}

?>