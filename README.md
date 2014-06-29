##Twig Standalone 
###Dummy building environment for compass/twig

You'll need composer to install twig.
in this Branch youll also need bower.
Also suggest compass for the css-demo provided - you can of course use everything else though.

after cloning run

```
$ php composer.phar install
$ [sudo] gem install zurb-foundation
```

cd path/to/your-project

```
$ bower install foundation
```

Add this to your config.rb file

```
add_import_path "bower_components/foundation/scss"
```

```
$ compass compile
```

