<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

interface CommandBus
{
    public function dispatch(Command $command);
    //public function subscribe(CommandHandler $handler);
}
