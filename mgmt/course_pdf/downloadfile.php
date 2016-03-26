<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('conn.php');
if(!empty($_GET['fileid'])){
$ms=$_GET['fileid'];
                    
            $result=mysql_query("SELECT pdf_file FROM course_pdf where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
                      
       // $type=$row['type'];
        $name=$row['pdf_file'];
         if($name==""){    
             echo "<script type='text/javascript'>alert('No file found');window.location.href='all_pdfs.php';</script>;";
         }
        else{
  if(file_exists('pdfs/'.$name)){
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

if(!empty($_GET['printfile'])){
$file_name=$_GET['printfile'];
	$filepath="pdfs/".$file_name;
	
	 $filepath = "pdfs/".$file_name; 
   $printer = "\\\\MyPrintServer\\yourprinternamehere";  
   $printercmd =  "PDFXCview.exe /print:printer=\"$printer\" ";  
   $printcmd = $printercmd . " $filepath";  
   exec($printcmd);  
	echo "Printed";
	
/*	function printIssue()
{
	$your_printer_name = "EPSON LX-300";
	$handle=printer_open($your_printer_name);
//set the font characteristics here
	$font_face = "Draft Condensed";
	$font_height = 20;
	$font_width = 6;
$font=printer_create_font($font_face,$font_height,$font_width,PRINTER_FW_THIN,false,false,false,0);
printer_select_font($handle,$font);
printer_write($handle,"My PDF file content below");
//here loop through your pdf file and print the line by line or else get the entire content inside the string at once and print
$your_pdf_file = "pdfs/".$file_name;
	if(!eof($file_handle))
	{
		//do something
		printer_write($handle,$name);
	}
	printer_delete_font($font);
	printer_close($handle);
}
printIssue();
*/
}

?>