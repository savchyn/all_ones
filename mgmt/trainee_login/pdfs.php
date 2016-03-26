<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>


<?php include("header.php");?>
<head>

</head>
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
        	<h1> Courses Pdf</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
  
        </div> 
	 </div>         

<!--code for down table -->
 <div class="rightpanel" style="clear:both;">
    <div style="margin:10px;color:#990000; margin-top:10px">
   <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;"  >
    <thead>
    `<th>S.No.</th>
    	<th>Course Name </th>
         
    </thead>
    <?php
    	$que=mysql_query("select * from africa_pdf order by id asc;");
    	while($fetch=mysql_fetch_array($que)){
    ?>
    <tr>
        <td><?php echo $fetch['id'];?></td>
    <td><?php echo $fetch['pdf'];?></td>
    <td ><a href="downloadfile.php?sapdf=<?php echo $fetch['id'];?>" >Download</a></td>	
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

        
    