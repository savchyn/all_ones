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
    <div style="margin:10px;color:#990000; margin-top:10px">
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
		<th>S.No.</th>
		<th>Name</th> 
        <th>Registration Number</th>
		<th>Due Balance</th>
		
    </thead>
    <?php
    

    $que=mysql_query("select * from trregistration order by id desc");
    while($fetch=mysql_fetch_array($que)){
    
    $date1=date_create(date("Y/m/d"));
    
	$date2=date_create($fetch['fromduration']);

	$diff=date_diff($date2,$date1);
	
	$due_date1=date_create($fetch['due_date1']);
	$diff1=date_diff($date1,$due_date1);
	$due_date2=date_create($fetch['due_date2']);
	$due_date3=date_create($fetch['due_date3']);
	$diff3=date_diff($date1,$due_date2);
	$diff4=date_diff($date1,$due_date3);
	/*if($fetch['installment']==1){
        $_SESSION['dub']=$fetch['trfees']-$fetch['reg_amount']-$fetch['installment1'];
        $du=$_SESSION['dub'];
    }
        elseif($fetch['installment']==2){
            $_SESSION['dub']=$fetch['trfees']-$fetch['reg_amount']-$fetch['installment1']-$fetch['inst_s_submitted_fee'];
            $du=$_SESSION['dub'];
              
        }
       else{ */
           $_SESSION['dub']=$fetch['trfees']-$fetch['reg_amount']-$fetch['inst_f_submited_fee']-$fetch['inst_s_submited_fee']-$fetch['inst_t_submited_fee'];
           $du= $_SESSION['dub'];
               
      // } 
        
?>
    <tr>
    <?php $diff2=$diff1->format("%R%a days");
    		 $diff5=$diff3->format("%R%a days");
    		 $diff6=$diff4->format("%R%a days");			     

     		$mail1=$fetch['email'];
     		$to=$mail1; 
     		$title="Your Fees due date is ".$fetch['due_date1']."";
     		$body="Please come along with your due fees";
     		
			    
     ?>
		<td><a href="payment.php?stid=<?= $fetch['id'];?>"><?php echo $fetch['id']; ?></a></td>
		<td><?php echo $fetch['fname'];?>&nbsp;<?php echo $fetch['lname'];?></td>
	<td><?php echo $fetch['reg_number'];?></td>
		<td><?php echo $du;?></td>  
       
    </tr>
    <?php } ?>
        </table>
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    