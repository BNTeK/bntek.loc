<form method="POST">
<div>
  <div>
    <h2><?php echo __("cookName") ?></h2>
    <p>RU:<input type="text" name="name_ru" placeholder="Наименование на русском" value="<?php echo $model->name_ru?>"/><span class="error"><?php if(isset($errors['name_ru'])) echo $errors['name_ru']; ?></span></p>
    </div>
  <div>
    <h2><?php echo __("cookCost") ?></h2>
    <p><input type="text" name="cost" placeholder="Укажите Цену" value="<?php echo $model->cost?>" /><span class="error"><?php if(isset($errors['cost'])) echo $errors['cost']; ?></span></p>
    </div>
    <div>
    <h2><?php echo __("cookCost") ?></h2>
    <p><select name="categories">
    <?php foreach ($category as $value):?>
          <option value= <?php echo $value['id']?>>
            <?php echo $value['cname_'.$lang]?>
           </option>
  <?php endforeach?>
      </select>
        <?php if(isset($errors['categories'])) echo $errors['categories']; ?></span></p>
    </div>
  <div>
    <h2><?php echo __('cookRemark') ?></h2>
    <p>RU:<textarea name="remark_ru" placeholder="Описание на русском"><?php echo $model->remark_ru?></textarea><span class="error"><?php if(isset($errors['remark_ru'])) echo $errors['remark_ru']; ?></span></p>
  </div>
</div>

<button type="submit" name="submit"><?php echo __('cookSaveBtn') ?></button>
</form>