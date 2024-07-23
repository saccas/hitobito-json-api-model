<?php

namespace Saccas\HitobitoApi\Repository;

class DatesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/dates';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Dates';
}
