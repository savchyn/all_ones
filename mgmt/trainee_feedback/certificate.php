<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('conn.php');
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
        	<h1>Certificate Issue</h1>
            
        </div><!--pagetitle-->
    <div style="margin:50px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
    `<th>S.No.</th>
    	<th>Name</th>
        <th>Course Duration</th> 
		<th>Course Name</th>  
        <th>Course Code</th> 
        <th>Email Id</th> 
        <th>Date</th> 
    </thead>
    <?php
    	$que=mysql_query("select * from certficate_issue order by id asc");
    	while($fetch=mysql_fetch_array($que)){
    ?>
    <tr>
    <td><?php echo $fetch['id'];?></td>
    <td><?php echo $fetch['first_name']." ".$fetch['last_name'];?></td>
        <td><?php echo $fetch['time_from']." To ".$fetch['time_to'];?></td>
    <td><?php echo $fetch['training_name'];?></td>
         <td><?php echo $fetch['training_code'];?></td>
        <td><?php echo $fetch['email'];?></td>
          <td><?php echo $fetch['date'];?></td>
        <td><a href="cer_issue_delete.php?cd=<?php echo $fetch['id'];?>">Delete</a></td>
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

        
    