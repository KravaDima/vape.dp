<?php include ROOT."/views/layout/admin_header.php" ?>
<section>
	<div class="container">
		<div class="row">
			</br>

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/product">Управление товарами</a></li>
					<li class="active">Добавить товар</li>
				</ol>
			</div>
			<h4>Добавить новый товар</h4>
			
			<form action="" method="post" enctype="multipart/form-data">
				<div class="contact-form">
					<div class="contact-to">
						<!-- <label>Название товара</label> -->
						<input type="text" name="name" placeholder="" value="Название товара..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Название товара...';}"/>
						<div class="clear"></div>

						<!-- <label>Артикул</label> -->
						<input type="text" name="code" placeholder="" value="Артикул..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Артикул...';}"/>
						<div class="clear"></div>
						
						<!-- <label>Стоимость</label> -->
						<input type="text" name="price" placeholder="" value="Стоимость..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Стоимость...';}"/>
						<div class="clear"></div>
						
						<!-- <label>Объем</label> -->
						<input type="text" name="size" placeholder="" value="Объем, в мл" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Объем, в мл';}"/>
						<div class="clear"></div>

						<label>Категория</label>
						<select name="category_id">
							<?php if (is_array($categoryList)):?>
								<?php foreach ($categoryList as $category): ?>
									<option value="<?php echo $category['id'];?>">
										<?php echo $category['name'];?>
									</option>
								<?php endforeach;?>
							<?php endif;?>
						</select>
						</br>
						
						<!-- <label>Производитель</label> -->
						<input type="text" name="brand" placeholder="" value="Производитель" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Производитель...';}"/>
						<div class="clear"></div>

						<!-- <label>Изображение товара</label> -->
						<input type="file" name="image" placeholder="" value=""/>
						<div class="clear"></div>

						<!-- <label>Детальное описание</label> -->
						<div class="text2">
							<textarea name="description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Детальное описание';}">Детальное описание</textarea>
							<div class="clear"></div>
						</div>

						</br>
						</br>

						<label>Наличие на складе</label>
						<select name="availability">
							<option value="1" selected="selected">Да</option>
							<option value="0">Нет</option>
						</select>

						</br>
						</br>

						<label>Новинка</label>
						<select name="is_new">
							<option value="1" selected="selected">Да</option>
							<option value="0">Нет</option>
						</select>

						</br>
						</br>

						<label>Рекомендуемые</label>
						<select name="is_recommended">
							<option value="1" selected="selected">Да</option>
							<option value="0">Нет</option>
						</select>
						
						</br>
						</br>

						<label>Статус</label>
						<select name="status">
							<option value="1" selected="selected">Отображать</option>
							<option value="0">Скрыть</option>
						</select>

						</br>
						</br>

						<input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>

						</br>
						</br>
						</div>
						</div>
					</form>
				
		</div>
	</div>
</section>
<?php include ROOT."/views/layout/admin_footer.php" ?>