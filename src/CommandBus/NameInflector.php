<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

class NameInflector implements Inflector
{
    public function inflect(Command $command): string
    {
        return str_replace('Command', 'Handler', get_class($command));
    }
}
