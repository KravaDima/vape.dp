<?php include ROOT."/views/layout/header.php" ?>
		<!--- start-content---->
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<?php if (isset($errors) && is_array($errors)): ?>
						<ul>
							<?php foreach($errors as $error): ?>
								<li>- <?php echo "$error"; ?></li>
							<?php endforeach;?>
						</ul>
					<?php endif; ?>

					<h1>АВТОРИЗАЦИЯ ИЛИ РЕГИСТРАЦИЯ НОВГО ПОЛЬЗОВАТЕЛЯ</h1>
					<div class="login-left">
						<h3>НОВЫЙ ПОЛЬЗОВАТЕЛЬ</h3>
						<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						<a class="acount-btn" href="/user/register">Регистрация</a>
					</div>
					<div class="login-right">
						<h3>ПОСТОЯННЫЙ ПОЛЬЗОВАТЕЛЬ</h3>
						<p>Если у тебя уже есть аккаунт, просто войди здесь</p>
						<form action="" method="post">
							<div>
								<span>Email<label>*</label></span>
								<input type="text" name="email"> 
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input type="password" name="password"> 
							</div>
							<a class="forgot" href="/contacts">ЗАБЫЛ ПАРОЛЬ?</a>
							<input type="submit" name="submit" value="Вход" />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- start-bottom-grids---->
<?php include ROOT."/views/layout/footer.php" ?>