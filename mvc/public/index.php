<?php

if (isset($_SERVER['PATH_INFO'])) {
  echo $_SERVER['PATH_INFO'];
} else {
  echo "There is no path info";
}
