

		<div class="static_home"><img src="../public/img/banners/1.jpg" class="rightimg">
			<h3>Добро пожаловать в ресторан VinoGrad!</h3>
	<p style="text-indent:20px;text-align:justify;">Изысканная кухня, незабываемая атмосфера и уютная обстановка ресторана VinoGrad никого не оставят равнодушным.
К вашим услугам вип-залы на двенадцать персон с отдельным входом, комфортный банкетный зал на сто посадочных мест, учтивый персонал и высококлассный сервис.
В нашем  ресторане вас ждет отменная европейская кухня и обширная карта вин различного происхождения.</p><p style="text-indent:20px;text-align:justify;"> Порадуйте себя изысканными грузинскими, африканскими, чилийскими, аргентинскими, французскими и итальянскими винами.
Мы учитываем все Ваши пожелания, гарантируем обходительный персонал и живое музыкальное сопровождение.
<br><br><b>Приходите в ресторан VinoGrad! Мы ждем Вас!
У нас не включается процент за обслуживание</p></div>
		<br/>
		<div class="home_block">
	<?php if(isset($model)):?>
		<?php if(isset($model['recall_home'])):?>		
		<div class="">
			<h4>Последний отзыв:</h4>
			<h5><a href="<?php echo URL::site('reviews');?>"><?php echo $model['recall_home']->text;?></a></h5>
		</div>
		<hr>
	<?php endif?>
	<?php if(isset($model['news_home'])):?>
		<div class="">
			<p class=""><span class="news_caption"><?php echo $model['news_home']->caption?> | Новость</span></p>
			<span class="news_text"><?php echo $model['news_home']->text;?></span>
		</div>
		<hr>
	<?php endif?>
	<?php if(isset($model['event_home'])):?>
		<div class="">
			<p class=""><span class="news_caption"><?php echo $model['event_home']->caption?> | Новость</span></p>
			<span class="news_text"><?php echo $model['event_home']->text;?></span>
		</div>
	<?php endif?>
<?php endif?>	
	</div>	