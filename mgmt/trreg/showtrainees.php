<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>


<?php include("header.php");?>
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

   <!-- for update trainee details -->
 <?php 
if(isset($_POST['up'])){
    $id=$_GET['stid'];
    $que=mysql_query("select * from trregistration where id='".$_GET['stid']."'")or die(mysql_error());
    $fetch=mysql_fetch_array($que); 
    //for one installment
    
    if($fetch['installment']=='1'){   
$que=mysql_query("UPDATE trregistration SET  fromduration='".$_POST['fromduration']."',reg_number='".$_POST['registration_number']."',toduration='".$_POST['toduration']."',trcode='".$_POST['trcode']."',trname='".$_POST['trname']."', trstatus='".$_POST['trstatus']."', trmode='".$_POST['trmode']."',trfees='".$_POST['trfees']."',address='".$_POST['address']."', city='".$_POST['city']."', state='".$_POST['state']."', country='".$_POST['country']."', postalcode='".$_POST['postalcode']."', countrycode='".$_POST['countrycode']."', mobile='".$_POST['mobile']."', local_contact='".$_POST['local_contact']."', email='".$_POST['email']."', passport_no='".$_POST['passport_no']."', passport_date='".$_POST['passport_date']."', gradinstitute='".$_POST['gradinstitute']."', gradbranch='".$_POST['gradbranch']."', gradyear='".$_POST['gradyear']."', gradpercentage='".$_POST['gradpercentage']."', pgradinstitute='".$_POST['pgradinstitute']."', pgradbranch='".$_POST['pgradbranch']."', pgradyear='".$_POST['pgradyear']."', pgradpercentage='".$_POST['pgradpercentage']."', hostel='".$_POST['hostel']."', company='".$_POST['company']."', workfrom='".$_POST['workfrom']."', workto='".$_POST['workto']."', profile='".$_POST['profile']."', company1='".$_POST['company1']."', workfrom1='".$_POST['workfrom1']."', workto1='".$_POST['workto1']."', profile1='".$_POST['profile1']."', company2='".$_POST['company2']."', workfrom2='".$_POST['workfrom2']."', workto2='".$_POST['workto2']."', profile2='".$_POST['profile2']."', reg_amount='".$_POST['reg_amount']."',fname='".$_POST['fname']."', lname='".$_POST['lname']."', installment1='".$_POST['installment1']."', due_date1='".$_POST['due_date1']."' WHERE id='$id'");
if($que){
    //echo "Detail Updated Successfully";
    echo "<script type='text/javascript'>alert('Detail Updated Successfully');window.location.href='trainees.php';</script>;";
}
else{
    echo "error in detail updating".mysql_error();
}
    }
    //  //for two installment
    
     if($fetch['installment']=='2'){   
$que=mysql_query("UPDATE trregistration SET trcode='".$_POST['trcode']."',reg_number='".$_POST['registration_number']."',trname='".$_POST['trname']."', trstatus='".$_POST['trstatus']."', trmode='".$_POST['trmode']."',trfees='".$_POST['trfees']."',address='".$_POST['address']."', city='".$_POST['city']."', state='".$_POST['state']."', country='".$_POST['country']."', postalcode='".$_POST['postalcode']."', countrycode='".$_POST['countrycode']."', mobile='".$_POST['mobile']."', local_contact='".$_POST['local_contact']."', email='".$_POST['email']."', passport_no='".$_POST['passport_no']."', passport_date='".$_POST['passport_date']."', gradinstitute='".$_POST['gradinstitute']."', gradbranch='".$_POST['gradbranch']."', gradyear='".$_POST['gradyear']."', gradpercentage='".$_POST['gradpercentage']."', pgradinstitute='".$_POST['pgradinstitute']."', pgradbranch='".$_POST['pgradbranch']."', pgradyear='".$_POST['pgradyear']."', pgradpercentage='".$_POST['pgradpercentage']."', hostel='".$_POST['hostel']."', company='".$_POST['company']."', workfrom='".$_POST['workfrom']."', workto='".$_POST['workto']."', profile='".$_POST['profile']."', company1='".$_POST['company1']."', workfrom1='".$_POST['workfrom1']."', workto1='".$_POST['workto1']."', profile1='".$_POST['profile1']."', company2='".$_POST['company2']."', workfrom2='".$_POST['workfrom2']."', workto2='".$_POST['workto2']."', profile2='".$_POST['profile2']."', reg_amount='".$_POST['reg_amount']."',fname='".$_POST['fname']."', lname='".$_POST['lname']."', installment1='".$_POST['installment1']."', due_date1='".$_POST['due_date1']."', installment2='".$_POST['installment2']."', due_date2='".$_POST['due_date2']."' WHERE id='$id'");
if($que){
    //echo "Detail Updated Successfully";
    echo "<script type='text/javascript'>alert('Detail Updated Successfully');window.location.href='trainees.php';</script>;";
}
else{
    echo "error in detail updating".mysql_error();
}
    }
    
    
    //  //for three installment
     if($fetch['installment']=='3'){   
$que=mysql_query("UPDATE trregistration SET trcode='".$_POST['trcode']."',reg_number='".$_POST['registration_number']."',trname='".$_POST['trname']."', trstatus='".$_POST['trstatus']."', trmode='".$_POST['trmode']."',trfees='".$_POST['trfees']."',address='".$_POST['address']."', city='".$_POST['city']."', state='".$_POST['state']."', country='".$_POST['country']."', postalcode='".$_POST['postalcode']."', countrycode='".$_POST['countrycode']."', mobile='".$_POST['mobile']."', local_contact='".$_POST['local_contact']."', email='".$_POST['email']."', passport_no='".$_POST['passport_no']."', passport_date='".$_POST['passport_date']."', gradinstitute='".$_POST['gradinstitute']."', gradbranch='".$_POST['gradbranch']."', gradyear='".$_POST['gradyear']."', gradpercentage='".$_POST['gradpercentage']."', pgradinstitute='".$_POST['pgradinstitute']."', pgradbranch='".$_POST['pgradbranch']."', pgradyear='".$_POST['pgradyear']."', pgradpercentage='".$_POST['pgradpercentage']."', hostel='".$_POST['hostel']."', company='".$_POST['company']."', workfrom='".$_POST['workfrom']."', workto='".$_POST['workto']."', profile='".$_POST['profile']."', company1='".$_POST['company1']."', workfrom1='".$_POST['workfrom1']."', workto1='".$_POST['workto1']."', profile1='".$_POST['profile1']."', company2='".$_POST['company2']."', workfrom2='".$_POST['workfrom2']."', workto2='".$_POST['workto2']."', profile2='".$_POST['profile2']."', reg_amount='".$_POST['reg_amount']."',fname='".$_POST['fname']."', lname='".$_POST['lname']."', installment1='".$_POST['installment1']."', due_date1='".$_POST['due_date1']."', installment2='".$_POST['installment2']."', due_date2='".$_POST['due_date2']."', installment3='".$_POST['installment3']."', due_date3='".$_POST['due_date3']."' WHERE id='$id'");
if($que){
    //echo "Detail Updated Successfully";
    echo "<script type='text/javascript'>alert('Detail Updated Successfully');window.location.href='trainees.php';</script>;";
}
else{
    echo "error in detail updating".mysql_error();
}
    }
}
	
?>
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
    <div style="margin:10px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <?php
    $que=mysql_query("select * from trregistration where id='".$_GET['stid']."'")or die(mysql_error());
    $fetch=mysql_fetch_array($que);
    ?>
    <tr><td>First Name</td><td><input type="text" name="fname" value="<?php echo $fetch['fname'];?>"></td></tr>
        <tr><td>Last Name</td><td><input type="text" name="lname" value="<?php echo $fetch['lname'];?>"></td></tr>
    <tr><td>Training Code</td><td><input type="text" name="trcode" value="<?php echo $fetch['trcode'];?>"></td></tr>
 <tr><td>Registration Number</td><td><input type="text" name="registration_number" value="<?php echo $fetch['reg_number'];?>"></td></tr>
    <tr><td>Course Name</td><td><input type="text" name="trname" value="<?php echo $fetch['trname'];?>"></td></tr>
    <tr><td>Duration</td><td><input type="text" name="fromduration"  onclick="javascript:NewCssCal('demo1')" id="demo1" value="<?php echo $fetch['fromduration'];?>"> To <input type="text" name="toduration"  onclick="javascript:NewCssCal('demo2')" id="demo2" value="<?php echo $fetch['toduration'];?>" ></td></tr>
    <tr><td>Training Status</td><td><select name="trstatus">
		<option style="display:none;"><?php echo $fetch['trstatus'];?></option> 
		<option>Registered</option>  
		<option>Training Started</option>
		<option>Training Completed</option> 
		<option>Unregistered</option>
    </select></td></tr>
    <tr><td>Training Mode</td><td><input type="text" name="trmode" value="<?php if($fetch['trmode']=='other'){echo $fetch['othermode'];}else{ echo $fetch['trmode'];}?>"></td></tr>
    <tr><td>Training Fees</td><td><input type="text" name="trfees" value="<?php echo $fetch['trfees'];?>"></td></tr>
    <tr><td>Address</td><td><input type="text" name="address" value="<?php echo $fetch['address'];?>"></td></tr>
    <tr><td>City</td><td><input type="text" name="city" value="<?php echo $fetch['city'];?>"></td></tr>
    <tr><td>State</td><td><input type="text" name="state" value="<?php echo $fetch['state'];?>"></td></tr>
    <tr><td>Country</td><td><input type="text" name="country" value="<?php echo $fetch['country'];?>"></td></tr>
    <tr><td>Postal Code</td><td><input type="text" name="postalcode" value="<?php echo $fetch['postalcode'];?>"></td></tr>
    <tr><td>Mobile No.</td><td><input type="text" name="countrycode" value="<?php echo $fetch['countrycode'];?>" style="width:40px;"><input type="text" name="mobile" value="<?php echo $fetch['mobile'];?>"></td></tr>
    <tr><td>Local Contact</td><td><input type="text" name="code" value="+91" style="width:40px;"><input type="text" name="local_contact" value="<?php echo $fetch['local_contact'];?>"></td></tr>
    <tr><td>Email Id</td><td><input type="text" name="email" value="<?php echo $fetch['email'];?>"></td></tr>
    <tr><td>Passport No.</td><td><input type="text" name="passport_no" value="<?php echo $fetch['passport_no'];?>"></td></tr>
    <tr><td>Passport Expiry Date</td><td><input type="text" name="passport_date" value="<?php echo $fetch['passport_date'];?>"></td></tr>
    <?php if($fetch['passport_attach']!='passport/') { ?>
    <tr><td>Passport Attachment</td><td><a href="<?php echo $fetch['passport_attach'];?>" target="_blank"><img src="attachment.png" alt="" style="height:70px;width:70px;"></a></td><td>Unchangeable</td></tr>
    <? } ?>
    <tr><td>Graduation Institute</td><td><input type="text" name="gradinstitute" value="<?php echo $fetch['gradinstitute'];?>"></td></tr>
    <tr><td>Graduation Branch</td><td><input type="text" name="gradbranch" value="<?php echo $fetch['gradbranch'];?>"></td></tr>
    <tr><td>Graduation Year</td><td><input type="text" name="gradyear" value="<?php echo $fetch['gradyear'];?>"></td></tr>
    <tr><td>Graduation Percentage</td><td><input type="text" name="gradpercentage" value="<?php echo $fetch['gradpercentage'];?>"></td></tr>
    <?php if($fetch['gradattach']!='academic/') {?>
    <tr><td>Graduation Attachment</td><td><a href="<?php echo $fetch['gradattach'];?>" target="_blank"><img src="attachment.png" style="width:70px;height:70px;"></a></td><td>Unchangeable</td></tr>
    <?php } ?>
    <tr><td>PG Institute</td><td><input type="text" name="pgradinstitute" value="<?php echo $fetch['pgradinstitute'];?>"></td></tr>
    <tr><td>PG Branch</td><td><input type="text" name="pgradbranch" value="<?php echo $fetch['pgradbranch'];?>"></td></tr>
    <tr><td>PG Year</td><td><input type="text" name="pgradyear" value="<?php echo $fetch['pgradyear'];?>"></td></tr>
    <tr><td>PG Percentage</td><td><input type="text" name="pgradpercentage" value="<?php echo $fetch['pgradpercentage'];?>"></td></tr>
    <?php if($fetch['pgradattach']!='academic/') {?>
    <tr><td>PG Attachment</td><td><a href="<?php echo $fetch['pgradattach'];?>" target="_blank"><img src="attachment.png" style="width:70px;height:70px;"></a></td><td>Unchangeable</td></tr>
    <? } ?>
    <tr><td>Hostel</td><td><input type="text" name="hostel" value="<?php echo $fetch['hostel'];?>"></td></tr>
    <tr><td>Company</td><td><input type="text" name="company" value="<?php echo $fetch['company'];?>"></td></tr>
    <tr><td>Work From</td><td><input type="text" name="workfrom" value="<?php echo $fetch['workfrom'];?>"></td></tr>
    <tr><td>Work To</td><td><input type="text" name="workto" value="<?php echo $fetch['workto'];?>"></td></tr>
    <tr><td>Profile</td><td><input type="text" name="profile" value="<?php echo $fetch['profile'];?>"></td></tr>
    <?php if($fetch['attachment']!='attachment/') {?>
    <tr><td>Attachment</td><td><a href="<?php echo $fetch['attachment'];?>" target="_blank"><img src="attachment.png" style="width:70px;height:70px;"></a></td><td>Unchangeable</td></tr>
    <?php } ?>
    <tr><td>Company</td><td><input type="text" name="company1" value="<?php echo $fetch['company1'];?>"></td></tr>
    <tr><td>Work From</td><td><input type="text" name="workfrom1" value="<?php echo $fetch['workfrom1'];?>"></td></tr>
    <tr><td>Work To</td><td><input type="text" name="workto1" value="<?php echo $fetch['workto1'];?>"></td></tr>
    <tr><td>Profile</td><td><input type="text" name="profile1" value="<?php echo $fetch['profile1'];?>"></td></tr>
    <?php if($fetch['attachment1']!='attachment/') {?>
    <tr><td>Attachment</td><td><a href="<?php echo $fetch['attachment1'];?>" target="_blank"><img src="attachment.png" style="width:70px;height:70px;"></a></td><td>Unchangeable</td></tr>
    <? } ?>
    <tr><td>Company</td><td><input type="text" name="company2" value="<?php echo $fetch['company2'];?>"></td></tr>
    <tr><td>Work From</td><td><input type="text" name="workfrom2" value="<?php echo $fetch['workfrom2'];?>"></td></tr>
    <tr><td>Work To</td><td><input type="text" name="workto2" value="<?php echo $fetch['workto2'];?>"></td></tr>
    <tr><td>Profile</td><td><input type="text" name="profile2" value="<?php echo $fetch['profile2'];?>"></td></tr>
    <?php if($fetch['attachment']!='attachment/') {?>
    <tr><td>Attachment</td><td><a href="<?php echo $fetch['attachment2'];?>" target="_blank"><img src="attachment.png" style="width:70px;height:70px;"></a></td><td>Unchangeable</td></tr>
    <? } ?> <tr><td>Training Fees</td><td><input type="text" name="trfees" value="<?php echo $fetch['trfees'];?>"></td></tr>
    <tr><td>Registration Amount</td><td><input type="text" name="reg_amount" value="<?php echo $fetch['reg_amount'];?>"></td></tr>
    
    <?php if($fetch['installment']=='1') {?>
    <tr><td>Installment</td><td><input type="text" name="installment1" value="<?php echo $fetch['installment1'];?>"><input type="text" name="due_date1" id="demo3" value="<?php echo $fetch['due_date1'];?>"></td></tr>
    <tr><td></td><td><input type="text" name="installment2" value="<?php echo $fetch['installment2'];?>" style="visibility:hidden;"><input type="text" name="due_date2" id="demo4" value="<?php echo $fetch['due_date2'];?>" style="visibility:hidden;"></td></tr>
    <tr><td></td><td><input type="text" name="installment3" value="<?php echo $fetch['installment3'];?>" style="visibility:hidden;"><input type="text" name="due_date3" id="demo5" value="<?php echo $fetch['due_date3'];?>" style="visibility:hidden;"></td></tr>
    <? } 
     elseif($fetch['installment']=='2') {?>
    <tr><td>Installment</td><td><input type="text" name="installment1" value="<?php echo $fetch['installment1'];?>"><input type="text" name="due_date1" id="demo3" value="<?php echo $fetch['due_date1'];?>"></td></tr>
    <tr><td></td><td><input type="text" name="installment2" value="<?php echo $fetch['installment2'];?>"><input type="text" name="due_date2" id="demo4" value="<?php echo $fetch['due_date2'];?>"></td></tr>
    <tr><td></td><td><input type="text" name="installment3" value="<?php echo $fetch['installment3'];?>" style="visibility:hidden;"><input type="text" name="due_date3" id="demo5" value="<?php echo $fetch['due_date3'];?>" style="visibility:hidden;"></td></tr>
    <? } elseif($fetch['installment']=='3') {?>
    <tr><td>Installment</td><td><input type="text" name="installment1" value="<?php echo $fetch['installment1'];?>"><input type="text" name="due_date1" id="demo3" value="<?php echo $fetch['due_date1'];?>"></td></tr>
    <tr><td></td><td><input type="text" name="installment2" value="<?php echo $fetch['installment2'];?>"><input type="text" name="due_date2" id="demo4" value="<?php echo $fetch['due_date2'];?>"></td></tr>
    <tr><td></td><td><input type="text" name="installment3" value="<?php echo $fetch['installment3'];?>" ><input type="text" name="due_date3" id="demo5" value="<?php echo $fetch['due_date3'];?>" ></td></tr>
        
    <? } ?>
        </table>
        <input type="submit" value="Submit" style="margin-left:450px;" name="up">
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    