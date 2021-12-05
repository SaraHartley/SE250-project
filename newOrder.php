<?php
class Order
{
    function getSize() { return $this->size; }
    function getCrust() { return $this->crust; }
    function getNoTopping() { return $this->noTop; }
    function getSausage() { return $this->saus; }
    function getPepperoni() { return $this->pepp; }
    function getChicken() { return $this->chicken; }
    function getJalopeno() { return $this->jalo; }
    function getCheese() { return $this->cheese; }
    function getExtraCheese() { return $this->extraCheese; }
    function getSauce() { return $this->sauce; }
    function getNoSide() { return $this->noSide; }
    function getBread() { return $this->bread; }
    function getCake() { return $this->cake; }
    function getSalad() { return $this->salad; }
    function getOrderType() { return $this->orderType; }

    public $size;
    public $crust;
    public $noTop;
    public $saus;
    public $pepp;
    public $chicken;
    public $jalo;
    public $cheese;
    public $extraCheese;
    public $sauce;
    public $noSide;
    public $bread;
    public $cake;
    public $salad;
    public $orderType;
}

$order = new Order();

switch ($choices[0]) // size
{
    case '0':
        $order->size = "small";
        break;
    
    case '1':
        $order->size = "medium";
        break;

    case '2':
        $order->size = "large";
        break;
}

switch ($choices[1]) // crust
{
    case '0':
        $order->crust = "thin";
        break;
    
    case '1':
        $order->crust = "regular";
        break;

    case '2':
        $order->crust = "deep dish";
        break;

    case '3':
        $order->crust = "cheese stuffed";
        break;    
}

if($choices[2] == '1') // none
{
    $order->noTop = "none";
}
else{
    $order->noTop = "";
}

if($choices[3] == '1') // sausage
{
    $order->saus = "sausage";
}
else{
    $order->saus = "no sausage";
}

if($choices[4] == '1') // pepperoni
{
    $order->pepp = "pepperoni";
}
else{
    $order->pepp = "no pepperoni";
}

if($choices[5] == '1') // chicken
{
    $order->chicken = "chicken";
}
else{
    $order->chicken = "no chicken";
}

if($choices[6] == '1') // jalopeno peppers
{
    $order->jalo = "jalopeno peppers";
}
else{
    $order->jalo = "no jalopeno peppers";
}

if($choices[7] == '1') // cheese
{
    $order->cheese = "cheese";
}
else{
    $order->cheese = "no cheese";
}

if($choices[8] == '1') // extra cheese
{
    $order->extraCheese = "extra cheese";
}
else{
    $order->extraCheese = "no extra cheese";
}

switch ($choices[9]) // sauce
{
    case '0':
        $order->sauce = "ranch";
        break;
    
    case '1':
        $order->sauce = "marinara";
        break;

    case '2':
        $order->sauce = "none";
        break;
}

if($choices[10] == '1') // none
{
    $order->noSide = "none";
}
else{
    $order->noSide = "";
}

if($choices[11] == '1') // bread sticks
{
    $order->bread = "bread sticks";
}
else{
    $order->bread = "no bread sticks";
}

if($choices[12] == '1') // lava cake
{
    $order->cake = "lava cake";
}
else{
    $order->cake = "no lava cake";
}

if($choices[13] == '1') // salad
{
    $order->salad = "salad";
}
else{
    $order->salad = "no salad";
}

switch ($choices[14]) // order type
{
    case '0':
        $order->orderType = "carryout";
        break;
    
    case '1':
        $order->orderType = "delivery";
        break;
}
?>