<div class="recall">
<?php if(isset($model)):?>
	<?php foreach($model as $value):?>
		<div>
			<p><big><b><?php echo $value->name; ?></b></big>&nbsp;&nbsp;&nbsp;&nbsp;<small><?php echo strftime("%e %B %Y в %H:%M", $value->post_time)?></small></p>
			<p>"<?php echo $value->theme; ?>"</p>
			<p><?php echo $value->text; ?></p>
		</div>
		<div>
			
			<?php if(isset($value->reply->id)):?>
				

					<div class='answer'>
						<p><big><b>Администрация</b></big>&nbsp;&nbsp;&nbsp;&nbsp;<small><?php echo strftime("%e %B %Y в %H:%M", $value->reply->post_time)?></small></p>
						<p><?php echo $value->reply->text;?></p>
					</div>
			<?php endif?>
			
			<?php if (Auth::instance()->logged_in() and $action !== "recall_reply" ):?>
				<p> <?php echo $value->email; ?>
					<a href="<?php echo URL::base();?>\admin\recall_reply\<?php echo $value->id;?>">Ответить</a> 
					<?php if($value->status == 0):?>
						<a href="<?php echo URL::base();?>\admin\recall_status\<?php echo $value->id;?>">Одобрить</a> 
					<?php endif?>
					<a href="<?php echo URL::base();?>\admin\recall_del\<?php echo $value->id;?>">Удалить</a>
				</p>
			<?php endif?>


		</div>
		<hr>
	<?php endforeach ?>
<?php endif?>	
</div>