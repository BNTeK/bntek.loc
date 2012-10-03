<?php echo View::factory('admin/recallcheck')->bind('model',$data);?>
<div>
	<form method="POST">
		    <div><textarea rows="5" class="span5" name="text" size="255"><?php if(isset($data_reply)) echo $data_reply['text'];?></textarea><span class="error"><?php if(isset($errors['text'])) echo $errors['text']; ?></span></div>
		<?php  echo Form::submit('submit', 'Ответить') ?>
	</form>
</div>