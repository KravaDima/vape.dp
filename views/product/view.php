<?php include ROOT."/views/layout/header.php" ?>

		<div class="content details-page" itemscope itemtype="http://schema.org/Product">
			<div class="product-details">
				<div class="wrap">
					<ul class="product-head">
						<li><a href="/">Главная</a> <span>::</span></li>
						<li class="active-page"><a href="#">Product Page</a></li>
						<div class="clear"> </div>
					</ul>
				<div class="content-left">
					<div class="content-left-top-brands">
						<h3>АРОМАТИЗАТОРЫ</h3>
						<ul>
							<li><a href="/aromavape/8">АРОМКИ TPA</a></li>
						</ul>
						<h3>ЖИДКОСТИ</h3>
						<ul>
							<li><a href="/eliquidvape/9">ATMOSE</a></li>
							<li><a href="/eliquidvape/16">KILO</a></li>
							<li><a href="/eliquidvape/11">МОНОВКУСЫ</a></li>
							<li><a href="/eliquidvape/19">ELIQUID FROM DRIPPING.ME</a></li>
						</ul>
						<h3>ДЛЯ САМОЗАМЕСА</h3>
						<ul>
							<li><a href="/samozames/14">ПРОПИЛЕНГЛИКОЛЬ</a></li>
							<li><a href="/samozames/15">ГЛИЦЕРИН</a></li>
							<li><a href="/samozames/13">ВАТА</a></li>
							<li><a href="/samozames/17">НИКОТИН</a></li>
							<li><a href="/samozames/12">ОСНОВА</a></li>
						</ul>
					</div>
				</div>
				<div class="details-left">
					<div class="details-left-slider">
							<img id="product-img" itemprop="image" src="<?php echo Product::getImageProduct($product['id']);?>" title="<?=$product["name"]?>" alt="<?=$product["name"]?>" />
					</div>
					<div class="details-left-info">
						<div class="details-right-head">
						<h1>Наименование: <span itemprop="name"><?=$product['name']?></span></h1>
						<ul class="pro-rate">
							<li><a class="product-rate" href="#"></a></li>
							<div id="raiting_star">
								<div id="raiting">
									<div id="raiting_blank"></div>
									<div id="raiting_hover"></div>
									<div id="raiting_votes"></div>
								</div>
								<div id="raiting_info"><img src=<?ROOT?>"/template/web/images/load.gif" /> <h5> Рейтинг товара: </h5></div>
							</div>
						</ul>
						<p class="product-detail-info"><?php echo $product['description'];?></p>
						<!-- <a class="learn-more" href="#"><h3>Подробнее</h3></a> -->
						<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="product-more-details">
							<ul class="price-avl">
								<li class="price"><span itemprop="price"><?=$product['price']?></span><span itemprop="priceCurrency" content="UAH"> грн</span></li>
								<div class="clear"> </div>
							</ul>
							<ul class="prosuct-qty">
								<span>Объем:</span>
								<select>
									<option><?=$product['size']?> <?=$product['vol']?></option>
								</select>
							</ul>
							<input data-id="<?php echo $product['id'];?>" type="button" class="add-to-cart add2cart" value="Добавить в корзину" />
							<div id="load_info"><img src=<?ROOT?>"/template/web/images/load.gif" /></div>
							<span id="add-item"><?=$product["name"]?> упешно добавлен в <a href="/cart">корзину!</a></span>
							<ul class="product-share">
								<h3>Сохрани себе в сеть</h3>
								<ul>
									<li><a class="share-vk" href="http://vk.com/share.php?url=<?=URL;?>product/<?=$product["id"]?>"><span> </span> </a></li>
									<li><a class="share-face" href="http://www.facebook.com/sharer/sharer.php?u=<?=URL;?>product/<?=$product["id"]?>"><span> </span> </a></li>
									<li><a class="share-twitter" href="https://twitter.com/intent/tweet?text=<?=$product["name"]?>&url=<?=URL;?>product/<?=$product["id"]?>"><span> </span> </a></li>
									<li><a class="share-google" href="https://plus.google.com/share?url=<?=URL;?>product/<?=$product["id"]?>"><span> </span> </a></li>
									<div class="clear"> </div>
								</ul>
							</ul>
						</div>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				
				<div class="clear"> </div>
			</div>
			<!----product-rewies---->
			<div class="product-reviwes">
				<div class="wrap">
					<!--vertical Tabs-script-->
					<!---responsive-tabs---->
					<script src=<?ROOT?>"/template/web/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							 $('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
									var $tab = $(this);
									var $info = $('#tabInfo');
									var $name = $('span', $info);
										$name.text($tab.text());
										$info.show();
									}
								});
													
							 $('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								 });
						 });
					</script>
					<!---//responsive-tabs---->
					<!--//vertical Tabs-script-->
					<!--vertical Tabs-->
	        		<div id="verticalTab">
			            <ul class="resp-tabs-list">
			                <li>Описание</li>
			                <li>Отзывы</li>
			            </ul>
			            <div class="resp-tabs-container vertical-tabs">
			                <div>
			                	<h3> Описание</h3>
			                    <span itemprop="description"><?php echo $product['description'];?></span>
			                </div>
			                <div>
			                	<h3>Отзывы</h3>
			                	<p>Здесь нет еще отзывов, будь первым!</p>
			                </div>
			            </div>
	       			</div>
       				<div class="clear"> </div>
       				<!--- start-Дополнительные продукты--->
		       		<div class="similar-products">
		       			<div class="similar-products-left">
		       				<h3>Вместе с этим покупают:</h3>
		       				<p>На основе предпочтений наших клиентов, мы подобрали наиболее часто покупаемые товары, вместе с тем, который Вы сейчас просматриваете.</p>
		       			</div>
		       			<div class="similar-products-right">
		       				<!-- start content_slider -->
		       				<!--- start-rate---->
									<script src="web/js/jstarbox.js"></script>
									<link rel="stylesheet" href="web/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
									<script type="text/javascript">
										jQuery(function() {
											jQuery('.starbox').each(function() {
												var starbox = jQuery(this);
												starbox.starbox({
													average: starbox.attr('data-start-value'),
													changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
													ghosting: starbox.hasClass('ghosting'),
													autoUpdateAverage: starbox.hasClass('autoupdate'),
													buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
													stars: starbox.attr('data-star-count') || 5
												}).bind('starbox-value-changed', function(event, value) {
													if(starbox.hasClass('random')) {
														var val = Math.random();
														starbox.next().text(' '+val);
														return val;
													} 
												})
											});
										});
									</script>
									<!---//End-rate---->
							       <div id="owl-demo" class="owl-carousel">
							       		<?php foreach($dopprod as $item):?>
						                <div class="item" onclick="/product/<?=$item["id"]?>">
						                	<div class="product-grid fade sproduct-grid">
												<div class="product-pic">
													<a href="/product/<?=$item["id"]?>"><img src="<?php echo Product::getImageProduct($item['id']);?>" title="<?=$item["name"]?>" /></a>
													<p>
													<a href="/product/<?php echo $item['id'];?>"><small><?=$item["brand"]?></small> <?=$item["name"]?></a>
													<span><a href="/product/<?php echo $item['id'];?>"><?php echo $item['name'];?></a></span>
													</p>
												</div>
												<div class="product-info">
													<div class="product-info-cust">
														<a href="/product/<?=$item["id"]?>">Подробнее</a>
													</div>
													<div class="product-info-price">
														<a href="/product/<?=$item["id"]?>"><?php echo $item['price']."грн";?></a>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="more-product-info add-to-cart link-1" data-id="<?php echo $item['id'];?>">
													<span> </span>
												</div>
											</div>
						                </div>
						                <?php endforeach;?>
					              </div>
						<!----//End-img-cursual---->
		       			</div>
		       			<div class="clear"> </div>
		       		</div>
		       		<!--- //End-similar-products--->
				</div>
			</div>
			<!--//vertical Tabs-->
			<!----//product-rewies---->
			<!---//End-product-details--->
			</div>
		</div>
<?php include ROOT."/views/layout/footer.php" ?>