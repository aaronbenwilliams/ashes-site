<?php
include 'dbconnect.php';

/*
Template Name: template_champpage*/


get_header(); ?>

<link rel="stylesheet" type="text/css" href="/custom.css">

<?
$id = ($_GET["id"]);
$query = mysql_query("SELECT * FROM champions WHERE id=$id") or die("Error: " . mysql_error());
 while($row = mysql_fetch_array($query)){

$name = urlencode($row[21]);
 }
 
echo '
  <div class="row champ_btns">
    <div class="span4">
      <a href="#" class="champ_btn info_btn"><span class="hidden">Champion Information</span></a>
    </div>
    <div class="span4">
      <a href="#" class="champ_btn lore_btn"><span class="hidden">Champion Lore</span></a>
    </div>
    <div class="span4">
      <a href="#" class="champ_btn submitted_btn"><span class="hidden">Champion Submitted Material</span></a>
    </div>
  </div>
';

 
    ?>

<?

$id = ($_GET["id"]);
$query = mysql_query("SELECT * FROM champions WHERE id=$id") or die("Error: " . mysql_error());


    while($row = mysql_fetch_array($query)){
        $image = $row[3];
    echo '<img id="ahri" src="data:image/png;base64,' . base64_encode($image) . '" />';   


    }  
?>








<?php get_footer(); ?>