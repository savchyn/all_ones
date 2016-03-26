<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
$arr=array();
if(isset($_REQUEST['update']))
{
	if(empty($_POST['password']))
	{
		$arr['password']=	"Please Enter Password";
	}
	if(empty($arr))
	{
		$update=mysql_query("update users set password='".$_POST['password']."' where id ='".$_GET['sid']."'")or die(mysql_error());
		
			echo '<script>alert("Password Has Been Updated!");</script>';
			echo '<script>window.location="users.php";</script>';	
		
	}
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
        	<h1>Dashboard</h1>
            
        </div><!--pagetitle-->
    <div style="margin:50px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <?php
    	$qry=mysql_query("select * from users where id='".$_GET['sid']."'")or die(mysql_error());
    	while($fetch=mysql_fetch_array($qry)){
    ?>
    <tr><td>Employee Name</td><td><input type="text" name="em_name" value="<?php echo $fetch['username'];?>" readonly=""></td></tr>
    <tr><td>Password</td><td><input type="text" name="password" value="<?php echo $fetch['password'];?>"><?php echo @$arr['password'];?></td></tr>
    <?php } ?>
        </table><br>
        <input type="submit" value="Update" name="update">
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    