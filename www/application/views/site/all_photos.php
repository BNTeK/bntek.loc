<?php foreach($all as $key => $item): ?>
	<?php $k = $key+1; ?>
	<a href="<?php echo ($k != 1) ? URL::site('gallery/'.$k): URL::site('gallery') ; ?>">
		<img style="width: 100px;" src="<?php echo URL::site('img/'.$item->name); ?>" alt="<?php echo $item->alt; ?>">
	</a>

<?php endforeach; ?>