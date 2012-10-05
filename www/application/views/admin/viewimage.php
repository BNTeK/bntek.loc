<div>
	<?php if(isset($model)):?>
	
			<div>
				<img src="<?php echo URL::base();?>img/<?php echo $model[$id-1]['name'];?>">
				<center><p><a href="<?php echo URL::base();?>admin/image_Del/<?php echo $model[$id-1]['id'];?>">Удалить</center></a>
			</div>
	<?php echo $pagination?>
	<?php endif?>	
</div>