<?php include ROOT."/views/layout/header.php" ?>

<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>РЕГИСТРАЦИЯ НА САЙТЕ</h1>
					<div class="register-grids">
						<?php if ($result): ?>
							<p> Вы зарегистрированы!</p>
						<?php else: ?>
							<?php if (isset($errors) && is_array($errors)): ?>
								<ul>
									<?php foreach ($errors as $error): ?>
										<li> - <?php echo "$error";?> </li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						<form action="" method="post"> 
								<div class="register-top-grid">
										<h3>ЛИЧНАЯ ИНФОРМАЦИЯ</h3>
										<div>
											<span>ИМЯ<label>*</label></span>
											<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Имя"/> 
										</div>
										<div>
											<span>Email<label>*</label></span>
											<input type="email" name="email" value="<?php echo $email; ?>" placeholder="email"/> 
										</div>
										<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Хочу узнавать о новостях и акциях</label>
											</a>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>ИНФОРМАЦИЯ ДЛЯ ВХОДА</h3>
										<div>
											<span>Пароль<label>*</label></span>
											<input type="password" name="password" placeholder="Пароль"/>
										</div>
										<div>
											<span>Повторить пароль<label>*</label></span>
											<input type="password" name="conf_password" placeholder="Пароль"/>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" name="submit" value="ОТПРАВИТЬ" />
						</form>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>

<?php include ROOT."/views/layout/footer.php" ?>
