<?php
require_once 'NewsDirector.php';
require_once 'RssNewsBuilder.php';

$builder = new RssNewsBuilder();
$url = 'http://www.php.net/news.rss';

$director = new NewsDirector($builder, $url);

foreach ($director->getNews() as $article) {
	echo $article->getTitle() . '|' . $article->getLink() . '|' . $article->getDate();
}

?>
