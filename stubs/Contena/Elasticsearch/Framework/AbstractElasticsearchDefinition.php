<?php declare(strict_types=1);

namespace Contena\Elasticsearch\Framework;

use OpenSearchDSL\Query\Compound\BoolQuery;
use Contena\Core\Framework\Context;
use Contena\Core\Framework\DataAbstractionLayer\Search\Criteria;

abstract class AbstractElasticsearchDefinition
{
    abstract public function buildTermQuery(Context $context, Criteria $criteria): BoolQuery;
}
