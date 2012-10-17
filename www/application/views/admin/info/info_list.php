<center><a href="<?php echo URL::site("admin/news_add");?>">Добавить Новость или Акцию</a> | <a href="<?php echo URL::site("admin/news_list");?>">Список Новостей и Акций</a></center>
<div class = "list_block"?>
		
		<table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Заголовок новости:</th>
                  <th>Тип Новости</th>
                  <th>Удалить Новость</th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach($model as $value):?>
                <tr>
                  <td><?php echo $value->id;?></td>
                  <td><a href="<?php echo URL::site("admin/news_edit/$value->id");?>"><?php echo $value->caption;?></a></td>
                  <td>
                  	<?php if($value->position == 1) echo 'Новость'?>
                  	<?php if($value->position == 2) echo 'Акция'?>
                  </td>
                  <td><a href="<?php echo URL::site("admin/news_del/$value->id");?>">Удалить</a></td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>
	
</div>

