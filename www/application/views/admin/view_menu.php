  <?php foreach ($menu as $value):?>
  <p class="Mcname"><?php echo $value['cname_'.$lang];?></p>
  <?php foreach ($value as $value2):?>
  <?php if (is_string($value2)) continue; ?>
<div class="menu_block">
    <div class="Mname"><?php echo $value2["name_$lang"]?></div>
     <div class="Mremark"><?php echo $value2["remark_$lang"]?></div>
     <div class="Mcost">
     <?php if (Auth::instance()->logged_in()):?>
     <a href="<?php echo URL::site();?>admin/cookMenu_edit/<?php echo $value2['id'];?>">Редактировать</a>
     <a href="<?php echo URL::site();?>admin/cookMenu_del/<?php echo $value2['id'];?>">Удалить</a>
    <?php endif; ?>
     <span class="Mnumcost"><?php echo $value2['cost']?> тг.</span></div> 

</div>
<?php endforeach?>
  <?php endforeach?>