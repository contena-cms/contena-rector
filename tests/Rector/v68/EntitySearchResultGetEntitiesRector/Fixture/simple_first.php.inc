<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;

function simpleFirst(EntitySearchResult $result): ?object
{
    return $result->first();
}

?>
-----
<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;

function simpleFirst(EntitySearchResult $result): ?object
{
    return $result->getEntities()->first();
}

?>
