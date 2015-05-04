<?php

namespace Maximkott\Iconverter;

class Iconverter
{
    private $settings;

    public function __construct(array $settings = null)
    {
        if ($settings === null) {
            $settings = require __DIR__ . "/../../settings.php";
        }

        $this->settings = $settings;
    }

    public function createAndroidIcons($absoluteIconPath, $customIconName = null)
    {
        return $this->createIcons($this->settings["groups"]["android"], $absoluteIconPath, $customIconName);
    }

    public function createIosIcons($absoluteIconPath, $customIconName = null)
    {
        return $this->createIcons($this->settings["groups"]["ios"], $absoluteIconPath, $customIconName);
    }

    public function createIcons(array $settings, $absoluteIconPath, $customIconName = null)
    {
        if ($outputDirectoryPath === null) {
            $outputDirectoryPath = $this->generateDefaultOutputDirectoryName($absoluteIconPath);
        }

        $converter = new IconConverter(
            $absoluteIconPath,
            $outputDirectoryPath,
            $settings,
            $customIconName
        );
        $converter->createIcons();

        return $outputDirectoryPath;
    }

    private function generateDefaultOutputDirectoryName($absoluteIconPath)
    {
        return $absoluteIconPath . "_resized";
    }
}
