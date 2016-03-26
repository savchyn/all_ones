<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
$f=$_GET['ct'];
    $que=mysql_query("delete from employee_reg where id='$f'");
if($que){
     echo "<script type='text/javascript'>alert('Record Deleted Successfully');window.location.href='employees.php';</script>;";
}
else{
    echo "Error in data Deletion".mysql_error();
}

?>