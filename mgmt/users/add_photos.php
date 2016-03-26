<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");	
} 
include("conn.php");

$arr=array();
if(isset($_REQUEST['submit']))
{
	if(empty($_FILES['photo']['name']))
	{
		 $arr['photo']="Photo is Required";
	}
	else{
		$target_path="gallery/".$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
		$ppath="gallery/".$_FILES['photo']['name'];		
		}
		
		if(empty($arr))
		{
			$que="insert into gallery_photos(photo,date) values('".$ppath."',now())";
			$hk=mysql_query($que)or die(mysql_error());
			if($hk)
			{
				echo '<script>alert("Photo Have Been Added Successfully!");</script>';
				echo '<script>window.location="gallery_photos.php";</script>';	
			}	
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
            
        </div>
         <div style="height:50px;margin:50px;color:#990000; margin-top:10px">
         <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
			<table>
			<tr><td>Select Photo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="file" name="photo"><span style="color:red;"><?php echo @$arr['photo'];?></span></td></tr>			
			</table>
			<input type="submit" name="submit" value="Submit">         
         </form>
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
