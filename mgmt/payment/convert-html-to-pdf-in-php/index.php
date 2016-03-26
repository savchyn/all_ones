<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>

<div class="floatL cont_lft_side">

 
  <p>Please fill in your details below.</p>
  

<div style="width:448px; margin:auto;"></div>
<form method="POST" action="generatePdf.php" id="frmCtnt" name="frmCtnt">

<div class="txt_stl">
<input type="text" value="Enter Your Full Name" name="name" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
</div>

<div class="txt_stl">
<input type="text" value="Enter Your Email Id" name="email" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
</div>

<div class="txt_stl">
<input type="text" value="Enter Your Contact Number" name="mobile" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
</div>

<div class="txt_stl">
<textarea onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" rows="" cols="" name="comment">Please Write your Query or Comment here.</textarea>
</div>

<input class="or_btn_icon" type="submit" value="Submit">

</form>
  </div>



</body>
</html>

<style>

.askBdr{border-bottom: 1px solid #ccc; padding:10px 0;}
.cont_lft_side {
    width: 450px;
}
.cont_lft_side h3 { border-bottom: 1px solid #ccc; color: #666;font: 17px arial;padding-bottom: 7px;}
.cont_lft_side p {font-family: arial;font-size: 13px;padding: 8px 0 0;}
.txt_stl {width: 100%;}
.txt_stl input {border: 1px solid #cccccc;box-shadow: 0 1px 1px #c4c4c4 inset;color: #666;font: 13px arial;height: 32px;margin-top: 23px;padding-left: 10px;
    width: 100%;}
.txt_stl textarea {border: 1px solid #cccccc;box-shadow: 0 1px 1px #c4c4c4 inset;color: #666;font: 13px arial;height: 100px;margin-top: 23px;padding: 10px 0 0 10px;
    width: 100%;}
.or_btn_icon {background: linear-gradient(to bottom, #db4a37 0%, #c53827 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);border: 1px solid #b0281a;border-radius: 5px;
    box-shadow: 0 1px 0 #e68072 inset; color: #ffffff; cursor: pointer;font: 400 21px arial;margin: 20px 0 0;padding: 5px 30px;}

</style>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
