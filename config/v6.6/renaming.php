<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\ClassConstFetch\RenameClassConstFetchRector;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\Rector\StaticCall\RenameStaticMethodRector;
use Rector\Renaming\ValueObject\MethodCallRename;
use Rector\Renaming\ValueObject\RenameClassAndConstFetch;
use Rector\Renaming\ValueObject\RenameStaticMethod;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../config.php');

    $rectorConfig->ruleWithConfiguration(
        RenameMethodRector::class,
        [
            new MethodCallRename('Contena\Elasticsearch\Framework\Indexing\IndexerOffset', 'setNextDefinition', 'selectNextDefinition'),
            new MethodCallRename('Contena\Elasticsearch\Framework\Indexing\IndexerOffset', 'setNextLanguage', 'selectNextLanguage'),
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameStaticMethodRector::class,
        [
            new RenameStaticMethod('Contena\Core\Framework\DataAbstractionLayer\FieldSerializer\JsonFieldSerializer', 'encodeJson', 'Contena\Core\Framework\Util\Json', 'encode'),
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameClassRector::class,
        [
            'Contena\Core\Framework\DataAbstractionLayer\Event\BeforeDeleteEvent' => 'Contena\Core\Framework\DataAbstractionLayer\Event\EntityDeleteEvent',
            'Contena\Core\Framework\Api\Exception\ExceptionFailedException' => 'Contena\Core\Framework\Api\Exception\ExpectationFailedException',
            'Contena\Core\Framework\Adapter\Console\ContenaStyle' => 'Symfony\Component\Console\Style\SymfonyStyle',
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameClassConstFetchRector::class,
        [
            new RenameClassAndConstFetch('Contena\Core\Checkout\Cart', 'CHECKOUT_ORDER_PLACED', 'Contena\Core\Framework\Event\BusinessEvents', 'CHECKOUT_ORDER_PLACED'),
            new RenameClassAndConstFetch('Contena\Elasticsearch\Product\ElasticsearchProductDefinition', 'KEYWORD_FIELD', 'Contena\Elasticsearch\Framework\AbstractElasticsearchDefinition', 'KEYWORD_FIELD'),
            new RenameClassAndConstFetch('Contena\Elasticsearch\Product\ElasticsearchProductDefinition', 'BOOLEAN_FIELD', 'Contena\Elasticsearch\Framework\AbstractElasticsearchDefinition', 'BOOLEAN_FIELD'),
            new RenameClassAndConstFetch('Contena\Elasticsearch\Product\ElasticsearchProductDefinition', 'FLOAT_FIELD', 'Contena\Elasticsearch\Framework\AbstractElasticsearchDefinition', 'FLOAT_FIELD'),
            new RenameClassAndConstFetch('Contena\Elasticsearch\Product\ElasticsearchProductDefinition', 'INT_FIELD', 'Contena\Elasticsearch\Framework\AbstractElasticsearchDefinition', 'INT_FIELD'),
            new RenameClassAndConstFetch('Contena\Elasticsearch\Product\ElasticsearchProductDefinition', 'SEARCH_FIELD', 'Contena\Elasticsearch\Framework\AbstractElasticsearchDefinition', 'SEARCH_FIELD'),
        ],
    );
};
