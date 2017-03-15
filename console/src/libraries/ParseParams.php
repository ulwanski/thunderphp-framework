<?php

namespace Thunderphp\Console\Libraries;

class ParseParams {

    const PARAM_EMPTY_COMMAND    = 0x00;
    const PARAM_INTERNAL_COMMAND = 0x01;
    const PARAM_UNKNOWN_COMMAND  = 0xFF;

    private $args = null;

    public function __construct($args)
    {
        $this->args = $args;
    }

    public function parse()
    {
        if(!is_array($this->args)){
            throw new \Exception("Unknown command", self::PARAM_UNKNOWN_COMMAND);
        }

        if(count($this->args) <= 1){
            throw new \Exception("Empty command", self::PARAM_EMPTY_COMMAND);
        }

        $internalCommand = (bool)preg_match("/^[a-z]+:[a-z]+$/", $this->args[1]);

        if($internalCommand){
            $this->runInternalCommand($this->args);
        }

    }

    private function runInternalCommand($args)
    {
        $parts = explode(':', $args[1]);

        $className = ucfirst(array_shift($parts)).'Cmd';
        $actionName = strtolower(array_shift($parts)).'Action';
        $paramName = strtolower(array_shift($parts));
        $fileName = $className.'.php';
        $classPath = 'Thunderphp\Console\Commands\\'.$className;
        $filePath = __DIR__.'/../commands/'.$fileName;

        if(!file_exists($filePath)){
            throw new \Exception("Unknown internal command: ".$args[1], self::PARAM_UNKNOWN_COMMAND);
        }

        require_once $filePath;

        $class = new $classPath();
        if(!method_exists($class, $actionName)){
            throw new \Exception("Unknown internal command: ".$args[1], self::PARAM_UNKNOWN_COMMAND);
        }

        $class->$actionName($paramName);
    }

}