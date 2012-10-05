  <?php foreach ($menu as $key => $value):?>
<div >
    <div class="Mname"><?php echo $value["name_$lang"]?></div>
     <p class="Mremark"><?php echo $value["remark_$lang"]?></p>
        <p class="Mcost">Цена: <span class="Mnumcost"><?php echo $value['cost']?> тг.шт</span></p> 
</div>
  <?php endforeach?>