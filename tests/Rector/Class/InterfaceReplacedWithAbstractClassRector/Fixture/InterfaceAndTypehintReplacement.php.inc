<?php

namespace Contena\Core\Checkout\Cart;

interface CartPersisterInterface {}
abstract class AbstractCartPersister {}

class MyClass implements CartPersisterInterface
{
    private CartPersisterInterface $cartPersister;

    public function __construct(CartPersisterInterface $cartPersister)
    {
        $this->cartPersister = $cartPersister;
    }
}
-----
<?php

namespace Contena\Core\Checkout\Cart;

interface CartPersisterInterface {}
abstract class AbstractCartPersister {}

class MyClass extends \Contena\Core\Checkout\Cart\AbstractCartPersister
{
    private \Contena\Core\Checkout\Cart\AbstractCartPersister $cartPersister;
    public function __construct(\Contena\Core\Checkout\Cart\AbstractCartPersister $cartPersister)
    {
        $this->cartPersister = $cartPersister;
    }
}
