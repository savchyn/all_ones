<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");?>


       <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<!--<script >
       $(document).ready(function() {
    $("#sdate").datepicker();
  });
      
    </script> -->
<script type="text/javascript">
    function val(){
        var em_name = document.msd.courseadd.value;
            if (em_name == "") {
                alert(" Fill Amount");
                em_name.focus;
                return false;
            } 
            var dp = document.msd.code.value;
            if (dp == "") {
                alert("Please fill  Installament No");
                dp.focus;
                return false;
            } 
         var dps = document.msd.narration.value;
            if (dps == "") {
                alert("Please fill  Narration");
                dps.focus;
                return false;
            } 
        var dpss = document.msd.sdate.value;
            if (dpss == "") {
                alert("Please Submit Date");
                dpss.focus;
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
    <tr><td>Amount : <input type="text" name="courseadd" id="courseadd" ></td>
        
    <td>Installment No : <input type="text" name="code" id="code" ></td>
        
    </tr>
        <tr>  <td> Narration <textarea  name="narration" id="narration"> </textarea></td></td><td>Submit Date <input type="text" name="sdate" onclick="javascript:NewCssCal('sdate')" id="sdate">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" name="add" ></td>
    </tr></table></form><br>
        
        <?php
if(isset($_POST['add'])){
     $id=$_GET['stid'];
    $co=$_POST['courseadd'];
    $code=$_POST['code'];
      $cod=$_POST['narration'];
     $dt=$_POST['sdate'];
     //for first insttalment
     if($code=="1"){
    $query=mysql_query("UPDATE trregistration SET inst_f_submited_fee='$co',narration_f_inst='$cod',inst_f_date='$dt'  WHERE id='$id';");
    if($query){
        echo "Payment Submitted Sucessfully Successfully";
    }
    
}
     //for second insttalment
     elseif($code=="2"){
    $query=mysql_query("UPDATE trregistration SET inst_s_submited_fee='$co',narration_s_inst='$cod',inst_s_date='$dt'  WHERE id='$id';");
    if($query){
        echo "Payment Submitted Sucessfully Successfully";
    }
    
}
     //for third insttalment
   else{
    $query=mysql_query("UPDATE trregistration SET inst_t_submited_fee='$co',narration_t_inst='$cod',inst_t_date='$dt'  WHERE id='$id';");
    if($query){
        echo "Payment Submitted Sucessfully Successfully";
    }
    
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

        
    