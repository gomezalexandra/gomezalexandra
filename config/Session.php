<?php
namespace App\config;

class Session
{
    private $session;

    public function __construct($session)
    {
        $this->session = $session;
    }

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function get($name)
    {
        if(isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
    }

    public function show($name)
    {
        if(isset($_SESSION[$name]))
        {
            $value = $this->get($name);
            $this->remove($name);
            return $value;
        }
    }

    public function remove($name)
    {
        unset($_SESSION[$name]);
    }

    public function start()
    {
        session_start();
    }

    public function stop()
    {
        session_destroy();
    }
}