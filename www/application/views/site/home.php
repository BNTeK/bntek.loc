<div class="static_home">
	<p><img src="../public/img/banners/1.jpg" class="rightimg">V.I.P залы на 12 персон с отдельным входом, 100 посадочных мест.
	Европейская кухня, обширная винная карта: Грузия, Африка, Аргентина, Чили, Франция, Италия
	Живая музыка, баян, гитара, труба, клавиши, вокал. Учитивый персоонал и уютная обстановка</p> 
</div>
<?php if(isset($model)):?>
	<?php if(isset($model['events'])):?>
		<?php foreach($model['events'] as $value):?>
		<div>
			<p><?php echo $value['caption']?></p>
			<?php echo $value['text'];?>
		</div>
		<?php endforeach?>
	<?php endif?>
<?php endif?>		