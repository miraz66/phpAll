<?php 

// require/ require once / include/ include once

// ----------------------------------------------------------------
// include - the file not found next line code run not all error

// include 'file.php';
// echo "Hello World";

// ----------------------------------------------------------------
// require - the file not found next line code run error all code

// require 'file.php';
// echo "Hello World";

// ----------------------------------------------------------------
// require_once is used to import file once and value set every time.

require_once 'file.php';
$x++; 
echo $x . "\n";

require_once 'file.php';
echo $x . "\n";