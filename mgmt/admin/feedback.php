<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
if(isset($_GET['did']))
{
	$que=mysql_query("delete from feedback where id='".$_GET['did']."'")or die(mysql_error());
	if($que)
	{
		echo '<script>alert("Record Has Been Deleted!");</script>';
		echo '<script>window.location="feedback.php";</script>';
	}
}
?>

<?php include("header.php");?>
 <div class="rightpanel">
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
    <div style="height:50px;margin:50px;color:#990000; margin-top:10px">
    <table class="table table-bordered" style="text-align:center;">
        <colgroup>
        	<col class="col0">
            <col class="col1">
            <col class="col0">
            <col class="col1">
            <col class="col0">
        </colgroup>
        <thead>
        	<tr style="color:#000000; background-color:#000000;">
            	<th>S.NO.</th>
            	<th>Org Name</th>
            	<th>Ins Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Day</th>
                <th>Date</th>
                <th width="120">Topic</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php
			$data=mysql_query("select * from feedback order by id desc")or die(mysql_error());
			$i=1;
			while($fetch=mysql_fetch_array($data)){
			?>
            <tr><td><?php echo $i ;?></td>
            <td><?php echo $fetch['orname']?></td>
            <td><?php echo $fetch['insname']?></td>
            <td><?php echo $fetch['trainee_name'];?></td>
            <td><?php echo $fetch['email'];?></td>
            <td><?php echo $fetch['day'];?></td>
            <td><?php echo $fetch['date'];?></td>
            <td><?php echo $fetch['topic'];?></td>
            <td><?php echo $fetch['feedback'] ?></td>
            <td><a href="feedback.php?did=<?= $fetch['id'];?>"><img src="img/DeleteRed.png" width="20" height="20" style="float:left;"></a></td>
            </tr>
            <?php $i++; }?>
			
        </tbody></table>
        
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft">Katniss Premium Admin Template v1.0</div>
    	<div class="footerright">&copy; ThemePixels - <a href="http://twitter.com/themepixels">Follow me on Twitter</a> - <a href="http://dribbble.com/themepixels">Follow me on Dribbble</a></div>
    </div><!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    