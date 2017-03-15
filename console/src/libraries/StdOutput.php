<?php

namespace Thunderphp\Console\Libraries;

class StdOutput {

    const COLOR_DEFAULT         = "\033[0m";
    const COLOR_BLACK           = "\033[0;30m";
    const COLOR_RED             = "\033[0;31m";
    const COLOR_GREEN           = "\033[0;32m";
    const COLOR_YELLOW          = "\033[0;33m";
    const COLOR_BLUE            = "\033[0;34m";
    const COLOR_PURPLE          = "\033[0;35m";
    const COLOR_CYAN            = "\033[0;36m";
    const COLOR_GRAY            = "\033[0;37m";
    const COLOR_DARK_GRAY       = "\033[1;30m";
    const COLOR_LIGHT_RED       = "\033[1;31m";
    const COLOR_LIGHT_GREEN     = "\033[1;32m";
    const COLOR_LIGHT_YELLOW    = "\033[1;33m";
    const COLOR_LIGHT_BLUE      = "\033[1;34m";
    const COLOR_LIGHT_PURPLE    = "\033[1;35m";
    const COLOR_LIGHT_CYAN      = "\033[1;36m";
    const COLOR_WHITE           = "\033[1;37m";

    const BG_BLACK              = "\033[40m";
    const BG_RED                = "\033[41m";
    const BG_GREEN              = "\033[42m";
    const BG_YELLOW             = "\033[43m";
    const BG_BLUE               = "\033[44m";
    const BG_MAGENTA            = "\033[45m";
    const BG_CYAN               = "\033[46m";
    const BG_GRAY               = "\033[47m";

    const NEW_LINE              = "\n\r";

    public function log($content)
    {
        echo self::COLOR_LIGHT_BLUE.$content.self::COLOR_DEFAULT.self::NEW_LINE;
    }

    public function success($content)
    {
        echo self::COLOR_LIGHT_GREEN.$content.self::COLOR_DEFAULT.self::NEW_LINE;
    }

    public function warning($content)
    {
        echo self::COLOR_LIGHT_YELLOW.$content.self::COLOR_DEFAULT.self::NEW_LINE;
    }

    public function error($content)
    {
        echo self::COLOR_LIGHT_RED.$content.self::COLOR_DEFAULT.self::NEW_LINE;
    }

    public function exception(\Exception $e)
    {
        echo self::COLOR_RED."Exception: ".self::COLOR_LIGHT_RED.$e->getMessage().self::COLOR_DEFAULT.self::NEW_LINE;
    }

    public function __destruct()
    {
        echo "\n\r";
    }

}
