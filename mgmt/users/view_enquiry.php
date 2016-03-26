<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<head>
		<script>
	function filterby(first){
		var type='view_enq';	
 	     document.getElementById("view_enq_div").style.display="none";
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
            document.getElementById("filtred").innerHTML=res;
            }
          }
        xmlhttp.open("GET","filter_enquiry.php?first="+first+"&type="+type,true);
        xmlhttp.send();
        }
        </script>
</head>
		


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
        <?php
$date1=@$_GET["fromdate"];
$date2=@$_GET["todate"];
$filter=@$_GET["filtervalue"];
if(isset($_REQUEST['search']))
{  ?>
<div style="color:#000; margin-top:10px;width:100%;max-width:100%;">
    <table class="table table-bordered" style="text-align:center;word-wrap: break-word;">
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
	<?php $que="select * from add_enquiry where date BETWEEN '".$date1."' AND '".$date2."' && enq_type='".$filter."' ";
	$qry=mysql_query($que)or die(mysql_error());
	while($fetch1=mysql_fetch_array($qry)){?>
	<?php if($fetch1['enq_type']=="United States Individual Training"){?>
			<tr style="background:pink;">
			<?php } 
			else if($fetch1['enq_type']=="Domestic Individual Training"){?>
			<tr style="background:skyblue;">
	
			<?php
																		} 
			else if($fetch1['enq_type']=="World Individual Training"){?>
			<tr style="background:orange;">	
			<?php } 
			else if($fetch1['enq_type']=="Domestic Corporate Training"){?>
			<tr style="background:yellow;">
					
			<?php } 
			else if($fetch1['enq_type']=="International Corporate Training"){?>
			<tr style="background:yellow;">
			
			<?php } 
			else if($fetch1['enq_type']=="College Workshop"){?>
			<tr style="background:purple;color:#fff;">
			
			<?php } 
			else if($fetch1['enq_type']=="Domestic Project"){?>
			<tr style="background:#008B8B;color:black;">
			<?php } 
			else if($fetch1['enq_type']=="International Project"){?>
			<tr style="background:green;color:#fff;">
				<?php }
										   
	 else if($fetch1['enq_source']=="Walk-in"){?>
			<tr style="background:red;color:black;">
				<?php }
				?>
			<!--<td ><input name="checkbox[]" type="checkbox" value="<?php //echo $fetch['id']; ?>"></td> -->
			<td><a href="show_enquiry.php?sid=<?= $fetch1['id'];?>" style="color:#fff;"><?php echo $fetch1['id'];?></a></td>	
			<td><?php echo $fetch1['u_name'];?></td>
			<td><?php echo $fetch1['email'];?></td>
			<td><?php echo $fetch1['country'];?></td>
			<td><?php echo $fetch1['country_code'];?>-<?php echo $fetch1['contact'];?></td>
			<td><?php echo $fetch1['enq_type'];?></td>
			<td><?php echo $fetch1['u_message'];?></td>
			<td><?php echo $fetch1['e_message'];?></td>
			<td><?php echo $fetch1['enq_source'];?></td>
			<td><?php echo $fetch1['date'];?></td>
			<td><?php echo $fetch1['in_interface'];?></td>
			<td><a href="updatestatus.php?uid=<?= $fetch1['id']; ?>" style="color:#fff;"><?php echo $fetch1['enq_status'];?></a></td>
				
				<td><a onclick="return confirm('Are You Sure To Want Delete')" href="delete_view_enquery.php?uid=<?= $fetch1['id']; ?>"style="color:black;">Delete</a></td>
			</tr>
			   
    
			   
    <?php   }} else{?>
    
        <div class="pagetitle">
        <form method="get" action="">
        	<h1>View Enquiry</h1>
         <a href="add_enquiry.php" ><button style="float:right;background:#0b4073;color:#fff;">Add Enquiry</button></a>
         <input type="text" name="fromdate" placeholder="From Date" id="demo1" onclick="javascript:NewCssCal('demo1')" style="cursor:pointer">
         <input type="text" name="todate" placeholder="To Date" id="demo2" onclick="javascript:NewCssCal('demo2')" style="cursor:pointer">
        
			<span > <select class="btn btn-primary"  name="filtervalue" >
				<!-- onchange="filterby(this.value)" -->
		<option>Domestic Individual Training</option> 
		<option>World Individual Training</option>  
		<option>United States Individual Training</option> 
		<option>Domestic Corporate Training</option>
		<option>International Corporate Training</option>
		<option>College Workshop</option>
		<option>Domestic Project</option>
		<option>International Project</option>
				</select></span>
			<input type="submit" value="Search" name="search">
         </form>
			
			<br><br>
			<form name="form1" method="post" action="">
			<input class="btn btn-danger" name="delete" type="submit" value="Delete">
			
		
			
        </div><!--pagetitle-->
		<div id="filtred" style="color:#000; margin-top:10px;width:100%;max-width:100%;display:block;"></div>
    <div id="view_enq_div" style="color:#000; margin-top:10px;width:100%;max-width:100%;display:block;">
    <table class="table table-bordered" style="text-align:center;word-wrap: break-word;">
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
		$data=mysql_query("select * from add_enquiry order by id desc")or die(mysql_error());
		while($fetch = mysql_fetch_array($data)){
			
			?>
			<?php if($fetch['enq_type']=="United States Individual Training"){?>
			<tr style="background:pink;">	
			<?php } 
			else if($fetch['enq_type']=="Domestic Individual Training"){?>
			<tr style="background:skyblue;">	
			<?php } 
			else if($fetch['enq_type']=="World Individual Training"){?>
			<tr style="background:orange;">	
			<?php } 
			else if($fetch['enq_type']=="Domestic Corporate Training"){?>
			<tr style="background:yellow;">
						
			<?php } 
			else if($fetch['enq_type']=="International Corporate Training"){?>
			<tr style="background:yellow;">
			
			<?php } 
			else if($fetch['enq_type']=="College Workshop"){?>
			<tr style="background:purple;color:#fff;">
			
			<?php } 
			else if($fetch['enq_type']=="Domestic Project"){?>
				<tr style="background:#008B8B;color:black;">
				
			<?php } 
			else if($fetch['enq_type']=="International Project"){?>
			<tr style="background:green;color:#fff;">
			
			   
    <?php  }
        
        
        else if($fetch['enq_type']=="Web_Enquiry"){?>
			<tr style="background:gray;color:black;">
				<?php } 
			
			 else if($fetch['enq_source']=="Walk in"){?>
			<tr style="background:red;color:black;">
				<?php }
			
				?>
		<td ><input name="checkbox[]" type="checkbox" value="<?php echo $fetch['id']; ?>"></td>
			<td><a href="show_enquiry.php?sid=<?= $fetch['id'];?>" style="color:black;"><?php echo $fetch['id'];?></a></td>	
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
			<td><a href="updatestatus.php?uid=<?= $fetch['id']; ?>"style="color:black;"><?php echo $fetch['enq_status'];?></a></td>
				<td><a onclick="return confirm('Are You Sure To Want Delete')" href="delete_view_enquery.php?uid=<?= $fetch['id']; ?>"style="color:black;">Delete</a></td>
			</tr>
			<?php 
        
        
        }
?> </form>
		<?php
	
}?>
    
    </table>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

   <?php

// Check if delete button active, start this  multiselect delete

if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];
$sql = "DELETE FROM add_enquiry WHERE id='$del_id'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=view_enquiry.php\">";
}
 }


?>     
    