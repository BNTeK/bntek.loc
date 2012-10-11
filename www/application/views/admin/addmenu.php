  <?php echo View::factory('admin/view_menu')->bind('menu',$menu)->bind('lang', $lang);?>
<form method="POST">
    <h2><?php echo __("cookName") ?></h2>
    <p>RU:<input type="text" name="name_ru" placeholder="Наименование на русском"/><span class="error"><?php if(isset($errors['name_ru'])) echo $errors['name_ru']; ?></span></p>
    <p>EN:<input type="text" name="name_en" placeholder="Наименование на английском"/><span class="error"><?php if(isset($errors['name_en'])) echo $errors['name_en']; ?></span></p>
    <p>KZ:<input type="text" name="name_kz" placeholder="Наименование на казахском"/><span class="error"><?php if(isset($errors['name_kz'])) echo $errors['name_kz']; ?></span></p>
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
    <p>RU:<textarea name="remark_ru" placeholder="Описание на русском" ></textarea><span class="error"><?php if(isset($errors['remark_ru'])) echo $errors['remark_ru']; ?></span></p>
    <p>EN:<textarea name="remark_en" placeholder="Описание на английском"></textarea><span class="error"><?php if(isset($errors['remark_en'])) echo $errors['remark_en']; ?></span></p>
    <p>KZ:<textarea name="remark_kz" placeholder="Описание на казахском"></textarea><span class="error"><?php if(isset($errors['remark_kz'])) echo $errors['remark_kz']; ?></span></p>

<button type="submit" name="submit"><?php echo __('cookAddBtn') ?></button>
</form>