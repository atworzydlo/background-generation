
<?php
    #include 'css_cookie.php';
    if (!isset($_COOKIE['firsttime']))
    {
    setcookie("firsttime", "no", /* EXPIRE */);
    $first == True;
    exit();
    }
    session_start();
    if(!isset($_SESSION['user'])) {
       header("location: index.php");
    }
    $imie=$_SESSION['user'];
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FitBook</title>
        <link rel = "stylesheet" type="text/css" href="style_home.css"> 
        
    </head>
    <body>
       <header>
           <div class="container">
               <nav>
                   <h1 class="brand"><a href="index.php">F<span>i</span>tBook</a></h1>
                   <ul>
                       <li><a href="strona_glowna.php">Home</a></li>
                       <li><a href="trening.html">Twój plan treningowy</a></li>
                       <li><a href="postepy.html">Postępy</a></li>
                       <li><a href="czytaj.html">Czytaj</a></li>
                       <li><a href="logout.php">Wyloguj się</a></li>
                   </ul>
               </nav>
               <div class="startup">
              <div class="row_1">
                  <h1 class="text-uppercase faded">
                    <p><?php if(!isset($first)) {
                        echo"Cześć $imie!";
                        }
                        else {
                            echo'Dzięki, że jesteś z nami! Aby móc w pełni korzystać z naszej strony musisz wypełnić 
                            formularz, na podstawie którego stworzymy dla Ciebie zestaw ćwiczeń. 
                            <br>
                              <button class="btn btn-primary "><a href = "stworz.php">Stwórz plan treningowy</a></button>';
                        }?>
                        </p> 
                  </h1>
                  <hr>
              </div>
              <div class="row_2">
               <p>Wykonaj swój plan trenigowy na dziś
                      <button class="btn btn-primary "><a href = "trening.html">Go!</a></button></p>
                 <!--
                 wersja alternatywna gdy użytkownik jest pierwszy raz  
                <p>Dzięki, że jesteś z nami! Aby móc w pełni korzystać z naszej strony musisz wypełnić 
                    formularz, na podstawie którego stworzymy dla Ciebie zestaw ćwiczeń. 
                    <br>
                      <button class="btn btn-primary "><a href = "stworz.html">Stwórz plan treningowy</a></button></p>
                
                wersja gdy użytkownik ma już wszystkie ćwiczenia wykonane
                 <p>Dobra robota! Wszystkie ćwiczenia na dzisiaj za Tobą.</p>    -->
                    
              </div>    
          </div>
           </div>
       </header>
    </body>
</html>
