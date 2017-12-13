<?php
class Demo {
    private $a = "superclass_a";
    protected $b = "superclass_b";
    public $c = "superclass_c";
     
    function do_something() {
        echo "this is do_somthing \n<br>";
    }
}
 
class Demo2 extends Demo {
    function do_something2() {
        echo "this is do_somthing2 \n";
    }
}
 
$o = new Demo2();
$o->do_something();
$o->do_something2();
?>
