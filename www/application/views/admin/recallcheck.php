<div class="recall">
<?php if(isset($model)):?>
	<?php foreach($model as $value):?>
		<div>
			<p><big><?php echo $value->name; ?></big> <?php echo date("m.d.y , H:i:s", $value->post_time)?> <?php echo getdate("m.d.y , H:i:s", $value->post_time)?></p>
			<p><?php echo $value->theme; ?></p>
			<p><?php echo $value->text; ?></p>
		</div>
		<div>
			
			<?php if(isset($value->reply->id)):?>
				<?php echo View::factory('admin/answer')->bind('model',$value->reply);?>
			<?php endif?>
			
			<?php if (Auth::instance()->logged_in() and $action !== "recall_reply" ):?>
				<p>
					<a href="<?php echo URL::base();?>\admin\recall_reply\<?php echo $value->id;?>">Ответить</a> 
					<?php if($value->status == 0):?>
						<a href="<?php echo URL::base();?>\admin\recall_status\<?php echo $value->id;?>">Одобрить</a> 
					<?php endif?>
					<a href="<?php echo URL::base();?>\admin\recall_del\<?php echo $value->id;?>">Удалить</a>
				</p>
			<?php endif?>


		</div>
		<br><br><br>
	<?php endforeach ?>
<?php endif?>	
</div>