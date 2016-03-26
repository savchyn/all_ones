<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
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
                        <li><a href="editorout.php"><span class="icon-off"></span> Sign Out</a></li>
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
        <tbody>
        	<?php
			$data=mysql_query("select * from contactus where id='".$_REQUEST['sid']."'")or die(mysql_error());
			$fetch=mysql_fetch_array($data);
			?>
            <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $fetch['name'];?>"></td></tr>
            <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $fetch['email'];?>"></td></tr>
           	<tr><td>Mobile</td><td><input type="text" name="mobile" value="<?php echo $fetch['mobile'];?>"></td></tr>
            <tr><td>Country</td><td><input type="text" name="country" value="<?php echo $fetch['country'];?>"></td></tr>
            <tr><td>Query</td><td><input type="text" name="query" value="<?php echo $fetch['query'];?>"></td></tr>
            </tbody></table>
            Comment<br>
            <textarea name="message" class="ckeditor"><?php echo $fetch['message'];?></textarea>
        
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

        
    