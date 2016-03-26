<?php
session_start();
include('conn.php');
if(isset($_POST['submit'])){
     $user=$_SESSION['loguser'];
    $code=$_POST['tcode']; 
    $tnames=$_POST['tname']; 
    $fduration=""; 
	//$_POST['fdate']
    $tduration=""; 
	//$_POST['tdate']
    $feed=$_POST['fsubmit']; 
    $trainee_name=$_POST['fname']; 
    $trainee_lname=$_POST['lname']; 
    $address=$_POST['address']; 
    $city=$_POST['city']; 
    $state=$_POST['state']; 
    $country=$_POST['country']; 
    $pcode=$_POST['pcode']; 
    $mobile=$_POST['mobile']; 
     $phone=$_POST['ph']; 
    $email=$_POST['email']; 
   
    
    $query=mysql_query("INSERT INTO certficate_issue (userid,training_code,training_name,time_from,time_to,feedback_submit,first_name,last_name,address,city,state,country,postal_code,phone,mobile,email,date) VALUES ('$user','$code','$tnames','$fduration','$tduration','$feed','$trainee_name','$trainee_lname','$address','$city','$state','$country','$pcode','$phone','$mobile','$email',now());");
    
    if($query){
        echo "<script type='text/javascript'>alert('Certificate Issue Submitted Sucessfully');window.location.href='user_detail.php';</script>;";
    }
    else{echo "error in data inserting".mysql_error();}
}
//else{echo "Certificate form not submit";}

if(isset($_POST['feedback'])){
   $fduration=""; 
	//$_POST['tfd']
    $tduration="";
	//$_POST['ttd']
    $tnames=$_POST['tname'];
    $program=$_POST['tprogram'];
    $rg_no=$_POST['rn'];
    $email=$_POST['email'];
    $mobile=$_POST['mob'];
     $q1=$_POST['f'];
     $q2=$_POST['s'];
     $q3=$_POST['t'];
     $q4=$_POST['fo'];
     $q5=$_POST['fi'];
    $comment=$_POST['comment']; 
    $t_c=$_POST['tf']; 
    $o_m=$_POST['ts']; 
    $delevery=$_POST['tt']; 
    $pe_info=$_POST['tfs']; 
    $session_dur=$_POST['tfi']; 
    $lmc=$_POST['tsix']; 
    $project_gui=$_POST['tse']; 
     $lab=$_POST['tei']; 
     $placement=$_POST['tni']; 
     $trainner_rating=$_POST['ten']; 
     $over_all=$_POST['tel']; 
     $comemet_man=$_POST['scomment']; 
     $suggestion=$_POST['tcomment']; 
     $tell_friend=$_POST['fsuggest']; 
     $sumit_date=$_POST['ld']; 
    
    
    $res=mysql_query("INSERT INTO trainee_feedback(tmie_duration_from,tmie_duration_to,training_name,training_program,registration_number,email,mobile,q_first,q_second,q_third,q_fourth,q_five,comment,training_contents,organization_of_matirial,delevery_mathod,persantaion_of_information,duration_of_sessions,matirial_level,project_guidance,lab_Infrastructure,placement_support,trainer_rating,our_all_rating,comment_mendotry,additional_suggestion,tell_friend,submit_date,orignal_date) VALUES('$fduration','$tduration','$tnames','$program','$rg_no','$email','$mobile','$q1','$q2','$q3','$q4','$q5','$comment','$t_c','$o_m','$delevery','$pe_info','$session_dur','$lmc','$project_gui','$lab','$placement','$trainner_rating','$over_all','$comemet_man','$suggestion','$tell_friend','$sumit_date',now());");
    
    
     if($res){
        echo "<script type='text/javascript'>alert('feedback Submitted Sucessfully');window.location.href='user_detail.php';</script>;";
    }
    else{echo "error in data inserting".mysql_error();}
    
    
}


if(isset($_POST['daily_feedback'])){
	
	
     $rg_num=$_POST['rg_number'];
	$trainee_na=$_POST['tr_name'];
    $trname=$_POST['trainer_name']; 
    $tmodule=$_POST['tmodule'];
    $ttopic=$_POST['ttopic'];
    $understanding=$_POST['understanding'];
    $comment=$_POST['comment'];
    $date=$_POST['fdate'];
	 $from_hour=$_POST['from_hour'];
	 $from_minute=$_POST['from_minute'];
	 $to_hour=$_POST['to_hour'];
	 $to_minute=$_POST['to_minute'];
	$emailid=$_POST['email'];
	
	
    $to="adarsh@nexg.in";
    $rest=mysql_query("INSERT INTO daily_feedback (registration,trainer_name,training_module,training_topic,understanding,comment,date,from_hour,from_minute,to_hour,to_minute) VALUES ('$rg_num','$trname','$tmodule','$ttopic','$understanding','$comment','$date','$from_hour','$from_minute','$to_hour','$to_minute');");
    
       if($rest){
		   if($_POST['understanding']!='Full'){
	$subject = 'Nex-G Student Daily Feedback Negative';
$message = ("Trainee Name - $trname <br>
Trainee Name - $trainee_na <br>
Registration Number - $rg_num<br>
Training Module - $tmodule<br>
Training Topic - $ttopic<br>
Email - $emailid<br>
Understanding - $understanding<br>
Comment - $comment<br>
Date - $date<br>");  
        
          $header= 'From: info@nexg.in' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
		   mail($to,$subject,$message,$header);
		   
		   }
        echo "<script type='text/javascript'>alert('feedback Submitted Sucessfully');window.location.href='user_detail.php';</script>;";
    }
    else{echo "error in data inserting".mysql_error();}
    
    
}

//else{echo "Feecback not Submitted";}

// code for project feedback submission

if(isset($_POST['project_feedback'])){
     $rg_num=$_POST['rg_number']; 
    $developer_name=$_POST['developer_name']; 
     $project=$_POST['project'];
     $project_lead=$_POST['project_lead'];
     $project_module=$_POST['project_module'];
     $task_completed=$_POST['task_completed'];
     $task_completed_percentege=$_POST['task_completed_percentege'];
	 $issue=$_POST['issue'];
	 $additional_feedback=$_POST['comment'];
	 $fdate=$_POST['fdate'];
if(empty($_FILES['project_data']['name'])){
	$project_document="empty";
	
}
	else{$target="project_docs/".$_FILES['project_data']['name'];
	move_uploaded_file($_FILES['project_data']['tmp_name'],$target);
	$project_document=$_FILES['project_data']['name'];}
    
    $rest=mysql_query("INSERT INTO project_feedback (registration,developer_name,project,project_lead,project_module,task_completed,task_completed_percentege,redflag_issue,additional_feedback,project_files,date) VALUES ('$rg_num','$developer_name','$project','$project_lead','$project_module','$task_completed','$task_completed_percentege','$issue','$additional_feedback','$project_document','$fdate');");
    
       if($rest){
        echo "<script type='text/javascript'>alert('Project feedback Submitted Sucessfully');window.location.href='view_project_feedbacks.php';</script>;";
    }
    else{echo "error in data inserting".mysql_error();}
    
    
}


if(isset($_POST['forgot_password'])){
	
	$email=$_POST['email'];
	$checking=mysql_query("select * from trregistration where email='$email'");
	
	if($checking){
	if(mysql_num_rows($checking)>0){
	if($row=mysql_fetch_array($checking)){
		$to=$row['email'];
		$registation_number=$row['reg_number'];
		
	$subject = 'Password Reset';
$message = "For Password Reset <a href='nexgict.com/ems/mgmnt/trainee_login/password_update.php?register_no=$registation_number'>Click Hear</a>";  
        
          $header= 'From: info@nexg.in' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
		
		mail($to,$subject,$message,$header);
		
		echo "<script type='text/javascript'>alert('Password Rest Link Sent On Your Emailid');window.location.href='index.php';</script>;";
	}
	}
	else{echo "<script type='text/javascript'>alert('Wrong Emailid ,Emailid Not match with our Database');window.location.href='forgot_password.php';</script>;";}	
	}
	else{echo "Error in Checking Query Pass".mysql_error();}
}


?>