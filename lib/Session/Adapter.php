<?php
declare(strict_types=1);

namespace SimpleMVC\Session;

use SimpleMVC\Session\Exception\InvalidSessionKeyException;

/**
 * Adapter class for managing sessions
 *
 * @package SimpleMVC\Session
 */
class Adapter
{
    private static Adapter $singleton;

    private function __construct()
    {
        session_start();
    }

    /**
     * Instantiates singleton reference if it is not and returns it
     *
     * @return Adapter
     */
    public static function getInstance() : Adapter
    {
        if(false === isset(Adapter::$singleton)) {
            Adapter::$singleton = new Adapter();
        }
        return Adapter::$singleton;
    }

    /**
     * @param $key
     * @return mixed
     * @throws InvalidSessionKeyException
     */
    public function get($key)
    {
        if(false === $this->exists($key)) {
            throw new InvalidSessionKeyException();
        }
        return $_SESSION[$key];
    }

    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value) : void
    {
        $_SESSION[$key] = $value;
    }

    /**
     * @param $key
     * @return bool
     */
    public function unsetItem($key) : bool
    {
        if(false === $this->exists($key)) {
            return false;
        }

        unset($_SESSION[$key]);
        return true;
    }

    /**
     * @param $key
     * @return bool
     */
    public function exists($key) : bool
    {
        if(isset($_SESSION[$key])) {
            return true;
        }
        return false;
    }


    public function end()
    {
        session_destroy();
    }
}