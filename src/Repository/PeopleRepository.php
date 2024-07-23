<?php

namespace Saccas\HitobitoApi\Repository;

class PeopleRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/people';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\People';
}
