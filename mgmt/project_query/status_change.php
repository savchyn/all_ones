<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");?>
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
		<option>Action Taken</option>
		<option>Resolved</option>
		
    </select></td></tr>
    
    <tr><td>Comment</td><td><textarea rows="5" cols="20" placeholder="Enter Your Comment" name="comment"></textarea><br><br> <input type="submit" value="Update" name="update" style="margin-left:100px;"></td></tr>
        </table><br>
       
        </form>
        </div> 
	 </div>         
                        
    
    <div class="clearfix"></div>
    
    <!--footer-->
<?php
if (isset($_POST['update']))
{
	$id=$_GET['rg'];
    $status=$_POST['enq_status'];
    $comment=$_POST['comment'];
	$data=mysql_query("update project_query set status='$status',comment='$comment' where reg_number='$id'")or die(mysql_error());
     if($data){
          $tos="care@nexg.in";
                
    $subject = 'Action Against Project Query ';
    $body=("Registration No. - $id\n Action - $comment"); 
    $headers = 'From: info@nexg.in' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $ms=mail($tos, $subject, $body, $headers);
         
	echo '<script>alert("Status Has Been Updated!");</script>';
	echo '<script>window.location="all_query.php"</script>';
     }
}
?>
    
</div><!--mainwrapper-->

</body>
</html>

        
    