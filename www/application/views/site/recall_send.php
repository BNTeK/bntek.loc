<?php echo View::factory('admin/recallcheck')->bind('model',$model)->bind('action',$action);?>
<div class="recall">
	<form method="POST">
		<div class="input-prepend">
              <span class="add-on">@</span>
              <input class="span3" name="email" size="20" type="text" placeholder="Email"><span class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></span>
        </div>
        <div class="input-prepend">
              <span class="add-on">Name:</span>
              <input class="span3" name="name" size="20" type="text" placeholder="Name"><span class="error"><?php if(isset($errors['name'])) echo $errors['name']; ?></span>
        </div>
        <div class="input-prepend">
              <span class="add-on">Тема:</span>
              <input class="span3" name="theme" size="20" type="text" placeholder="<?php echo __('theme')?>"><span class="error"><?php if(isset($errors['theme'])) echo $errors['theme']; ?></span>
        </div>
        <div><textarea rows="5" class="span5" name="text" size="255"></textarea><span class="error"><?php if(isset($errors['text'])) echo $errors['text']; ?></span></div>
    <p><input type="submit" name="submit" value="Отправить" /></p>
	</form>
</div>