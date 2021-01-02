<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Session;

use PHPUnit\Framework\TestCase;
use SimpleMVC\Session\Adapter;
use SimpleMVC\Session\Exception\InvalidSessionKeyException;

/**
 * This test makes use of sessions.
 * Testing session under normal conditions will cause an error.
 * For this reason the tests here are disabled.
 *
 * To run these tests run the following command:
 * vendor/bin/phpunit --stderr
 *
 * This will prevent any undesired error.
 *
 * @package SimpleMVC\Test\Session
 */
class SessionTest extends TestCase
{
    function setUp() : void
    {
        $this->session = Adapter::getInstance();
    }

    /*
    public function testSetSessionVariable()
    {
        $this->session->set('test', 'test');

        $this->assertEquals($_SESSION['test'], 'test');
    }

    public function testGetSessionVariable()
    {
        $this->session->set('test', 'test');

        $this->assertEquals($this->session->get('test'), 'test');
    }

    public function testGetInvalidSessionVariable()
    {
        $this->expectException(InvalidSessionKeyException::class);
        $this->session->get('invalid_session_key');
    }

    public function testUnsetSessionVariable()
    {
        $_SESSION['test'] = 'tested';
        $this->session->unsetItem('test');

        $this->assertEmpty($_SESSION);
    }
    */
}