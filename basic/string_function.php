<?php

// there are a bunch of strung build in function in php
// references : https://www.php.net/manual/en/ref.strings.php
// join : join an array into a string
// explode : spread string into an array
// substr : take the particular string
// trim : remove white space in the start and in the end

var_dump(join(", ",[12,13,14,15]));
var_dump(explode(" ", "ridlo achmad ghifary"));
var_dump(substr("ridlo", 0, 3));
var_dump(trim("    ridlo    "));