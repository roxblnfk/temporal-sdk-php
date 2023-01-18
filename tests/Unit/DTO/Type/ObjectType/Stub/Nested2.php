<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Tests\Unit\DTO\Type\ObjectType\Stub;

final class Nested2
{
    public function __construct(
        public Nested3 $child,
    ) {
    }
}
