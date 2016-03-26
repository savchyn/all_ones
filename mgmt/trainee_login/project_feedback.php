<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>


<?php include("header.php");?>
     <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            <script>
  $(document).ready(function() {
    $("#fdate").datepicker();
  });
      $(document).ready(function() {
    $("#tdate").datepicker();
  });
                 $(document).ready(function() {
    $("#tfd").datepicker();
  });
      $(document).ready(function() {
    $("#ttd").datepicker();
  });
                $(document).ready(function() {
    $("#ld").datepicker();
  });
        </script>
<style>

</style>

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
        	<h1>Project Daily Feedback</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
    <form method="post" action="submit.php" name="check" onsubmit="return valid();" enctype="multipart/form-data">
        
         
         <!-- <h2 style="margin-left:100px;">Certificate Issue Form</h2> -->
        <?php $que=mysql_query("select * from login_detail where username='{$_SESSION['loguser']}' && password='{$_SESSION['pass']}';");
    if ($que){
  if ($que && mysql_num_rows($que)>0) {
    if($row = mysql_fetch_array($que)){?>
      
		<table class="table table-bordered" style="text-align:center;">
<tr><td>Registration Number:</td><td><input type="text" name="rg_number" id="reg_number" value="<?php echo $row['registration'];}}}?>" required></td></tr>
  <tr><td>Developer Name  </td><td>  <input type="text" name="developer_name" id="developer_name" required></td></tr>
<tr><td>Project</td><td><input type="text" name="project" id="project" required></td></tr>
<tr><td>Project Lead</td><td><input type="text" name="project_lead" id="project_lead" required></td></tr>
  <tr><td>Module </td><td><input type="text" name="project_module" id="project_module" required></td></tr>
 <tr><td>Task Completed </td><td><input type="text" name="task_completed" id="task_completed" required></td></tr>
<tr><td>Task Completed % </td><td><input type="text" name="task_completed_percentege" id="task_completed_percentege" required></td></tr>
<tr><td>Issues/Red Flags(if any) </td><td><input type="text" name="issue" id="issue"></td></tr>
<tr><td>Attachment </td><td><input type="file" name="project_data" id="project_data"></td></tr>	
 <tr><td> Additional Feedback(if any)  </td><td>      <textarea type="text" name="comment" id="comment" rows="6" cols="100"></textarea></td></tr>
<tr><td>  Date   </td><td>          <input type="text" name="fdate" id="fdate" required></td></tr>
</table>
                                                <br><br> <input type="submit" value="Submit" name="project_feedback" id="daily_feedback" style="margin-left:45%;">
  
        
        </form>   
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    