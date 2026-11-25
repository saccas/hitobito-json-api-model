<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventFitnessRequirements>
 */
class EventFitnessRequirementsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_fitness_requirements';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventFitnessRequirements';
}
