<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>


<?php include("header.php");?>
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
            </script>



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
        	<h1>Certificate Issue</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
    <form method="post" action="submit.php" name="check" onsubmit="return valid();" >
        
         <pre>
         <!-- <h2 style="margin-left:100px;">Certificate Issue Form</h2> -->
  Training Code:      <input type="text" name="tcode" id="tcode"><br>
  Training Name:      <input type="text" name="tname" id="tname"><br>
  <!--Training Duration:  From <input name="fdate" id="fdate"> TO <input name="tdate" id="tdate"><br>-->
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
  Email Id:    <input type="text" name="email" id="email">	
 <h4>TERMS AND CONDITIONS FOR CERTIFICATE ISSUE</h4>
<p style="font-size:14px;"><b> After submission of certificate issue form, certificate would be:-</b>
• Available online with 7 working days on http://exuberantsolutions.com/cfm.htm
• Delivered within max 3-4 weeks time.
• Nex-G Exuberant Solutions Pvt. Ltd. will send certificate by domestic courier service / registered international post/ hand delivery (local trainees). 
• Nex-G Exuberant Solutions Pvt. Ltd. is not responsible for Postal / Courier delays or loss in transit.
• Certificate re-issue charges is 50 USD international / 1000 INR national</p>

                                                                  <input type="submit" value="Submit" name="submit" id="submit">
    </pre>
        
        </form>   
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    