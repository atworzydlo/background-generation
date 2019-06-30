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
                        <h1>Logowanie</h1>
                        <input type="text" name="login" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">';
                        if(isset($_SESSION['loginerror'])) {
                          echo'Nieprawidłowa nazwa użytkownika lub hasło!';
                          session_destroy();
                      }
                        echo'
                        <input type="submit" name="signed" value="Zaloguj się">
                        
                </form>';
              }
              else  {
                echo'
                <form class ="box" action="login.php" method="POST">
                <p class="box">
                        <h1>Jesteś zalogowany!</h1>
                </p>';
                header("refresh:3;url=strona_glowna.php");
              }
          if(isset($_POST['signed'])) 
          {
            $user = $_POST['login'];
            $password = $_POST['password'];
            $connection = mysqli_connect("localhost","root","","fitbook");
            $sql = "SELECT * FROM users WHERE nick='$user' AND haslo='$password'";	
            if($rezultat = @$connection->query($sql))
            {
              $users = $rezultat->num_rows;
              if($users>0)
              {
                $row = $rezultat->fetch_assoc();
                $_SESSION['user'] = $row['nick'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $_SESSION['tel'] = $row['tel'];
                $_SESSION['email'] = $row['email'];
                header("Location: strona_glowna.php");
              }
              else 
              {
                $_SESSION['loginerror'] = True;
                header("Location: login.php");
              }
            }
            else {
              echo'xDDDDD';
            }
          }
          ?>
          </div>
          
        </div>
    </header>
    

  </body>

</html>
