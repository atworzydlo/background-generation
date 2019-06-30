<?php
 	#include 'css_cookie.php';
  session_start();
  if (isset($_SESSION['user'])) {
    header("Location: strona_glowna.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>FitBook</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    
    <!-- My own stylesheet -->
    <link href="style1.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php">F<span>i</span>tBook</a></h1>
                
            </nav>
        
          <div class="startup">
              <div class="row_1">
                  <h1 class="text-uppercase faded">
                    <p>Dołącz do nas!</p>
                  </h1>
                  <hr>
              </div>

              <div class="row_2">
                  <p> <button class="btn btn-primary "><a href="login.php">Zaloguj się</a></button>
                      <button class="btn btn-primary "><a href = "rejestracja.php">Zarejestruj się</a></button></p>
              </div>
              
          </div>
        </div>
    </header>

  </body>

</html>
