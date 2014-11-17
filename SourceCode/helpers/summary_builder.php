<?php
function summaryBuilder($keyword, $content, $word_count = 10) {
    $str = str_ireplace("\n", " ", $content);
    $content_arr = explode(" ", $str);
    $keyword_arr = explode(" ", $keyword);
    $result = "";
    if (is_array($keyword_arr)) {
        if (count($keyword_arr) == 1) {
            $arr_term = array_map('strtolower', $content_arr);
            $position = array_search(strtolower($keyword_arr[0]), $arr_term);
            $summary = searchOnePosition($content_arr, $position, count($arr_term), $word_count);
            $replace = $content_arr[$position];
            $result = str_ireplace($keyword, "<span class='query-found'>".$replace."</span>", $summary);
        } else {
            $result = searchMultiPosition($keyword_arr, $content_arr, $word_count);
        }
    }
    
    return $result;
}

function searchOnePosition($arr_word, $position, $endword, $word_count) {
    $start = ($position >=  $word_count ? $position -  $word_count : 0);
    $end = (($position +  $word_count) < $endword ? $position +  $word_count : $endword);
    $str = "";
    if ($start != 0) { $str = "..."; }
    for ($i = $start; $i <= $end; $i++) {
        $str .= $arr_word[$i];
        if ($i < $end) { $str .= " "; }
    }
    if ($end != 0) { $str .= "..."; }
    return $str;
}

function searchMultiPosition($keyword_arr, $arr_word, $word_count) {
    $arr_term = array_map('strtolower', $arr_word);
    $position = array_search(strtolower($keyword_arr[0]), $arr_term);
    $summary = searchOnePosition($arr_word, $position, count($arr_term), $word_count);
    for ($i = 0; $i < count($keyword_arr); $i++) {
       $keyword = $keyword_arr[$i];
       $position = array_search(strtolower($keyword), $arr_term);
       $replace = $arr_word[$position];
       $summary = str_ireplace($keyword, "<span class='query-found'>".$replace."</span>", $summary);
    }
    return $summary;
}