<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");?>

<script type="text/javascript">
       function valid(){
         var em_name = document.check.emp_name.value;
            if (em_name == "") {
                alert(" Fill Employee Name!");
               em_name.focus;
                return false;
            } 
            var dp = document.check.rg.value;
            if (dp == "") {
                alert("fill Employee  Registration Number ");
                dp.focus;
                return false;
            }
       }
</script>
<script type="text/javascript">
    function inscheck(checkvalue){
        if (checkvalue=='01'){ 
           document.getElementById('attnd').style.display = 'block';
           document.getElementById('attndm').style.display = 'none';   
        }
         if (checkvalue=='02'){ 
           document.getElementById('attnd').style.display = 'none';
           document.getElementById('attndm').style.display = 'none'; 
              document.getElementById('att').style.display = 'block';
        }
    
    if (checkvalue=='03'){ 
             document.getElementById('att').style.display = 'none';
            document.getElementById('attnd').style.display = 'block'; 
           document.getElementById('attndm').style.display = 'none';   
        }
        if (checkvalue=='04'){ 
            document.getElementById('att').style.display = 'none';
            document.getElementById('attnd').style.display = 'none'; 
           document.getElementById('attndm').style.display = 'block';   
        }
         if (checkvalue=='05'){ 
            document.getElementById('att').style.display = 'none';
            document.getElementById('attnd').style.display = 'block'; 
           document.getElementById('attndm').style.display = 'none';   
        }
        if (checkvalue=='06'){ 
            document.getElementById('att').style.display = 'none';
            document.getElementById('attnd').style.display = 'none'; 
           document.getElementById('attndm').style.display = 'block';   
        }
         if (checkvalue=='07'){ 
              document.getElementById('att').style.display = 'none';
           document.getElementById('attnd').style.display = 'block';
           document.getElementById('attndm').style.display = 'none';   
        }
         if (checkvalue=='08'){ 
              document.getElementById('att').style.display = 'none';
           document.getElementById('attnd').style.display = 'block';
           document.getElementById('attndm').style.display = 'none';   
        }
        if (checkvalue=='09'){ 
            document.getElementById('att').style.display = 'none';
            document.getElementById('attnd').style.display = 'none'; 
           document.getElementById('attndm').style.display = 'block';   
        }
         if (checkvalue=='10'){ 
              document.getElementById('att').style.display = 'none';
           document.getElementById('attnd').style.display = 'block';
           document.getElementById('attndm').style.display = 'none';   
        }
        if (checkvalue=='11'){ 
            document.getElementById('att').style.display = 'none';
            document.getElementById('attnd').style.display = 'none'; 
           document.getElementById('attndm').style.display = 'block';   
        }
         if (checkvalue=='12'){ 
              document.getElementById('att').style.display = 'none';
           document.getElementById('attnd').style.display = 'block';
           document.getElementById('attndm').style.display = 'none';   
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
        	<h1>Attendance Register Of Employee</h1>
            
        </div><!--pagetitle-->
   


      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
    <form action="" method="post"  name="check" onsubmit="return valid();">
    <table class="table table-bordered" style="text-align:center;">
   <tr><td>Month</td><td><select name="month" id="month" onchange="inscheck(this.value);">
       <option value="01">January</option>  
       <option value="02">February</option>  
       <option value="03">March</option>  
       <option value="04">April</option>  
       <option value="05">May</option>  
       <option value="06">June</option>  
       <option value="07">July</option>  
       <option value="08">August</option>  
       <option value="09">September</option>  
       <option value="10">October</option>  
       <option value="11">November</option>  
        <option value="12">December</option> 
   </select></td>  <td>Year</td><td><select name="year" id="year">
       <option value="2015">2015</option>  
       <option value="2016">2016</option>  
       <option value="2017">2017</option>  
       <option value="2018">2018</option>  
       <option value="2019">2019</option>  
       <option value="2020">2020</option>  
       </select></td></tr>
       <tr><td>Name of Employee</td><td>
		   <select name='emp_name'>
       	<?php $query=mysql_query("select * from employee_reg");
		   while($row=mysql_fetch_array($query)){
			   ?>
		   <option value='<?php echo $row['name'];?>' ><?php echo $row['name']; ?></option>
			 <?php   
		   }
?>
</select>		   
       <!--<input type="text" name="emp_name" id="emp_name" placeholder="Employee Name">-->
       	
       </td>
       	
       <td>
		   
		   Employee Code</td><td><input type="text" name="rg" id="rg" placeholder="Employee Registration Number"></td>
       	
		   
       </tr>  
       </table><br><br>
        <!-- attandence chart for 31 days in month -->
        <div class="attnd" id="attnd" >
        <table class="table table-bordered" style="text-align:center;" >
          <thead>
              <th><h6>Day</h6></th><th>Present</th><th>absent</th><th>Half day</th><th>WeekOff</th>
          </thead>
             <tr><td>1</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="f"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="f"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="f"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="f"></td></tr>
             <tr><td>2</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="s"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="s"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="s"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0"name="s" ></td></tr>
             <tr><td>3</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="t"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="t"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="t"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="t"></td></tr>
             <tr><td>4</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fo"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fo"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fo"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fo"></td></tr>
             <tr><td>5</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fi"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fi"></td></tr>
             <tr><td>6</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="si"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="si"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="si"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="si"></td></tr>
             <tr><td>7</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="se"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="se"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="se"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="se"></td></tr>
             <tr><td>8</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="e"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="e"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="e"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="e"></td></tr>
             <tr><td>9</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="n"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="n"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="n"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="n"></td></tr>
             <tr><td>10</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ten"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ten"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ten"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ten"></td></tr>
             <tr><td>11</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="ele"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ele"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ele"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ele"></td></tr>
             <tr><td>12</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twl"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twl"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twl"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twl"></td></tr>
             <tr><td>13</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="thr"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="thr"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="thr" ></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="thr" ></td></tr>
             <tr><td>14</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="for"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="for"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="for"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="for"></td></tr>
             <tr><td>15</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fif"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fif"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fif"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fif"></td></tr>
             <tr><td>16</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="six"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="six"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="six"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="six"></td></tr>
             <tr><td>17</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="sev"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="sev"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="sev"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="sev"></td></tr>
             <tr><td>18</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ei"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ei"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ei"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ei"></td></tr>
             <tr><td>19</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ni"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ni"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ni"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ni"></td></tr>
             <tr><td>20</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="tw"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="tw"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="tw"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="tw"></td></tr>
             <tr><td>21</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twf"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twf"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twf"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twf"></td></tr>
             <tr><td>22</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="tws"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0"name="tws" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="tws"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="tws" ></td></tr>
             <tr><td>23</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twt"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twt"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twt"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twt"></td></tr>
             <tr><td>24</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twff" ></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twff" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twff"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twff"></td></tr>
             <tr><td>25</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twfi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twfi" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twfi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twfi"></td></tr>
             <tr><td>26</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twsi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twsi"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twsi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twsi"></td></tr>
             <tr><td>27</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twse"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twse"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twse"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twse"></td></tr>
             <tr><td>28</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twe"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twe"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twe"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twe"></td></tr>
             <tr><td>29</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twn" ></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twn"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twn"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twn"></td></tr>
             <tr><td>30</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="th"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="th"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="th"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="th"></td></tr>
             <tr><td>31</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="thf"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="thf"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="thf"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="thf"></td></tr>
               
        </table>
            </div>
        <!-- attance chart for 30 days in month> -->
            <div class="attndm" id="attndm" style="display:none;" >
        <table class="table table-bordered" style="text-align:center;" >
          <thead>
              <th><h6>Day</h6></th><th>Present</th><th>absent</th><th>Half day</th><th>WeekOff</th>
          </thead>
                         <tr><td>1</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="f"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="f"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="f"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="f"></td></tr>
             <tr><td>2</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="s"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="s"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="s"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0"name="s" ></td></tr>
             <tr><td>3</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="t"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="t"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="t"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="t"></td></tr>
             <tr><td>4</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fo"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fo"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fo"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fo"></td></tr>
             <tr><td>5</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fi"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fi"></td></tr>
             <tr><td>6</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="si"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="si"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="si"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="si"></td></tr>
             <tr><td>7</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="se"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="se"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="se"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="se"></td></tr>
             <tr><td>8</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="e"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="e"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="e"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="e"></td></tr>
             <tr><td>9</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="n"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="n"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="n"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="n"></td></tr>
             <tr><td>10</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ten"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ten"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ten"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ten"></td></tr>
             <tr><td>11</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="ele"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ele"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ele"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ele"></td></tr>
             <tr><td>12</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twl"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twl"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twl"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twl"></td></tr>
             <tr><td>13</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="thr"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="thr"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="thr" ></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="thr" ></td></tr>
             <tr><td>14</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="for"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="for"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="for"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="for"></td></tr>
             <tr><td>15</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fif"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fif"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fif"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fif"></td></tr>
             <tr><td>16</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="six"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="six"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="six"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="six"></td></tr>
             <tr><td>17</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="sev"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="sev"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="sev"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="sev"></td></tr>
             <tr><td>18</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ei"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ei"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ei"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ei"></td></tr>
             <tr><td>19</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ni"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ni"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ni"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ni"></td></tr>
             <tr><td>20</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="tw"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="tw"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="tw"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="tw"></td></tr>
             <tr><td>21</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twf"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twf"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twf"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twf"></td></tr>
             <tr><td>22</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="tws"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0"name="tws" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="tws"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="tws" ></td></tr>
             <tr><td>23</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twt"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twt"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twt"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twt"></td></tr>
             <tr><td>24</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twff" ></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twff" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twff"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twff"></td></tr>
             <tr><td>25</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twfi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twfi" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twfi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twfi"></td></tr>
             <tr><td>26</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twsi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twsi"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twsi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twsi"></td></tr>
             <tr><td>27</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twse"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twse"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twse"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twse"></td></tr>
             <tr><td>28</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twe"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twe"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twe"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twe"></td></tr>
             <tr><td>29</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twn" ></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twn"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twn"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twn"></td></tr>
             <tr><td>30</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="th"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="th"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="th"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="th"></td></tr>      
        </table>
            </div>
        <!-- chat for fabuary month> -->
          <div class="att" id="att" style="display:none;" >
        <table class="table table-bordered" style="text-align:center;" >
          <thead>
              <th><h6>Day</h6></th><th>Present</th><th>absent</th><th>Half day</th><th>WeekOff</th>
          </thead>
                         <tr><td>1</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="f"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="f"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="f"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="f"></td></tr>
             <tr><td>2</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="s"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="s"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="s"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0"name="s" ></td></tr>
             <tr><td>3</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="t"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="t"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="t"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="t"></td></tr>
             <tr><td>4</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fo"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fo"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fo"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fo"></td></tr>
             <tr><td>5</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fi"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fi"></td></tr>
             <tr><td>6</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="si"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="si"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="si"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="si"></td></tr>
             <tr><td>7</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="se"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="se"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="se"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="se"></td></tr>
             <tr><td>8</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="e"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="e"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="e"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="e"></td></tr>
             <tr><td>9</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="n"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="n"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="n"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="n"></td></tr>
             <tr><td>10</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ten"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ten"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ten"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ten"></td></tr>
             <tr><td>11</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="ele"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ele"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ele"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ele"></td></tr>
             <tr><td>12</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twl"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twl"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twl"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twl"></td></tr>
             <tr><td>13</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="thr"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="thr"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="thr" ></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="thr" ></td></tr>
             <tr><td>14</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="for"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="for"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="for"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="for"></td></tr>
             <tr><td>15</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="fif"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="fif"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="fif"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="fif"></td></tr>
             <tr><td>16</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="six"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="six"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="six"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="six"></td></tr>
             <tr><td>17</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="sev"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="sev"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="sev"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="sev"></td></tr>
             <tr><td>18</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ei"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ei"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ei"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ei"></td></tr>
             <tr><td>19</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ni"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="ni"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="ni"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="ni"></td></tr>
             <tr><td>20</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="tw"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="tw"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="tw"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="tw"></td></tr>
             <tr><td>21</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twf"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twf"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twf"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twf"></td></tr>
             <tr><td>22</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="tws"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0"name="tws" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="tws"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="tws" ></td></tr>
             <tr><td>23</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twt"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twt"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twt"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twt"></td></tr>
             <tr><td>24</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twff" ></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twff" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twff"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twff"></td></tr>
             <tr><td>25</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twfi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twfi" ></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twfi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twfi"></td></tr>
             <tr><td>26</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twsi"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twsi"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twsi"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twsi"></td></tr>
             <tr><td>27</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twse"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twse"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twse"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twse"></td></tr>
             <tr><td>28</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twe"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twe"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twe"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twe"></td></tr>
             <tr><td>29</td><td>Present&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="twn"></td><td>absent&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="twn"></td><td>Half day&nbsp;&nbsp;&nbsp;<input type="radio" value="0.5" name="twn"></td><td>WeekOff&nbsp;&nbsp;&nbsp;<input type="radio" value="1+0" name="twn"></td></tr>
        
        </table></div>
            <input type="submit" name="submit" value="Submit" style="margin-left:420px;">
        </form><br>

    </div> 
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

      <?php
     
     if(isset($_POST['submit'])){
  $month=$_POST['month'];
   $year=$_POST['year'];
     $name=$_POST['emp_name'];
     $registration=$_POST['rg'];
      $salary=$_POST['salary'];
     $f=$_POST['f'];
    $s=$_POST['s'];
     $t=$_POST['t'];
     $f=$_POST['fo'];
     $fi=$_POST['fi'];
     $s=$_POST['si'];
     $se=$_POST['se'];
     $e=$_POST['e'];
     $n=$_POST['n'];
     $ten=$_POST['ten'];
     $ele=$_POST['ele'];
     $twl=$_POST['twl'];
     $thr=$_POST['thr'];
     $for=$_POST['for'];
     $fif=$_POST['fif'];
     $six=$_POST['six'];
     $sev=$_POST['sev'];
     $ei=$_POST['ei'];
     $ni=$_POST['ni'];
     $tw=$_POST['tw'];
     $twf=$_POST['twf'];
     $tws=$_POST['tws'];
     $twt=$_POST['twt'];
     $twff=$_POST['twff'];
     $twfi=$_POST['twfi'];
     $twsi=$_POST['twsi'];
     $twse=$_POST['twse'];
     $twe=$_POST['twe'];
     $twn=$_POST['twn'];
     $th=$_POST['th'];
     $thf=$_POST['thf'];  
     $total_present="";
         $total_absent="";
         $weekoff="";
     $res=mysql_query("INSERT INTO emp_attendance (month,year,emp_name,registation_number,1s,2s,3s,4s,5s,6s,7s,8s,9s,10s,11s,12s,13s,14s,15s,16s,17s,18s,19s,20s,21s,22s,23s,24s,25s,26s,27s,28s,29s,30s,31s) VALUES ('$month','$year','$name','$registration','$f','$s','$t','$f','$fi','$s','$se','$e','$n','$ten','$ele','$twl','$thr','$for','$fif','$six','$sev','$ei','$ni','$tw','$twf','$tws','$twt','$twff','$twfi','$twsi','$twse','$twe','$twn','$th','$thf')");
     if($res){
    echo "<script type='text/javascript'>alert('Employee Attendance Submitted Sucessfully');window.location.href='emp_sal.php?llt=$registration';</script>;";
     }
     
    else{
 echo "error in data insertion".mysql_error();
 }
     
 }
    