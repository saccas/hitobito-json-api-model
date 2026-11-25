<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventActivities>
 */
class EventActivitiesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_activities';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventActivities';
}
