<?php
//Explain overloading and overriding by writing a sample program.
class A {
    function show() {
        echo 'This is Base class A Show function';
    }
}
class B extends A {
    function show() {
        echo 'This is Derived class B show function';
    }
}

$obj1 =  new A();
$obj1->show();
$obj2 = new B();
$obj2->show();

?>