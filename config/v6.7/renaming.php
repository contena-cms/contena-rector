<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\ClassConstFetch\RenameClassConstFetchRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\RenameClassAndConstFetch;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../config.php');

    $rectorConfig->ruleWithConfiguration(
        RenameClassRector::class,
        [
            'Contena\Core\Framework\Adapter\Console\ContenaStyle' => 'Symfony\Component\Console\Style\SymfonyStyle',
        ],
    );

    $rectorConfig->ruleWithConfiguration(
        RenameClassConstFetchRector::class,
        [
            new RenameClassAndConstFetch('Contena\Core\Content\MailTemplate\Subscriber\MailSendSubscriberConfig', 'MAIL_CONFIG_EXTENSION', 'Contena\Core\Content\Flow\Dispatching\Action\SendMailAction', 'MAIL_CONFIG_EXTENSION'),
            new RenameClassAndConstFetch('Contena\Core\Content\MailTemplate\Subscriber\MailSendSubscriberConfig', 'ACTION_NAME', 'Contena\Core\Content\Flow\Dispatching\Action\SendMailAction', 'ACTION_NAME'),

            new RenameClassAndConstFetch('Contena\Core\Content\MailTemplate\MailTemplateActions', 'MAIL_TEMPLATE_MAIL_SEND_ACTION', 'Contena\Core\Content\Flow\Dispatching\Action\SendMailAction', 'ACTION_NAME'),

            new RenameClassAndConstFetch('Contena\Core\Framework\Adapter\Cache\Http\CacheResponseSubscriber', 'STATE_LOGGED_IN', 'Contena\Core\Framework\Adapter\Cache\CacheStateSubscriber', 'STATE_LOGGED_IN'),
            new RenameClassAndConstFetch('Contena\Core\Framework\Adapter\Cache\Http\CacheResponseSubscriber', 'STATE_CART_FILLED', 'Contena\Core\Framework\Adapter\Cache\CacheStateSubscriber', 'STATE_CART_FILLED'),

            new RenameClassAndConstFetch('Contena\Core\Framework\Adapter\Cache\Http\CacheResponseSubscriber', 'CURRENCY_COOKIE', 'Contena\Core\Framework\Adapter\Cache\Http\HttpCacheKeyGenerator', 'CURRENCY_COOKIE'),
            new RenameClassAndConstFetch('Contena\Core\Framework\Adapter\Cache\Http\CacheResponseSubscriber', 'CONTEXT_CACHE_COOKIE', 'Contena\Core\Framework\Adapter\Cache\Http\HttpCacheKeyGenerator', 'CONTEXT_CACHE_COOKIE'),
            new RenameClassAndConstFetch('Contena\Core\Framework\Adapter\Cache\Http\CacheResponseSubscriber', 'SYSTEM_STATE_COOKIE', 'Contena\Core\Framework\Adapter\Cache\Http\HttpCacheKeyGenerator', 'SYSTEM_STATE_COOKIE'),
            new RenameClassAndConstFetch('Contena\Core\Framework\Adapter\Cache\Http\CacheResponseSubscriber', 'INVALIDATION_STATES_HEADER', 'Contena\Core\Framework\Adapter\Cache\Http\HttpCacheKeyGenerator', 'INVALIDATION_STATES_HEADER'),
        ],
    );
};
