<!DOCTYPE HTML>
<html>
	<head>
		<title>Купить <? if(!empty($title)) {echo $title;} else {echo "ароматизаторы TPA и жидкость для электронных сигарет";}?> в Украине и Днепре | Vape shop Dripping.me <?=TEL?></title>
		<link href=<?php ROOT;?>"/template/web/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Купить <? if(!empty($description)) {echo $description;} else {echo "Ароматизаторы TPA (The Perfumer’s Apprentice) и жидкости для электронных сигарет";}?> с доставкой по Украине <?=TEL?>">
		<meta name="keywords" content="The Perfumer’s Apprentice, <? if(!empty($title)) echo $title;?>, vapeshop">
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

		    <script type="text/javascript">
			$(function(){
			  $("#search").keyup(function(){
			     var search = $("#search").val();
			     $.ajax({
			       type: "POST",
			       url: "http://dripping.me/search/search/",
			       data: {"search": search},
			       cache: false,                                 
			       success: function(response){
			          $("#resSearch").html(response);
			       }
			     });
			     return false;
			   });
			});
			</script>
			<script type="text/javascript" src=<?php ROOT;?>"/template/web/js/carousel.js"></script>
			<link rel="stylesheet" type="text/css" href=<?php ROOT;?>"/template/web/css/styles-carousel.css">
		   <!-- //Owl Carousel Assets -->
		   <!-- Звездочный рейтинг -->
			<script>
				$(document).ready(function(){
					total_reiting = 5;
					var star_width = total_reiting*16 + Math.ceil(total_reiting);
					$('#raiting_votes').width(star_width);
					$('#raiting_info h5').append(total_reiting);
					$('#raiting').hover(function(){
						$('#raiting_votes, #raiting_hover').toggle();
					},
					function(){
					  $('#raiting_votes, #raiting_hover').toggle();
					});

					var margin_doc = $('#raiting').offset();
					$('#raiting').mousemove(function(e){
						var width_votes = e.pageX - margin_doc.left;
						user_votes = Math.ceil(width_votes/17);
						$('#raiting_hover').width(user_votes*17);
					});

					id_item=199;
					$('#raiting').click(function(){
						$('#raiting_info h5, #raiting_info img').toggle();
						$.get(
							"raiting/",
							{id_item: id_item, user_votes: user_votes},
							function(data){
								$('#raiting_info h5').html(data);
								$('#raiting_votes').width((total_reiting + user_votes)*17/2);
								$('#raiting_info h5, #raiting_info img').toggle();
								$('#raiting_hover').hide();
							}
						)
					})

				});
			</script>
			<script>
				$(document).ready(function(){
					$('.add-to-cart').click(function(){
						$('.add-to-cart, #load_info img').toggle();
						$('#add-item, #load_info img').toggle();
					})
				});
			</script>
		   <!-- конец рейтинга -->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
				<div class="top-header">
					<div class="wrap">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="/cart"><span id="clickme"></span></a></li>
								<li><a href="/cart"><span id="cart-count">(<?php echo Cart::countItems();?>)</span></a></li>
								<!---start-cart-bag---->
								<div id="cart">Your Cart is Empty <span>(0)</span></div>
								<!---start-cart-bag---->
								<li>Для заказов:</li>
								<li><a href="tel:+380934699806"> 0934699806</a></li>
								<li><a href="tel:+380970069555"> 0970069555</a></li>
								<li><a href="tel:+380508769555"> 0508769555</a></li>
								<li>
									<form action="search.php" method="post" name="form" onsubmit="return false;">
										<input  name="search" type="text" id="search" placeholder="Что будем парить?" />
									</form>
									<div id="resSearch"></div>
								</li>
							</ul>
							
						</div>
						<div class="top-header-right">
							<ul>
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
				<!-- <div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-left">
                            <div class="extra-wrap">
								<p><span>Телефоны для быстрого заказа:</span></p>
								<ul>
									<li><img src="/template/web/images/phone.png" alt=""><a href="tel:+380934699806"> 0934699806</a></li>
									<li><img src="/template/web/images/phone.png" alt=""><a href="tel:+380970069555"> 0970069555</a></li>
									<li><img src="/template/web/images/phone.png" alt=""><a href="tel:+380508769555"> 0508769555</a></li>
								</ul>
							</div>
							<form action="search.php" method="post" name="form" onsubmit="return false;">
								<input  name="search" type="text" id="search" placeholder="Что будем парить?" />
							</form>
							<div id="resSearch"></div>
						</div>
						<div class="mid-grid-right">
							<a class="logo" href="/"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div> -->
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				<div class="header-bottom">
					<div class="wrap">
					<!-- start header menu -->
							<ul class="megamenu skyblue">
								<li class="grid"><a class="color2" href="/">Главная</a></li>
								<li class="grid"><a class="color2" href="/aromacatalog">Аромки</a></li>
					  			<li class="active grid"><a class="color4" href="/eliquid">E-liquid</a></li>	
								<li class="active grid"><a class="color5" href="/zames">Самозамес</a></li>
								<li><a class="color6" href="/contacts">Контакты</a></li>
								<li><a class="color7" href="/about">О нас</a></li>
								<li><a class="color8" href="/payments">Доставка</a></li>
							</ul>
					</div>
				</div>
				</div>
				<!----//End-bottom-header---->
			<!---//End-header---->