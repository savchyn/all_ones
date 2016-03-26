<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>

<head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Nex-g</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
<script type="text/javascript" src="prettify/prettify.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="datetimepicker_css.js"></script>
</head>
  <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
          
                  <?php  
     $ms=$_GET['sid'];


     $result=mysql_query("SELECT * FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row=mysql_fetch_array($result)){  
        $inst=$row['installment'];
        
        $fs=$row['inst_f_submited_fee'];
         $ss=$row['inst_s_submited_fee'];
         $ts=$row['inst_t_submited_fee'];
        
        
        $name=$row['fname']." ".$row['lname'];
             $rgs=$row['reg_number'];
        $time=$row['fromduration']." To ".$row['toduration'];
        $co=$row['trcode'];
        $ins1=$row['inst_f_submited_fee']+$row['reg_amount'];
        $date1=$row['due_date1'];
        $narr1="Trainee Fees First Installment With Registration Fees";
        $ins2=$row['inst_s_submited_fee'];
        $date2=$row['inst_s_date'];
        $narr2=$row['narration_s_inst'];
        
         $ins3=$row['inst_t_submited_fee'];
        $date3=$row['inst_t_date'];
        $narr3=$row['narration_t_inst'];
        $du1=$row['trfees']-$ins1;
        $du2=$du1-$ins2;
        $du3=$du2-$ins3;
        $fee=$row['trfees'];
        
        
        $to=$row["email"];
    $subject="Nex-G Pay Slip";
  $headerss = 'From: info@nexg.in' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headerss.= "MIME-Version: 1.0\r\n"; 
$headerss.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$headerss.= "X-Priority: 1\r\n";  
        
        
        
$message='<h2 style="margin-left:320px;">Nex-G  Pay  Slip</h2> <br><br>
    <table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
    <tr><td>Trainee Name :'. $name.'</td><td>Registration Number : '. $rgs.'</td></tr>
        
    <tr><td>Course Code : '. $co.'</td><td>Time Duratuion :'.  $time.'</td></tr>
           
    </table><br>
        <table class="table table-bordered" style="text-align:center;">
            <tr><td>Course Fees : '.  $fee.'</td></tr>
        <tr><td>Date</td><td>Credit</td><td>Due Balance</td><td>Narration</td> </tr>';
        if($inst =='1'){ 
            
        $message.='<tr><td>'. $date1.'</td> <td>'.  $ins1 .'</td> <td>'.  $du1.'</td> <td>'.  $narr1 .'</td> </tr>';
     
        if($inst =='2'){ 
          if($ss ==''){ 
             $message.='<tr><td>'.  $date1.'</td> <td>'.  $ins1.'</td> <td>'. $du1.'</td> <td>'.  $narr1 .'</td> </tr>';
          }
        else{
            $message.='<tr><td>'.  $date1 .'</td> <td>'.  $ins1   .'</td> <td>'. $du2.'</td> <td>'. $narr1.'</td> </tr>
            <tr><td>'.  $date2 .'</td> <td>'. $ins2 .'</td> <td>'. $du2.'</td> <td>'.  $narr2 .'</td> </tr>';
        }
        } 
if($inst =='3'){ 
    
    if($ss =='' && $ts =='') {
             $message.='<tr><td>'.  $date1 .'</td> <td>'.  $ins1 .'</td> <td>'.  $du1.'</td> <td>'.  $narr1 .'</td> </tr>';
    } 

    elseif( $ts == '') {
            $message.='<tr><td>'.  $date1 .'</td> <td>'.  $ins1  .'</td> <td>'.  $du1.'</td> <td>'.  $narr1 .'</td> </tr>
            <tr><td>'.  $date2 .'</td> <td>'.  $ins2 .'</td> <td>'. $du2.'</td> <td>'.  $narr2 .'</td> </tr>'; 
    } 
         else {  
            $message.='<tr><td>'.  $date1.'</td> <td>'.  $ins1 .'</td> <td>'.  $du1.'</td> <td>'.  $narr1 .'</td> </tr>
            <tr><td>'.  $date2 .'</td> <td>'.  $ins2 .'</td> <td>'.  $du2.'</td> <td>'.  $narr2 .'</td> </tr>
            <tr><td>'.  $date3 .'</td> <td>'.  $ins3 .'</td> <td>'.  $du3.'</td> <td>'.  $narr3.'</td> </tr>';
         }    
              
              }
         }
            $message.='</table>'; 
                  
        //....................          
                  
                  $ms=mail($to, $subject, $message, $headerss);
     
        if($ms){
          
             echo "<script type='text/javascript'>alert('Pay Slip Send Succssfully');window.location.href='slip.php';</script>;";
        }
        else{
            echo "error in mail sending".mysql_error();
        }
            //.............................................      
             }
}
else{ echo "error in query pass".mysql_error();} 
}?>
    </div>