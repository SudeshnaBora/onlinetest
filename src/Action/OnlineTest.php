<?php

namespace App\Action;

use App\Domain\OnlineTest\Data\OnlineTestData;
use App\Domain\OnlineTest\Service\OnlineTestDataCreator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class OnlineTest
{
    private $onlineTest;

    public function __construct(OnlineTestDataCreator $onlineTest)
    {
        $this->onlineTest = $onlineTest;
    }

    public function insertData(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        // Collect input from the HTTP request
        $data = $request->getParsedBody();

        // Mapping (should be done in a mapper class)
        $onlineTestResults = [];
        foreach($data as $requestKey => $requestValue) {
            if(is_array($requestValue)){
                $result = new OnlineTestData($requestValue);
                array_push($onlineTestResults, $result);
            }
            else {
                throw new Exception("Error Processing Request", 1);
                
            }
        }

        // Invoke the Domain with inputs and retain the result
        $responseString = $this->onlineTest->storeData($onlineTestResults);

        // Transform the result into the JSON representation
        $result = [
            'Status' => $responseString
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    }

    public function giveMessage(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {

        $result = [
            'Status' => 'Hello World'
        ];

        $response->getBody()->write((string)json_encode($result));

        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
}