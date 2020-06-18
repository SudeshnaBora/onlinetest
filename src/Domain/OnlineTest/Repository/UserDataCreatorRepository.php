<?php

namespace App\Domain\OnlineTest\Repository;

use App\Domain\OnlineTest\Data\UserData;
use Illuminate\Database\Connection;


/**
 * Repository.
 */
class UserDataCreatorRepository
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
     * Insert onlineTestResults row.
     *
     * @param UserData $userData The userData
     *      
     * @return void
     */
    public function insertData(UserData $data): void
    {
        $row = json_decode(json_encode($data), true);
        $this->connection->table('user_details')->insert($row);
    }
};