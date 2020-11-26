<?php

function includeConfig() {
	if( strtotime('now') < strtotime('09-10-2020') ) {
        // pre-release
        include('configs/pre-release.php');
    }else{
        // post-release
        include('configs/post-release.php');
    }
}