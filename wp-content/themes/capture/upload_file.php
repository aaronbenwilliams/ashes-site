<?php
//here you specify the image extensions allowed :)
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    { 
    //here you display your success report :) 
    echo "Your file " . $_FILES["file"]["name"] . " successfully uploaded!!<br>";
    echo "Details :";    
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //this code should display your image
echo "<img src=upload/" . $_FILES["file"]["name"] . ">";
/*the folder of upload which must be in the same folder as the webpage where you would 
  put this code by default we use "upload" change to yours :) make sure you create this folder!*/
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
    
      }
    }
  }
else
  {
    //error message if the extension is not allowed
    echo "Invalid file"; 
    $filename = preg_replace('/[^A-Z0-9]/','',$_FILES["file"]["name"]) . $extension;
    $logo = upload/$filename
    /*establishes connection to database change "localhost" to your host, 
       "root" to your database username and "pass" with your password*/ 
    mysql_connect("Localhost", "root", "pass") or die (mysql_error ());
    // choose database. Change "jithub" to your database name
	mysql_select_db("jithub") or die(mysql_error());
	//Change "css" to your table and "images" to your table column  
	$strSQL = "INSERT INTO css(images) VALUES('$logo')";
	mysql_query($strSQL) or die(mysql_error());
	?>  