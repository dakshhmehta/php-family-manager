<?php

use phpFastCache\CacheManager;
use phpFastCache\Helper\Psr16Adapter;

function dd($m){
	dump($m);
}

function cache(){
	$config = [
		'path' => __DIR__.'/cache',
	];

	$adapter = new Psr16Adapter('files', $config);

	return $adapter;
}