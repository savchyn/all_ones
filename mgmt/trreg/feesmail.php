

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "86400";

$dt=date_create();
$today=date_format($dt, 'Y-m-d ');
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in 10 second!";
    ?>
    </body>
</html>


<?php 
session_start();
include("conn.php");
session_start();
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

$result=mysql_query("SELECT * FROM trregistration ;");
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){  
      $inst=$row['installment'];
        $date1=time();
        $name=$row['fname'].$row['lname'];
        $namec=$row['fname'];
        $lm=$row['lname'];
    $date1=date_create($row['toduration']);
       $sub_inst1=$row['inst_f_submited_fee']; 
         $sub_inst2=$row['inst_s_submited_fee']; 
         $sub_inst3=$row['inst_t_submited_fee']; 
        $to=$row['email'];
        $msd=$row['due_date1'];
            $msa=$row['installment1'];
        $msd2=$row['due_date2'];
            $msa2=$row['installment2'];
        $msd3=$row['due_date3'];
            $msa3=$row['installment3'];
        $toduration=$row['toduration']
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
         $registraion_cancel_t=$date1-$due_date3;
        $registraion_cancel_d3=floor($registraion_cancel_t/(60*60*24));
        // code for registraion cancel if not submit feed after 10 days of due date
 // for regestration cancel
		
		
		  if(!isset($_COOKIE[$cookie_name])) {
      //echo "<script type='text/javascript'>alert('mail not sen on refresh');window.location.href='trainees.php';</script>;";
if($today<$toduration){
		
		
        if($inst=='1'){
            // code for checking installment is submitted or not
            if($sub_inst1==''){
        if($registraion_cancel_d1 >= '1'){
            $up=mysql_query("UPDATE trregistration SET trstatus='unregistered' WHERE id='$id';");
         // echo "<script>location.href ='trainees.php'</script>";
            //mail for registration cancel
             $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd \n Your due Amount is - $msa \nInstallment Number - 1 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
                if($registraion_cancel_d1 == '0'){
                   $tos="varun.g@exuberantsolutions.com";
					
                    $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd \n Your due Amount is - $msa \nInstallment Number - 1 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n"); 
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
            //..............end hear
        } 
        
        else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        } 
            }
            else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        } 
    }
          
        
        if($inst=='2'){
            if($sub_inst1=='' || $sub_inst2==''){
                if($sub_inst1==''){
        if($registraion_cancel_d1 >= '1'){
            $up=mysql_query("UPDATE trregistration SET trstatus='unregistered' WHERE id='$id';");
         // echo "<script>location.href ='trainees.php'</script>";
            
             $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd \n Your due Amount is - $msa \nInstallment Number - 1 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
                if($registraion_cancel_d1 == '0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd \n Your due Amount is - $msa \nInstallment Number - 1 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n"); 
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
            
        }
             else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        }     
                
                
                }
        elseif($sub_inst1!='' && $sub_inst2==''){
         if($registraion_cancel_d2 >= '1'){
            $ups=mysql_query("UPDATE trregistration SET trstatus='unregistered' WHERE id='$id';");
         // echo "<script>location.href ='trainees.php'</script>";
             
             $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd2 \n Your due Amount is - $msa2 \nInstallment Number - 2 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
                if($registraion_cancel_d2 == '0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd2 \n Your due Amount is - $msa2 \nInstallment Number - 2 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n"); 
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                } 
             
        }
         else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        } 
        }
        
        else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        } 
            }
            
            else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        }
    }
        
        if($inst=='3'){
             if($sub_inst1=='' || $sub_inst2==''||$sub_inst3==''){
              if($sub_inst1==''){   
        if($registraion_cancel_d1 >= '10'){
            $up=mysql_query("UPDATE trregistration SET trstatus='unregistered' WHERE id='$id';");
         // echo "<script>location.href ='trainees.php'</script>";
            
            
            
             $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd \n Your due Amount is - $msa \nInstallment Number - 1 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
                if($registraion_cancel_d1 == '0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd \n Your due Amount is - $msa \nInstallment Number - 1 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n"); 
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
        } 
              
              else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        }  
              }
        elseif($sub_inst1!='' && $sub_inst2==''){
        if($registraion_cancel_d2 >= '1'){
            $ups=mysql_query("UPDATE trregistration SET trstatus='unregistered' WHERE id='$id';");
         // echo "<script>location.href ='trainees.php'</script>";
            
             $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd2 \n Your due Amount is - $msa2 \nInstallment Number - 2 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
                if($registraion_cancel_d2 == '0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd2 \n Your due Amount is - $msa2 \nInstallment Number - 2 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n"); 
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
            
            
        }
         else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        } 
        
        }
                 elseif($sub_inst1!='' && $sub_inst2!='' && $sub_inst3==''){
        
        if($registraion_cancel_d3 >= '1'){
            $upss=mysql_query("UPDATE trregistration SET trstatus='unregistered' WHERE id='$id';");
         // echo "<script>location.href ='trainees.php'</script>";
            
            
             $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd3 \n Your due Amount is - $msd3 \nInstallment Number - 3\n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
                if($registraion_cancel_d3 == '0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Registration Cancel';
    $body=("Dear - $name \nYour Fees due date is - $msd3 \n Your due Amount is - $msa3 \nInstallment Number - 3 \n
    Is Not Submitted After 1 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n"); 
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
        } 
                     
                     else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
            
        } 
                 
                 }
        else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
            
        } 
             }
            
            
            else{
           $upsss=mysql_query("UPDATE trregistration SET trstatus='registered' WHERE id='$id';");
             //echo '<META HTTP-EQUIV="Refresh" Content="5"; URL=trainees.php">'; 
        }
    }
// code for send mail on due dates.....................................................................................
  
    // $diff2=floor($diff1/(60*60*24));
    		// $diff5=floor($diff3/(60*60*24));
    		// $diff6=floor($diff4/(60*60*24));	
        
        
     		$mail1=$row['email'];
           $to=$mail1; 
        
        //mail for fist installment if no of installment is 1
        // set cookies for send mails to trainee once in a day
        //$mailmm=$namec;
//$cookie_value =$lm;
//setcookie($mailmm, $cookie_value, time() + (86400), "/");

        
            
         if($inst=='1'){
            if($sub_inst1==''){
     		if($diff1<='1'){
              $ms=$row['due_date1'];
                    $m=$row['installment1']; 
    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $m INR \n is on $ms \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
             //code for mail send to varun sir on due date   
                
                if($diff1<='1' && $diff1=='0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $msa INR \n is on $msd \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");   
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
             //............................code end hear   
            } 
         
         else{
             //code for if due date is grater the 5 days
         }
            }
         }
     		
        //mail for ssecond installment if no of installment is 2
         elseif($inst=='2'){
             //first installment
             if($sub_inst1==''){
             if($diff1<='1'){
              $ms=$row['due_date1'];
                    $m=$row['installment1']; 
    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $m INR \n is on $ms \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");   
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                 
                 
                 
              //code for mail send to varun sir on due date   
                
                if($diff1<='1' && $diff1=='0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $msa INR \n is on $msd \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");    
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
             //............................code end hear    
                 
                 
                 
                 
                 
                
            }
                 
             }
             
             //second installment
             
             if( $sub_inst1!='' && $sub_inst2==''){
     		if($diff3<='1'){
                $ms=$row['due_date2'];
                    $m=$row['installment2'];
     		$subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $m INR \n is on $ms \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");  
        
        
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
        $mss=mail($to, $subject, $body, $headers);
     		
            
            //code for mail send to varun sir on due date   
                
                if($diff3<='1' && $diff3=='0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $msa2 INR \n is on $msd2 \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");    
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
             //............................code end hear           
            } 
             
             
             }
         
         }
   // for third installment if no of installment is 2
             
             
             else{
              //for first installment mail  
                 if($sub_inst1==''){
                 if($diff1<='1'){
              $ms=$row['due_date1'];
                    $m=$row['installment1']; 
    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $m INR \n is on $ms \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");    
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                     
                     
                     
                     //code for mail send to varun sir on due date   
                
                if($diff1<='1' && $diff1=='0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $msa INR \n is on $msd \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");    
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
             //............................code end hear 
                
            }
                 }
                 
                 
                  //for second installment mail   
                 if($sub_inst1!='' && $sub_inst2==''){
                 if($diff3<='1'){
                $ms=$row['due_date2'];
                    $m=$row['installment2'];
     		$subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $m INR \n is on $ms \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");  
        
        
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
        $mss=mail($to, $subject, $body, $headers);
                
                 
                 //code for mail send to varun sir on due date   
                
                if($diff3<='1' && $diff3=='0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $msa2 INR \n is on $msd2 \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");    
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
             //............................code end hear 
                 
                 
                 
                 }
                 }
                  //for third installment mail   
                
                 if($sub_inst1!='' && $sub_inst2!='' && $sub_inst3==''){
     		if($diff4<='1'){
                $ms=$row['due_date3'];
                    $m=$row['installment3'];
     		$subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $m INR \n is on $ms \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");     
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
        $mss=mail($to, $subject, $body, $headers);
     		
            //code for mail send to varun sir on due date   
                
                if($diff4<='1' && $diff4=='0'){
                    $tos="varun.g@exuberantsolutions.com";
                    $subject = 'Nex-G Fee Submission';
    $body=("Dear Mr. - $name \n Gentle reminder to inform you, that your due date for remaining amount- $msa3 INR \n is on $msd3 \n Kindly pay the amount by tomorrow to enable us to provide un-interrupted service.\n Your co-operation would be highly appreciated.\n\n
    Regards\n
Varun Giri\n
(Innovation Manager - Admin / Account)\n
Mob:+91-8826900550\n
Ph.:0120-4349271\n
Skype: nespl.accounts.manager\n
Nex-G Exuberant Solutions Pvt. Ltd.,\n
C-28, 2nd Floor, Sec-65,\n
Noida (UP-201301),\n
India \n");    
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
                    
        $mss=mail($to, $subject, $body, $headers);
                    $ms=mail($tos, $subject, $body, $headers);
                
                }
             //............................code end hear 
            
            
            
            }
                 }
             } 
     }
		
	}
		
		else { 
			echo "already sent";
		  }
		
    //................................................................................................
        
        }} }
       
 
    ?>
        