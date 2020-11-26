<?php

include 'config.php'; 
include 'css_builder/css_builder.php';

echo 'building...';

$fileName = 'campaign';

if (sizeof($argv) > 1) {
	$fileName = $argv[1];
}

$cb = new CssBuilder();

$cb->addFont(
	'../fonts/bebas_neue/BebasNeue-Regular.woff2', 
	'../fonts/bebas_neue/BebasNeue-Regular.woff'
);
$cb->addRule('p, a', ['font-size' => '25px']);
$cb->addRule('footer p, footer a', ['font-size' => '16px']);
$cb->addRule('.latest-headline', ['font-size' => '54px']);
$cb->heroBackground('../img/jazzy/banner.jpg');
$cb->callToActionButton($callToAction['bg_color'], $callToAction['text_color'], $callToAction['padding'], $callToAction['radius']);
$cb->addRule('.social a:hover', array(
	'background' => $colors['primary']
));

$cb->writeCss($fileName);

echo 'done';

?>