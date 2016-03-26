<?php
include('conn.php');
$sd=$_GET['cd'];
$que=mysql_query("delete from certficate_issue where id='$sd'");
if($que){
    echo "<script type='text/javascript'>alert('Delete Sucessfully');window.location.href='certificate.php';</script>;";
}
else{echo "Erro in data deletion".mysql_error();}

?>