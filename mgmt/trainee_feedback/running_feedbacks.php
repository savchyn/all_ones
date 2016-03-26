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
        	<h1>Daily Feedback</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
			<a href="daily_feed.php" class="btn btn-primary">All </a>&nbsp;&nbsp;&nbsp;
		<a href="running_feedbacks.php" class="btn btn-info">Running </a>&nbsp;&nbsp;&nbsp;
		<a href="passout_feddbacks.php" class="btn btn-danger">Passout</a><br><br>
		
		
   <form action="" method="post">
       <table class="table table-bordered" style="text-align:center;">
           <thead>
              <th> Name</th> 
                <th>Registration Number</th> 
                <th>Time Duratuion</th> 
           </thead>
           <?php 
$que=mysql_query("select * from login_detail where DATE(NOW()) < DATE(Right(duration,10)) order by  Right(registration,4) asc");
    
    while($row = mysql_fetch_array($que)){
        $name=$row['trainee_fname'];
         $_SESSION['reg_num']=$row['registration'];
        $reg_num=$row['registration'];
        $course=$row['course_name'];
        $dura=$row['duration'];?>
      <tr><td><?php echo $name;  ?></td>
           
       <td> <?php echo $reg_num;?></td>
        
    <td><?php echo $dura;?></td>
           <td><a class="btn btn-info" href="view.php?rgn=<?php echo $reg_num ;?>">View Feedback</a></td>
        
    </tr> <?php } ?>
    </table><br>
    
        </form>
        </div> 
	 </div>         

<!--code for down table -->        
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    