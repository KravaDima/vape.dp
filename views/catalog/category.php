<?php include ROOT."/views/layout/header.php" ?>	
	<section>
		<div class="wrap">
			<div class="row">
				<ul class="product-head">
					<li><a href="/">Главная</a> <span>::</span></li>
					<li class="active-page"><a href="<?ROOT?>/aromacatalog/">Аромки</a> <span>::</span></li>
					<!-- <li class="active-page"><a href="<?ROOT?>/category/6">TPA (the perfumer's apprentice)</a></li> -->
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
							<li><a href="/eliquidvape/11">ELIQUID FROM DRIPPING.ME</a></li>
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
				<div class="content-right">
					<div class="product-grids">
						<?php foreach($categoryProducts as $product):?>
						<div class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
							<!--	<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div> -->
							</div>
							<div class="product-pic">
								<a href="/product/<?php echo $product['id'];?>"><img src="<?php echo Product::getImageProduct($product['id']);?>" title="<?=$product["name"]?>" alt="<?=$product["name"]?>"/></a>
								<p>
								<a href="/product/<?php echo $product['id'];?>"><small><?=$product["brand"]?></small> <?=$product["name"]?> </a>
								<span><a href="/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a></span>
								</p>
							</div>
							<?php if($product['is_new']):?>
								<img src=<?php ROOT;?>"/template/images/home/new.png" class="new" alt="" />
							<?php endif;?>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="/product/<?=$product["id"]?>">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="/product/<?=$product["id"]?>"><?php echo $product['price']."грн";?></a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info add-to-cart" data-id="<?php echo $product['id'];?>">
								<span> </span>
							</div>

						</div>
						<?php endforeach;?>
						<div class="clear"> </div>
						<?php echo $pagination->get(); ?>
					</div>
				</div>
				<div class="clear"> </div>
				<h1>Описание:</h1>
				<span><?=$category['description']?></span>
			</div>
		</div>
	</section>
	
<?php include ROOT."/views/layout/footer.php" ?>
	

  
