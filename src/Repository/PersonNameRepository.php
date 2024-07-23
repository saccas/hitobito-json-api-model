<?php

namespace Saccas\HitobitoApi\Repository;

class PersonNameRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/person-name';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\PersonName';
}
