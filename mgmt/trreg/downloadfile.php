<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('conn.php');
if( empty($_GET['pgr']) && empty($_GET['gr']) && empty($_GET['cf']) && empty($_GET['cs']) && empty($_GET['ct'])){
$ms=$_GET['passport'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT passport_attach FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['passport_attach'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='trainees.php';</script>;";
         }
        else{
  if(file_exists('passport/'.$name)){
      header("Content-type: ".filetype('passport/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('passport/'.$name);
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
// for gr download
if( empty($_GET['pgr']) && empty($_GET['passport']) && empty($_GET['cf']) && empty($_GET['cs']) && empty($_GET['ct'])){
$ms=$_GET['gr'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT gradattach FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['gradattach'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='trainees.php';</script>;";
         }
        else{
  if(file_exists('academic/'.$name)){
      header("Content-type: ".filetype('academic/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('academic/'.$name);
        exit; }
    /*   $sr="upload/".$name;
        $file = fopen($sr, 'w+');
echo fwrite($file, $sr);
fclose($file);*/
    }
    }
                 
             }
           else {echo "num of row ".mysql_error();}

}
else{ echo "error in query pass".mysql_error();}

}
//for pgr download 
if( empty($_GET['passport']) && empty($_GET['gr']) && empty($_GET['cf']) && empty($_GET['cs'])&& empty($_GET['ct'])){
$ms=$_GET['pgr'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT pgradattach FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['pgradattach'];
            if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='trainees.php';</script>;";
         }
        else{
  if(file_exists('academic/'.$name)){
      header("Content-type: ".filetype('academic/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('academic/'.$name);
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
// for company1
if( empty($_GET['pgr']) && empty($_GET['gr']) && empty($_GET['passport']) && empty($_GET['cs'])&& empty($_GET['ct'])){
$ms=$_GET['cf'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT attachment FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['attachment'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='trainees.php';</script>;";
         }
        else{
  if(file_exists('attachment/'.$name)){
      header("Content-type: ".filetype('attachment/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('attachment/'.$name);
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
// for comapny2
if( empty($_GET['pgr']) && empty($_GET['gr']) && empty($_GET['cf']) && empty($_GET['passport'])&& empty($_GET['ct'])){
$ms=$_GET['cs'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT attachment1 FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['attachment1'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='trainees.php';</script>;";
         }
        else{
  if(file_exists('attachment/'.$name)){
      header("Content-type: ".filetype('attachment/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('attachment/'.$name);
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
//for comapny 3
if( empty($_GET['pgr']) && empty($_GET['gr']) && empty($_GET['cf']) && empty($_GET['cs'])&& empty($_GET['passport'])){
$ms=$_GET['ct'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT attachment2 FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['attachment2'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='trainees.php';</script>;";
         }
        else{
  if(file_exists('attachment/'.$name)){
      header("Content-type: ".filetype('attachment/'.$name));
        header('Content-disposition: attachment; filename="'.$name.'"');
        echo file_get_contents('attachment/'.$name);
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