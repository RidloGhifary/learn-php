<?php

$datetime = new DateTime();
$datetime->setDate(2020, 1, 1);

$datetime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = 1;
$datetime->add($minusOneMonth);

var_dump($datetime);
