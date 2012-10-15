
<div>
	<?php echo View::factory('admin/addcategory_view')->bind('category',$category)->bind('lang', $lang);?>
<form method="POST">
	<div>
		<p>RU:<input type="text" name="cname_ru" placeholder=""/><span class="error"><?php if(isset($errors['сname_ru'])) echo $errors['сname_ru']; ?></span></p>
	</div>
	<button type="submit" name="submit"><?php echo __('cookCAddBtn') ?></button>
</form>
</div>