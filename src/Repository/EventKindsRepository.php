<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventKinds>
 */
class EventKindsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_kinds';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventKinds';
}
