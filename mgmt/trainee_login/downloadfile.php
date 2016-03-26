<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('conn.php');
if(!empty($_GET['docname'])){
$ms=$_GET['docname'];
                    
            $result=mysql_query("SELECT project_files FROM project_feedback where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['project_files'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='view_project_feedbacks.php';</script>;";
         }
        else{
  if(file_exists('project_docs/'.$name)){
      header("Content-type: ".filetype('project_docs/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('project_docs/'.$name);
        exit; }
             
    /*   $sr="upload/".$name;
        $file = fopen($sr, 'w+');
echo fwrite($file, $sr);
fclose($file);*/
    }
    }
             }
}
else{ echo "error in query pass".mysql_error();}

}
// code for download file africa pdf


if(!empty($_GET['sapdf'])){
$ms=$_GET['sapdf'];
                    
            $result=mysql_query("SELECT pdf FROM africa_pdf where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['pdf'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='pdfs.php';</script>;";
         }
        else{
  if(file_exists('africa/'.$name)){
      header("Content-type: ".filetype('africa/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('africa/'.$name);
        exit; }
             
    /*   $sr="upload/".$name;
        $file = fopen($sr, 'w+');
echo fwrite($file, $sr);
fclose($file);*/
    }
    }
             }
}
else{ echo "error in query pass".mysql_error();}

}

?>