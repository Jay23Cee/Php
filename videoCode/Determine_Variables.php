<?php
    define("CHECK_CONSTANT", "YES , I am a constant! ");

    $intVar = 1234;
    
    $stringVar = "I'm a String";
    $boolVar = false;
    $floatVar = 12.34;

    // echo  is_int($floatVar);
    // echo is_string($intVar);
    // echo is_bool($boolVar);
    // echo is_float($floatVar);

    echo defined('CHECK_CONSTANT');


?>