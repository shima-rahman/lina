<?php

function myExplode($sentence)
{
    $strLength = strlen($sentence);
    $words = array();
    $word = "";
    for($i=0; $i<$strLength; $i++) 
    {
        if(ord($sentence[$i]) == "\n") 
        {
            echo "<br>";
            continue;
        }
        if($sentence[$i] == " " || $sentence[$i] == "\n" || $i == $strLength-1) 
        {
            if($i == $strLength-1) {
                $word = $word.$sentence[$i];
            }
            array_push($words, $word); 
            $word = "";
        }
        else 
        {
            $word = $word.$sentence[$i];
        }
    }
    return $words;
}

?>

