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
 
echo '<ul>
  <li>
    <a href="#" class="button info"><span class="hidden">Champion Information</span></a>
  </li>
  <li>
    <a href="#" class="button lore"><span class="hidden">Champion Lore</span></a>
  </li>
  <li>
    <a href="#" class="button submitted"><span class="hidden">Champion Submitted Material</span></a>
  </li>
</ul>';

 
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