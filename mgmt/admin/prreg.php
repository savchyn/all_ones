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
	$del=mysql_query("delete from users where username='".$_GET['did']."'")or die(mysql_error());
	$delet=mysql_query("delete from prreguser where username='".$_GET['did']."'")or die(mysql_error());
	
		echo'<script>alert("Employee Has been Deleted!");</script>';
		echo'<script>window.location="prreg.php";</script>';	
		
}
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
        	<h1>Employee's List</h1>
            <a href="addprreguser.php" ><button style="float:right;background:#0b4073;color:#fff;">Add Users</button></a>
        </div><!--pagetitle-->
    <div style="margin:50px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
    	<th>S. No.</th>
		<th>Employee Name</th>
		<th>Password</th>
		<th>Delete</th>    
    </thead>
    <?php 
    $qry=mysql_query("select * from prreguser")or die(mysql_error());
    $i=1;
    while($fetch=mysql_fetch_array($qry)){
    ?>
    <tr>
    <td><a href="show_users.php?sid=<?= $fetch['id'];?>"><?php echo $i;?></a></td>
    <td><?php echo $fetch['username'];?></td>
    <td><?php echo $fetch['password'];?></td>
    <td><a href="prreg.php?did=<?= $fetch['username'];?>"><img src="img/DeleteRed.png" alt="" width="20" height="20"></a></td>
    <?php $i++; } ?>
    </tr>
        </table>
        
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    