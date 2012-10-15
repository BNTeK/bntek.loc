<div>
	<form method="POST">
	<div>
		<label for="caption" >Заголовок:</label>
		<input type="text" name="caption"/>
		<?php echo $editor->render(TRUE,'ckeditor',TRUE);?>
	</div>
	<div>
		<label for="news">Новость:</label>
		<input type="radio" name="position" value="1"/>
		<label for="event">Акция:</label>
		<input type="radio" name="position" value="2"/>
	</div>
		<br/>
		<p><?php  echo Form::submit('submit', 'Сохранить') ?></p>
	</form>
</div>