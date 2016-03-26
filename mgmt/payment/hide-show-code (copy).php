<style>
    table, th, td ,tr{
    border: 3px solid black;
}
</style>

<?php 
 session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 $ms=$_GET['ids'];  
$slip=$_GET['slno'];
     $result=mysql_query("SELECT * FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row=mysql_fetch_array($result)){  
        $inst=$row['installment'];
        $fs=$row['inst_f_submited_fee'];
         $ss=$row['inst_s_submited_fee'];
         $ts=$row['inst_t_submited_fee'];
        $to=$row['email'];
        $jd=$row['id'];
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
        $registration_date=$row['registration_date'];
          //$du=$row['trfees']-$row['reg_amount']-$row['inst_f_submited_fee']-$row['inst_s_submited_fee']-$row['inst_t_submited_fee'];
            
       // style="margin-left:520px;" for heading nex-g payment slip
   
        
   $bo='<table style="margin-left:250px;" border="3px solid black;"><br><br>
   <img src="images2/111.jpg" height="90" width="90" style="margin-left:600px;"><br><br>
       <h2 align="center">Nex-G  Payment  Slip</h2><br><p style="margin-left:280px;">Slip. No.'.$slip.'</p><br><tr><td height="50" width="400">Trainee Name : '.$name.' </td><td height="50" width="400">Registration Number :  '.$rgs.'</td></tr>
        
    <tr><td height="50" width="400">Course Code : '.$co.' </td><td height="50" width="400">Registration Date : '.$registration_date.' </td></tr>
           
    </table><br>
        <table class="table table-bordered" style="margin-left:250px;" border="3px solid black;" >
            <tr><td height="50" width="200">Course Fees : '.$fee.'</td></tr>
          <tr><td height="50" width="10">Date</td><td height="50" width="200">Credit</td><td height="50" width="200">Due Balance</td><td height="50" width="400">Narration</td> </tr>';
           if($inst =='1'){ 
                 if(fs!=''){
            $bo.='<tr><td> '.$date1.'</td> <td>'.$ins1.'</td> <td><?php echo '.$du1.'</td> <td>'. $narr1.'</td> </tr>';
         }
          else{$bo.='No Fees Submitted Yet';} 
           }
        
        if($inst =='2'){ 
          if($fs !='' && $ss ==''){
             $bo.='<tr><td>'.$date1.'</td> <td>'.$ins1.'</td> <td>'.$du1.'</td> <td>'.$narr1.'</td> </tr>';
          }
        elseif($fs !='' && $ss !=''){
            $bo.='<tr><td>'. $date1.' </td> <td> '.$ins1.' </td> <td> '.$du2.'</td> <td>'.$narr1.'</td> </tr>
            <tr><td> '.$date2 .'</td> <td>'. $ins2.'</td><td>'.$du2.'</td> <td> '.$narr2.'</td> </tr>'; 
        }
            elseif($fs =='' && $ss !=''){
                 $bo.='<tr><td> '.$date2 .'</td> <td>'. $ins2.'</td><td>'.$du2.'</td> <td> '.$narr2.'</td> </tr>';
            }
            else{$bo.='No Fees Submitted Yet';}
        } 
else{ 
    
    if($fs!='' && $ss =='' && $ts =='') {
            $bo.='<tr><td> '.$date1.' </td> <td> '.$ins1.' </td> <td> '.$du1.'</td> <td> '.$narr1 .'</td> </tr>';
          } 

    elseif($fs!='' && $ss !='' && $ts == '') {
            $bo.= '<tr><td> '.$date1.'</td> <td> '.$ins1.'</td> <td>'.$du1.'</td> <td>'.$narr1.' </td> </tr>
            <tr><td>'.$date2.' </td> <td> '.$ins2.'</td> <td> '.$du2.'</td> <td> '.$narr2 .'</td> </tr>';
         
          
         } 
         elseif($fs!='' && $ss !='' && $ts != ''){  
             $bo.='<tr><td>'.$date1.' </td> <td> '.$ins1 .'</td> <td>'.$du1.'</td> <td> '.$narr1 .'</td> </tr>
            <tr><td>'.$date2.'</td> <td> '.$ins2.'</td> <td>'.$du2.'</td> <td> '.$narr2.' </td> </tr>
            <tr><td> '.$date3.' </td> <td> '.$ins3.' </td> <td> '.$du3.'</td> <td>'.$narr3.' </td> </tr>';       
 }     
    else{  $bo.='No Fees Submitted Yet'; }
              }
         $bo.='</table>'; 
        $bo.='<br><br><br><br><br><p style="font-size:16px;margin-left:250px;"> Nex-G Exuberant Solution Pvt. Ltd.</p><br>
     <p style="font-size:16px;margin-left:250px;">Accounts</p>';
     
        echo $bo;
        $sub="Nex-g Pay Slip";
        
          $headerss = 'From: Nex-G<info@nexg.in>' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headerss.= "MIME-Version: 1.0\r\n"; 
$headerss.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$headerss.= "X-Priority: 1\r\n"; 
       
        $msd=mail($to,$sub,$bo,$headerss);
        if($msd){
            echo "<script type='text/javascript'>alert('Mail Sent Sucessfully');window.location.href='slip.php?sl=$jd';</script>;";
        }
        else{
        echo "<script type='text/javascript'>alert('Mail Sending Failed');window.location.href='slip.php?sl=$jd';</script>;";
        }
    }
            
             }
}
else{ echo "error in query pass".mysql_error();} 
?>
        