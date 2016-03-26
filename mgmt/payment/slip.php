
<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");
 $ms=$_GET['sl'];
if(!isset($_SESSION['number'])) 
{ 
     $inslipnos=mysql_query("SELECT * FROM slip;");
    while($sl=mysql_fetch_array($inslipnos)){
$_SESSION['number'] = $sl['slipno']; 
    }
}else{ 
    
$_SESSION['number'] = $_SESSION['number'] + 1; 
  $inslipno=mysql_query("UPDATE slip SET slipno='{$_SESSION['number']}';");
} 
 

?>
<style>
    tr,td,th{
border:2px solid black; 
    }
    
</style>

<script type="text/javascript">        

          function printPage(id) {
    var printContents = document.getElementById(id).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();

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
    	</div><!--hea 600
derpanel-->
        <div class="breadcrumbwidget">
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1 align="center">Payment Slip</h1>
            
        </div><!--pagetitle--><br><br>
   
 <input type="button" value="Print" onclick="printPage('addcourse');" align="right" style="margin-left:50px; width: 6em;  height: 2em;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- <a  href="mailslip.php?sid=<?php echo $ms;?> "  > -->
        <a href="hide-show-code.php?ids=<?php echo $ms?>&slno=<?php echo $_SESSION['number'];?>"> Send On Email</a><br><br>

      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
           <center><img src="images2/111.jpg" height="30" width="90" ></center><br><br>
          <h2 align="center">Nex-G  Payment  Slip</h2> <br><br>
          <p>Sr. No. <?php echo $_SESSION['number'];?></p><br>
    <table class="table table-bordered" style="text-align:center;border:2px solid black;" cellspacing="5" cellpadding="6">
                  <?php  
     $ms=$_GET['sl'];
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
        $registration_date=$row['registration_date'];
		 $registration_fee=$row['reg_amount'];
		$reg_narration="Registration Fees";
          //$du=$row['trfees']-$row['reg_amount']-$row['inst_f_submited_fee']-$row['inst_s_submited_fee']-$row['inst_t_submited_fee'];
        ?>     
    <tr ><td >Trainee Name : <?php echo $name;  ?></td><td>Registration Number : <?php echo $rgs;?></td></tr>
        
    <tr><td>Course Code : <?php echo $co; ?></td><td>Registration Date : <?php echo $registration_date; ?></td></tr>
           
    </table><br>
        <table class="table table-bordered" style="text-align:center;border:2px solid black;">
            <tr><td>Course Fees : <?php echo $fee; ?></td><td></td><td></td><td></td></tr>
          <tr><td>Date</td><td>Credit</td><td>Due Balance</td><td>Narration</td> </tr>
            <?php if($inst =='1'){ 
            if($fs!=''){
            ?>
             <tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr> 
            <tr><td><?php echo $date1 ;   ?></td> <td><?php echo $ins1   ;?></td> <td><?php echo $du1;   ?></td> <td><?php echo $narr1   ;?></td> </tr> 
         <?php }
        else{
			?><tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr> <?php
			//echo "No Fees Submitted Yet";
		}
        
        } 
        
        
        elseif($inst =='2'){ 
          if($fs !='' && $ss ==''){?>
			<tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr>
            <tr><td><?php echo $date1 ;   ?></td> <td><?php echo $ins1   ;?></td> <td><?php echo $du1;   ?></td> <td><?php echo $narr1   ;?></td> </tr> 
          </table>
          
         <?php }
        elseif($fs !='' && $ss !='' ){?>
		  <tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr>
            <tr><td><?php echo $date1 ;   ?></td> <td><?php echo $ins1   ;?></td> <td><?php echo $du2;   ?></td> <td><?php echo $narr1   ;?></td> </tr>
            <tr><td><?php echo $date2 ;?></td> <td><?php echo $ins2 ;?></td> <td><?php echo $du2; ?></td> <td><?php echo $narr2 ;?></td> </tr>
            
         
      <?php  }
            elseif($fs =='' && $ss !=''){
            
          ?> <tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr>
		  <tr><td><?php echo $date2 ;?></td> <td><?php echo $ins2 ;?></td> <td><?php echo $du2; ?></td> <td><?php echo $narr2 ;?></td> </tr>
            <?php
            }
            else{ 
				?><tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr> <?php
				//echo "No Fees Submitted Yet";
			}
        } 
else{ 
    
    if($fs!='' && $ss =='' && $ts =='') {?>
		  <tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr>
            <tr><td><?php echo $date1 ;   ?></td> <td><?php echo $ins1   ;?></td> <td><?php echo $du1;   ?></td> <td><?php echo $narr1   ;?></td> </tr>
         
          
        <?php  } 

    elseif( $fs!='' && $ss !='' && $ts == '') {?>
		  <tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr>
            <tr><td><?php echo $date1 ;   ?></td> <td><?php echo $ins1   ;?></td> <td><?php echo $du1;   ?></td> <td><?php echo $narr1   ;?></td> </tr>
            <tr><td><?php echo $date2 ;?></td> <td><?php echo $ins2 ;?></td> <td><?php echo $du2; ?></td> <td><?php echo $narr2 ;?></td> </tr>
         
          
        <?php  } 
         elseif($fs!='' && $ss !='' && $ts != ''){   ?>
		  <tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr>
            <tr><td><?php echo $date1 ;   ?></td> <td><?php echo $ins1   ;?></td> <td><?php echo $du1;   ?></td> <td><?php echo $narr1   ;?></td> </tr>
            <tr><td><?php echo $date2 ;?></td> <td><?php echo $ins2 ;?></td> <td><?php echo $du2; ?></td> <td><?php echo $narr2 ;?></td> </tr>
            <tr><td><?php echo $date3 ;?></td> <td><?php echo $ins3 ;?></td> <td><?php echo $du3; ?></td> <td><?php echo $narr3 ;?></td> </tr>
        
          
        <?php }  
    else{
		?><tr><td><?php echo $registration_date ;   ?></td> <td><?php echo $registration_fee   ;?></td> <td></td> <td><?php echo $reg_narration   ;?></td> </tr> <?php
		//echo "No Fees submitted yet";
	}
              
              }
        
  //Code For Send Slip On email  
    /*  $sub="Nex-G Pay Slip";
   $bo=' <h2 style="margin-left:320px;">Nex-G  Pay  Slip</h2> <br><br>
   <table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
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
        
        $headerss = 'From: Nex-G<info@nexg.in>' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headerss.= "MIME-Version: 1.0\r\n"; 
$headerss.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$headerss.= "X-Priority: 1\r\n"; 
       
    
        //$ms=mail($to,$sub,$bo,$headerss);
        
        */
    //.......................end hear
    }
              ?> </table> 
<br><br><br><br><br><br><p style="font-size:16px;margin-left:00px;"> Nex-G Exuberant Solution Pvt. Ltd.</p><br>
     <p style="font-size:16px;margin-left:00px;">Accounts</p>
     
     <?php 
             }
}

else{ echo "error in query pass".mysql_error();} 


//mysql_connect("localhost","root","password","db");
?>
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    