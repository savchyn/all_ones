<?php  session_start();
if(!isset($_SESSION['username']))
{
	header('location:index.php');
}
include('conn.php');
?>
<?php include("header.php");?>  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=736497446394057";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- code for nexgskills like -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=736497446394057";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            <div class="headerright">
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#"> 
           Welcome &nbsp;
        <?=$_SESSION['username']?>
           
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
        	<h1>Users Dashboard</h1> 
        </div><!--pagetitle-->
        
        <div class="maincontent" >
        	<div class="contentinner content-dashboard" >
            	<div class="alert alert-info" style="width:50%;margin-left:15%;">
                	<button type="button" class="close" data-dismiss="alert" >×</button>
                    <strong>Nex-G Skills New Updates</strong> 
                </div><!--alert-->
               <div style="width:100%;margin-left:25%;">
				 <!-- Div for nexgskills like -->
				<div class="fb-like" data-href="https://www.facebook.com/NexgSkills" data-width="100%" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				   <br><br>
				<!-- end hear -->
				   </div>
				<!-- <iframe src="https://www.facebook.com/20531316728/posts/10154009990506729/" name="iframe_a" style="height:365px;border:none;margin-top:8px;overflow:hidden;" scrolling="yes"></iframe> -->
			<div style="width:100%;margin-left:25%;">
				
				 <!-- Div for nexgskills Posts -->
				<div class="fb-page" data-href="https://www.facebook.com/NexgSkills" data-tabs="timeline" data-width="200%" data-height="auto" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" ><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NexgSkills"><a href="https://www.facebook.com/NexgSkills">Nex-G Skills</a></blockquote></div></div>
				</div>	
				
				
                <div class="row-fluid">
                	<div class="span8">
                    	<ul class="widgeticons row-fluid">
                        	
                            
                        </ul>
                        
                        <br />
                        
                      
    
    <div class="clearfix"></div>
    
    
    
</div><!--mainwrapper-->
<script type="text/javascript">
jQuery(document).ready(function(){
								
		// basic chart
		var flash = [[0, 2], [1, 6], [2,3], [3, 8], [4, 5], [5, 13], [6, 8]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
	
			
		var plot = jQuery.plot(jQuery("#chartplace2"),
			   [ { data: flash, label: "Flash(x)", color: "#fb6409"}, { data: html5, label: "HTML5(x)", color: "#096afb"} ], {
				   series: {
					   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
					   points: { show: true }
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
				   yaxis: { min: 0, max: 15 }
				 });
		
		var previousPoint = null;
		jQuery("#chartplace2").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));
			
			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
						
					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
						
					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}
			
			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;            
			}
		
		});
		
		jQuery("#chartplace2").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});


		// bar graph
		var d2 = [];
		for (var i = 0; i <= 10; i += 1)
			d2.push([i, parseInt(Math.random() * 30)]);
			
		var stack = 0, bars = true, lines = false, steps = false;
		jQuery.plot(jQuery("#bargraph2"), [ d2 ], {
			series: {
				stack: stack,
				lines: { show: lines, fill: true, steps: steps },
				bars: { show: bars, barWidth: 0.6 }
			},
			grid: { hoverable: true, clickable: true, borderColor: '#bbb', borderWidth: 1, labelMargin: 10 },
			colors: ["#06c"]
		});
		
		// calendar
		jQuery('#calendar').datepicker();


});
</script>
</body>
</html>
