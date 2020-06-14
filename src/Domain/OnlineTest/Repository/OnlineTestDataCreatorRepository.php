<?php

namespace App\Domain\OnlineTest\Repository;

use App\Domain\OnlineTest\Data\OnlineTestData;
use Illuminate\Database\Connection;


/**
 * Repository.
 */
class OnlineTestDataCreatorRepository
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
     * @param array $onlineTestResults The onlineTestResults
     *
     * @return void
     */
    public function insertData(array $onlineTestResults): void
    {
        $row = json_decode(json_encode($onlineTestResults), true);
        $this->connection->table('online_test')->insert($row);

        /**
         * 
         *         foreach( $your_data as $row ) {
         *   $this->connection->table('online_test')->insert($your_data);
         * }
         */
    }
}