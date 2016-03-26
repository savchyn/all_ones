<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('conn.php');
//code for download file 10th document

if( empty($_GET['twl']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['idp']) && empty($_GET['pslip']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){

    $ms=$_GET['ten'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_10th FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_10th'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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

//code for download file 12th document

if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['idp']) && empty($_GET['pslip']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){

    $ms=$_GET['twl'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_12th FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_12th'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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
           else {echo "num of row ".mysql_error();}

}
else{ echo "error in query pass".mysql_error();}

}

//code for download file degree document

if( empty($_GET['ten']) && empty($_GET['twl']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['idp']) && empty($_GET['pslip']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){

    $ms=$_GET['deg'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_degree FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_degree'];
            if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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
//code for download file acadmic qualification professional document

if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['twl']) && empty($_GET['rp']) && empty($_GET['idp']) && empty($_GET['pslip']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){

    $ms=$_GET['acq'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_acq FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_acq'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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
//code for download file resisdent proof document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['twl']) && empty($_GET['idp']) && empty($_GET['pslip']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){
$ms=$_GET['rp'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_rp FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_rp'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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
//code for download file identity t proof document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['twl']) && empty($_GET['pslip']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){
$ms=$_GET['idp'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_idp FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_idp'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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

//code for download file pay slip document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['twl']) && empty($_GET['idp']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){
$ms=$_GET['pslip'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_pslip FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_pslip'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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


//code for download file releving letter document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['twl']) && empty($_GET['pslip']) && empty($_GET['idp']) && empty($_GET['exp']) && empty($_GET['app']) && empty($_GET['pho'])){

    $ms=$_GET['rlletter'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_rlletter FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_rlletter'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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


//code for download file experience letter document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['twl']) && empty($_GET['pslip']) && empty($_GET['idp']) && empty($_GET['rlletter']) && empty($_GET['app']) && empty($_GET['pho'])){

    $ms=$_GET['exp'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_exp_letter FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_exp_letter'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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

//code for download fileappointment letter document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['twl']) && empty($_GET['pslip']) && empty($_GET['idp']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['pho'])){

    $ms=$_GET['app'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_appointment FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_appointment'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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

//code for download photo document
if( empty($_GET['ten']) && empty($_GET['deg']) && empty($_GET['acq']) && empty($_GET['rp']) && empty($_GET['twl']) && empty($_GET['pslip']) && empty($_GET['idp']) && empty($_GET['rlletter']) && empty($_GET['exp']) && empty($_GET['app'])){

    $ms=$_GET['pho'];
                    
                     //$table=$_GET['lin'];
            $result=mysql_query("SELECT p_photo FROM employee_reg where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['p_photo'];
             if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='employees.php';</script>;";
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