
<div class="cellsBlock">
  <div class="cellLeft">
    <h2><?php echo __("cookName") ?></h2>
    <?php foreach ($menu as $key => $value):?>
      <?php foreach ($value as $key2 => $value2):?>
      <?php if($key2 == 'id'):?>
          <p><a href="<?php echo URL::base();?>admin/cookmenu_Del/<?php echo $value2;?>">x</a>
        <?php endif?>
        <?php if($key2 == 'name'.$lang):?>
          <?php echo $value2; ?></p>
        <?php endif?>  
      <?php endforeach?>
    <?php endforeach?>
  </div>
  <div class="cellMiddle">
    <h2><?php echo __("cookCost") ?></h2>
    <?php foreach ($menu as $key => $value):?>
      <?php foreach ($value as $key2 => $value2):?>
        <?php if($key2 == 'cost'):?>
          <div><?php echo $value2; ?></div>
        <?php endif?>  
      <?php endforeach?>
    <?php endforeach?>
    </div>
    <div class="cellMiddle2">
    <h2><?php echo __("cookCategory") ?></h2>
    <?php foreach ($menu as $key => $value):?>
      <?php foreach ($value as $key2 => $value2):?>
        <?php if($key2 == 'сname'.$lang):?>
          <div><?php echo $value2; ?></div>
        <?php endif?>  
      <?php endforeach?>
    <?php endforeach?>
    </div>
  <div class="cellRight">
    <h2><?php echo __('cookRemark') ?></h2>
    <?php foreach ($menu as $key => $value):?>
      <?php foreach ($value as $key2 => $value2):?>
        <?php if($key2 == 'remark'.$lang):?>
          <div><?php echo $value2; ?></div>
        <?php endif?>  
      <?php endforeach?>
    <?php endforeach?>
    </div>
  </div>
</div>