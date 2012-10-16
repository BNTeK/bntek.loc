

		<div class="static_home"><img src="../public/img/banners/1.jpg" class="rightimg">V.I.P залы на 12 персон с отдельным входом, 100 посадочных мест.
		Европейская кухня, обширная винная карта: Грузия, Африка, Аргентина, Чили, Франция, Италия
		Живая музыка, баян, гитара, труба, клавиши, вокал. Учитивый персоонал и уютная обстановка</div>
		<br/>
		<div class="home_block">
	<?php if(isset($model)):?>
		<?php if(isset($model['events'])):?>
			<?php foreach($model['events'] as $value):?>
		<div class="news_block">
			<p class="news_caption_line"><span class="news_caption"><?php echo $value['caption']?> | Акция</span></p>
			<span class="news_text"><?php echo $value['text'];?></span>
		</div>
		<?php endforeach?>
	<?php endif?>
	<?php if(isset($model['news'])):?>
		<?php foreach($model['news'] as $value):?>
		<div class="news_block">
			<p class="news_caption_line"><span class="news_caption"><?php echo $value['caption']?> | Новость</span></p>
			<span class="news_text"><?php echo $value['text'];?></span>
		</div>
		<?php endforeach?>
	<?php endif?>
<?php endif?>	
	</div>	