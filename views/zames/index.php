<?php include ROOT."/views/layout/header.php" ?>
<section>
		<div class="wrap">
			<div class="row">
				<ul class="product-head">
					<li><a href="/">Главная</a> <span>::</span></li>
					<li  class="active-page"><a href="<?ROOT?>/zames/">Самозамес</a></li>
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
						<?php foreach($categories as $categoryItem):?>
						<div class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<!-- <div class="starbox small ghosting"> </div> <span> (46)</span> -->
								</div>
							</div>
							<div class="product-pic">
								<a href="/samozames/<?php echo $categoryItem['id'];?>"><img src=<?ROOT?>"<?=$categoryItem['image']?>" title="<?=$categoryItem["name"]?>" alt="<?=$categoryItem["name"]?>" /></a>
								<p>
								<!-- <a href="/aromavape/<?php echo $categoryItem['id'];?>"><small><?=$categoryItem["brand"]?></small> <?=$categoryItem["name"]?> <small>Phantom</small> FG</a> -->
								<span><a href="/samozames/<?php echo $categoryItem['id'];?>"><?php echo $categoryItem['name'];?></a></span>
								</p>
							</div>
							<!-- <?php if($categoryItem['is_new']):?> -->
								<!-- <img src=<?php ROOT;?>"/template/images/home/new.png" class="new" alt="" /> -->
							<!-- <?php endif;?> -->
							<div class="product-info">
								<div class="product-info-cust">
									<a href="/samozames/<?=$categoryItem["id"]?>">Подробнее</a>
								</div>
								<div class="clear"> </div>
							</div>
						<!-- 	<div class="more-product-info add-to-cart" data-id="<?php echo $categoryItem['id'];?>">
								<span> </span>
							</div> -->

						</div>
						<?php endforeach;?>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>

			</div>
		</div>
	</section>
<?php include ROOT."/views/layout/footer.php" ?>