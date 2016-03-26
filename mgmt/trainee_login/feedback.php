<html>
    
    <head>
<link rel="stylesheet" href="../mgmt/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="../mgmt/prettify/prettify.css" type="text/css" />
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            <script>
  $(document).ready(function() {
    $("#fdate").datepicker();
  });
      $(document).ready(function() {
    $("#tdate").datepicker();
  });
                 $(document).ready(function() {
    $("#tfd").datepicker();
  });
      $(document).ready(function() {
    $("#ttd").datepicker();
  });
                $(document).ready(function() {
    $("#ld").datepicker();
  });
        </script>
        
        
        
        <script type="text/javascript">
       function replace( hide,hides,show ) {
  document.getElementById(hide).style.display="none";
document.getElementById(hides).style.display="none";
  document.getElementById(show).style.display="block";
}
        
    </script>
        
        
        <script type="text/javascript">
         function valid(){
            var em_name = document.check.tcode.value;
            if (em_name == "") {
                alert(" Fill Traning  Code!");
                em_name.focus;
                return false;
            } 
            var dp = document.check.tname.value;
            if (dp == "") {
                alert("Please fill  Traning Name");
                dp.focus;
                return false;
            }
           var em_rg = document.check.fdate.value;
            if ( em_rg == "") {
                alert(" Fill Training duration Date From");
                em_rg.focus;
            return false;
               
            }
              var em_rgg = document.check.tdate.value;
            if ( em_rgg == "") {
                alert(" Fill Training duration Date To");
                em_rgg.focus;
            return false;
               
            }
          
    
             
    var em = document.check.fname.value;
            if (em == "") {
                alert(" Fill Name!");
                em.focus;
                return false;
            } 
            var dps = document.check.address.value;
            if (dps == "") {
                alert(" fill Address");
                dps.focus;
                return false;
            }         
             
             
              var emss = document.check.city.value;
            if (emss == "") {
                alert(" Fill City!");
                emss.focus;
                return false;
            } 
            var dpsa = document.check.state.value;
            if (dpsa == "") {
                alert(" fill state");
                dpsa.focus;
                return false;
            }         
             
             
              var empc = document.check.pcode.value;
            if (empc == "") {
                alert(" Fill Postal Code!");
                empc.focus;
                return false;
            } 
            var dpsm = document.check.mob.value;
            if (dpsm == "") {
                alert(" fill Mobile Number");
                dpsm.focus;
                return false;
            } 
                   
     var em = document.check.email.value;
            var s = "@";
            if (!em.match(s)) {
                alert("enter a valid email..");
                em.focus;
                return false;
            }  
             
             
             
         }   
            
            
           //for second trainee feedback
            
            function traineefeedback(){
                
                var em_rg = document.checks.tfd.value;
            if ( em_rg == "") {
                alert(" Fill Training duration Date From");
                em_rg.focus;
            return false;
               
            }
              var em_rgg = document.checks.ttd.value;
            if ( em_rgg == "") {
                alert(" Fill Training duration Date To");
                em_rgg.focus;
            return false;
               
            }
                var em = document.checks.tname.value;
            if (em == "") {
                alert(" Fill Name!");
                em.focus;
                return false;
            } 
                 var emss = document.checks.tprogram.value;
            if (emss == "") {
                alert(" Fill Training Program!");
                emss.focus;
                return false;
            } 
                
                
                 var dpsa = document.checks.rn.value;
            if (dpsa == "") {
                alert(" fill Registration Number");
                dpsa.focus;
                return false;
            }       
                
                
                var em = document.checks.email.value;
            var s = "@";
            if (!em.match(s)) {
                alert("enter a valid email..");
                em.focus;
                return false;
            } 
                 var dpsm = document.checks.mob.value;
            if (dpsm == "") {
                alert(" fill Mobile Number");
                dpsm.focus;
                return false;
            } 
                  var ems = document.checks.comment.value;
           
            if (ems=="") {
                alert("Fill the Comment");
                ems.focus;
                return false;
            } 
                  var emss = document.checks.scomment.value;
           
            if (emss=="") {
                alert("Fill the Comment");
                emss.focus;
                return false;
            } 
                  var emsss = document.checks.tcomment.value;
           
            if (emsss=="") {
                alert("Fill the Comment");
                emsss.focus;
                return false;
            } 
                  var emssss = document.checks.ld.value;
            
            if (emssss=="") {
                alert("Fill signature/Date");
                emssss.focus;
                return false;
            } 
                
            }
            // function for third div hear
            
            
        </script>
        <head>
            
        </head>
    </head>
    <body style="background-color:black;">
        <div style="background-color:red;margin-left:200px;width:80%;"><pre>
         <a href="" onmouseover="replace('cr','cs','s')" > <font size="5">Trainee Feedback</font></a>                <a href="" onmouseover="replace('cr','s','cs')" ><font size="5"> User Detail</font></a>                 <a href="" onmouseover="replace('cs','s','cr')" > <font size="5">Certificate Issue</font></a></pre></div>
       <div name="cr" id="cr" style="display:none;">
        
     <form method="post" action="" name="check" onsubmit="return valid();" style="margin-left:200px;background-color:#F0F8FF;width:80%;">
        
         <pre>
          <h4 style="margin-left:100px;">Certificate Issue Form</h4>
  Training Code:      <input type="text" name="tcode" id="tcode"><br>
  Training Name:      <input type="text" name="tname" id="tname"><br>
  Training Duration:  From <input name="fdate" id="fdate"> TO <input name="tdate" id="tdate"><br>
  Feedback Form Submitted: <select name="fsubmit" id="fsubmit"><option value="yes" selected>Yes</option><br><option value="no"> No</option></select>
 <h4 style="margin-left:100px;">Trainee Details</h4>
  Name:     <input type="text" name="fname" id="fname" placeholder="First Name">   <input type="text" name="lname" id="lname" placeholder="Last Name">  
                <h4 style="margin-left:100px;">Certificate Delivery Details </h4>
  Address:   <input type="text" name="address" id="address"><br>
  City:      <input type="text" name="city" id="city"><br>
  State:     <input type="text" name="state" id="state"><br>
  Country:   <select name="country"  style="width:153px;" align="center">
<option>India</option>
<option>Austrailia</option>
<option>Afghanistan</option>
<option>Albania</option>
<option>Algeria</option>
<option>American Samoa</option>
<option>Andorra</option>
<option>Angola</option>
<option>Anguilla</option>
<option>Antigua and Barbuda</option>
<option>Argentina</option>
<option>Armenia</option>
<option>Aruba</option>
<option>Australia</option>
<option>Austria</option>
<option>Azerbaijan</option>
<option>Bahamas</option>
<option>Bahrain</option>
<option>Bangladesh</option>
<option>Barbados</option>
<option>Belarus</option>
<option>Belgium</option>
<option>Belize</option>
<option>Benin</option>
<option>Bermuda</option>
<option>Bhutan</option>
<option>Bolivia</option>
<option>Bosnia-Herzegovina</option>
<option>Botswana</option>
<option>Bouvet Island</option>
<option>Brazil</option>
<option>Brunei</option>
<option>Bulgaria</option>
<option>Burkina Faso</option>
<option>Burundi</option>
<option>Cambodia</option>
<option>Cameroon</option>
<option>Canada</option>
<option>Cape Verde</option>
<option>Cayman Islands</option>
<option>Central African Republic</option>
<option>Chad</option>
<option>Chile</option>
<option>China</option>
<option>Christmas Island</option>
<option>Cocos (Keeling) Islands</option>
<option>Colombia</option>
<option>Comoros</option>
<option>Congo</option>
<option>Cook Islands</option>
<option>Costa Rica</option>
<option>Croatia</option>
<option>Cuba</option>
<option>Cyprus</option>
<option>Czech Republic</option>
<option>Denmark</option>
<option>Djibouti</option>
<option>Dominica</option>
<option>Dominican Republic</option>
<option>Ecuador</option>
<option>Egypt</option>
<option>El Salvador</option>
<option>Equatorial Guinea</option>
<option>Eritrea</option>
<option>Estonia</option>
<option>Ethiopia</option>
<option>Falkland Islands</option>
<option>Faroe Islands</option>
<option>Fiji</option>
<option>Finland</option>
<option>France</option>
<option>French Guiana</option>
<option>Gabon</option>
<option>Gambia</option>
<option>Georgia</option>
<option>Germany</option>
<option>Ghana</option>
<option>Gibraltar</option>
<option>Greece</option>
<option>Greenland</option>
<option>Grenada</option>
<option>Guadeloupe (French)</option>
<option>Guam (USA)</option>
<option>Guatemala</option>
<option>Guinea</option>
<option>Guinea Bissau</option>
<option>Guyana</option>
<option>Haiti</option>
<option>Holy See</option>
<option>Honduras</option>
<option>Hong Kong</option>
<option>Hungary</option>
<option>Iceland</option>
<option>India</option>
<option>Indonesia</option>
<option>Iran</option>
<option>Iraq</option>
<option>Ireland</option>
<option>Israel</option>
<option>Italy</option>
<option>Ivory Coast (Cote D`Ivoire)</option>
<option>Jamaica</option>
<option>Japan</option>
<option>Jordan</option>
<option>Kazakhstan</option>
<option>Kenya</option>
<option>Kiribati</option>
<option>Kuwait</option>
<option>Kyrgyzstan</option>
<option>Laos</option>
<option>Latvia</option>
<option>Lebanon</option>
<option>Lesotho</option>
<option>Liberia</option>
<option>Libya</option>
<option>Liechtenstein</option>
<option>Lithuania</option>
<option>Luxembourg</option>
<option>Macau</option>
<option>Macedonia</option>
<option>Madagascar</option>
<option>Malawi</option>
<option>Malaysia</option>
<option>Maldives</option>
<option>Mali</option>
<option>Malta</option>
<option>Marshall Islands</option>
<option>Martinique (French)</option>
<option>Mauritania</option>
<option>Mauritius</option>
<option>Mayotte</option>
<option>Mexico</option>
<option>Micronesia</option>
<option>Moldova</option>
<option>Monaco</option>
<option>Mongolia</option>
<option>Montenegro</option>
<option>Montserrat</option>
<option>Morocco</option>
<option>Mozambique</option>
<option>Myanmar</option>
<option>Namibia</option>
<option>Nauru</option>
<option>Nepal</option>
<option>Netherlands</option>
<option>Netherlands Antilles</option>
<option>New Caledonia (French)</option>
<option>New Zealand</option>
<option>Nicaragua</option>
<option>Niger</option>
<option>Nigeria</option>
<option>Niue</option>
<option>Norfolk Island</option>
<option>North Korea</option>
<option>Northern Mariana Islands</option>
<option>Norway</option>
<option>Oman</option>
<option>Pakistan</option>
<option>Palau</option>
<option>Panama</option>
<option>Papua New Guinea</option>
<option>Paraguay</option>
<option>Peru</option>
<option>Philippines</option>
<option>Pitcairn Island</option>
<option>Poland</option>
<option>Polynesia (French)</option>
<option>Portugal</option>
<option>Puerto Rico</option>
<option>Qatar</option>
<option>Reunion</option>
<option>Romania</option>
<option>Russia</option>
<option>Rwanda</option>
<option>Saint Helena</option>
<option>Saint Kitts and Nevis</option>
<option>Saint Lucia</option>
<option>Saint Pierre and Miquelon</option>
<option>Saint Vincent and Grenadines</option>
<option>Samoa</option>
<option>San Marino</option>
<option>Sao Tome and Principe</option>
<option>Saudi Arabia</option>
<option>Senegal</option>
<option>Serbia</option>
<option>Seychelles</option>
<option>Sierra Leone</option>
<option>Singapore</option>
<option>Slovakia</option>
<option>Slovenia</option>
<option>Solomon Islands</option>
<option>Somalia</option>
<option>South Africa</option>
<option>South Georgia and South Sandwich Islands</option>
<option>South Korea</option>
<option>South Sudan</option>
<option>Spain</option>
<option>Sri Lanka</option>
<option>Sudan</option>
<option>Suriname</option>
<option>Svalbard and Jan Mayen Islands</option>
<option>Swaziland</option>
<option>Sweden</option>
<option>Switzerland</option>
<option>Syria</option>
<option>Taiwan</option>
<option>Tajikistan</option>
<option>Tanzania</option>
<option>Thailand</option>
<option>Timor-Leste (East Timor)</option>
<option>Togo</option>
<option>Tokelau</option>
<option>Tonga</option>
<option>Trinidad and Tobago</option>
<option>Tunisia</option>
<option>Turkey</option>
<option>Turkmenistan</option>
<option>Turks and Caicos Islands</option>
<option>Tuvalu</option>
<option>Uganda</option>
<option>Ukraine</option>
<option>United Arab Emirates</option>
<option>United Kingdom</option>
<option>United States</option>
<option>Uruguay</option>
<option>Uzbekistan</option>
<option>Vanuatu</option>
<option>Venezuela</option>
<option>Vietnam</option>
<option>Virgin Islands</option>
<option>Wallis and Futuna Islands</option>
<option>Yemen</option>
<option>Zambia</option>
<option>Zimbabwe</option>
</select>

  Postal Code: <input type="text" name="pcode" id="pcode"><br>
  Phone (Include Country/City code):  <input type="text" name="ph" id="ph"><br>
  Mobile :     <input type="text" name="mobile" id="mobile"><br>
  Email Id:    <input type="text" name="email" id="email"><br>
                                                    <input type="submit" value="Submit" name="submit" id="submit">
    </pre>
        
        </form>   
        
        </div>
        
        
        <!-- code for Tranee Feedback -->
         <div name="s" id="s" style="display:none;">
             
         <form method="post" action="" name="checks" onsubmit="return traineefeedback();" style="margin-left:200px;background-color:#F0F8FF;width:80%;">
        
         <pre>
          <h4 style="margin-left:100px;">Training Feedback Form</h4>
  Training Duration:  From <input name="tfd" id="tfd"> TO <input name="ttd" id="ttd"><br>
  Training Name:           <input type="text" name="tname" id="tname"><br>
  Training Program:        <input type="text" name="tprogram" id="tprogram"><br>
  Registration Number:     <input type="text" name="rn" id="trn"><br>
  Email Id:                <input type="text" name="email" id="email"><br>
  Telephone/Mobile :       <input type="text" name="mob" id="mob">
  <h4 style="margin-left:100px;">Select the most appropriate response to the following questions:-</h4>
 To what extent did this training?               <select name="f" id="f">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Accomplish its stated learning objectives?      <select name="s" id="s">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Meet your expectations?                         <select name="t" id="t">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Teach you something you can use in your job?    <select name="fo" id="fo">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Contain information appropriate to your needs?  <select name="fi" id="fi">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select>
 
 Comments (If Any) 
                                <textarea type="text" name="comment" id="comment" rows="5" cols="35"></textarea>
<h4 style="margin-left:100px;">Please rate the following aspects of the training</h4>                               
 Training contents              <select name="tf" id="tf">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Organization of material       <select name="ts" id="ts">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Delivery methods               <select name="tt" id="tt">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Presentation of information    <select name="tfs" id="tfs">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Duration of the sessions       <select name="tfi" id="tfi">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Level of material covered      <select name="tsix" id="six">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Project Guidance               <select name="tse" id="tse">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 LAB Infrastructure             <select name="tei" id="tei">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Placement Support              <select name="tni" id="tni">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Trainer Rating                 <select name="ten" id="ten">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Over all rating                <select name="tel" id="tel">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Comments (If Any) It's Mandatory* 
                                     <textarea type="text" name="scomment" id="scomment" rows="5" cols="35"></textarea>
 Additional Suggestion or Comments:
                                     <textarea type="text" name="tcomment" id="tcomment" rows="5" cols="35"></textarea>
        
  Would you suggest this training to friends : <select name="fsuggest" id="fsuggest">
      <option value="yes">Yes</option><br>
      <option value="no">No</option><br>
  </select>
                                     
  Signature/Date:  <input name="ld" id="ld">
                                                        <input type="submit" value="Submit" name="feedback" id="feedback">
        </div>           
             
 <!-- coding for third form -->            
             
        <div name="cs" id="cs" style="background-color:#F0F8FF;margin-left:200px;width:80%;">

<?php




?>


<table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
<tr>
<td>Name: Mahender</td>
<td>Registraion Number:</td></tr>
<tr><td>Course Name:</td>
<td>Course Duration:</td>
</tr>
</table>
<table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">



</table>
       </div>    
    </body>
    
</html>
        
        
        <?php
//session_start();
include('db.php');
if(isset($_POST['submit'])){
     $user=$_SESSION['userid'];
    $code=$_POST['tcode']; 
    $tnames=$_POST['tname']; 
    $fduration=$_POST['fdate']; 
    $tduration=$_POST['tdate']; 
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
        echo '<script language="javascript">';
echo 'alert("Certification Issue Sumited Sucessfully")';
echo '</script>';
    }
    else{echo "error in data inserting".mysql_error();}
}
//else{echo "Certificate form not submit";}

if(isset($_POST['feedback'])){
    
    $user= "me";//$_SESSION['userid'];
    $fduration=$_POST['tfd']; 
    $tduration=$_POST['ttd'];
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
    
    
    $res=mysql_query("INSERT INTO trainee_feedback(userid,tmie_duration_from,tmie_duration_to,training_name,training_program,registration_number,email,mobile,q_first,q_second,q_third,q_fourth,q_five,comment,training_contents,organization_of_matirial,delevery_mathod,persantaion_of_information,duration_of_sessions,matirial_level,project_guidance,lab_Infrastructure,placement_support,trainer_rating,our_all_rating,comment_mendotry,additional_suggestion,tell_friend,submit_date,orignal_date) VALUES('$user','$fduration','$tduration','$tnames','$program','$rg_no','$email','$mobile','$q1','$q2','$q3','$q4','$q5','$comment','$t_c','$o_m','$delevery','$pe_info','$session_dur','$lmc','$project_gui','$lab','$placement','$trainner_rating','$over_all','$comemet_man','$suggestion','$tell_friend','$sumit_date',now());");
    
    
     if($res){
       echo '<script language="javascript">';
echo 'alert("FeedBack Sumited Sucessfully")';
echo '</script>';
    }
    else{echo "error in data inserting".mysql_error();}
    
    
}

//else{echo "Feecback not Submitted";}
?>
