KunstmaanNewRelicBundle
=======================

Are you tired to see `/app.php` as transaction in your NewRelic account? Good new then, the guys at NewRelic are planning to add Symfony2 support to their PHP extension but since there is no timeline for the release yet, i created this very small (4LOC) bundle that sets the transaction name to the controller and action. For example, you will now see `/WelcomeController::indexAction`. This also means you can start using the Key Transactions feature of NewRelic.

## How does it look?

At 10:05 we activated this bundle...

![At 10:05 we activated this bundle](https://dl.dropbox.com/u/597777/Screenshot%2006%3A11%3A2012%2010%3A23-2.png)

## Installation?
### Composer

composer.json
```json
    "require": {
        "kunstmaan/newrelicbundle": "0.*"
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
