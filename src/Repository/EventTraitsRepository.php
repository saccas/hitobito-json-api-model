<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventTraits>
 */
class EventTraitsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_traits';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventTraits';
}
