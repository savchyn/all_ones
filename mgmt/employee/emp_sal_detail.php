<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");
?>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(function () {
            var textBox1 = $('input:text[id$=basic]').keyup(foo);
            var textBox2 = $('input:text[id$=hra]').keyup(foo);
      var textBox3 = $('input:text[id$=fb]').keyup(foo);
      var textBox4 = $('input:text[id$=medical]').keyup(foo);
      var textBox5 = $('input:text[id$=con]').keyup(foo);
 
            function foo() {
                var value1 = textBox1.val();
                var value2 = textBox2.val();
                 var value3 = textBox3.val();
                 var value4 = textBox4.val();
                 var value5 = textBox5.val();
                var sum = add(value1, value2,value3, value4, value5);
                $('input:text[id$=total]').val(sum);
            }
 
            function add() {
                var sum = 0;
                for (var i = 0, j = arguments.length; i < j; i++) {
                    if (IsNumeric(arguments[i])) {
                        sum += parseFloat(arguments[i]);
                    }
                }
                return sum;
            }
            function IsNumeric(input) {
                return (input - 0) == input && input.length > 0;
            }
        });
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
       <!--  $pdf_from_file = $client->convertFile('/path/to/your/file.html');
$pdf_from_html = $client->convertHtml('<b>bold</b> and <i>italic</i>'); -->
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Employee Salary Details</h1>
            
        </div><!--pagetitle-->
      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
          <h2 style="margin-left:320px;">Employee Salary Form</h2> <br><br>
          <form method="post" action="">
                <?php  
     $ms=$_GET['dds'];
     $result=mysql_query("SELECT * FROM employee_reg WHERE id='$ms';");
if($result){
              if ($result && mysql_num_rows($result)>0) {
    while($row=mysql_fetch_array($result)){
 $name=$row['name'];
        $rg=$row['emp_code'];
        $deg=$row['emp_deg'];
        $dept=$row['emp_dept']; 
        $loc="Noida";
    }
              }
    else{  echo "<script type='text/javascript'>alert('error in feat num of rows');</script>;";}
}
              else{  echo "<script type='text/javascript'>alert('error in query pass');</script>;";}?>
        
    <table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
   
    <tr><td>Employee Name </td><td><input type="text" name="name" id="name" value="<?php echo $name ;?>"></td><td>Employee Code </td><td><input type="text" name="rgs" id="rgs" value="<?php echo $rg ;?>"></td></tr>          
    <tr><td>Department </td><td><input type="text" name="dept" id="dept" value="<?php echo $dept ;?>"></td><td>Location </td><td><input type="text" name="location" id="location" value="<?php echo $loc ;?>"></td></tr>
        
         <tr><td>MOP </td><td><input type="text" name="mop" id="mop" value="N/A"></td><td>PF No</td><td><input type="text" name="pf" id="pf" value="N/A"></td></tr>
            <tr><td>Designation </td><td><input type="text" name="deg" id="deg" value="<?php echo $deg ;?>"></td><td></td><td></td></tr>
</table><br>
    
              <table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
                  <th>Description</th>
                  <th>Amount</th>
                 <tr> <td>Basic</td> <td><input type="text" name="basic" id="basic" placeholder="Basic Amount"></td></tr>
                  <tr> <td>HRA</td> <td><input type="text" name="hra" id="hra" placeholder="HRA Amount"></td></tr>
                  <tr> <td>Flexible Benefits</td> <td><input type="text" name="fb" id="fb" placeholder="Flexible Benefits Amount"></td></tr>
                  <tr> <td>Medical</td> <td><input type="text" name="medical" id="medical" placeholder="Medical Amount"></td></tr>
                  <tr> <td>Conveyance</td> <td><input type="text" name="con" id="con" placeholder="Conveyance Amount"></td></tr>
                   <tr> <td>Gratuity</td> <td><input type="text" name="gra" id="gra" placeholder="Monthly Gratuity Amount"></td></tr>
                   <tr> <td><b style="font-size:13px;">Gross Pay</b></td> <td><input type="text" name="total" id="total"></td></tr>
                       </table>
<br> 
          <input type="submit" name="submit" value="Submit" style="margin-left:420px;">
              </form>
     </div>   
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $e_name=$_POST['name'];
    $dept=$_POST['dept'];
    $deg=$_POST['deg'];
    $rgs=$_POST['rgs'];
    $mop=$_POST['mop'];
    $pf=$_POST['pf'];
    $location=$_POST['location'];
    $basic=$_POST['basic'];
    $hra=$_POST['hra'];
    $fb=$_POST['fb'];
    $medical=$_POST['medical'];
    $con=$_POST['con'];
        $gratuity=$_POST['gra'];

    $total=$_POST['total'];
   $que=mysql_query("INSERT INTO emp_salary (emp_name,emp_reg,department,designation,mop,pf,location,basic,hra,fb,medical,conveyance,gratuity,total) VALUES ('$e_name','$rgs','$dept','$deg','$mop','$pf','$location','$basic','$hra','$fb','$medical','$con','$gratuity','$total')");
    
    if($que){
   echo "<script type='text/javascript'>alert('Employee Salary Detail Submitted Sucessfully');window.location.href='employees.php';</script>;";
    }
    else{
    echo "Error in Employee Salary Data insertion".mysql_error();
    }
}
?>
    