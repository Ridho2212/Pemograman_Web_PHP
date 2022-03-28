<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($n) {
        $this->name = $n;
    }
    
    public function set_color($clr){
        return $this->color = $clr;
    }

    public function set_weight($wght){
        return $this->weight = $wght;
    }
}

$mango = new Fruit();
echo $mango -> name = 'Nanas'; 
echo "</br>";
echo $mango -> set_color('Kuning');
echo "</br>" ;
echo $mango -> set_weight('250 KG'); 

?>