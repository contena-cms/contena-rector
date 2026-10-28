<?php

namespace Contena\Tests\Rector\Fixture;

use Contena\Core\Framework\DataAbstractionLayer\Entity;
use Contena\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;

function skipNotDelegatedMethods(EntitySearchResult $result, Entity $entity): int
{
    $result->add($entity);

    return $result->getTotal();
}

?>
