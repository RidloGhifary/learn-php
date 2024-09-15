<?php

require("./lib/sayHello.php");
// include("./lib/sayHello.php") or doing this
// include_once("./lib/sayHello.php") or doing this

// program code should be separate by its used for
// so that we can just call the function from another file
// require : has the ability to break the code if the file does not exist
// include : will keep the code running with warning

echo sayHello("Ridlo"). PHP_EOL;