var log=0;
var zmienna;

function func()
{
	if(log==0)
	{
		 zmienna ='<div class="cont"><a href="index.php"><div class="men1">Strona główna</div></a> <a href="onas.php"><div class="men1">O nas</div></a> <a href="produkty.php"><div class="men1">Oferowane produkty</div></a> <a href="kontakt.php"><div class="men1">Kontakt</div></a> </div>';
			log =1;
	}
	else
	{
		zmienna='';
		log=0;
	}
	
/*
	<div class="cont"><div class="men1">Strona główna</div> <div class="men1">O nas</div> <div class="men1">Oferowane produkty</div> <div class="men1">Kontakt</div> </div>
	*/
	
	document.getElementById("wyp").innerHTML=zmienna;
	
}

