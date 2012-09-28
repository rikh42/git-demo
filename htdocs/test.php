<?php

phpinfo();

/**
 * @param $hex
 * @return array
 */
function HexToArray($hex)
{
    // Force all the characters to upper case
    $hex = strtoupper($hex);

    // get an array ready to store the results in
    $dec = array();

    // loop over the hex string until we've used it all up
    while (!empty($hex)) {
        // Get the next pair and update the remaining string
        $hexChars = substr($hex, 0, 2);
        $hex = substr($hex, 2);

        // Finally, convert from hex to decimal
        $dec[] = (int) base_convert($hexChars, 16, 10);
    }

    return $dec;
}


$hex = '01090F1234567890abcdef';
var_dump(HexToArray($hex));