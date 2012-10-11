<div class="recall">
<?php if(isset($model)):?>
	<?php foreach($model as $value):?>
		<div>
			<div class="recall_block">
			<p class="recall_top_line">Тема:<?php echo $value['theme'];?></p>
			<p class="recallname_line"><span class="recall_name">Имя: <?php echo $value['name'];?></span> <span class="recall_name">E-mail: <?php echo $value['email'];?></span></p>
			<p class="recall_mid_line">Сообщение: <?php echo $value['text'];?></p>
			<p class="recall_bot_line">Время: <?php echo date("m.d.y , H:i:s", $value['post_time'])?></p>
			</div>
			<?php if(isset($value['reply'])):?>
				<?php echo View::factory('admin/answer')->bind('model',$value['reply']);?>
			<?php endif?>
			<?php if (Auth::instance()->logged_in() and $action !== "recall_reply" ):?>
			<p><a href="<?php echo URL::base();?>\admin\recall_reply\<?php echo $value['id'];?>">Ответить</a> Одобрить <a href="<?php echo URL::base();?>\admin\recall_del\<?php echo $value['id'];?>">Удалить</a></p>
		<?php endif?>
		</div>
	<?php endforeach ?>
	<?php endif?>	
</div>