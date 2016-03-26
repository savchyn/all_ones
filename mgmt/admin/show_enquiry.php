<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
if(isset($_REQUEST['update']))
{
$update=mysql_query("update add_enquiry set u_name='".$_POST['u_name']."', email='".$_POST['email']."', contact='".$_POST['contact']."', e_message='".$_POST['e_message']."', u_message='".$_POST['u_message']."', comment='".$_POST['comment']."' where id='".$_POST['id']."' ")or die(mysql_error());
if($update)
{
$rd="select * from add_enquiry where id='".$_POST['id']."'"	;
$df=mysql_query($rd);
echo '<script>alert("Data has been Updated!");</script>';
echo '<script>window.location="view_enquiry.php";</script>';
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
        	<h1>View Enquiry</h1>
         <a href="add_enquiry.php" ><button style="float:right;background:#0b4073;color:#fff;">Add Enquiry</button></a>
        </div><!--pagetitle-->
    <div style="margin:50px;color:#990000; margin-top:10px">
    <form method="post" action="">
    <table class="table table-bordered" style="text-align:center;">
    <?php
		$qry=mysql_query("select * from add_enquiry where id = '".$_GET['sid']."' ")or die(mysql_error());
		while($fetch=mysql_fetch_array($qry)){    
     ?>
     <tr><td>id</td><td><input type="text" value="<?php echo $fetch['id'];?>" readonly="" name="id"></td></tr>
     <tr><td>Editor Name</td><td><input type="text" value="<?php echo $fetch['emp_name'];?>" readonly=""></td></tr>
     <tr><td>Enquiry Name</td><td><input type="text" name="u_name" value="<?php echo $fetch['u_name'];?>"></td></tr>
     <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $fetch['email'];?>"></td></tr>
     <tr><td>Country</td><td><input type="text" value="<?php echo $fetch['country'];?>" name="country" readonly=""></td></tr>
     <tr><td>Contact No.</td><td><input type="text" name="country_code" value="<?php echo $fetch['country_code'];?>" style="width:80px;" readonly=""><input type="text" name="contact" value="<?php echo $fetch['contact'];?>"></td></tr>
     <tr><td>Enquiry Type</td><td><input type="text" value="<?php echo $fetch['enq_type'];?>" readonly=""></td></tr>
     <tr><td>Enquiry Source</td><td><input type="text" value="<?php echo $fetch['enq_source'];?>" readonly=""></td></tr>
     <tr><td>Enquiry Status</td><td><input type="text" value="<?php echo $fetch['enq_status'];?>" readonly=""></td></tr>
     <tr><td>Interact Interface</td><td><input type="text" value="<?php echo $fetch['in_interface'];?>" readonly=""></td></tr>
     <tr><td>Date</td><td><input type="text" value="<?php echo $fetch['date'];?>" readonly=""></td></tr>
     <tr><td>Enquiry Message</td><td><textarea cols="30" rows="6" name="e_message"><?php echo $fetch['e_message'];?></textarea></td></tr>
     <tr><td>Editor Message</td><td><textarea cols="30" rows="6" name="u_message"><?php echo $fetch['u_message'];?></textarea></td></tr>
     <tr><td>Extra Comment</td><td><textarea cols="30" rows="6" name="comment"><?php echo $fetch['comment'];?></textarea></td></tr>
    <?php } ?>
    </table><br>
    <input type="submit" name="update" value="Update">
    </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    