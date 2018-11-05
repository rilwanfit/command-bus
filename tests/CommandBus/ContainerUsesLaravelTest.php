<?php
declare(strict_types=1);

namespace Mhr\Tests\CommandBus;

use stdClass;
use PHPUnit\Framework\TestCase;
use Illuminate\Container\Container;
use Mhr\CommandBus\ContainerUsesLaravel;

class ContainerUsesLaravelTest extends TestCase
{
    private $container;

    public function setUp()
    {
        $container = new Container;
        $container->bind('Cat', function () {
            $cat = new stdClass;
            $cat->name = 'foo';
            return $cat;
        });

        $this->container = new ContainerUsesLaravel($container);
    }
    /** @test */
    public function should_make_class_from_container()
    {
        $class = $this->container->make('Cat');
        $this->assertInstanceOf(stdClass::class, $class);
        $this->assertEquals('foo', $class->name);
    }
}
