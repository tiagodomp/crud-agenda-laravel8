<?php

if(!function_exists('randomTell')) {

    /**
     * Generate valid tell, with or without mask
     *
     * @param bool $withMask
     * @return string
     */
    function randomTell(bool $withMask = true): string
    {
        $value = rand(10, 99) . "9" . rand(10000000, 99999999);

        if ($withMask) {
            return mask($value, "(##) #.####-####");
        }

        return $value;
    }
}

if(!function_exists('mask')) {

    /**
     * Add masks to a string
     *
     * @param string $val Val example: '010203'
     * @param string $mask Mask example: ##/##/##
     * @return string example: '01/02/03'
     */
    function mask(string $val, string $mask): string
    {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
            if ($mask[$i] == '#') {
                if (isset($val[$k])) {
                    $maskared .= $val[$k++];
                }
            } else {
                if (isset($mask[$i])) {
                    $maskared .= $mask[$i];
                }
            }
        }

        return $maskared;
    }
}

if(!function_exists('onlyNumber')) {

    /**
     * Remove masks to a string
     *
     * @param string $val Val example: '01/02/03'
     * @return string example: '010203'
     */
    function onlyNumber(string $val): string
    {
       return preg_replace( '/[^0-9]/is', '', $val );
    }
}


