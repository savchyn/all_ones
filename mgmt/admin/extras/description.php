<?php
include('conn.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 
</head>
<body>

<div class="header">
	<div id="top_panel">
        <div id="sitetitle">
            NEWS Website
        </div>
		<?php
		$sd="select bann_news from banner";
		$ab=mysql_query($sd);
		$df=mysql_fetch_array($ab);
		{
		?>
        <div class="banner"><img src="admin/upload/<?php echo $df['bann_news']; ?>" width="700" height="90px;"/></div>
        </div><?php } ?>
</div>
<div id="container">

	
	<!-- end of top panel -->
    
    <div id="menu">
        <ul>
            <li><a href="index.html"  class="current">होम</a></li>
            <li><a href="#">डेली न्यूज़ </a></li>
            <li><a href="#">स्पोर्ट्स</a></li>
            <li><a href="#">बिज़्नेस</a></li>  
            <li><a href="#">पॉलिटिक्स</a></li> 
            <li><a href="#">एंटरटेनमेंट</a></li>                     
            <li><a href="#">टेक्नालजी &amp; साइन्स</a></li>            
        </ul> 
	</div>
    
	<div class="breaking_news">
    	<div class="news_img"><img src="images/breaking_news.png" height="20" width="150" class="img" /></div>
        <div class="news_content">
        <marquee direction="left" scrollamount="4" behavior="scroll">
        	<p style="color:#FFFFFF; font-size:16px; font-weight:bold; padding-top:10px; "><?php
			 $df="select * from brek_news where b_news=1";
			
			$rf=mysql_query($df);
			$row=mysql_fetch_array($rf);
			{ ?>
			 <a href="breknews_desc.php?id=<?= $row['id']; ?>" style="text-decoration:none;color:#990000;"> <?php  echo $row['News'];?></a>
				<?php echo $row['time'];?>
			<?php	}
			
			 ?></p>
        </marquee>
        </div>
    </div>
	<div id="content">
<div class="rcol_sectionwithborder">
            	<div id="video_section">
                    <h2>लेटेस्ट वीडियोस</h2>
                    <div class="video_box">
                        <img src="images/vid1.jpg" height="71" width="106" alt="image" />
                       
                    </div>
                    <div class="video_box">
                        <img src="images/vid2.jpg" height="71" width="106" alt="image" />
                                           
                    </div> 
                    <div class="video_box">
                        <img src="images/vid3.jpg" height="71" width="106" alt="image" />
                                          
                    </div>
                    <div class="view_all"><a href="#">पूरा देखिए</a></div>
				</div>
            </div>
    	<div id="main_leftcol">
    	  <!-- end of left column -->
<div class="leftcol_subcol">
				<div class="regular_section">
                  <form action="" method="post" >
  <?php
  
					   $ab="select  photo, id,News,description from big_news where id='".$_REQUEST['id']."' ";
					   $sd=mysql_query($ab);
					   $row=mysql_fetch_array($sd);
					   {?>
					<img src="admin/upload/<?php echo $row['photo']; ?>" height="300" width="600" alt="image" /><br />
                       <p style="width:300px; text-align:justify">
                     <?php
					       echo $row['News']."<br/><br/>";
						   }
					    ?>
						<?php echo $row['description'];?>
						</p></form> </div>
                
          </div>
    	</div> 
    	<!-- end of left column -->
        
        <div id="main_rightcol">
        	
             
            
            <div class="rcol_sectionwithborder">
            	<div id="blog_section">
                    <h2>अन्य राज्यो की ख़बरे</h2>
                    
                    <div class="blog_box">
                        <h3><a href="#">छत्तिस्गर्ह</a></h3>
                       Look at how the road is a man who beats his wife half an hour
                        <div class="datetime">15:00 </div>
                  </div>
                    
                    <div class="blog_box">
                        <h3><a href="#">देल्ही</a></h3>
                        Outraged wife in the car for half an hour, watch video
                        <div class="datetime">13:30</div>
                  </div>   
                                <div class="blog_box">
                        <h3><a href="#">मध्य प्रदेश</a></h3>
                        By far the best turnout in Madhya Pradesh
                        <div class="datetime">13:30</div>
                  </div>          
                    <div class="more_button"><a href="#">व्यू ऑल</a></div>
                    
			  </div>                                                              
            </div> 
            
            
            <div class="rcol_sectionwithborder">
            	<div id="poll_section">
                    <h2>मतदान</h2>
                    <img src="images/modis.jpg" height="90" width="120" alt="image" />
                    <p>
                   Modi Should be the Prime Minister Of India</p>
                <input type="radio" name="poll" value="yes" checked="checked" />
                हॉ<br />
                    <input type="radio" name="poll" value="no" />
                    ना<br />
                    <br />
                    <input class="button" type="submit" name="Submit" value="Vote" /> <a href="#">व्यू रिज़ल्ट</a>			  </div>
            </div>
            
            <div class="rcol_sectionwithborder">
            	<div id="newsletter_section">
                    <h2>सबस्क्राइब न्यूस्लेटर</h2>
                    <form method="get" action="#">
                        <div class="form_row">	
                        <label>Choose Newsletter</label>
                        <select>
                            <option>Daily News</option>
                            <option>Breaking News</option>
                            <option>Sport News</option>                        
                            <option>Entertainment News</option>                        
                        </select>
                        </div>
                        <div class="form_row"><label>Email address</label><input class="inputfield" name="email_address" type="text" id="email_addremss"/></div>
                       <input class="button" type="submit" name="Submit" value="Subscribe" />
                    </form>
			  </div>
            </div>
        </div>
    </div>
    
     <!-- end of footer -->
<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 
</div>

<div id="footer">
<div class="footer_main">
    	<div class="footer_leftcol">
	        Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a><br />
			<a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a><br /><br />
            <p>&nbsp;</p>
        </div>
        <div class="footer_rightcol">
          <div class="footer_subcol"></div>
          <div class="footer_subcol"></div>
        </div>
        </div>
    </div>
</body>
</html>