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
		<h1>ВинограД!</h1>
		<div class="lang"><a href="<?php echo URL::base();?>main/langChange/Ru">ru</a></li>
      		 <a href="<?php echo URL::base();?>main/langChange/En">en</a></li>
       		 <a href="<?php echo URL::base();?>main/langChange/Kz">kz</a></li></div>
		<div id="slider">SLIDER</div>
	</div><!-- #header-->
	<div id="middle">

		<div id="container">
			<div id="content">
				<h1>CONTENT</h1>
				    <?php echo $content?>
		<a href="#" class="expand">Expand column</a>			</div><!-- #content-->
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
			<?php if(!Auth::instance()->logged_in()):?>
			<div id="menu_block">
				<h2>LEFT</h2>
				<p><a href="<?php echo URL::base();?>main/menu/">Меню</a></p>
				<p>Галерея</p>
				<p>Отзывы</p> 
				<p>контакты</p>
			</div>
			<?php endif?>
			<?php if(Auth::instance()->logged_in()):?>
			<div id="admin_menu_block" >
				<br/>
				<p class="menu_link menu_link_solo"><a href="<?php echo URL::base();?>/admin/cookmenu_add">Меню</a></p>
				<p class="menu_link"><a href="<?php echo URL::base();?>/admin/category_add">Категории</a></p>
				<p class="menu_link"><a href="<?php echo URL::base();?>/admin/image_view">Галерея</a></p> 
				<p class="menu_link"><a href="<?php echo URL::base();?>/admin/image_view">Информация</a></p>
				<p class="menu_link"><a href="<?php echo URL::base();?>/admin/image_view">Контакты</a></p>
				<p class="menu_link"> <a href="<?php echo URL::base();?>/admin/image_view">Выход</a></p>
			<?php endif?>
			</div>
			
		</div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

	<div id="footer">
		<div id="footer_line">тест</div>
		<br/>
	</div><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>