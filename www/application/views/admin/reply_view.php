<div class="reply">
<?php if(isset($model)):?>
	<?php foreach($model as $value):?>
		<div>
			<p>Имя: <?php echo $value['name'];?></p>
			<p>E-mail: <?php echo $value['email'];?></p>
			<p>Тема: <?php echo $value['theme'];?></p>
			<p>Сообщение: <?php echo $value['text'];?></p>
			<p>Время: <?php echo date("m.d.y , H:i:s", $value['post_time'])?></p>
			<?php echo '123'.$this->request->action()?> 
			
		<?php endif?>
		</div>
	<?php endforeach ?>
	<?php endif?>	
</div>