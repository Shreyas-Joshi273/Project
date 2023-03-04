<?php

$source = array(1,2,3,4,5);
$target = array(2,5,7,8,9);
$common = array();

for($i = 0; $i < count($source); $i++)
{
    for($j = 0; $j < count($target); $j++)
    {
        if($source[$i] == $target[$j]) {
            array_push($common, $source[$i]);
        }
    }
}

$result = array_intersect($source, $target);
print_r($result);


?>