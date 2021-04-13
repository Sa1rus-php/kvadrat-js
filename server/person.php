<?php


$PersonName_first = 'Dmitriy';
$PersonSurname_first = 'Rekhlitskiy';
$PersonAge_first = '18';
$PersonGender_first = 'male';
$PersonSalary_first = '300';
$PersonDriving_first = '0';
$PersonCategory_first = 'B';


class Person
{
    protected $name, $age, $surname, $gender;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

}
