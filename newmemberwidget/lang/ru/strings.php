<?php

if(! function_exists("string_plural_select_ru")) {
function string_plural_select_ru($n){
	$n = intval($n);
	if ($n%10==1 && $n%100!=11) { return 0; } else if ($n%10>=2 && $n%10<=4 && ($n%100<12 || $n%100>14)) { return 1; } else if ($n%10==0 || ($n%10>=5 && $n%10<=9) || ($n%100>=11 && $n%100<=14)) { return 2; } else  { return 3; }
}}
$a->strings['New Member'] = 'Новичок';
$a->strings['Tips for New Members'] = 'Советы новичкам';
$a->strings['Save Settings'] = 'Сохранить настройки';
$a->strings['Message'] = 'Сообщение';
$a->strings['Your message for new members. You can use bbcode here.'] = 'Ваше сообщение новичкам. Вы можете использовать BBCode.';
$a->strings['Name of the local support group'] = 'Название местной группы поддержки';
$a->strings['If you checked the above, specify the <em>nickname</em> of the local support group here (i.e. helpers)'] = 'Если вы включили настройку выше, укажите <em>ник</em>местной группы поддержки пользователей.';
