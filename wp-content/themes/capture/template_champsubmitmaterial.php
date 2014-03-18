<?php

/*
Template Name: template_champsubmitmaterial*/


get_header(); ?>

<?
$id = ($_GET["id"]);
$query = mysql_query("SELECT * FROM champions WHERE id=$id") or die("Error: " . mysql_error());
 while($row = mysql_fetch_array($query)){

$name = urlencode($row[21]);
 

echo '<div id="btnbar" class="container-fluid">';
echo '<div class="row-fluid">';
echo    '<div class="span4">';
echo  '<a href="/champions/' . $name . '/champinfo/?id=' . $id . '" class="btn btn-info btn-large">Champion Information</a>';
echo   '</div>';
echo    '<div class="span4">';
echo  '<a href="/champions/' . $name . '/champlore/?id=' . $id . '"" class="btn btn-info btn-large">Champion Lore</a>';
echo    '</div>';
echo    '<div class="span4">';
echo '<a href="/champions/' . $name . '/champsubmitmaterial/?id=' . $id . '"" class="btn btn-info btn-large">Champion Submitted Material</a>';
 echo '</div>';
echo '</div>';
echo '</div>';
echo '<p id="vertspace">&nbsp; </p>';

 }



    ?>



 
<?
 echo '<p id="vertspace">&nbsp; </p>';
 $data = mysql_query("SELECT * FROM submissions WHERE champname='$name'") or die(mysql_error()); 

 while($info = mysql_fetch_array( $data )) 
 { 

   
 echo "<img src=http://www.leaguedaily.co.uk/images/".$info['url'] ."> <br>"; 
 echo "<b>Champion Name:</b> ".$info['champname'] . "<br> "; 
 echo "<b>Category:</b> ".$info['category'] . " <br>"; 

 }
 
?>


<?php get_footer(); ?>