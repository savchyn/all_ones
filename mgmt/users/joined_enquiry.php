<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
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
    <div style="color:#000; margin-top:10px;width:100%;max-width:100%;">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
		<th style="width:20px;">S. No.</th>    
		<th style="width:50px;">Enquiry Name</th>
		<th style="width:130px;">Email</th>
		<th style="width:70px;">Country</th>
		<th style="width:90px;">Contact</th>
		<th style="width:70px;">Type</th>
		<th style="width:100px;">Enquiry Msg</th>
		<th style="width:100px;">Editor Msg</th>
		<th style="width:100px;">Enquiry Source</th>
		<th style="width:100px;">Date</th>
		<th style="width:100px;">Interact Interface</th>
		<th style="width:80px;">Status</th>
		
    </thead>
    <?php 
		$data=mysql_query("select * from add_enquiry where enq_status='Sent-Pipeline-Join-Close' order by id desc")or die(mysql_error());
		while($fetch = mysql_fetch_array($data)){
			
			?>
			<?php if($fetch['enq_type']=="United States Individual Training"){?>
			<tr style="background:pink;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#000;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#000;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>	
			<?php } 
			else if($fetch['enq_type']=="Domestic Individual Training"){?>
			<tr style="background:skyblue;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#000;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#000;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>	
			<?php } 
			else if($fetch['enq_type']=="World Individual Training"){?>
			<tr style="background:orange;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#000;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#000;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>	
			<?php } 
			else if($fetch['enq_type']=="Domestic Corporate Training"){?>
			<tr style="background:yellow;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#000;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#000;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>			
			<?php } 
			else if($fetch['enq_type']=="International Corporate Training"){?>
			<tr style="background:yellow;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#000;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#000;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>
			<?php } 
			else if($fetch['enq_type']=="College Workshop"){?>
			<tr style="background:purple;color:#fff;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#fff;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#fff;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>
			<?php } 
			else if($fetch['enq_type']=="Domestic Project"){?>
			<tr style="background:green;color:#fff;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#fff;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:#fff;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>
			<?php } 
			else if($fetch['enq_type']=="International Project"){?>
			<tr style="background:green;color:#fff;">
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:#fff;"><?php echo $fetch['id'];?></a></td>	
			<td><?php echo $fetch['u_name'];?></td>
			<td><?php echo $fetch['email'];?></td>
			<td><?php echo $fetch['country'];?></td>
			<td><?php echo $fetch['country_code'];?>-<?php echo $fetch['contact'];?></td>
			<td><?php echo $fetch['enq_type'];?></td>
			<td><?php echo $fetch['u_message'];?></td>
			<td><?php echo $fetch['e_message'];?></td>
			<td><?php echo $fetch['enq_source'];?></td>
			<td><?php echo $fetch['date'];?></td>
			<td><?php echo $fetch['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>" style="color:#fff;"><?php echo $fetch['enq_status'];?></a></td>
			</tr>
			   
    <?php  } }?>
    
    </table>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    