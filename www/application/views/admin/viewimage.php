<div>
	<?php if(isset($model)):?>
	
			<div>
				<h3>Галлерея</h3>
				<img class="img_view" src="<?php echo URL::base();?>img/<?php echo $model[$id-1]['name'];?>">
				<?php if (Auth::instance()->logged_in()):?>
				<center><p><a href="<?php echo URL::base();?>admin/image_Del/<?php echo $model[$id-1]['id'];?>">Удалить</center></a>
				<?php endif?>
			</div>
	<?php echo $pagination?>
	<?php endif?>	
</div>