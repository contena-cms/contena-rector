<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Transform\Rector\New_\NewToStaticCallRector;
use Rector\Transform\ValueObject\NewToStaticCall;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../config.php');

    $rectorConfig->ruleWithConfiguration(
        NewToStaticCallRector::class,
        [
            // RoutingException
            new NewToStaticCall('Contena\Core\Framework\Routing\Exception\InvalidRequestParameterException', 'Contena\Core\Framework\Routing\RoutingException', 'invalidRequestParameter'),
            new NewToStaticCall('Contena\Core\Framework\Routing\Exception\MissingRequestParameterException', 'Contena\Core\Framework\Routing\RoutingException', 'missingRequestParameter'),
            new NewToStaticCall('Contena\Core\Framework\Routing\Exception\LanguageNotFoundException', 'Contena\Core\Framework\Routing\RoutingException', 'languageNotFound'),

            // DataAbstractionLayerException
            new NewToStaticCall('Contena\Core\Framework\DataAbstractionLayer\Exception\InvalidSerializerFieldException', 'Contena\Core\Framework\DataAbstractionLayer\DataAbstractionLayerException', 'invalidSerializerField'),
            new NewToStaticCall('Contena\Core\Framework\DataAbstractionLayer\Exception\VersionMergeAlreadyLockedException', 'Contena\Core\Framework\DataAbstractionLayer\DataAbstractionLayerException', 'versionMergeAlreadyLocked'),

            // ElasticsearchException
            new NewToStaticCall('Contena\Elasticsearch\Exception\UnsupportedElasticsearchDefinitionException', 'Contena\Elasticsearch\ElasticsearchException', 'unsupportedElasticsearchDefinition'),
            new NewToStaticCall('Contena\Elasticsearch\Exception\ElasticsearchIndexingException', 'Contena\Elasticsearch\ElasticsearchException', 'indexingError'),
            new NewToStaticCall('Contena\Elasticsearch\Exception\ServerNotAvailableException', 'Contena\Elasticsearch\ElasticsearchException', 'serverNotAvailable'),

            // ProductExportException
            new NewToStaticCall('Contena\Core\Content\ProductExport\Exception\EmptyExportException', 'Contena\Core\Content\ProductExport\ProductExportException', 'productExportNotFound'),
            new NewToStaticCall('Contena\Core\Content\ProductExport\Exception\RenderFooterException', 'Contena\Core\Content\ProductExport\ProductExportException', 'renderFooterException'),
            new NewToStaticCall('Contena\Core\Content\ProductExport\Exception\RenderHeaderException', 'Contena\Core\Content\ProductExport\ProductExportException', 'renderHeaderException'),
            new NewToStaticCall('Contena\Core\Content\ProductExport\Exception\RenderProductException', 'Contena\Core\Content\ProductExport\ProductExportException', 'renderProductException'),
        ],
    );
};
