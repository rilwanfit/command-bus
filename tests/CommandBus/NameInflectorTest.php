<?php
declare(strict_types=1);

namespace Mhr\Tests\CommandBus;

use PHPUnit\Framework\TestCase;
use Mhr\CommandBus\NameInflector;
use Mhr\CommandBus\ExampleCommand;
use Mhr\CommandBus\ExampleHandler;

class NameInflectorTest extends TestCase
{
    /** @test */
    public function should_get_handler_name_from_command()
    {
        $handler = (new NameInflector())->inflect(new ExampleCommand());
        $this->assertEquals(ExampleHandler::class, $handler);
    }
}
