<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");?>

<script type="text/javascript">
       function replace( hide,show ) {
  document.getElementById(hide).style.display="none";
  document.getElementById(show).style.display="block";
}
    </script>
<script type="text/javascript">
    function val(){
        var em_name = document.msd.courseadd.value;
            if (em_name == "") {
                alert(" Fill Employee  Name");
                em_name.focus;
                return false;
            } 
            var dp = document.msd.code.value;
            if (dp == "") {
                alert("Please fill  Employee Code");
                dp.focus;
                return false;
            } 
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
        	<h1>Search Employee Salary</h1>
            
        </div><!--pagetitle-->
   


      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse" >
    <form action="" method="post" onsubmit="return val();" name="msd">
    <table class="table table-bordered" style="text-align:center;">
    <tr><td>Employee Name: <input type="text" name="courseadd" id="courseadd"  placeholder="Employee Name"></td>
        
    <td>Employee Code: <input type="text" name="code" id="code"  placeholder="Employee Code"></td>   
    <td><input type="submit" value="Find" name="submit" style="margin-left:30px;"></td></tr> 
    </table></form><br>
        
        <?php
if(isset($_POST['submit'])){
     $registration=$_POST['code'];
   echo "<script type='text/javascript'>window.location.href='emp_sal.php?llt=$registration';</script>;";
}

?>
          
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    