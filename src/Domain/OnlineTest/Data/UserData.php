<?php

namespace App\Domain\OnlineTest\Data;

class OnlineTestData
{
    /** @var success */
    public $userId;

    /** @var test_part */
    public $userDetails;

    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
            else {
                throw new Exception("Error Processing Request", 1);
            }
        }
    }

};

    