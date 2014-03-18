
<?php
include 'dbconnect.php';
/*
Template Name: template_champinfo*/


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
echo '<p id="vertspace">&nbsp; </p>';

 }
    ?>
<link rel="stylesheet" type="text/css" href="/custom.css">

<?
$id = ($_GET["id"]);
$query = mysql_query("SELECT * FROM champions WHERE id=$id") or die("Error: " . mysql_error());
$secquery = mysql_query("SELECT * FROM icons WHERE picid=2") or die("Error: " . mysql_error());
 while($row = mysql_fetch_array($query)){
    $name = $row[1];
    $icon = $row[2];
    $picon = $row[4];
    $passive = $row[5];
    $qicon = $row[6];
    $qskill = $row[7];
    $wicon = $row[8];
    $wskill = $row[9];
    $eicon = $row[10];
    $eskill = $row[11];
    $ricon = $row[12];
    $rskill = $row[13];
    $ad = $row[14];
    $as = $row[15];
    $arm = $row[16];
    $mr = $row[17];
    $mov = $row[18];
    $hp = $row[19];
    $mana = $row[20]; 
 }
 while($row = mysql_fetch_array($secquery)){
    $hpicon = $row[1];
    $manaicon = $row[2];
    $adicon = $row[3];
    $asicon = $row[4];
    $armicon = $row[5];
    $mricon = $row[6];
    $movicon = $row[7];
 }
     

echo '<div class="container-fluid">';
echo '<div class="row-fluid">';
echo '<div class="span6">';
echo '<table id="noborder">';
echo '<tr>';
echo '<td><img src="data:image/png;base64,' . base64_encode($icon) . '" /></td>';
echo '<td>' . $name . '</td>';  
echo '</tr>';
echo '<table>';

echo '<table id="noborder">';
echo '<tr>';
echo '<td width="20px">';
echo '<img src="data:image/png;base64,' . base64_encode($hpicon) . '" />';
echo '<td>' . $hp . ' </td>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<img src="data:image/png;base64,' . base64_encode($manaicon) . '" />';
echo '<td>' . $mana . ' </td>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<img src="data:image/png;base64,' . base64_encode($adicon) . '" />';
echo '<td>' . $ad . '</td>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<img src="data:image/png;base64,' . base64_encode($asicon) . '" />';
echo '<td>' . $as . ' </td>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<img src="data:image/png;base64,' . base64_encode($armicon) . '" />';
echo '<td>' . $arm . ' </td>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<img src="data:image/png;base64,' . base64_encode($mricon) . '" />';
echo '<td>' . $mr . ' </td>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<img src="data:image/png;base64,' . base64_encode($movicon) . '" />';
echo '<td>' . $mov . ' </td>';
echo '</td>';
echo '</tr>';
echo '</table>';
echo '<table>';
echo '<tr>';
echo '<p id="vertspace">&nbsp; </p>';
echo '<p id="vertspace">&nbsp; </p>';
?><?php comments_template(); ?><?
echo '</tr>';
echo '</table>';
echo '</div>';
     
echo '<div class="span6">';
echo '<table id="noborder" >';
echo '<tr><td id="celltop" width="64px"><img src="data:image/png;base64,' . base64_encode($picon) . '" /> </td><td>' . $passive . '</td></tr>';
echo '<tr><td id="celltop" width="64px"><img src="data:image/png;base64,' . base64_encode($qicon) . '" /> </td><td>' . $qskill . '</td></tr>';
echo '<tr><td id="celltop" width="64px"><img src="data:image/png;base64,' . base64_encode($wicon) . '" /> </td><td>' . $wskill . '</td></tr>';
echo '<tr><td id="celltop" width="64px"><img src="data:image/png;base64,' . base64_encode($eicon) . '" /> </td><td>' . $eskill . '</td></tr>';
echo '<tr><td id="celltop" width="64px"><img src="data:image/png;base64,' . base64_encode($ricon) . '" /> </td><td>' . $rskill . '</td></tr>';
echo '</table>';
echo '</div>';    

 
    
    ?>


<?php get_footer(); ?>