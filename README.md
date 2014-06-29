##Twig Standalone 
###Dummy building environment for compass/twig

You'll need composer to install twig.
in this Branch youll also need bower
Also suggest compass for the css-demo provided - you can of course use everything else though.

after cloning run

```
$ php composer.phar install
$ [sudo] gem install foundation
```

Then cd to your project and run

```
$ bower install bootstrap-sass
```

add this to your .rb file

```
add_import_path "bower_components/bootstrap-sass/lib"
```

Then run 

```
$ compass compile
```

