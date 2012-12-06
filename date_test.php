<?php
$nowDate = new DateTime("now");
$d1=new DateTime("2012-07-08 11:14:15.638276");
$d2=new DateTime("2012-07-08 11:14:15.889342");
$diff=$d2->diff($d1);
print_r( $diff ) ;

/* returns:

DateInterval Object
(
    [y] => 0
    [m] => 0
    [d] => 0
    [h] => 0
    [i] => 0
    [s] => 0
    [invert] => 0
    [days] => 0
)

*/
?>