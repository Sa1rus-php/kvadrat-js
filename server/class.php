<?php

$PersonName_first = $_POST['name'];
$PersonSurname_first = $_POST['surname'];
$PersonAge_first = $_POST['age'];
$PersonGender_first = $_POST['gender'];
$PersonSalary_first = $_POST['salary'];
$PersonDriving_first = $_POST['driving'];
$PersonCategory_first = $_POST['category'];

if ($PersonName_first == "" ||
    $PersonSurname_first == "" ||
    $PersonAge_first == "" ||
    $PersonGender_first == "" ||
    $PersonSalary_first == "" ||
    $PersonDriving_first == "" ||
    $PersonCategory_first == "")
{
    echo " You didn’t indicate something<br />";
}else{
    echo "You have indicated everything you need <br />";
}


class Person {
    protected $name,$age,$surname,$gender;

    public function setName(string $name){
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }


    public function setSurname($surname){
        $this->surname = $surname;
    }
    public function getSurname()
    {
        return $this->surname;
    }

    public function setAge($age){
        $this->age = $age;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }

}


class Worker extends Person{
    private $salary;
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }


}
//


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


$Person_first_class = new Driver();
$Person_first_class->setName($PersonName_first);
$Person_first_class->setSurname($PersonSurname_first);
$Person_first_class->setAge($PersonAge_first);
$Person_first_class->setGender($PersonGender_first);
$Person_first_class->setSalary($PersonSalary_first);
$Person_first_class->setCategory($PersonCategory_first);
$Person_first_class->setDriving($PersonDriving_first);
$Person_first_class->OutPutnCounter();

