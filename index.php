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
$avengers = new Movie('Avengers: ENdgame', 'Action', '2019', 10);


echo "Nome: $shrek->name";
echo "<br />";
echo "Genere: $shrek->genre";
echo "<br />";
echo "Anno: $shrek->year";
echo "<br />";
echo "Prezzo base: $shrek->price";
echo "<br />";
echo "Prezzo più iva: " . $shrek->getPrice();
echo "<br />";
echo "<br />";
echo "<br />";
echo "Nome: $avengers->name";
echo "<br />";
echo "Genere: $avengers->genre";
echo "<br />";
echo "Anno: $avengers->year";
echo "<br />";
echo "Prezzo base: $avengers->price";
echo "<br />";
echo "Prezzo più iva: " . $avengers->getPrice();
