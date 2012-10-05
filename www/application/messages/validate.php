<?php defined('SYSPATH') or die('No direct script access.');
return array(
/*
	'not_empty'    => 'Поле <u>:field</u> не должно быть пустым',
	'matches'      => 'Поле <u>:field</u> должно совпадать с полем :param<u>:field</u>',
	'regex'        => 'Поле <u>:field</u> не соответствует необходимому формату',
	'exact_length' => 'Поле <u>:field</u> должно иметь длину :param<u>:field</u> символов',
	'min_length'   => 'Поле <u>:field</u> должно иметь длину как минимум :param<u>:field</u> символов',
	'max_length'   => 'Поле <u>:field</u> должно быть в длину не более чем :param<u>:field</u> символов',
	'in_array'     => 'Поле <u>:field</u> должно быть одной из возможных опций',
	'digit'        => 'Поле <u>:field</u> должно цифрой',
	'decimal'      => 'Поле <u>:field</u> должно быть десятичным числом с :param<u>:field</u> знаками',
	'range'        => 'Поле <u>:field</u> должно быть в диапазоне от :param<u>:field</u> до :param2',
	'email'        => 'Поле <u>:field</u> должно содержать реальный e-mail',
*/
'not_empty'=> 'Поле <u>:field</u> должно быть непустым',
'regex'=> 'Поле <u>:field</u> должно удовлетворять регулярному выражению',
'min_length'=> '<u>:field</u> Минимально допустимое количество символов',
'max_length'=>'<u>:field</u> Максимально допустимое количество символов в значения',
'exact_length'=>'Поле <u>:field</u>  должно содержать указанное количество символов',
'email'=>'<i> - Поле <u>:field</u> должно содержать email-адрес</i>',
'email_domain'=>'Проверка наличия домена, указанного в строке с email адресом',
'url'=>'Поле <u>:field</u> должно содержать правильно оформленный URL',
'ip'=>'Поле <u>:field</u>  должно содержать допустимый IP - адрес',
'phone'=>'Поле <u>:field</u>  должно содержать телефонный номер',
'credit_card'=>'Поле <u>:field</u> должно содержать номер кредитной карточки',
'date'=>'Поле <u>:field</u> должно содержать дату (и время)',
'alpha'=>'Поле <u>:field</u> может содержать только символы букв',
'alpha_dash'=>'Поле <u>:field</u>  может содержать только символы букв и тире',
'alpha_numeric'=>'Поле <u>:field</u>  может содержать только буквы и цифры',
'digit'=>'Поле <u>:field</u> может содержать только целое число',
'decimal'=>'Поле <u>:field</u> должно быть десятичным числом или Полем с плавающей точкой',
'numeric'=>'Поле <u>:field</u>  может содержать только символы цифр',
'range'=>'Поле <u>:field</u> должно находиться в пределах указанного диапазона',
'color'=>'Поле <u>:field</u> должно содержать цвет в HEX представлении',
'matches'=>'Поле <u><u>:field</u></u> сравнивается с полем  <u>предумайте пароль</u>',
'Upload::image'=> 'В поле <u>:field</u> нужна картинка',

'Helper_Upload::image' => 'Допустимый размер файла не больше 3MB.',
'Helper_Upload::size' => 'Допустимый размер файла не больше 3MB.',
'Helper_Upload::not_empty' => 'Вы не выбрали файл для загрузки.',
'Helper_Upload::image_valid' => 'Изображение может быть только в формате png, jpg, gif.',
'Helper_Upload::image_min_size' => 'Минимальный размер изображения 130х130 пикселей.',
'Helper_Upload::type' => 'Допустимые расширения файла только *.jpg, *.png, *.gif.',

'captcha' => array (
       // 'Captcha::valid' => 'The characters you entered did not match the image. Please try again.',
        //'not_empty' => 'You must enter the characters from the image.')
		'required'=>'Введите текст с картики в поле Код',
),
 'Model_Tools::some_rule'=>'<i> - Недопустимый символ!</i>',
    
);