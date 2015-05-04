<?php

namespace Maximkott\Iconverter;

class Terminal
{
    public function read($string)
    {
        $this->write("$string: ");

        $handle = fopen("php://stdin","r");
        $line = trim(fgets($handle));

        return $line;
    }

    public function ask($string, $default = false)
    {
        $this->write("$string (y/n): ");

        $handle = fopen("php://stdin","r");
        $line = trim(fgets($handle));

        if ($line == "") {
            return $default;
        } else {
            return in_array($line, ["y", "yes"]);
        }
    }

    public function write($string)
    {
        echo $string;
    }

    public function say($string, $nl = true)
    {
        echo "$string\n";
    }
}
