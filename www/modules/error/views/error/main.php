<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title><?php echo $title;?></title>
<meta charset="utf-8">
<style type="text/css">
    *{ margin: 0; padding: 0; }
    h1 { font: normal 20px Tahoma, Verdana, Arial, sans-serif; color: #222; }
    p { font: normal 14px Tahoma, Verdana, Arial, sans-serif; color: #444; margin-top: 15px; }
    a { color: #06f; }
    #errormesage { margin: 0 auto; margin-top:  20px; width: 700px; }
</style>
</head>
<body>
    <div id="errormesage">
        <?php if($message): ?>
        <h1><?php echo $message; ?></h1>
        <?php else: ?>
        <h1>404. Страница не найдена</h1>
        <p>Страница по адресу <?php echo $page; ?> не найдена</p>
        <?php endif; ?>
        <p>Печалька:(</p>
        <p>Может на <a href="<?php echo URL::base();?>">главную</a>?</p>
    </div>
</body>
</html>