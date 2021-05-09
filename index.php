<?php
class Application {
    private static Application $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Application {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo "test";
        }
        return self::$instance;
    }
}
$obj1 = Application::getInstance();
$obj2 = Application::getInstance();
//$obj3 = new Application();