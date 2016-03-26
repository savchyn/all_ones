<?php 
if(isset($_REQUEST['Submit']))
{
$allowedExts = array("wmv","avi","mpeg","mpg","png","jpg","jpeg","gif");
$extension = end(explode(".", $_FILES["vid"]["name"]));
if (in_array($extension, $allowedExts))
  {
  if ($_FILES["vid"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["vid"]["error"] . "<br>";
    }
  else
    {
    echo "admin/upload/ " . $_FILES["vid"]["name"] . "<br>";
    echo "Type: " . $_FILES["vid"]["type"] . "<br>";
    echo "Size: " . ($_FILES["vid"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["vid"]["tmp_name"] . "<br>";

    if (file_exists("admin/upload/" . $_FILES["vid"]["name"]))
      {
      echo $_FILES["vid"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["vid"]["tmp_name"],
      "admin/upload/" . $_FILES["vid"]["name"]);
      echo "Stored in: " . "admin/upload/" . $_FILES["vid"]["name"];
	  print_r($_FILES);
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  //header('location:index.php');
  }
  
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled tocument</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data"/>
<input type="file" name="vid"  />
<input type="submit" name="Submit" value="submit"/>
</form>
</body>
</html>
