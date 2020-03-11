<?php

namespace JMI\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JMI\Voyager\Database\Types\Type;

class JsonbType extends Type
{
    const NAME = 'jsonb';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'jsonb';
    }
}
