
<?
$URL="http://www.exuberantsolutions.com/placements.htm";

header ("Location: $URL");

?>



<html>

<head>

<title>Welcome To Nex-G Exuberant Solutions : Placement Enquiry</title>



<script type="text/javascript">var switchTo5x=true;</script>

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>

<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>





</head>

<body>

<?php

if(isset($_POST['submit'])) {


	$to = "info@nexg.in";

	$subject = "Enquiry from Placement  Pages";

	
	$job_title=$_POST['job_title'];
	
	$no_vacancy= $_POST['no_vacancy'];

	$job_description = $_POST['job_description'];

	$candidate_profile = $_POST['candidate_profile'];

	$experience = $_POST['experience'];
        $country = $_POST['country'];
	$city = $_POST['city'];
        $company_name = $_POST['company_name'];
        $c_p_first_name = $_POST['c_p_first_name'];

	$c_p_last_name = $_POST['c_p_last_name'];
          $c_p_mobile = $_POST['c_p_mobile'];
   $email = $_POST['email'];
   $company_url = $_POST['company_url'];

$message = ("Job Title:  $job_title ,<br
Numbers of vacancies:  $no_vacancy ,<br
Job Description:  $job_description ,<br
Desired Candidate Profile:  $candidate_profile ,<br
Work Exp:  $experience ,<br
Country:  $country ,<br
Company Name:  $company_name ,<br
Contact Person First Name:  $c_p_first_name ,<br
Contact Person First Name:   $c_p_last_name ,<br
Email:  $email ,<br
Mobile:  $c_p_mobile ,<br
Company URL:  $company_url ,<br");  
        
 $header= 'From: ' . "\r\n" .
    'Reply-To:  ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($to, $subject, $message, $header);
		
} else {

	echo "Please Fill Again";

}

?>



<script>

var options={ "publisher": "154058a8-0ac0-42f6-ab4c-7b48fd16bf8f", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}};

var st_hover_widget = new sharethis.widgets.hoverbuttons(options);

</script>

    

</body>



</html>
