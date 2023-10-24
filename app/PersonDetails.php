<?php

namespace RandomPersonGenerator;

class PersonDetails
{
    private string $title;
    private string $name;
    private string $surname;

    public function __construct(string $title, string $name, string $surname)
    {
        $this->title = $title;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
}
