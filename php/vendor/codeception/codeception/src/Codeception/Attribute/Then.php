<?php

declare(strict_types=1);

namespace Codeception\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
final class Then
{
    public function __construct(string $description)
    {
    }
}
