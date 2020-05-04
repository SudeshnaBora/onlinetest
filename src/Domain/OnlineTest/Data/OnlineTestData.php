<?php

namespace App\Domain\OnlineTest\Data;

class OnlineTestData
{
    /** @var __experimentName */
    public $__experimentName;

    /** @var __participant */
    public $__participant;

    /** @var __session */
    public $__session;

    /** @var __datetime */
    public $__datetime;

    /** @var key_resp_keys */
    public $key_resp_keys;

    /** @var participant */
    public $participant;

    /** @var session */
    public $session;

    /** @var date */
    public $date;

    /** @var key_resp_rt */
    public $key_resp_rt;

    /** @var expName */
    public $expName;

    /** @var psychopyVersion */
    public $psychopyVersion;

    /** @var OS */
    public $OS;

    /** @var frameRate */
    public $frameRate;

    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }else if($key == "key_resp.rt"){
                $key = "key_resp_rt";
                $this->$key = $val;
            }else if($key == "key_resp.keys"){
                $key = "key_resp_keys";
                $this->$key = $val;
            }
            else {
                throw new Exception("Error Processing Request", 1);
            }
        }
    }

};

    