<?php

namespace Datartisan\Tests

class DanelTest extends PHPUnit_Framework_TestCase {

    protected $danel = null;

    protected function setUp() {
        parent::setUp();
        
        $this->danel = new \Datartisan\Danel("PROJECT_TOKEN");
    }

    protected function tearDown() {
        parent::tearDown();
    }

    public function testToken() {
        $this->assertEquals($this->danel->token, "PROJECT_TOKEN");
    }

}

