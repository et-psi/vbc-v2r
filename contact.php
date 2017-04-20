<!DOCTYPE HTML>
<html>
<head>
<title>VBC Val-de-ruz Sport</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="VBC Val-de-ruz sport" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body> 
 <div class="container">
  <div class="header" id="home">
	 <div class="subhead white">
             <?php
             // include navigation bar
                include_once 'menu.php';
             ?>
		
  </div>
 </div>
   <!--/start-banner-->
  <div class="banner">
	       <div class="banner-inner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>FORMATION, LE MEILLEUR DE SOI </h3>
								<p>A partir de 7ans, fille ou garçon notre club t'accueille</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>CHAMPIONNATS </h3>
								 <p>Participation aux championnats cantonaux et nationaux</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>MAIS AVANT TOUT...</h3>
								<p>Le plasir reste notre motivation principale</p>
								</div>	
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
				</div>
        </div>
    <!--//end-banner-->
     <!--/start-main-->
          <div class="main-content">

		 <!--/contact-->
	       <div class="section-contact">
		    <h3 class="tittle">NOUS CONTACTER</h3>
				<div class="contact-main">
					<div class="col-md-12 contact-in">
						<h5>Vous avez besoin de plus d'informations ?</h5>
						<p class="para1">Pout tout ce qui concerne le mouvement jurnior du club, la formation des jeunes, prenez contact avec le responsable de la formation. </p>
                                                <p class="para1">Pout tout le reste, vous pouvez envoyer un email au président du club. </p>
						<div class="more-address"> 
								<address>
								  <strong>VBC Val-de-ruz Sport</strong><br>							  
								</address>
								<address>
								  <strong>Président</strong><br>
								  <a href="mailto:president.v2r@gmail.com">Envoyer un email</a>
                                                                </address>
								<address>
								  <strong>Responsable du  mouvement juniors</strong><br>
								  <a href="mailto:responsable.juniors.v2r@gmail.com">Envoyer un email</a>
                                                                </address>
						  </div>
					</div>
					<div class="clearfix"> </div>
			      </div>
		         <h3 class="tittle find">Lieux des installation sportives</h3>
                         <p><strong>La Fontenelle</strong></p>
					<div class="map">						
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10871.092690718013!2d6.911587048120107!3d47.06429971562623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe2949ddf7fe3c99b!2scoll%C3%A8ge+de+la+fontenelle!5e0!3m2!1sfr!2sch!4v1492697203603"></iframe>
					</div>
                         <p><br/><strong>La Rebatte</strong></p>
					<div class="map">						
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12928.287098001705!2d6.919087039012508!3d47.06303656916402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478de2a18caa2039%3A0xeab2f23fe49e1094!2sRebatte!5e0!3m2!1sfr!2sch!4v1492697640185"></iframe>
					</div>
                         <p><br/><strong>Collège de Fontaines</strong></p>
					<div class="map">						
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10875.893317593147!2d6.89835855410646!3d47.040754152868146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478de25ee4362989%3A0x6abf0bc06f8cba57!2sColl%C3%A8ge+de+Fontaines!5e0!3m2!1sfr!2sch!4v1492697603277"></iframe>
					</div>
			</div>
	<!--//contact-->	   
	 </div>
		<!--//soccer-inner-->
	 </div>
	<!--/start-footer-section-->
			<div class="footer-section">
			   <div class="container">
					<div class="footer-grids">
	
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--//end-footer-section-->
			<!--/start-copyright-section-->
				<div class="copyright">
						  <p>&copy; VBC Val-de-ruz Sport. All Rights Reserved | Design by Psi </p>
					</div>


				<!--start-smoth-scrolling-->
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>