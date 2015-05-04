<?php

namespace Maximkott\Iconverter;

class ConsoleApplication
{
    private $terminal;
    private $cwd;
    private $args;
    private $relativeIconPath;
    private $absoluteIconPath;

    public function __construct(array $args)
    {
        $this->terminal = new Terminal();
        $this->args = array_slice($args, 1);
        $this->flags = array_slice($args, 2);
    }

    private function checkRequirements()
    {
        $check = exec("which gm");

        if (!! empty($check)) {
            $this->terminal->say("error: you have to install graphicsmagick.");
            $this->terminal->say("    brew install graphicsmagick");
            exit;
        }
    }

    public function run()
    {
        $this->commandHelp();
        $this->commandConvert();
    }

    private function commandHelp()
    {
        if (in_array("-h", $this->args) or in_array("--help", $this->args) or count($this->args) == 0) {
            $this->terminal->say("usage:");
            $this->terminal->say("    icon            relative icon path");
            $this->terminal->say("    -n --name       name for generated icons");
            $this->terminal->say("    -a --android    convert icon for android");
            $this->terminal->say("    -i --ios        convert icon for ios");

            $this->abort();
        }
    }

    private function commandConvert()
    {
        $this->checkRequirements();

        $this->cwd = getcwd();

        if (isset($this->args[0])) {
            $this->relativeIconPath = $this->args[0];
        } else {
            $this->abort("error: specify an icon path");
        }

        if (in_array(substr($this->relativeIconPath, 0, 1), ["/", "~"])) {
            $this->absoluteIconPath = $this->relativeIconPath;
        } else {
            $this->absoluteIconPath = implode("/", [$this->cwd, $this->relativeIconPath]);
        }

        $customIconName = null;

        if ( ! file_exists($this->absoluteIconPath)) {
            $this->abort("error: no icon found at: $this->absoluteIconPath");
        }


        if (in_array("-n", $this->flags) or in_array("--name", $this->flags)) {
            $index = array_search("-n", $this->flags);

            if ($index === false) {
                $index = array_search("--name", $this->flags);
            }

            $index++;

            if ( ! isset($this->flags[$index])) {
                $this->abort("error: enter an icon name");
            }

            $customIconName = $this->flags[$index];
        }

        if ( ! isset($this->args[0])) {
            $this->terminal->say("error: enter an icon path"); exit;
        }

        if (in_array("-a", $this->flags) or in_array("--android", $this->flags)) {
            $this->createAndroidIcons($this->absoluteIconPath, $customIconName);
        }

        if (in_array("-i", $this->flags) or in_array("--ios", $this->flags)) {
            $this->createIosIcons($this->absoluteIconPath, $customIconName);
        }

        if ( ! in_array("-a", $this->flags)
            and ! in_array("--android", $this->flags)
            and ! in_array("-i", $this->flags)
            and ! in_array("--ios", $this->flags)
        ) {
            $this->createAndroidIcons($this->absoluteIconPath, $customIconName);
            $this->createIosIcons($this->absoluteIconPath, $customIconName);
        }
    }

    private function createAndroidIcons($absoluteIconPath, $customIconName)
    {
        $this->terminal->say("creating android icons.");
        $converter = new Iconverter();
        $converter->createAndroidIcons($absoluteIconPath, $customIconName);
    }

    private function createIosIcons($absoluteIconPath, $customIconName)
    {
        $this->terminal->say("creating ios icons.");
        $converter = new Iconverter();
        $converter->createIosIcons($absoluteIconPath, $customIconName);
    }

    private function abort($string = null)
    {
        if ($string !== null) {
            $this->terminal->say($string);
        }

        exit(0);
    }
}
