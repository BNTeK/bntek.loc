<h1><?php echo $album->title; ?></h1>
<?php if(isset($msg)): ?>
	<div class="alert alert-info"><?php echo $msg; ?>
		<form>
		</form></div>
<?php endif; ?>
<?php foreach ($photos as $item): ?>
	<img src="<?php echo URL::site('img').'/'.$item->name; ?>" alt="<?php echo $item->alt; ?>">
	<p><?php echo $item->alt; ?></p>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $item->id; ?>">
		<p>
			<input type="submit" name="del" value="удалить" class="btn">
			<input type="submit" name="home" value="<?php echo ($item->home == 0)? 'на главную': 'с главной'; ?>" class="btn">
			<input type="submit" name="cover" value="на обложку" class="btn">
		</p>
	</form>	
	<br>
<?php endforeach; ?>
<br><br>
<form action="" method="POST">
	<p><input type="submit" name="del_this_album" value="удалить весь альбом" class="btn btn-danger"></p>
</form>