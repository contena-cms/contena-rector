<?php

declare(strict_types=1);

use Contena\Rector\Rule\ClassMethod\ChangeReturnTypeOfClassMethod;
use Contena\Rector\Rule\ClassMethod\ChangeReturnTypeOfClassMethodRector;
use PhpParser\Node\Name\FullyQualified;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../config/config_test.php');
    $rectorConfig->ruleWithConfiguration(ChangeReturnTypeOfClassMethodRector::class, [
        new ChangeReturnTypeOfClassMethod('\Contena\Elasticsearch\Framework\AbstractElasticsearchDefinition', 'buildTermQuery', new FullyQualified('OpenSearchDSL\BuilderInterface')),
    ]);
};
