<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>TO I OWO Malbork</title>
	
	<meta name="description" content="Sklep TO I OWO w Malbrku działa juz od 1997 roku. Znajdą w nim Panśtwo artykuły dziecięce takie jak pieluchy, łóżeczka, wózki, zabawki, pościele i wiele wiele innych." />
	<meta name="keywords" content="sklep, to i owo, to , i , owo , malbork, dzieciecy , dziecięcy, artykuły dziecięce, dzieci, pomorze, kontakt, gdzie , jak dojechać, zabawki , wózki, wozki , łóżeczka, lozeczka , posciele , samochody " />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="zdj/wozek.jpg">
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="css/style1.css" media="(max-width: 769px)" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<script src="js/js.js" media="(max-width: 769px)"></script>
	
	
	<script src="js/jquery-3.2.1.min.js"></script>

	

	
<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
		
		<script type="text/javascript">
		
			var numer = 0;
			
			var timer1 = 0;
			var timer2 = 0;
			
			function ustawslajd(nrslajdu)
			{
				clearTimeout(timer1);
				clearTimeout(timer2);
				numer = nrslajdu - 1;
				
				schowaj();
				setTimeout("zmienslajd()", 500);
				
			}
			
			function schowaj()
			{
				$("#slider").fadeOut(500);
			}
		
			function zmienslajd()
			{
				numer++; if (numer>2) numer=1;
				
				var plik = "<img src=\"slajdy/slajd" + numer + ".png\" />";
				
				document.getElementById("slider").innerHTML = plik;
				$("#slider").fadeIn(500);
				
				timer1 = setTimeout("zmienslajd()", 5000);
				timer2 = setTimeout("schowaj()", 4500);
			
			}
			
		</script>
	
	
	
	
</head>

<body>




	 <a href="https://www.facebook.com/toiowomalbork/" target="blank" ><div id="fb"><i class="icon-facebook"></i></div></a> 
		
		

		<div id="logo">
		
			<img src="zdj/wozek1.png">
		
		</div>
		<div class="block"></div>
		<div id="kontakt">
		
			<div id="l">
				
				<div id="tel">
						<strong><i class="icon-phone"></i>504 248 210</strong>
				</div>
				<div id="miejsce">
						<span style="color:#375da6; "><i class="icon-location"></i> </span>Malbork<br/> ul. Kościuszki 43
				</div>
			</div>	
			<div id="godz">
			<div style="color: #375da6;"><strong> <i class="icon-clock"></i>Godziny otwarcia:</strong></div><br/>
				<div style="text-align: right; margin:0;">	pn - pt: 10:00 - 18:00 <br/>
					sob : 10:00 - 14:00 <br/></div>
			</div>
		
			<div style="clear: both;"></div>
		
		</div>

		<div style="clear: both;"></div>


	<div class="nav">
	
		<div id="menu1" onclick="func()" >  <i class="icon-menu"></i> </div>
		
		<div id="menu">
		
			<a href="index.php"><div class="men">Strona główna</div></a>
			<a href="onas.php"><div class="men">O nas</div></a>
			<a href="produkty.php"><div class="men">Oferowane produkty</div></a>
			<a href="kontakt.php"><div class="men">Kontakt</div></a>
		
		</div>
		
	<div id="wyp" >
	
	</div>
	
	</div>
	
	
	
	
	<div id="nagl">
			<div id="inside">
					Oferowane produkty
			</div>
			
				<div id="kreska">
				
			</div>
			
	</div>
	

		<div id="top">
			
			
			</div>
	
		<div id="content">

			
			<h1>Strona w trakcie tworzenia</h1>
			
		
		
		</div>
	
	
	








<div id="info">
	<div id="c">
	
	
		<div id="left">
		
			<span style="color:  #008bd2;"><strong>Menu</strong></span> <br/> <br/>
			
			
			<a href="index.php"><div class="men2">Strona główna</div></a><br/>
			<a href="onas.php"><div class="men2">O nas</div></a><br/>
			<a href="produkty.php"><div class="men2">Oferowane produkty</div></a><br/>
			<a href="kontakt.php#map1"><div class="men2">Jak dojechać</div></a><br/>
			<a href="kontakt.php"><div class="men2">Kontakt</div></a><br/>
				 

			
			
		
		</div>
		
		<div id="center">
		
			<span style="color:  #008bd2;"><strong>Kontakt</strong></span><br/> <br/>
			
			<div style="float: left; padding: 0; margin: 0;">
			
					 <i class="icon-phone"></i><br/>
					 <br/>
					 <br/>
					 <i class="icon-mail-1"></i> <br/><br/>
					 <i class="icon-location"></i><br/><br/>
					
			 </div>
			 
			 <div style="float: left;">
			 
					 504 248 210 <br/>
					509 994 290<br/><br/>
					sklepdzieciecytoiowo@gmail.com<br/><br/>
					 Malbork<br/> ul. Kościuszki 43 <br/>(za starym hotelem Zbyszko)<br/><br/>
					 
					 
					 
					 
			</div>
			<div style="clear: both;"></div>
		
		
		</div>
		
		<div class="block"></div>
		
		<div id="right">
		
			<div id="pin">
					Masz jakieś pytania?<br/> Interesuje cię, któryś z oferowanych przez nas produktów ?<br/> Skorzystaj z formularza kontaktowego lub napisz do nas na Facebook'u !  
			</div>
			
			 <a href="kontakt.php#top" ><div id="pink">Skorzystaj z naszego formularza kontaktowego! <br/><br/> <i class="icon-ok"></i> </div></a>
			
			 <a href="https://www.facebook.com/toiowomalbork/" target="blank" ><div class="fbb" >  <i class="icon-facebook"></i>Napisz do nas na Facebook'u. Tam odpisujemy najszybciej !</div></a>
			
			
		
		
		</div>
	<div style="clear: both;"></div>
	</div>

</div>


<div id="footer">Wykonał <strong>Łukasz Woś</strong>. &copy; Wszelkie prawa zastrzeżone.</div>
	
	
</body>
</html>