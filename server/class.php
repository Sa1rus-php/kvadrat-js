<?php
$PersonName = $_POST['name'];
$PersonSurname = $_POST['surname'];
$PersonAge = $_POST['age'];
$PersonGender = $_POST['gender'];
class Person {
    public $name,$age,$surname,$gender;

    function Output(){
        echo "Name: $this->name; Surname: $this->surname; Age: $this->age; Gender: $this->gender<br>";
    }
}

$PersonName_class = new Person();
$PersonName_class->name = $PersonName;
$PersonName_class->surname = $PersonSurname;
$PersonName_class->age = $PersonAge;
$PersonName_class->gender = $PersonGender;
$PersonName_class->Output();