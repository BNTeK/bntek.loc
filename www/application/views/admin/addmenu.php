  <?php echo View::factory('admin/view_menu')->bind('menu',$menu)->bind('lang', $lang);?>
  <br/>
<form method="POST">
    <h2><?php echo __("cookName") ?></h2>
    <p><input type="text" name="name_ru" placeholder="Наименование на русском"/><span class="error"><?php if(isset($errors['name_ru'])) echo $errors['name_ru']; ?></span></p>
    <h2><?php echo __("cookCost") ?></h2>
    <p><input type="text" name="cost" placeholder="Укажите Цену" /><span class="error"><?php if(isset($errors['cost'])) echo $errors['cost']; ?></span></p>
    <h2><?php echo __("cookCateg") ?></h2>
    <p><select name="categories">
    <?php foreach ($category as $key => $value):?>
          <option value= <?php echo $value['id']?>>
           <?php echo $value["cname_$lang"]?>
           </option>
    <?php endforeach?>
      </select>
        <?php if(isset($errors['categories'])) echo $errors['categories']; ?></span></p>
    <h2><?php echo __('cookRemark') ?></h2>
    <p><textarea name="remark_ru" placeholder="Описание на русском" ></textarea><span class="error"><?php if(isset($errors['remark_ru'])) echo $errors['remark_ru']; ?></span></p>

<button type="submit" name="submit"><?php echo __('cookAddBtn') ?></button>
</form>