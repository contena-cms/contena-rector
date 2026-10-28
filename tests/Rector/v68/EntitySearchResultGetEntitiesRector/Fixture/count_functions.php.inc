<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;

function countFunctions(EntitySearchResult $result): array
{
    $count = count($result);

    return [$count, iterator_to_array($result)];
}

?>
-----
<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;

function countFunctions(EntitySearchResult $result): array
{
    $count = count($result->getEntities());

    return [$count, iterator_to_array($result->getEntities())];
}

?>
