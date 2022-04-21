<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
      <head>
      <title> KACZOkomiks </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>


<div id="baner">

  <a href="index.php"><img src="images/header.jpg"  style="border: 0" alt="Strona główna"></a>


</div>


<div id="menu">

  <h3>Menu</h3>
  <ul>
     <li><a href="info.php">O stronie</a></li>
	 <li><a href="blog.php">Blog</a></li>
	<li><a href="admin.php">Zarządzaj</a></li>
    <h3>Kategorie</h3>
    <li><a href="komedia.php">Komedia</a></li>
    <li><a href="dramat.php">Dramat</a></li>
	<li><a href="romans.php">Romans</a></li>

  </ul>
  <div id="time">
    <p> Aktualna godzina </p>
    <div id="zegarek" style="FONT-WEIGHT:bold;SIZE:16PX;COLOR:orange; MARGIN-RIGHT: 4PX;"></div>
    <script type="text/javascript">
      <!--//--><![CDATA[// ><!--

      <!-- <![CDATA[
      function zegar() {
        var data = new Date();
        var godzina = data.getHours();
        var min = data.getMinutes();
        var sek = data.getSeconds();
        var terazjest = ""+godzina+
                ((min<10)?":0":":")+min+
                ((sek<10)?":0":":")+sek;
        document.getElementById("zegarek").innerHTML = terazjest;
        setTimeout("zegar()", 1000); }
      zegar();
      // ]]]]><![CDATA[> -->

      //--><!]]>
    </script>
  </div>
</div>



<div id="main">
<br>
 <a href="index.php"><img src="home.png"  width="40" height="40" style="border: 0" alt="Strona główna."></a> 
 <a href="admin.php"><img src="user.png"  width="40" height="40" style="border: 0" alt="Administrator."></a>
 <a href="info.php"><img src="info.png"  width="40" height="40" style="border: 0" alt="O stronie."></a>
  <h2>Witam Cię żółciutko!</h2>
  <p>Mam na imię Weronika. Jestem studentką informatyki. Strona, którą własnie odwiedzasz służy do czytania mang. Wszystkie mangi zamieszczone na stronie są przetłumaczone przeze mnie na język polski. Nie posiadam praw autorskich do żadnej z mang. Strona jest darmowa.</p>
 


</div>

<div id="footer">

  <p>Autor: Weronika Wolszczak, 3ID12A. Strona objęta prawami autorskimi, proszę nie udostępniać treści bez zgody autora.</p>

</div>



</body>
</html></title>
</head>

</html>