<?php
/*
 * Translate a string and capitalize the first letter.
 */
if (!function_exists('__U')) {
    function __U(String $string, $count = 1)
    {
        return ucfirst(trans_choice($string, $count));
    }
}
