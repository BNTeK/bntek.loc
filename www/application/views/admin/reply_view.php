<div>
<?php if(isset($model)):?>
	<?php foreach($model as $value):?>
		<div>
			<p>Имя: <?php echo $value['name'];?></p>
			<p>E-mail: <?php echo $value['email'];?></p>
			<p>Тема: <?php echo $value['theme'];?></p>
			<p>Сообщение: <?php echo $value['text'];?></p>
			<p>Время: <?php echo date("m.d.y , H:i:s", $value['post_time'])?></p>
			<?php echo '123'.$this->request->action()?> 
			<br/>
			<?php if (Auth::instance()->logged_in() and $this->request->action() !== 'recall_reply'):?>
			<p><a href="<?php echo URL::base();?>\admin\recall_reply\<?php echo $value['id'];?>">Ответить</a> Одобрить Удалить!</p>
			
		<?php endif?>
		</div>
	<?php endforeach ?>
	<?php endif?>	
</div>