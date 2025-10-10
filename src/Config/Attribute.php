<?php

declare(strict_types=1);

namespace Stepapo\FileBuilder\Config;

use Stepapo\Utils\Attribute\KeyProperty;
use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Config;


class Attribute extends Config
{
	#[KeyProperty] public string $name;
	/** @var mixed[] */ #[ToArray] public array $args = [];
	public bool $hide = false;
}