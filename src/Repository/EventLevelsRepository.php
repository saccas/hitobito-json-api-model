<?php

namespace Saccas\HitobitoApi\Repository;

class EventLevelsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_levels';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventLevels';
}
