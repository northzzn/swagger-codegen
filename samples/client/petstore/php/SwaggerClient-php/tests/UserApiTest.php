<?php

namespace Swagger\Client;

use Swagger\Client\Api\UserApi;

class UserApiTest extends \PHPUnit_Framework_TestCase
{

    /** @var UserApi*/
    private $api;

    public function setUp()
    {
        $this->api = new Api\UserApi();
    }

    // test login use
    public function testLoginUser()
    {
        // initialize the API client
        // login
        $response = $this->api->loginUser('xxxxx', 'yyyyyyyy');
        
        $this->assertInternalType('string', $response);
        /**
        $this->assertRegExp(
            '/^logged in user session/',
            $response,
            "response string starts with 'logged in user session'"
        );
        */
    }
}
