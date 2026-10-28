<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Checkout\Cart\CartBehavior;

function checkRecalculation(CartBehavior $behavior): bool
{
    return $behavior->isRecalculation();
}

function checkNullableRecalculation(?CartBehavior $behavior): ?bool
{
    return $behavior?->isRecalculation();
}

?>
-----
<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Checkout\CheckoutPermissions;
use Contena\Core\Checkout\Cart\CartBehavior;

function checkRecalculation(CartBehavior $behavior): bool
{
    return $behavior->hasPermission(CheckoutPermissions::SKIP_CART_PERSISTENCE);
}

function checkNullableRecalculation(?CartBehavior $behavior): ?bool
{
    return $behavior?->hasPermission(CheckoutPermissions::SKIP_CART_PERSISTENCE);
}

?>
