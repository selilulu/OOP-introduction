<?php
echo('Hi meneer den Alien! <br>');

class Person
{
    public $age;
    public $gender;
    public $intelligence;

    public function __construct(int $age, string $gender, string $intelligence)
    {
        $this->age = $age;
        $this->gender = $gender;
        $this->intelligence = $intelligence;
    }

    public function sayHi($to)
    {
        echo "Hi {$to}! <br>";
    }
}

class Brunette extends Person
{
    public function __construct(int $age, string $gender, string $intelligence = 'average')
    {
        parent::__construct($age, $gender, $intelligence);
    }

    public function sayHi($to)
    {
        echo "Hi! I'm {$this->age} years old <br>";
    }
}

class Blonde extends Person
{
    public function __construct(int $age, string $gender, string $intelligence = 'smart')
    {
        parent::__construct($age, $gender, $intelligence);
    }

    public function sayHi($to)
    {
        echo "Hi {$to}! Did you know that E = mc2?";
    }
}

$mark = new Person(30, 'male', 'average');
echo('Meet Mark: <br>');
$mark->sayHi('Meneer den Alien');
$mark->sayHi('Manten with clothes');

$isabelle = new Brunette(35, 'female');
$isabelle->sayHi('Manten');

$einsteinella = new Blonde(60, 'female');
$einsteinella->sayHi('Ismi');

?>