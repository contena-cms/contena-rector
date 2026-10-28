<?php

declare(strict_types=1);

use Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClass;
use Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClassRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../config/config_test.php');
    $rectorConfig->ruleWithConfiguration(
        InterfaceReplacedWithAbstractClassRector::class,
        [
            new InterfaceReplacedWithAbstractClass('CartFoo', 'AbstractCartFoo'),
            new InterfaceReplacedWithAbstractClass('Contena\Core\Checkout\Cart\CartPersisterInterface', '\Contena\Core\Checkout\Cart\AbstractCartPersister'),
        ],
    );
};
