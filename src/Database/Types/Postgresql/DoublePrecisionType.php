<?php

namespace JMI\Voyager\Database\Types\Postgresql;

use JMI\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
