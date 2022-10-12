<?php

class Store
{
    public $description;

    public function display()
    {
        // return 'Description: '.$this->description . ' Description';
        return 'Item Description: ' . $this->description;
    }
}

$view1 = new Store();
$view1->description = 'Snacks';
echo $view1->description;
echo '<br>';
echo $view1->display();

echo '<br>';


$noodles = new Store();
$noodles->description = 'Noodles';
echo $noodles->display();
