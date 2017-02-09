<?php include ROOT."/views/layout/header.php" ?>

<section>
	<div class="content login-box">
		<div class="wrap">
			<ul class="product-head">
				<li><a href="/">Главная</a> <span>::</span></li>
				<li><a href="<?ROOT?>/cabinet">Кабинет пользователя</a> <span>::</span></li>
				<li class="active-page"><a href="<?ROOT?>/cabinet/edit">Редактирование данных</a></li>
				<div class="clear"> </div>
			</ul>
			<div class="register-grids">
				<?php if ($result): ?>
					<p> Данные отредактированы!</p>
				<?php else: ?>
					<?php if (isset($errors) && is_array($errors)): ?>
						<ul>
							<?php foreach ($errors as $error): ?>
								<li> - <?php echo "$error";?> </li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<div class="register-bottom-grid">
						<form action="" method="post">
							<p>Имя</p>
							<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Имя"/>
							<p>Пароль</p>
							<input type="password" name="password" value="<?php echo $password; ?>" placeholder="Пароль"/>
							<input type="submit" name="submit" value="Сохранить" />
						</form>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>

<?php include ROOT."/views/layout/footer.php" ?>
