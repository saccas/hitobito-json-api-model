<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Dates>
 */
class DatesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/dates';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Dates';
}
