<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Tours>
 */
class ToursRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/tours';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Tours';
}
