  <?php echo View::factory('admin/view_menu')->bind('menu',$menu)->bind('lang', $lang);?>
<form method="POST">
<div class="cellsBlock">
  <div class="cellLeft">
    <h2><?php echo __("cookName") ?></h2>
    <p>RU:<input type="text" name="nameRU" placeholder="Наименование на русском"/><span class="error"><?php if(isset($errors['nameRU'])) echo $errors['nameRU']; ?></span></p>
    <p>EN:<input type="text" name="nameEN" placeholder="Наименование на английском"/><span class="error"><?php if(isset($errors['nameEN'])) echo $errors['nameEN']; ?></span></p>
    <p>KZ:<input type="text" name="nameKZ" placeholder="Наименование на казахском"/><span class="error"><?php if(isset($errors['nameKZ'])) echo $errors['nameKZ']; ?></span></p>
    </div>
  <div class="cellMiddle">
    <h2><?php echo __("cookCost") ?></h2>
    <p><input type="text" name="cost" placeholder="Укажите Цену" /><span class="error"><?php if(isset($errors['cost'])) echo $errors['cost']; ?></span></p>
    </div>
    <div class="cellMiddle2">
    <h2><?php echo __("cookCost") ?></h2>
    <p><select name="categories">
    <?php foreach ($category as $key => $value):?>
        <?php foreach ($value as $key2 => $value2):?>

        <?php if($key2 == 'id'):?>
          <option value= <?php echo $value2?>>
          <?php endif?>
          <?php if($key2 == 'сname'.$lang):?>
           <?php echo $value2?>
           </option>
        <?php endif?>
    <?php endforeach?>
  <?php endforeach?>
      </select>
        <?php if(isset($errors['categories'])) echo $errors['categories']; ?></span></p>
    </div>
  <div class="cellRight">
    <h2><?php echo __('cookRemark') ?></h2>
    <p>RU:<textarea name="remarkRU" placeholder="Описание на русском" ></textarea><span class="error"><?php if(isset($errors['remarkRU'])) echo $errors['remarkRU']; ?></span></p>
    <p>EN:<textarea name="remarkEN" placeholder="Описание на английском"></textarea><span class="error"><?php if(isset($errors['remarkEN'])) echo $errors['remarkEN']; ?></span></p>
    <p>KZ:<textarea name="remarkKZ" placeholder="Описание на казахском"></textarea><span class="error"><?php if(isset($errors['remarkKZ'])) echo $errors['remarkKZ']; ?></span></p>
  </div>
</div>

<button type="submit" name="submit"><?php echo __('cookAddBtn') ?></button>
</form>