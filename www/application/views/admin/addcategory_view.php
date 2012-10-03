<div class="cellsBlock">
  <div class="cellCategory">
    <h2><?php echo __("cellCategory") ?></h2>
    <?php foreach ($category as $key => $value):?>
      <?php foreach ($value as $key2 => $value2):?>
      <?php if($key2 == 'id'):?>
          <p><a href="<?php echo URL::base();?>admin/category_Del/<?php echo $value2;?>">x</a>
        <?php endif?> 
        <?php if($key2 == 'сname'.$lang):?>
          <?php echo $value2; ?></p>
        <?php endif?>
         
      <?php endforeach?>
    <?php endforeach?>
    </div>
  
  