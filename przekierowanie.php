<?php
 	#include 'css_cookie.php';
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>FitBook</title>
    <meta charset="UTF-8">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    
    <!-- My own stylesheet -->
    <link href="login.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php">F<span>i</span>tBook</a></h1>
                
            </nav>

          <div class="logowanie">
          <?php
          if(!isset($_SESSION['user'])) {
                echo'
                <form class ="box" action="login.php" method="POST">
                <p class="box">
                        <h2>Rejestracja przebiegła pomyślnie! Za chwilę nastapi przekierowanie do strony logowania.</h2>
                </p>';
                header("refresh:4;url=login.php");
              }
          ?>
          </div>
          
        </div>
    </header>
    

  </body>

</html>
