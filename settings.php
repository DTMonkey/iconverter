<?php

return [
    "subdir" => "%filename%_resized",
    "groups" => [
        "android" => [
            "subdir" => "android",
            "icons" => [
                ["name" => "playstore-icon", "size" => "512x512"],
                ["name" => "ic_launcher", "subdir" => "drawable-mdpi", "size" => "48x48"],
                ["name" => "ic_launcher", "subdir" => "drawable-hdpi", "size" => "72x72"],
                ["name" => "ic_launcher", "subdir" => "drawable-xhdpi", "size" => "96x96"],
                ["name" => "ic_launcher", "subdir" => "drawable-xxhdpi", "size" => "144x144"],
                ["name" => "ic_launcher", "subdir" => "drawable-xxxhdpi", "size" => "192x192"],

                ["name" => "ic_%filename%", "subdir" => "drawable-mdpi", "size" => "24x24", "canvas" => "32x32"],
                ["name" => "ic_%filename%", "subdir" => "drawable-hdpi", "size" => "36x36", "canvas" => "48x48"],
                ["name" => "ic_%filename%", "subdir" => "drawable-xhdpi", "size" => "48x48", "canvas" => "64x64"],
                ["name" => "ic_%filename%", "subdir" => "drawable-xxhdpi", "size" => "72x72", "canvas" => "96x96"],
                ["name" => "ic_%filename%", "subdir" => "drawable-xxxhdpi", "size" => "96x96", "canvas" => "128x128"],


                ["name" => "ic_small_%filename%", "subdir" => "drawable-mdpi", "size" => "12x12", "canvas" => "16x16"],
                ["name" => "ic_small_%filename%", "subdir" => "drawable-hdpi", "size" => "18x18", "canvas" => "24x24"],
                ["name" => "ic_small_%filename%", "subdir" => "drawable-xhdpi", "size" => "24x24", "canvas" => "32x32"],
                ["name" => "ic_small_%filename%", "subdir" => "drawable-xxhdpi", "size" => "36x36", "canvas" => "48x48"],
                ["name" => "ic_small_%filename%", "subdir" => "drawable-xxxhdpi", "size" => "48x48", "canvas" => "64x64"],


                ["name" => "ic_stat_%filename%", "subdir" => "drawable-mdpi", "size" => "22x22", "canvas" => "24x24"],
                ["name" => "ic_stat_%filename%", "subdir" => "drawable-hdpi", "size" => "33x33", "canvas" => "36x36"],
                ["name" => "ic_stat_%filename%", "subdir" => "drawable-xhdpi", "size" => "44x44", "canvas" => "48x48"],
                ["name" => "ic_stat_%filename%", "subdir" => "drawable-xxhdpi", "size" => "66x66", "canvas" => "72x72"],
                ["name" => "ic_stat_%filename%", "subdir" => "drawable-xxxhdpi", "size" => "88x88", "canvas" => "96x96"],
            ],
        ],
        "ios" => [
            "subdir" => "ios",
            "icons" => [
                ["size" => "57x57", "name" => "%filename%"],
                ["size" => "114x114", "name" => "%filename%@2x"],
                ["size" => "29x29", "name" => "%filename%-Small"],
                ["size" => "58x58", "name" => "%filename%-Small@2x"],
                ["size" => "87x87", "name" => "%filename%-Small@3x"],
                ["size" => "50x50", "name" => "%filename%-Small-50"],
                ["size" => "100x100", "name" => "%filename%-Small-50@2x"],
                ["size" => "40x40", "name" => "%filename%-40"],
                ["size" => "80x80", "name" => "%filename%-40@2x"],
                ["size" => "120x120", "name" => "%filename%-40@3x"],
                ["size" => "120x120", "name" => "%filename%-60@2x"],
                ["size" => "180x180", "name" => "%filename%-60@3x"],
                ["size" => "72x72", "name" => "%filename%-72"],
                ["size" => "144x144", "name" => "%filename%-72@2x"],
                ["size" => "76x76", "name" => "%filename%-76"],
                ["size" => "152x152", "name" => "%filename%-76@2x"],
                ["size" => "120x120", "name" => "%filename%-120"],
                ["size" => "512x512", "name" => "iTunesArtwork"],
                ["size" => "1024x1024", "name" => "iTunesArtwork@2x"],
            ],
        ],
    ],
];
