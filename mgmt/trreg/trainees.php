<?php session_start();
  

if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");


include("header.php");
$mailmm="m";
$cookie_value = "Mail";
setcookie($mailmm, $cookie_value, time() + (86400), "/");

?>
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
<div style="clear:both;" ></div>
 <div class="rightpanel" style="clear:both;width:400%;">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            
            <div class="headerright" >
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo" >
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#" > 
           Welcome <b><?php echo $_SESSION['username']?></b>
                   
         <b class="caret"></b></a>
                    <ul class="dropdown-menu" >
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
    <div style="margin:10px;color:#990000; margin-top:10px;" >
        <form  action="" method="post">
    <!--     <input type="search" name="sear">  <input type="submit"  name="search" value="Search"> <br><br><br> -->
           <select name="search_emp" value=" search" style="margin-left:80px;">
                    <option name="sbn" id="sbn"> Search_By_Name </option>
                <option name="sbrn" id="sbrn"> Search_By_registration_Number</option>
                     <option  name="sbjd" id="sbjd"> Search_By_Joining_Date </option>
                    <option name="sbe" id="sbe"> Search_By_Email_Id </option>
                       
                </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="search" name="sr" id="sr">      <input type="submit"  name="search" value="Search"> <br><br><br>
        </form>
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
		<th>S.No.</th>
		<th>Name</th> 
        <th>Registration Number</th>
		<th>Email Id</th>
		 <th>Local Contact</th>
		<th>Contact No.</th>
		<th>Training Duration</th>
		<th>Training Mode</th>
		<th>Training Code</th>
        <th>Training Status</th>
		<th>Training Time</th>
       
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Postal Code</th>
        <th>Training Fees</th>
        <th>Registration Amount</th>
        <th>No Of Installment</th>
        <th>Installment-1</th>
         <th>Installment-1 Due Date</th>
        <th>Installment-2</th>
        <th>Installment-2 Due Date</th>
        <th>Installment-3</th>
        <th>Installment-3 Due Date</th>
        <th>Passport No.</th>
        <th>Passport date</th>
        <th>Passport Attachment </th>
        <th>Graduation University</th>
        <th>Graduation Branch</th>
        <th>Graduation Year</th>
        <th>Graduation Percentage</th>
        <th>Graduation Attacment</th>
        <th>Post Graduation University</th>
        <th>Post Graduation Branch</th>
        <th>Post Graduation Year</th>
        <th>Post Graduation Percentage</th>
        <th>Post Graduation Attacment</th>
        <th>Hostel Accommodation</th>
        <th>Experience 1st Company</th>
        <th>From-To</th>
        <th>Company 1st Profile</th>
        <th>Company 1st Attchment</th>
        <th>Experience 2nd Company</th>
        <th>From-To</th>
        <th>Company 2nd Profile</th>
        <th>Company 2nd Attchment</th>
       <th>Experience 3rd Company</th>
        <th>From-To</th>
        <th>Company 3rd Profile</th>
        <th>Company 3rd Attchment</th>
        
    </thead>
    <?php
        
     //................................................................... ........................................................  
        
   if(isset($_POST['search'])){
    
           $search=$_POST['search_emp'];
   $data=$_POST['sr'];  
    
        if($_POST['search_emp']=="Search_By_Name"){
   $result=mysql_query("SELECT * FROM trregistration WHERE fname LIKE \"%$data%\";");
			
		}
	
	if($_POST['search_emp']=="Search_By_Joining_Date"){
   $result=mysql_query("SELECT * FROM trregistration WHERE fromduration LIKE \"%$data%\";");
}



if($_POST['search_emp']=="Search_By_Email_Id"){
   $result=mysql_query("SELECT * FROM trregistration WHERE  email LIKE \"%$data%\";");

}



if($_POST['search_emp']=="Search_By_registration_Number"){
   $result=mysql_query("SELECT * FROM trregistration WHERE  reg_number LIKE \"%$data%\";");
  
}
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){  
        $date1=date_create(date("Y/m/d"));
    
	$date2=date_create($row['fromduration']);

	$diff=date_diff($date2,$date1);
	
	$due_date1=date_create($row['due_date1']);
	$diff1=date_diff($date1,$due_date1);
	$due_date2=date_create($row['due_date2']);
	$due_date3=date_create($row['due_date3']);
	$diff3=date_diff($date1,$due_date2);
	$diff4=date_diff($date1,$due_date3);
	
?>
    <tr>
    <?php $diff2=$diff1->format("%R%a days");
    		 $diff5=$diff3->format("%R%a days");
    		 $diff6=$diff4->format("%R%a days");			     

     		//$mail1=$row['email'];
       // $to=$mail1; 
     		
     ?>
   
		<td><a href="showtrainees.php?stid=<?= $row['id'];?>"><?php echo $row['id']; ?></a></td>
		<td><?php echo $row['fname'];?>&nbsp;<?php echo $row['lname'];?></td>
        <td><?php echo $row['reg_number'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['local_contact'];?></td>
		<td><?php echo $row['countrycode'];?> - <?php echo $row['mobile'];?></td> 
		<td><?php echo $row['fromduration'];?> - <?php echo $row['toduration'];?></td>
		<td><?php echo $row['trmode'];?></td>
		<td><?php echo $row['trcode'];?></td>
		
		
        <td><?php echo $row['trstatus'];?></td>
		<td><?php echo $diff->format("%R%a days");?></td> 
		
		
        
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['state'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['postalcode'];?></td>
        <td><?php echo $row['trfees'];?></td> 
        <td><?php echo $row['reg_amount'];?></td> 
        <td><?php echo $row['installment'];?></td>
        <td><?php echo $row['installment1'];?></td>
        <td><?php echo $row['due_date1'];?></td>
         <td><?php echo $row['installment2'];?></td>
        <td><?php echo $row['due_date2'];?></td>
         <td><?php echo $row['installment3'];?></td>
        <td><?php echo $row['due_date3'];?></td>
        <td><?php echo $row['passport_no'];?></td>
        <td><?php echo $row['passport_date'];?></td>
        <td><?php echo $row['passport_attach'];?><a href="downloadfile.php?passport=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        <td><?php echo $row['gradinstitute'];?></td>
        <td><?php echo $row['gradbranch'];?></td>
        <td><?php echo $row['gradyear'];?></td>
        <td><?php echo $row['gradpercentage'];?></td>
        <td><?php echo $row['gradattach'];?><a href="downloadfile.php?gr=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        <td><?php echo $row['pgradinstitute'];?></td>
        <td><?php echo $row['pgradbranch'];?></td>
        <td><?php echo $row['pgradyear'];?></td>
        <td><?php echo $row['pgradpercentage'];?></td>
         <td><?php echo $row['pgradattach'];?><a href="downloadfile.php?pgr=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
         <td><?php echo $row['hostel'];?></td>
         <td><?php echo $row['company'];?></td>
         <td><?php echo $row['workfrom'];?>- <?php echo $row['workto'];?></td>
         <td><?php echo $row['profile'];?></td>
         <td><?php echo $row['attachment'];?><a href="downloadfile.php?cf=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
         <td><?php echo $row['company1'];?></td>
        <td><?php echo $row['workfrom1'];?>- <?php echo $row['workto1'];?></td>
         <td><?php echo $row['profile1'];?></td>
         <td><?php echo $row['attachment1'];?><a href="downloadfile.php?cs=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        <td><?php echo $row['company2'];?></td>
        <td><?php echo $row['workfrom2'];?>-<?php echo $row['workto2'];?></td>
         <td><?php echo $row['profile2'];?></td>
         <td><?php echo $row['attachment2'];?><a href="downloadfile.php?ct=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
           
    </tr><?php
       
}   
}
    else{
        echo "No Record Found";
    }
}
else{
  echo "error".mysql_error();   
}

}


        
        //else condition for nothing search
//...................................................................................................... .................... 
      
        else{
$result=mysql_query("SELECT * FROM trregistration rder by  Right(reg_number,4) desc;");
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){  
      $inst=$row['installment'];
        $date1=time();
        $name=$row['fname'].$row['lname'];
        $namec=$row['fname'];
        $lm=$row['lname'];
    //$date1=date_create($row['toduration']);
       $sub_inst1=$row['inst_f_submited_fee']; 
         $sub_inst2=$row['inst_s_submited_fee']; 
         $sub_inst3=$row['inst_t_submited_fee']; 
        $to=$row['email'];
        $msd=$row['due_date1'];
            $msa=$row['installment1'];
        $msd2=$row['due_date2'];
            $msa2=$row['installment2'];
        $msd3=$row['due_date3'];
            $msa3=$row['installment3'];
        
	$date2=strtotime($row['toduration']);

	$diff=$date1-$date2;
       $diff=floor($diff/(60*60*24));
	$trstatus=$row['trstatus'];
	$due_date1=strtotime($row['due_date1']);
	$diff1=$due_date1-$date1;
       $diff1=floor($diff1/(60*60*24)); 
	$due_date2=strtotime($row['due_date2']);
	$due_date3=strtotime($row['due_date3']);
	$diff3=$due_date2-$date1;
        $diff3=floor($diff3/(60*60*24));
	$diff4=$due_date3-$date1;
        $diff4=floor($diff4/(60*60*24));
	$id=$row['id'];
      $registraion_cancel=$date1-$due_date1;
         $registraion_cancel_d1=floor($registraion_cancel/(60*60*24));
         $registraion_cancel_s=$date1-$due_date2;
        $registraion_cancel_d2=floor($registraion_cancel_s/(60*60*24));
         $registraion_cancel_t=$date1-$due_date3;
        $registraion_cancel_d3=floor($registraion_cancel_t/(60*60*24));
        // code for registraion cancel if not submit feed after 10 days of due date
 // for regestration cancel
		
		

    //................................................................................................
        
        }} }}
        // code for color change if trainee unregistered



$result=mysql_query("SELECT * FROM trregistration order by  Right(reg_number,4) desc;");
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
        $trstatus=$row['trstatus'];
        ?>
          <!-- <tr style="background:red;">-->
			  <tr>
		<td><a href="showtrainees.php?stid=<?= $row['id'];?>"><?php echo $row['id']; ?></a></td>
		<td><?php echo $row['fname'];?>&nbsp;<?php echo $row['lname'];?></td>
          <td><?php echo $row['reg_number'];?></td>
			<td><?php echo $row['email'];?></td>
				    <td><?php echo $row['local_contact'];?></td>
			<td><?php echo $row['countrycode'];?> - <?php echo $row['mobile'];?></td> 	  
				  <td><?php echo $row['fromduration'];?> - <?php echo $row['toduration'];?></td>
				  
		<td><?php echo $row['trmode'];?></td>
				  
				  
		<td><?php echo $row['trcode'];?></td>
		
          <td><?php echo $row['trstatus'];?></td>
		<td><?php echo $diff;?></td> 
		
		
      
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['state'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['postalcode'];?></td>
        <td><?php echo $row['trfees'];?></td> 
        <td><?php echo $row['reg_amount'];?></td> 
        <td><?php echo $row['installment'];?></td>
        <td><?php echo $row['installment1'];?></td>
        <td><?php echo $row['due_date1'];?></td>
         <td><?php echo $row['installment2'];?></td>
        <td><?php echo $row['due_date2'];?></td>
         <td><?php echo $row['installment3'];?></td>
        <td><?php echo $row['due_date3'];?></td>
        <td><?php echo $row['passport_no'];?></td>
        <td><?php echo $row['passport_date'];?></td>
      <td><?php echo $row['passport_attach'];?><a href="downloadfile.php?passport=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        <td><?php echo $row['gradinstitute'];?></td>
        <td><?php echo $row['gradbranch'];?></td>
        <td><?php echo $row['gradyear'];?></td>
        <td><?php echo $row['gradpercentage'];?></td>
        <td><?php echo $row['gradattach'];?><a href="downloadfile.php?gr=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        <td><?php echo $row['pgradinstitute'];?></td>
        <td><?php echo $row['pgradbranch'];?></td>
        <td><?php echo $row['pgradyear'];?></td>
        <td><?php echo $row['pgradpercentage'];?></td>
         <td><?php echo $row['pgradattach'];?><a href="downloadfile.php?pgr=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
         <td><?php echo $row['hostel'];?></td>
         <td><?php echo $row['company'];?></td>
         <td><?php echo $row['workfrom'];?>- <?php echo $row['workto'];?></td>
         <td><?php echo $row['profile'];?></td>
         <td><?php echo $row['attachment'];?><a href="downloadfile.php?cf=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
         <td><?php echo $row['company1'];?></td>
        <td><?php echo $row['workfrom1'];?>- <?php echo $row['workto1'];?></td>
         <td><?php echo $row['profile1'];?></td>
         <td><?php echo $row['attachment1'];?><a href="downloadfile.php?cs=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        <td><?php echo $row['company2'];?></td>
        <td><?php echo $row['workfrom2'];?>-<?php echo $row['workto2'];?></td>
         <td><?php echo $row['profile2'];?></td>
         <td><?php echo $row['attachment2'];?><a href="downloadfile.php?ct=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        
				  <td><a class="btn btn-danger" href="delete.php?ct=<?php echo $row['id'];?>" onclick="return confirm('Are You Sure To Want Delete')">Delete </a></td>
				<?php if($trstatus=='unregistered'){  
                  ?><td style="width:2%;"><a class="btn btn-primary" href="re-registration.php?ct=<?php echo $row['id'];?>" >Re-Registraion </a></td>
    </tr>
    <?php }
		
		
    }}}
 
    ?>
        </table>
        </form>
        </div> 
	 </div>         
                     

    <div class="clearfix"></div>
    
    <!--footer-->
    
<!--mainwrapper-->
</body>
</html>
