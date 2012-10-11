<div>
	<form enctype="multipart/form-data" method="POST">
		<div><?php echo Form::file('upload') ?></div>
		<div><?php echo Form::input('alt', 'Отображаемое имя', array('class' => 'input')); ?></div>
		<textarea name="rel"></textarea>
		<label>Показать на главной: <input type="checkbox" name="home_img" value="1" /></label>
		<div><?php  echo Form::submit('submit', 'Отправить') ?>
			<?php if(isset($errors)):?>
			<?php foreach ($errors as $key => $value):?>
			<?php echo $value?>
			<?php endforeach?>
			<?php endif?>
		</div>
	</form>
</div>