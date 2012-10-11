<div class="cellsBlock">
  <div class="cellCategory">
    <h2><?php echo __("cellCategory") ?></h2>
    <?php foreach ($category as $key => $value):?>
     <p> <?php echo $value["cname_$lang"] ?><a href="<?php echo URL::base();?>admin/category_Del/<?php echo $value['id'];?>">x</a>
    <?php endforeach?>
    </div>
  
  </div>