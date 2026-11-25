<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventTechnicalRequirements>
 */
class EventTechnicalRequirementsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_technical_requirements';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventTechnicalRequirements';
}
