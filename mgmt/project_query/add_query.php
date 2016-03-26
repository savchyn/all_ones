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
        var em_name = document.msd.reg.value;
            if (em_name == "") {
                alert(" Fill Registration Number");
                em_name.focus;
                return false;
            } 
            var dp = document.msd.query.value;
            if (dp == "") {
                alert("Please fill  Query");
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
        	<h1>Dashboard</h1>
            
        </div><!--pagetitle-->
   


      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
    <form action="" method="post" onsubmit="return val();" name="msd">
    <table class="table table-bordered" style="text-align:center;">
    <tr><td>Registration Number&nbsp;&nbsp;&nbsp; <input type="text" name="reg" id="reg" ></td> </tr>
        
     <tr><td>Query&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea type="text" name="query" id="query" cols="10" rows="5"></textarea> <br><br><input type="submit" value="submit" name="submit" style="margin-left:230px;"></td> </tr>
</tr>
   </table></form><br>
        
        <?php
if(isset($_POST['submit'])){
    $reg=$_POST['reg'];
    $que=$_POST['query'];
     $status="open";
    $query=mysql_query("INSERT INTO project_query (reg_number,query,status,date) VALUES ('$reg','$que','$status',now());");
    if($query){
        
        
         $to="projects@nexg.in";
          $tos="info@nexg.in";
                
    $subject = 'Project Query';
    $body=("Registration No. - $reg\n Query - $que"); 
    $headers = 'From: info@nexg.in' . "\r\n" .
    'Reply-To:  info@nexg.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        $headers.= "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n";          
        $fmail=mail($to, $subject, $body, $headers);
        $smail=mail($tos, $subject, $body, $headers);
        
        echo "<script type='text/javascript'>alert('Query Added Successfully');window.location.href='all_query.php';</script>;";
    }
    else{
        echo "error in course adding".mysql_error();
    }
}

?>
          
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    