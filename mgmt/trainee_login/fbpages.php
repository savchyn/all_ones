<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>
<?php include("header.php");?>
<!DOCTYPE html>
<head>
<!-- Lte Skills Like -->
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=736497446394057";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!--lte End Hear -->
	<!-- cloud computing Like -->
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=736497446394057";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- clound computing end -->
	<!-- bigdata like  -->
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=736497446394057";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!-- bigdata like end -->
	<style>
		#logoimg{
		height:170px;
		}
		#logodiv{
		width:20%;
			height:230px;
			position:absolute;
		}
		
	</style>
</head>

    <div style="clear:both;"></div>
    <!-- END OF LEFT PANEL -->

    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            <div class="headerright">
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#"> 
        
   
         <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li><a href="sign_out.php"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <!--<li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
                <li class="active">Dashboard</li>
            </ul>-->
        </div><!--breadcrumbs-->
      <div class="pagetitle">
        	<h1>Nex-G Facebook Pages</h1> 
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner content-dashboard">
				<!-- lte Like -->
            	<div class="alert alert-info" id="logodiv" > 
					<img src="http://b-i.forbesimg.com/patrickmoorhead/files/2013/12/LTE-Logo.jpg" id="logoimg" width="100%;"><br>
					<div class="fb-like" data-href="https://www.facebook.com/LteSkills" data-width="100%" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                </div>
				<!-- end Lte Like -->
			<!-- Cloud Computing Like -->
            	<div class="alert alert-info"  id="logodiv" style="margin-left:26%;"> 
					<img src="https://puserscontentstorage.blob.core.windows.net/userimages/de1cc483-bb71-4170-bd25-0c04f167acf5/1e7b5ca3-8b2e-4e2e-9898-5df978f0218aimage14.jpeg" id="logoimg" width="100%;"><br>
				<div class="fb-like" data-href="https://www.facebook.com/CloudComputingTrainings" data-width="100%" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                	
				</div>
				<!-- Cloud Computing Like  end-->
				
				<!--Bigdata Like -->
            	<div class="alert alert-info" id="logodiv" style="margin-left:53%;"> 
					<img src="http://www.v3.co.uk/IMG/732/287732/big-data-pic.jpg" id="logoimg" width="100%;"><br>
				<div class="fb-like" data-href="https://www.facebook.com/bigdatatrainings" data-width="100%" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                	
				</div>
				<!-- Bigdata Like  end-->
				
				
                <!--alert-->
                
                <div class="row-fluid">
                	<div class="span8">
                    	<ul class="widgeticons row-fluid">
                        	
                            
                        </ul>
                        
                        <br />
                        
                      
    
  
    </div><!--footer-->

    
</div><!--mainwrapper-->

</body>
</html>
			
