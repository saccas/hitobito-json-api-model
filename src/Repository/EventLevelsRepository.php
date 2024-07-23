<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @implements \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventLevels>
 */
class EventLevelsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_levels';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventLevels';
}
