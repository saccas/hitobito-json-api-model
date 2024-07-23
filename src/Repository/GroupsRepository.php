<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @implements \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Groups>
 */
class GroupsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/groups';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Groups';
}
