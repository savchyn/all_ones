<?php
session_start();
include('conn.php');
if(isset($_POST['add_pdf'])){
    
    $course_name=$_POST['course_name']; 
    
	$target="pdfs/".$_FILES['course_file']['name'];
	
		
	if(file_exists($target)) {
	move_uploaded_file($_FILES['course_file']['tmp_name'], $target);
    $fe=$_FILES['course_file']['name'];
    $que=mysql_query("update course_pdf set pdf_file='$fe' where pdf_file='$fe';");
    
    if($que){
        echo "<script type='text/javascript'>alert('File Updated Sucessfully');window.location.href='all_pdfs.php';</script>;";
    }
}
	else{
		move_uploaded_file($_FILES['course_file']['tmp_name'], $target);
    $fe=$_FILES['course_file']['name'];
    $query=mysql_query("INSERT INTO course_pdf (course_name,pdf_file) VALUES ('$course_name','$fe');");
    
    if($query){
        echo "<script type='text/javascript'>alert('File Uploaded Sucessfully');window.location.href='all_pdfs.php';</script>;";
    }
    else{echo "error in data inserting".mysql_error();}
		
	}
}

?>