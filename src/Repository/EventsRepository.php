<?php

namespace Saccas\HitobitoApi\Repository;

class EventsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/events';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Events';
}
