<?php
  # формат даты (MSK)
  define('DATE_FORMAT_RFC3339','Y-m-d\\TH:i:s-04:00');

  $lastBuildDate = date(DATE_FORMAT_RFC3339); # дата сборки фида
  $author = 'osa_news'; # автор фида
  $author_email = 'osa@a2s.su'; # e-mail автора фида

  $title = 'Вышел №130 выпуск'; # заголовок анонса
  $link = 'http://osa.samag.ru/info/OpenSource130'; # ссылка на журнал
  $link_dl = 'http://osa.a2s.su/osa/OpenSource130.zip'; # ссылка на загрузку

  $rss = <<<END
<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <title>OpenSource (osa.a2s.su)</title>
  <link href="https://osa.a2s.su/atom.xml" rel="self"/>
  <link href="http://osa.a2s.su/"/>
  <updated>$lastBuildDate</updated>
  <author>
    <name>$author</name>
    <email>$author_email</email>
  </author>
  <id>https://osa.a2s.su/</id>
  <entry>
    <title>$title</title>
    <link href="$link_dl"/>
    <id>$link</id>
    <updated>$lastBuildDate</updated>
    <content type="html">
      &lt;p&gt;$title&lt;/p&gt;
      &lt;p&gt;&lt;a href="$link" title="Скачать"&gt;Содержание выпуска&lt;/a&gt;&lt;/p&gt;
      &lt;p&gt;&lt;a href="$link_dl" title="Скачать"&gt;Скачать выпуск&lt;/a&gt;&lt;/p&gt;
    </content>
  </entry>
</feed>
END;

  try {
    if(!@file_put_contents('atom.xml', $rss)) throw new Exception();
    echo('Готово!');
  }
  
  catch (Exception $e) {
    echo('Упсс... возникла ошибка!');
  }
