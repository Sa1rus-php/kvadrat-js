<?php
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