<?php
// include navigation bar
   $homeSiteDir = '../';
?>

<!DOCTYPE HTML>
<html>
<head>
<title>VBC Val-de-ruz Sport</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="VBC Val-de-ruz sport" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo $homeSiteDir?>css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="<?php echo $homeSiteDir?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $homeSiteDir?>css/style.css" rel='stylesheet' type='text/css' />	
<script src="<?php echo $homeSiteDir?>js/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo $homeSiteDir?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $homeSiteDir?>js/easing.js"></script>
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
                include_once 'include/menu.php';
             ?>
		
  </div>
 </div>
       <!--/start-banner-->
  <div class="banner two">
     <div class="container">
	       
        </div>
  </div>
    <!--//end-banner-->
     <!--/start-main-->
          <div class="main-content">
            <!--/soccer-inner-->
                <div class="soccer-inner">
                        <div class="top-inner">



<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Responsables des équipes   <?php echo ' <a href="./users-manager.php?action=add&id=' . $user[0] . '"><span class="glyphicon glyphicon-plus-sign"></span> Pour ajouter cliquez ici</a>'; ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Email</th>
                                            <th>Remarques</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Sacchetti</td>
                                            <td>Plinio</td>
                                            <td>plinio.sacchetti@bluewin.ch</td>
                                            <td></td>
                                            <td>
                                                <?php echo ' <a href="./users-manager.php?action=permission&id=' . $user[0] . '"><span class="glyphicon glyphicon-eye-close"></span></a>'; ?>
                                                <?php echo ' <a href="./users-manager.php?action=edit&id=' . $user[0] . '"><span class="glyphicon glyphicon-edit"></span></a>'; ?>
                                                <?php echo ' <a href="./users-manager.php?action=delete&id=' . $user[0] . '"><span class="glyphicon glyphicon-trash"></span></a>'; ?>
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2</td>
                                            <td>Dupond</td>
                                            <td>Paul</td>
                                            <td>paulus@gmail.com</td>
                                            <td></td>
                                            <td>
                                                <?php echo ' <a href="./users-manager.php?action=permission&id=' . $user[0] . '"><span class="glyphicon glyphicon-eye-close"></span></a>'; ?>
                                                <?php echo ' <a href="./users-manager.php?action=edit&id=' . $user[0] . '"><span class="glyphicon glyphicon-edit"></span></a>'; ?>
                                                <?php echo ' <a href="./users-manager.php?action=delete&id=' . $user[0] . '"><span class="glyphicon glyphicon-trash"></span></a>'; ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            






                        </div>
                </div>
                <div class="clearfix"> </div>
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
<script type="text/javascript" src="<?php echo $homeSiteDir?>js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>