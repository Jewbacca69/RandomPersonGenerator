<?php

namespace RandomPersonGenerator;

class PersonAddress
{
    private string $country;
    private string $city;
    private string $streetName;
    private string $streetNumber;

    public function __construct(string $country, string $city, string $streetName, string $streetNumber)
    {
        $this->country = $country;
        $this->city = $city;
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getFullAddress(): string
    {
        return $this->country . " " . $this->city . " " . $this->streetName . " " . $this->streetNumber;
    }
}
