<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php
if (isset($_REQUEST['update']))
{
	$id=$_GET['uid'];
	$data=mysql_query("update add_enquiry set enq_status='".$_POST['enq_status']."', comment='".$_POST['comment']."' where id = '".$_GET['uid']."'")or die(mysql_error());
	echo '<script>alert("Status Has Been Updated!");</script>';
	echo '<script>window.location="view_enquiry.php"</script>';
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
    
    <tr><td>Enquiry Status</td><td><select name="enq_status">
		<option>Open</option>
		<option>Sent</option>
		<option>Sent-Close</option>
		<option>Sent-Pipeline</option>
		<option>Sent-Pipeline-Join-Close</option>
		<option>Not Interested</option>
    </select></td></tr>
    
    <tr><td>Comment</td><td><textarea rows="5" cols="20" placeholder="Enter Your Comment" name="comment"></textarea></td></tr>
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

        
    