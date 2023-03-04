<?php

$target = array(1, rand(1, 5));
for ($i = 0; $i < 10; $i++)
{
    $target = array_merge( $target, array(rand($i, 5), rand(1, $i)));
}
print_r($target);
?>