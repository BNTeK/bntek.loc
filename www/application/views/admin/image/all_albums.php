[all_albums]
<?php foreach($albums as $item): ?>
	<div>
		<p><a href="<?php echo URL::site('image/albums').'/'.$item->id; ?>"><?php echo $item->title; ?></a></p>
	</div>
<?php endforeach; ?>
