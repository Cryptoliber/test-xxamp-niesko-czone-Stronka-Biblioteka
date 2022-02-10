<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
  <meta http-equiv="Content-Language" content="pl" />
  <meta name="Keywords" content="biblioteka, publiczna, kalisz, ksiazki" />
  <meta name="Description" content="KIKIN.pub.pl" />
  <meta name="Robots" content="ALL" />
  <meta name="Author" content="Julia Borkowska />
  <link rel="Shortcut icon" href="favicon.png" />
  
  
  <title>KIKIN.pub.pl</title>
  
  <style type="text/css">

#panel {
width: 400px; 
margin: 0 auto; 
padding: 15px 0 0;
background: #fff;
border: 1px solid silver;
font: 16px calibri;
letter-spacing: -1px;
-webkit-box-shadow: 0 0 2px silver; 
-moz-box-shadow: 0 0 2px silver; 
box-shadow: 0 0 2px silver;
}
form {
margin: 0;
}

label {
display: block;
width: 260px;
padding: 10px 20px;
color: #696969;
font-size: 16px;
text-shadow: 0 0 1px silver;
}

#username, #password {
display: block;
width: 360px; 
margin: 0 auto;
padding: 10px 5px;
border: 1px solid silver;
outline: 5px solid #ebebeb;
font-size: 22px;
}
#username:focus, #password:focus {
outline: 5px solid #e5f2f8;
}

#lower {
background: #ecf2f5;
width: 360px;
padding: 5px 20px;
margin-top: 20px;
}

.check {
display: inline;
float: none;
font-size: 11px;
padding: 5px;
}
input[type="submit"] {
width: 70px;
padding: 5px 13px;
border: 1px solid #005f85;
color: white;
text-shadow: 0 0 1px black;
background: #98c9dc;
position: relative;
left: 180px;
}

#panel, input[type="submit"] {
    -webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    border-radius: 5px; 
}

  body {
        background: url(tlo.jpg);
        margin-top:0px;
        margin-left:auto;
        margin-right:auto;
        margin-bottom:0px;
        width:1300px;
    }

div {
        font: verdana 19px #FFF;
        position:relative;
    }
a {
        text-decoration: none;
    }
#kontener {
width:1300px;
height:3100;
border-left:solid #FFFFFF 2px;
border-right:solid #FFFFFF 2px;
background:#202020;
}
#naglowek {
        background: url(logo.jpg) no-repeat;
        color: #FFFFFF;
        width:1300px;
        height:320px;
        
    }
#menu  {
     
        width:1300px;
        height:120px;
        margin-top:100px;
        margin-left: 45px;
    }

    }
#menu a:hover {
        margin-top:8px;
        color:#f7f7f7;
    }
#tytul {
        background: #fff url(images/tytul.jpg) no-repeat;
        width:1101px;
        height:50px;
        margin-left:auto;
        margin-right:auto;
        margin-top:70px;
        text-align:center;
    }
#tytul h3 {
        padding-top:15px;
}
#tresc {
        
        width:1000px;
        height:2000;
        margin-left:auto;
        margin-right:auto;
        margin-top:40px;
    }

}
#tresc h2 {
        text-indent:7px;
        padding-top:15px;
        font-size: 17px;
        line-height: 150%;
        padding-left:15px;
        margin-top:0px;
    }
#tresc p {
        margin: 0 0 8px 0;
        text-indent: 15px;
        text-align: justify;
        margin-left:15px;
        margin-right:15px;
        padding-bottom:4px;
        font-size:12px;
        font-family:Verdana, Arial, Helvetica, sans-serif;
    }

}


</style>
</head>

<body>
<div id="kontener">
<div id="naglowek"><center><img src="banner.png"></center></div>
<div id="menu">
 <a href="home.html"><img src="home.png"></a>
 <a href="offer.html"><img src="offer.png"></a>
 <a href="contact.html"><img src="contact.png"></a>
 <a href="news.html"><img src="news.png"></a> 
</div>
    
<div id="tytul">
      <h3>Biblioteka Publiczna KIKIN w Kaliszu </h3>

      <div id="tresc">





<div id="panel">



<?php
$username=$_POST['login'];
$password=$_POST['haslo'];
?>


<form action="index.php" method="POST">

<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="login" value="<?php echo $username; ?>">

<label for="password" >Hasło:</label>
<input type="password" id="password" name="haslo" value="<?php echo $password; ?>"></br>



<p><a href="#">Zapomniałeś hasła?</a>


<?php

if(isset($_POST['submit']))
{
    if($username=="" || $password="")
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

<div id="h2"><p></br>
<img src="rekla.png" width="230" height="230"><font color="grey"></br></br>Zapraszamy na nasz portal społecznościowy.</br>
Będziesz miał tam możliwość dzielenia się z</br> innymi swoimi wrażeniami na temat przeczytanych</br>
 u nas książek. <a href="www.czytajwkaliszu.pl">>>Więcej</a></font></div>



</p>
<div id="lower">

<input name="submit" type="submit" value="Login">
<input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
</div>
</form>
</div>

</p>


</div></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br>
<div id="stopka">

</br>
<i><font color="white">Mefiante | All rights reserved</font></i></div>  


</body></html>






























<!--<html>
<head><title></title>

<style type="text/css">





</style>

</head>

<body>
<header>Banner</header>

<div>Div</div>





</body>
</html>--!>
