##Twig Standalone 
###Dummy building environment for compass/twig

You'll need composer to install twig.
in this Branch youll also need bower.
Also suggest compass for the css-demo provided - you can of course use everything else though.

after cloning, cd path/to/your-project and run

```
$ php composer.phar install
$ [sudo] gem install foundation
$ bower install foundation
```

Add this to your config.rb file

```
add_import_path "bower_components/foundation/scss"
```

And run

```
$ compass compile
```

