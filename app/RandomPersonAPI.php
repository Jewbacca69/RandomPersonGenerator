<?php

namespace RandomPersonGenerator;

use Carbon\Carbon;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;

class RandomPersonAPI
{
    private const API_URL = "https://randomuser.me/api/";
    private HttpClientInterface $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function fetchData(): Person
    {
        $response = $this->client->request("GET", self::API_URL);

        $responseData = json_decode($response->getContent());

        $response = $responseData->results[0];

        $person = new Person(
            new PersonDetails(
                $response->name->title,
                $response->name->first,
                $response->name->last),
            $response->gender,
            new Carbon($response->dob->date),
            new PersonAddress(
                $response->location->country,
                $response->location->city,
                $response->location->street->name,
                (string)$response->location->street->number
            )
        );

        return $person;
    }
}
