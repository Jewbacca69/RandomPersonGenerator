<?php

namespace RandomPersonGenerator;

class Application
{
    private RandomPersonAPI $randomPersonAPI;

    public function __construct()
    {
        $this->randomPersonAPI = new RandomPersonAPI();
    }

    public function run(): void
    {
        while (true) {
            $input = readline("Press ENTER to generate or 'q' to quit : ");

            if ($input === 'q') {
                echo "Exiting...";
                break;
            }

            $randomUser = $this->randomPersonAPI->fetchData();
            $this->displayPersonData($randomUser);
        }
    }

    public function displayPersonData(RandomPerson $person): void
    {
        echo "===========================" . PHP_EOL;
        echo "Gender: {$person->getGender()}" . PHP_EOL;
        echo "Name: {$person->getName()}" . PHP_EOL;
        echo "Date of birth: {$person->getDateOfBirth()} ( {$person->getAge()} years old )" . PHP_EOL;
        echo "Country: {$person->getCountry()}" . PHP_EOL;
        echo "State: {$person->getState()}" . PHP_EOL;
        echo "City: {$person->getCity()}" . PHP_EOL;
        echo "Street name: {$person->getStreetName()}" . PHP_EOL;
        echo "Street number: {$person->getStreetNumber()}" . PHP_EOL;
        echo "Postcode: {$person->getPostcode()}" . PHP_EOL;
        echo "Email info: {$person->getMailInfo()}" . PHP_EOL;
        echo "===========================" . PHP_EOL;
    }
}
