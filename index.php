<?php
require_once('settings.php');

echo <<<_HTML
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>&#171;Open Source&#187; - электронный журнал о свободном ПО и ПО с открытым кодом</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>\n<body>
	<div class="wrap center">
		<p class="center"><img src="res/logo.png" alt="OpenSource"></p>
_HTML;

for($a = 127; $a >= 1; $a--) {
	if($a < 10) {
		echo <<<_HTML
		<div class="osa">
			<a href="http://osa.samag.ru/info/OpenSource00${a}" title="Выпуск №${a}">Выпуск</a><br />№${a}
			<p class="center"><a href="${download_url}00${a}.zip" title="Скачать выпуск №001">Скачать</a></p>
		</div>
_HTML;
	}
	elseif($a < 100) {
		echo <<<_HTML
		<div class="osa">
			<a href="http://osa.samag.ru/info/OpenSource0${a}" title="Выпуск №${a}">Выпуск</a><br />№${a}
			<p class="center"><a href="${download_url}0${a}.zip" title="Скачать выпуск №001">Скачать</a></p>
		</div>
_HTML;
	}
	else {
		echo <<<_HTML
		<div class="osa">
			<a href="http://osa.samag.ru/info/OpenSource${a}" title="Выпуск №${a}">Выпуск</a><br />№${a}
			<p class="center"><a href="${download_url}${a}.zip" title="Скачать выпуск №001">Скачать</a></p>
		</div>
_HTML;
	}

}

echo <<<_HTML
		<div class="footer center">
			<p>&copy; 2013 by <a href="http://me.a2s.su/" target="_blank" title="Home page">IIIypuk</a></p>
			<p><a href="https://github.com/IIIypuk/osa-mirror" target="_blank" title="Source on GitHub">Source on GitHub</a></p>
		</div>
	</div>
</body>\n</html>\n
_HTML;
