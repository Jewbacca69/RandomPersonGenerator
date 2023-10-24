<?php

require_once "vendor/autoload.php";

use RandomPersonGenerator\RandomPersonAPI;

$randomPersonApi = new RandomPersonAPI();

$randomPerson = $randomPersonApi->fetchData();

echo "
Full name: {$randomPerson->getPersonDetails()->getTitle()} {$randomPerson->getPersonDetails()->getName()} {$randomPerson->getPersonDetails()->getSurname()}
Age : {$randomPerson->getAge()}
Gender : {$randomPerson->getGender()}
Date of birth : {$randomPerson->getDateOfBirth()->format("Y-m-d")}
Address : {$randomPerson->getAddress()->getFullAddress()}
";
