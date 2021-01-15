<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class Beer2 extends Beverage {
    private $name;
    private $alcoholpercentage;


    function __construct(string $functionColor,float $functionPrice,string $propertyName ,float $propertyPercentage,string $functionTemp="cold"){

        parent::__construct($functionColor, $functionPrice, $functionTemp);

        $this->name=$propertyName;
        $this->alcoholpercentage= $propertyPercentage;
    }

    function getAlcoholPercentage(){        
        echo number_format($this->alcoholpercentage, 2) .'<br>';
        return  $this->alcoholpercentage."%";


    }

    public function beerShowInfo (){//created this function to be able to reach private beerInfo()
       return $this->beerInfo();
    }
    private function beerInfo(){
        return "Hi i'm {$this->name} and i have an {$this->alcoholpercentage} alcohol percentage and I have a {$this->color} color.";
    }
}
$beer2= new Beer2("light",3.5, "duvel", 8.5);
echo $beer2->getInfo();
echo '<br>';
echo $beer2->getAlcoholPercentage();



echo $beer2->beerShowInfo();







?>


