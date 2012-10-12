<p><?php echo $album->title; ?></p>
<?php foreach ($photos as $item): ?>
	<img src="<?php echo URL::site('img').'/'.$item->name; ?>" alt="<?php echo $item->alt; ?>">
	<p><?php echo $item->alt; ?></p>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $item->id; ?>">
		<p><input type="submit" name="del" value="Удалить" class="btn"></p>
	</form>	
	<br>
<?php endforeach; ?>