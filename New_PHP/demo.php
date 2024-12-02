<?php

$message = 'Hi';
$say = function () use ($message) {
	$message = 'Hello';
	echo $message;
};

$say();
echo $message;