<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventGuests>
 */
class EventGuestsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_guests';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventGuests';
}
