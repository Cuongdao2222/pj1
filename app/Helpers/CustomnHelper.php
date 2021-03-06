<?php

if (!function_exists('_substrs')) {
    function _substrs($str, $length, $minword = 3)
    {
        $sub = '';
        $len = 0;
        foreach (explode(' ', $str) as $word)
        {
            $part = (($sub != '') ? ' ' : '') . $word;
            $sub .= $part;
            $len += strlen($part);
            if (strlen($word) > $minword && strlen($sub) >= $length)
            {
              break;
            }
         }
            return $sub . (($len < strlen($str)) ? '...' : '');
    }
}