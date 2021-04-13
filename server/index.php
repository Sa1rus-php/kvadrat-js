<?php
function my_autoloader($class) {
    include $class . '.php';
}
spl_autoload_register('my_autoloader');

$PersonName_first = 'Dmitriy';
$PersonSurname_first = 'Rekhlitskiy';
$PersonAge_first = '18';
$PersonGender_first = 'male';
$PersonSalary_first = '300';
$PersonDriving_first = '0';
$PersonCategory_first = 'B';


$PersonName_second = 'Alex';
$PersonSurname_second = 'Petrov';
$PersonAge_second = '43';
$PersonGender_second = 'male';
$PersonSalary_second = '3000';
$PersonDriving_second = '25';
$PersonCategory_second = 'B';


$Person_first_class = new Driver();
$Person_first_class->setName($PersonName_first);
$Person_first_class->setSurname($PersonSurname_first);
$Person_first_class->setAge($PersonAge_first);
$Person_first_class->setGender($PersonGender_first);
$Person_first_class->setSalary($PersonSalary_first);
$Person_first_class->setCategory($PersonCategory_first);
$Person_first_class->setDriving($PersonDriving_first);
$Person_first_class->OutPutnCounter();

$Person_second_class = new Driver();
$Person_second_class->setName($PersonName_second);
$Person_second_class->setSurname($PersonSurname_second);
$Person_second_class->setAge($PersonAge_second);
$Person_second_class->setGender($PersonGender_second);
$Person_second_class->setSalary($PersonSalary_second);
$Person_second_class->setCategory($PersonCategory_second);
$Person_second_class->setDriving($PersonDriving_second);
$Person_second_class->OutPutnCounter();

