# Rector for Contena

This project extends Rector with multiple Rules for Contena specific. 

See available [Contena rules](/docs/rector_rules_overview.md)


## Install

Make sure to install both `contena-cms/contena-rector` as well as `rector/rector`.

```bash
composer req contena-cms/contena-rector --dev
```

## Use Sets

To add a set to your config, use `Contena\Rector\Set\ContenaSetList` class and pick one of constants:

```php
use Rector\Config\RectorConfig;
use Contena\Rector\Set\ContenaSetList;

return RectorConfig::configure()
    ->withSets([
        ContenaSetList::CONTENA_6_7_0,
    ]);
```

## Use directly the config

```bash
# Clone this repo

composer install

# Dry Run
./vendor/bin/rector process --config config/contena-6.7.0.php --autoload-file [CONTENA]/vendor/autoload.php [CONTENA]/custom/plugins/MyPlugin --dry-run

# Normal Run
./vendor/bin/rector process --config config/contena-6.7.0.php --autoload-file [CONTENA]/vendor/autoload.php [CONTENA]/custom/plugins/MyPlugin
```

## License

Source code is licensed under Apache-2.0. The upstream MIT license is bundled in the NOTICE file.
