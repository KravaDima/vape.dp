<?php include ROOT."/views/layout/header.php" ?>
	<section>
		<div class="container">
			<div class="wrap">
					<ul class="product-head">
						<li><a href="/">Главная</a> <span>::</span></li>
						<li class="active-page"><a href="<?ROOT?>/cabinet">Кабинет пользователя</a></li>
						<div class="clear"> </div>
					</ul>
				<div class="row">
					<h1>Привет, <?php echo $user['name'];?>!</h1></br>
					<ul>
						<li><a class="forgot" href="/cabinet/edit">Редактировать данные</a></li>
						<!-- <li><a class="forgot" href="/user/history">Список покупок</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php include ROOT."/views/layout/footer.php" ?>
