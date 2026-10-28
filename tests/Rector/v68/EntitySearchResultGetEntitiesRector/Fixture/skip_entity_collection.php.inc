<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Framework\DataAbstractionLayer\EntityCollection;

function skipEntityCollection(EntityCollection $collection): array
{
    $collection->first();
    $count = count($collection);

    foreach ($collection as $entity) {
        var_dump($entity);
    }

    return [$count, $collection->getIds()];
}

?>
