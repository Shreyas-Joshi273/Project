<?php


$pages = array();
for ( $i = 0; $i < count( $my_list ); $i++ )
{
    array_push( $pages, $my_list[$i] ['post_title'] );
}
print_r(array_reduce($my_list, $pages) );

?>