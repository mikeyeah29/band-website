<?php

// SITE DETAILS

$site_name = "Band Name";
$epk_link = '';
$email = 'band@gmail.com';
$google_analytics_id = 'UA-12345678-1';
$fb_pixel = '123456789';

$streaming_widget = 'https://example.com';

// SOCIALS

$socials = [
    array('icon' => 'facebook.png', 'link' => 'https://www.facebook.com'),
    array('icon' => 'youtube.png', 'link' => 'https://www.youtube.com'),
    array('icon' => 'instagram.png', 'link' => 'https://www.instagram.com')
];

// CSS Files

$cssFiles = ['styles', 'jazzy'];

$heroBg = '../img/jazzy/beach/1.jpg';

$colors = array(
	'primary' => '#9b0309',
	'accent' => '#007bd6'
);

$callToAction = array(
    'padding' => '14px 0px 12px 0px',
    'bg_color' => $colors['accent'],
    'text_color' => '#ffffff',
    'radius' => '35px'
);

$font = '';

$photos = [
    'jazzy/ted-blue-line/1.jpg',
    'jazzy/ted-blue-line/5.jpg',
   	'jazzy/ted-blue-line/7.jpg',

    'jazzy/ted-blue-line/2.jpg',
    'jazzy/ted-blue-line/3.jpg',
    'jazzy/ted-blue-line/4.jpg',
    
    'jazzy/beach/5.jpg',
    'jazzy/beach/3.jpg',
    'jazzy/beach/4.jpg',

    'jazzy/beach/107693221_394183688229630_934974609972766777_n.jpg',
    'jazzy/beach/107811300_3045823728866908_2583395309475441433_n.jpg',
    'jazzy/beach/7.jpg'
];

if( strtotime('now') < strtotime('09-10-2020') ) {
    // pre-release
    include('configs/pre-release.php');
}else{
    // post-release
    include('configs/post-release.php');
}

?>