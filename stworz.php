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
    <link href="stworz.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php">F<span>i</span>tBook</a></h1>
                
			</nav>
				<form class ="box" action="#" method="POST">
					<h1>Stwórz swój własny plan treningowy</h1>
					<br><br>
					<p>
					<h2>Ile ważysz?</h2>
					<input id="weight" type="number" name="weight" placeholder="weight">
					
					<h2>Ile masz wzrostu?</h2>
					<input id="growth" type="number" name="growth" placeholder="growth">
					</p>

					<p>
					<h2>Ile czasu chcesz ćwiczyć dziennie?</h2>
					<br>
						<label><h2><input name = "czas" type = "radio" value = "10" checked >10 minut</h2></label><br>
						<label><h2><input name = "czas" type = "radio" value = "15" checked >15 minut</h2></label><br>
						<label><h2><input name = "czas" type = "radio" value = "25" checked >25 minut</h2></label>
					</p>
					<br><br>
					<p>
					<h2>Na jakich partiach ciała chcesz się skupić?</h2>
					<br>
						<label><h2><input name = "partie" type = "checkbox" value="Brzuch">Brzuch</h2><br>
						<label><h2><input name = "partie" type = "checkbox" value = "Posladki">Pośladki</h2></label><br>
						<label><h2><input name = "partie" type = "checkbox" value = "Ogolnie">Cała sylwetka</h2></label>
					</p>
					
					<p><input id = "stworz" type="submit" value = "Stwórz plan" name = "registered"/>
					<input id = "wyczysc" type= "reset" value = "Wyczyść" /></p>

			</form>

		</div>
          
	</div>
</header>

</body>

</html>

