<?php

namespace RandomPersonGenerator;

use Carbon\Carbon;

class Person
{
    private string $gender;
    private Carbon $dateOfBirth;
    private PersonAddress $address;
    private PersonDetails $personDetails;

    public function __construct(PersonDetails $personDetails, $gender, Carbon $dateOfBirth, PersonAddress $address)
    {
        $this->personDetails = $personDetails;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getDateOfBirth(): Carbon
    {
        return $this->dateOfBirth;
    }

    public function getAge(): int
    {
        return (new Carbon())->diffInYears($this->dateOfBirth);
    }

    public function getAddress(): PersonAddress
    {
        return $this->address;
    }

    public function getPersonDetails(): PersonDetails
    {
        return $this->personDetails;
    }
}
