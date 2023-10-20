<?php

namespace RandomPersonGenerator;

use Carbon\Carbon;

class RandomPerson
{
    private array $personData;

    public function __construct(array $personData)
    {
        $this->personData = $personData;
    }

    public function getGender(): string
    {
        return $this->personData['gender'];
    }

    public function getName(): string
    {
        $nameData = $this->personData['name'];
        return $nameData['title'] . ' ' . $nameData['first'] . ' ' . $nameData['last'];
    }

    public function getDateOfBirth(): string
    {
        $dateOfBirth = Carbon::createFromFormat("Y-m-d\TH:i:s.u\Z", $this->personData['dob']['date']);
        return $dateOfBirth->format("m/d/Y H:i:s");
    }

    public function getAge(): string
    {
        return $this->personData['dob']['age'];
    }

    public function getStreetNumber(): int
    {
        return $this->personData['location']['street']['number'];
    }

    public function getStreetName(): string
    {
        return $this->personData['location']['street']['name'];
    }

    public function getCity(): string
    {
        return $this->personData['location']['city'];
    }

    public function getState(): string
    {
        return $this->personData['location']['state'];
    }

    public function getCountry(): string
    {
        return $this->personData['location']['country'];
    }

    public function getPostcode(): string
    {
        return $this->personData['location']['postcode'];
    }

    public function getMailInfo(): string
    {
        $email = $this->personData["email"];
        $username = $this->personData["login"]["username"];
        $password = $this->personData["login"]["password"];
        $registeredDate = $this->getFormattedRegistrationDate();

        return "$email, Username: $username, Password: $password, Registered: $registeredDate";
    }

    private function getFormattedRegistrationDate(): string
    {
        $registeredDate = Carbon::createFromFormat("Y-m-d\TH:i:s.u\Z", $this->personData['registered']["date"]);
        return $registeredDate->format("m/d/Y H:i:s");
    }
}