<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Демо - Таймер обратного отсчета на PHP</title>

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
	<style>
		@import url(//fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,cyrillic);
		html,body {
			margin:0px;
			padding:0px;
			font-family:'Open Sans Condensed',Arial,serif;
		}
				#countdown {
			margin:0px auto;
			width:auto;
			padding:20px 20px 20px 10px;
			position:relative;
			border:#222 2px solid;
			background:#eee;
		}
		#countdown div {
			margin:0px 0px 0px 10px;
			float:left;
			width:88px;
		}
		#countdown div span {
			display:block;
			height:53px;
			background:#000;
			border-bottom:#f00 1px solid;
			color:#eee;
			font-size: 24pt;
			padding-top: 4px;
			padding-left: 16px;
			letter-spacing: 31px;
			/* Последние 4 параметра отвечают за размер текста и его выравнивание на циферблате */
		}
		#countdown #week,#countdown #day,#countdown #hour,#countdown #minute,#countdown #second {
			display:none;
		}
		.clearfix {
			clear:both;
			float:none !important;
		}
	</style>
</head>
<body>
	<div id="countdown">
	<?php
		include_once 'config.php'; 

		$script = '';
		$countdown_txt = '';
		$block_count = 0;
		/* Генерация html кода таймера */
		foreach($countdown_setting['visible'] AS $i => $v) {
			$countdown_txt .= '<div id="'.$i.'" style="display:'.$v[0].';">'.$v[1].' <span>00</span></div>';
			$script .= '<script type="text/javascript">var countdown_'.$i.' = "'.$v[0].'";</script>';
			if($v[0]=='block') $block++;
		}
		if($countdown_setting['position'] == 'vertical') $block = 1; 
		$script .= '<script type="text/javascript">var block_count = '.$block.';</script>';

		/* обработка, когда указано время отсчета */
		if($countdown_setting['type'] == 'time') {
			$time_value = $countdown_setting['time']['week']*7*60*60*24+$countdown_setting['time']['day']*60*60*24+$countdown_setting['time']['hour']*60*60+$countdown_setting['time']['minute']*60+$countdown_setting['time']['second'];
			$time_new = $time+$time_value;
			/* обработка кукисов */
			if($countdown_setting['cookie']) {
				$time_cookie = (int) $_COOKIE['time'];
				if($time_cookie==0) {
					setcookie("time",$time_new);
				} else {
					$time_value = $time_cookie-$time;
				}
			}
			$script .= '<script type="text/javascript">var timeleft='.$time_value.';</script>';
		} elseif ($countdown_setting['type'] == 'date') { /* обработка, когда указана конечная дата */
			$time_value = mktime($countdown_setting['date']['hour'],$countdown_setting['date']['minute'],$countdown_setting['date']['second'],$countdown_setting['date']['month'],$countdown_setting['date']['day'],$countdown_setting['date']['year']);
			$time_value = $time_value-$time;
			$script .= '<script type="text/javascript">var timeleft='.$time_value.';</script>';
		}
		echo $countdown_txt . $script;
	?>
		<div class="clearfix"></div>
	</div>
	<script>
		function countdown_go() {
			timeleft_func = timeleft;
			if(countdown_week=='block') {
				timevalue = Math.floor(timeleft_func/(7*24*60*60));
				timeleft_func -= timevalue*7*24*60*60;
				if(timevalue<10) timevalue = '0'+timevalue;
				$("#week span").html(timevalue);
			}
			if(countdown_day=='block') {
				timevalue = Math.floor(timeleft_func/(24*60*60));
				timeleft_func -= timevalue*24*60*60;
				if(timevalue<10) timevalue = '0'+timevalue;
				$("#day span").html(timevalue);
			}
			if(countdown_hour=='block') {
				timevalue = Math.floor(timeleft_func/(60*60));
				timeleft_func -= timevalue*60*60;
				if(timevalue<10) timevalue = '0'+timevalue;
				$("#hour span").html(timevalue);
			}
			if(countdown_minute=='block') {
				timevalue = Math.floor(timeleft_func/(60));
				timeleft_func -= timevalue*60;
				if(timevalue<10) timevalue = '0'+timevalue;
				$("#minute span").html(timevalue);
			}
			if(countdown_second=='block') {
				timevalue = Math.floor(timeleft_func/1);
				timeleft_func -= timevalue*1;
				if(timevalue<10) timevalue = '0'+timevalue;
				$("#second span").html(timevalue);
			}
			timeleft-=1;
			return false;
		}
		$(document).ready(function() {
			setInterval(countdown_go,1000);
			$("#countdown").css('width',(block_count*98)+'px');
			return false;
		});
	</script>
</body>
</html>