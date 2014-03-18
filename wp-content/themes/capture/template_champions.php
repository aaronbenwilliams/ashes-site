
<?php

/*
Template Name: template_champions*/


get_header(); ?>

<?php

include 'dbconnect.php';

$query = mysql_query("SELECT * FROM champions") or die("Error: " . mysql_error());

echo "<table border='1' width='100%' >"; 
echo "<tr>";  
$i = 0;
    while($row = mysql_fetch_array($query)){
        if($i++%12 == 0) echo '</tr><tr>';
        $id = $row[0];
        $name = $row[21];
        $image = $row[2];
        echo "<td>";
        echo "<a href=$name/?id=$id>";
            echo '<img src="data:image/png;base64,' . base64_encode($image) . '" />';   
        echo "</a>";
        echo "</td>";
       
       
    }  
 echo "</tr>";
echo "</table>";          

    ?>


<?php get_footer(); ?>