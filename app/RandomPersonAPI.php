<?php

namespace RandomPersonGenerator;

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

    public function fetchData(): ?RandomPerson
    {
        $response = $this->client->request("GET", self::API_URL);

        $responseData = $response->toArray();

        if (isset($responseData["results"][0])) {
            return new RandomPerson($responseData["results"][0]);
        }

        return null;
    }
}
