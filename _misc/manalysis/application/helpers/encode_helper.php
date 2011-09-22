<?php

/**
 * Encodes a string as base64, and sanitizes it for use in a CI URI.
 * 
 * @param string $str The string to encode
 * @return string
 */
function url_base64_encode(&$str="")
{
    return strtr(
            base64_encode($str),
            array(
                '+' => '.',
                '=' => '-',
                '/' => '~'
            )
        );
}

/**
 * Decodes a base64 string that was encoded by ci_base64_encode.
 * 
 * @param object $str The base64 string to decode.
 * @return string
 */
function url_base64_decode(&$str="")
{
    return base64_decode(strtr(
            $str, 
            array(
                '.' => '+',
                '-' => '=',
                '~' => '/'
            )
        ));
}

// End of file: encode_helper.php
// Location: ./system/application/helpers/encode_helper.php  