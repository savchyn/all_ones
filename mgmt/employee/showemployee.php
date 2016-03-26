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
 <style>#addr{
    height:200px;
    font-size:10pt;
}</style>

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
        	<h1>Update Employee Details</h1>
            
        </div><!--pagetitle-->
      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
    <form action="" method="post" enctype="multipart/form-data"  name="check" onsubmit="return valid();" >
    <table class="table table-bordered" style="text-align:center;">
      <tr><td>  <h4>Employee Profile</h4></td></tr> 
         <?php
    $que=mysql_query("select * from employee_reg where id='".$_GET['stid']."'")or die(mysql_error());
    $fetch=mysql_fetch_array($que);
    ?>
    <tr><td width="20%;">Date Of Joining</td><td> <input type="text" name="join_date" onclick="javascript:NewCssCal('demo1')" id="demo1" value="<?php echo $fetch['date_of_joining']; ?>"></td> </tr>  
        <tr><td>Name</td><td><input type="text" id="emp_name" name="emp_name" placeholder="Employee Name" value="<?php echo $fetch['name']; ?>"></td></tr> 
		
		   <tr><td>Registration No.</td><td><input type="text"  name="emp_reg" placeholder="Registration Number" value="<?php echo $fetch['emp_code']; ?>" required></td></tr>
		
		<tr><td width="20%;">Department</td><td> <input type="text" name="department"  value="<?php echo $fetch['emp_dept']; ?>"></td> </tr>  
		
		<tr><td width="20%;">Designation</td><td><select name="position">
			<?php 
			if($fetch['emp_position']==''){
			echo '<option value="">Please Select</option>';
			}
else{
     ?>
     	
     <option value=""><?php echo $fetch['emp_position']; ?></option>
     	
     <?php
}
			?>
        	<option>Innovation Engineer</option>
			<option>Sr. Innovation Engineer</option>
			<option>Innovation Manager</option>
		   <option>Sr. Innovation Manager</option>
			<option>Innovation Associate</option>
			<option>Innovation Director</option>
				</select>
			&nbsp;&nbsp; &nbsp;<input type="text" name="designation" value="<?php echo $fetch['emp_deg']; ?>"></td> </tr>  
		
		
		
           <tr><td>Date Of Birth</td><td><input type="text" id="demo3" name="dob" onclick="javascript:NewCssCal('demo3')" placeholder="DOB" value="<?php echo $fetch['date_of_brith']; ?>"></td></tr> 
            <tr><td>Blood Group</td><td><input type="text" id="bldg" name="bldg" placeholder="Blood Group" value="<?php echo $fetch['blood_group']; ?>"></td></tr> 
            <tr><td>Age</td><td><input type="text" id="age" name="age" placeholder="Age" value="<?php echo $fetch['age']; ?>"></td></tr> 
		  
		
		<tr><td>Disability</td><td><select name="disability" onchange="inscheck(this.value);" id="disability">
			<?php
    $diablty=$fetch['disability'];
 $disdetail=$fetch['dis_detail'];
if($diablty=='no'){
	echo "<option value='no'>No</option> 
		<option value='yes'>Yes</option>";
	 echo '<input type="text" id="dis" name="dis" style="visibility:hidden;" placeholder="Fill Disability Details">';
}
if($diablty=='yes'){
	echo "	<option value='yes'>Yes</option>	
	       <option value='no'>No</option>";
	  echo '<input type="text" id="dis" name="dis" style="visibility:block;" value="'.$disdetail.'" placeholder="Fill Disability Details">';
}

?>
	</select></td></tr> 
		
		
		
            <tr><td>EmailId</td><td><input type="text" id="email" name="email" placeholder="Email Id" value="<?php echo $fetch['email']; ?>"></td></tr> 
            <tr><td>Mobile No.</td><td><input type="text" id="mob" name="mob" placeholder="Mobile Number" value="<?php echo $fetch['mobile']; ?>"></td></tr> 
            <tr><td>Marital Status</td><td><input type="text" name="marital"  id="marital" value="<?php echo $fetch['marital']; ?>"></td></tr> 
            <tr><td>Hobbies</td><td><input type="text" id="hob" name="hob" placeholder="Hobbies" value="<?php echo $fetch['hobbies']; ?>"></td></tr> 
            <tr><td>Nationality</td><td><input type="text" id="nationality" name="nationality" placeholder="Nationality" value="<?php echo $fetch['nationality']; ?>"></td></tr>
        <tr><td>Religion</td><td><input type="text" id="religion" name="religion" placeholder="Religion" value="<?php echo $fetch['religion']; ?>"></td></tr>
           <tr><td style="width:25%;"> <h4>Educational Background</h4></td> </tr>
        <!--<tr><td>Name</td><td><input type="text" id="" name=""></td></tr>-->
       <tr><td>Education</td><td><input type="text" name="education1" placeholder="UG, Graduation, PG & diplomas" value="<?php echo $fetch['education1']; ?>">&nbsp;&nbsp;<input type="text" name="specialization1" placeholder="Specialization" value="<?php echo $fetch['specialization1']; ?>">&nbsp;&nbsp;<input type="text" name="grade1" placeholder="Grade attained" value="<?php echo $fetch['grade1']; ?>"><br><br><input type="text" name="university1" placeholder="University & City" value="<?php echo $fetch['university1']; ?>">&nbsp;&nbsp;<input type="text" name="passout1" placeholder="Passing Year" value="<?php echo $fetch['passout1']; ?>"></td></tr>
        <tr><td></td><td><input type="text" name="education2" placeholder="UG, Graduation, PG & diplomas" value="<?php echo $fetch['education2']; ?>">&nbsp;&nbsp;<input type="text" name="specialization2" placeholder="Specialization" value="<?php echo $fetch['specialization2']; ?>">&nbsp;&nbsp;<input type="text" name="grade2" placeholder="Grade attained" value="<?php echo $fetch['grade2']; ?>"><br><br><input type="text" name="university2" placeholder="University & City" value="<?php echo $fetch['university2']; ?>">&nbsp;&nbsp;<input type="text" name="passout2" placeholder="Passing Year" value="<?php echo $fetch['passout2']; ?>"></td></tr>
        <tr><td></td><td><input type="text" name="education3" placeholder="UG, Graduation, PG & diplomas" value="<?php echo $fetch['education3']; ?>">&nbsp;&nbsp;<input type="text" name="specialization3" placeholder="Specialization" value="<?php echo $fetch['specialization3']; ?>">&nbsp;&nbsp;<input type="text" name="grade3" placeholder="Grade attained" value="<?php echo $fetch['grade3']; ?>"><br><br><input type="text" name="university3" placeholder="University & City" value="<?php echo $fetch['university3']; ?>">&nbsp;&nbsp;<input type="text" name="passout3" placeholder="Passing Year" value="<?php echo $fetch['passout3']; ?>"></td></tr>
         <tr><td> <h4> Prior Experience</h4></td> </tr>
         
        <tr><td>Work Experience</td><td><input type="text" name="company1" placeholder="Enter Compnay Name" value="<?php echo $fetch['company1']; ?>">&nbsp;&nbsp;<input type="text" name="post1" placeholder="Post Held" value="<?php echo $fetch['post1'];?>">&nbsp;&nbsp;<input type="text" name="depatment1" placeholder="Department/Function" value="<?php echo $fetch['department1']; ?>"><br><br><input type="text" name="city1" placeholder="City" value="<?php echo $fetch['city1']; ?>">&nbsp;&nbsp;<input type="text" name="tenure1" placeholder="Tenure(in years/ months)" value="<?php echo $fetch['tenure1']; ?>"></td></tr>
   
        <tr><td></td><td><input type="text" name="company2" placeholder="Enter Compnay Name" value="<?php echo $fetch['company2']; ?>">&nbsp;&nbsp;<input type="text" name="post2" placeholder="Post Held" value="<?php echo $fetch['post2']; ?>">&nbsp;&nbsp;<input type="text" name="depatment2" placeholder="Department/Function" value="<?php echo $fetch['department2']; ?>"><br><br><input type="text" name="city2" placeholder="City" value="<?php echo $fetch['city2']; ?>">&nbsp;&nbsp;<input type="text" name="tenure2" placeholder="Tenure(in years/ months)" value="<?php echo $fetch['tenure2']; ?>"></td></tr>
   
        
        <tr><td></td><td><input type="text" name="company3" placeholder="Enter Compnay Name" value="<?php echo $fetch['company3']; ?>">&nbsp;&nbsp;<input type="text" name="post3" placeholder="Post Held" value="<?php echo $fetch['post3']; ?>">&nbsp;&nbsp;<input type="text" name="depatment3" placeholder="Department/Function" value="<?php echo $fetch['department3']; ?>"><br><br><input type="text" name="city3" placeholder="City" value="<?php echo $fetch['city3']; ?>">&nbsp;&nbsp;<input type="text" name="tenure3" placeholder="Tenure(in years/ months)" value="<?php echo $fetch['tenure3']; ?>"></td></tr>
   
        <tr><td> <h4> Addredd Details</h4></td> </tr> 
        <tr><td>Present Address</td><td><input type="text" rows="7" cols="35" name="present_address" value="<?php echo $fetch['present_address']; ?>" id="addr" ><br><br><input type=text placeholder="Local Contact No." name="present_local" value="<?php echo $fetch['local_contact']; ?>"></td></tr>
        <tr><td>Permanent Address</td><td><input type="text" rows="7" cols="35" name="permanent_address" value="<?php echo $fetch['permanent_address']; ?>" id="addr"></textarea><br><br><input type=text placeholder="Permanent Contact No." name="permanent_contact" value="<?php echo $fetch['parmanent_contact']; ?>"></td></tr>
       
       <tr><td> <h4> Family Details</h4></td> </tr> 
        <tr><td>Father's Full Name</td><td><input type="text" id="fname" name="fname" placeholder="Father Name" value="<?php echo $fetch['fname']; ?>"></td></tr> 
        <tr><td>Father's Age</td><td><input type="text" id="fage" name="fage" placeholder="Father's Age" value="<?php echo $fetch['fage']; ?>"></td></tr>
        <tr><td>Occupation</td><td><input type="text" id="focc" name="focc" placeholder="Father's Occupation" value="<?php echo $fetch['focc']; ?>"></td></tr>
        <tr><td>Current Work Status</td><td><input type="text" id="fwork" name="fwork" placeholder="Father's Current Work" value="<?php echo $fetch['fwork']; ?>"></td></tr>
        <tr><td>Mother’s Maiden Name</td><td><input type="text" id="mname" name="mname" placeholder="Mother Name" value="<?php echo $fetch['mname']; ?>"></td></tr>
        <tr><td>Occupation</td><td><input type="text" id="mocc" name="mocc" placeholder="Mother's Occupation" value="<?php echo $fetch['mocc']; ?>"> </td></tr>
       
        </table><br>
          
        <table class="table table-bordered" style="text-align:center;">
            <tr><td><h4>Submission Detail</h4></td></tr>
        <tr><td>Date</td><td><input type="text" id="demo2" name="sdate" placeholder="Date" onclick="javascript:NewCssCal('demo2')" value="<?php echo $fetch['date']; ?>"></td></tr>
            <tr><td>Place</td><td><input type="text" id="place" name="place" placeholder="Place" value="<?php echo $fetch['place']; ?>"></td></tr>
            <tr><td>Name</td><td><input type="text" id="ename" name="ename" placeholder="Name" value="<?php echo $fetch['e_name']; ?>"></td></tr>
            <tr><td>Signature</td><td><input type="text" id="sign" name="sign" placeholder="Signature" value="<?php echo $fetch['sign']; ?>"></td></tr>
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
if(isset($_POST['submit'])){
    
    $join_date=mysql_real_escape_string($_POST['join_date']);
     $emp_name=mysql_real_escape_string($_POST['emp_name']); 
     $dob=mysql_real_escape_string($_POST['dob']); 
     $bldg=mysql_real_escape_string($_POST['bldg']); 
     $age=mysql_real_escape_string($_POST['age']); 
    $disability=$_POST['disability']; 
	if($disability=='no'){
     $dis='';
		}
	if($disability=='yes'){
     $dis=mysql_real_escape_string($_POST['dis']);
		}
     $email=mysql_real_escape_string($_POST['email']); 
     $mob=mysql_real_escape_string($_POST['mob']); 
     $marital=mysql_real_escape_string($_POST['marital']); 
     $hob=mysql_real_escape_string($_POST['hob']); 
     $nationality=mysql_real_escape_string($_POST['nationality']); 
     $religion=mysql_real_escape_string($_POST['religion']); 
     $education1=mysql_real_escape_string($_POST['education1']); 
     $grade1=mysql_real_escape_string($_POST['grade1']); 
     $specialization1=mysql_real_escape_string($_POST['specialization1']); 
     $university1=mysql_real_escape_string($_POST['university1']); 
     $passout1=mysql_real_escape_string($_POST['passout1']); 
     $education2=mysql_real_escape_string($_POST['education2']); 
     $grade2=mysql_real_escape_string($_POST['grade2']); 
     $specialization2=mysql_real_escape_string($_POST['specialization2']); 
     $university2=mysql_real_escape_string($_POST['university2']); 
     $passout2=mysql_real_escape_string($_POST['passout2']); 
     $education3=mysql_real_escape_string($_POST['education3']); 
     $grade3=mysql_real_escape_string($_POST['grade3']); 
     $specialization3=mysql_real_escape_string($_POST['specialization3']); 
     $university3=mysql_real_escape_string($_POST['university3']); 
     $passout3=mysql_real_escape_string($_POST['passout3']); 
     $company1=mysql_real_escape_string($_POST['company1']); 
     $post1=mysql_real_escape_string($_POST['post1']); 
     $depatment1=mysql_real_escape_string($_POST['depatment1']); 
     $city1=mysql_real_escape_string($_POST['city1']); 
     $tenure1=mysql_real_escape_string($_POST['tenure1']); 
     $company2=mysql_real_escape_string($_POST['company2']); 
     $post2=mysql_real_escape_string($_POST['post2']); 
     $depatment2=mysql_real_escape_string($_POST['depatment2']); 
     $city2=mysql_real_escape_string($_POST['city2']); 
     $tenure2=mysql_real_escape_string($_POST['tenure2']); 
       $company3=mysql_real_escape_string($_POST['company3']); 
     $post3=mysql_real_escape_string($_POST['post3']); 
     $depatment3=mysql_real_escape_string($_POST['depatment3']); 
     $city3=mysql_real_escape_string($_POST['city3']); 
     $tenure3=mysql_real_escape_string($_POST['tenure3']);
     $present_address=mysql_real_escape_string($_POST['present_address']); 
     $present_local=mysql_real_escape_string($_POST['present_local']); 
     $permanent_address=mysql_real_escape_string($_POST['permanent_address']); 
     $permanent_contact=mysql_real_escape_string($_POST['permanent_contact']); 
     $fname=mysql_real_escape_string($_POST['fname']); 
     $fage=mysql_real_escape_string($_POST['fage']); 
     $focc=mysql_real_escape_string($_POST['focc']); 
     $fwork=mysql_real_escape_string($_POST['fwork']); 
     $mname=mysql_real_escape_string($_POST['mname']); 
     $mocc=mysql_real_escape_string($_POST['mocc']); 
  
     $sdate=mysql_real_escape_string($_POST['sdate']); 
     $place=mysql_real_escape_string($_POST['place']); 
     $ename=mysql_real_escape_string($_POST['ename']); 
     $sign=mysql_real_escape_string($_POST['sign']); 
    $department=mysql_real_escape_string($_POST['department']);
	  $emp_position=mysql_real_escape_string($_POST['position']);
    $designation=mysql_real_escape_string($_POST['designation']);
	$registno=mysql_real_escape_string($_POST['emp_reg']);
	
     $qrys=mysql_query("UPDATE employee_reg SET date_of_joining='$join_date',name='$emp_name',emp_code='$registno',emp_dept='$department',emp_position='$emp_position',emp_deg='$designation',date_of_brith='$dob',blood_group='$bldg',age='$age',disability='$disability',dis_detail='$dis',email='$email',mobile='$mob',marital='$marital',nationality='$nationality',religion='$religion',education1='$education1',grade1='$grade1',specialization1='$specialization1',university1='$university1',passout1='$passout1',education2='$education2',grade2='$grade2',specialization2='$specialization2',university2='$university2',passout2='$passout2',education3='$education3',grade3='$grade3',specialization3='$specialization3',university3='$university3',passout3='$passout3',company1='$company1',post1='$post1',department1='$depatment1',city1='$city1',tenure1='$tenure1',company1='$company2',post2='$post2',department2='$depatment2',city2='$city2',tenure2='$tenure2',company3='$company3',post3='$post3',department3='$depatment3',city3='$city3',tenure3='$tenure3',present_address='$present_address',local_contact='$present_local',permanent_address='$permanent_address',parmanent_contact='$permanent_contact',fname='$fname',fage='$fage',focc='$focc',fwork='$fwork',mname='$mname',mocc='$mocc',date='$sdate',place='$place',e_name='$ename',sign='$sign' WHERE id='".$_GET['stid']."'"); 
    
    if($qrys){
       echo "<script type='text/javascript'>alert('Employee Detail Updated Sucessfully');window.location.href='employees.php';</script>;";
    }
    else{
    echo "error in data pdation of employee ".mysql_error();
    
    }
}