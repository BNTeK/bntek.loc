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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
</head>

<body>

<div id="wrapper">

	<div id="header">
		<div class ="link_main">
			<a class="link" href='<?php echo URL::base();?>'> </a>
		</div>
		
	</div><!-- #header-->
	<div id="header_slider">
		<?php echo $slider;?>
	</div>
	<div id="middle">

		<div id="container">
			<div id="content">
				    <?php echo $content?>
		</div><!-- #content-->
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
			<?php if(!$auth->logged_in()):?>
			<div id="menu_block">
				<br/>
				<p class="menu_link menu_link_solo menulink"><a href="<?php echo URL::base();?>main/menu/">Меню</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::site('gallery');?>">Галерея</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::site('main/recall');?>">Отзывы</a></p> 
				<p class="menu_link menulink"><a href="<?php echo URL::site('main/menu');?>">контакты</a></p>
			</div>
			<?php endif?>
			<?php if($auth->logged_in()):?>
			<div id="admin_menu_block" >
				<br/>
				<p class="menu_link menu_link_solo menulink"><a href="<?php echo URL::base('admin/cookmenu_add');?>">Меню</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::site('admin/category_add');?>">Категории</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::site('image');?>">Галерея</a></p> 
				<p class="menu_link menulink"><a href="<?php echo URL::site('admin/page_add');?>">Информация</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::site('quote');?>">Цитаты</a></p>
				<p class="menu_link menulink"><a href="<?php echo URL::base('admin/image_view');?>">Контакты</a></p>
				<p class="menu_link menulink"> <a href="<?php echo URL::base('admin/logout');?>">Выход</a></p>
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
	</div><!-- #footer -->

</div><!-- #wrapper -->
<script type="text/javascript">
$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
});
</script>
</body>
</html>