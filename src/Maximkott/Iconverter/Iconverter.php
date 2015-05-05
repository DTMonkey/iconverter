<?php

namespace Maximkott\Iconverter;

class Iconverter
{
    private $absoluteIconPath;
    private $customIconName;
    private $settings;

    public function __construct($absoluteIconPath, $customIconName = null, array $settings = null)
    {
        if ($settings === null) {
            $settings = require __DIR__ . "/../../../settings.php";
        }

        $this->absoluteIconPath = $absoluteIconPath;
        $this->customIconName = $customIconName;
        $this->settings = $settings;
    }

    public function createAndroidIcons()
    {
        return $this->createIcons($this->settings["groups"]["android"], $this->absoluteIconPath, $this->customIconName);
    }

    public function createIosIcons()
    {
        return $this->createIcons($this->settings["groups"]["ios"], $this->absoluteIconPath, $this->customIconName);
    }

    public function createIcons(array $settings, $absoluteIconPath, $customIconName = null, $outputDirectoryPath = null)
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

    public function zipIcons()
    {
        $outputDirectoryPath = $this->generateDefaultOutputDirectoryName($this->absoluteIconPath);

        if (is_dir($outputDirectoryPath)) {
            $zipName = "icons.zip";
            $baseDir = dirname($outputDirectoryPath);
            $outputDir = basename($outputDirectoryPath);
            $absoluteZipPath =  "$baseDir/$zipName";

            if (file_exists($absoluteZipPath)) {
                exec("rm -rf $absoluteZipPath");
            }

            exec("cd $baseDir; zip -r $zipName $outputDir");

            return $absoluteZipPath;
        }

        return null;
    }
}
