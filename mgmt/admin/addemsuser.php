<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
$arr=array();
if(isset($_REQUEST['submit']))
{
	if(empty($_POST['emp_name']))
	{
		$arr['emp_name']="Please Enter Employee Name";
	}
	if(empty($_POST['pwd']))
	{
		$arr['pwd']="Please Enter Password";	
	}
	
	if(empty($arr))
	{
	$que="insert into emsuser(username, password) values('".$_POST['emp_name']."', '".$_POST['pwd']."')";
	$data=mysql_query($que)or die(mysql_error());
	$qry=mysql_query("insert into users(username, password) values('".$_POST['emp_name']."', '".$_POST['pwd']."')") or die(mysql_error());
	
		echo '<script>alert("Users Has Been Added!");</script>';
		echo '<script>window.location="emsuser.php";</script>';	
		
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
    <tr><td>Employee Name</td><td><input type="text" name="emp_name" placeholder="Enter Employee Name"><?php echo @$arr['emp_name'];?></td></tr>
    <tr><td>Password</td><td><input type="text" name="pwd" placeholder="Enter Password"><?php echo @$arr['pwd'];?></td></tr>
    
        </table><br>
        <input type="submit" value="Submit" name="submit">
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    