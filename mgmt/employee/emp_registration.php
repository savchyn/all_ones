<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");?>

<script type="text/javascript">
       function replace( hide,show ) {
  document.getElementById(hide).style.display="none";
  document.getElementById(show).style.display="block";
}
    
    
    </script>
<style>
    #addr{
    height:200px;
    font-size:10pt;
}
</style>
<script type="text/javascript">
function inscheck(checkvalue)
    {
        if (checkvalue=='yes')
        { 
            document.getElementById('dis').style.visibility = 'visible';    
        }
        else{
        document.getElementById('dis').style.visibility = 'hidden'; 
        }
    }
    </script>

<script type="text/javascript">
    function valid(){
        
       var em_name = document.check.join_date.value;
            if (em_name == "") {
                alert(" Fill Joining Date!");
               em_name.focus;
                return false;
            } 
            var dp = document.check.emp_name.value;
            if (dp == "") {
                alert("Please fill  Name ");
                dp.focus;
                return false;
            }
           var em_rg = document.check.dob.value;
            if ( em_rg == "") {
                alert(" Fill Date of Birth");
                em_rg.focus;
            return false;
               
            }
              var em_rgg = document.check.age.value;
            if ( em_rgg == "") {
                alert(" Fill Age");
                em_rgg.focus;
            return false;
               
            }
        var em = document.check.email.value;
            var s = "@";
            if (!em.match(s)) {
                alert("enter a valid email..");
                em.focus;
                return false;
            }  
             
          
            var dps = document.check.mob.value;
            if (dps == "") {
                alert(" fill Mobile Number");
                dps.focus;
                return false;
            }     
         var em = document.check.nationality.value;
            if (em == "") {
                alert(" Fill Nationality!");
                em.focus;
                return false;
            } 
             
              var emss = document.check.religion.value;
            if (emss == "") {
                alert(" Fill Religion!");
                emss.focus;
                return false;
            } 
            var dpsa = document.check.present_address.value;
            if (dpsa == "") {
                alert(" fill Present Address");
                dpsa.focus;
                return false;
            }         
             
             
              var empc = document.check.present_local.value;
            if (empc == "") {
                alert(" Fill local Contact");
                empc.focus;
                return false;
            } 
           
               
         var dpsm = document.check.permanent_address.value;
            if (dpsm == "") {
                alert(" fill Parmanent Address");
                dpsm.focus;
                return false;
            } 
         var dpsmpp = document.check.permanent_contact.value;
            if (dpsmpp == "") {
                alert(" fill Permanent Contact");
                dpsmpp.focus;
                return false;
            } 
         var dpsmss = document.check.fname.value;
            if (dpsmss == "") {
                alert(" fill Father Name");
                dpsmss.focus;
                return false;
            } 

          var fg = document.check.fage.value;
            if (fg == "") {
                alert(" fill Father Age");
                fg.focus;
                return false;
            } 
          var foc = document.check.focc.value;
            if (foc == "") {
                alert(" fill Father Occupation");
                foc.focus;
                return false;
            } 
          var fwo = document.check.fwork.value;
            if (fwo == "") {
                alert(" fill Father Current Work");
                fwo.focus;
                return false;
            } 
          var mnam = document.check.mname.value;
            if (mnam == "") {
                alert(" fill Mother Name");
                mnam.focus;
                return false;
            } 
          var moc = document.check.mocc.value;
            if (moc == "") {
                alert(" fill Mother's Occupation");
                moc.focus;
                return false;
            } 
          var dates = document.check.sdate.value;
            if (dates == "") {
                alert(" fill  Submition Date");
                dates.focus;
                return false;
            } 
          var places = document.check.place.value;
            if (places == "") {
                alert(" fill Place");
                places.focus;
                return false;
            } 
          var ns = document.check.ename.value;
            if (ns == "") {
                alert(" fill Name");
                ns.focus;
                return false;
            } 
          var si = document.check.sign.value;
            if (si == "") {
                alert(" fill Signature Of Employee");
                si.focus;
                return false;
            } 
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
        	<h1>Employee Registration</h1>
            
        </div><!--pagetitle-->
      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
    <form action="" method="post" enctype="multipart/form-data"  name="check" onsubmit="return valid();" >
    <table class="table table-bordered" style="text-align:center;">
      <tr><td>  <h4>Employee Profile</h4></td></tr>
    <tr><td width="20%;">Date Of Joining</td><td> <input type="text" name="join_date" onclick="javascript:NewCssCal('demo1')" id="demo1" placeholder="Joining Date"></td> </tr>  
        <tr><td>Name</td><td><input type="text" id="emp_name" name="emp_name" placeholder="Employee Name"></td></tr>
        <tr><td>Employee Code</td><td><input type="text" id="emp_code" name="emp_code" placeholder="Employee Code" Value="NES_MTS_"></td></tr>
        <tr><td>Employee Department</td><td><input type="text" id="emp_dept" name="emp_dept" placeholder="Employee Department"></td></tr>
			
        <td>Employee Designation</td><td><select name="position">
		<option value="">Please Select</option>
        	<option>Innovation Engineer</option>
			<option>Sr. Innovation Engineer</option>
			<option>Innovation Manager</option>
			<option>Innovation Associate</option>
			<option>Innovation Director</option>
        </select>&nbsp;&nbsp;&nbsp;<input type="text" id="emp_deg" name="emp_deg" placeholder="Employee Designation"></td></tr>
           <tr><td>Date Of Birth</td><td><input type="text" id="demo3" name="dob" onclick="javascript:NewCssCal('demo3')" placeholder="DOB"></td></tr> 
            <tr><td>Blood Group</td><td><input type="text" id="bldg" name="bldg" placeholder="Blood Group"></td></tr> 
            <tr><td>Age</td><td><input type="text" id="age" name="age" placeholder="Age"></td></tr> 
            <tr><td>Disability</td><td><select name="disability" onchange="inscheck(this.value);" id="disability">
		<option value="no">No</option> 
		<option value="yes">Yes</option></select>
                <input type="text" id="dis" name="dis" style="visibility:hidden;" placeholder="Fill Disability Details"></td></tr> 
            <tr><td>EmailId</td><td><input type="text" id="email" name="email" placeholder="Email Id"></td></tr> 
            <tr><td>Mobile No.</td><td><input type="text" id="mob" name="mob" placeholder="Mobile Number"></td></tr> 
            <tr><td>Marital Status</td><td><select name="marital"  id="marital">
		<option value="married">Married</option> 
		<option value="unmarried">Unmarried</option></select></td></tr> 
            <tr><td>Hobbies</td><td><input type="text" id="hob" name="hob" placeholder="Hobbies"></td></tr> 
            <tr><td>Nationality</td><td><input type="text" id="nationality" name="nationality" placeholder="Nationality"></td></tr>
        <tr><td>Religion</td><td><input type="text" id="religion" name="religion" placeholder="Religion"></td></tr>
           <tr><td style="width:25%;"> <h4>Educational Background</h4></td> </tr>
        <!--<tr><td>Name</td><td><input type="text" id="" name=""></td></tr>-->
       <tr><td>Education</td><td><input type="text" name="education1" placeholder="UG, Graduation, PG & diplomas">&nbsp;&nbsp;<input type="text" name="specialization1" placeholder="Specialization">&nbsp;&nbsp;<input type="text" name="grade1" placeholder="Grade attained"><br><br><input type="text" name="university1" placeholder="University & City">&nbsp;&nbsp;<input type="text" name="passout1" placeholder="Passing Year"></td></tr>
        <tr><td></td><td><input type="text" name="education2" placeholder="UG, Graduation, PG & diplomas">&nbsp;&nbsp;<input type="text" name="specialization2" placeholder="Specialization">&nbsp;&nbsp;<input type="text" name="grade2" placeholder="Grade attained"><br><br><input type="text" name="university2" placeholder="University & City">&nbsp;&nbsp;<input type="text" name="passout2" placeholder="Passing Year"></td></tr>
        <tr><td></td><td><input type="text" name="education3" placeholder="UG, Graduation, PG & diplomas">&nbsp;&nbsp;<input type="text" name="specialization3" placeholder="Specialization">&nbsp;&nbsp;<input type="text" name="grade3" placeholder="Grade attained"><br><br><input type="text" name="university3" placeholder="University & City">&nbsp;&nbsp;<input type="text" name="passout3" placeholder="Passing Year"></td></tr>
         <tr><td> <h4> Prior Experience</h4></td> </tr>
         
        <tr><td>Work Experience</td><td><input type="text" name="company1" placeholder="Enter Compnay Name">&nbsp;&nbsp;<input type="text" name="post1" placeholder="Post Held">&nbsp;&nbsp;<input type="text" name="depatment1" placeholder="Department/Function"><br><br><input type="text" name="city1" placeholder="City">&nbsp;&nbsp;<input type="text" name="tenure1" placeholder="Tenure(in years/ months)"></td></tr>
   
        <tr><td></td><td><input type="text" name="company2" placeholder="Enter Compnay Name">&nbsp;&nbsp;<input type="text" name="post2" placeholder="Post Held">&nbsp;&nbsp;<input type="text" name="depatment2" placeholder="Department/Function"><br><br><input type="text" name="city2" placeholder="City">&nbsp;&nbsp;<input type="text" name="tenure2" placeholder="Tenure(in years/ months)"></td></tr>
   
        
        <tr><td></td><td><input type="text" name="company3" placeholder="Enter Compnay Name">&nbsp;&nbsp;<input type="text" name="post3" placeholder="Post Held">&nbsp;&nbsp;<input type="text" name="depatment3" placeholder="Department/Function"><br><br><input type="text" name="city3" placeholder="City">&nbsp;&nbsp;<input type="text" name="tenure3" placeholder="Tenure(in years/ months)"></td></tr>
   
        <tr><td> <h4> Addredd Details</h4></td> </tr> 
        <tr><td>Present Address</td><td><input type="text" rows="7" cols="35" name="present_address" placeholder="Present Address" id="addr"><br><br><input type=text placeholder="Local Contact No." name="present_local"></td></tr>
        <tr><td>Permanent Address</td><td><input type="text" rows="7" cols="35" name="permanent_address" placeholder="Permanent Address" id="addr"><br><br><input type=text placeholder="Permanent Contact No." name="permanent_contact"></td></tr>
       
       <tr><td> <h4> Family Details</h4></td> </tr> 
        <tr><td>Father's Full Name</td><td><input type="text" id="fname" name="fname" placeholder="Father Name"></td></tr> 
        <tr><td>Father's Age</td><td><input type="text" id="fage" name="fage" placeholder="Father's Age"></td></tr>
        <tr><td>Occupation</td><td><input type="text" id="focc" name="focc" placeholder="Father's Occupation"></td></tr>
        <tr><td>Current Work Status</td><td><input type="text" id="fwork" name="fwork" placeholder="Father's Current Work"></td></tr>
        <tr><td>Mother’s Maiden Name</td><td><input type="text" id="mname" name="mname" placeholder="Mother Name"></td></tr>
        <tr><td>Occupation</td><td><input type="text" id="mocc" name="mocc" placeholder="Mother's Occupation"> </td></tr>
       
        </table><br>
           <table class="table table-bordered" style="text-align:center;">
         <tr><td width=60%> <h4>Documents for submission</h4></td> </tr> 
               <th><h5 align="center">Documents</h5></th><th><h5> ( y / n )</h5></th><th><h5 align="center">Attachment</h5></th>
        <tr><td>Copy of Class 10th Certificate</td><td><input type="checkbox" id="10th" name="10th" value="10th doc checked"></td><td><input type="file" name="sec" ></td></tr>
        <tr><td>Copy of Class 12th or 10+2 Certificates</td><td><input type="checkbox" id="12th" name="12th" value="12th doc checked"></td><td><input type="file" name="sr" ></td></tr>
        <tr><td>Copy of degree or graduation certificates</td><td><input type="checkbox" id="degree" name="degree" value="degree doc checked"></td><td><input type="file" name="gr" ></td></tr>
        <tr><td>Copies of ACADEMIC & PROFESSIONAL QUALIFICATION(s) Certificates</td><td><input type="checkbox" id="acq" name="acq" value="apqc doc checked"></td><td><input type="file" name="acqc" ></td></tr>
        <tr><td>Copy of Residence proof (Electricity bill or telephone bill or Ration card or Passport)</td><td><input type="checkbox" id="rp" name="rp" value="Residence proof doc checked"></td><td><input type="file" name="rpp" ></td></tr>
        <tr><td>Copy of Identity Proof.(Driving License or Passport or Voter card or PAN card)</td><td><input type="checkbox" id="idp" name="idp" value="Identity Proof doc checked"></td><td><input type="file" name="idpp" ></td></tr>
        <tr><td>Original copy of last three month Pay Slip received</td><td><input type="checkbox" id="pslip" name="pslip" value="pay slip checked"></td><td><input type="file" name="pslips"></td></tr>
        
        <tr><td>Copy of RELIEVING LETTER from previous employer and last 3 organizations (If any)</td><td><input type="checkbox" id="rlletter" name="rlletter" value="reliving letter doc checked"></td><td><input type="file" name="rl" ></td></tr>    
        <tr><td>Copy of Experience letter from previous employer</td><td><input type="checkbox" id="exp" name="exp" value="experience doc checked"></td><td><input type="file" name="exps" ></td></tr>
        <tr><td>Copy of appointment letter from previous employer</td><td><input type="checkbox" id="appointment" name="appointment" value="appointmnet checked"></td><td><input type="file" name="apl" ></td></tr>   
        <tr><td>Passport size photograph - 4</td><td><input type="checkbox" id="photo" name="photo" value="photo submit checked"></td><td><input type="file" name="photo" ></td></tr>
               
                </table><br>
      <table class="table table-bordered" style="text-align:center;">
          <tr><h4>Submission Details</h4></tr>
 <tr> <td><input type="checkbox" id="tch" name="tch" value="term&condition checked" checked></td><td> <p>I hereby declare that all the information furnished above is true to the best of my knowledge and belief. I will do all my duties to the best of my ability while following all the code of conduct of the company and maintaining required level of discipline by the company.</p></td></tr> 
        <tr><td>Date</td><td><input type="text" id="demo2" name="sdate" placeholder="Date" onclick="javascript:NewCssCal('demo2')"></td></tr>
            <tr><td>Place</td><td><input type="text" id="place" name="place" placeholder="Place"></td></tr>
            <tr><td>Name</td><td><input type="text" id="ename" name="ename" placeholder="Name"></td></tr>
            <tr><td>Signature</td><td><input type="text" id="sign" name="sign" placeholder="Signature"></td></tr>
        </table>
    <input type="submit" name="submit" value="Submit" style="margin-left:400px;">
        </form><br>
              
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>
<?php
     //code for save data in database
     
if(isset($_POST['submit'])){
     
     
    $target="attachment/".$_FILES['sec']['name'];
	move_uploaded_file($_FILES['sec']['tmp_name'],$target);
	$path="attachment/".$_FILES['sec']['name'];
	 $f=$_FILES['sec']['name'];
     // for sending file download link on mail
     // send this mail on HR emailid
     $fmail="http://nexg.in/mgmnt/employee/attachment/".$_FILES['sec']['name'];
    
	$target1="attachment/".$_FILES['sr']['name'];
	move_uploaded_file($_FILES['sr']['tmp_name'], $target1);
	$passport=$target1;
    $fe=$_FILES['sr']['name'];
	
	$target2="attachment/".$_FILES['gr']['name'];
	move_uploaded_file($_FILES['gr']['tmp_name'], $target2);
	$gradattach=$target2;
	 $fes=$_FILES['gr']['name'];
    
	$target3="attachment/".$_FILES['acqc']['name'];
	move_uploaded_file($_FILES['acqc']['tmp_name'], $target3);
	$pgradattach=$target3;
	 $fess=$_FILES['acqc']['name'];
    
	$target4="attachment/".$_FILES['rpp']['name'];
	move_uploaded_file($_FILES['rpp']['tmp_name'],$target4);
	$attachment1="attachment/".$_FILES['rpp']['name'];
	 $fee=$_FILES['rpp']['name'];
    
	$target5="attachment/".$_FILES['idpp']['name'];
	move_uploaded_file($_FILES['idpp']['tmp_name'],$target5);
	$attachment2="attachment/".$_FILES['idpp']['name'];
     $feee=$_FILES['idpp']['name'];
     //...................................................
     $target51="attachment/".$_FILES['pslips']['name'];
	move_uploaded_file($_FILES['pslips']['tmp_name'],$target51);
	$slip="attachment/".$_FILES['pslips']['name'];
     $fsl=$_FILES['pslips']['name'];
     
     
     $target52="attachment/".$_FILES['rl']['name'];
	move_uploaded_file($_FILES['rl']['tmp_name'],$target52);
	$rls="attachment/".$_FILES['rl']['name'];
     $rld=$_FILES['rl']['name'];
     
     $target53="attachment/".$_FILES['exps']['name'];
	move_uploaded_file($_FILES['exps']['tmp_name'],$target53);
	$ex="attachment/".$_FILES['exps']['name'];
     $exx=$_FILES['exps']['name'];
     
     
     $target54="attachment/".$_FILES['apl']['name'];
	move_uploaded_file($_FILES['apl']['tmp_name'],$target54);
	$aps="attachment/".$_FILES['apl']['name'];
     $ap=$_FILES['apl']['name'];
     
     
     $target55="attachment/".$_FILES['photo']['name'];
	move_uploaded_file($_FILES['photo']['tmp_name'],$target55);
	$ph="attachment/".$_FILES['photo']['name'];
     $pho=$_FILES['photo']['name'];   
     
     
$join_date=$_POST['join_date'];
     $emp_name=$_POST['emp_name']; 
       $emp_code=$_POST['emp_code']; 
       $emp_dept=$_POST['emp_dept']; 
	 $emp_position=$_POST['position']; 
       $emp_deg=$_POST['emp_deg']; 
     $dob=$_POST['dob']; 
     $bldg=$_POST['bldg']; 
     $age=$_POST['age']; 
     $disability=$_POST['disability']; 
     $dis=$_POST['dis']; 
     $email=$_POST['email']; 
     $mob=$_POST['mob']; 
     $marital=$_POST['marital']; 
     $hob=$_POST['hob']; 
     $nationality=$_POST['nationality']; 
     $religion=$_POST['religion']; 
     $education1=$_POST['education1']; 
     $grade1=$_POST['grade1']; 
     $specialization1=$_POST['specialization1']; 
     $university1=$_POST['university1']; 
     $passout1=$_POST['passout1']; 
     $education2=$_POST['education2']; 
     $grade2=$_POST['grade2']; 
     $specialization2=$_POST['specialization2']; 
     $university2=$_POST['university2']; 
     $passout2=$_POST['passout2']; 
     $education3=$_POST['education3']; 
     $grade3=$_POST['grade3']; 
     $specialization3=$_POST['specialization3']; 
     $university3=$_POST['university3']; 
     $passout3=$_POST['passout3']; 
     $company1=$_POST['company1']; 
     $post1=$_POST['post1']; 
     $depatment1=$_POST['depatment1']; 
     $city1=$_POST['city1']; 
     $tenure1=$_POST['tenure1']; 
     $company2=$_POST['company2']; 
     $post2=$_POST['post2']; 
     $depatment2=$_POST['depatment2']; 
     $city2=$_POST['city2']; 
     $tenure2=$_POST['tenure2']; 
       $company3=$_POST['company3']; 
     $post3=$_POST['post3']; 
     $depatment3=$_POST['depatment3']; 
     $city3=$_POST['city3']; 
     $tenure3=$_POST['tenure3'];
     $present_address=$_POST['present_address']; 
     $present_local=$_POST['present_local']; 
     $permanent_address=$_POST['permanent_address']; 
     $permanent_contact=$_POST['permanent_contact']; 
     $fname=$_POST['fname']; 
     $fage=$_POST['fage']; 
     $focc=$_POST['focc']; 
     $fwork=$_POST['fwork']; 
     $mname=$_POST['mname']; 
     $mocc=$_POST['mocc']; 
     $ten=$_POST['10th']; 
     $twl=$_POST['12th']; 
     $degree=$_POST['degree']; 
     $acq=$_POST['acq']; 
     $rp=$_POST['rp']; 
     $idp=$_POST['idp']; 
     $pslip=$_POST['pslip']; 
        $rl=$_POST['rlletter'];
      $expp=$_POST['exp'];
     $appointment=$_POST['appointment']; 
     $photo=$_POST['photo']; 
     $tch=$_POST['tch']; 
     $sdate=$_POST['sdate']; 
     $place=$_POST['place']; 
     $ename=$_POST['ename']; 
     $sign=$_POST['sign']; 
     
     
     
     
      $query=mysql_query("INSERT INTO employee_reg (date_of_joining,name,emp_code,emp_dept,emp_position,emp_deg,date_of_brith,blood_group,age,disability,dis_detail,email,mobile,marital,hobbies,nationality,religion,education1,specialization1,grade1,university1,passout1,education2,specialization2,grade2,university2,passout2,education3,specialization3,grade3,university3,passout3,company1,post1,department1,city1,tenure1,company2,post2,department2,city2,tenure2,company3,post3,department3,city3,tenure3,present_address,local_contact,permanent_address,parmanent_contact,fname,fage,focc,fwork,mname,mocc,10th,12th,degree,acq,rp,idp,pslip,rlletter,exp_letter,appointment,photo,trm_cond,date,place,e_name,sign,p_10th,p_12th,p_degree,p_acq,p_rp,p_idp,p_pslip,p_rlletter,p_exp_letter,p_appointment,p_photo) VALUES ('$join_date','$emp_name','$emp_code','$emp_dept','$emp_position','$emp_deg','$dob','$bldg','$age','$disability','$dis','$email','$mob','$marital','$hob','$nationality','$religion','$education1','$specialization1','$grade1','$university1','$passout1','$education2','$specialization2','$grade2','$university2','$passout2','$education3','$specialization3','$grade3','$university3','$passout3','$company1','$post1','$depatment1','$city1','$tenure1','$company2','$post2','$depatment2','$city2','$tenure2','$company3','$post3','$depatment3','$city3','$tenure3','$present_address','$present_local','$permanent_address','$permanent_contact','$fname','$fage','$focc','$fwork','$mname','$mocc','$ten','$twl','$degree','$acq','$rp','$idp','$pslip','$rl','$expp','$appointment','$photo','$tch','$sdate','$place','$ename','$sign','$f','$fe','$fes','$fess','$fee','$feee','$fsl','$rld','$exx','$ap','$pho')"); 
    
     if($query){
         $toe=$email;
         //$to="hr.manager@nexg.in";
         $to="hr.manager@nexg.in";
         $subject = 'New Employee Registration Details';
$message = ("The registration process is completed.\n
Employee Name -  $emp_name ,\n 
Date Of Joining  - $join_date \n
Employee Code - $emp_code \n
Employee Designation - $emp_deg \n
Email Id - $email\n");
         $headers = 'From:Nex-G <info@nexg.in>' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
        //start code of sending hr and it policy file to employee
         
         $it="http://nexg.in/IT_Policy.docx";
        $hr="http://nexg.in/HR_POLICY.docx";
         
         $mess = ("The registration process is completed.\n
Employee Name -  $emp_name ,\n 
Date Of Joining  - $join_date \n
Employee Code - $emp_code \n
Employee Designation - $emp_deg \n
Email Id - $email \n
IT Policy File- $it\n
HR Policy File- $hr\n");
         //end hear
         $ms=mail($to, $subject, $message, $headers);
         mail($toe, $subject, $mess, $headers);
         $rg=mysql_insert_id();
      echo "<script type='text/javascript'>alert('Employee Registred Sucessfully');window.location.href='emp_sal_unregistred.php?dds=$rg';</script>;";
     }
else{
echo "error in data insertion".mysql_error();
}     
     
 }
     
     
     ?>
        
    