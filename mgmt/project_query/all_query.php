<?php session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
include("conn.php");
 include("header.php");?>

<script type="text/javascript">
       function replace( hide,show ) {
  document.getElementById(hide).style.display="none";
  document.getElementById(show).style.display="block";
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
        	<h1>All Project Queries</h1>
            
        </div><!--pagetitle-->
   


      <div style="margin:50px;color:#990000; margin-top:10px" name="addcourse" id="addcourse"  >
    <form action="" method="post">
    <table class="table table-bordered" style="text-align:center;">
        <thead>
            <th>Sr.</th>
            <th>Registration Number</th>
            <th>Query</th>
            <th>Date</th>
             <th>Status</th>
            
        </thead>
             
    <?php 
        $quer=mysql_query("select * from project_query");
  while($row=mysql_fetch_array($quer)){
      $id=$row['id'];
     $regno=$row['reg_number']; 
      $query=$row['query'];
      $date=$row['date'];  
      $status=$row['status'];
   if($status=="open"){?>             
        <tr style="background-color:red;color:black;"> <?php } 
            
             if($status=="Action Taken"){?>             
        <tr style="background-color:green;color:black;"> <?php } 
            
            
             if($status=="Resolved"){?>             
        <tr style="background-color:yellow;color:black;"> <?php } ?>
            
           <td style="width:20px;" ><?php echo $id; ?></td> 
             <td style="width:100px;" ><?php echo $regno; ?></td> 
             <td style="width:240px;"><?php echo $query; ?></td> 
             <td style="width:100px;"><?php echo $date; ?></td> 
            <td style="width:100px;"><a href="status_change.php?rg=<?php echo $regno; ?>" style="color:black;"><?php echo $status; ?></a></td>
            
        </tr>
      <?php  }    ?>
    </table></form><br>
          
    </div>
    
    
     
     
     
     
	 </div>         
                     
    
    <div class="clearfix"></div>
    
    <!--footer-->
    
</div><!--mainwrapper-->

</body>
</html>

        
    