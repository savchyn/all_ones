<?php
include('conn.php');

$ls=$_GET['idnumber'];
 $que=mysql_query("delete from course_pdf where id='$ls'");
if($que){
    
    echo "<script type='text/javascript'>alert('Deleted Successfully');window.location.href='all_pdfs.php';</script>;";
}
else{echo "error in data deletion".mysql_error();}
?>