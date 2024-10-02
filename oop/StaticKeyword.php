<?php

require_once "./data/MathHelper.php";

use Helper\MathHelper;

var_dump(MathHelper::$name);

MathHelper::$name = "Ridlo ghifary";

var_dump(MathHelper::$name);

$result = MathHelper::sum(10, 10, 10);

var_dump($result);
