<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * An environment variable name and value.
 */
class EnvVariable extends Client\AbstractObject implements Client\IdAble
{
    /**
     * A unique identifier for this EnvVariable.
     */
    public function id(): EnvVariableId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\EnvVariableId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    public function name(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('name');
        return (string)$this->queryLeaf($leafQueryBuilder, 'name');
    }

    public function value(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('value');
        return (string)$this->queryLeaf($leafQueryBuilder, 'value');
    }
}
