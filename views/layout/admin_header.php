<!DOCTYPE HTML>
<html>
	<head>
		<title>Dripping.me | Пар для тех, кто в теме</title>
		<link href=<?php ROOT;?>"/template/web/css/style.css" rel='stylesheet' type='text/css' />
		<link href=<?php ROOT;?>"/template/web/css/admin.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src=<?php ROOT;?>"/template/web/js/jquery.min.js"></script>
		<script type="text/javascript" src=<?php ROOT;?>"/template/web/js/jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href=<?php ROOT;?>"/template/web/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src=<?php ROOT;?>"/template/web/js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src=<?php ROOT;?>"/template/web/js/menu_jquery.js"></script>
		<!-- //End menu -->
		<!---slider---->
		<link rel="stylesheet" href=<?php ROOT;?>"/template/web/css/slippry.css">
		<script src=<?php ROOT;?>"/template/web/js/jquery-ui.js" type="text/javascript"></script>
		<script src=<?php ROOT;?>"/template/web/js/scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
		<script type="text/javascript" src=<?php ROOT;?>"/template/web/js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href=<?php ROOT;?>"/template/web/css/jquery-ui.css">
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
		<!----//End-pricerage-seletion---->
		<!---move-top-top---->
		<script type="text/javascript" src=<?php ROOT;?>"/template/web/js/move-top.js"></script>
		<script type="text/javascript" src=<?php ROOT;?>"/template/web/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>

		<!---//move-top-top---->
		<!-- Owl Carousel Assets -->
		<link href=<?php ROOT;?>"/template/web/css/owl.carousel.css" rel="stylesheet">
		<script src=<?php ROOT;?>"/template/web/js/jquery-1.9.1.min.js"></script> 
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src=<?php ROOT;?>"/template/web/js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 3,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		   <script src=<?php ROOT;?>"/template/web/js/ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
				<div class="top-header">
					<div class="wrap">
						<div class="top-header-right">
							<ul>
								<!-- <li><a href=<?php ROOT;?>"/user/login">Вход</a><span> </span></li>
								<li><a href=<?php ROOT;?>"/user/register">Регистрация</a></li> -->

								<?php if (User::isGuest()): ?>
									<li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a><span> </span></li>
									<li><a href=<?php ROOT;?>"/user/register">Регистрация</a></li>
								<?php else: ?>
									<li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a><span> </span></li>
									<li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
								<?php endif; ?>

							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-left">
							<form>
								<!-- <input type="text" placeholder="Что будем парить?" /> -->
							</form>
						</div>
						<div class="mid-grid-right">
							<a class="logo" href="/"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			<!---//End-header---->