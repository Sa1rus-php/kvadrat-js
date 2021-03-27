<?php
$PersonName_first = 'Ivan';
$PersonSurname_first = 'Novach';
$PersonAge_first = '19';
$PersonGender_first = 'Male';
$PersonSalary_first = '1000';
$PersonSS_first = "950";
$PersonCourse_first = "3";
$PersonDriving_first = '1';
$PersonCategory_first = 'B1';

$PersonName_second = 'Daniil';
$PersonSurname_second = 'Gorbach';
$PersonAge_second = '20';
$PersonGender_second = 'Male';
$PersonSalary_second = '1500';
$PersonSS_second = "950";
$PersonCourse_second = "4";
$PersonDriving_second = '2';
$PersonCategory_second = 'A1';


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

    public function setAge(int $age){
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
    public function setSalary(int $salary){
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }


}
//

class Student extends Worker{
    private $scholarship,$course;

    public function setSs(int $ss){
        $this->scholarship = $ss;
    }

    public function getSs(){
        return $this->scholarship;
    }


    public function setCourse(int $course){
        $this->course = $course;
    }

    public function getCourse(){
        return $this->course;
    }


}

    class Driver extends Student{
    private $driving, $category;
        public function setDriving(int $driving){
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


        public function OutPut(){
            echo 'Name: '. $this->name ." ". 'Surname: ' .$this->surname.' '. 'Age: ' . $this->age." " . 'Gender: '. $this->gender." ". 'Salary: '.$this->getSalary()." " .'Scholarship: '.$this->getSs()." ".'Course: '.$this->getCourse()." ".'Driving: ' .$this->driving." " .'Category: '.$this->category." "."<br />";
        }
    }







$Person_first_class = new Driver();
$Person_first_class->setName($PersonName_first);
$Person_first_class->setSurname($PersonSurname_first);
$Person_first_class->setAge($PersonAge_first);
$Person_first_class->setGender($PersonGender_first);
$Person_first_class->setSalary($PersonSalary_first);
$Person_first_class->setSs($PersonSS_first);
$Person_first_class->setCourse($PersonCourse_first);
$Person_first_class->setCategory($PersonCategory_first);
$Person_first_class->setDriving($PersonDriving_first);
$Person_second_class = new Driver();
$Person_second_class->setName($PersonName_second);
$Person_second_class->setSurname($PersonSurname_second);
$Person_second_class->setAge($PersonAge_second);
$Person_second_class->setGender($PersonGender_second);
$Person_second_class->setSalary($PersonSalary_second);
$Person_second_class->setSs($PersonSS_second);
$Person_second_class->setCourse($PersonCourse_second);
$Person_second_class->setCategory($PersonCategory_second);
$Person_second_class->setDriving($PersonDriving_second);
$allsalary=$Person_first_class->getSalary()+$Person_second_class->getSalary();
$Person_first_class->OutPut();
$Person_second_class->OutPut();
