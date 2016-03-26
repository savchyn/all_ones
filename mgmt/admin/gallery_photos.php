<?php session_start();
if(!isset($_SESSION['username']))
{
	header('location:index.php');
	
}
	include("conn.php");

?>
<?php
	if(isset($_REQUEST['nid']))
	{
		$df="delete from gallery_photos where id='".$_REQUEST['nid']."'";
		$x=mysql_query($df);
		if($x)
		{
			echo '<script>alert("Record Has Been Deleted!");</script>';
			echo '<script>window.location="gallery_photos.php";</script>';
		}
	}
	
	$s=0;
	if(isset($_POST['submit']))
	{
		mysql_query("update gallery_photos set status='0'");
		$arr=array();
		$arr=$_POST['lang'];
		for($i=0;$i<sizeof($arr);$i++)
		{
			$x=mysql_query("update gallery_photos set status='1' where id='".$arr[$i]."'");
			if($x)
			{
				$s=1;
			}
		}
		if($s==1)
		  echo'<script>alert("Photos Has Been Updated!");</script>';
		  echo'<script>window.location="gallery_photos.php";</script>';
	}
	

?>



<?php include("header.php");?>
<script type="text/javascript">
    function selectAll(x) {
        for (var i = 0, l = x.form.length; i < l; i++)
            if (x.form[i].type == 'checkbox' && x.form[i].name != 'sAll')
                x.form[i].checked = x.form[i].checked ? false : true
    }
</script>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
                <div class="headerright">
            	<div class="dropdown notification">
                                        
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">   Welcome &nbsp;
        <?=$_SESSION['username']?>
            <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href="#"><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>-->
                        <li><a href="sign_out.php"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<!--<ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed selected"><a href="#" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="#" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
                <li class="active">News</li>
            </ul>
			
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Admin Dashboard</h1><span style="float:right;"><span style="background-color:#006699;"><a href="add_photos.php"style="color:#ffffff;">Add Photos</a></span><input type="submit" name="submit" value="Upload" style="background-color:#006699;color:#FFFFFF;"></span> 
        </div><!--pagetitle-->
    <div style="color:#990000;">
    <table class="table table-bordered">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                    	<tr style="color:#000000;">
                        	<th class="boxxcheckk"><input type="checkbox" name="sAll" onClick="selectAll(this)" /></th>
                            <th>S.No.</th>
                            
                            <th>Photo</th>
                            
                            <th>Added Date</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
       <tbody>
       </tbody>
       <?php
	   	 $fg="select * from gallery_photos order by id desc";
		 $mg=mysql_query($fg) or die(mysql_error());
		 $i=1;
		 while($ab=mysql_fetch_array($mg)){
	   ?><tr><td class="boxxcheckk"><input type="checkbox" name="lang[]" value="<?php echo $ab['id']?>"></td>
       <td><?php echo $i;?></td>
      
       <td><img src="<?php echo $ab['photo']?>" style="width:60px; height:50px;"></td>
       
       <td><?php echo $ab['date']?></td>
       <td><a style="float:left" href="gallery_photos.php?nid=<?= $ab['id']?>"><center class="icon-remove"></center></a>
       <td><?php if ($ab['status']==1){?><img src="img/red-35780_640.png" width="20" height="20" style="margin-left:20px;"><?php } ?></td>
       </tr>
       <?php $i++;}?></tbody>
                </table>
				 
	 </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft">Katniss Premium Admin Template v1.0</div>
    	<div class="footerright">&copy; ThemePixels - <a href="http://twitter.com/themepixels">Follow me on Twitter</a> - <a href="http://dribbble.com/themepixels">Follow me on Dribbble</a></div>
    </div><!--footer-->
    
</div><!--mainwrapper-->
</form>
</body>
</html>

                    
                    
                    
                    
                    
                    
                    