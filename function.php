<?php

function generate_frequencies($text){
    $text = preg_replace('~[^\p{L}]~iu', '', $text);
    echo PHP_EOL;
    $total = mb_strlen($text);
    $data = count_chars($text);

    array_walk($data, function (&$value, $key, $total){
        $value = $value/$total;
    }, $total);
    return $data;
}