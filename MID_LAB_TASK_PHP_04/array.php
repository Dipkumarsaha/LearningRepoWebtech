<?php

$car = [ 'toyota','nisssan','mistibushi','bmw'];
for($i=0;$i<=count($car);$i++)
{
    if( $i%2!=0)
    echo $car[$i];
}

?>