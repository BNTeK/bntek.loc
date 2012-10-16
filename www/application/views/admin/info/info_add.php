<center><a href="<?php echo URL::site("admin/news_add");?>">Добавить Новость или Акцию</a> | <a href="<?php echo URL::site("admin/news_list");?>">Список Новостей и Акций</a></center>
<div>
	<form method="POST">
	<div>
		<label for="caption" >Заголовок:</label>
		<input type="text" name="caption" value=" <?php if(isset($model)) echo $model['caption']?>"/>
		<?php echo $editor->render(TRUE,'ckeditor',TRUE);?>
	</div>
	<div>
		<label for="news">Новость:</label>
		
		<input type="radio" name="position" value="1" <?php if(isset($model) and $model['position'] == 1):?> checked <?php endif?>/>
		<label for="event">Акция:</label>
		<input type="radio" name="position" value="2" <?php if(isset($model) and $model['position'] == 2):?> checked <?php endif?>/>
	</div>
		<br/>
		<p><?php  echo Form::submit('submit', 'Сохранить') ?></p>
	</form>
</div>