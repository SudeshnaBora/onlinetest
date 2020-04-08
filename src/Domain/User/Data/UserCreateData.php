<?php

namespace App\Domain\User\Data;

class UserCreateData
{
    /** @var username */
    public $username;

    /** @var age */
    public $age;

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

}