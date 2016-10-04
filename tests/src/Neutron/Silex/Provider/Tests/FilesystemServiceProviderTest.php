<?php

namespace Neutron\Silex\Provider\Tests;

use Neutron\Silex\Provider\FilesystemServiceProvider;
use Pimple\Container;

class FilesystemServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $container = new Container();
        $container->register(new FilesystemServiceProvider());

        $this->assertInstanceOf('Symfony\\Component\\Filesystem\\Filesystem', $container['filesystem']);
    }
}
