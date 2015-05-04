<?php

namespace Maximkott\Iconverter;

class IconConverter
{
    private $converter;
    private $absoluteIconPath;
    private $outputDirectoryPath;
    private $androidDirectoryPath;
    private $iconName;
    private $settings;

    public function __construct($absoluteIconPath, $outputDirectoryPath, array $settings, $customIconName = null)
    {
        $this->settings = $settings;
        $this->absoluteIconPath = $absoluteIconPath;
        $this->outputDirectoryPath = $outputDirectoryPath;
        if ($customIconName !== null) {
            $this->iconName = $customIconName;
        } else {
            $this->iconName = pathinfo($this->absoluteIconPath, PATHINFO_FILENAME);
        }

        $this->converter = new ImageConverter();
    }

    public function createIcons()
    {
        $outputDirectoryPath = implode("/", [
            $this->outputDirectoryPath, $this->settings["subdir"]
        ]);

        if (is_dir($outputDirectoryPath)) {
            exec("rm -rf $outputDirectoryPath");
        }

        exec("mkdir -p $outputDirectoryPath");

        foreach ($this->settings["icons"] as $iconSettings) {
            $this->createIcon($outputDirectoryPath, $iconSettings);
        }
    }

    private function createIcon($outputDirectoryPath, array $iconSettings)
    {
        if (isset($iconSettings["subdir"])) {
            $outputDirectoryPath = implode("/", [
                $outputDirectoryPath,
                $iconSettings["subdir"]
            ]);

            exec("mkdir -p $outputDirectoryPath");
        }

        $iconPath = implode("/", [
            $outputDirectoryPath,
            $this->formatIconFileName($iconSettings["name"]) . ".png"
        ]);

        if (isset($iconSettings["canvas"])) {
            $this->converter->resizeImageInset($this->absoluteIconPath, $iconPath, $iconSettings["canvas"], $iconSettings["size"]);
        } else {
            $this->converter->resizeImage($this->absoluteIconPath, $iconPath, $iconSettings["size"]);
        }
    }

    private function formatIconFileName($format)
    {
        return str_replace("%filename%", $this->iconName, $format);
    }
}
