

<?php
$dt=date_create();
$today=date_format($dt, 'Y-m-d ');

$page = $_SERVER['PHP_SELF'];
$sec = "86400";
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
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

		       if(!isset($_COOKIE[$cookie_name])) {
$to="msdusad@gmail.com";
             $subject = 'Testing mail';
    $body=("Dear -  \nYour Fees due date is -  \n Your due Amount is -  \nInstallment Number - 1 \n
    Is Not Submitted After 10 Days Of Due Date . So Your Registration is cancelled. \nPlease come along with your due fees & Charges \n");  
    $headers = 'From: web@nexgict.com' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
            
        $mss=mail($to, $subject, $body, $headers);
					echo "mail sent";
				
} else {
			echo "already sent";
		
					
				}



			?>