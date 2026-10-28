<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Content\Product\SalesChannel\Listing\ProductListingResult;

function subclassResult(ProductListingResult $result): ?object
{
    return $result->first();
}

?>
-----
<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Content\Product\SalesChannel\Listing\ProductListingResult;

function subclassResult(ProductListingResult $result): ?object
{
    return $result->getEntities()->first();
}

?>
