<?php session_start(); 
if(!isset($_SESSION[ 'username'])) {
	header( "location:index.php");
} 
include( "conn.php"); 
include( "header.php");
?>
<script src="jquery.min.js"></script>
<script type="text/javascript">
	// for in hand salary
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
			var sum = add(value1, value2, value3, value4, value5);
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

	// for annual salary


	$(function () {
		var ann_textBox1 = $('input:text[id$=ybasic]').keyup(foo);
		var ann_textBox2 = $('input:text[id$=yhra]').keyup(foo);
		var ann_textBox3 = $('input:text[id$=yfb]').keyup(foo);
		var ann_textBox4 = $('input:text[id$=ymedical]').keyup(foo);
		var ann_textBox5 = $('input:text[id$=ycon]').keyup(foo);
		var ann_textBox6 = $('input:text[id$=ygra]').keyup(foo);
		var ann_textBox7 = $('input:text[id$=ylb]').keyup(foo);
		var ann_textBox8 = $('input:text[id$=yperformance]').keyup(foo);
		var ann_textBox9 = $('input:text[id$=yhealthinsurance]').keyup(foo);
		var ann_textBox10 = $('input:text[id$=ycomapny_target_allowance]').keyup(foo);

		function foo() {
			var ann_value1 = ann_textBox1.val();
			var ann_value2 = ann_textBox2.val();
			var ann_value3 = ann_textBox3.val();
			var ann_value4 = ann_textBox4.val();
			var ann_value5 = ann_textBox5.val();
			var ann_value6 = ann_textBox6.val();
			var ann_value7 = ann_textBox7.val();
			var ann_value8 = ann_textBox8.val();
			var ann_value9 = ann_textBox9.val();
			var ann_value10 = ann_textBox10.val();
			var sum = add(ann_value1, ann_value2, ann_value3, ann_value4, ann_value5, ann_value6, ann_value7, ann_value8,ann_value9,ann_value10);
			$('input:text[id$=annual]').val(sum);
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

			</div>
			<!--dropdown-->

			<div class="dropdown userinfo">
				<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#"> 
           Welcome <b><?php echo $_SESSION['username']?></b>
                   
         <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<!--<li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href="#"><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href="#"><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>-->
					<li><a href="sign_out.php"><span class="icon-off"></span> Sign Out</a>
					</li>
				</ul>
			</div>
			<!--dropdown-->

		</div>
		<!--headerright-->
		<!--  $pdf_from_file = $client->convertFile('/path/to/your/file.html');
$pdf_from_html = $client->convertHtml('<b>bold</b> and <i>italic</i>'); -->
	</div>
	<!--headerpanel-->
	<div class="breadcrumbwidget">
	</div>
	<!--breadcrumbs-->
	<div class="pagetitle">
		<h1>Employee Salary Details</h1>

	</div>
	<!--pagetitle-->
	<div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse">
		<h2 style="margin-left:320px;">Employee Salary Form</h2>
		<br>
		<br>
		<form method="post" action="">
			<?php $ms=$_GET['employee_code']; 
$result=mysql_query( "SELECT * FROM employee_reg,emp_salary WHERE employee_reg.emp_code='$ms' && emp_salary.emp_reg='$ms';");
if($result){
	if ($result && mysql_num_rows($result)>0) {
		while($row=mysql_fetch_array($result)){ 
			$name=$row['name'];
			$rg=$row['emp_code'];
			$emp_position=$row['emp_position'];
			$deg=$row['emp_deg'];
			$dept=$row['emp_dept']; 
			$loc=$row['location']; 
			// fetch for salary
			$mop=$row[ 'mop'];
	$pf=$row['pf']; 
	$basic=$row['basic'];
	$hra=$row['hra']; 
	$fb=$row['fb'];
	$medical=$row['medical']; 
	$con=$row['conveyance']; 
	$gratuity=$row['gratuity'];
	$loyality=$row['loyality'];
	$performance=$row['performance_bonus']; 
	// for annum
	$ybasic=$row['ybasic'];
	$yhra=$row['yhra']; 
	$yfb=$row['yfb'];
	$ymedical=$row['ymedical']; 
	$ycon=$row['yconveyance']; 
	$ygratuity=$row['ygratuity'];
	$yloyality=$row['yloyality'];
	$yperformance=$row['yperformance_bonus']; 
			
	$healthinc=$row['yhealthinsurance'];
	$com_targ_allow=$row['ycomtargetallow']; 
	//end annum
	$annual=$row['annual']; 
	$total=$row['total']; 
			
			
		} 
	} else{ echo "
			<script type='text/javascript'>
				alert('Detail Not Submitted Yet');window.location.href='emp_sal_unregistred.php?emp_reg_no=$ms';
			</script>;";
		  } 
}
else{ 
	echo "<script type='text/javascript'>
				alert('error in query pass');
			</script>;";
}?>

			<table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">

				<tr>
					<td>Employee Name </td>
					<td>
						<input type="text" name="name" id="name" value="<?php echo $name ;?>">
					</td>
					<td>Employee Code </td>
					<td>
						<input type="text" name="rgs" id="rgs" value="<?php echo $rg ;?>">
					</td>
				</tr>

				<tr>
					<td>Employee Pisition </td>
					<td>
						<input type="text" name="emp_position" id="emp_position" value="<?php echo $emp_position ;?>">
					</td>
					<td>Department </td>
					<td>
						<input type="text" name="dept" id="dept" value="<?php echo $dept ;?>">
					</td>
				</tr>

				<tr>
					<td>Designation </td>
					<td>
						<input type="text" name="deg" id="deg" value="<?php echo $deg ;?>">
					</td>
					<td>Location </td>
					<td>
						<input type="text" name="location" id="location" value="<?php echo $loc ;?>">
					</td>
				</tr>


				<tr>
					<td>MOP </td>
					<td>
						<input type="text" name="mop" id="mop" value="<?php echo $mop ; ?>">
					</td>
					<td>PF No</td>
					<td>
						<input type="text" name="pf" id="pf" value="<?php echo  $pf; ?>">
					</td>
				</tr>

			</table>
			<br>

			<table class="table table-bordered" style="text-align:center;" cellspacing="5" cellpadding="6">
				<th>Description</th>
				<th>Per Month</th>
				<th>Per Annum</th>
				<tr>
					<td>Basic</td>
					<td>
						<input type="text" name="basic" id="basic" placeholder="Basic Amount" value="<?php echo  $basic; ?>">
					</td>
					<td>
						<input type="text" name="ybasic" id="ybasic" placeholder="Basic Amount" value="<?php echo  $ybasic; ?>">
					</td>
				</tr>
				<tr>
					<td>HRA(40% of Basic)</td>
					<td>
						<input type="text" name="hra" id="hra" placeholder="HRA Amount" value="<?php echo  $hra; ?>">
					</td>
					<td>
						<input type="text" name="yhra" id="yhra" placeholder="HRA Amount" value="<?php echo  $yhra; ?>">
					</td>
				</tr>
				<tr>
					<td>Flexible Benefits</td>
					<td>
						<input type="text" name="fb" id="fb" placeholder="Flexible Benefits Amount" value="<?php echo  $fb; ?>">
					</td>
					<td>
						<input type="text" name="yfb" id="yfb" placeholder="Flexible Benefits Amount" value="<?php echo  $yfb; ?>">
					</td>
				</tr>
				<tr>
					<td>Medical Reimbursement</td>
					<td>
						<input type="text" name="medical" id="medical" placeholder="Medical Amount" value="<?php echo  $medical; ?>">
					</td>
					<td>
						<input type="text" name="ymedical" id="ymedical" placeholder="Medical Amount" value="<?php echo  $ymedical; ?>">
					</td>
				</tr>
				<tr>
					<td>Conveyance</td>
					<td>
						<input type="text" name="con" id="con" placeholder="Conveyance Amount" value="<?php echo  $con; ?>">
					</td>
					<td>
						<input type="text" name="ycon" id="ycon" placeholder="Conveyance Amount" value="<?php echo  $ycon; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<!-- Grauatiy-->Special Allowance</td>
					<td>
						<input type="text" name="gra" id="gra" placeholder="Special Allowance" value="<?php echo  $gratuity; ?>" disabled>
					</td>
					<td>
						<input type="text" name="ygra" id="ygra" placeholder="Special Allowance" value="<?php echo  $ygratuity; ?>" >
					</td>
				</tr>

				<tr>
					<td>Loyalty Bonus</td>
					<td>
						<input type="text" name="lb" id="lb" placeholder="Loyalty Bonus" value="<?php echo  $loyality; ?>" disabled>
					</td>
					<td>
						<input type="text" name="ylb" id="ylb" placeholder="Loyalty Bonus" value="<?php echo  $yloyality; ?>">
					</td>
				</tr>

				<tr>
					<td>Performance Allowance</td>
					<td>
						<input type="text" name="performance" id="performance" placeholder="Performance  Allowance" value="<?php echo  $performance; ?>" disabled>
					</td>
					<td>
						<input type="text" name="yperformance" id="yperformance" placeholder="Performance  Allowance" value="<?php echo  $yperformance; ?>">
					</td>
				</tr>
				
				
				
				
				
		<tr>
					<td> Health Insurance </td>
					<td>
						<input type="text" name="healthinsurance" id="healthinsurance" placeholder="Health Insurance" value="<?php echo  ''; ?>" disabled>
					</td>
					<td>
			<input type="text" name="yhealthinsurance" id="yhealthinsurance" placeholder="Health Insurance" value="<?php echo  $healthinc; ?>">
					</td>
				</tr>
<tr>
					<td>Company Target Allowance*</td>
					<td>
						<input type="text" name="comapny_target_allowance" id="comapny_target_allowance" placeholder="Company Target Allowance" value="<?php echo  ''; ?>" disabled>
					</td>
					<td>
						<input type="text" name="ycomapny_target_allowance" id="ycomapny_target_allowance" placeholder="Company Target Allowance" value="<?php echo  $com_targ_allow; ?>">
					</td>
				</tr>
		
				
				
				
				
				
				
				


				<tr>
					<td><b style="font-size:13px;">In Hand </b>
					</td>
					<td>
						<input type="text" name="total" id="total" value="<?php echo  $total; ?>">INR</td>
					<td><b style="font-size:13px;">As Per Annum </b>
						<input type="text" name="annual" id="annual" value="<?php echo  $annual; ?>">INR</td>
				</tr>

			</table>
			<br>
			<input type="submit" name="submit" value="Submit" style="margin-left:420px;">

		</form>

		<p><b>Note:</b>-
			<br> 1.For claiming medical expenses, bills need to be produced by the 7th of September, December & March of each year
			<br> 2.The net salary does not take into account IT deduction.
			<br> 3.Special Allowance will be disbursed yearly.

		</p>
	</div>

</div>


<div class="clearfix"></div>

<!--footer-->

</div>
<!--mainwrapper-->

</body>
</html>
<?php if(isset($_POST[ 'submit'])){ 
	$e_name=$_POST[ 'name'];
	$dept=$_POST[ 'dept']; 
	$deg=$_POST[ 'deg'];
	$rgs=$_POST[ 'rgs'];
	$mop=$_POST[ 'mop'];
	$pf=$_POST[ 'pf']; 
	$location=$_POST[ 'location']; 
	$basic=$_POST[ 'basic'];
	$hra=$_POST[ 'hra']; 
	$fb=$_POST[ 'fb'];
	$medical=$_POST[ 'medical']; 
	$con=$_POST[ 'con']; 
	$gratuity=$_POST[ 'gra'];
	$loyality=$_POST[ 'lb'];
	$performance=$_POST[ 'performance']; 
	// for annum
	$ybasic=$_POST[ 'ybasic'];
	$yhra=$_POST[ 'yhra']; 
	$yfb=$_POST[ 'yfb'];
	$ymedical=$_POST[ 'ymedical']; 
	$ycon=$_POST[ 'ycon']; 
	$ygratuity=$_POST[ 'ygra'];
	$yloyality=$_POST[ 'ylb'];
	$yperformance=$_POST[ 'yperformance']; 
	$yhealthinsurance=$_POST['yhealthinsurance'];
	$ycomapny_target_allowance=$_POST['ycomapny_target_allowance'];
	//end annum
	$annual=$_POST[ 'annual']; 
	$total=$_POST[ 'total']; 
	$que=mysql_query( "update emp_salary set emp_name='$e_name',emp_reg='$rgs',department='$dept',designation='$deg',mop='$mop',pf='$pf',location='$location',basic='$basic',hra='$hra',fb='$fb',medical='$medical',conveyance='$con',gratuity='$gratuity',total='$total',loyality='$loyality',performance_bonus='$performance',annual='$annual',ybasic='$ybasic',yhra='$yhra',yfb='$yfb',ymedical='$ymedical',yconveyance='$ycon',ygratuity='$ygratuity',yloyality='$yloyality',yperformance_bonus='$yperformance',yhealthinsurance='$yhealthinsurance',ycomtargetallow='$ycomapny_target_allowance';");
	if($que){
		echo "<script type='text/javascript'>alert('Employee Salary Detail Updated Sucessfully');window.location.href='employees.php';</script>;"; 
	} else{ 
		echo "Error in Employee Salary Data insertion".mysql_error();
	} 
} 
?>