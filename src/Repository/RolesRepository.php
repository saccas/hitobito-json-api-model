<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @implements \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Roles>
 */
class RolesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/roles';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Roles';
}
