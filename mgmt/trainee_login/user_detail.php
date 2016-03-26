<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
// code for dob submit

if(isset($_POST['dobsubmit'])){

	$dob=$_POST['dob'];
	$mysql=mysql_query("update login_detail set dob='$dob' where username='{$_SESSION['loguser']}' && password='{$_SESSION['pass']}'");

	if($mysql){
	echo "<script>alert('Thanku for Submit DOB')</script>";
		header("location:user_detail.php");
	}
	
	else{
	echo "Error".mysql_error();
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
<!--code for upper table -->
<div class="rightpanel" style="clear:both;">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            
            <div class="headerright">
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#"> 
           Welcome <b><?php echo $_SESSION['username'];?></b>
                   
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
        	<h1>Daily Feedbacks</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
		
           <?php   

$que=mysql_query("select * from login_detail where username='{$_SESSION['loguser']}' && password='{$_SESSION['pass']}';");
    if ($que){
  if ($que && mysql_num_rows($que)>0) {
    if($row = mysql_fetch_array($que)){
        $name=$row['trainee_fname']." ".$row['trainee_lname'];
         $_SESSION['reg_num']=$row['registration'];
        $reg_num=$row['registration'];
        $course=$row['course_name'];
        $dura=$row['duration'];
		$brdy=$row['dob'];
		   
		 }}} 
	// form for brdy date_create



if($brdy==''){
?>
		<form action="" method="post">
			Your Date of Birth <input type="date" name="dob" required>
			<input type="submit" name="dobsubmit" value="Submit">
		</form><br>
		
		<?php
	
}

// form end here
		    // div for birthday
		 	$dt=date_create();
$today=date_format($dt, 'Y-m-d');
//echo $brdy." Anf ".$today;
		if($brdy==$today){
		?>
<div class="alert alert-success" style="width:70%;">
			
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><img height="80" width="80" src="images2/happy_birday.jpg">
    <strong><?php echo $name;?> Wish You A Very Happy Birthday!! From Nex-G Team!!</strong>
  </div> 
				<?php
		}
	
	$str = $dura;
// Split it into pieces, with the delimiter being a space. This creates an array.
$split = explode(" ", $str);
// Get the last value in the array.
// count($split) returns the total amount of values.
// Use -1 to get the index.
$todu=$split[count($split)-1];
//echo $todu;
$date2=strtotime($todu);
$date3=strtotime($today);
	$diff=$date2-$date3;
       $diff=floor($diff/(60*60*24));	

?>
		 <p style="font-size:14px;">"<b><?php echo $diff;?> </b> days left for course completion"<br>

<b>NOTE:-</b> We will give you 30 days support after the course completion.<br></p><br>
		
		
		   <form action="" method="post">
       <table class="table table-bordered" style="text-align:center;">
		   
		   
       <tr><td>Trainee Name : <?php echo $name;  ?></td><td>Registration Number : <?php echo $reg_num;?></td></tr>
        
    <tr><td>Course Name : <?php echo $course;?></td><td>Time Duratuion : <?php echo $dura;?></td></tr> 
    </table><br>
    
        </form>
        </div> 
	 </div>         

<!--code for down table -->
 <div class="rightpanel" style="clear:both;">
    <div style="margin:10px;color:#990000; margin-top:10px">
   <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;"  >
    <thead>
    `<th>S.No.</th>
    	<th>Trainer Name </th>
		<th> Training Module </th> 
		<th>Training  Topic</th>
		<th>Class Time</th>
        <th> Understanding</th>  
        <th>Comments </th>  
         <th>Date </th>  
        
    </thead>
    <?php
    	$que=mysql_query("select * from daily_feedback where registration='$reg_num'");
    	while($fetch=mysql_fetch_array($que)){
    ?>
    <tr>
        <td><?php echo $fetch['id'];?></td>
    <td><?php echo $fetch['trainer_name'];?></td>
    <td ><?php echo $fetch['training_module'];?></td>
    <td><?php echo $fetch['training_topic'];?></td>
		  <td><?php echo $fetch['from_hour'].":".$fetch['from_minute']." TO ".$fetch['to_hour'].":".$fetch['to_minute'];?></td>
    <td><?php echo $fetch['understanding'];?></td>
        <td><?php echo $fetch['comment'];?></td>
        <td><?php echo $fetch['date'];?></td>
    </tr>
    <?php } ?>
        </table><br>
  
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    