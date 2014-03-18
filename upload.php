<?php
include 'dbconnect.php';
$champname=$_POST['champname']; 
$cat=$_POST['category'];

function randString($min = 5, $max = 8){
 # get random character length between minimum and maximum length
 $length = rand($min, $max);
 $string = '';
 # character index [0-9a-zA-Z]
 $index = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 # loop random times defined by $length
 for ($i=0; $i < $length; $i++) {
  # get random character index
  $string .= $index[rand(0, strlen($index) -1)];
 }
 return $string;
}
$randstring = randString(4,8);

//Сheck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "gif"||$ext == "png" ||$ext == "jpe"||$ext == "jpg" || $ext == "JPG" || $ext == "jpeg" || $ext == "JPEG") && ($_FILES["uploaded_file"]["type"] == "image/jpeg" || "image/png" || "image/gif") && 
    ($_FILES["uploaded_file"]["size"] < 350000)) {
    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/images/'.$randstring.''.$filename.'';
      $url = ''.$randstring.''.$filename.'';
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           echo "Your file has been uploaded successfully.";
           echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
           mysql_query("INSERT INTO `submissions` VALUES ('$fake','$champname','$cat','$url')") ; 
            echo randString(4, 8);
        } else {
           echo "Error: A problem occurred during file upload!";
           echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
        
        }
      } else {
         echo "<h1>Error: File ".filename." already exists</h1>";
         echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
      }
  } else {
     echo "<h1>Error: Only .jpg .gif .png images under 350Kb are accepted for upload</h1>";
     echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
     
    
  }
} else {
 echo "<h1>Error: No file uploaded</h1>";
 echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
}
?>