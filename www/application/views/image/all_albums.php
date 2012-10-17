<?php foreach($albums as $item): ?>
	<div class="all_albums">
		<div class="one_album">
			<a href="<?php echo URL::site('/album').'/'.$item->id; ?>">
				<img src="<?php echo (isset($item->cover->name))?URL::site('img').'/'.$item->cover->name: URL::site('img').'/no_image.jpg'; ?>" alt="">
			</a>
			<p><a href="<?php echo URL::site('album').'/'.$item->id; ?>"><?php echo $item->title; ?></a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="divclear"></div>
