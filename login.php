<!DOCTYPE HTML>
<html lang="pl">

    <head>
        <meta charset="utf-8">

        <title>Logowanie</title>
    </head>
    
    <body>

        <?php
        
        if($_POST["submit"]=="loguj")
		        {
            $haslo = $_POST['haslo'];
				if($haslo=='kaczka'){
             include('paneladmina.php');
				}
				if($haslo!=='kaczka'){
				 echo "Podano błędne hasło, spróbuj ponownie.";
				 echo"<br>";
				 echo '<a href="index.php"><img src="home.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
				echo '<a href="admin.php"><img src="back.png"  width="80" height="80" style="border: 0" alt="Powrót"></a>';
				 echo"<br>";
            
				}
				
				}	 
 
        ?>
         
    </body>
</html>