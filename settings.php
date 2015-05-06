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
                ["name" => "%filename%", "size" => "57x57"],
                ["name" => "%filename%@2x", "size" => "114x114"],
                ["name" => "%filename%-Small", "size" => "29x29"],
                ["name" => "%filename%-Small@2x", "size" => "58x58"],
                ["name" => "%filename%-Small@3x", "size" => "87x87"],
                ["name" => "%filename%-Small-50", "size" => "50x50"],
                ["name" => "%filename%-Small-50@2x", "size" => "100x100"],
                ["name" => "%filename%-40", "size" => "40x40"],
                ["name" => "%filename%-40@2x", "size" => "80x80"],
                ["name" => "%filename%-40@3x", "size" => "120x120"],
                ["name" => "%filename%-60@2x", "size" => "120x120"],
                ["name" => "%filename%-60@3x", "size" => "180x180"],
                ["name" => "%filename%-72", "size" => "72x72"],
                ["name" => "%filename%-72@2x", "size" => "144x144"],
                ["name" => "%filename%-76", "size" => "76x76"],
                ["name" => "%filename%-76@2x", "size" => "152x152"],
                ["name" => "%filename%-120", "size" => "120x120"],
                ["name" => "iTunesArtwork", "size" => "512x512"],
                ["name" => "iTunesArtwork@2x", "size" => "1024x1024"],
            ],
        ],
        "windowsPhone" => [
            "subdir" => "windowsPhone",
            "icons" => [
                ["name" => "Square71x71_%filename%", "subdir" => "Scale-100", "size" => "71x71"],
                ["name" => "Square150x150_%filename%", "subdir" => "Scale-100", "size" => "150x150"],
                ["name" => "Wide310x150_%filename%", "subdir" => "Scale-100", "size" => "310x150"],
                ["name" => "Square44x44_%filename%", "subdir" => "Scale-100", "size" => "44x44"],
                ["name" => "StoreLogo", "subdir" => "Scale-100", "size" => "50x50"],
                ["name" => "BadgeLogo", "subdir" => "Scale-100", "size" => "24x24"],
                ["name" => "SplashScreen", "subdir" => "Scale-100", "size" => "480x800"],

                ["name" => "Square71x71_%filename%", "subdir" => "Scale-140", "size" => "99x99"],
                ["name" => "Square150x150_%filename%", "subdir" => "Scale-140", "size" => "210x210"],
                ["name" => "Wide310x150_%filename%", "subdir" => "Scale-140", "size" => "434x210"],
                ["name" => "Square44x44_%filename%", "subdir" => "Scale-140", "size" => "62x62"],
                ["name" => "StoreLogo", "subdir" => "Scale-140", "size" => "70x70"],
                ["name" => "BadgeLogo", "subdir" => "Scale-140", "size" => "33x33"],
                ["name" => "SplashScreen", "subdir" => "Scale-140", "size" => "672x1120"],

                ["name" => "Square71x71_%filename%", "subdir" => "Scale-240", "size" => "170x170"],
                ["name" => "Square150x150_%filename%", "subdir" => "Scale-240", "size" => "360x360"],
                ["name" => "Wide310x150_%filename%", "subdir" => "Scale-240", "size" => "744x360"],
                ["name" => "Square44x44_%filename%", "subdir" => "Scale-240", "size" => "106x106"],
                ["name" => "StoreLogo", "subdir" => "Scale-240", "size" => "120x120"],
                ["name" => "BadgeLogo", "subdir" => "Scale-240", "size" => "58x58"],
                ["name" => "SplashScreen", "subdir" => "Scale-240", "size" => "1152x1920"],
            ]
        ]
    ],
];
