<?php 
if (! function_exists('whatsapp')) {
    function whatsapp($nomor)
    {
        $split = str_split($nomor);
        if ($split[0] == 0) {
            $split[0] = 62;
        }
        return implode($split);
    }
}