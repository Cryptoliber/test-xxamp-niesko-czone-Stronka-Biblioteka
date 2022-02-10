<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Biblioteka Publiczna KIKIN</title>
	
	
	</head>
  
<body>
      
    <div id="main">
      <div id="header"> 
		<p><img src="banner.png"></br>
	  </div>
	  
    <div id="menu">
		<ul>
			<li><a href="index.html">STRONA GŁÓWNA</a></li>
			<li><a href="REJESTRACJA.html">REJESTRACJA</a></li>
				<li><a href="LOGOWANIE.php">LOGOWANIE</a></li>
			<li><a href="BAZA.html">BAZA KSIĄŻEK</a></li>
			<li><a href="obibliotece.html">O bibliotece</a></li>
			<li><a href="kontakt.html">Kontakt</a></li>
		</ul>
	</div>
	  
      <div id="tresc"> 
LOGOWANIE </br>
 
<div id="panel">



<?php
@$username=$_POST['login'];
@$password=$_POST['haslo'];
?>


<form action="LOGOWANIE.php" method="POST">

<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="login" value="<?php echo $username; ?>">

<label for="password" >Hasło:</label>
<input type="password" id="password" name="haslo" value="<?php echo $password; ?>"></br>



<p><a href="#">         Zapomniałeś hasła?</a>


<?php

if(isset($_POST['submit']))
{
    if($username=="" || $password=="")
    {
        echo "Wypełnij wszystkie pola";
    }
    else
    {
        echo "Poprawnie wypełniono formularz logowania";
    }
}

?>



</p>

</br>
<center><img src="rekla.png" width="230" height="230"><font color="grey"></br></br>Zapraszamy na nasz portal społecznościowy.</br>
Będziesz miał tam możliwość dzielenia się z</br> innymi swoimi wrażeniami na temat przeczytanych</br>
 u nas książek. <a href="www.czytajwkaliszu.pl">  >>Więcej</a></font></center>




<div id="lower">

<input name="submit" type="submit" value="Login">
<input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
</div>
</form>
</div>
	  </div>
	  
      <div id="links"> 
	  <ul>
	    <li><a href="http://www.google.pl/">www.google.pl</a></li>
		<li><a href="http://www.wp.pl/">www.wp.pl</a></li>
	  </ul>
	  </div>
	  </div>
      <div id="stopka"> 
		<center>STOPKA</center>
	  </div>
    </div>
</body>
</html>