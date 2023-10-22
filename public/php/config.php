<?php

$countdown_setting = array(
	"type" 			=> "time", /* date или time, date - отсчет до указанной даты, time - отсчет указанного времени */
	"cookie" 		=> true, /* true или false, запоминать время, только для режима time */
	"position"	    => "horizontal", /* horizontal или vertical, положение блока */
	"date"			=> array(
		"year" 		=> 2014,
		"month" 	=> 4,
		"day"		=> 15,
		"hour"		=> 12,
		"minute"	=> 0,
		"second"	=> 0
	), /* указывается конечная дата, для режима date */
	    "time" 		=> array(
		"week"		=> 0,
		"day"		=> 2,
		"hour"		=> 10,
		"minute"	=> 0,
		"second"	=> 0
	), /* указывается время, для режима time */
		"visible"	=> array(
		"week"		=> array("none","недель:"),
		"day"		=> array("block","дней:"),
		"hour"		=> array("block","часов:"),
		"minute"	=> array("block","минут:"),
		"second"	=> array("block","секунд:")
	) /* настройка отображения блоков, block - показывать соответствующий блок, none - не показывать; второй параметр - заголовок блока */
);