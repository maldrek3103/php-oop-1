<?php

class Movie
{
    public $name;
    public $genre;
    public $year;
    public $price;

    function __construct($_name, $_genre, $_year, $_price)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->price = $_price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getPrice()
    {
        if ($this->year > 2000) {
            $this->price = $this->price + 5;
        }

        return $this->price;
    }
}

$shrek = new Movie('Shrek', 'Comedy', '2001', 5.55);
echo "Nome: $shrek->name";
echo "<br />";
echo "Genere: $shrek->genre";
echo "<br />";
echo "Anno: $shrek->year";
echo "<br />";
echo "Prezzo base: $shrek->price";
echo "<br />";
echo "Prezzo vintage: " . $shrek->getPrice();
