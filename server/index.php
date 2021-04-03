<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Name: " . $this->name . "\n";
    }

    public function __toString()
    {

        return $this->name;

    }

    public function __destruct()
    {
        $this->name;
        echo 'Destruct Person: ' .$this->name ;
    }

}
$hum = new Person('Dmitiy');
