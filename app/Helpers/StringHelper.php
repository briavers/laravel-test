<?php
/*
 * Translate a string and capitalize the first letter.
 */
if (!function_exists('__U')) {
    function __U(String $string)
    {
        return ucfirst(__($string));
    }
}
