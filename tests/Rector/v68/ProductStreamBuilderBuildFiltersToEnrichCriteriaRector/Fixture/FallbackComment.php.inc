<?php

namespace Contena\Core\Content\ProductStream\Service;

interface ProductStreamBuilderInterface
{
    /** @return array<int, mixed> */
    public function buildFilters(string $id, \Contena\Core\Framework\Context $context): array;
}

namespace MyPlugin;

use Contena\Core\Content\ProductStream\Service\ProductStreamBuilderInterface;
use Contena\Core\Framework\Context;

class MyService
{
    public function __construct(
        private readonly ProductStreamBuilderInterface $productStreamBuilder,
    ) {
    }

    public function doSomething(string $streamId, Context $context): array
    {
        return $this->productStreamBuilder->buildFilters($streamId, $context);
    }
}
-----
<?php

namespace Contena\Core\Content\ProductStream\Service;

interface ProductStreamBuilderInterface
{
    /** @return array<int, mixed> */
    public function buildFilters(string $id, \Contena\Core\Framework\Context $context): array;
}

namespace MyPlugin;

use Contena\Core\Content\ProductStream\Service\ProductStreamBuilderInterface;
use Contena\Core\Framework\Context;

class MyService
{
    public function __construct(
        private readonly ProductStreamBuilderInterface $productStreamBuilder,
    ) {
    }

    public function doSomething(string $streamId, Context $context): array
    {
        // TODO: Replace buildFilters() call with AbstractProductStreamBuilder::enrichCriteria() - please check manually
        return $this->productStreamBuilder->buildFilters($streamId, $context);
    }
}
