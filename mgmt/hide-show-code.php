<?php /*
include('conn.php');
 $mail="m";
$cookie_value = "Mail";

/*if (this.value=='2'){this.form['installment2'].style.visibility='visible', this.form['due_date2'].style.visibility='visible', document.getElementById('trfees').value=parseInt(document.getElementById('trfees').value)+1000;}else {this.form['installment2'].style.visibility='hidden', this.form['due_date2'].style.visibility='hidden'} if (this.value=='3'){document.getElementById('trfees').value=parseInt(document.getElementById('trfees').value)+2000,this.form['installment3'].style.visibility='visible', this.form['due_date3'].style.visibility='visible', this.form['installment2'].style.visibility='visible', this.form['due_date2'].style.visibility='visible'}else {this.form['installment3'].style.visibility='hidden', this.form['due_date3'].style.visibility='hidden'} 
//..............................................................
//checkdate$result=mysql_query("SELECT * FROM trregistration ;");
  $result=mysql_query("SELECT * FROM trregistration WHERE lname='me';");
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){  
      $inst=$row['installment'];
        $date1=time();
    //$date1=date_create($row['toduration']);
	$date2=strtotime($row['toduration']);

	$diff=$date1-$date2;
       $diff=floor($diff/(60*60*24));
	$trstatus=$row['trstatus'];
	$due_date1=strtotime($row['due_date1']);
	$diff1=$due_date1-$date1;
       $diff1=floor($diff1/(60*60*24)); 
	$due_date2=strtotime($row['due_date2']);
	$due_date3=strtotime($row['due_date3']);
	$diff3=$due_date2-$date1;
        $diff3=floor($diff3/(60*60*24));
	$diff4=$due_date3-$date1;
        $diff4=floor($diff4/(60*60*24));
	$id=$row['id'];
       $registraion_cancel=$date1-$due_date1;
         $registraion_cancel_d1=floor($registraion_cancel/(60*60*24));
         $registraion_cancel_s=$date1-$due_date2;
        $registraion_cancel_d2=floor($registraion_cancel_s/(60*60*24));
         $registraion_cancel_d3=$date1-$due_date3;
        //$registraion_cancel_d3=floor($registraion_cancel_t/(60*60*24));
        
        
         //$diff2=floor($diff1/(60*60*24));
    		// $diff5=floor($diff3/(60*60*24));
    		// $diff6=floor($diff4/(60*60*24));	
        echo "Registration Cancel After First installment".$registraion_cancel_d1."<br>"; 
         echo "Registration Cancel After Second Days".$registraion_cancel_d2."<br>";
         echo "Registration Cancel After Third Days".$registraion_cancel_d3."<br>";
        
        
        echo "mail of first installment due date 5 days before".$diff1."<br>";
        echo "mail of Second installment due date 5 days before".$diff3."<br>";
        echo "mail of Third installment due date 5 days before".$diff4."<br>";
         $a=date('Y-m-d');
        echo $a;
        
       $namec=$row['fname'];
           $lm=$row['lname'];
   $mailmm=$namec;
$cookie_value =$lm;
       
setcookie($mail, $cookie_value, time() + (5), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(isset($_COOKIE[$mail])) {
    //echo "<script type='text/javascript'>alert('mail not sen on refresh');window.location.href='hide-show-code.php';</script>;";
    echo "ms";
} else {
      echo "cokke not saved<br>";
     
}

    }}}
        

 $bo='<h2 align="center">ADMISSION LETTER</h2><br>
        <h4 align="center">NEX-G | SKILLS</h4><br>
    <form action="" method="post">
    <table class="table table-bordered" border="1" style="text-align:center;"><tr><th>Training Duration</th><th>Start Date<br><hr><br></th><th>End Date<br><hr><br></th><th>Duration<br><hr><br></th></tr>
        <tr><th>Training Mode</th><td></td></tr>
        <tr><th>Trainee Name</th><td></td></tr>
        <tr><th>Training Name</th><td></td></tr>
         <tr><th>Training Code</th><td></td></tr>
        <tr><th>Registration Number</th><td></td></tr>
        <tr><th>Contact Detail</th><td></td></tr>
        <tr><th>Contact Details</th></tr>
          <tr><th>Training Management</th><td>Sudhanshu Kamboj</td><td>sudhanshu.k@exuberantsolutions.com</td><td>+91-8826900554</td></tr>
        <tr><th>Customer Care Management</th><td>Rakesh Bhadola</td><td>bde@exuberantsolutsolutions.com</td><td>+91-8826900551</td></tr>
        <tr><th>Accounts Management</th><td>Varun Giri</td><td>varun.g@exuberantsolutions.com</td><td>+91-8826900550</td></tr>
        <tr><th>Correspondence Address</th><td>C 28, Second Floor, Sec-65, Noida, Pin201301, INDIA</td><td></td><td>+91-8826900557\n</td></tr>
      </table><br><br><br>
          <p align="right" style="font-size:15px;">Varun Giri <br>
Manager<br>
Nex-G | Skills</p>
        </form>' ; 
echo $bo;  */
 session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");
 $ms=84;
?>


<script type="text/javascript">
      
          function printPage(id) {
    var printContents = document.getElementById(id).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
<script type="text/javascript">
    function val(){
        var em_name = document.msd.courseadd.value;
            if (em_name == "") {
                alert(" Fill Course  Name");
                em_name.focus;
                return false;
            } 
            var dp = document.msd.code.value;
            if (dp == "") {
                alert("Please fill  Course Code");
                dp.focus;
                return false;
            } 
    }
    </script>

<style>
    
    @media print {
    #addcourse {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}
</style>


<div style="clear:both;"></div>
 <div class="rightpanel" style="clear:both;">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            
            <div class="headerright">
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#"> 
           Welcome <b><?php echo $_SESSION['username']?></b>
                   
         <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href="#"><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href="#"><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>-->
                        <li><a href="sign_out.php"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->
    		
            </div><!--headerright-->
       <!--  $pdf_from_file = $client->convertFile('/path/to/your/file.html');
$pdf_from_html = $client->convertHtml('<b>bold</b> and <i>italic</i>'); -->
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Dashboard</h1>
            
        </div><!--pagetitle--><br><br>
   
 <input type="button" value="Print" onclick="printPage('addcourse');" align="right" style="margin-left:50px; width: 6em;  height: 2em;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- <a  href="mailslip.php?sid=<?php echo $ms;?> "  > -->
        <a href="" onclick="ms();"> Send On Email</a><br><br>

      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
          
    
                  <?php  
     $ms=84;
     $result=mysql_query("SELECT * FROM trregistration where id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row=mysql_fetch_array($result)){  
        $inst=$row['installment'];
        $fs=$row['inst_f_submited_fee'];
         $ss=$row['inst_s_submited_fee'];
         $ts=$row['inst_t_submited_fee'];
        $to=$row['email'];
        
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
          //$du=$row['trfees']-$row['reg_amount']-$row['inst_f_submited_fee']-$row['inst_s_submited_fee']-$row['inst_t_submited_fee'];
            
        
   
        
   $bo='<table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
   <h2 style="margin-left:320px;">Nex-G  Pay  Slip</h2> <br><br> <table class="table table-bordered" style="text-align:center;" border="1"><tr><td>Trainee Name : '.$name.' </td><td>Registration Number :  '.$rgs.'</td></tr>
        
    <tr><td>Course Code : '.$co.' </td><td>Time Duratuion : '.$time.' </td></tr>
           
    </table><br>
        <table class="table table-bordered" style="text-align:center;" border="1">
            <tr><td>Course Fees : '.$fee.'</td></tr>
          <tr><td>Date</td><td>Credit</td><td>Due Balance</td><td>Narration</td> </tr>';
           if($inst =='1'){ 
            $bo.='<tr><td> '.$date1.'</td> <td>'.$ins1.'</td> <td><?php echo '.$du1.'</td> <td>'. $narr1.'</td> </tr>';
         } 
        
        if($inst =='2'){ 
          if($ss ==''){
             $bo.='<tr><td>'.$date1.'</td> <td>'.$ins1.'</td> <td>'.$du1.'</td> <td>'.$narr1.'</td> </tr> 
          </table>';
          }
        else{
            $bo.='<tr><td>'. $date1.' </td> <td> '.$ins1.' </td> <td> '.$du2.'</td> <td>'.$narr1.'</td> </tr>
            <tr><td> '.$date2 .'</td> <td>'. $ins2.'</td><td>'.$du2.'</td> <td> '.$narr2.'</td> </tr>'; 
        }
        } 
if($inst =='3'){ 
    
    if($ss =='' && $ts =='') {
            $bo.='<tr><td> '.$date1.' </td> <td> '.$ins1.' </td> <td> '.$du1.'</td> <td> '.$narr1 .'</td> </tr>';
          } 

    elseif( $ts == '') {
            $bo.= '<tr><td> '.$date1.'</td> <td> '.$ins1.'</td> <td>'.$du1.'</td> <td>'.$narr1.' </td> </tr>
            <tr><td>'.$date2.' </td> <td> '.$ins2.'</td> <td> '.$du2.'</td> <td> '.$narr2 .'</td> </tr>';
         
          
         } 
         else {  
             $bo.='<tr><td>'.$date1.' </td> <td> '.$ins1 .'</td> <td>'.$du1.'</td> <td> '.$narr1 .'</td> </tr>
            <tr><td>'.$date2.'</td> <td> '.$ins2.'</td> <td>'.$du2.'</td> <td> '.$narr2.' </td> </tr>
            <tr><td> '.$date3.' </td> <td> '.$ins3.' </td> <td> '.$du3.'</td> <td>'.$narr3.' </td> </tr>';       
 }           
              }
         $bo.='</table>';  
        //echo $bo;
        $sub="Nex-g Pay Slip";
        
          $headerss = 'From: Nex-G<info@nexg.in>' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headerss.= "MIME-Version: 1.0\r\n"; 
$headerss.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$headerss.= "X-Priority: 1\r\n"; 
        //echo $bo;
        $msd=mail($to,$sub,$bo,$headerss);
        if($msd){
        }
        else{
        echo "<script type='text/javascript'>alert('No file found');window.location.href='slip.php';</script>;";}
    }
            
             }
}
else{ echo "error in query pass".mysql_error();} 
?>
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    