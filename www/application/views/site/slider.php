<div id="main">
	<div class="slider">
		<div class="slide-list">
			<div class="slide-wrap">
				<?php foreach($img as $value):?>
				<div class="slide-item">
					<img width="170" src="<?php echo URL::base();?>img/<?php echo $value->name;?>" alt="" />
				</div>
				<?php endforeach ?>
				
				
			</div>
			<div class="clear"></div>
		</div>
		<div name="prev" class="navy prev-slide"></div>
		<div name="next" class="navy next-slide"></div>
		<div class="auto play"></div>
	</div>
</div>

<script src="<?php echo URL::base(); ?>public/js/slider.js"></script>