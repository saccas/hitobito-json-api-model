<?php

namespace Saccas\HitobitoApi\Repository;

class GroupsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/groups';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Groups';
}
