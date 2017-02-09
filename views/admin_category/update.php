<?php include ROOT."/views/layout/admin_header.php" ?>
<section>
	<div class="container">
		<div class="row">
			</br>

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/category">Управление категориями</a></li>
					<li class="active">Добавить категорию</li>
				</ol>
			</div>
			<h4>Редактировать категорию</h4>
			<div class="col-lg-4">
				<div class="login-form">
					<form action="" method="post" enctype="multipart/form-data">
						<label>Название категории</label>
						<input type="text" name="name" placeholder="" value="<?php echo $category['name'];?>"/>
						
						<label>Порядковый номер</label>
						<input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order'];?>"/>
						
						<label>Статус</label>
						<select name="status">
							<option value="1" <?php if ($category['status'] == 1) echo 'selected="selected"'; ?>>Отображать</option>
							<option value="0" <?php if ($category['status'] == 0) echo 'selected="selected"'; ?>>Скрыть</option>
						</select></br>

						<label>Тип</label>
						<select name="type">
							<option value="arom" <?php if ($category['type'] == 'arom') echo 'selected="selected"'; ?>>arom</option>
							<option value="eliquid" <?php if ($category['type'] == 'eliquid') echo 'selected="selected"'; ?>>eliquid</option>
							<option value="zames" <?php if ($category['type'] == 'zames') echo 'selected="selected"'; ?>>zames</option>
						</select></br>

						<label>Описание</label>
						<textarea name="description" style="margin: 0px; width: 1040px; height: 170px;"><?=$category['description']?></textarea>

						</br>
						</br>

						<input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>

						</br>
						</br>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include ROOT."/views/layout/admin_footer.php" ?>