<?php

declare(strict_types=1);

use Contena\Rector\Set\ContenaSetList;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->importNames();

    $rectorConfig->sets([
        ContenaSetList::CONTENA_6_6_0,
        ContenaSetList::CONTENA_6_6_4,
        ContenaSetList::CONTENA_6_6_10,
        ContenaSetList::CONTENA_6_7_0,
        ContenaSetList::CONTENA_6_8_0,
    ]);
};
