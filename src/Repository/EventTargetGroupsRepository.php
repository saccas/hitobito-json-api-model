<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventTargetGroups>
 */
class EventTargetGroupsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_target_groups';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventTargetGroups';
}
