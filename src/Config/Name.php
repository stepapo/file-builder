<?php

declare(strict_types=1);

namespace Stepapo\FileBuilder\Config;

use Stepapo\Utils\Attribute\KeyProperty;
use Stepapo\Utils\Config;


class Name extends Config
{
	#[KeyProperty] public string $name;
	public bool $hide = false;
}