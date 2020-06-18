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
     * @var UserDataCreatorRepository
     */
    private $repository;

    /**
     * The constructor.
     *
     * @param UserDataCreator $repository The repository
     */
    public function __construct(UserDataCreatorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create a new online test result.
     *
     * @param UserData $data The online test results
     *
     * @throws InvalidArgumentException
     *
     * @return string Response message
     */
    public function storeData(UserData $data): string
    {
        // Insert result
        $this->repository->insertData($data);

        return "Inserted Successfully";
    }
}