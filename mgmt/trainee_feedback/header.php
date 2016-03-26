<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Nex-g</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
<script type="text/javascript" src="prettify/prettify.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
function update(b_news)
   {
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
    window.location.href="news.php";
    }
    }
    xmlhttp.open("GET","update.php?q="+b_news,true);
    xmlhttp.send();
    document.getElementById("content02").innerHTML = 'Your URL was successfully deleted!<br/><br/>';
    xmlhttp.onreadystatechange = urlRefresh;
    return;
    }
</script>
</head>
<body>
<div class="mainwrapper">
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
        <div class="logopanel">
        
        	<h1><a href="dashboard.php"><img src="../../images/nexg_logo.png" style="width:50px;">Nex-g</a></h1>
        </div><!--logopanel-->
               
           <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header"><a href="../index.php">Main Navigation</a></li>
                <li class="active"><a href="dashboard.php" style="cursor:pointer;"><span class="icon-arrow-right"></span> Dashboard</a></li>
				<li><a href="feedback.php"><span class="icon-arrow-right"></span>Trainee Feedback</a></li>
				<li><a href="certificate.php"><span class="icon-arrow-right"></span>Certificate Issue</a></li>
                <li><a href="daily_feed.php"><span class="icon-arrow-right"></span>Daily Feedback</a></li>
				
				
              
            </ul>
        </div><!--leftmenu-->
        
    </div><!--mainleft-->
    <div style="clear:both;"></div>
    <!-- END OF LEFT PANEL -->
