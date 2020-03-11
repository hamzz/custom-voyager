<?php

namespace JMI\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JMI\Voyager\Database\Types\Type;

class MultiPolygonType extends Type
{
    const NAME = 'multipolygon';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'multipolygon';
    }
}
