<?php
$p_pojemnosc=$_FILES['plik']['size'];//pojemnosc pliku
$p_typ=$_FILES['plik']['type']; // typ pliku
$p_nazwa=$_POST['nowa_nazwa']; //nazwa pliku
$p_podfolder=$_POST['tytul_mangi']; //nazwa podktalogu
$p_photo=$_FILES['plik']['tmp_name']; // chwilowa nazwa pliku

if (!file_exists($p_podfolder)) {
   mkdir ("komiksy/$p_podfolder", 0777);
}



$max_size=round(($_POST['max_file_size']/1048576),3)."MB";



$poj_MB=round(($p_pojemnosc/1048576),2).'MB'; 


$p_nazwa_zm=($p_nazwa).".jpg";
$folder="komiksy/".$p_podfolder."/";


//---Kolorki HTML---
$k_cze="<font color=#ff0000>";
$f_koniec="</font>";
$k_nieb="<font color=#0000ff>";

if ($p_pojemnosc <= 0)
  {
    echo ("Plik jest pusty nie mogę go przesłać <b>".$k_cze.$p_nazwa." ".$poj_MB.$f_koniec."</b><br />");
    echo "<a href=index.php>Wracaj ...</a>";
    exit;
  }

if ($poj_MB > $max_size)
  {
    echo("Plik jest za duży maksymalnie można wysłać <b>".$k_cze.$max_size.$f_koniec."</b>"." .Plik wysyłany ma rozmiar <b><i>".$k_nieb.$poj_MB.$f_koniec."</b></i><br />");
    echo "<a href=index.php>Wracaj ...";
    exit;
  }

if (file_exists($folder.$p_nazwa_zm))
  {
    echo ("Plik o takiej nazwie jest już na serwerku <b><i>".$p_nazwa_zm."</b></i><br />");
    echo "<a href=index.php>Wracaj ...";
    exit;
  }
  else 
	{
        if(!@move_uploaded_file($p_photo, $folder.$p_nazwa_zm))
          exit('Nie mozna zachowac pliku. Prawdopodobnie nie ma folderu lub nie można w nim zapisać');

        echo "Przeslanie udało się - <b>".$k_nieb.$p_nazwa."</b>"." ".$poj_MB."<br />";
        $path_file=$folder.$p_nazwa_zm;
        
        echo "<a href=index.php>Wracaj ...";
} 
?>