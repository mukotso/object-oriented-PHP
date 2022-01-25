<?php
abstract class testclass{
    abstract function hello($name, $age);
}
class myclass extends testclass{
    function hello($name, $age){
        echo "My name is $name and my age is $age";
    }
}
$a=new myclass();
$a->hello("Mukotso",32);
?>
