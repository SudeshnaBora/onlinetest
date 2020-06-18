<?php

namespace App\Domain\OnlineTest\Data;

class UserData
{
    /** @var success */
    public $subject;

    /** @var test_part */
    public $prolific_id;

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
