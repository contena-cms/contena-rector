<?php declare(strict_types=1);

namespace Contena\Core\Framework\DataAbstractionLayer\Search;

use Contena\Core\Framework\DataAbstractionLayer\EntityCollection;

class EntitySearchResult
{
    public function getEntities(): EntityCollection
    {
        return new EntityCollection();
    }
}
