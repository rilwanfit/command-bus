<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

interface CommandHandler
{
    public function handle(Command $command);
}
