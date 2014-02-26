IMPORTANT: We recommend that you no longer use this bundle. Since it's inception EkinoNewRelicBundle has appeared and is better maintained and has more features.


KunstmaanNewRelicBundle
=======================

[![Build Status](https://travis-ci.org/Kunstmaan/KunstmaanNewRelicBundle.png?branch=master)](http://travis-ci.org/Kunstmaan/KunstmaanNewRelicBundle)
[![Total Downloads](https://poser.pugx.org/kunstmaan/newrelicbundle/downloads.png)](https://packagist.org/packages/kunstmaan/newrelicbundle)
[![Latest Stable Version](https://poser.pugx.org/kunstmaan/newrelicbundle/v/stable.png)](https://packagist.org/packages/kunstmaan/newrelicbundle)
[![Analytics](https://ga-beacon.appspot.com/UA-3160735-7/Kunstmaan/KunstmaanNewRelicBundle)](https://github.com/igrigorik/ga-beacon)

Are you tired to see `/app.php` as transaction in your NewRelic account? Good new then, the guys at NewRelic are planning to add Symfony2 support to their PHP extension but since there is no timeline for the release yet, i created this very small (4LOC) bundle that sets the transaction name to the controller and action. For example, you will now see `/WelcomeController::indexAction`. This also means you can start using the Key Transactions feature of NewRelic.

## Installation?
### Composer

composer.json
```json
    "require": {
        "kunstmaan/newrelicbundle": "*"
    },
```

AppKernel.php:
```php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Kunstmaan\NewRelicBundle\KunstmaanNewRelicBundle(),
            // ...
        );
```

### deps

deps:
```ini
[KunstmaanNewRelicBundle]
    git=https://github.com/Kunstmaan/KunstmaanNewRelicBundle.git
    target=/bundles/Kunstmaan/NewRelicBundle
```

AppKernel:
```php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Kunstmaan\NewRelicBundle\KunstmaanNewRelicBundle(),
            // ...
        );
```

autoload.php
```
$loader->registerNamespaces(array(
    // ...
    'Kunstmaan'                         => __DIR__.'/../vendor/bundles',
    // ...
));
```

Multiple environments support
-----------------------------

To enable NewRelic for a specific environment, add these lines to the config.yml file for the environment
(ie. config_prod.yml) :

```
kunstmaan_new_relic:
    enabled: true
```

Note that NewRelic is disabled by default.
