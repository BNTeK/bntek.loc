<?php echo View::factory('admin/addcategory_view')->bind('category',$category)->bind('lang', $lang);?>
<div>
<form method="POST">
	<div>
		<p>RU:<input type="text" name="сnameRU" placeholder=""/><span class="error"><?php if(isset($errors['сnameRU'])) echo $errors['сnameRU']; ?></span></p>
    	<p>EN:<input type="text" name="сnameEN" placeholder=""/><span class="error"><?php if(isset($errors['сnameEN'])) echo $errors['сnameEN']; ?></span></p>
    	<p>KZ:<input type="text" name="сnameKZ" placeholder=""/><span class="error"><?php if(isset($errors['сnameKZ'])) echo $errors['сnameKZ']; ?></span></p>
	</div>
	<button type="submit" name="submit"><?php echo __('cookCAddBtn') ?></button>
</form>
</div>