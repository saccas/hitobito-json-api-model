<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\PersonName>
 */
class PersonNameRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/person-name';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\PersonName';
}
