<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
$arr=array();
if(isset($_POST['submit']))
{
	
	
	if($_POST['enq_source']=="other")
	{
		if(empty($_POST['other']))
		{
			$arr['other']="Please Mention";	
		}
		$ensource=$_POST['other'];	
	}
	else 
	{
		$ensource=$_POST['enq_source'];	
	}
	
	if(empty($arr))
	{
		$que="insert into add_enquiry(emp_name, u_name, email, country, country_code, contact, enq_status, enq_type, u_message, e_message, in_interface, enq_source, date) values('".$_SESSION['username']."', '".$_POST['u_name']."', '".$_POST['email']."', '".$_POST['country']."', '".$_POST['country_code']."', '".$_POST['contact']."', '".$_POST['enq_status']."', '".$_POST['type']."', '".$_POST['u_message']."', '".$_POST['e_message']."', '".$_POST['in_interface']."','".$ensource."', now())";
		$qry=mysql_query($que)or die(mysql_error());
		if($qry)
		{
			echo '<script>alert("Your data has been added!");</script>';
                            header('location:view_enquiry.php');
			//echo '<script>window.location="view_enquiry.php";</script>';	
		}	
		if($_SESSION['username']=='bhowmick')
		{
		$to="info@nexg.in, bdm@exuberantsolutions.com";
		}
		else if($_SESSION['username']=='adarsh')
		{
		$to="adarsh@nexg.in, bdm@exuberantsolutions.com";	
		}
		elseif($_SESSION['username']=='varun')
		{
		$to="bde@exuberantsolutions.com, bdm@exuberantsolutions.com";		
		}
		elseif($_SESSION['username']=='vandana')
		{
		$to='bdm@exuberantsolutions.com';	
		}
		elseif($_SESSION['username']=='sudhanshu')
		{
		$to='sudhanshu.k@exuberantsolutions.com, bdm@exuberantsolutions.com'	;
		}
		$title='Enquiry Management System - '.$_POST['type'].'-'.$_POST['u_name'];
		$emname=$_SESSION['username'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$contact=$_POST['country_code']."-".$_POST['contact'];
		$enqstatus=$_POST['enq_status'];
		$enqmsg=$_POST['u_message'];
		$edmsg=$_POST['e_message'];
		$enqsource=$ensource;
		$intinterface=$_POST['in_interface'];
		$body="Edit By: $emname\n\n Email: $email\n\n Country: $country\n\n Contact: $contact\n\n Enquiry Status: $enqstatus\n\n Enquiry Message: $enqmsg\n\n Editor Message: $edmsg\n\n Enquiry Source: $enqsource\n\n Interact Interface: $intinterface\n";
		mail($to, $title,$body);
	}
	

}
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
    <tr><td>Enquiry Name</td><td><input type="text" name="u_name" placeholder="Enter Enquiry Name"><?php echo @$arr['u_name'];?></td></tr>
    <tr><td>Email Id</td><td><input type="text" name="email" placeholder="Enter User Email Id"><?php echo @$arr['email'];?></td></tr>
    <tr><td>Country</td><td><select name="country" onchange="changeSecond(this.value)">
	<?php $qry=mysql_query("select * from country_code");
		while($data=mysql_fetch_array($qry)){
			echo"<option value=".$data['country_name'].">".$data['country_name']."</option>";
			}	
	 ?>
    </select>
    </td></tr>
    <tr><td>Contact No.</td><td><select id="second" name="country_code" style="width:100px;"><option>93</option></select><input type="text" name="contact" placeholder="Enter User Contact No."><?php echo @$arr['contact'];?></td></tr>
    <tr><td>Enquiry Status</td><td><select name="enq_status">
		<option>Open</option>
		<option>Sent</option>
		<option>Sent-Handled</option>
		<option>Sent-Pipeline</option>   
		<option>Sent-Pipeline-Join-Close</option>
		<option>Not Interested</option>
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
    <tr><td>Enquiry Message</td><td><textarea name="u_message" rows="5" cols="20" placeholder="Enter Enquiry Message"></textarea></td></tr>
    <tr><td>Editor Message</td><td><textarea name="e_message" rows="5" cols="20" placeholder="Enter Your Message"></textarea></td></tr>
    <tr><td>Interact Interface</td><td><select name="in_interface">
		<option>None</option>
		<option>WhatsApp</option> 
		<option>GTalk</option>
		<option>Ymessenger</option> 
		<option>FB Chat</option>  
    </select></td></tr>
    <tr><td>Enquiry Source</td><td><select name="enq_source"  onchange="if (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">
		<option>Web Form</option>
		<option>Email</option>
		<option>Phone</option> 
		<option>Mobile Apps</option> 
		<option>Visitor</option>
          <option>Walk in</option>
		<option>Social Media</option>  
		<option value="other">Others (Mention)</option>
    </select> &nbsp;&nbsp;&nbsp;<input type="text" name="other" style="visibility:hidden;" placeholder="Please Mention">
    </td></tr>
    
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

        
    
