<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventParticipations>
 */
class EventParticipationsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_participations';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventParticipations';
}
