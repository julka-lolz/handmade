<head>
	<link rel="stylesheet" href="css/index.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
	</style>
</head>
<body>
	<header>	
		<div class="col">			 
			<img class="logo" src="img/logo_handmade.jpg" width="180" height="120">		  
		</div>	
	</header>		
	<div class="row2">		
		<ul>
		  <li><a href="index.php">Strona główna</a></li>
		  <li><a href="about.php">O nas</a></li>
		  <li><a href="gallery.php">Galeria</a></li>
		  <li><a href="contact.php">Kontakt</a></li>			  
		</ul>			
	</div>		
	<section class="gallery">
		<h1>Galeria</h1><br>

		<div class="w3-content w3-display-container">

		<div class="w3-display-container mySlides">
		  <img src="img/1.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/2.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/3.jpg" style="width:50%">		  
		</div>
		
		<div class="w3-display-container mySlides">
		  <img src="img/4.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/5.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/6.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/7.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/8.jpg" style="width:50%">		  
		</div>
		
		<div class="w3-display-container mySlides">
		  <img src="img/9.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/10.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/11.jpg" style="width:50%">		  
		</div>
		
		<div class="w3-display-container mySlides">
		  <img src="img/12.jpg" style="width:50%">		  
		</div>

		<div class="w3-display-container mySlides">
		  <img src="img/13.jpg" style="width:50%">		  
		</div>

		<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
		<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

		</div>

		<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
		</script>		
	</section>
	<section class="price">
		<h1>Zapraszam do zapoznania się z cenami 😊</h1><br>
		<article>
			<h4><b>Cennik: </b></h4><br>
			<p>Zawieszka do smoczka + imię 25zł</p><br>
			<p>Zawieszka do smoczka 20zł</p><br>
			<p>Zawieszka do kluczy jedno imię 18zł</p><br>
			<p>* Każde kolejne imię 15zł *</p><br>
			
		</article>	
	</section>
	<footer>
		Handmade-Natalia Guzla 2021 - Made by Julia Makara
	</footer>
</body>