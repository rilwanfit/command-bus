<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

interface CommandHandlerLocator
{
    public function getHandler(Command $command): CommandHandler;
}
