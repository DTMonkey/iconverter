### Installation and usage

```
# install iconverter
$ composer global require maximkott/iconverter

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
Iconverter is driven by a config file, **settings.php**, which you can modify to fit your needs.
