<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\QualificationKinds>
 */
class QualificationKindsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/qualification_kinds';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\QualificationKinds';
}
