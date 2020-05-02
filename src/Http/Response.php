<?php

namespace TheBugSoftware\DataGovRo\Http;

use Psr\Http\Message\ResponseInterface;
use stdClass;

class Response
{
    protected ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function statusCode(): int
    {
        return $this->response->getStatusCode();
    }

    public function headers(): array
    {
        return $this->response->getHeaders();
    }

    public function body(): object
    {
        return json_decode($this->formattedResponse());
    }

    public function apiVersion()
    {
        return json_decode($this->response->getBody(), true);
    }

    public function formattedResponse(): string
    {
        $response = json_decode($this->response->getBody());

        return json_encode([
            'success' => $response->success,
            'data'    => $response->result,
        ]);
    }
}
