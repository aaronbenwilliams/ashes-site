<?php
include 'dbconnect.php';
/*
Template Name: template_champlore*/


get_header(); ?>

<?
$id = ($_GET["id"]);
$query = mysql_query("SELECT * FROM champions WHERE id=$id") or die("Error: " . mysql_error());
 while($row = mysql_fetch_array($query)){

$name = urlencode($row[21]);
$chname = $row[1];
$icon = $row[2];
 

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
<link rel="stylesheet" type="text/css" href="/custom.css">


<?

$id = ($_GET["id"]);
$secquery = mysql_query("SELECT * FROM lore WHERE loreid=$id") or die("Error: " . mysql_error());
 while($row = mysql_fetch_array($secquery)){
    $lore = $row[1];
 }
     
echo '<div class="container-fluid">';
echo '<div class="row-fluid">';
echo '<div class="span8 offset2">';
     
echo '<table id="nobborder">';
echo '<tr>';
echo '<td><img src="data:image/png;base64,' . base64_encode($icon) . '" /></td>';
echo '<td>' . $chname . '</td>';  
echo '</tr>';
echo '<table>';
echo '<p id="vertspace">&nbsp; </p>';

echo '' . $lore . '';
echo '<p id="vertspace">&nbsp; </p>';

echo '</div></div></div>';

 
?>
<?php comments_template(); ?>
<?php get_footer(); ?>