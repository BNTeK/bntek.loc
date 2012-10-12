<div>
	<form enctype="multipart/form-data" method="POST">
		<div><?php echo Form::file('upload') ?></div>
		<div><?php echo Form::input('alt', 'Отображаемое имя', array('class' => 'input')); ?></div>
		<div>
			<select name="album_id">
				<?php foreach($albums as $item): ?>
					<option value="<?php echo $item->id; ?>"><?php echo $item->title; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<textarea name="rel"></textarea>
		<label>Показать на главной: <input type="checkbox" name="home_img" value="1" /></label>
		<div>
			<input type="submit" name="add" value="Добавить" class="btn">
		</div>
		<?php if(isset($errors)):?>
			<?php foreach ($errors as $key => $value):?>
				<?php echo $value; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	</form>
</div>