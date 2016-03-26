<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include('conn.php');
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
 <div class="rightpanel" style="clear:both;width:300%">
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
        	<h1>View Feedback</h1>
            
        </div><!--pagetitle-->
    <div style="margin:50px;color:#990000;">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <thead >
    `<th>S.No.</th>
    	<th style="width:4%;">To what extent did this training? </th>
		<th> Accomplish its stated learning objectives? </th> 
		<th>Meet your expectations?  </th>  
        <th>Teach you something you can use in your job? </th>  
        <th>Contain information appropriate to your needs?</th>  
        <th>Comments (If Any) </th>  
        <th> Training contents  </th>  
        <th>Organization of material </th>  
        <th>Delivery methods </th>  
        <th>Presentation of information</th>  
        <th>Duration of the sessions   </th>  
        <th>Level of material covered    </th>  
        <th>Project Guidance </th>  
        <th>LAB Infrastructure </th>  
        <th>Placement Support</th>  
        <th>Trainer Rating</th>  
        <th>Over all rating</th>  
        <th>Comments (If Any) It's Mandatory* </th>  
        <th> Additional Suggestion or Comments</th>  
        <th> Would you suggest this training to friends</th>  
        <th>Date  User Fill</th>
        <th>Orignal Date</th>
        
    </thead>
    <?php
    $ms=$_GET['rg'];
    	$que=mysql_query("select * from trainee_feedback where registration_number='$ms'");
    	while($fetch=mysql_fetch_array($que)){
    ?>
    <tr>
    <td><?php echo $fetch['id'];?></td>
    <td ><?php echo $fetch['q_first'];?></td>
    <td><?php echo $fetch['q_second'];?></td>
    <td><?php echo $fetch['q_third'];?></td>
        <td><?php echo $fetch['q_fourth'];?></td>
        <td><?php echo $fetch['q_five'];?></td>
        <td><?php echo $fetch['comment'];?></td>
        <td><?php echo $fetch['training_contents'];?></td>
        <td><?php echo $fetch['delevery_mathod'];?></td>
        <td><?php echo $fetch['persantaion_of_information'];?></td>
        <td><?php echo $fetch['organization_of_matirial'];?></td>
        <td><?php echo $fetch['duration_of_sessions'];?></td>
        <td><?php echo $fetch['matirial_level'];?></td>
        <td><?php echo $fetch['project_guidance'];?></td>
        <td><?php echo $fetch['lab_Infrastructure'];?></td>
        <td><?php echo $fetch['placement_support'];?></td>
        <td><?php echo $fetch['trainer_rating'];?></td>
        <td><?php echo $fetch['our_all_rating'];?></td>
        <td><?php echo $fetch['comment_mendotry'];?></td>
        <td><?php echo $fetch['additional_suggestion'];?></td>
        <td><?php echo $fetch['tell_friend'];?></td>
         <td><?php echo $fetch['submit_date'];?></td>
        <td><?php echo $fetch['orignal_date'];?></td>
        
    </tr>
    <?php } ?>
        </table><br>
  
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    