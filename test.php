<?php

$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->setex('cs',100,'sgsgdgasd');
$redis->get('cs');