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
        	<h1>User Details</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
   <form action="" method="post">
       <table class="table table-bordered" style="text-align:center;">
           <?php   

$que=mysql_query("select * from login_detail where username='{$_SESSION['loguser']}' && password='{$_SESSION['pass']}';");
    if ($que){
  if ($que && mysql_num_rows($que)>0) {
    if($row = mysql_fetch_array($que)){
        $name=$row['trainee_name'];
         $_SESSION['reg_num']=$row['registration'];
        $reg_num=$row['registration'];
        $course=$row['course_name'];
        $dura=$row['duration'];?>
       <tr><td>Trainee Name : <?php echo $name;  ?></td><td>Registration Number : <?php echo $reg_num;?></td></tr>
        
    <tr><td>Course Name : <?php echo $course;?></td><td>Time Duratuion : <?php echo $dura;?></td></tr> <?php }}} ?>
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

        
    