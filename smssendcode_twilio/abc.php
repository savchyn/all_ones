
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
   <input type="text" id="mobile_number" name="mobile_number_code" placeholder="Mobile Number" ><br><br>
  <textarea name="message" placeholde="Write Your Message">Write Text Message</textarea><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Send SMS">
  
</form>
<?php

    if(isset($_POST['mobile_number_code'])){
    
//echo $_POST['mobile_number_code'];

    require "vendor/twilio/sdk/Services/Twilio.php";
echo file_exists("test.txt");
 $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "AC25b077f065860984d4436fffbb180f38";
    $AuthToken = "96a6952aa2cc0947f64f493fd76c2c01";
 
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    $num=$_POST['mobile_number_code'];
    $otp=rand(15000,99000);
    $people = array(
         $num =>$otp,
    );
 
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {
 
        $sms = $client->account->messages->sendMessage(
 
        // Step 6: Change the 'From' number below to be a valid Twilio number 
        // that you've purchased, or the (deprecated) Sandbox number
            "+12016902474", 
 
            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
            "Hey $name, Got It Code!"
        );
 
        // Display a confirmation message on the screen
       //echo "<script type='text/javascript'>alert('OTP Sent On your Number');</script>";
echo "Message send Successfully";
    }

}
