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
  <h1> Dodaj mangę </h1><br><br>
  
  <form action="dodaj.php" method="post" enctype="multipart/form-data"  name="form1">

<table width="240" border="1" align="center" bordercolor="#0000FF" bgcolor="#C0C0C0">
  <tr>
    <th width="244" scope="row"><p>Wybierz zdjęcie do przesłania (plik *.jpg)</p><input name="plik" type="file" size="50" />
      <input name="max_file_size" type="hidden" value="1048576" />
  </tr>
    <tr>
    <th scope="row"><p>Podaj tytul mangi</p><input type="text" name="tytul_mangi" /> </th>
  </tr>
  <tr>
    <th scope="row"><p>Wpisz numer strony (np "page1")</p><input type="text" name="nowa_nazwa" /> </th>
  </tr>
  <tr>
    <th scope="row"><input value="Wyślij plik" type="submit" /> </th>
  </tr>
  </table>
</form><br>
</div>



<div id="main">
<br>
<a href="index.php"><img src="home.png"  width="40" height="40" style="border: 0" alt="Strona główna."></a> 
 <a href="admin.php"><img src="user.png"  width="40" height="40" style="border: 0" alt="Administrator."></a>
 <a href="info.php"><img src="info.png"  width="40" height="40" style="border: 0" alt="O stronie."></a>
  <form action="obsluganewsow.php" method="post">
            <br><h1>Wpisy do Bloga.</h1><br><br>
            <h3> Podaj nazwę pliku do dodania oraz jego treść</h3>
            <p>Nazwa: (przykład: plik.txt)</p>
                <input type="text" name="nazwa_dodaj"/><br><br>
            <p>Treść:</p>
              <textarea cols="30" rows="4" input type="text" name="tresc_dodaj"/>

</textarea>
            <input type="submit" value="dodaj" name="submit"/><br><br>
			 <br><h3> Lista plików: </h3><br>
			<div style="width:100%;height:8em;overflow:auto;background-color: white">
 <?php
		
function scan_dir($dir) {
      $ignored = array('.', '..', '.svn', '.htaccess');
      $files = array();
      foreach (scandir($dir) as $file) {
          if (in_array($file, $ignored))  {
              continue;
          }
          $filemtime = filemtime($dir . '/' . $file);
          $files[$file] = $filemtime;
      }

      arsort($files);
      $files = array_keys($files);

      return ($files) ? $files : false;
  }

  $src_folder = 'pliki';

  $files = scan_dir($src_folder);

  foreach($files as $file) {
      echo $file . ' - ' . date ("F d Y H:i:s.", filemtime($src_folder.'/'.$file)) . '<br>';
	  
  }
 ?>
 </div><br>
			
       <h3> Podaj nazwę pliku do usunięcia</h3>
    <p>Nazwa: (przykład: plik.txt)</p>
            <input type="text" name="nazwa_usun"/>
            <input type="submit" value="usun" name="submit"/>
			<br><br><br>
        </form>
		
		  



</div>

<div id="footer">

  <p>Autor: Weronika Wolszczak, 3ID12A. Strona objęta prawami autorskimi, proszę nie udostępniać treści bez zgody autora.</p>

</div>



</body>
</html></title>
</head>

</html>