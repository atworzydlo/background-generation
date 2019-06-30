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
    <link href="rejestracja.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.php">F<span>i</span>tBook</a></h1>
                
			</nav>
				<form class ="box" action="rejestracja.php" method="POST">
					<h1>Rejestracja</h1>
					<br><br>

					<input id="imie" type="text" name="imie" placeholder="Imię">
					<input id="nazwisko" type="text" name="nazwisko" placeholder="Nazwisko">

					<input id = "email" type = "email" name="email" placeholder = "E-mail" required />
					<?php
					if (isset($_SESSION['error_mail'])) {
						echo '<div style="font-size:15px; color:red;">'.$_SESSION['error_mail'].'</div>';
						unset($_SESSION['error_mail']);
					}
					echo'
					<input id = "tel" type = "tel" placeholder = "Numer telefonu" name="telefon"
					pattern = "\(\d{3}\)+\d{3}-\d{4}"  />

					<input id="haslo" type="password" name="pswd" placeholder="Hasło"required> ';
					
					if (isset($_SESSION['error_pswd'])) {
						echo '<div style="font-size:15px; color:red;">'.$_SESSION['error_pswd'].'</div>';
						unset($_SESSION['error_pswd']);
					}
					echo'
					<input id="powtorz" type="password" name="rppswd" placeholder="Powtórz hasło" required>';

					if (isset($_SESSION['error_rppswd'])) {
						echo '<div style="font-size:15px; color:red;">'.$_SESSION['error_rppswd'].'</div>';
						unset($_SESSION['error_rppswd']);
					}
					echo'
					<input id="login" type="text" name="nick" placeholder="Twój login" required>
					';
					
					if (isset($_SESSION['error_nick'])) {
						echo '<div style="font-size:15px; color:red;">'.$_SESSION['error_nick'].'</div>';
						unset($_SESSION['error_nick']);
					}
					?>

					 
				<p><input id = "zarejestruj" type="submit" value = "Zarejestruj się" name = "registered"/>
					<input id = "reset" type= "reset" value = "Clear" /></p>

			</form>

		</div>
          
	</div>
</header>

</body>

</html>

<?php
$all_correct = True;
if (isset($_POST['registered'])) {
	$imie=$_POST['imie'];
	$nick=$_POST['nick'];
	$nazwisko=$_POST['nazwisko'];
	$telefon=$_POST['telefon'];
	$email=$_POST['email'];
	$haslo=$_POST['pswd'];

	if ((strlen($_POST['nick'])>18) || (strlen($_POST['nick'])<3)) {
		$_SESSION['error_nick']="Nick powinien mieć od 3 do 18 znaków!";
		$all_correct = False;
		header('Location: rejestracja.php');
		die();
	}

	$connection = mysqli_connect("localhost","root","","fitbook");
	$repeatnick = $connection->query("SELECT ID FROM users WHERE nick='$nick'");
	if (!$repeatnick) throw new Exception($connection->error);
	
	$howmany=$repeatnick->num_rows;
	if($howmany>0)
	{
		$all_correct=false;
		$_SESSION['error_nick']="Nick jest już w użyciu!";
		session_destroy();
		header('Location: rejestracja.php');
		die();
	}

	if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",($_POST['email'])))
	{ 
		$_SESSION['error_mail']="Email podany w złym formacie.";
		$all_correct = False;
		header('Location: rejestracja.php');
	}

	$connection = mysqli_connect("localhost","root","","fitbook");
	$repeatmail = $connection->query("SELECT ID FROM users WHERE email='$email'");
	if (!$repeatmail) throw new Exception($connection->error);
	$howmanymails=$repeatmail->num_rows;
	if($howmanymails>0)
	{
		$all_correct=false;
		$_SESSION['error_mail']="Email jest już w użyciu!";
		header('Location: rejestracja.php');
		die();
	}
	if ((strlen($_POST['pswd'])<6)) {
		$_SESSION['error_pswd']="Hasło powinno być dłuższe niż 5 znaków!";
		$all_correct = False;
		header('Location: rejestracja.php');
		die();
	}
	if (($_POST['rppswd']) != ($_POST['pswd'])) {
		$_SESSION['error_rppswd']="Podane hasła są różne!";
		$all_correct = False;
		header('Location: rejestracja.php');
		die();
	}
	if ($all_correct == True) {
		$connection = mysqli_connect("localhost","root","","fitbook");	
		if (mysqli_query($connection,"INSERT INTO users VALUES(NULL,'$nick','$imie','$nazwisko','$telefon','$email','$haslo')"))
		{
			$_SESSION['ValidRegistration']=True;
			header('Location: przekierowanie.php');
			session_destroy();
			#echo "$repeatmail";
			#echo "$connection";
		}
		else
		{
			echo("Error description: " . mysqli_error($connection));	
			#echo "$repeatmail";
			#echo "$connection";
		}
	}
}
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
