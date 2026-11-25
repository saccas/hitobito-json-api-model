<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Qualifications>
 */
class QualificationsRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/qualifications';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Qualifications';
}
