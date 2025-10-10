<?php

declare(strict_types=1);

namespace Stepapo\FileBuilder\Config;


class PromotedParameter extends Parameter
{
	public bool $final = false;
	public ?string $visibility = 'public';
	public bool $hide = false;
}