<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\Bundle\AsseticBundle\Factory\Resource;

use Assetic\Contracts\Factory\Resource\ResourceInterface;
use Assetic\Factory\Resource\CoalescingDirectoryResource as BaseCoalescingDirectoryResource;

/**
 * Coalesces multiple directories together into one merged resource.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class CoalescingDirectoryResource extends BaseCoalescingDirectoryResource
{
    protected function getRelativeName(ResourceInterface $file, ResourceInterface $directory)
    {
        $name = (string) $file;

        return substr($name, strpos($name, ':'));
    }
}
