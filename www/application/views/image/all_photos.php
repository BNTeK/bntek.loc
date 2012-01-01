<h1 class="good_h1"><?php echo $album->title; ?></h1>
<?php foreach($all as $key => $item): ?>
		<a id="single_image" rel="example_group" href="<?php echo URL::site('img/'.$item->name); ?>"><img class="img-polaroid" style="max-width: 150px; max-height: 150px; margin: 5px;" src="<?php echo URL::site('img/'.$item->name); ?>" alt=""/></a>
<?php endforeach; ?>
