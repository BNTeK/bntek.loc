<div>
<?php if(isset($model)):?>
	<?php foreach($model as $key => $value):?>
		<div>
			<p>Имя: <?php echo $value['name'];?></p>
			<p>E-mail: <?php echo $value['email'];?></p>
			<p>Тема: <?php echo $value['theme'];?></p>
			<p>Сообщение: <?php echo $value['text'];?></p>
			<p>Время: <?php echo date("m.d.y , H:i:s", $value['post_time'])?></p>
			<br/>
			<?php if (Auth::instance()->logged_in()):?>
			<p>Ответить Одобрить Удалить!</p>
		<?php endif?>
		</div>
	<?php endforeach ?>
	<?php endif?>	
</div>