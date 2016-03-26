<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
$arr=array();
if(isset($_REQUEST['submit']))
{
	if(empty($_POST['emp_name']))
	{
		$arr['emp_name']="Please Enter Your Name";	
	}	
	
	if(empty($_POST['u_name']))
	{
		$arr['u_name']="Please Enter Users Name";	
	}
	
	if(empty($_POST['email']))
	{
		$arr['email']="Please Enter User Email";	
	}
	elseif(!preg_match("/^[a-zA-Z.+-_*#0-9]+@[a-zA-Z0-9]+.[a-zA-Z]*$/",$_POST['email']))
	{
		$arr['email']="Please Enter Valid Email";	
	}
	
	if(empty($_POST['contact']))
	{
		$arr['contact']="Please Enter User Contact No.";	
	}
	else if(!preg_match("/^[0-9]*$/",$_POST['contact']))
	{
		$arr['contact']="Please Enter Valid Contact No.";	
	}
	else if(strlen($_POST['contact'])!=10)
	{
		$arr['contact']="Only 10 digits allowed";	
	}
	
	if(empty($arr))
	{
		$que="insert into add_enquiry(emp_name, u_name, email, contact, enq_status, enq_type, u_message, e_message, in_interface, date) values('".$_POST['emp_name']."', '".$_POST['u_name']."', '".$_POST['email']."', '".$_POST['contact']."', '".$_POST['enq_status']."', '".$_POST['type']."', '".$_POST['u_message']."', '".$_POST['e_message']."', '".$_POST['in_interface']."', now())";
		$qry=mysql_query($que)or die(mysql_error());
		if($qry)
		{
			echo '<script>alert("Your data has been added!");</script>';
			echo '<script>window.location="view_enquiry.php";</script>';	
		}	
		
		$to=" info@nexg.in, adarsh@nexg.in, hr.manager@nexg.in, bdm@exuberantsolutions.com, bde@exuberantsolutions.com";
		$title=$_POST['type'].'-'.$_POST['u_name'];
		$emname=$_POST['emp_name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$enqstatus=$_POST['enq_status'];
		$enqmsg=$_POST['u_message'];
		$edmsg=$_POST['e_message'];
		$body="Edit By: $emname\n\n Email: $email\n\n Contact: $contact\n\n Enquiry Status: $enqstatus\n\n Enquiry Message: $enqmsg\n\n Editor Message: $edmsg\n";
		mail($to, $title,$body);
	}
	

}
?>

<?php include("header.php");?>
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
    <div style="margin:50px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <tr><td>Edit By</td><td><input type="text" name="emp_name" placeholder="Enter Your Name"><?php echo @$arr['emp_name']; ?></td></tr>
    <tr><td>Enquiry Name</td><td><input type="text" name="u_name" placeholder="Enter User Name"><?php echo @$arr['u_name'];?></td></tr>
    <tr><td>Email Id</td><td><input type="text" name="email" placeholder="Enter User Email Id"><?php echo @$arr['email'];?></td></tr>
    <tr><td>Contact No.</td><td><input type="text" name="contact" placeholder="Enter User Contact No."><?php echo @$arr['contact'];?></td></tr>
    <tr><td>Enquiry Status</td><td><select name="enq_status">
		<option>Open</option>
		<option>Sent</option>
		<option>Sent-Close</option>
		<option>Sent-Pipeline</option>
		<option>Sent-Pipeline-Joining</option>   
		<option>Sent-Pipeline-Join-Close</option>
    </select></td></tr>
    <tr><td>Enquiry Type</td><td><select name="type">
		<option>Domestic Individual Training</option> 
		<option>World Individual Training</option>  
		<option>United States Individual Training</option> 
		<option>Domestic Corporate Training</option>
		<option>International Corporate Training</option>
		<option>College Workshop</option>
		<option>Domestic Project</option>
		<option>International Project</option>
    </select></td></tr>
    <tr><td>Enquiry Message</td><td><textarea name="u_message" rows="5" cols="20" placeholder="Enter User Message"></textarea></td></tr>
    <tr><td>Editor Message</td><td><textarea name="e_message" rows="5" cols="20" placeholder="Enter Your Message"></textarea></td></tr>
    <tr><td>Interact Interface</td><td><select name="in_interface">
		<option>None</option>
		<option>WhatsApp</option> 
		<option>GTalk</option>
		<option>Ymessenger</option> 
		<option>FB Chat</option>  
    </select></td></tr>
    
        </table><br>
        <input type="submit" value="Submit" name="submit">
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    