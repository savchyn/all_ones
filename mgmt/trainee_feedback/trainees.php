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
    <div style="margin:10px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
		<th>S.No.</th>
		<th>Name</th>    
		<th>Training Code</th>
		<th>Training Name</th>
		<th>Training Duration</th>
		<th>Training Mode</th>
		<th>Training Fees</th>
		<th>Email Id</th>
		<th>Contact No.</th>
    </thead>
    <?php
    $que=mysql_query("select * from trregistration order by id desc");
    while($fetch=mysql_fetch_array($que)){
    ?>
    <tr>
		<td><?php echo $fetch['id']; ?></td>
		<td><?php echo $fetch['fname'];?>&nbsp;<?php echo $fetch['lname'];?></td>
		<td><?php echo $fetch['trcode'];?></td> 
		<td><?php echo $fetch['trname'];?></td>
		<td><?php echo $fetch['fromduration'];?> - <?php echo $fetch['toduration'];?></td>
		<td><?php echo $fetch['trmode'];?></td>
		<td><?php echo $fetch['trfees'];?></td> 
		<td><?php echo $fetch['email'];?></td>
		<td><?php echo $fetch['countrycode'];?> - <?php echo $fetch['mobile'];?></td>  
    </tr>
    <?php } ?>
        </table>
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    