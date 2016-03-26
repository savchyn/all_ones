<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");

 $ms=$_GET['dd'];
 $yy=$_GET['yy'];
 $rr=$_GET['rr'];
$halftday=$_GET['half'];
    $absent=$_GET['absent'];
    $halfcut=$_GET['halfcut'];
    $absentcut=$_GET['abc'];
    $toatlcut=$_GET['totalcut'];
//code for mail id of user/employee
 $empid=mysql_query("SELECT * FROM employee_reg WHERE emp_code='$rr';");
while($rrnum=mysql_fetch_array($empid)){
    $to=$rrnum['email'];
}
//end hear
     $body='<div style="margin:50px;color:#990000; margin-top:10px;" name="addcourse" id="addcourse"  >
           <center><img src="images2/111.jpg" height="90" width="90"></center><br>
         <h2 align="center">Nex-G  Employee Salary Slip</h2> <br>
    <table class="table table-bordered" align="center" border="3px solid black;" cellspacing="5" cellpadding="6">';
                  
//code for fetch data from emp_attendance table

     $result=mysql_query("SELECT * FROM emp_attendance WHERE registation_number='$rr' && month='$ms' && year='$yy';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row=mysql_fetch_array($result)){
        
        //$name=$row['emp_name'];
       // $rg=$row['registation_number'];
        $month=$row['month'];
        $year=$row['year']; 
        $salarydate=$month."/".$year;
            }
   }
    else{echo "<script type='text/javascript'>alert('Employee num row error');</script>;"; }
}
else{echo "<script type='text/javascript'>alert('query error');</script>;";}
//end hear

// code for fetch data from emp_salart table
 $res=mysql_query("SELECT * FROM emp_salary WHERE emp_reg='$rr';");
if($res){
              if ($res && mysql_num_rows($res)>0) {
    while($row=mysql_fetch_array($res)){
        
        $name=$row['emp_name'];
       $rg=$row['emp_reg'];
         $pf=$row['pf'];
         $mop=$row['mop'];
         $basic=$row['basic'];
         $medical=$row['medical'];
         $conveyance=$row['conveyance'];
        $gratuity=$row['gratuity'];
         $department=$row['department'];
         $designation=$row['designation'];
         $location=$row['location'];
         $hra=$row['hra'];
         $fb=$row['fb'];
        $total=$row['total'];
        //$month=$row['month'];
       // $year=$row['year']; 
        $tepay=$total-$absentcut-$halfcut-$gratuity;
        $grossde=$toatlcut+$gratuity;
            }
   }
    else{echo "<script type='text/javascript'>alert('Employee num row error of emp_salary table');</script>;"; }
}
else{echo "<script type='text/javascript'>alert('query error emp_salary table');</script>;";}
//end hear
         $body.='<tr><td>Employee  Name :&nbsp;&nbsp;&nbsp;'.$name.'</td><td>Registration Number :&nbsp;&nbsp;&nbsp;'.$rg.'</td></tr>';
              $body.='<tr><td>Department :&nbsp;&nbsp;&nbsp;'.$department.'</td><td>Designation : &nbsp;&nbsp;&nbsp;'. $designation.'</td></tr>';
                $body.='<tr><td>PF No. :&nbsp;&nbsp;&nbsp;'. $pf.'</td><td>MOP : &nbsp;&nbsp;&nbsp;'. $mop.'</td></tr>';
$body.='<tr><td>Location :&nbsp;&nbsp;&nbsp;'.$location.'</td><td>Salary of Month :&nbsp;&nbsp;&nbsp;'.$month.'/'.$year.'</td></tr>';
   $body.=' </table> <table class="table table-bordered" align="center" border="3px solid black;" cellspacing="5" cellpadding="6">';
            $body.='<tr > <th colspan="2" > Earnings</th><th colspan="3">Deductions</th></tr>';
          $body.='<td><b>Description</b></td>';
                $body.='<td><b>Amount</b></td>';
          $body.='<td><b>Description</b></td>';
            $body.='<td><b>No. of Day</b></td>';
                   $body.='<td><b>Amount</b></td> ';
       $body.='<tr><td>Basic</td>  <td> '.$basic.' </td>  <td>Absent</td>  <td>'.$absent.'</td><td> '.$absentcut.'</td> </tr>';
         $body.='<tr>  <td>HRA</td>  <td> '.$hra.'</td>  <td>Half Day <td> '.$halftday.'</td><td>'.$halfcut.' </td></tr>';
          $body.='<tr>   <td>Flexible Benefits</td><td> '.$fb.'</td>  <td>Gratuity</td>  <td></td><td> '.$gratuity.'</td></tr>';
       $body.=' <tr>   <td>Medical</td>  <td>'.$medical.'</td>  <td></td>  <td></td><td></td></tr>';
         $body.=' <tr>   <td>Conveyance</td>  <td> '.$conveyance.'</td>  <td></td>  <td></td><td></td></tr> ';
    $body.=' <tr><td><b>Gross Pay</b></td>  <td><b> '.$total.'</b></td>  <td><b>Gross Deductions</b></td> <td></td><td>'; $body.='<b>'.$grossde.'</b></td></tr><tr><td><b>Net Pay Amount</b></td><td><b>'.$tepay.'</b></td><td></td><td></td><td></td></tr>'; $body.='</table><br><br> <p style="margin-left:780px;"><font  size="4">'.ucfirst($name).'</font></p>
          <p style="margin-left:690px;"><font  size="3">Nex-G Exuberant Solutions Pvt. Ltd.</font></p></div>';   

     $sub="Nex-G Salary Slip";
          $headerss = 'From: Nex-G<info@nexg.in>' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headerss.= "MIME-Version: 1.0\r\n"; 
$headerss.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$headerss.= "X-Priority: 1\r\n"; 
       echo $body;
        $msd=mail($to,$sub,$body,$headerss);
        if($msd){
                 echo '<script type="text/javascript">alert("Mail Sent Sucessfully");window.location.href="salary_slip.php?dd='.$ms.'&yy='.$yy.'&rr='.$rr.'&absent='.$absent.'&half='.$halftday.'&halfcut='.$halfcut.'&abc='.$absentcut.'&totalcut='.$toatlcut.'";</script>;'; 
        }
        else{
 echo '<script type="text/javascript">alert("Mail Sending Failed");window.location.href="salary_slip.php?dd='.$ms.'&yy='.$yy.'&rr='.$rr.'&absent='.$absent.'&half='.$halftday.'&halfcut='.$halfcut.'&abc='.$absentcut.'&totalcut='.$toatlcut.'";</script>;'; 
      }
?>
        
    