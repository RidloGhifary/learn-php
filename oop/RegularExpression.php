<?php

$matches = [];

$result = (bool)preg_match_all("/ridlo|ghifary|mad|jshf/i", "Ridlo achmad ghifary", $matches);

var_dump($result);
var_dump($matches);
