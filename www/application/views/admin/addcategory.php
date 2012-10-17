
<div>
	<?php echo View::factory('admin/addcategory_view')->bind('category',$category)->bind('lang', $lang);?>
<form method="POST">
	<div>
		<p><input type="text" name="cname_ru" placeholder="" value = "<?php if(isset($category_edit)) echo $category_edit->cname_ru;?>"/><span class="error"><?php if(isset($errors['сname_ru'])) echo $errors['сname_ru']; ?></span></p>
	</div>
	<button type="submit" name="submit"><?php echo __('category_btn') ?></button>
</form>
</div>