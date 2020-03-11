<?php

namespace JMI\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JMI\Voyager\Database\Types\Type;

class LongBlobType extends Type
{
    const NAME = 'longblob';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'longblob';
    }
}
