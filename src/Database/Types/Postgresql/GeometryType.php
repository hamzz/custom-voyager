<?php

namespace JMI\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JMI\Voyager\Database\Types\Type;

class GeometryType extends Type
{
    const NAME = 'geometry';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'geometry';
    }
}
