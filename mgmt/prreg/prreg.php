<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php 
if(isset($_REQUEST['submit']))
{
	$que="insert into prregistration(ptitle, ptool, pdesc, pfees, ppurpose, lname, fname, nationality, address, city, state, country, postcode, code, mobile, email, ginstitute, gbranch, gyears, gpercentage, pinstitute, pbranch, pyears, ppercentage) values ('".$_POST['ptitle']."', '".$_POST['ptool']."', '".$_POST['pdesc']."', '".$_POST['pfees']."', '".$_POST['ppurpose']."', '".$_POST['lname']."', '".$_POST['fname']."', '".$_POST['nationality']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['country']."', '".$_POST['postcode']."', '".$_POST['code']."', '".$_POST['mobile']."', '".$_POST['email']."', '".$_POST['ginstitute']."', '".$_POST['gbranch']."', '".$_POST['gyears']."', '".$_POST['gpercentage']."', '".$_POST['pinstitute']."', '".$_POST['pbranch']."', '".$_POST['pyears']."', '".$_POST['ppercentage']."')";
	$qry=mysql_query($que)or die(mysql_error());
	if($qry)
	{
		echo '<script>alert("Data Has Been Inserted!");</script>';
		echo '<script>window.location="project.php";</script>';	
	}
}
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
    <tr><td>Project Title</td><td><input type="text" name="ptitle" placeholder="Enter Project Title"></td></tr>
    <tr><td>Project Tool</td><td><input type="text" name="ptool" placeholder="Enter Project Tool"></td></tr>
    <tr><td>Project Description</td><td><textarea name="pdesc" rows="10" cols="20" placeholder="Enter Project Description"></textarea></td></tr>
    <tr><td>Project Fees</td><td><input type="text" name="pfees" placeholder="Enter Project Fees"></td></tr>
    <tr><td>Project Purpose</td><td><input type="text" name="ppurpose" placeholder="Bachlors / Masters / PHD / Commercial"></td></tr>
    <tr><td>Name</td><td><input type="text" name="lname" placeholder="Last Name"><input type="text" name="fname" placeholder="First Name"></td></tr>
    <tr><td>Nationality</td><td><input type="text" name="nationality" placeholder="Enter Nationality"></td></tr>
    <tr><td>Address</td><td><input type="text" name="address" placeholder="Enter Address"></td></tr>
    <tr><td>City</td><td><input type="text" name="city" placeholder="Enter City"></td></tr>
    <tr><td>State</td><td><input type="text" name="state" placeholder="Enter State"></td></tr>
    <tr><td>Country</td><td><input type="text" name="country" placeholder="Enter Country"></td></tr>
    <tr><td>Postal Code</td><td><input type="text" name="postcode" placeholder="Postal Code"></td></tr>
    <tr><td>Mobile</td><td><input type="text" name="code" placeholder="Code" style="width:40px;"><input type="text" name="mobile" placeholder="Enter Contact No."></td></tr>
    <tr><td>Email</td><td><input type="text" name="email" placeholder="Enter Email"></td></tr>
    <tr><td>Graduation</td><td><input type="text" name="ginstitute" placeholder="Institute / University"><input type="text" name="gbranch" placeholder="Enter Branch"><input type="text" name="gyears" placeholder="Years (From - To)"><input type="text" name="gpercentage" placeholder="Percentage"></td></tr>
    <tr><td>Post Graduation</td><td><input type="text" name="pinstitute" placeholder="Institute / University"><input type="text" name="pbranch" placeholder="Enter Branch"><input type="text" name="pyears" placeholder="Years (From - To)"><input type="text" name="ppercentage" placeholder="Percentage"></td></tr>
    
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

        
    