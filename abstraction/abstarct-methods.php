<?php
abstract class testclass{
    abstract function test1();
    abstract function hello();
}
//there is an error since the class has not implemented both
//abstract methods in the abstract class
class myclass extends testclass{
    function test1(){
        echo "Overrides parent test method";
    }
}
$a=new myclass();
?>
