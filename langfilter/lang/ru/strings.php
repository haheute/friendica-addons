<?php

if(! function_exists("string_plural_select_ru")) {
function string_plural_select_ru($n){
	$n = intval($n);
	if ($n%10==1 && $n%100!=11) { return 0; } else if ($n%10>=2 && $n%10<=4 && ($n%100<12 || $n%100>14)) { return 1; } else if ($n%10==0 || ($n%10>=5 && $n%10<=9) || ($n%100>=11 && $n%100<=14)) { return 2; } else  { return 3; }
}}
$a->strings['This addon tries to identify the language posts are written in. If it does not match any language specified below, posts will be hidden by collapsing them.'] = 'Это дополнение пытается идентифицировать язык, на котором сделаны записи. Если язык не соответствует ни одному, указанному ниже, то такие посты будут свёрнуты.';
$a->strings['Use the language filter'] = 'Использовать языковой фильтр';
$a->strings['Able to read'] = 'Возможность читать';
$a->strings['List of abbreviations (ISO 639-1 codes) for languages you speak, comma separated. For example "de,it".'] = 'Список аббревиатур (кодов по ISO 639-1 ) для языков, на которых вы говорите. Например, "ru,en".';
$a->strings['Minimum confidence in language detection'] = 'Минимальная уверенность в определении языка';
$a->strings['Minimum confidence in language detection being correct, from 0 to 100. Posts will not be filtered when the confidence of language detection is below this percent value.'] = 'Минимальная уверенность в правильном определении языка, от 0 до 100. Посты не будут скрыты, если уверенность в правильном определении языка в процентах ниже этого значения.';
$a->strings['Minimum length of message body'] = 'Минимальная длина тела сообщения';
$a->strings['Minimum number of characters in message body for filter to be used. Posts shorter than this will not be filtered. Note: Language detection is unreliable for short content (<200 characters).'] = 'Минимальное количество знаков в теле сообщения для применения фильтрации. Посты, длина которых меньше указанного значения, не будут отфильтрованы. Обратите внимание, что определение языка работает ненадежно для небольших постов (<200 символов).';
$a->strings['Language Filter'] = 'Языковой фильтр';
$a->strings['Save Settings'] = 'Сохранить настройки';
$a->strings['Filtered language: %s'] = 'Отфильтрованный язык: %s';
