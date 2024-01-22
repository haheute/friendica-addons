<?php

if(! function_exists("string_plural_select_de")) {
function string_plural_select_de($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['New Member'] = 'Neue Nutzer';
$a->strings['Tips for New Members'] = 'Tipps für neue Nutzer';
$a->strings['Global Support Group'] = 'Globale Support-Gruppe';
$a->strings['Local Support Group'] = 'Lokale Support-Gruppe';
$a->strings['Save Settings'] = 'Einstellungen speichern';
$a->strings['Message'] = 'Nachricht';
$a->strings['Your message for new members. You can use bbcode here.'] = 'Deine Nachricht für neue Nutzer. BBCode kann verwendet werden.';
$a->strings['Add a link to global support group'] = 'Fügen Sie einen Link der globalen Support-Gruppe hinzu';
$a->strings['Should a link to the global support group be displayed?'] = 'Soll ein Link zur globalen Support-Gruppe angezeigt werden?';
$a->strings['Add a link to the local support group'] = 'Fügen Sie einen Link der lokalen Support-Gruppe hinzu';
$a->strings['If you have a local support group and want to have a link displayed in the widget, check this box.'] = 'Wenn Sie eine lokale Support-Gruppe haben und einen Link im Widget anzeigen lassen möchten, markieren Sie dieses Feld.';
$a->strings['Name of the local support group'] = 'Name des lokalen Support-Forums';
$a->strings['If you checked the above, specify the <em>nickname</em> of the local support group here (i.e. helpers)'] = 'Wenn der Link angezeigt werden soll, dann trage hier den <em>Spitznamen</em> des Forums ein (z.B. helpers)';
