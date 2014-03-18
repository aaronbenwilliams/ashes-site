<?php

/*
Template Name: template_usersubmit*/


get_header(); ?>
<link rel="stylesheet" type="text/css" href="/custom.css">
 
<html> 
<body>
  <form enctype="multipart/form-data" action="../../../upload.php" method="post">


 Champion Name:<select name="champname">
 <option value="ahri">Ahri</option>
 <option value="aatrox">Aatrox</option>
 <option value="alistar">Alistar</option>
 <option value="akali">Akali</option>
 <option value="amumu">Amumu</option>
 <option value="anivia">Anivia</option>
 <option value="annie">Annie</option>
 <option value="ashe">Ashe</option>
 <option value="blitzcrank">Blitzcrank</option>
 <option value="brand">Brand</option>
 <option value="caitlyn">Caitlyn</option>
 <option value="cassiopeia">Cassiopeia</option>
 <option value="chogath">Cho Gath</option>
 <option value="corki">Corki</option>
 <option value="darius">Darius</option>
 <option value="diana">Diana</option>
 <option value="draven">Draven</option>
 <option value="drmundo">Dr Mundo</option>
 <option value="elise">Elise</option>
 <option value="evelynn">Evelynn</option>
 <option value="ezreal">Ezreal</option>
 <option value="fiddlesticks">Fiddlesticks</option>
 <option value="fiora">Fiora</option>
 <option value="fizz">Fizz</option>
 <option value="galio">Galio</option>
 <option value="gangplank">Gangplank</option>
 <option value="garen">Garen</option>
 <option value="gragas">Gragas</option>
 <option value="graves">Graves</option>
 <option value="hecarim">Hecarim</option>
 <option value="heimerdinger">Heimerdinger</option>
 <option value="irelia">Irelia</option>
 <option value="janna">Janna</option>
 <option value="jarvan">JarvanIV</option>
 <option value="jax">Jax</option>
 <option value="jayce">Jayce</option>
 <option value="jinx">Jinx</option>
 <option value="karma">Karma</option>
 <option value="karthus">Karthus</option>
 <option value="kassadin">Kassadin</option>
 <option value="katarina">Katarina</option>
 <option value="kayle">Kayle</option>
 <option value="kennen">Kennen</option>
 <option value="khazix">Kha Zix</option>
 <option value="kogmaw">Kog Maw</option>
 <option value="leblanc">LeBlanc</option>
 <option value="leesin">Lee Sin</option>
 <option value="leona">Leona</option>
 <option value="lissandra">Lissandra</option>
 <option value="lucian">Lucian</option>
 <option value="lulu">Lu Lu</option>
 <option value="lux">Lux</option>
 <option value="malphite">Malphite</option>
 <option value="malzahar">Malzahar</option>
 <option value="maokai">Mao kai</option>
 <option value="masteryi">MasterYi</option>
 <option value="missfortune">Miss Fortune</option>
 <option value="mordekaiser">Mordekaiser</option>
 <option value="morgana">Morgana</option>
 <option value="nami">Nami</option>
 <option value="nasus">Nasus</option>
 <option value="nautilus">Nautilus</option>
 <option value="nidalee">Nidalee</option>
 <option value="nocturne">Nocturne</option>
 <option value="nunu">Nunu</option>
 <option value="olaf">Olaf</option>
 <option value="orianna">Orianna</option>
 <option value="pantheon">Pantheon</option>
 <option value="poppy">Poppy</option>
 <option value="quinn">Quinn</option>
 <option value="rammus">Rammus</option>
 <option value="renekton">Renekton</option>
 <option value="rengar">Rengar</option>
 <option value="riven">Riven</option>
 <option value="rumble">Rumble</option>
 <option value="ryze">Ryze</option>
 <option value="sejuani">Sejuani</option>
 <option value="shaco">Shaco</option>
 <option value="shen">Shen</option>
 <option value="shyvanna">Shyvanna</option>
 <option value="singed">Singed</option>
 <option value="sion">Sion</option>
 <option value="sivir">Sivir</option>
 <option value="skarner">Skarner</option>
 <option value="sona">Sona</option>
 <option value="soraka">Soraka</option>
 <option value="swain">Swain</option>
 <option value="syndra">Syndra</option>
 <option value="talon">Talon</option>
 <option value="taric">Taric</option>
 <option value="teemo">Teemo</option>
 <option value="poppy">Poppy</option>
 <option value="thresh">Thresh</option>
 <option value="tristana">Tristana</option>
 <option value="trundle">Trundle</option>
 <option value="tryndamere">Tryndamere</option>
 <option value="twistedfate">Twisted Fate</option>
 <option value="twitch">Twitch</option>
 <option value="udyr">Udyr</option>
 <option value="urgot">Urgot</option>
 <option value="varus">Varus</option>
 <option value="vayne">Vayne</option>
 <option value="veigar">Veigar</option>
 <option value="velkoz">VelKoz</option>
 <option value="vi">Vi</option>
 <option value="viktor">Viktor</option>
 <option value="vladimir">Vladimir</option>
 <option value="volibear">Volibear</option>
 <option value="warwick">Warwick</option>
 <option value="wukong">Wukong</option>
 <option value="xerath">Xerath</option>
 <option value="xinzhao">Xin Zhao</option>
 <option value="yasou">Yasou</option>
 <option value="yorrick">Yorrick</option>
 <option value="zac">Zac</option>
 <option value="zed">Zed</option>
 <option value="ziggs">Ziggs</option>
 <option value="zilean">Zilean</option>
 <option value="zyra">Zyra</option>
</select></br>



Category:<select name="category">
 <option value="picture">Picture</option>
 <option value="art">Art</option>
 <option value="crafts">Craft</option>
 <option value="cosplay">Cosplay</option>
 <option value="other">Other</option></select></br>

   
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    Choose a file to upload: <input name="uploaded_file" type="file" /></br>
    <input type="submit" value="Upload" />

  </form> 
    
    </table>
</body> 
</html>


<?
 echo '<p id="vertspace">&nbsp; </p>';
 $data = mysql_query("SELECT * FROM submissions") or die(mysql_error()); 
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
 
 //Outputs the image and other data
 echo "<img src=http://www.leaguedaily.co.uk/images/".$info['url'] ."> <br>"; 
 echo "<b>Champion Name:</b> ".$info['champname'] . "<br> "; 
 echo "<b>Category:</b> ".$info['category'] . " <br>";  
 }


?>


<?php get_footer(); ?>