<?php include('conn.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/tabcontent.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tabcontent.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  -->
<!--image sliding -->
<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
<script type="text/javascript">
		    $(function () {

		       $("#carouseltop").carouFredSel({
	responsive	: true,
	items		:4,
	width: 200,
	scroll : {
            items           : 2,
            easing          : "cubic",
            duration        : 500,                         
            pauseOnHover    : true
        }  
	
	
});
		    });
		</script>
<!-- image sliding ends-->

</head>
<body>


<div class="header">
  <div id="top_panel">
    <div id="sitetitle"> <img src="images/logo.gif" height="80" width="250" /> </div>
    <?php
		$sd="select bann_news from banner";
		$ab=mysql_query($sd);
		$df=mysql_fetch_array($ab);
		{
		?>
    <div class="banner"><img src="admin/upload/<?php echo $df['bann_news']; ?>" width="700" height="90px;"/></div>
  </div>
  <?php } ?>
</div>
<div id="container">
  <!-- end of top panel -->
  <div id="content">
    <div class="breaking_news">
      <div class="news_img"><img src="images/breaking_news.png" height="20" width="150" class="img" /></div>
      <div class="news_content">
        <marquee direction="left" scrollamount="4" behavior="scroll">
        <p style="color:#FFFFFF; font-size:16px; font-weight:bold; padding-top:10px; ">
          <?php
			 $df="select * from brek_news where b_news=1";
			
			$rf=mysql_query($df);
			$row=mysql_fetch_array($rf);
			{ ?>
          <a href="breknews_desc.php?id=<?= $row['id']; ?>" style="text-decoration:none;color:#FFFFFF;">
          <?php  echo $row['News'];?>
          </a> <?php echo $row['time'];?> </p>
        </marquee>
        <div class="news_content_img"> <a href="watch_brek_vid.php?id=<?= $row['id'];?>"><img src="images/Aaj-Tak_live-TV-1.gif" /></a>
          <?php	}
			
			 ?>
        </div>
      </div>
    </div>
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
    <div class="rcol_sectionwithborder">
      <div id="video_section">
        <h2>लेटेस्ट वीडियोस</h2>
        <div id="wrapper-carousel">
        


          <div id="carouseltop">
            <?php
					$ad="select * from video_news limit 10";
					$df=mysql_query($ad);
					while($row=mysql_fetch_array($df))
					{
					?>
            <!--<div class="video_box">-->
            <div><a href="video_news.php?id=<?= $row['id'];?>" style="text-decoration:none;"><img src="admin/upload/<?php echo $row['photo'];?>" height="71" width="106" alt="image" /></a></div>
            <?php }?>
            </div> 
            <!--</div>
                    <div class="video_box">-->
            <!--</div> 
                    <div class="video_box">-->
            <!--</div>-->
          </div>
        </div>
        <!--<div class="view_all"><a href="#">पूरा देखिए</a></div>-->
       </div>
    
    <div id="main_leftcol">
      <div class="leftcol_subcol">
        <div id="topnews"> <img src="images/latest_news.jpg" height="213" width="285" alt="image" />
          <h1>Ahmedabad, Modi's 'The wedding' the Congress</h1>
          <p align="justify"> Modi is neither zero nor a hero, his place somewhere in between: Sibal ..... </p>
          <p> Modi congressmen took procession of ...</a></p>
          <span class="updatedtime">updated 12 minutes ago</span> </div>
        <div id="topnews"> <img src="images/shiela_dixit.jpg" height="213" width="285" alt="image" />
          <h1>We do not shout, show by: Sheila Dikshit </h1>
          <p align="justify"> Modi is neither zero nor a hero, his place somewhere in between: Sibal ..... </p>
          <p>'Sheila're going to defeating the Kejriwal' </a></p>
          <span class="updatedtime">"Congress will not back triumphs responsibility ' </span> </div>
        <div id="gallery_section">
          <h2>सी पिक्चर्स</h2>
          <div id="image_section"> <a href="#"><img src="images/pics1.jpg" alt="image" height="68" width="89" /></a> <a href="#"><img src="images/pics2.jpg" alt="image" height="68" width="89" /></a> <a href="#"><img src="images/pics3.jpg" alt="image" height="68" width="89" /></a>
            <!--  <a href="#"><img src="images/pics4.jpg" alt="image" height="68" width="89" /></a>
                        <a href="#"><img src="images/pics5.jpg" alt="image" height="68" width="89" /></a>
                        <a href="#"><img src="images/pics6.jpg" alt="image" height="68" width="89" /></a>
                        <a href="#"><img src="images/pics7.jpg" alt="image" height="68" width="89" /></a>
                        <a href="#"><img src="images/pics8.jpg" alt="image" height="68" width="89" /></a>-->
          </div>
          <div class="view_all"><a href="#">व्यू ऑल फोटोस</a></div>
        </div>
      </div>
      <!-- end of left column -->
      <div class="leftcol_subcol">
        <div class="regular_section">
          <h2>बड़ी ख़बरे</h2>
          <div class="newsbox">
            <?php
					   $ab="select  photo, id,News from big_news ORDER BY id";
					   $sd=mysql_query($ab);
					   $row=mysql_fetch_array($sd);
					   {?>
            <p align="left" style="width:270px; float:left;padding-left:20px;"> <img src="admin/upload/<?php echo $row['photo']; ?>" height="90" width="120" alt="image" align="left" /><br/>
              <span class="newstitle" style="margin:0;padding:0px;">LIVE: </span>
              <?php
					       echo $row['News']; ?>
              </a> <a href="description.php?id=<?=$row['id']; ?>">पूर्ण कहानी</a>
              <?php }
					    ?>
            </p>
          </div>
          <br/>
          <?php
	                        $fg="select id,News from big_news";
	                            $mg= mysql_query($fg);
	                        while($ab=mysql_fetch_array($mg))
	                     {?>
          <ul>
            <li> <a href="description.php?id=<?=$ab['id'];?>">dsk fjsd fhsj kfh jks dhf jks hdj khj dfkj kj dfjg kldjf kljdfl gjdfgjd dsdf
              <?php    echo $ab['News']."<br/>"; ?>
              </a> </li>
          </ul>
          <?php   }
									   ?>
          <a href="#">रेड ऑल लेटेस्ट न्यूज़</a> </div>
        <div class="regular_section"> <img src="images/dilli_ka_Dangal.jpg" /> </div>
      </div>
      <div class="tab_section">
        <!-- start -->
        <ul id="countrytabs" class="shadetabs">
          <li><a href="#" rel="health" class="selected">देश</a></li>
          <li><a href="#" rel="entertainment">विश्व</a></li>
          <li><a href="#" rel="politics">खेल</a></li>
          <li><a href="#" rel="business">मेट्रोपोलिटियाँ</a></li>
          <li><a href="#" rel="tech_science">बिज़्नेस</a></li>
        </ul>
        <div class="tabcontent_section">
          <div id="health" class="tabcontent">
            <div class="topnews"> <img src="images/templatemo_image_08.jpg" alt="image" />
              <h4>देश ख़बरे</h4>
              <p> <a href="#">पूर्ण कहानी</a> </p>
            </div>
            <div class="newslist">
              <ul>
                <li><a href="#">Vinod Kambli had a heart attack</a></li>
                <li><a href="#">Nalanda University will begin studies</a></li>
                <li><a href="#">Phillips strenuous cameras and mobile phones with larger screens</a></li>
              </ul>
              <a href="#">रेड ऑल लेटेस्ट न्यूज़</a> </div>
          </div>
          <div id="entertainment" class="tabcontent">
            <div class="topnews"> <img src="images/templatemo_image_12.jpg" alt="image" />
              <h4>World</h4>
              <p> <a href="#">पूर्ण कहानी</a> </p>
            </div>
            <div class="newslist">
              <ul>
                <li><a href="#">Vinod Kambli had a heart attack</a></li>
                <li><a href="#">Nalanda University will begin studies</a></li>
                <li><a href="#">Phillips strenuous cameras and mobile phones with larger screens</a></li>
              </ul>
              <a href="#">रेड ऑल लेटेस्ट न्यूज़</a> </div>
          </div>
          <div id="politics" class="tabcontent">
            <div class="topnews"> <img src="images/templatemo_image_08.jpg" alt="image" />
              <h4>खेल</h4>
              <p> <a href="#">पूर्ण कहानी</a> </p>
            </div>
            <div class="newslist">
              <ul>
                <li><a href="#">Vinod Kambli had a heart attack</a></li>
                <li><a href="#">Nalanda University will begin studies</a></li>
                <li><a href="#">Phillips strenuous cameras and mobile phones with larger screens</a></li>
              </ul>
              <a href="#">रेड ऑल लेटेस्ट न्यूज़</a> </div>
          </div>
          <div id="business" class="tabcontent">
            <div class="topnews"> <img src="images/templatemo_image_12.jpg" alt="image" />
              <h4>मेट्रोपोलिटियाँ</h4>
              <p> <a href="#">पूर्ण कहानी</a> </p>
            </div>
            <div class="newslist">
              <ul>
                <li><a href="#">Vinod Kambli had a heart attack</a></li>
                <li><a href="#">Nalanda University will begin studies</a></li>
                <li><a href="#">Phillips strenuous cameras and mobile phones with larger screens</a></li>
              </ul>
              <a href="#">रेड ऑल लेटेस्ट न्यूज़</a> </div>
          </div>
          <div id="tech_science" class="tabcontent">
            <div class="topnews"> <img src="images/templatemo_image_08.jpg" alt="image" />
              <h4>बिज़्नेस न्यूज़</h4>
              <p> <a href="#">पूर्ण कहानी</a> </p>
            </div>
            <div class="newslist">
              <ul>
                <li><a href="#">Vinod Kambli had a heart attack</a></li>
                <li><a href="#">Nalanda University will begin studies</a></li>
                <li><a href="#">Phillips strenuous cameras and mobile phones with larger screens</a></li>
              </ul>
              <a href="#">रेड ऑल लेटेस्ट न्यूज़</a> </div>
          </div>
        </div>
        <script type="text/javascript">
            
            var countries=new ddtabcontent("countrytabs")
            countries.setpersist(true)
            countries.setselectedClassTarget("link") //"link" or "linkparent"
            countries.init()
            
            </script>
        <!-- end -->
      </div>
    </div>
    <!-- end of left column -->
    <div id="main_rightcol">
      <!--<div class="rcol_sectionwithborder">
            	<div id="video_section">
                    <h2>लेटेस्ट वीडियोस</h2>
                    <div class="video_box">
                        <img src="images/vid1.jpg" height="71" width="106" alt="image" />
                        <a href="#"><span>1:</span> Case Detective Seeking FIR against Modi</a>
                    </div>
                    <div class="video_box">
                        <img src="images/vid2.jpg" height="71" width="106" alt="image" />
                        <a href="#"><span>2:</span> Tejpal met at home, police returned empty-handed</a>                    
                    </div> 
                    <div class="video_box">
                        <img src="images/vid3.jpg" height="71" width="106" alt="image" />
                        <a href="#"><span>3:</span> Duis vitae velit sed duiA sting operation Laxman remembered</a>                    
                    </div>
                    <div class="view_all"><a href="#">पूरा देखिए</a></div>
				</div>
            </div>-->
      <div class="rcol_sectionwithborder">
        <div id="blog_section">
          <h2>अन्य राज्यो की ख़बरे</h2>
          <div class="blog_box">
            <h3><a href="#">छत्तिस्गर्ह</a></h3>
            Look at how the road is a man who beats his wife half an hour dufhjksdh sdf sdf s f sd f sdf sd
            <div class="datetime">15:00 </div>
          </div>
          <div class="blog_box">
            <h3><a href="#">देल्ही</a></h3>
            Outraged wife in the car for half an hour, watch video sdf sd f sd f asd f sdf sd f sd f s
            <div class="datetime">13:30</div>
          </div>
          <div class="blog_box">
            <h3><a href="#">मध्य प्रदेश</a></h3>
            By far the best turnout in Madhya Pradesh dsf s df s df s df sd
            <div class="datetime">13:30</div>
          </div>
          <div class="more_button"><a href="#">व्यू ऑल</a></div>
        </div>
      </div>
      <div class="rcol_sectionwithborder">
        <div id="poll_section">
          <h2>मतदान</h2>
          <img src="images/modis.jpg" height="90" width="120" alt="image" />
          <p> Modi Should be the Prime Minister Of India</p>
          <input type="radio" name="poll" value="yes" checked="checked" />
          हॉ<br />
          <input type="radio" name="poll" value="no" />
          ना<br />
          <br />
          <input class="button" type="submit" name="Submit" value="Vote" />
          <a href="#">व्यू रिज़ल्ट</a> </div>
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
            <div class="form_row">
              <label>Email address</label>
              <input class="inputfield" name="email_address" type="text" id="email_addremss"/>
            </div>
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
    <div class="footer_leftcol"> Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a><br />
      <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a><br />
      <br />
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
