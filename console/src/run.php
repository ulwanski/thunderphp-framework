<?php
namespace Thunderphp\Console;
require "common.php";

use \Thunderphp\Console\Libraries\StdOutput;
use \Thunderphp\Console\Libraries\ParseParams;

class PharRun {

    /** @var StdOutput */
    private $output = null;

    public function __construct($argv = array())
    {
        $this->output = new StdOutput();
        $params = new ParseParams($argv);

        $this->output->warning('Foo bar');

        try {
            $params->parse();
        } catch (\Exception $e){
            $this->output->exception($e);
        }

    }

    public function printHelp()
    {

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

}