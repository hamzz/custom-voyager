<?php

namespace JMI\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JMI\Voyager\Database\Types\Type;

class GeometryCollectionType extends Type
{
    const NAME = 'geometrycollection';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'geometrycollection';
    }
}
