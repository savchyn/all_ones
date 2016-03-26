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
        	<h1>Employee Salary Details</h1>
            
        </div><!--pagetitle-->
   


      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
    <form action="" method="post" onsubmit="return val();" name="msd">
    <table class="table table-bordered" style="text-align:center;">
    <thead>
        <th>S.No</th>
        <th>Month/Year</th>
        <th>Employee Name</th>
        <th>Registration Number</th>
    <th>Employee Salary</th>
         <th>Present</th>
         <th>Absent</th>
         <th>Hallf Day</th>
         <th>WeekOff</th>
         <th>Gratuity</th>
        <th>This Month Salary</th>
        
    </thead>
        <?php
   $m=$_GET['llt'];
     $result=mysql_query("SELECT * FROM emp_attendance WHERE registation_number='$m'");
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){ 
        
         
               /*$totalday=$row['1s']+$row['2s']+$row['3s']+$row['4s']+$row['5s']+$row['6s']+$row['7s']+$row['8s']+$row['9s']+$row['10s']+$row['11s']+$row['12s']+$row['13s']+$row['14s']+$row['15s']+$row['16s']+$row['17s']+$row['18s']+$row['19s']+$row['20s']+$row['21s']+$row['22s']+$row['23s']+$row['24s']+$row['25s']+$row['26s']+$row['27s']+$row['28s']+$row['29s']+$row['30s']+$row['31s']; */
        //condition for absent
        $totalabsent=0;
        if($row['1s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['2s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['3s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['4s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['5s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['6s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['7s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['8s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['9s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['10s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['11s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['12s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['13s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          
        if($row['14s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['15s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['16s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['17s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['18s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['19s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['20s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['21s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['22s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['23s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['24s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['25s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['26s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['27s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
          if($row['28s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['29s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        if($row['30s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
         if($row['31s']=='0')
        {
            $totalabsent=$totalabsent+1;
        }
        //condition for half day
        $half=0;
        if($row['1s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['1s']=='0.5')
        {
            $half=$half+1;
        }
      
        if($row['2s']=='0.5')
        {
            $half=$half+1;
        }
 
        if($row['3s']=='0.5')
        {
            $half=$half+1;
        }
  
        if($row['4s']=='0.5')
        {
            $half=$half+1;
        }
     
        if($row['5s']=='0.5')
        {
            $half=$half+1;
        }
  
        if($row['6s']=='0.5')
        {
            $half=$half+1;
        }

        if($row['7s']=='0.5')
        {
            $half=$half+1;
        }

        if($row['8s']=='0.5')
        {
            $half=$half+1;
        }

        if($row['9s']=='0.5')
        {
            $half=$half+1;
        }
 
        if($row['10s']=='0.5')
        {
            $half=$half+1;
        }
      
        if($row['11s']=='0.5')
        {
            $half=$half+1;
        }

        if($row['12s']=='0.5')
        {
            $half=$half+1;
        }
        
   
        if($row['13s']=='0.5')
        {
            $half=$half+1;
        }
        if($row['14s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['15s']=='0.5')
        {
            $half=$half+1;
        }
     
        if($row['16s']=='0.5')
        {
            $half=$half+1;
        }
        
    
        if($row['17s']=='0.5')
        {
            $half=$half+1;
        }
      
        if($row['18s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['19s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['1s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['20s']=='0.5')
        {
            $half=$half+1;
        }
      
        if($row['21s']=='0.5')
        {
            $half=$half+1;
        }
        
       
        if($row['22s']=='0.5')
        {
            $half=$half+1;
        }
        
        if($row['23s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['24s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['25s']=='0.5')
        {
            $half=$half+1;
        }
        
        if($row['26s']=='0.5')
        {
            $half=$half+1;
        }
        
        
        if($row['27s']=='0.5')
        {
            $half=$half+1;
        }
        
        if($row['28s']=='0.5')
        {
            $half=$half+1;
        }
        
        if($row['29s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['30s']=='0.5')
        {
            $half=$half+1;
        }
       
        if($row['31s']=='0.5')
        {
            $half=$half+1;
        }
       // function for presents 
        
        
         $pres=0;
        if($row['1s']=='1')
        {
            $pres=$pres+1;
        }
      
        if($row['2s']=='1')
        {
            $pres=$pres+1;
        }
 
        if($row['3s']=='1')
        {
            $pres=$pres+1;
        }
  
        if($row['4s']=='1')
        {
            $pres=$pres+1;
        }
     
        if($row['5s']=='1')
        {
            $pres=$pres+1;
        }
  
        if($row['6s']=='1')
        {
            $pres=$pres+1;
        }

        if($row['7s']=='1')
        {
            $pres=$pres+1;
        }

        if($row['8s']=='1')
        {
            $pres=$pres+1;
        }

        if($row['9s']=='1')
        {
            $pres=$pres+1;
        }
 
        if($row['10s']=='1')
        {
            $pres=$pres+1;
        }
      
        if($row['11s']=='1')
        {
            $pres=$pres+1;
        }

        if($row['12s']=='1')
        {
            $pres=$pres+1;
        }
        
   
        if($row['13s']=='1')
        {
            $pres=$pres+1;
        }
        if($row['14s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['15s']=='1')
        {
            $pres=$pres+1;
        }
     
        if($row['16s']=='1')
        {
            $pres=$pres+1;
        }
        
    
        if($row['17s']=='1')
        {
            $pres=$pres+1;
        }
      
        if($row['18s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['19s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['20s']=='1')
        {
            $pres=$pres+1;
        }
      
        if($row['21s']=='1')
        {
            $pres=$pres+1;
        }
        
       
        if($row['22s']=='1')
        {
            $pres=$pres+1;
        }
        
        if($row['23s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['24s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['25s']=='1')
        {
            $pres=$pres+1;
        }
        
        if($row['26s']=='1')
        {
            $pres=$pres+1;
        }
        
        
        if($row['27s']=='1')
        {
            $pres=$pres+1;
        }
        
        if($row['28s']=='1')
        {
            $pres=$pres+1;
        }
        
        if($row['29s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['30s']=='1')
        {
            $pres=$pres+1;
        }
       
        if($row['31s']=='1')
        {
            $pres=$pres+1;
        }
       //function for weekoff
        
         $weekoff=0;
        if($row['1s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
      
        if($row['2s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
 
        if($row['3s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
  
        if($row['4s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
     
        if($row['5s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
  
        if($row['6s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }

        if($row['7s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }

        if($row['8s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }

        if($row['9s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
 
        if($row['10s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
      
        if($row['11s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }

        if($row['12s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
   
        if($row['13s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        if($row['14s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['15s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
     
        if($row['16s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
    
        if($row['17s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
      
        if($row['18s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['19s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['20s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
      
        if($row['21s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
       
        if($row['22s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
        if($row['23s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['24s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['25s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
        if($row['26s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
        
        if($row['27s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
        if($row['28s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
        if($row['29s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['30s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
       
        if($row['31s']=='1+0')
        {
            $weekoff=$weekoff+1;
        }
        
        // query pass for get total salary employee
        $tosal=mysql_query("SELECT * FROM emp_salary WHERE emp_reg='$m'");
        while($mm=mysql_fetch_array($tosal)){
          $grau=$mm['gratuity'];
            $ss=$mm['total'];
        }
        
        
        //end hear
        
        if($row['month']=='01' || $row['month']=='03' || $row['month']=='05' || $row['month']=='07' || $row['month']=='08' || $row['month']=='10' || $row['month']=='12' ){
        
            $paysal= $ss/31;
            $thalf=$pres+$half/2+$weekoff;
           // $tpay=$paysal*$thalf-$grau;
            $halfcut=$half/2*$paysal;
                $absuntcut=$totalabsent*$paysal;
            $totalcut=$halfcut+$absuntcut;
            //amount of this month
            $tpay=$ss-$totalcut-$grau;
            //end hear
        }
        
        
        if($row['month']=='04' || $row['month']=='06' || $row['month']=='09' || $row['month']=='11' ){
            
            $paysal=$ss/30;
            $thalf=$pres+$half/2+$weekoff;
           // $tpay=$paysal*$thalf-$grau;
             $halfcut=$half/2*$paysal;
                $absuntcut=$totalabsent*$paysal;
            $totalcut=$halfcut+$absuntcut;
            
            //amount of this month
            $tpay=$ss-$totalcut-$grau;
            //end hear
        }
        if($row['month']=='02'){
        $paysal= $ss/28;
            $thalf=$pres+$half/2+$weekoff;
             $halfcut=$half/2*$paysal;
                $absuntcut=$totalabsent*$paysal;
            $totalcut=$halfcut+$absuntcut;
            //amount of this month
            $tpay=$ss-$totalcut-$grau;
            //end hear
        }
       // $_SESSION['absnt']=$totalabsent;
        $ses_absnt=$totalabsent;
         // $_SESSION['half']=$half;
       $ses_half=$half;
       // $_SESSION['halfc']=$halfcut;
       $ses_halfc=$halfcut;
       // $_SESSION['abc']=$absuntcut;
        $ses_abc=$absuntcut;
       //  $_SESSION['totalcut']=$totalcut;
        $ses_totalcut=$totalcut;
        
    ?>
        <tr>
        <td ><?php echo $row['id'];?></td>
<td> <?php echo $row['month']."/".$row['year'];?></td>
        <td><?php echo $row['emp_name'];?></td>
        <td width="9%"><?php echo $row['registation_number'];?></td>
        <td><?php echo  $ss;?></td>
        <td><?php echo $pres;?></td>
        <td><?php echo $totalabsent;?></td>
        <td><?php echo $half;?></td>
        <td><?php echo $weekoff;?></td>
            <td><?php echo $grau;?></td>
        <td><?php echo $tpay;?></td>
            <td><a href="salary_slip.php?dd=<?php echo $row['month'];?>&yy=<?php echo $row['year'];?>&rr=<?php echo $row['registation_number'];?>&absent=<?php echo $ses_absnt;?>&half=<?php echo $ses_half;?>&halfcut=<?php echo $ses_halfc;?>&abc=<?php echo $ses_abc;?>&totalcut=<?php echo $totalcut;?>">Salary Slip</a></td>
       </tr>
        <?php }
	 
 }
else{
echo "<h5>No Record Filled Yet</h5>";

}
		
		?> </table>
        
        </form><br>
        
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    