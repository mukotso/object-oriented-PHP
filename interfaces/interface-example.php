<?php
interface A {
    public function Compute();
}
interface B extends A {
    public function Divide();
}
class C implements B {
    public function Divide() {
        $var=10;
        $var1=2;
        $var3=$var/$var1;
        echo "division of 10/2 is" . $var3;
	}
    public function Compute() {
        $a=2;
        $b=3;
        $c=$a*$b;
        echo "multiplication of 2*3 is" . $c;
	    }
}
$obj = new C();
$obj->Divide();
$obj->Compute();
?>

