<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
class Tiger extends Animal
{
    public function makesound()
    {
        return 'Tỉger: roarrrrr';
    }
}
