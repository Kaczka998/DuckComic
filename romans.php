<!DOCTYPE html>
<html>

<style>
  /* ------------------------CZĘŚĆ-GÓRNA-MENU------------------------ */

  /* wygląd głównego elementu - ol --background-color:#FFF;*/
  ol {
    list-style-type:none;
    margin:0;
    height:2em;
    font-size:18px;
    horiz-align: center;
    line-height:2em;
    text-align:center;
  }

  /* wygląd wszystkich elementów - a - znajdujących się w elemencie - ol--- */
  ol a {
    display:block;
    background-color: #EEEEEE;
    text-decoration:none;
    color:#000;
    width: 500px;
    position: relative;
    height: auto;
    padding:0 5px;
  }

  /* wygląd elementów - li - wszystkich dzieci elementu - ol -------;*/
  ol > li {
    float:left;
    background-color: #EEE;
    margin-left:1px;
    height:2em;
  }

  /* wygląd elementu - li - pierwszego dziecka elementu - ol */
  ol > li:first-child {
    margin-left:0;
  }

  /* wygląd elementów - li - wszystkich dzieci elementu - ol - po najechaniu kursorem myszki na element - li--background-color:#EEE; */
  ol > li:hover {

  }

  /* wygląd elementu - a - dziecka elementu - li - będącego dzieckiem elementu - ol - po najechaniu kursorem myszki na element - li */
  ol > li:hover > a {
    color:#09C;
  }

  /* wygląd elementu - ul - dziecka elementu - li - będącego dzieckiem elementu - ol - po najechaniu kursorem myszki na element - li */
  ol > li:hover > ul {
    display:block;
  }

  /* ------------------------CZĘŚĆ-ROZWIJANA-MENU------------------------ */

  /* wygląd głównych rozwijanych elementów - ul */
  ol > li > ul {
    display:none;
    list-style-type:none;
    padding:0;
    margin:0;
  }

  /* wygląd elementu - li - w części rozwijanej */
  ol > li > ul > li {
    position:relative;
    z-index: 1;
    background-color:#EEE;
  }

  /* wygląd elementu - a - w części rozwijanej */
  ol > li > ul > li > a {
    border-top:1px solid #FFF;
  }

  /* wygląd elementu - li - w części rozwijanej, po najechaniu kursorem myszki na dany element - li */
  ol > li > ul > li:hover {
    background-color:#DDD;
  }

  /* wygląd elementu - a - w części rozwijanej, po najechaniu kursorem myszki na element - li */
  ol > li > ul > li:hover > a {
    color:#09C;
  }
</style>


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
  <h2>Lista mang:</h2>



  <div id="maincomic">

  <script type="text/javascript"
	            src="https://slideshow.triptracker.net/slide.js"></script>
    <script type="text/javascript">
      <!--
	  
      var viewer5 = new PhotoViewer();
      viewer5.disableEmailLink();
      viewer5.disablePhotoLink();
      viewer5.add('komiksy/UntilTomorrow/Ch1/page1.jpg');
      viewer5.add('komiksy/UntilTomorrow/Ch1/page2.jpg');
      viewer5.add('komiksy/UntilTomorrow/Ch1/page3.jpg');
      viewer5.add('komiksy/UntilTomorrow/Ch1/page4.jpg');
      //--></script>
    <img src="komiksy/UntilTomorrow/untiltomorrow.jpg" width="80" height="80" style="float:left; MARGIN-RIGHT: 4PX;" alt="I CAN'T WAIT UNTIL TOMORROW COMES!">
    <ol>
      <li><a href="#">I CAN'T WAIT UNTIL TOMORROW COMES!</a>
        <ul>
      <li><a href="javascript:void(viewer5.show(0))">Rozdział 1</a></li>
          </ul>
    </ol>

    <br>    <br>    <br>

     <script type="text/javascript"
            src="https://slideshow.triptracker.net/slide.js"></script>
    <script type="text/javascript">
      <!--
	  
      var viewer4 = new PhotoViewer();
      viewer4.disableEmailLink();
      viewer4.disablePhotoLink();
      viewer4.add('komiksy/Kareshi/Ch1/page1.jpg');
      viewer4.add('komiksy/Kareshi/Ch1/page2.jpg');
      viewer4.add('komiksy/Kareshi/Ch1/page3.jpg');
      viewer4.add('komiksy/Kareshi/Ch1/page4.jpg');
      //--></script>
    <img src="komiksy/Kareshi/kareshi.jpg" width="80" height="80" style="float:left; MARGIN-RIGHT: 4PX;" alt="Kareshi">
    <ol>
      <li><a href="#">Kareshi ni donhiki saretai Minato-san</a>
        <ul>
      <li><a href="javascript:void(viewer4.show(0))">Rozdział 1</a></li>
          </ul>
    </ol>
  

  </div>

</div>

<div id="footer">

  <p>Autor: Weronika Wolszczak, 3ID12A. Strona objęta prawami autorskimi, proszę nie udostępniać treści bez zgody autora.</p>

</div>



</body>
</html></title>
</head>
<body>

</body>
</html>