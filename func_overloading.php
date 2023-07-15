<?php
// Example for funciton overloading
class func_overloading {
    function __call( $name, $args ) {
        if( 'sum' == $name ) {
            switch( count( $args ) ) {
                case 0 : return 0;
                case 2 : return $args[0] + $args[1];
                case 3 : return $args[0] + $args[1] + $args[2];
            }
        }
    }
}

$obj = new func_overloading();
echo $obj->sum( 10, 20 );
echo $obj->sum( 10,20, 30 );