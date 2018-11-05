<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

interface Container
{
    public function make(string $class);
}
