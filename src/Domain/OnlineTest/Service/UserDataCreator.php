<?php

namespace App\Domain\OnlineTest\Service;

use App\Domain\OnlineTest\Data\UserData;
use App\Domain\OnlineTest\Repository\UserDataCreatorRepository;
use InvalidArgumentException;

/**
 * Service.
 */
final class UserDataCreator
{
    /**
     * @var OnlineTestDataCreatorRepository
     */
    private $repository;

    /**
     * The constructor.
     *
     * @param UserDataCreator $repository The repository
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