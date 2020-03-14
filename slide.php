<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap2.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" /> <!-- Style-CSS -->
        <title>Slides</title>
    </head>
    <body>
        <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1" class="myslides">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<input type="radio" name="slides" id="slides_2"/>
		<input type="radio" name="slides" id="slides_3"/>
		<input type="radio" name="slides" id="slides_4"/>

		<ul class="banner_slide_bg">
			<li>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are professional <span class="ml-2"><span></h5>
								<h1 class="movetxt agile-title text-capitalize">Dream. Design.</h1>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Develop</h4>
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn mt-4 text-capitalize" href="search.php"> Search </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="portfolio.php" > Create your Portfolio </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">Find or be found <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">Combine. Collaborate. </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize"> Communicate</h4>	
								<p>If you have got the talent,
									 we have got the technology.</p>					
								<a class="btn mt-4 text-capitalize" href="search.php"> Search </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="portfolio.php" > Create your Portfolio </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are creative <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">High Quality </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Creative thinking </h4>	
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn mt-4 text-capitalize" href="search.php"> Search </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="portfolio.php" > Create your Portfolio </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg4">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are awesome <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">Tons of Projects </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">With Consultancy </h4>	
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn mt-4 text-capitalize" href="search.php"> Search </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="portfolio.php" > Create a Portfolio </a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="navigation"> 
			<div>
			  <label for="slides_1"></label>
			  <label for="slides_2"></label>
			  <label for="slides_3"></label>
			  <label for="slides_4"></label>
			</div>
		</div>
	</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("myslides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    </body>
</html>