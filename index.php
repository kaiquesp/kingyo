<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Kingyo Temakeria</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="A culinária japonesa da Kingyo Temakeria, tão apreciada atualmente, traz a tradição oriental aliada à criatividade e ousadia da culinária contemporânea." />

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="css/easy-responsive-tabs.css"><!-- easy responsive tabs css -->

<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all"><!-- date-picker css-->

<!-- gallery -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->

<!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
<!-- banner text effect css files -->

<!-- logo text effect css files -->
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
<!-- //logo text effect css files -->
	
<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- PRELOADER -->
<script type="text/javascript">
	// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(500).fadeOut("slow");
})
</script>

</head>

<!-- Body -->
<body>
	  <div id="preloader">
	<div id="status"></div>
</div>
<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container-fluid">
					<div class="header-left">
						<div class="w3layouts-logo grid__item logo">
							<h1>
								<a href="<?php echo $_SERVER ['REQUEST_URI']; ?>" class=""><img src="images/logo-kinkyo.png" class="img-responsive center-block logo" alt="KingYo Temakeria" title="KingYo Temakeria" width="150px"></a>
							</h1>
						</div>
					</div>
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="<?php echo $_SERVER['REQUEST_URI']; ?>">Inicio</a></li>
									<li><a href="#about" class="scroll">Sobre</a></li>
									<li><a href="#cardapio" class="scroll">Cardápio</a></li>
									<li><a href="#chefs" class="scroll">Chefs</a></li>
									<li><a href="#galeria" class="scroll">Galeria</a></li>	
									<li><a href="#customer" class="scroll">Customers</a></li>
									<li><a href="#contact" class="scroll">Contact</a></li>
								</ul>
						
					<div class="clearfix"> </div>						
							</div>	
						</nav>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
						
				</div>		
					</div>
					
			</div>
			<div class="agileits-banner-info">
				<h3>Kingyo Temakeria</h3>
					<h2 class="rw-sentence">
					<span class="hidden-xs">Food tastes better, eat with your </span>
					<div class="rw-words rw-words-1 hidden-xs">
						<span>Family</span>
						<span>Friends</span>
						<span>happiness</span>
						<span>Love</span>
						<span>Gratefulness</span>
						<span>happiness</span>
					</div>
					</h2>
					<a href="#" data-toggle="modal" data-target="#myModal2">Avaliação</a>
			</div>
		</div>
	</div>
<!-- //banner -->
	
	
<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Book A Table Now</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Reservation Name" required=""/>
						<input type="tel" name="number" placeholder="Mobile Number" required=""/>
						<input type="email" name="Email" class="email" placeholder="Email" required=""/>
						<div class="select-block1">
							<select required="">
								<option value="">Number Of Guests</option>
								<option value="">1 Guest</option>
								<option value="">2 Guests</option>
								<option value="">3 Guests</option>
								<option value="">4 Guests</option>
								<option value="">5 Guests</option>
								<option value="">More Than 5</option>
							</select>
						</div>
						<input class="date" type="text" id="datepicker2"  name="datepicker2" placeholder="Date Of Arrival" title="Please enter your Arrival Date " required=""/>
						<textarea name="Message" placeholder="Additional Information (Optional)" ></textarea>
						<input type="submit" value="Book table">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign up form -->

<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Fresh Food</h4>
						<h5>1 april 2017</h5>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/s1.jpg" alt="" />
						<p>Morbi eget mollis erat, sit amet feugiat nulla. In hac habitasse platea dictumst. Sed ac fermentum eros. Pellentesque tincidunt nisi sit amet dui lobortis, pulvinar pellentesque dui tempor. Sed iaculis, nisl a eleifend porttitor, diam mauris gravida arcu, suscipit ullamcorper nulla diam vitae lorem..</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //modal -->

<!-- About -->
<div class="about" id="about">
		<div class="container">
			<div class="ser-top wthree-3 wow fadeInDown w3-service-head">
				<h3>Sobre Nós </h3>
			</div>
			<div class="w3-service-grids set-6">
				<div class="col-md-4  services-w3-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-cutlery hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Breakfast</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin  vestibulum velit.Lorem ipsum ultricies vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="col-md-4  services-w3-grid1 ser-left icon2 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-spoon hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Lunch</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="col-md-4 services-w3-grid1 ser-left icon3 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Dinner</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum Lorem ipsum velit vestibulum velit adipisc elit Proin.</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-3 services-w3-grid2 ser-left icon4 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-apple hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Supper food </h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum Loremipsum velit.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon5 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Pasta ravioli</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitLorem ipsum.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-leaf hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Salads & Desserts</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitdolor sit.</p>
				</div>
				<div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-gift hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>daily presents</h4>
					<p>Lorem ipsum dolor sit amet adipisc elit. Proin ultricies vestibulum velitdolor sit.</p>
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>
</div>
<!-- /About -->
	
<!-- cardapio -->
<div class="cardapio" id="cardapio">
		<div class="container">
			<div class="bhoechie-tab-content">
				<h3 class="title_cardapio">Cardápio</h3>
				<div class="services-grids">
					<div class="col-md-6 menugrid">
							<img src="images/b1.jpg" alt="" />
					</div>
					<div class="col-md-6 menugrid1 innergrid">
							<h3>Entrada</h3>
							<ul class="list ins1">
								<li>01 - Shimeji <p>Pequenos Cogumelos na Manteiga</p></li>
								<li>02 - Hot Holl <p>Salmão, Cebolina, Cream Cheese e Tare (8 Unidades)</p></li>
								<li>03 - Hot Spice <p>Salmão Fray, Kani e Cream Cheese (4 Unidades)</p></li>
								<li>04 - Hot Holl Doce <p>Banana com Doce de Leite</p></li>
							</ul>
					</div>
					<div class="clearfix"></div>
						<div class="col-md-6 innergrid">
							<h3>Sahimi (Fatias de Peixe Cru)</h3>
							<ul class="list ins1">
								<li>05 - Salmão (6 Unidades)</li>
								<li>06 - Carpaccio (10 Unidades) <p>Limão Siciliano, Flor de Sal e Azeite</p></li>
								<li>07 - Carpaccio Pi (10 Unidades) <p>Alcaparras ao Molho do Chefe</p></li>
							</ul>

							<h3>Temaki</h3>
							<ul class="list ins1">
								<li>08 - Califórnia </li>
								<li>09 - ------------------------------------------------------------ </li>
								<li>10 - Salmão Puro </li>
								<li>11 - Salmão e Cebolinha </li>
								<li>12 - Salmão e Cream Cheese </li>
								<li>13 - Salmão, Cream Cheese e Cebolinha </li>
								<li>14 - Salmão, Maionese e Cebolinha </li>
								<li>15 - Salmão Meio a Meio </li>
								<li>16 - Salmão Grelhado, Cream e Cebolinha </li>
								<li>17 - Salmão Grelhado c/ Shimeji, Cream e Cebolinha </li>
								<li>18 - Salmão Empanado, Cream e Cebolinha </li>
								<li>19 - Temaki Terapia - <p>Salmão Empanado, c/ Shimeji, Cream e Cebolinha</p></li>
								<li>20 - Salmão c/ Shimeji, Amêndoas, Cream e Cebolinha </li>
								<li>21 - Salmão c/ Limão Siciliano, Flor de Sal e Azeite </li>
								<li>22 - Salmão c/ Nachos, Cream e Cebolinha </li>
								<li>23 - Salmão Crispis, Cream e Cebolinha </li>
								<li>24 - Temaki Shimeju c/ Cream e Cebolinha </li>
								<li>25 - Temaki de Hot Holl, Salmão e Kani </li>
								<li>26 - Temaki Especial Inteiro Empanado com Cream e Couve </li>
								<li>27 - ------------------------------------------------------------ </li>
								<li>28 - Salmão, Kani, Cream e Cebolinha </li>
								<li>29 - Temaki 100% </li>
							
							</ul>
						</div>
						<div class="col-md-6 innergrid">
							<h3>Uramaki (8 Unidades)</h3>
							<ul class="list ins1">
								<li>30 - Califórnia</li>
								<li>31 - Salmão</li>
								<li>32 - Kingyo</li>
							</ul>

							<h3>Neguiri</h3>
							<ul class="list ins1">
								<li>33 - Salmão</li>
								<li>34 - Jou</li>
							</ul>

							<h3>Bebidas</h3>
							<ul class="list ins1">
								<li>39 - Água Mineral <p>Com e sem gás</p></li>
								<li>40 - Refrigerante <p>Lata</p></li>
								<li>41 - Cerveja Long Neck</li>
								<li>42 - Água de Coco</li>
								<li>43 - Chá</li>
								<li>44 - H2O</li>
							</ul>

							<h3>Combinados</h3>
							<ul class="list ins1">
								<li>45 - Combinado Temaki 1 <p>Sashimi 5 un; Sushi 3 un; Temaki 1 un. Pequeno; (Qualquer Temaki Exeto os números 25 e 26)</p></li>
								<li>46 - Combinado Temaki 2 <p>Jou 2 un; Hot Holl 2 un; Temaki 1 un. Pequeno; (Qualquer Temaki Exeto os números 25 e 26)</p></li>
								<li>47 - Especial p/ 2 Pessoas (30 unidades) <p>Hossomaki Salmão 4 un; Uramaki Califórnia 4 un; Uramaki Salmão 4 un; Niguiri Salmão 4 un; Hot Holl 4 un; Jou 4 un; Sashimi Salmão 6 un.</p></li>
							</ul>
						</div>
				<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>
</div>
<!-- /cardapio -->

<!-- our chefs -->
<div class="ourchefs" id="chefs">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Our chefs</h3>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef1.jpg" alt=" " class="img-responsive">
			</div>
			<h3>Jenny beck</h3>
			<p>Pantry chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef2.jpg" alt=" " class="img-responsive">
			</div>
			<h3>elvis rich</h3>
			<p>western chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef3.jpg" alt=" " class="img-responsive">
			</div>
			<h3>steve mark</h3>
			<p>Master chef</p>
		</div>
		<div class="col-md-3 chef agile_team_grid">
			<div class="agileits_w3layouts_team_grid">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<img src="images/chef4.jpg" alt=" " class="img-responsive">
			</div>
			<h3>jewel cher</h3>
			<p>gravy specialist</p>
		</div>
	</div>
</div>
<!-- //our chefs -->

<section id="galeria" class="padding-60">
 <div class="">
     <div class="row">
     <div class="col-md-12">
      <div class="text-center">
       <h1 class="title-h1">Galeria de Fotos</h1>
      </div>
     </div>
    </div>
  <div class="row">
    <div class="text-center">
      <div class="toolbar mb2 mt2 padding-b-25">
      <button class="btn fil-cat active" href="" data-rel="all">Tudo</button>
      <button class="btn fil-cat" data-rel="pratos">Pratos</button>
      <button class="btn fil-cat" data-rel="ambiente">Ambiente</button>
      </div> 
    </div> 

    <div style="clear:both;"></div>   
        <div id="portfolio">
            <div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
            <div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="w3layouts_gallery_grid tile scale-anm all ambiente">
				<a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="w3layouts_news_grid tile scale-anm bcards all ambiente">
						<img src="images/p2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
            
      	</div>
    <div style="clear:both;"></div>   
  </div>
 </div>
</section>

<!-- gallery js -->
<script src="js/lsb.min.js"></script>
<script>
$(window).load(function() {
	  $.fn.lightspeedBox();
	});
</script>
<!-- //gallery js -->

        <script type="text/javascript">
        	//<!--    portfolio  JS  =================    -->
			       
		    $(function() {
				var selectedClass = "";
				$(".fil-cat").click(function(){ 
				selectedClass = $(this).attr("data-rel"); 
		    $("#portfolio").fadeTo(100, 0.1);
				$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
			    setTimeout(function() {
			      $("."+selectedClass).fadeIn().addClass('scale-anm');
			      $("#portfolio").fadeTo(300, 1);
			    }, 300); 
					
				});
			});
        </script>

<!-- avaliation form -->
	<div class="contact-w3ls" id="contact">
		<div class="container">
			<h3>Envie sua sugestão, crítica ou elogio</h3>
				<form action="#" method="post">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
					
						<div class="form-control"> 
							<label class="header">Full Name <span>:</span></label>
							<input type="text" name="First Name" placeholder="Name" required="">
						</div>
						
						<div class="form-control"> 
							<label class="header">Email <span>:</span></label>
							<input type="email"  class="email" name="Email" placeholder="Email" required="">
						</div>
						
						<div class="form-control">
							<label class="header">Mobile Number <span>:</span></label>
							<input type="text" name="Number" placeholder="Mobile Number" required="">
						</div>	
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Message <span>:</span></label>
							<textarea name="Message" placeholder="Message" required=""></textarea>
						</div>	
					<div class="clearfix"> </div> 
					</div>
						<input type="submit" value="Enviar">
				</form>
		</div>  
	</div>  
<!-- //avaliation form -->

<!-- customer -->
	<div class="customer jarallax" id="customer">
		<div class="agileinfo-dot">
		<div class="container">
			<h3>Customer Says</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="customer-grid">
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant 
								morbi tristique senectus et netus et malesuada fames ac turpis egestas.  
								Donec auctor magna id purus lacinia hendrerit.</p>
							<h4>David Elton <span>Daily customer</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t1.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant 
								morbi tristique senectus et netus et malesuada fames ac turpis egestas.  
								Donec auctor magna id purus lacinia hendrerit.</p>
							<h4>Marvin gaye <span>Special customer</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t2.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> Cras aliquam ligula id felis rhoncus facilisis. Pellentesque habitant 
								morbi tristique senectus et netus et malesuada fames ac turpis egestas.  
								Donec auctor magna id purus lacinia hendrerit.</p>
							<h4>Jawel Slash <span>Recent visitor</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t3.jpg" alt="" />
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
</div>
<!-- //customer -->
	
<!-- contact form -->
	<div class="contact-w3ls" id="contact">
		<div class="container">
			<h3>Entre em contato conosco</h3>
				<form action="#" method="post">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
					
						<div class="form-control"> 
							<label class="header">Nome <span>:</span></label>
							<input type="text" name="First Name" placeholder="Nome" required="">
						</div>
						
						<div class="form-control"> 
							<label class="header">Email <span>:</span></label>
							<input type="email"  class="email" name="Email" placeholder="Email" required="">
						</div>
						
						<div class="form-control">
							<label class="header">Telefone <span>:</span></label>
							<input type="text" name="Number" placeholder="Número de telefone" required="">
						</div>	
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Mensagem <span>:</span></label>
							<textarea name="Message" placeholder="Mensagem" required=""></textarea>
						</div>	
					<div class="clearfix"> </div> 
					</div>
						<input type="submit" value="Enviar">
				</form>
		</div>  
	</div>  
<!-- //contact form -->

<!-- map -->
<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.1155693958376!2d-46.646924984448084!3d-23.636031870240405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5af1ba2ab777%3A0xb4717a79af458138!2sR.+Alberto+Leal%2C+540+-+Jabaquara%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1510426446724" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="agile_map_grid">
			<div class="agile_map_grid1">
				<h3>Contact Info</h3>
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Endereço :</span> R. Alberto Leal, 540 - Jabaquara, São Paulo - SP.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><span>email :</span> <a href="mailto:contato@kingyotemakeria.com.br">contato@kingyotemakeria.com.br</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><span>Telefone :</span> (11) 5594-6313</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //map -->
<!-- footer -->
<div class="footer">
		<div class="col-md-6 footer-left">
			<h3>Fresh Food</h3>
			<p>Morbi eget mollis erat, sit amet feugiat nulla. In hac habitasse platea dictumst. Sed ac fermentum eros.Pellentesque tincidunt nisi sit amet dui lobortis.Pulvinar pellentesque dui tempor</p>
			<p>Sed iaculis, nisl a eleifend porttitor, diam mauris gravida arcu, suscipit ullamcorper nulla diam vitae lorem..</p>
		</div>
		<div class="col-md-6 footer-right">
			<section class="subscribe" id="subscribe">
					<h3>Newsletter</h3>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" placeholder="Your email..." required="">
					<input type="submit" class="submit" value="">
				</form>
			</section>
			<h4>Follow us</h4>
				<div class="wthree-icon">
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> 
				</div>  
		</div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2017 Fresh Food. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!-- //copyright -->

<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- Date-Picker-JavaScript -->
				<script src="js/jquery-ui.js"></script>
				<script>
					$(function() {
						$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
					});
				</script>
<!-- //Date-Picker-JavaScript -->

<!-- banner text effect js file -->
		<script src="js/modernizr.custom.72111.js"></script>
<!-- banner text effect js file -->



</body>
<!-- //Body -->
</html>