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
<div style="clear:both;"></div>
 <div class="rightpanel" style="clear:both;width:490%;">
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
        	<h1>View Employees</h1>
            
        </div><!--pagetitle-->
   


      <div style="margin:50px;color:#990000; margin-top:10px;" name="addcourse" id="addcourse"  >
    <form action="" method="post" onsubmit="return val();" name="msd">
        <table class="table table-bordered" style="text-align:center;">
          <thead>
		<th >S.No.</th>
		<th>Name</th> 
	    <th>Employee Code</th>
        <th>Date Of Joining</th>
         <th>Email Id</th>
	      <th>Present Contact</th>
	   <th>Permanent Contact</th>
			  <th>Position</th>
        <th>Department</th>
        <th>Designation</th>
		<th>Date Of Birth</th>
		<th>Blood Group</th>
		<th>Age</th>
        <th>Disability</th>
              <th>Disability Detail</th>
		
		<th>Mobiloe No.</th>
		<th>Martital Status</th>
        <th>Hobbies</th>
        <th>Nationality</th>
        <th>Religion</th>
        <th>Education1</th>
        <th>Specialization1</th>
        <th>Grade Attend1</th>
        <th>University1</th>
        <th>Passout1</th>
        <th>Education2</th>
        <th>Specialization2</th>
        <th>Grade Attend2</th>
        <th>University2</th>
        <th>Passout2</th>
        <th>Education3</th>
        <th>Specialization3</th>
        <th>Grade Attend3</th>
        <th>University3</th>
        <th>Passout3</th>
        <th>Company1</th>
        <th>Post Held1</th>
         <th>Department1</th>
        <th>City1</th>
        <th>tenure1</th>
        <th>Company2</th>
        <th>Post Held2</th>
         <th>Department2</th>
        <th>City2</th>
        <th>tenure2</th>
        <th>Company3</th>
        <th>Post Held3</th>
         <th>Department3</th>
        <th>City3</th>
        <th>tenure3</th>
        <th>Present Address</th>
      
        <th>Permanent Address</th>
     
        <th>Father's Full Name </th>
        <th>Father's Age</th>
        <th> Father's Occupation</th>
        <th>Current Work Status</th>
        <th>Mother’s Maiden Name</th>
        <th>Mother’s Occupation</th>
       <!-- <th>Document 10th</th> -->
        <th>10th Attachment</th>
       <!--  <th>Document 12th</th>-->
        <th>12th Attachment</th>
        <!-- <th>Graduation Document</th>-->
        <th> Graduation Attacment</th>
       <!--  <th>ACADEMIC & PROFESSIONAL doc</th>-->
        <th> PROFESSIONAL Attachment </th>
         <!-- <th>Residence proof Document </th>-->
       <th>Residence proof Attchment</th>
       <!--  <th>Identity Proof Document</th>-->
        <th>Identity Proof Attchment</th>
       <!--  <th>Pay Slip Document</th>-->
        <th>Pay Slip Attchment</th>
       <!-- <th> Relieving Letter Document</th>-->
        <th>Relieving Letter Attchment</th>
       <!--  <th>Experience letter Document </th>-->
        <th>Experience Attchment</th>
       <!--   <th>Appointment letter Document</th>-->
        <th>appointment Attchment</th>
            <!--    <th>Photograph Document </th>-->
        <th>Photograph Attchment</th>
             <!-- <th>Term & Condition</th> -->
              <th>submit Date</th>
              <th>Place</th>
              <th>Full Name</th>
              <th>Signature</th>
			  
    </thead>
        <?php
$result=mysql_query("SELECT * FROM employee_reg order by date_of_joining asc ;");
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
    ?>
         <!-- <tr style="background:red;">-->
		<td><a href="showemployee.php?stid=<?php echo $row['id'];?>"><?php echo $row['id']; ?></a></td>
		<td ><?php echo $row['name'];?></td>
			 <td><?php echo $row['emp_code'];?></td>
          <td><?php echo $row['date_of_joining'];?></td>
             <td><?php echo $row['email'];?></td>
			  <td><?php echo $row['local_contact'];?></td>
			 <td><?php echo $row['parmanent_contact'];?></td>
		 <td><?php echo $row['emp_position'];?></td>
              <td><?php echo $row['emp_dept'];?></td>
              <td><?php echo $row['emp_deg'];?></td>
		<td><?php echo $row['date_of_brith'];?></td>
		<td><?php echo $row['blood_group'];?></td>
		<td><?php echo $row['age'];?></td>	
			
          <td><?php echo $row['disability'];?></td>
		<td><?php echo $row['dis_detail']?></td> 
		
		<td><?php echo $row['mobile'];?></td> 
        <td><?php echo $row['marital'];?></td>
        <td><?php echo $row['hobbies'];?></td>
        <td><?php echo $row['nationality'];?></td>
        <td><?php echo $row['religion'];?></td>
        <td><?php echo $row['education1'];?></td>
        <td><?php echo $row['specialization1'];?></td> 
        <td><?php echo $row['grade1'];?></td> 
        <td><?php echo $row['university1'];?></td>
        <td><?php echo $row['passout1'];?></td>
           <td><?php echo $row['education2'];?></td>
        <td><?php echo $row['specialization2'];?></td> 
        <td><?php echo $row['grade2'];?></td> 
        <td><?php echo $row['university2'];?></td>
        <td><?php echo $row['passout2'];?></td>  
              <td><?php echo $row['education3'];?></td>
        <td><?php echo $row['specialization3'];?></td> 
        <td><?php echo $row['grade3'];?></td> 
        <td><?php echo $row['university3'];?></td>
        <td><?php echo $row['passout3'];?></td>
        <td><?php echo $row['company1'];?></td>
         <td><?php echo $row['post1'];?></td>
        <td><?php echo $row['department1'];?></td>
         <td><?php echo $row['city1'];?></td>
        <td><?php echo $row['tenure1'];?></td>
              <td><?php echo $row['company2'];?></td>
         <td><?php echo $row['post2'];?></td>
        <td><?php echo $row['department2'];?></td>
         <td><?php echo $row['city2'];?></td>
        <td><?php echo $row['tenure2'];?></td>
              <td><?php echo $row['company3'];?></td>
         <td><?php echo $row['post3'];?></td>
        <td><?php echo $row['department3'];?></td>
         <td><?php echo $row['city3'];?></td>
        <td><?php echo $row['tenure3'];?></td>
        <td><?php echo $row['present_address'];?></td>
       
        <td><?php echo $row['permanent_address'];?></td>
        
        <td><?php echo $row['fname'];?></td>
              <td><?php echo $row['fage'];?></td>
         <td><?php echo $row['focc'];?></td>
        <td><?php echo $row['fwork'];?></td>
         <td><?php echo $row['mname'];?></td>
        <td><?php echo $row['mocc'];?></td>
        
      <td><?php echo $row['p_10th'];?><a href="downloadfile.php?ten=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        
        <td><?php echo $row['p_12th'];?><a href="downloadfile.php?twl=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
      
         <td><?php echo $row['p_degree'];?><a href="downloadfile.php?deg=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        
         <td><?php echo $row['p_acq'];?><a href="downloadfile.php?acq=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
        
         <td><?php echo $row['p_rp'];?><a href="downloadfile.php?rp=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>

         <td><?php echo $row['p_idp'];?><a href="downloadfile.php?idp=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
              
              <td><?php echo $row['p_pslip'];?><a href="downloadfile.php?pslip=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
              
              <td><?php echo $row['p_rlletter'];?><a href="downloadfile.php?rlletter=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
              
              <td><?php echo $row['p_exp_letter'];?><a href="downloadfile.php?exp=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
              
              <td><?php echo $row['p_appointment'];?><a href="downloadfile.php?app=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
              
              <td><?php echo $row['p_photo'];?><a href="downloadfile.php?pho=<?php echo $row['id'];?>" > <img src="attachment.png" height="15" width="15"> </a></td>
              
            <!--  <td><?php //echo $row['trm_cond'];?></td>-->
         <td><?php echo $row['date'];?></td>
        <td><?php echo $row['place'];?></td>
         <td><?php echo $row['e_name'];?></td>
        <td><?php echo $row['sign'];?></td>
			
			<td style="width:3%;"><a class="btn btn-primary" href="edit_salary.php?employee_code=<?php echo $row['emp_code'];?>" ><span class="icon-edit"> </span> Salary Structure</a></td>
			
                <td style="width:3%;"><a class="btn btn-primary" href="emp_sal.php?llt=<?php echo $row['emp_code'];?>" ><span class="icon-edit"> </span> Salary Details </a></td>
        <td style="width:2%;"><a class="btn btn-primary" href="delete.php?ct=<?php echo $row['id'];?>" onclick="return confirm('Are You Sure To Want Delete This')" ><span class="icon-trash"> </span> Delete </a></td>
    </tr>
    <?php 
	}
 }	
}
		?>
        </table></form><br>
        

          
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    