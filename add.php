<?php 
 include 'dbconnect.php';
 //This is the directory where images will be saved 
 $target = "images/"; 
 $target = $target . basename( $_FILES['photo']['name']); 


 //This gets all the other information from the form 
 $name=$_POST['name']; 
 $champname=$_POST['champname']; 
 $cat=$_POST['category']; 
 $username=$_POST['username']; 
 $pic=($_FILES['photo']['name']); 
 $photo_size = ($_FILES['photo']['size']);

if (empty($_POST["name"]))
    {echo "<h1>Image name is required</h1>";}
elseif(empty($_POST["username"])){
echo "<h1>Username is required</h1>";
}
elseif ($photo_size > 350000)
 {
 echo "Your file is too large."; 
 echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';

        } elseif(!empty($_FILES['photo']['name'])) {
            echo "You havn't Selected a file.";
            echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
                }else{
     
                    mysql_query("INSERT INTO `submissions` VALUES ('$fake','$name','$champname', '$cat', '$username', '$pic')") ; 

 
                    //Writes the photo to the server 
                    if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
                    { 
       
     
                    //Tells you if its all ok 
                    echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been succesfully uploaded to return click below."; 
                    echo '<a href="http://www.leaguedaily.co.uk/user-submitted-material">League Daily</a>';
                    } 
                    else { 
 
                    //Gives and error if its not 
                    echo "Sorry, there was a problem uploading your file."; 
                    echo '<h1><a href="http://www.leaguedaily.co.uk/user-submitted-material">Return to League Daily</a></h1>';
                    } 
}

 ?> 