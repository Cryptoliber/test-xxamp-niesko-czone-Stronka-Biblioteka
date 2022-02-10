<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Patryk Cieslicki</title>
	</head>
  
<body>
      
    <div id="main">
      <div id="header"> 
		<p>NAGŁÓWEK</b>
	  </div>
	  
     <div id="menu">
		<ul>
			<li><a href="STRONAGLOWNA.html">STRONA GŁÓWNA</a></li>
			<li><a href="form.html">FORMULARZ</a></li>
			<li><a href="http://www.google.pl">www.google.pl</a></li>
			<li><a href="http://www.wp.pl">www.wp.pl</a></li>
			<li><a href="http://www.onet.pl">www.onet.pl</a></li>
			<li><a href="http://www.zpsb.pl">www.zpsb.pl</a></li>
			<li><a href="http://www.dziekanat.zpsb.pl">www.dziekanat.zpsb.pl</a></li>
			<li><a href="http://www.facebook.pl">www.facebook.pl</a></li>
		</ul>
	</div>
	  
      <div id="tresc"> 
	  <?php
	  if (isset($_POST["Imie"])){
		echo $_POST["Imie"];
		echo "<br>";
	  }else{
		echo "Nie podano imienia <br>";
		
	Wynik: <br>
	Imię: <?php echo $_POST["Imie"]; ?><br>
	Nazwisko: <?php echo $_POST["Nazwisko"]; ?><br>
	Płeć: <?php echo $_POST["Plec"]; ?><br>
	Email: <?php echo $_POST["Email"]; ?><br>
	Komentarz: <?php echo $_POST["Komentarz"]; ?><br>
</form>
	  </div>
	  
      <div id="links"> 
	  <ul>
	    <li><a href="http://www.google.pl/">www.google.pl</a></li>
		<li><a href="http://www.wp.pl/">www.wp.pl</a></li>
	  </ul>
	  </div>
	  
      <div id="stopka"> 
		<center>STOPKA</center>
	  </div>
    </div>
</body>
</html>