<div>
	<?php if(isset($model)):?>
	
	<?php foreach($model as $key => $value):?>
		<?php foreach($value as $key2 => $value2):?>
			<div>
			<?php if($key2 == 'id'):?>
				<p><a href="<?php echo URL::base();?>admin/image_Del/<?php echo $value2;?>">x</a>
			<?php endif?>
			<?php if($key2 == 'name'):?>
				<img src="<?php echo URL::base();?>img/<?php echo $value2;?>">
			<?php endif?>
			</div>
		<?php endforeach?>
	<?php endforeach?>
	<?php endif?>	
</div>