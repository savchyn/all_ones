<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
if(isset($_REQUEST['submit']))
{
	$target="attachment/".$_FILES['attachement']['name'];
	move_uploaded_file($_FILES['attachement']['tmp_name'],$target);
	$path="attachment/".$_FILES['attachement']['name'];
    
	 $f=$_FILES['attachement']['name'];
    
	$target1="passport/".$_FILES['passport_attach']['name'];
	move_uploaded_file($_FILES['passport_attach']['tmp_name'], $target1);
	$passport=$target1;
    $fe=$_FILES['passport_attach']['name'];
	
	$target2="academic/".$_FILES['gradattach']['name'];
	move_uploaded_file($_FILES['gradattach']['tmp_name'], $target2);
	$gradattach=$target2;
    
	 $fes=$_FILES['gradattach']['name'];
    
	$target3="academic/".$_FILES['pgradattach']['name'];
	move_uploaded_file($_FILES['pgradattach']['tmp_name'], $target3);
	$pgradattach=$target3;
    
	 $fess=$_FILES['pgradattach']['name'];
    
	$target4="attachment/".$_FILES['attachment1']['name'];
	move_uploaded_file($_FILES['attachment1']['tmp_name'],$target4);
	$attachment1="attachment/".$_FILES['attachment1']['name'];
    
	 $fee=$_FILES['attachment1']['name'];
    
	$target5="attachment/".$_FILES['attachment2']['name'];
	move_uploaded_file($_FILES['attachment2']['tmp_name'],$target5);
	$attachment2="attachment/".$_FILES['attachment2']['name'];
    
     $feee=$_FILES['attachment2']['name'];
    
       // $intaalment=$_POST['installment'];
       //$re=$_POST['email'];
     //$trainingfee=$_POST['trfees'];
	//$total_fee=$trainingfee+$regfee;
    //$dd=mysql_query("SELECT id FROM `trregistration` order by id desc limit 1");
    //$va=$
  
    $tcourse=$_SESSION['b'];
        //$_POST['training_code']_;
    $dat=date('Y-m-d');
    $mm=$_POST['due_date1'];
   // echo "<script type='text/javascript'>alert('current date : $dat and submit date : $mm');window.location.href='trainees.php';</script>;";
    // payment for current day
    if($dat==$mm){ 
	$que="insert into trregistration(trcode,trname,reg_number,fromduration, toduration, trstatus, trmode, othermode, trfees, lname, fname,address, city, state, country, postalcode, countrycode, mobile, local_contact, email, passport_no, passport_date, passport_attach, gradinstitute, gradbranch, gradyear, gradpercentage, gradattach, pgradinstitute, pgradbranch, pgradyear, pgradpercentage, pgradattach, hostel, company, workfrom, workto, profile, attachment, company1, workfrom1, workto1, profile1, attachment1, company2, workfrom2, workto2, profile2, attachment2, reg_amount, installment, installment1, due_date1, installment2, due_date2, installment3, due_date3,inst_f_submited_fee,inst_f_date,registration_date) values('".$_POST['training_code']."', '$tcourse','".$_POST['registration_number']."', '".$_POST['fromduration']."', '".$_POST['toduration']."','".$_POST['trstatus']."', '".$_POST['trmode']."', '".$_POST['othermode']."', '".$_POST['trfees']."', '".$_POST['lname']."', '".$_POST['fname']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['country']."', '".$_POST['postalcode']."', '".$_POST['code']."', '".$_POST['mobile']."', '".$_POST['local_contact']."', '".$_POST['email']."', '".$_POST['passport_no']."', '".$_POST['passport_date']."', '$fe', '".$_POST['gradinstitute']."', '".$_POST['gradbranch']."', '".$_POST['gradyear']."', '".$_POST['gradpercentage']."', '$fes', '".$_POST['pgradinstitute']."', '".$_POST['pgradbranch']."', '".$_POST['pgradyear']."', '".$_POST['pgradpercentage']."', '$fess', '".$_POST['hostel']."', '".$_POST['company']."', '".$_POST['workfrom']."', '".$_POST['workto']."', '".$_POST['profile']."', '$f', '".$_POST['company1']."', '".$_POST['workfrom1']."', '".$_POST['workto1']."', '".$_POST['profile1']."', '$fee', '".$_POST['company2']."', '".$_POST['workfrom2']."', '".$_POST['workto2']."', '".$_POST['profile2']."', '$feee', '".$_POST['reg_amount']."', '".$_POST['installment']."', '".$_POST['installment1']."', '".$_POST['due_date1']."', '".$_POST['installment2']."', '".$_POST['due_date2']."', '".$_POST['installment3']."', '".$_POST['due_date3']."', '".$_POST['installment1']."', '".$_POST['due_date1']."',now())";
	}
	else{
		
	 $que="insert into trregistration(trcode,trname,reg_number,fromduration, toduration, trstatus, trmode, othermode, trfees, lname, fname,address, city, state, country, postalcode, countrycode, mobile, local_contact, email, passport_no, passport_date, passport_attach, gradinstitute, gradbranch, gradyear, gradpercentage, gradattach, pgradinstitute, pgradbranch, pgradyear, pgradpercentage, pgradattach, hostel, company, workfrom, workto, profile, attachment, company1, workfrom1, workto1, profile1, attachment1, company2, workfrom2, workto2, profile2, attachment2, reg_amount, installment, installment1, due_date1, installment2, due_date2, installment3, due_date3,registration_date) values('".$_POST['training_code']."', '$tcourse','".$_POST['registration_number']."', '".$_POST['fromduration']."', '".$_POST['toduration']."','".$_POST['trstatus']."', '".$_POST['trmode']."', '".$_POST['othermode']."', '".$_POST['trfees']."', '".$_POST['lname']."', '".$_POST['fname']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['country']."', '".$_POST['postalcode']."', '".$_POST['code']."', '".$_POST['mobile']."', '".$_POST['local_contact']."', '".$_POST['email']."', '".$_POST['passport_no']."', '".$_POST['passport_date']."', '$fe', '".$_POST['gradinstitute']."', '".$_POST['gradbranch']."', '".$_POST['gradyear']."', '".$_POST['gradpercentage']."', '$fes', '".$_POST['pgradinstitute']."', '".$_POST['pgradbranch']."', '".$_POST['pgradyear']."', '".$_POST['pgradpercentage']."', '$fess', '".$_POST['hostel']."', '".$_POST['company']."', '".$_POST['workfrom']."', '".$_POST['workto']."', '".$_POST['profile']."', '$f', '".$_POST['company1']."', '".$_POST['workfrom1']."', '".$_POST['workto1']."', '".$_POST['profile1']."', '$fee', '".$_POST['company2']."', '".$_POST['workfrom2']."', '".$_POST['workto2']."', '".$_POST['profile2']."', '$feee', '".$_POST['reg_amount']."', '".$_POST['installment']."', '".$_POST['installment1']."', '".$_POST['due_date1']."', '".$_POST['installment2']."', '".$_POST['due_date2']."', '".$_POST['installment3']."', '".$_POST['due_date3']."',now())";
		
	}	
		
	
	$qry=mysql_query($que);

	if($qry){
		// code for automatic genrate registration number
        /*  $rg=mysql_insert_id();
        $ps=$_POST['training_code']."_".$rg;
        $query=mysql_query("UPDATE trregistration SET reg_number='$ps' WHERE id='$rg'");*/
		echo '<script>alert("Record Has Been Inserted!");</script>';  
		
		
		//echo '<script>window.location="trainees.php";</script>';
        
        //$to  = 'nespl.dharmesh@yahoo.com' . ', ';
        // note the comma
	
	/*$to = "feedback@exuberantsolutions.com";*/
        $name=$_POST['fname'];
	$to=$_POST['email'];
		$ps=$_POST['registration_number'];
        $stdate  = $_POST['fromduration'];
        $enddate  = $_POST['toduration'];
        $mode  = $_POST['trmode'];
$trname  = $_POST['fname'] . $_POST['lname'];
        $cour = $_POST['tr_name'];
        $coursecode  = $_POST['training_code'];
        $mobile=$_POST['mobile'];
        //$rgno  = $_POST['email'];
        $toe="sudhanshu.k@exuberantsolutions.com";
        $tos="bdm@exuberantsolutions.com";
        $tot="varun.g@exuberantsolutions.com";
        $tof="ipsita.b@exuberantsolutions.com";
        
        
$subject = 'Nex-G Registration Details';
$message = ("Dear  $name ,\nGreetings!!!\n
Thanks for choosing Nex-G Skills as your training partner.\n 
Your registration process is COMPLETE.\n
Training Start Date - $stdate \n
Training End Date -  $enddate \n
Training Mode - $mode \n
Trainee Name - $trname \n
Training Program -  $tcourse \n
Training Program Code - $coursecode \n
Trainee Registration Number - $ps \n
Trainee EmailId - $to \n
Trainee Mobile. No - $mobile \n
Important Contact Details
-------------------------------------
Training Manager Name -  Sudhanshu Kamboj \n
Training Manager Email ID - sudhanshu.k@exuberantsolutions.com \n
Training Manager Contact Number - +91-8826900554 \n
Training Manager Skype ID - nespl.training.manager\n\n

Customer Care Manager Name - Rakesh Bhadola \n
Customer Care Manager Email ID - bdm@exuberantsolutions.com \n
Customer Care Manager Contact Number - +91-8826900551\n
Customer Care Manager Manager Skype ID - nespl.business.developer\n\n

Accounts Manager Name -  Varun Giri\n
Accounts Manager Email ID - varun.g@exuberantsolutions.com\n
Accounts Manager Contact Number - +91-8826900550\n
Accounts Manager Skype ID - nespl.accounts.manager\n\n

IT Support Manager Name - Ambika Das\n
IT Support Manager Email ID - support@nexg.in\n
IT Support Manager Contact Number - +91-120-4349271\n
IT Support Manager Skype ID - nespl.lab.assistant2\n\n
Regards,\n
Nex-G Skills\n
Address - C-28, 2nd Floor, Sector 65, Noida, INDIA-201301\n
Facebook - https://www.facebook.com/NexgSkills\n
 NOTE: THIS IS A AUTOMATIC COMPUTER GENERATED E-MAIL . PLEASE DO NOT REPLY ON THIS E-MAIL.\n
FOR ANY INQUIRY PLEASE WRITE TO info@nexg.in\n");
        //file tmp name is required  $a=$_FILES['name in input']['tmp_name'];
        //file name in required    $name=$_FILES["name in input"]["name"];
        
        //put this line in $message and name of it is $messsage .="that line";
        //"Content-Disposition: attachment;\n" . " filename=\"$name1\"\n"
    /*
    $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n"
."Content-Transfer-Encoding: base64\r\n"
."Content-Disposition: attachment;\n" . " filename=\"$name\"\n"
."\r\n" */
        
$headers = 'From:Nex-G <info@nexg.in>' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
        
  //code for admission latter     
        
       $subjectss = 'Nex-G Admission Latter'; 
    $que=mysql_query("select * from trregistration where reg_number='$ps'");
        if ($que){
  if ($que && mysql_num_rows($que)>0) {
    if($fetch=mysql_fetch_array($que)){
        $m=$fetch['fromduration'];
        $ms=$fetch['toduration'];
        $date1=date_create($fetch['fromduration']);
	$date2=date_create($fetch['toduration']);
	$diff=date_diff($date1,$date2);
	     $diff->format("%R%a days");
            $mss=$fetch['trmode'];
            $msss=$fetch['fname']." ".$fetch['lname'];
		  $login_fname=$fetch['fname'];
		$login_lname=$fetch['lname'];
            $msd=$fetch['trname'];
            $msdd=$fetch['trcode'];
            $msds=$fetch['reg_number'];
            $e=$fetch['email'];
        $diff->format("%R%a days");
        $pass=rand();
       $ul="http://nexg.in/mgmnt/trainee_login";
        $log_du=$m." To ".$ms;
    
        $bo='<h2 align="center">ADMISSION LETTER</h2><br>
        <h4 align="center">NEX-G | SKILLS</h4><br>
    <form action="" method="post">
    <table class="table table-bordered" border="1" style="text-align:center;"><tr><th>Training Duration</th><th>Start Date<br><hr><br>'.$m.'</th><th>End Date<br><hr><br>'.$ms.'</th><th>Duration<br><hr><br>'.$diff->format('%R%a days').'</th></tr>
        <tr><th>Training Mode</th><td>'.$mss.'</td></tr>
        <tr><th>Trainee Name</th><td>'.$msss.'</td></tr>
        <tr><th>Training Name</th><td>'.$msd.'</td></tr>
         <tr><th>Training Code</th><td>'.$msdd.'</td></tr>
        <tr><th>Registration Number</th><td>'.$msds.'</td></tr>
        <tr><th>Contact Detail</th><td>'.$e.'</td></tr>
        <tr><th>Contact Details</th></tr>
          <tr><th>Training Management</th><td>Sudhanshu Kamboj</td><td>sudhanshu.k@exuberantsolutions.com</td><td>+91-8826900554</td></tr>
        <tr><th>Customer Care Management</th><td>Rakesh Bhadola</td><td>bde@exuberantsolutsolutions.com</td><td>+91-8826900551</td></tr>
        <tr><th>Accounts Management</th><td>Varun Giri</td><td>varun.g@exuberantsolutions.com</td><td>+91-8826900550</td></tr>
        <tr><th>Correspondence Address</th><td>C 28, Second Floor, Sec-65, Noida, Pin201301, INDIA</td><td></td><td>+91-8826900557</td></tr>
      
        </table><br><br><br>
          <p align="right" style="font-size:15px;">Varun Giri <br>
Manager<br>
Nex-G | Skills</p>
        </form>' ;  
        $headerss = 'From: info@nexg.in' . "\r\n" .
			'Cc: info@nexg.in' . "\r\n".
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headerss.= "MIME-Version: 1.0\r\n"; 
$headerss.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$headerss.= "X-Priority: 1\r\n"; 
        // code for login mail
        
        
      $lo_subject = 'Nex-G Login Details';
$log_message = ("Dear  $name ,<br>Greetings!!!<br>
Your Nexg Login Details Are :<br>
URL : $ul<br>
Id : $e<br>
Password : $pass<br><br>
Regards<br>
Nex-G | Skills");  
        
          $log_header= 'From: info@nexg.in' . "\r\n" .
			  'Cc: info@nexg.in' . "\r\n".
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $log_header.= "MIME-Version: 1.0\r\n"; 
$log_header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$log_header.= "X-Priority: 1\r\n"; 
        
        //end hear..................................
        
        // code for insert data in  login table
     $log=mysql_query("INSERT INTO login_detail (username,password,duration,course_name,registration,trainee_fname,trainee_lname) VALUES ('$e','$pass','$log_du','$msd','$msds','$login_fname','$login_lname')");   
        if($log){
       //echo "<script type='text/javascript'>alert('login detail inserted');";
        
        }
        else{echo "error in login detail insertion".mysql_error();}
        
        
        //login insertion end hear
        
// for mail send
       $ms=mail($to, $subject, $message, $headers);
        mail($to, $subjectss, $bo, $headerss);
        mail($toe, $subject, $message, $headers);
        mail($tos, $subject, $message, $headers);
        mail($tot, $subject, $message, $headers);
        mail($tof, $subject, $message, $headers);
        //mail for login detail
        mail($to, $lo_subject, $log_message, $log_header);
        
        
        if($ms){
           echo " mail send sucessfully";
echo  "<script type='text/javascript'>alert('Mail Send Admission Letter And Registration Details Successfully');window.location.href='trainees.php';</script>;";
            
        }
        else{
            echo "<script type='text/javascript'>alert('Mail Not Send Admission Letter And Registration Details');window.location.href='trainees.php';</script>;".mysql_error();
        }
	
    }
    }
        }
	}
    else{
        echo mysql_error();
    }
}

 include("header.php");?>


<script src="jquery.min.js"></script>
<script type="text/javascript" >
    // for firsr checkbox
    
$(document).ready(function() {
$('#check').click(function() {
var first=$('#trfees').val();
var second=$('#sc').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
     // for second checkbox
    $(document).ready(function() {
$('#scbox').click(function() {
var first=$('#trfees').val();
var second=$('#fs').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
    
     // for third checkbox
    
    
     $(document).ready(function() {
$('#thbox').click(function() {
var first=$('#trfees').val();
var second=$('#th').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
     // for fourth checkbox
    
    
     $(document).ready(function() {
$('#fobox').click(function() {
var first=$('#trfees').val();
var second=$('#fo').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
     // for fifth checkbox
    
     $(document).ready(function() {
$('#fibox').click(function() {
var first=$('#trfees').val();
var second=$('#fi').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
     // for sixth checkbox
    
     $(document).ready(function() {
$('#sibox').click(function() {
var first=$('#trfees').val();
var second=$('#six').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
     // for seventh checkbox
     $(document).ready(function() {
$('#sebox').click(function() {
var first=$('#trfees').val();
var second=$('#se').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            $('#trfees').val(subt);
        }
        else
        {
        		$('#trfees').val(add);
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
    // for Other Discount
    
     $(document).ready(function() {
$('#other').click(function() {
var cod=$('#code').val();
    var first=$('#trfees').val();
var second=$('#ot').val();
var subt=first-second;
var add=parseInt(first)+parseInt(second);
        if ($(this).is(':checked')) {
            if(cod=='nexgd12'){
            $('#trfees').val(subt);
            }
        }
        else
        {
             if(cod=='nexgd12'){
        		$('#trfees').val(add);
             }
        }
    $('#hid').val($('#trfees').val()); 
    });
});
    
    
    
    //code for installment increase when installment is 2 and 3
    
 
</script>
<!--
    
      /*    function second(ed){
          // if(document.getElementsByName('ff').checked==true){
      var sc = document.getElementsByName('sc')[0].value;  
    var trfees = document.getElementsByName('trfees')[0].value;
        var total = (+trfees)-(+sc);
        document.getElementsByName('trfees')[0].value = total; 
}        
   }

    
 function getTotal() {
        var fs = document.getElementsByName('fs')[0].value;
        var sc = document.getElementsByName('sc')[0].value;
         var th = document.getElementsByName('th')[0].value;
         var fo = document.getElementsByName('fo')[0].value;
         var fi = document.getElementsByName('fi')[0].value;
         var six = document.getElementsByName('six')[0].value;
         var se = document.getElementsByName('se')[0].value;
         var fee = document.getElementsByName('trfees')[0].value;
        var total = (+fee)-((+fs)+(+sc)+(+th)+(+fo)+(+fi));
        document.getElementsByName('trfees')[0].value = total; 
    }*/
-->
<script>
        function changeSecond(first){
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("second").innerHTML=res;
            }
          }
        xmlhttp.open("GET","call_script.php?first="+first,true);
        xmlhttp.send();
        }
        </script>
        <script>
        function trainingcourse(first){
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("trainingcode").innerHTML=res;
            }
          }
        xmlhttp.open("GET","call_script1.php?first="+first,true);
        xmlhttp.send();
        }
        </script>
<script type="text/javascript">
       function replace( hide,show ,ht) {
            var vis = (ht.checked) ? "block" : "none";
  document.getElementById(hide).style.display=vis;
  document.getElementById(show).style.display=vis;
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
<script type="text/javascript">
    function valid(){
        
	 var reg_number = document.check.registration_number.value;
            if (reg_number == "") {
                alert(" Fill Registration Number!");
               reg_number.focus;
                return false;
            } 
       var em_name = document.check.fromduration.value;
            if (em_name == "") {
                alert(" Fill Training Time Duration From!");
               em_name.focus;
                return false;
            } 
            var dp = document.check.toduration.value;
            if (dp == "") {
                alert("Please fill  Training Time Duration TO ");
                dp.focus;
                return false;
            }
           var em_rg = document.check.fname.value;
            if ( em_rg == "") {
                alert(" Fill First Name");
                em_rg.focus;
            return false;
               
            }
              var em_rgg = document.check.address.value;
            if ( em_rgg == "") {
                alert(" Fill Address");
                em_rgg.focus;
            return false;
               
            }
          
    
             
    var em = document.check.city.value;
            if (em == "") {
                alert(" Fill City!");
                em.focus;
                return false;
            } 
            var dps = document.check.state.value;
            if (dps == "") {
                alert(" fill State");
                dps.focus;
                return false;
            }         
             
             
              var emss = document.check.mobile.value;
            if (emss == "") {
                alert(" Fill Contact Number!");
                emss.focus;
                return false;
            } 
            var dpsa = document.check.state.value;
            if (dpsa == "") {
                alert(" fill state");
                dpsa.focus;
                return false;
            }         
             
             
              var empc = document.check.postalcode.value;
            if (empc == "") {
                alert(" Fill Postal Code!");
                empc.focus;
                return false;
            } 
           
                   
     var em = document.check.email.value;
            var s = "@";
            if (!em.match(s)) {
                alert("enter a valid email..");
                em.focus;
                return false;
            }  
               
         var dpsm = document.check.trfees.value;
            if (dpsm == "") {
                alert(" fill Training Fee");
                dpsm.focus;
                return false;
            } 
         var dpsmpp = document.check.reg_amount.value;
            if (dpsmpp == "") {
                alert(" fill Training Fee");
                dpsmpp.focus;
                return false;
            } 
         var dpsmss = document.check.installment1.value;
            if (dpsmss == "") {
                alert(" fill Training Fee");
                dpsmss.focus;
                return false;
            } 
        
        
    }
      </script>
<script>
    function inscheck(checkvalue)
    {
        //var trfees=document.getElementById('trfees').value;
        var tmpfees=document.getElementById('hid').value;
        if (checkvalue=='2')
        {
            //tmpfees=trfees;
            tmpfees=parseInt(tmpfees)+1000;
            /*document.getElementById('trfees').value=parseInt(tmpfees)+1000;
            tmpfees=document.getElementById('trfees').value-1000; */
            document.getElementById('installment2').style.visibility = 'visible'; 
           document.getElementById('demo4').style.visibility = 'visible';
         document.getElementById('installment3').style.visibility = 'hidden'; 
           document.getElementById('demo5').style.visibility = 'hidden';
            
   
            
        }
        else if (checkvalue=='3')
            {
               // tmpfees=trfees;
                tmpfees=parseInt(tmpfees)+2000;
           /* document.getElementById('trfees').value=parseInt(tmpfees)+2000;
            tmpfees=document.getElementById('trfees').value-2000;*/
            document.getElementById('installment2').style.visibility = 'visible'; 
           document.getElementById('demo4').style.visibility = 'visible';
                 document.getElementById('installment3').style.visibility = 'visible'; 
           document.getElementById('demo5').style.visibility = 'visible';
        }
        else 
        {
             document.getElementById('installment2').style.visibility = 'hidden'; 
           document.getElementById('demo4').style.visibility = 'hidden';
                 document.getElementById('installment3').style.visibility = 'hidden'; 
           document.getElementById('demo5').style.visibility = 'hidden';
        }
        document.getElementById('trfees').value=tmpfees;
    }
</script>
<script>
    $(document).ready(function(){
        $("#trfees").focusout(function(){
       $('#hid').val($('#trfees').val()); 
        });
    });
</script>

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
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Dashboard</h1>
            
        </div><!--pagetitle-->
    <div style="margin:50px;color:#990000; margin-top:10px" name="course" id="course" >
    <form action="" method="post" enctype="multipart/form-data" name="check" onsubmit="return valid();">
    <table class="table table-bordered" style="text-align:center;">
    <tr><td>Training Name</td><td>
		<select name="tr_name" onchange="trainingcourse(this.value)">
		<?php 
		$qur=mysql_query("select * from training_courses order by training_name Asc");
		while($fetch=mysql_fetch_array($qur)){
			echo "<option value=".$fetch['id'].">".$fetch['training_name']."</option>";
			}
		?>		
		</select> 
        
    </td> <td><a href="add_course.php" style="font-size:15px;text-decoration:none;" >&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;  &nbsp;     &nbsp;    &nbsp;    &nbsp;  &nbsp;     &nbsp;  &nbsp;    &nbsp; &nbsp; Add Course</a></td>  
     
        
    </tr>
    
    <tr><td>Training Code</td><td><select id="trainingcode" name="training_code"><option>NES_SK_482</option></select></td></tr>
       <tr><td>Registration Number</td><td><input type="text" name="registration_number" placeholder="Registration Number"></td></tr>
    <tr><td>Training Duration</td><td><input type="text" name="fromduration" placeholder="From"  onclick="javascript:NewCssCal('demo1')" id="demo1"><input type="text" name="toduration" placeholder="To" onclick="javascript:NewCssCal('demo2')" id="demo2" ></td></tr>
    <tr><td>Training Status</td><td><select name="trstatus">
		<option>Registered</option> 
		<option>Training Started</option> 
		<option>Training Completed</option> 
		<option>Unregistered</option> 
    </select></td></tr>
    <tr><td>Training Mode</td><td><select name="trmode"  onchange="if (this.value=='other'){this.form['othermode'].style.visibility='visible'}else {this.form['othermode'].style.visibility='hidden'};">
		<option>Regular</option>    
		<option>Weekend</option>    
		<option>Online</option>    
		<option>Onsite</option>    
		<option value="other">Other</option>    
    </select><input type="text" name="othermode" style="visibility:hidden;" placeholder="Please Mention"  ><input type="text" name="other1" style="visibility:hidden;" placeholder="Please Mention"  ></td></tr>
    
    <tr><td>Name</td><td><input type="text" name="lname" placeholder="Enter Last Name"><input type="text" name="fname" placeholder="Enter First Name"></td></tr>
    <tr><td>Address</td><td><textarea name="address" rows="5" cols="20" placeholder="Enter Your Address"></textarea></td></tr>
    <tr><td>City</td><td><input type="text" name="city" placeholder="Enter Your City"></td></tr>
    <tr><td>State</td><td><input type="text" name="state" placeholder="Enter Your State"></td></tr>  
    <tr><td>Country</td><td><select name="country" onchange="changeSecond(this.value)">
	<?php $qry=mysql_query("select * from country_code");
		while($data=mysql_fetch_array($qry)){
			echo "<option value=".$data['country_name'].">".$data['country_name']."</option>";} ?>
    </select>
    </td></tr>
    <tr><td>Contact No.</td><td><select id="second" name="code" style="width:100px;"><option>93</option></select><input type="text" name="mobile" placeholder="Enter Contact No."></td></tr>
    <tr><td>Local Contact</td><td><input type="text" name="local_code" value="91" readonly="" style="width:88px;"><input type="text" name="local_contact" placeholder="Contact No. of India"></td></tr>
    <tr><td>Postal Code</td><td><input type="text" name="postalcode" placeholder="Enter Postal Code"></td></tr>
    <tr><td>Email Id</td><td><input type="text" name="email" placeholder="Enter Your Email"></td></tr>
    <tr><td>Passport</td><td><input type="text" name="passport_no" placeholder="Passport No."><input type="text" name="passport_date" placeholder="Expiry Date"  onclick="javascript:NewCssCal('demo6')" id="demo6"><input type="file" name="passport_attach"></td></tr>
    <tr><td>Graduation</td><td><input type="text" name="gradinstitute" placeholder="Institute / University Name"><input type="text" name="gradbranch" placeholder="Enter Branch"><input type="text" name="gradyear" placeholder="Years (From-To)"><input type="text" name="gradpercentage" placeholder="percentage"><input type="file" name="gradattach"></td></tr>
    <tr><td>Post Graduation</td><td><input type="text" name="pgradinstitute" placeholder="Institute / University Name"><input type="text" name="pgradbranch" placeholder="Enter Branch"><input type="text" name="pgradyear" placeholder="Years (From-To)"><input type="text" name="pgradpercentage" placeholder="percentage"><input type="file" name="pgradattach"></td></tr>
    <tr><td>Hostel Accommodation</td><td><select name="hostel"><option>No</option><option>Yes</option></select></td></tr>
    <tr><td>Work Experience</td><td><input type="text" name="company" placeholder="Enter Compnay Name"><input type="text" name="workfrom" placeholder="From"><input type="text" name="workto" placeholder="To"><input type="text" name="profile" placeholder="Profile"><input type="file" name="attachement"></td></tr>
    <tr><td></td><td><input type="text" name="company1" placeholder="Enter Compnay Name"><input type="text" name="workfrom1" placeholder="From"><input type="text" name="workto1" placeholder="To"><input type="text" name="profile1" placeholder="Profile"><input type="file" name="attachment1"></td></tr>
    <tr><td></td><td><input type="text" name="company2" placeholder="Enter Compnay Name"><input type="text" name="workfrom2" placeholder="From"><input type="text" name="workto2" placeholder="To"><input type="text" name="profile2" placeholder="Profile"><input type="file" name="attachment2"></td></tr>
    <tr><td style="width:200px;"><h3>Training Fees Details</h3></td></tr>
    <tr><td>Training Fees</td><td><input type="text" name="trfees" placeholder="Enter Training Fees" id="trfees"><input type="text" style="display:none;" id="hid"></label></td></tr>
        
       <!-- code for discount -->
<tr><td style="width:200px;"><h3>Discounts</h3></td></tr>
<tr><td >Festival Discount</td><td><input type="checkbox" id="scbox">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"   name="fs" id="fs"> </td></tr>  
        <tr><td >Group Discount</td><td><input type="checkbox" id="check" name="check">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"  name="sc" id="sc"> </td></tr>
        <tr><td >Re Registration Discount</td><td><input type="checkbox"  id="thbox">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"  name="th" id="th"> </td></tr>
        <tr><td >Professional Discount</td><td><input type="checkbox" id="fobox">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"  name="fo" id="fo"> </td></tr>
        <tr><td >Referral Discount</td><td><input type="checkbox" id="fibox" >&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  placeholder="Amount"  name="fi" id="fi"> </td></tr>
        <tr><td >Defence Personal Discount</td><td><input type="checkbox"  id="sibox" >&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"  name="six" id="six"> </td></tr>
        <tr><td >Physically Challenged Discount</td><td><input type="checkbox" id="sebox">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"  name="se" id="se"> </td></tr>
           <tr><td >Others</td><td><input type="checkbox" id="other">  &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Discount Code"  name="code" id="code" >&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Amount"  name="ot" id="ot"> </td></tr>
        <tr><td style="height:40px;"><h3>Payment Details</h3></td></tr>
    <tr><td>Registration Amount</td><td><input type="text" name="reg_amount" placeholder="Registration amount"></td></tr>
    <tr><td>No. of Installment</td><td><select name="installment" id="install" onchange="inscheck(this.value);">
		<option value="1">1</option>  
		<option value="2">2</option>  
		<option value="3">3</option>  
    </select></td></tr>
    <tr><td>Installment</td><td><input type="text" name="installment1" placeholder="Installment-1 amount"><input type="text" name="due_date1" onclick="javascript:NewCssCal('demo3')" id="demo3" placeholder="Due Date"></td></tr>
    <tr><td></td><td><input type="text" style="visibility:hidden;" name="installment2" id="installment2" placeholder="Installment-2 amount"><input type="text" name="due_date2" onclick="javascript:NewCssCal('demo4')" id="demo4" placeholder="Due Date" style="visibility:hidden;"></td></tr>
    <tr><td></td><td><input type="text" style="visibility:hidden;" name="installment3" id="installment3" placeholder="Installment-3 amount"><input type="text" name="due_date3"  onclick="javascript:NewCssCal('demo5')" id="demo5" placeholder="Due Date" style="visibility:hidden;"></td></tr>
        </table><br>
        <input type="submit" value="Submit" name="submit" style="margin-left:450px;">
        </form>
        </div> 
     
    <!-- <div  name="addcourse" id="addcourse" style="display:none;">

      <div style="margin:50px;color:#990000; margin-top:10px"  >
    <form action="" method="post" onsubmit="return val();" name="msd">
    <table class="table table-bordered" style="text-align:center;">
    <tr><td>Course Name: <input type="text" name="courseadd" id="courseadd" ></td>
        
    <td>Course Code: <input type="text" name="code" id="code" ></td> <td><input type="submit" value="Add" name="add" ></td>
        
    </tr></table></form><br> 
    
if(isset($_POST['add'])){
    $co=$_POST['courseadd'];
    $code=$_POST['code'];
    $query=mysql_query("INSERT INTO training_courses (training_name,training_code) VALUES ('$co','$code');");
    if($query){
        echo "Course Added Successfully";
    }
    else{
        echo "error in course adding".mysql_error();
    }
}         
   </div> -->
   
     </div>   
	 </div>         
                     
    
    <div class="clearfix"></div>
    
     <!--footer-->
    
</div>
    
<!--mainwrapper-->

</body>
</html>   