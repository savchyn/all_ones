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

 <script type="text/javascript">
 function traineefeedback(){
                
                var em_rg = document.checks.tfd.value;
            if ( em_rg == "") {
                alert(" Fill Training duration Date From");
                em_rg.focus;
            return false;
               
            }
              var em_rgg = document.checks.ttd.value;
            if ( em_rgg == "") {
                alert(" Fill Training duration Date To");
                em_rgg.focus;
            return false;
               
            }
                var em = document.checks.tname.value;
            if (em == "") {
                alert(" Fill Name!");
                em.focus;
                return false;
            } 
                 var emss = document.checks.tprogram.value;
            if (emss == "") {
                alert(" Fill Training Program!");
                emss.focus;
                return false;
            } 
                
                
                 var dpsa = document.checks.rn.value;
            if (dpsa == "") {
                alert(" fill Registration Number");
                dpsa.focus;
                return false;
            }       
                
                
                var em = document.checks.email.value;
            var s = "@";
            if (!em.match(s)) {
                alert("enter a valid email..");
                em.focus;
                return false;
            } 
                 var dpsm = document.checks.mob.value;
            if (dpsm == "") {
                alert(" fill Mobile Number");
                dpsm.focus;
                return false;
            } 
                  var ems = document.checks.comment.value;
           
            if (ems=="") {
                alert("Fill the Comment");
                ems.focus;
                return false;
            } 
                  var emss = document.checks.scomment.value;
           
            if (emss=="") {
                alert("Fill the Comment");
                emss.focus;
                return false;
            } 
                  var emsss = document.checks.tcomment.value;
           
            if (emsss=="") {
                alert("Fill the Comment");
                emsss.focus;
                return false;
            } 
                  var emssss = document.checks.ld.value;
            
            if (emssss=="") {
                alert("Fill signature/Date");
                emssss.focus;
                return false;
            } 
                
            }
            // function for third div hear
            
            
        </script>
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
        	<h1>Feedback</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
<form method="post" action="submit.php" name="checks" onsubmit="return traineefeedback();">
        
         <pre>
          <h4 style="margin-left:100px;">Training Feedback Form</h4>
  <!--Training Duration:  From <input name="tfd" id="tfd"> TO <input name="ttd" id="ttd"><br> -->
  Training Name:           <input type="text" name="tname" id="tname"><br>
  Training Program:        <input type="text" name="tprogram" id="tprogram"><br>
  Registration Number:     <input type="text" name="rn" id="trn"><br>
  Email Id:                <input type="text" name="email" id="email"><br>
  Telephone/Mobile :       <input type="text" name="mob" id="mob">
  <h4 style="margin-left:100px;">Select the most appropriate response to the following questions:-</h4>
 To what extent did this training?               <select name="f" id="f">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Accomplish its stated learning objectives?      <select name="s" id="s">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Meet your expectations?                         <select name="t" id="t">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Teach you something you can use in your job?    <select name="fo" id="fo">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select><br>
 Contain information appropriate to your needs?  <select name="fi" id="fi">  
  <option value="A Great Deal" selected>A Great Deal</option><br>
  <option value="A Good Deal">A Good Deal</option><br>
  <option value="Some">Some</option><br>
  <option value="Very little">Very little</option><br>
  <option value="Not at all">Not at all</option><br>
  </select>
 
 Comments (If Any) 
                                <textarea type="text" name="comment" id="comment" rows="5" cols="35"></textarea>
<h4 style="margin-left:100px;">Please rate the following aspects of the training</h4>                               
 Training contents              <select name="tf" id="tf">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Organization of material       <select name="ts" id="ts">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Delivery methods               <select name="tt" id="tt">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Presentation of information    <select name="tfs" id="tfs">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Duration of the sessions       <select name="tfi" id="tfi">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Level of material covered      <select name="tsix" id="six">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Project Guidance               <select name="tse" id="tse">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 LAB Infrastructure             <select name="tei" id="tei">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Placement Support              <select name="tni" id="tni">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Trainer Rating                 <select name="ten" id="ten">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Over all rating                <select name="tel" id="tel">  
  <option value="Excellent" selected>Excellent</option><br>
  <option value="Good">Good</option><br>
  <option value="Adequate">Adequate</option><br>
  <option value="Fair">Fair</option><br>
  <option value="poor">Poor</option><br>
  </select><br>
 Comments (If Any) It's Mandatory* 
                                     <textarea type="text" name="scomment" id="scomment" rows="5" cols="35"></textarea>
 Additional Suggestion or Comments:
                                     <textarea type="text" name="tcomment" id="tcomment" rows="5" cols="35"></textarea>
        
  Would you suggest this training to friends : <select name="fsuggest" id="fsuggest">
      <option value="yes">Yes</option><br>
      <option value="no">No</option><br>
  </select>
                                     
  Signature/Date:  <input name="ld" id="ld">
                                                        <input type="submit" value="Submit" name="feedback" id="feedback">
                                                        </pre></form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    