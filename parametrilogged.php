<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="energyefficiency.css">
		<link href='https://fonts.googleapis.com/css?family=Euphoria Script' type="text/css" rel='stylesheet'>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top" >
		 <div class="navbar-header">
		  <a class="navbar-brand" href="#" style="font-family:'Euphoria Script'; color:green; font-size:40px;"><b>Početna stranica</b></a>
		</div>
			  <div class="container">
				  <button class="navbar-toggle" data-toggle="collapse" data-target=".my">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>

				<div class="collapse navbar-collapse my" >
				   <ul class="nav navbar-nav navbar-center"> 
					<li><a href="welcomepagelogged.html" >O energetskoj učinkovitosti</a></li>
					<li class="active"><a href="#" href="parametrilogged.php">Parametri procjenjivanja</a></li>
					<li><a href="check-efficiency.php">Ispitaj učinkovitost</a></li>
					<li><a href="get-all.php">Popis svih ispitivanja</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php" >Sign out</a></li>
				</ul>
				</div>
			  </div>
			</nav>
			
			<article class="article-moved">
				<h2 class="small_title">Procjena energetskih parametara zgrade</h2>
				<p><b>	Procjenjivanje energetske učinkovitosti očituje se kroz dva energetska parametra zgrade - opterećenje zagrijavanja i opterećenje hlađenja.
						Opterećenje zagrijavanja predstavlja količinu topline koju je potrebno dovesti u prostor kako bi se temperatura održala na konstantoj razini, 
						dok opterećenje hlađenja predstavlja upravo suprotno, količinu topline koju je potrebno odvesti iz prostora kako bi se temperatura i vlaga u zraku održale na 
						željenoj razini. <br>
						Za korištenje dane web usluge potrebna je jednostavna registracija korisnika kako bi svaki od njih imao pristup svojima podacima. Nakon registracije 
						od korisnika se zahtijeva unos osam atributa pomoću kojih usluga procjenjuje odabrani parametar i vraća rezultat procjene. Atributi koji se
						traže od korisnika su: 
				
						<ul class="centeredText">
							<li>relativna kompaktnost</li>
							<li>površina zgrade</li>
							<li>površina zidova</li>
							<li>površina krova</li>
							<li>visina cjelokupne zgrade</li>
							<li>orijentacija</li>
							<li>površina prozora</li>
							<li>raspodjela površina</li>
						</ul>
						
						<b></p>
									<br><br>	
											
			</article>
	</body>
</html>
