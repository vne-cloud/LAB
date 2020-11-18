<?php
class A{
}
class B extendens A{
protecd $a;
public function_construct($a)
{
$this->a=$a
}
}
class C extends B
{
protected $b;
public function _construct($b,$a)
{
$this->b=$b;
parent::_construct($a)
}
}
$a=new A();
$B1=new B($a);
$B2=new B($B1)
$C=new C($B2,$a);
$B3=NEW B($C);
var_dump ($B3);
?>