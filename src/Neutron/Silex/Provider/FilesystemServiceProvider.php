<?php

/*
 * This file is part of Filesystem Service Provider.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Neutron\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Filesystem\Filesystem;

class FilesystemServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['filesystem'] = function() {
            return new Filesystem();
        };
    }
}
