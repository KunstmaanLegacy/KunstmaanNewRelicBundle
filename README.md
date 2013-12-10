KunstmaanNewRelicBundle
=======================

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
