<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>


<?php include("header.php");?>
<script>
        function changeSecond(first){
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("second").innerHTML=res;
            }
          }
        xmlhttp.open("GET","call_script.php?first="+first,true);
        xmlhttp.send();
        }
        </script>
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
			$qry=mysql_query("select * from prregistration where id = '".$_GET['pid']."'")or die(mysql_error());
			$fetch=mysql_fetch_array($qry);    
    ?>
    <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $fetch['fname'];?> <?php echo $fetch['lname'];?>"></td></tr>
    <tr><td>Project Title</td><td><input type="text" name="ptitle" value="<?php echo $fetch['ptitle'];?>"></td></tr>
    <tr><td>Project Description</td><td><textarea name="pdesc" rows="10" cols="20"><?php echo $fetch['pdesc'];?></textarea></td></tr>
    <tr><td>Project Fees</td><td><input type="text" name="pfees" value="<?php echo $fetch['pfees'];?>"></td></tr>
    <tr><td>Project Purpose</td><td><input type="text" name="ppurpose" value="<?php echo $fetch['ppurpose'];?>"></td></tr>
    <tr><td>Nationality</td><td><input type="text" name="nationality" value="<?php echo $fetch['nationality'];?>"></td></tr>
    <tr><td>Address</td><td><input type="text" name="address" value="<?php echo $fetch['address'];?>"></td></tr>
    <tr><td>City</td><td><input type="text" name="city" value="<?php echo $fetch['city'];?>"></td></tr>
    <tr><td>State</td><td><input type="text" name="state" value="<?php echo $fetch['state'];?>"></td></tr>
    <tr><td>Country</td><td><input type="text" name="country" value="<?php echo $fetch['country'];?>"></td></tr>
    <tr><td>Postal Code</td><td><input type="text" name="postcode" value="<?php echo $fetch['postcode'];?>"></td></tr>
    <tr><td>Contact No.</td><td><input type="text" name="code" value="<?php echo $fetch['code'];?>" style="width:40px;"><input type="text" name="mobile" value="<?php echo $fetch['mobile'];?>"></td></tr>
    <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $fetch['email'];?>"></td></tr>
    <tr><td>Graduation Institute</td><td><input type="text" name="ginstitute" value="<?php echo $fetch['ginstitute'];?>"></td></tr>
    <tr><td>Graduation Branch</td><td><input type="text" name="gbranch" value="<?php echo $fetch['gbranch'];?>"></td></tr>
    <tr><td>Graduation years</td><td><input type="text" name="gyears" value="<?php echo $fetch['gyears'];?>"></td></tr>
    <tr><td>Graduation Percentage</td><td><input type="text" name="gpercentage" value="<?php echo $fetch['gpercentage'];?>"></td></tr>
    <tr><td>PG Institute</td><td><input type="text" name="pinstitute" value="<?php echo $fetch['pinstitute'];?>"></td></tr>
    <tr><td>PG Branch</td><td><input type="text" name="pbranch" value="<?php echo $fetch['pbranch'];?>"></td></tr>
    <tr><td>PG years</td><td><input type="text" name="pyears" value="<?php echo $fetch['pyears'];?>"></td></tr>
    <tr><td>PG Percentage</td><td><input type="text" name="ppercentage" value="<?php echo $fetch['ppercentage'];?>"></td></tr>
    
        </table><br>
  
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    