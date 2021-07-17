<?php
trait Counter {
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo $c.'<br>';
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

$o = new C1(); 
$o->inc(); // echo 1
$o->inc();
$o->inc();

$o2 = new C1(); 

$o2->inc();
$o2->inc();
$o2->inc();

$p = new C2(); 
$p->inc(); // echo 1