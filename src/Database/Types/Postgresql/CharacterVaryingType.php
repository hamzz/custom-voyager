<?php

namespace JMI\Voyager\Database\Types\Postgresql;

use JMI\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
