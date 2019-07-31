<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class House
{
    public static function census($houses)
    {
        $people = [];

        foreach ($houses as $house) {
            $people = array_merge($people, $house->people());
        }

        return $people;
    }

    private $people = [];

    public function addDweller($person)
    {
        $this->people[] = $person;
        return $this;
    }

    public function people()
    {
        return $this->people;
    }
}

$carlton = new Person("Carlton", 25);
$ida = new Person("Ida", 32);
$estelle = new Person("Estelle", 57);
$jana = new Person("Jana", 48);

$house1 = new House();
$house1->addDweller($carlton)
       ->addDweller($ida);

$house2 = new House();
$house2->addDweller($estelle)
       ->addDweller($jana);

var_dump(House::census([$house1, $house2])); // [$carlton, $ida, $estelle, $jana]
var_dump(House::census([$house2])); // array(2) [$estelle, $jana]
