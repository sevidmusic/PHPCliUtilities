<?php

declare(strict_types=1);

namespace Darling\PHPCliUtilities\tests;

use Darling\PHPUnitTestUtilities\traits\PHPUnitConfigurationTests;
use Darling\PHPUnitTestUtilities\traits\PHPUnitRandomValues;
use Darling\PHPUnitTestUtilities\traits\PHPUnitTestMessages;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

/**
 * Defines common methods that may be useful to all roady test
 * classes.
 *
 * All roady test classes must extend from this class.
 *
 * @internal
 */
#[CoversNothing]
class PHPCliUtilitiesTest extends TestCase
{
    use PHPUnitConfigurationTests;
    use PHPUnitRandomValues;
    use PHPUnitTestMessages;
}
