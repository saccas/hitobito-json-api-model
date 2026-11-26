<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\EventRoles>
 */
class EventRolesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/event_roles';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\EventRoles';
}
