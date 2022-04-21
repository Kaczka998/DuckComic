<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Dodaj wiadomosc</title>
    </head>
    
    <body>
        <?php
        
        if($_POST["submit"]=="dodaj")
		        {
            $nazwa = $_POST['nazwa_dodaj'];
            $tresc = $_POST['tresc_dodaj'];
			explode('.',$nazwa);
            $nazwa2 = 'pliki/'.$nazwa.'.txt';
            if(!file_exists($nazwa2)){    
            $fp = fopen($nazwa2, "w");
            fputs($fp, $tresc);
            fclose($fp);
			 echo "Dodano plik $nazwa <br>";
			 echo '<a href="blog.php"><img src="back.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
			 echo '<a href="index.php"><img src="home.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
            }
           
            else{
				echo "Plik $nazwa już istnieje. Spróbuj z inną nazwą. (Lista istniejących plików znajduje się w panelu administracyjnym.)<br>";
				echo '<a href="admin.php"><img src="back.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
				echo '<a href="index.php"><img src="home.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
			}
        }
        if($_POST["submit"]=="usun")
        {
            $nazwa = $_POST['nazwa_usun'];
			if(file_exists($nazwa)){
			$nazwa2 = 'pliki/'.$nazwa;
            unlink($nazwa2);
            
            echo "Usunieto plik $nazwa <br>";
			echo '<a href="blog.php"><img src="back.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
			 echo '<a href="index.php"><img src="home.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
			}
			else{
				echo "Nie znaleziono pliku o nazwie $nazwa. Sprawdź listę plików w panelu administracyjnym. <br>";
				echo '<a href="admin.php"><img src="back.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
				echo '<a href="index.php"><img src="home.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
			}
				
           
        }
			
			
        ?>
        
    </body>
</html>