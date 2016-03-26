<?php
include('conn.php');
session_start();
if($_REQUEST['type']=='view_enq'){
$srch=$_REQUEST['first'];
	
	echo "<table class='table table-bordered' style='text-align:center;word-wrap: break-word;'>
    <thead>
		<th style='width:20px;'>S. No.</th>    
		<th style='width:50px;'>Enquiry Name</th>
		<th style='width:130px;'>Email</th>
		<th style='width:70px;'>Country</th>
		<th style='width:90px;'>Contact</th>
		<th style='width:70px;'>Type</th>
		<th style='width:100px;'>Enquiry Msg</th>
		<th style='width:100px;'>Editor Msg</th>
		<th style='width:100px;'>Enquiry Source</th>
		<th style='width:100px;'>Date</th>
		<th style='width:100px;'>Interact Interface</th>
		<th style='width:80px;'>Status</th>
    </thead>" ;
	if($srch=='All'){
$sql=mysql_query("select * from add_enquiry  order by id desc") ;
	}
	
	if($srch=='Domestic Individual Training'){
$sql=mysql_query("select * from add_enquiry where enq_type='Domestic Individual Training' order by id desc") ;
	}
	
	if($srch=='World Individual Training'){
$sql=mysql_query("select * from add_enquiry where enq_type='World Individual Training' order by id desc") ;
	}
	
	if($srch=='United States Individual Training'){
$sql=mysql_query("select * from add_enquiry where enq_type='United States Individual Training' order by id desc") ;
	}
	
	if($srch=='Domestic Corporate Training'){
$sql=mysql_query("select * from add_enquiry where enq_type='Domestic Corporate Training' order by id desc") ;
	}
	
	if($srch=='International Corporate Training'){
$sql=mysql_query("select * from add_enquiry where enq_type='International Corporate Training' order by id desc") ;
	}
	
	
	if($srch=='College Workshop'){
$sql=mysql_query("select * from add_enquiry where enq_type='College Workshop' order by id desc") ;
	}
	
	if($srch=='Domestic Project'){
$sql=mysql_query("select * from add_enquiry where enq_type='Domestic Project' order by id desc") ;
	}
	
	if($srch=='International Project'){
$sql=mysql_query("select * from add_enquiry where enq_type='International Project' order by id desc") ;
	}
	
if($sql && mysql_num_rows($sql)>0){
	while($fetch = mysql_fetch_array($sql)) {
		$id=$fetch['id'];
		$uname=$fetch['u_name'];
		$email=$fetch['email'];
		$country=$fetch['country'];
		$contact=$fetch['country_code']."-".$fetch['contact'];
		$enq_type=$fetch['enq_type'];
		$u_message=$fetch['u_message'];
		$emessage=$fetch['e_message'];
		$enq_source=$fetch['enq_source'];
		$date=$fetch['date'];
		$interface=$fetch['in_interface'];
		$status=$fetch['enq_status'];
	 if($fetch['enq_type']=="United States Individual Training"){
			echo '<tr style="background:pink;">	';
			 } 
			else if($fetch['enq_type']=="Domestic Individual Training"){
			echo '<tr style="background:skyblue;">';	
			 } 
			else if($fetch['enq_type']=="World Individual Training"){
			echo '<tr style="background:orange;">';	
			 } 
			else if($fetch['enq_type']=="Domestic Corporate Training"){
			echo '<tr style="background:yellow;">';
						
			 } 
			else if($fetch['enq_type']=="International Corporate Training"){
			echo '<tr style="background:yellow;">';
			
			 } 
			else if($fetch['enq_type']=="College Workshop"){
			echo '<tr style="background:purple;color:#fff;">';
			
			 } 
			else if($fetch['enq_type']=="Domestic Project"){
				echo '<tr style="background:#008B8B;color:black;">';
		     } 
			else if($fetch['enq_type']=="International Project"){
			echo '<tr style="background:green;color:#fff;">';
			  }
        
        
        else if($fetch['enq_type']=="Web_Enquiry"){
			echo '<tr style="background:gray;color:black;">';
		     } 
		
	echo "
		<td><a href='show_enquiry.php?sid=$id' style='color:black;'>$id</a></td>	
			<td>$uname</td>
			<td>$email</td>
			<td>$country</td>
			<td>$contact</td>
			<td>$enq_type</td>
			<td>$u_message</td>
			<td>$emessage</td>
			<td>$enq_source</td>
			<td>$date</td>
			<td>$interface</td>
			<td><a href='updatestatus.php?uid=$id' style='color:black;'>$status</a></td>
				<td><a onclick='return confirm('Are You Sure To Want Delete')' href='delete_view_enquery.php?uid=$id'style='color:black;'>Delete</a></td>
			</tr>";
	
 } 
	echo "</table>";
}
	else{
	echo "No Record Found";
	}
}
?>