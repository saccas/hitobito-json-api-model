<?php

namespace Saccas\HitobitoApi\Repository;

/**
 * @extends \Saccas\JsonApiModel\JsonApiRepository<\Saccas\HitobitoApi\Model\Courses>
 */
class CoursesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/events';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Courses';
}
