<?php

declare(strict_types=1);

use Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClass;
use Contena\Rector\Rule\Class_\InterfaceReplacedWithAbstractClassRector;
use Contena\Rector\Rule\v68\CartBehaviorIsRecalculationRector;
use Contena\Rector\Rule\v68\EntitySearchResultGetEntitiesRector;
use Contena\Rector\Rule\v68\ProductStreamBuilderBuildFiltersToEnrichCriteriaRector;
use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\ClassConstFetch\RenameClassConstFetchRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\RenameClassAndConstFetch;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../config.php');

    $rectorConfig->rule(CartBehaviorIsRecalculationRector::class);
    $rectorConfig->rule(EntitySearchResultGetEntitiesRector::class);
    $rectorConfig->rule(ProductStreamBuilderBuildFiltersToEnrichCriteriaRector::class);

    $rectorConfig->ruleWithConfiguration(
        InterfaceReplacedWithAbstractClassRector::class,
        [
            new InterfaceReplacedWithAbstractClass(
                'Contena\Core\Content\ProductStream\Service\ProductStreamBuilderInterface',
                '\Contena\Core\Content\ProductStream\Service\AbstractProductStreamBuilder',
            ),
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameClassRector::class,
        [
            'Contena\Core\Framework\Adapter\Console\ContenaStyle' => 'Symfony\Component\Console\Style\SymfonyStyle',
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameClassConstFetchRector::class,
        [
            new RenameClassAndConstFetch('Contena\Core\Checkout\Cart\AbstractCartPersister', 'PERSIST_CART_ERROR_PERMISSION', 'Contena\Core\Checkout\CheckoutPermissions', 'PERSIST_CART_ERROR'),

            new RenameClassAndConstFetch('Contena\Core\Checkout\Cart\Delivery\DeliveryProcessor', 'SKIP_DELIVERY_PRICE_RECALCULATION', 'Contena\Core\Checkout\CheckoutPermissions', 'SKIP_PRODUCT_STOCK_VALIDATION'),
            new RenameClassAndConstFetch('Contena\Core\Checkout\Cart\Delivery\DeliveryProcessor', 'SKIP_DELIVERY_TAX_RECALCULATION', 'Contena\Core\Checkout\CheckoutPermissions', 'SKIP_DELIVERY_TAX_RECALCULATION'),

            new RenameClassAndConstFetch('Contena\Core\Checkout\Promotion\Cart\PromotionCollector', 'SKIP_PROMOTION', 'Contena\Core\Checkout\CheckoutPermissions', 'SKIP_PROMOTION'),
            new RenameClassAndConstFetch('Contena\Core\Checkout\Promotion\Cart\PromotionCollector', 'SKIP_AUTOMATIC_PROMOTIONS', 'Contena\Core\Checkout\CheckoutPermissions', 'SKIP_AUTOMATIC_PROMOTIONS'),
            new RenameClassAndConstFetch('Contena\Core\Checkout\Promotion\Cart\PromotionCollector', 'PIN_MANUAL_PROMOTIONS', 'Contena\Core\Checkout\CheckoutPermissions', 'PIN_MANUAL_PROMOTIONS'),
            new RenameClassAndConstFetch('Contena\Core\Checkout\Promotion\Cart\PromotionCollector', 'PIN_AUTOMATIC_PROMOTIONS', 'Contena\Core\Checkout\CheckoutPermissions', 'PIN_AUTOMATIC_PROMOTIONS'),

            new RenameClassAndConstFetch('Contena\Core\Content\Product\Cart\ProductCartProcessor', 'ALLOW_PRODUCT_PRICE_OVERWRITES', 'Contena\Core\Checkout\CheckoutPermissions', 'ALLOW_PRODUCT_PRICE_OVERWRITES'),
            new RenameClassAndConstFetch('Contena\Core\Content\Product\Cart\ProductCartProcessor', 'ALLOW_PRODUCT_LABEL_OVERWRITES', 'Contena\Core\Checkout\CheckoutPermissions', 'ALLOW_PRODUCT_LABEL_OVERWRITES'),
            new RenameClassAndConstFetch('Contena\Core\Content\Product\Cart\ProductCartProcessor', 'SKIP_PRODUCT_RECALCULATION', 'Contena\Core\Checkout\CheckoutPermissions', 'SKIP_PRODUCT_RECALCULATION'),
            new RenameClassAndConstFetch('Contena\Core\Content\Product\Cart\ProductCartProcessor', 'SKIP_PRODUCT_STOCK_VALIDATION', 'Contena\Core\Checkout\CheckoutPermissions', 'SKIP_PRODUCT_STOCK_VALIDATION'),
            new RenameClassAndConstFetch('Contena\Core\Content\Product\Cart\ProductCartProcessor', 'KEEP_INACTIVE_PRODUCT', 'Contena\Core\Checkout\CheckoutPermissions', 'KEEP_INACTIVE_PRODUCT'),
        ],
    );
};
