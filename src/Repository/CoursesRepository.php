<?php

namespace Saccas\HitobitoApi\Repository;

class CoursesRepository extends \Saccas\JsonApiModel\JsonApiRepository
{
	protected string $endpoint = '/api/events';
	protected string $modelClass = '\Saccas\HitobitoApi\Model\Courses';
}
