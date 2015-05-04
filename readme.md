### Installing graphicsmagick

You will have to install graphicsmagick to use iconverter.

```
# on OSX
$ brew install graphicsmagick

# on Ubuntu
$ sudo add-apt-repository ppa:dhor/myway
$ sudo apt-get update
$ sudo apt-get install graphicsmagick
```

### Installing iconverter

```
# install iconverter
$ composer global require maximkott/iconverter:dev-master
```

### Command line usage

View available options:

```
$ iconverter -h
    usage:
        icon            relative icon path
        -n --name       name for generated icons
        -a --android    convert icon for android
        -i --ios        convert icon for ios
```

Generate icons from an image:

```
$ iconverter $ICON$
```

You may change the name of the generated icons by providing a custom name trough the --name option:

```
$ iconverter icon.png --name home
```

This will generate icons as follows:

```
* ic_home.png
* ic_stat_home.png
* home-76.pg
* home-Small@2x.png
```

### PHP usage

```
$converter = new Iconverter();
$converter->createIosIcons($absoluteIconPath, $customIconName);
```

### Custom settings

Iconverter is driven by a config file, [**settings.php**](https://github.com/maximkott/iconverter/blob/master/settings.php), which you can modify to fit your needs.

### Output

Generating an icon without further options will generate this file sturcture for you.

```
* icon.png
> icon.png_resized # resized icons are in here
   > android
       > drawable-hdpi
            * ic_icon.png
            * ic_launcher.png
            * ic_small_icon.png
            * ic_stat_icon.png
        > drawable-mdpi
            * ic_icon.png
            * ic_launcher.png
            * ic_small_icon.png
            * ic_stat_icon.png
        > drawable-xhdpi
            * ic_icon.png
            * ic_launcher.png
            * ic_small_icon.png
            * ic_stat_icon.png
        > drawable-xxhdpi
            * ic_icon.png
            * ic_launcher.png
            * ic_small_icon.png
            * ic_stat_icon.png
        > drawable-xxxhdpi
            * ic_icon.png
            * ic_launcher.png
            * ic_small_icon.png
            * ic_stat_icon.png
        * playstore-icon.png
    > ios
        * iTunesArtwork.png
        * icon-40@3x.png
        * icon-76.png
        * icon-Small@2x.png
        * iTunesArtwork@2x.png
        * icon-60@2x.png
        * icon-76@2x.png
        * icon-Small@3x.png
        * icon-120.png
        * icon-60@3x.png
        * icon-Small-50.png
        * icon.png
        * icon-40.png
        * icon-72.png
        * icon-Small-50@2x.png
        * icon@2x.png
        * icon-40@2x.png
        * icon-72@2x.png
        * icon-Small.png
```
