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
 <!--<script type="text/javascript">
         function valid(){
             
              var rg = document.check.rg_number.value;
            if (rg == "") {
                alert("Fill Registration Number !");
                rg.focus;
                return false;
            } 
            var em_name = document.check.trainer_name.value;
            if (em_name == "") {
                alert("Fill Trainer  Name !");
                em_name.focus;
                return false;
            } 
            var dp = document.check.tmodule.value;
            if (dp == "") {
                alert("Please fill  Traning Module");
                dp.focus;
                return false;
            }
           var em_rg = document.check.ttopic.value;
            if ( em_rg == "") {
                alert(" Fill Training Topic");
                em_rg.focus;
            return false;
               
            }  
    var em = document.check.comment.value;
            if (em == "") {
                alert(" Fill Comment");
                em.focus;
                return false;
            }    
             
         }   
            </script> -->
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
        	<h1>Daily Feedback Form</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
    <form method="post" action="submit.php" name="check">  
         <!-- <h2 style="margin-left:100px;">Certificate Issue Form</h2> -->
        <?php $que=mysql_query("select * from login_detail where username='{$_SESSION['loguser']}' && password='{$_SESSION['pass']}';");
    if ($que){
  if ($que && mysql_num_rows($que)>0) {
    if($row = mysql_fetch_array($que)){?>
      
		<table class="table table-bordered" style="text-align:center;">
<tr><td>Registration Number:</td><td><input type="text" name="rg_number" id="reg_number" value="<?php echo $row['registration'];?>" required></td></tr>
<tr><td>Trainee Name:</td><td><input type="text" name="tr_name" id="tr_name" value="<?php echo $row['trainee_fname']. " ".$row['trainee_lname'];}}}?>" required></td></tr>
  <tr><td>Trainer Name  </td><td>  <select name="trainer_name" id="trainer_name" required>
  	<?php
	 $qury=mysql_query("select name from employee_reg where emp_position='Innovation Engineer' or emp_position='Sr. Innovation Engineer';");
    if($qury){
  if($qury && mysql_num_rows($qury)>0) {
    while($trainer = mysql_fetch_array($qury)){
	  ?>
	  <option><?php echo $trainer['name'];?></option>
	  <?php
	  }
	  }
		else{
		  echo '<script>alert("No record Found !'.mysql_error().'");</script>';
	 
	  }
	  }
	  else{
		  echo '<script>alert("Error in Trainer Fetch Query !'.mysql_error().'");</script>';
	 
	  }
?>
	  
	  </select>
  </td></tr>
  <tr><td>Training Module </td><td><input type="text" name="tmodule" id="tmodule" required></td></tr>
  <tr><td>Training Topics </td><td><input type="text" name="ttopic" id="ttopic" required> </td></tr>
			
			
 <tr><td>Email Id </td><td><input type="email" name="email" id="email" required> </td></tr>			
			
	<tr><td>Class Time</td><td>
		
		<select class="btn btn-info" name="from_hour" style="width:90px;">
			<option value="1" >1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select class="btn btn-info" name="from_minute" style="width:90px;">
			<option value="0" >00</option>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
		    <option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
			<option value="56">56</option>
			<option value="57">57</option>
			<option value="58">58</option>
			<option value="59">59</option>
		</select>
		 &nbsp;TO &nbsp;
		<select class="btn btn-info" name="to_hour" style="width:90px;">
			<option value="1" >1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select class="btn btn-info" name="to_minute" style="width:90px;">
			<option value="0" >00</option>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
		    <option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
			<option value="56">56</option>
			<option value="57">57</option>
			<option value="58">58</option>
			<option value="59">59</option>
		</select>
		
	</td>
		
		
		
	</tr>		
			
			
			
			
  <tr><td>Understanding   </td><td> <input type="radio" name="understanding" value="Full" checked><b> Full</b><br><br>
                   <input type="radio" name="understanding" value="Partly"><b>Partly</b><br><br>
                   <input type="radio" name="understanding" value="No"><b>No</b><br></td></tr>
 <tr><td> Comments  </td><td>      <textarea type="text" name="comment" id="comment" rows="6" cols="100"></textarea></td></tr>
<tr><td>  Date   </td><td>          <input type="text" name="fdate" id="fdate" required></td></tr>
</table>
                                                <br><br> <input type="submit" value="Submit" name="daily_feedback" id="daily_feedback" style="margin-left:30%;">
  
        
        </form>   
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    