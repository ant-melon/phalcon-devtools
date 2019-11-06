<?php
declare(strict_types=1);

namespace Phalcon\DevTools\Tests\Unit\Builder;

use Codeception\Test\Unit;
use Phalcon\DevTools\Builder\Component;
use Phalcon\DevTools\Builder\Module;

final class ModuleTest extends Unit
{
    public function testConstruct(): void
    {
        $class = $this->createMock(Module::class);

        $this->assertInstanceOf(Component::class, $class);
    }
}
