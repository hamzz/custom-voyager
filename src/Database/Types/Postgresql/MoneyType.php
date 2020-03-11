<?php

namespace JMI\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JMI\Voyager\Database\Types\Type;

class MoneyType extends Type
{
    const NAME = 'money';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'money';
    }
}
