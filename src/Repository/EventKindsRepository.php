<?php

namespace Saccas\HitobitoApi\Repository;

class EventKindsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_kinds';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventKinds';
}
