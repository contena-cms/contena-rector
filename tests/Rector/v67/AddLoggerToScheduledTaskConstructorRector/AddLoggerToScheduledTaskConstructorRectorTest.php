<?php declare(strict_types=1);

namespace Contena\Rector\Tests\Rector\v67\AddLoggerToScheduledTaskConstructorRector;

use PHPUnit\Framework\Attributes\CoversClass;
use Contena\Rector\Rule\v67\AddLoggerToScheduledTaskConstructorRector;
use Contena\Rector\Tests\Rector\AbstractContenaRectorTestCase;

/**
 * @internal
 */
#[CoversClass(AddLoggerToScheduledTaskConstructorRector::class)]
final class AddLoggerToScheduledTaskConstructorRectorTest extends AbstractContenaRectorTestCase {}
