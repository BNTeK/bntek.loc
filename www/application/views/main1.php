<title><?php echo $title ?></title>
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
    
      <div class="navbar">
  <div class="navbar-inner">
   <ul class="nav">
      <li><a href="<?php echo URL::base();?>main/langChange/Ru">ru</a></li>
      <li><a href="<?php echo URL::base();?>main/langChange/En">en</a></li>
      <li><a href="<?php echo URL::base();?>main/langChange/Kz">kz</a></li>
    </ul>
  </div>
</div>

    <?php echo $content?>