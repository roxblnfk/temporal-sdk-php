<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Meta;

interface FactoryInterface
{
    /**
     * @var int
     */
    public const PREFER_NATIVE = 0x00;

    /**
     * @var int
     */
    public const PREFER_DOCTRINE = 0x01;

    /**
     * @var int
     */
    public const CUSTOM_READER = 0x10;

    /**
     * @param int $type
     * @return ReaderInterface
     */
    public function create(int $type = self::PREFER_NATIVE): ReaderInterface;
}