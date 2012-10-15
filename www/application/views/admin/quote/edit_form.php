<form class="form-horizontal" action="" method="POST">
  <fieldset>
    <legend> </legend>
    <div class="control-group">
      <label class="control-label" for="input01">Заголовок</label>
      <div class="controls">
        <input type="text" name="title" class="input-xlarge" id="input01" value="<?php echo $data['title']; ?>">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="input02">Текст</label>
      <div class="controls">
        <textarea name="text" name="text" class="input-xlarge" id="input02"><?php echo $data['text']; ?></textarea>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="input03">Автор</label>
      <div class="controls">
        <input type="text" name="autor" class="input-xlarge" id="input03" value="<?php echo $data['autor']; ?>">
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <input type="submit" class="btn" name="edit" value="изменить">
      </div>
    </div>
  </fieldset>
</form>