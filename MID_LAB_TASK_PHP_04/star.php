<?php
$star = "*" ;
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
         echo $star;
	}
	echo "\n";
	echo "\n ";
}
echo "\n \n";
echo "\n \n ";
$star = 1;
for ( $row = 3 ; $row != 0 ; $row -- ) { 
	for ($column = 0 ; $column < $row  ; $column ++ ) {

         $star++ ;
	}
	$star = 1 ;
	echo "\n";
	echo "\n " ;
}
?>