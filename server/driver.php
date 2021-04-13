<?php
class Driver extends Worker {
    private $driving, $category;
    public static $counter = 0;

    public function setDriving($driving){
        $this->driving = $driving;
    }

    public function getDriving(){
        return $this->driving;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }


    public function OutPutnCounter(){
        echo 'Name: '. $this->name ." ". 'Surname: ' .$this->surname.' '. 'Age: ' . $this->age." " . 'Gender: '. $this->gender." ". 'Salary: '.$this->getSalary(). " ".'Driving: ' .$this->driving." " .'Category: '.$this->category." "."<br />";
    }

    public function __construct()
    {
        echo ("Число пользователей: ". ++self::$counter . "<br/>");
    }
}

