<?php

namespace Saccas\HitobitoApi\Repository;

class RolesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/roles';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Roles';
}
