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

### Usage
```
# view available options
$ iconverter -h
    usage:
        icon            relative icon path
        -n --name       name for generated icons
        -a --android    convert icon for android
        -i --ios        convert icon for ios

# convert an icon
$ iconverter $ICON$
```

### Custom settings
Iconverter is driven by a config file, **settings.php** (https://github.com/maximkott/iconverter/blob/master/settings.php), which you can modify to fit your needs.
