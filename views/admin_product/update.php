<?php include ROOT."/views/layout/admin_header.php" ?>
<section>
	<div class="container">
		<div class="row">
			</br>

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/product">Управление товарами</a></li>
					<li class="active">Редактирование товара</li>
				</ol>
			</div>
			<h4>Редактировать товар</h4>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="contact-form">
					<div class="contact-to">
						<label>Название товара</label>
						<input type="text" name="name" placeholder="" value="<?php echo $product['name'];?>"/>
						<div class="clear"></div>
						
						<label>Артикул</label>
						<input type="text" name="code" placeholder="" value="<?php echo $product['code'];?>"/>
						<div class="clear"></div>
						
						<label>Стоимость</label>
						<input type="text" name="price" placeholder="" value="<?php echo $product['price'];?>"/>
						<div class="clear"></div>

						<label>Объем</label>
						<input type="text" name="size" placeholder="" value="<?php echo $product['size'];?>"/>
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
						
						<label>Производитель</label>
						<input type="text" name="brand" placeholder="" value="<?php echo $product['brand'];?>"/>
						<div class="clear"></div>

						<label>Изображение товара</label>
						</br>
						<img src="<?php echo Product::getImageProduct($product['id']);?>" width=200 alt="" />
						<input type="file" name="image" placeholder="" value=""/>
						<div class="clear"></div>
						
						<div class="text2">
							<label>Детальное описание</label>
							<textarea name="description" value="<?php echo $product['description'];?>"><?php echo $product['description'];?></textarea>
							<div class="clear"></div>
						</div>

						</br>
						</br>

						<label>Наличие на складе</label>
						<select name="availability">
							<option value="1" <?php if ($product['availability'] == 1) echo 'selected="selected"';?>>Да</option>
							<option value="0" <?php if ($product['availability'] == 0) echo 'selected="selected"';?>>Нет</option>
						</select>

						</br>
						</br>

						<label>Новинка</label>
						<select name="is_new">
							<option value="1" <?php if ($product['is_new'] == 1) echo 'selected="selected"';?>>Да</option>
							<option value="0" <?php if ($product['is_new'] == 0) echo 'selected="selected"';?>>Нет</option>
						</select>

						</br>
						</br>

						<label>Рекомендуемые</label>
						<select name="is_recommended">
							<option value="1" <?php if ($product['is_recommended'] == 1) echo 'selected="selected"';?>>Да</option>
							<option value="0" <?php if ($product['is_recommended'] == 0) echo 'selected="selected"';?>>Нет</option>
						</select>
						
						</br>
						</br>

						<label>Статус</label>
						<select name="status">
							<option value="1" <?php if ($product['status'] == 1) echo 'selected="selected"';?>>Да</option>
							<option value="0" <?php if ($product['status'] == 0) echo 'selected="selected"';?>>Нет</option>
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