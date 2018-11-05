<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

interface Inflector
{
    /** Find a Handler for a Command */
    public function inflect(Command $command): string;
}
