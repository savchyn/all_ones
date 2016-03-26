<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");
 $ms=$_GET['dd'];
 $yy=$_GET['yy'];
 $rr=$_GET['rr'];
$halftday=$_GET['half'];
    $absent=$_GET['absent'];
    $halfcut=$_GET['halfcut'];
    $absentcut=$_GET['abc'];
    $toatlcut=$_GET['totalcut'];
?>


<script type="text/javascript">
      
          function printPage(id) {
    var printContents = document.getElementById(id).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
<script type="text/javascript">
    function val(){
        var em_name = document.msd.courseadd.value;
            if (em_name == "") {
                alert(" Fill Course  Name");
                em_name.focus;
                return false;
            } 
            var dp = document.msd.code.value;
            if (dp == "") {
                alert("Please fill  Course Code");
                dp.focus;
                return false;
            } 
    }
    </script>

<style>
    
    @media print {
    #addcourse {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}
  
   table,tr,td,th{
border:2px solid black; 
    }
    
</style>


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
        	<h1>Employee Salary Slip</h1>
            
        </div><!--pagetitle--><br><br>
     
                  <?php  
    
//code for fetch data from emp_attendance table

     $result=mysql_query("SELECT * FROM emp_attendance WHERE registation_number='$rr' && month='$ms' && year='$yy';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row=mysql_fetch_array($result)){
        
        //$name=$row['emp_name'];
       // $rg=$row['registation_number'];
        $month=$row['month'];
        $year=$row['year']; 
            }
   }
    else{echo "<script type='text/javascript'>alert('Employee num row error');</script>;"; }
}
else{echo "<script type='text/javascript'>alert('query error');</script>;";}
//end hear

// code for fetch data from emp_salart table
 $res=mysql_query("SELECT * FROM emp_salary WHERE emp_reg='$rr';");
if($res){
              if ($res && mysql_num_rows($res)>0) {
    while($row=mysql_fetch_array($res)){
        
        $name=$row['emp_name'];
       $rg=$row['emp_reg'];
         $pf=$row['pf'];
         $mop=$row['mop'];
         $basic=$row['basic'];
         $medical=$row['medical'];
         $conveyance=$row['conveyance'];
        $gratuity=$row['gratuity'];
         $department=$row['department'];
         $designation=$row['designation'];
         $location=$row['location'];
         $hra=$row['hra'];
         $fb=$row['fb'];
        $total=$row['total'];
        //$month=$row['month'];
       // $year=$row['year']; 
        $tepay=$total-$absentcut-$halfcut-$gratuity;
        $grossde=$toatlcut+$gratuity;
            }
   }
    else{echo "<script type='text/javascript'>alert('Employee num row error of emp_salary table');</script>;"; }
}
else{echo "<script type='text/javascript'>alert('query error emp_salary table');</script>;";}
//end hear
          ?> 
   
 <input type="button" value="Print" onclick="printPage('addcourse');" align="right" style="margin-left:50px; width: 6em;  height: 2em;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="hide-show-code.php?dd=<?php echo $ms;?>&yy=<?php echo $yy;?>&rr=<?php echo $rr;?>&absent=<?php echo $absent;?>&half=<?php echo $halftday;?>&halfcut=<?php echo $halfcut;?>&abc=<?php echo $absentcut;?>&totalcut=<?php echo $toatlcut;?>">Send on Email</a><br><br>

      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
          <center> <img src="images2/111.jpg" height="30" width="90" ></center><br><br>
          <h2 align="center">Nex-G  Employee Salary Slip</h2><br><br>
         
    <table class="table table-bordered" style="text-align:center;border:2px solid black;" cellspacing="5" cellpadding="6">
      <tr><td>Employee  Name :&nbsp;&nbsp;&nbsp;<?php echo $name;  ?></td><td>Registration Number :&nbsp;&nbsp;&nbsp; <?php echo $rg;?></td></tr>
              <tr><td>Department :&nbsp;&nbsp;&nbsp;<?php echo $department; ?></td><td>Designation : &nbsp;&nbsp;&nbsp;<?php echo $designation; ?></td></tr>
               <tr><td>PF No. :&nbsp;&nbsp;&nbsp;<?php echo $pf; ?></td><td>MOP : &nbsp;&nbsp;&nbsp;<?php echo $mop; ?></td></tr>
               <tr><td>Location :&nbsp;&nbsp;&nbsp;<?php echo $location; ?></td><td>Salary of Month :&nbsp;&nbsp;&nbsp;<?php echo $month." / ".$year?> </td></tr>
   </table> <br> 
          
          <table class="table table-bordered" style="text-align:center;border:2px solid black;" cellspacing="5" cellpadding="6">
           
                 <tr >
                 <th colspan="2" > Earnings</th>
                     <th colspan="3">Deductions</th>
                     </tr>
          
           <td><b>Description</b></td>
                    <td><b>Amount</b></td>
         
           <td><b>Description</b></td>
              <td><b>No. of Day</b></td>
                    <td><b>Amount</b></td>
               
         <tr><td>Basic</td>  <td><?php echo $basic ;  ?></td>  <td>Absent</td>  <td><?php echo $absent; ?></td><td><?php echo $absentcut;?></td> </tr>
             <tr>  <td>HRA</td>  <td><?php echo $hra;  ?></td>  <td>Half Day <td> <?php echo $halftday; ?></td><td><?php echo  $halfcut ; ?></td></tr>
            <tr>   <td>Flexible Benefits</td><td><?php echo $fb;  ?></td>  <td>Gratuity</td>  <td></td><td> <?php echo $gratuity ; ?></td></tr>
            <tr>   <td>Medical</td>  <td><?php echo $medical;  ?></td>  <td></td>  <td></td><td></td></tr>
            <tr>   <td>Conveyance</td>  <td><?php echo $conveyance;  ?></td>  <td></td>  <td></td><td></td></tr>
             
            <tr>   <td><b>Gross Pay</b></td>  <td><b><?php echo $total;  ?></b></td>  <td><b>Gross Deductions</b></td> <td></td><td><b><?php echo $toatlcut+$gratuity; ?></b></td></tr>
           
    <tr><td><b>Net Pay Amount</b></td><td><b><?php echo $tepay; ?></b></td><td></td><td></td><td></td></tr>    
         
                
          </table>
         <br><br><br><br><br> <p ><font  size="4"><?php echo ucfirst($name);  ?></font></p>
          <p ><font  size="3">Nex-G Exuberant Solutions Pvt. Ltd.</font></p>
    </div>
     

    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    