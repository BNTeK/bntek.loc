    <script type="text/javascript">
        $(function() {
        var settings = { containerResizeSpeed: 350
            };
            $('#gallery a').lightBox(settings);
        });
    </script>
    <style type="text/css">
        #gallery
        {
            padding: 10px;
            width: 90%;
        }
        #gallery ul
        {
            list-style: none;
        }
        #gallery ul li
        {
            display: inline;
        }
        #gallery ul img
        {
            border: 5px solid rgba( 159, 65, 81, 0.2);
            border-width: 5px 5px 20px;
        }
        #gallery ul a:hover img
        {
            border: 5px solid #fff;
            border-width: 5px 5px 20px;
            color: #fff;
        }
        #gallery ul a:hover
        {
            color: #fff;
        }
    </style>
    <div>
    <div id="gallery">
        <ul>
<?php if(isset($model)):?>    
    <?php foreach($model as $value ):?>
            <li><a href="<?php echo URL::base();?>img/<?php echo $value['name'];?>" title="<?php echo $value['alt']?>">
                <img src="<?php echo URL::base();?>img/<?php echo $value['name'];?>" width="100" alt="" />
            </a></li>
    <?php endforeach?>
<?php endif?>
        </ul>
        
    </div>
       <?php echo $pagination?>
</div>

<script type="text/javascript">
$('a').lightBox({
  overlayBgColor: '#363',
  txtImage: 'Фото',
  txtOf: 'из',
  txtPrev: ' Назад',
  txtNext: ' Вперед',
  keyToClose: 'q',
  keyToPrev: 'z',
  keyToNext: 'c'
});

</script>
