
<?php include("header.php");?>    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            <div class="headerright">
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<!--dropdown-->
    		
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
        
        <div class="maincontent">
        	<div class="contentinner content-dashboard">
            	<div class="alert alert-info">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Welcome !</strong> 
                    
                </div><!--alert-->
                
                <div class="row-fluid">
                	<div class="span8">
                    	<ul class="widgeticons row-fluid">
                   <li class="one_fifth"><a href="admin" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Admin Panel</span></a></li>  
							<li class="one_fifth"><a href="course_pdf/" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Course Pdf</span></a></li>
							
							 <li class="one_fifth"><a href="employee/" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Employee Details</span></a></li>
							
            <li class="one_fifth"><a href="users" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Enquiry Management</span></a></li>
							<li class="one_fifth"><a href="payment" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Payment Details</span></a></li>
					
							<li class="one_fifth"><a href="" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Project Management</span></a></li>		
				
				<li class="one_fifth"><a href="prreg" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Project Registration</span></a></li>
				
				
							<li class="one_fifth"><a href="project_query/" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Project Query</span></a></li>
				
                            
							
							 <li class="one_fifth"><a href="trainee_feedback" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Trainee Feedback</span></a></li>
							
							<li class="one_fifth"><a href="tr_managment/" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Training Management</span></a></li>
							
							<li class="one_fifth"><a href="trreg" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Training Registration</span></a></li>
							
							
							
                            <li class="one_fifth"><a href="web_enquiry" style="text-decoration:none;"><img src="img/gemicon/edit.png" alt="" /><span>Web Enquiry</span></a></li>
                           
                             

	

                        </ul>
                        
                        <br />
                        
                      
    
   
    </div><!--footer-->

    
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
