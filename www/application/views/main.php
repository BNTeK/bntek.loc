<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $title ?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- START LESS-->
<link rel="stylesheet/less" type="text/css" href="<?php echo URL::base(); ?>public/less/bootstrap.less">
<link rel="stylesheet/less" type="text/css" href="<?php echo URL::base(); ?>public/less/responsive.less">

<script src="<?php echo URL::base(); ?>public/js/less.js" type="text/javascript"></script>
<!-- END LESS -->

<?php foreach ($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
          rel="stylesheet" type="text/css" />
      <?php endforeach; ?>
    
<?php foreach ($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/js/<?php echo $script?>.js" type="text/javascript"></script>
      <?php endforeach; ?>
</head>

<body>

<div id="wrapper">

	<div id="header">
		<div class ="link_main">
			<a class="link" href='<?php echo URL::base();?>'> </a>
		</div>
		<div class="lang"><a href="<?php echo URL::base();?>main/langChange/Ru"><img src="<?php echo URL::base();?>/public/img/style_img/flags/Ru.jpg" ></a>
      		 <a href="<?php echo URL::base();?>main/langChange/En"><img src="<?php echo URL::base();?>/public/img/style_img/flags/Eng.jpg" ></a>
       		 <a href="<?php echo URL::base();?>main/langChange/Kz"><img src="<?php echo URL::base();?>/public/img/style_img/flags/Kaz.jpg" ></a></div>
		
	</div><!-- #header-->
	<div id="header_slider">SLIDER</div>
	<div id="middle">

		<div id="container">
			<div id="content">
				<h1>CONTENT</h1>
				    <?php echo $content?>
		</div><!-- #content-->
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
			<?php if(!Auth::instance()->logged_in()):?>
			<div id="menu_block">
				<br/>
				<p class="menu_link menu_link_solo menulink"><a href="<?php echo URL::base();?>main/menu/">Меню</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>main/menu/">Галерея</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>main/recall/">Отзывы</a></p> 
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>main/menu/">контакты</a></p>
			</div>
			<?php endif?>
			<?php if(Auth::instance()->logged_in()):?>
			<div id="admin_menu_block" >
				<br/>
				<p class="menu_link menu_link_solo menulink"><a href="<?php echo URL::base();?>/admin/cookmenu_add">Меню</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>/admin/category_add">Категории</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>/admin/image_view">Галерея</a></p> 
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>/admin/image_view">Информация</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::base();?>/admin/image_view">Контакты</a></p>
				<p class="menu_link menulink"> <a href="<?php echo URL::base();?>/admin/logout">Выход</a></p>
			</div>
			<?php endif?>
			
			<div class="statements">
				<span class="statements_caption">Заголовок</span>
				<p>текст текст текст текст текст текст текст текст текст текст текст текст</p>
				<span class="statements_autor"> Автор</span>
			</div>
		</div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

	<div id="footer">
		<div id="footer_line">тест</div>
		</br>
	</div><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>