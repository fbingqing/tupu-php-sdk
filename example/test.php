#!/usr/bin/php
<?php

/**
 * TUPU Recognition API SDK
 * Copyright(c)2013-2016, TUPU Technology
 * http://www.tuputech.com
 */

require '../tupuclient.php';

//Using remote iamge URLs
//$images = array('http://img.xxx.com/1.jpg', 'http://img.xxx.com/2.jpg');
//Upload files
$images = array('@img/1.jpg', '@img/2.jpg');

//Post tags relative to images
$tags = array('room1', 'room2');
//Post a general tag relative to images
//$tags = 'room1';
//$tags = array('room1');

//NOTE: Paste the path of your private key pem file here
$privateKey = file_get_contents('./your_private_key.pem');

//NOTE: Paste your Screct-ID here
$secretId = 'your_secret_id';

$tupu = new TupuClient($privateKey);
//Set sub-user identifier for billing and statistics (optional feature)
//$tupu->setUID('test-user');

$result = $tupu->recognition($secretId, $images, $tags);
var_dump($result);
