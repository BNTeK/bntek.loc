<div>
	<div>
		<label for="caption" >Заголовок:</label>
		<input type="text" name="caption"/>
		<?php echo $editor->render(TRUE,'ckeditor',TRUE);?>
	</div>
	<label for="news">Новость:</label>
	<input type="radio" name="news" value="1"/>
	<label for="event">Акция:</label>
	<input type="radio" name="event" value="1"/>


</div>