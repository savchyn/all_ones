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
                alert(" Fill Amount");
                em_name.focus;
                return false;
            } 
            var dp = document.msd.code.value;
            if (dp == "") {
                alert("Please Fill Installment No");
                dp.focus;
                return false;
            } 
        var dps = document.msd.demo1.value;
            if (dps == "") {
                alert("Please fill  Date");
                dps.focus;
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
    <tr><td>Amount: <input type="text" name="courseadd" id="courseadd" value="<?php   
        $ms=$_GET['ct'];
        $qry=mysql_query("select * from trregistration where id='$ms';");
       while($fetch=mysql_fetch_array($qry)){
             $inst1=$fetch['installment1'];
           $inst2=$fetch['installment2'];
           $inst3=$fetch['installment3'];
           $inst=$fetch['installment'];
           
			 $sub_inst1=$fetch['inst_f_submited_fee']; 
         $sub_inst2=$fetch['inst_s_submited_fee']; 
         $sub_inst3=$fetch['inst_t_submited_fee'];
           $sub_date1=strtotime($fetch['due_date1']); 
         $sub_date2=strtotime($fetch['due_date2']); 
         $sub_date3=strtotime($fetch['due_date3']);
           $date1=time();

	$diff1=$date1-$sub_date1;
           $diff2=$date1-$sub_date2;
           $diff3=$date1-$sub_date3;
       $diff_day1=floor($diff1/(60*60*24));
           $diff_day2=floor($diff2/(60*60*24));
           $diff_day3=floor($diff3/(60*60*24));
           
           
           if($inst=='1'){
           if($sub_inst1==''){
               if($diff_day1>=0){
               $extra=100*$diff_day1;
               $totalpay=$inst1+$extra;
               echo $totalpay; 
           }
               else {echo $inst1;}
           
           }
           }
           
           if($inst=='2'){
           
           if($sub_inst1==''){
                 if($diff_day1>=0){
               $extra=100*$diff_day1;
               $totalpay=$inst1+$extra;
               echo $totalpay; 
                 }
               else {echo $inst1;}
           }
           
           if($sub_inst1!='' && $sub_inst2==''){
               if($diff_day2>=0){
               $extra=100*$diff_day2;
               $totalpay=$inst2+$extra;
               echo $totalpay;
           }
                else {echo $inst2;}
           }
            
           }
           if($inst=='3'){
           
               
               if($sub_inst1==''){
                    if($diff_day1>=0){
               $extra=100*$diff_day1;
               $totalpay=$inst1+$extra;
               echo $totalpay; 
                    }
                   else {echo $inst1;}
           }
           
           if($sub_inst1!='' && $sub_inst2==''){
               if($diff_day2>=0){
               $extra=100*$diff_day2;
               $totalpay=$inst2+$extra;
               echo $totalpay; 
               }
                else {echo $inst2;}
           }
           
            if($sub_inst1!='' && $sub_inst2!='' && $sub_inst3==''){
                if($diff_day3>=0){
               $extra=100*$diff_day3;
               $totalpay=$inst3+$extra;
               echo $totalpay; 
                }
                 else {echo $inst3;}
           }
           
         }
           
    }
        
        ?>" ></td>
        
    <td>Installment No: <input type="text" name="code" id="code" value=" <?php $ms=$_GET['ct'];
        $qry=mysql_query("select * from trregistration where id='$ms';");
       while($fetch=mysql_fetch_array($qry)){
             $inst1=$fetch['installment1'];
           $inst2=$fetch['installment2'];
           $inst3=$fetch['installment3'];
           $inst=$fetch['installment'];
           
			 $sub_inst1=$fetch['inst_f_submited_fee']; 
         $sub_inst2=$fetch['inst_s_submited_fee']; 
         $sub_inst3=$fetch['inst_t_submited_fee'];
           $sub_date1=strtotime($fetch['due_date1']); 
         $sub_date2=strtotime($fetch['due_date2']); 
         $sub_date3=strtotime($fetch['due_date3']);
           $date1=time();

	$diff1=$date1-$sub_date1;
           $diff2=$date1-$sub_date2;
           $diff3=$date1-$sub_date3;
       $diff_day1=floor($diff1/(60*60*24));
           $diff_day2=floor($diff2/(60*60*24));
           $diff_day3=floor($diff3/(60*60*24));
           
           
           if($inst=='1'){
               
               
           if($sub_inst1==''){
               $extra=100*$diff_day1;
               $totalpay=$inst1+$extra;
               echo "1"; 
           }
               }
           }
           
           if($inst=='2'){
           
           if($sub_inst1==''){
               $extra=100*$diff_day1;
               $totalpay=$inst1+$extra;
               echo "1";  
           }
           
           if($sub_inst1!='' && $sub_inst2==''){
               $extra=100*$diff_day2;
               $totalpay=$inst2+$extra;
               echo "2";  
           }
            
           }
           if($inst=='3'){
               
               if($sub_inst1==''){
               $extra=100*$diff_day1;
               $totalpay=$inst1+$extra;
               echo "1"; 
           }
           
           if($sub_inst1!='' && $sub_inst2==''){
               $extra=100*$diff_day2;
               $totalpay=$inst2+$extra;
              echo "2"; 
           }
           
            if($sub_inst1!='' && $sub_inst2!='' && $sub_inst3==''){
               $extra=100*$diff_day3;
               $totalpay=$inst3+$extra;
               echo "3"; 
           }
           
         }
        
        
        ?>"></td> </tr>
      <tr> <td> Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onclick="javascript:NewCssCal('demo1')" id="demo1" name="demo1"></td>
          <td>Narration <textarea name="nar" id="nar" rows="3" cols="12"></textarea></td>
      <td><input type="submit" value="Submit" name="add" ></td>
    </tr></table></form><br>
        
        <?php
if(isset($_POST['add'])){
    $amount=$_POST['courseadd'];
    $installno=$_POST['code'];
    $date=$_POST['demo1'];
     $nar=$_POST['nar'];
    
    if($installno=='1'){
    $query=mysql_query("update trregistration set inst_f_submited_fee='$amount',inst_f_date='$date',narration_f_inst='$nar' where id='$ms';") ;
    if($query){
        echo "Fee Submitted Successfully";
    }
    }
    
     if($installno=='2'){
    $query=mysql_query("update trregistration set inst_s_submited_fee='$amount',inst_s_date='$date',narration_s_inst='$nar' where id='$ms';") ;
    if($query){
        echo "Fee Submitted Successfully";
    }
    }
     if($installno=='3'){
    $query=mysql_query("update trregistration set inst_t_submited_fee='$amount',inst_t_date='$date',narration_t_inst='$nar' where id='$ms';") ;
    if($query){
        echo "Fee Submitted Successfully";
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

        
    