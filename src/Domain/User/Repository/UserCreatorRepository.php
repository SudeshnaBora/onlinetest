<?php

namespace App\Domain\User\Repository;

use App\Domain\User\Data\UserCreateData;
use Illuminate\Database\Connection;


/**
 * Repository.
 */
class UserCreatorRepository
{
    /**
     * @var Connection The database connection
     */
    private $connection;

    /**
     * Constructor.
     *
     * @param Connection  $connection The database connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Insert user row.
     *
     * @param UserCreateData $user The user
     *
     * @return int The new ID
     */
    public function insertUser(UserCreateData $user): int
    {
        $row = json_decode(json_encode($user), true);
        $this->connection->table('users')->insert($row);

        return 1;
    }
}