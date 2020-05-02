<?php

namespace TheBugSoftware\DataGovRo\Http;

use Exception;
use GuzzleHttp\Client;
use TheBugSoftware\DataGovRo\Exceptions\RequestException;

class Request
{
    protected string $apiUrl = 'https://data.gov.ro/api/3/';

    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'verify'   => false,
        ]);
    }

    /**
     * @param string $path
     *
     * @return \TheBugSoftware\DataGovRo\Http\Response
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function get(string $path = ''): Response
    {
        try {
            $response = $this->client->get($path);

            return new Response($response);
        } catch (Exception $e) {
            throw new RequestException($e->getMessage());
        }
    }

    /**
     * @return array
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function getApiVersion(): array
    {
        return $this->get()->apiVersion();
    }
}
