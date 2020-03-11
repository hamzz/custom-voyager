<?php

namespace JMI\Voyager\Database\Types\Postgresql;

use JMI\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
