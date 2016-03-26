<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
?>


<?php include("header.php");?>
<head>
<script>
	function printPDF(htmlPage)
{
    var w = window.open("about:blank");
    w.document.write(htmlPage);
    if (navigator.appName == 'Microsoft Internet Explorer') window.print();
    else w.print();
}
</script>
</head>
<div style="clear:both;"></div>
<!--code for upper table -->
<div class="rightpanel" style="clear:both;">
    	<div class="headerpanel">
        	<a href="#" class="showmenu"></a>
            
            <div class="headerright">
            	<div class="dropdown notification">
                    
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#"> 
           Welcome <b><?php echo $_SESSION['username'];?></b>
                   
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
        	<h1>All Courses Pdf</h1>
            
        </div><!--pagetitle-->
    <div style="margin:10px;color:#990000; margin-top:10px">
  
        </div> 
	 </div>         

<!--code for down table -->
 <div class="rightpanel" style="clear:both;">
    <div style="margin:10px;color:#990000; margin-top:10px">
   <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;"  >
    <thead>
    `<th>S.No.</th>
    	<th>Course Name </th>
		<th> Pdf Download</th> 
		<th>Print Pdf</th>  
       
        
    </thead>
    <?php
    	$que=mysql_query("select * from course_pdf order by course_name asc;");
    	while($fetch=mysql_fetch_array($que)){
    ?>
    <tr>
        <td><?php echo $fetch['id'];?></td>
    <td><?php echo $fetch['course_name'];?></td>
    <td ><a href="downloadfile.php?fileid=<?php echo $fetch['id'];?>" ><?php echo $fetch['pdf_file'];?></a></td>
    <!--<td><a href="downloadfile.php?printfile=<?//php echo $fetch['pdf_file'];?>" >Print Pdf </a></td> -->
    <td><input type="submit"  value="Print"
name="Submit" id="printbtn"
onclick="printPDF('<?php echo $fetch['pdf_file'];?>')" /></td>
		<td><a href="delete.php?idnumber=<?php echo $fetch['id'];?>" onclick="return confirm('Do you really want to submit the form?');">Delete</a></td>
    </tr>
    <?php } ?>
        </table><br>
  
        </form>
        </div> 
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    