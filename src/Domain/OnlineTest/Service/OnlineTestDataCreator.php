<?php

namespace App\Domain\OnlineTest\Service;

use App\Domain\OnlineTest\Data\OnlineTestData;
use App\Domain\OnlineTest\Repository\OnlineTestDataCreatorRepository;
use InvalidArgumentException;

/**
 * Service.
 */
final class OnlineTestDataCreator
{
    /**
     * @var OnlineTestDataCreatorRepository
     */
    private $repository;

    /**
     * The constructor.
     *
     * @param OnlineTestDataCreator $repository The repository
     */
    public function __construct(OnlineTestDataCreatorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create a new online test result.
     *
     * @param array $OnlineTestData The online test results
     *
     * @throws InvalidArgumentException
     *
     * @return string Response message
     */
    public function storeData(array $results): string
    {
        // Validation
        foreach($results as $result){
            if (empty($result->subject)) {
                throw new InvalidArgumentException('
                    subject required');
            }
        }

        // Insert result
        $this->repository->insertData($results);

        return "Inserted Successfully";
    }
}