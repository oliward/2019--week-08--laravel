<?php

namespace App;

use App\Tricksy\Challenges as Tricksy;
use App\Cutlery;
use App\Languages;
use App\Shapes;
use App\Library;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        // load challenges
        $this->spoon();
        $this->languages();
        $this->greet();
        $this->shapes();
        $this->extrude();
        $this->library();

        // load Tricksy challenges
        $tricksy = new Tricksy();
        $tricksy->start();
    }

    public function spoon()
    {
        echo "\n01) Spoon\n";

        $spoon = new Cutlery\Spoon();
        $runcible = new Cutlery\RuncibleSpoon();

        $spoon->scoop()->scoop();
        $runcible->scoop()->scoop();

        dump(
            $spoon->howManyScoops(), // 2
            $runcible->howManyScoops() // 4
        );
    }

    public function languages()
    {
        echo "\n02) Languages\n";

        $english = new Languages\English();
        $french = new Languages\French();
        $arabic = new Languages\Arabic();

        dump(
            $english->name(), // "English"
            $english->hello(), // "Hello"
            $french->name(), // "French"
            $french->hello(), // "Bonjour
            $arabic->name(), // "Arabic"
            $arabic->hello() // "مرحبا"
        );
    }

    public function greet()
    {
        echo "\n03) Greet\n";

        $english = new Languages\English();
        $french = new Languages\French();

        dump(
            (new Greeter\Greeter($english))->greet("Sandi"), // "Hello Sandi"
            (new Greeter\Greeter($french))->greet("Tom"), // "Bonjour Tom"
        );
    }

    public function shapes()
    {
        echo "\n04) Shapes\n";

        // create new shapes
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // log the areas of each
        dump(
            $square->area(), // 16
            $circle->area(), // 50.265482457437
            $rectangle->area() // 20
        );
    }

    public function extrude()
    {
        echo "\n05) Extrude\n";

        // create 2D objects
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // turn into 3D objects
        $cube = new Shapes\Extrude($square, 4);
        $cylinder = new Shapes\Extrude($circle, 4);
        $cuboid = new Shapes\Extrude($rectangle, 7);

        // log the volumes of each
        dump(
            $cube->volume(), // 64
            $cylinder->volume(), // 201.06192982975
            $cuboid->volume() // 140
        );
    }

    public function library()
    {
        echo "\n06) Library\n";

        $shelf = new Library\Shelf();
        $shelf->addItem(new Library\Book("Zero: The Biography of a Dangerous Idea", 256));
        $shelf->addItem(new Library\DVD("Hunt for the Wilderpeople"));
        $shelf->addItem(new Library\CD("Teal Album"));

        $otherShelf = new Library\Shelf();
        $otherShelf->addItem(new Library\Book("The Power Broker", 1336));
        $otherShelf->addItem(new Library\DVD("Black Sheep"));

        $library = new Library\Library();
        $library->addShelf($shelf);
        $library->addShelf($otherShelf);

        dump($library->titles()); // array:5 [ 0 => "Zero: The Biography of a Dangerous Idea" 1 => "Hunt for the Wilderpeople" 2 => "Teal Album" 3 => "The Power Broker" 4 => "Black Sheep" ]
    }
}
