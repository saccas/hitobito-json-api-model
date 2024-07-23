<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @implements \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\People>
 */
class PeopleRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/people';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\People';
}
